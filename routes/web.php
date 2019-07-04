<?php

Route::get('/projects' ,'ProjectsController@index');
Route::get('/projects/{id}/integration/planning' ,'PlanningController@index');


    