<?php

Route::get('/projects' ,'ProjectsController@showAll');
Route::get('/projects/{id}/integration/planning' ,'PlanningController@showAll');


    