<?php

Route::get('stats', function () {
    return [
        'series' => 200,
        'lessons' => 1300
    ];
});

Route::get('achievements', function () {
    return [
        [
            'text' => 'Start your engines',
            'description' => 'Earned once you have completed your first Laracasts lesson.'
        ]
    ];
})->middleware('auth:api');
