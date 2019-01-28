<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Facades\Tests\Setup\ProjectFactory;
use Tests\TestCase;

class ActivityFeedTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function creating_a_project_records_activity()
    {
        $project = ProjectFactory::create();

        $this->assertCount(1, $project->activity);
        $this->assertEquals('created', $project->activity[0]->description);
    }

    /** @test */
    public function updating_a_project_records_activity()
    {
        $project = ProjectFactory::create();

        $project->update(['title' => 'Changed']);

        $this->assertCount(2, $project->activity);
        $this->assertEquals('updated', $project->activity->last()->description);
    }

    /** @test */
    public function creating_a_new_task_records_project_activity()
    {
        $project = ProjectFactory::create();

        $project->addTask('Some task');

        $this->assertCount(2, $project->activity);
        $this->assertEquals('created_task', $project->activity->last()->description);
    }

    /** @test */
    public function completing_a_new_task_records_project_activity()
    {
        $project = ProjectFactory::withTasks(1)->create();

        $this->actingAs($project->owner)
            ->patch($project->tasks[0]->path(), [
            'body' => 'foobar',
            'completed' => true
        ]);

        $this->assertCount(3, $project->activity);
        $this->assertEquals('completed_task', $project->activity->last()->description);
    }
}
