<?php
//projects
Route::get('/projects' ,'ProjectsController@showAll');
//planning
Route::get('/projects/{id}/integration/planning' ,'PlanningController@showAll');
//Risk
Route::get('/projects/{id}/integration/risks' ,'RiskController@showAll');
//configOne
Route::get('/projects/{id}/integration/configOne' ,'ConfigOneController@showAll');
//configTwo
Route::get('/projects/{id}/integration/configTwo' ,'ConfigTwoController@showAll');
//lessonLearned
Route::get('/projects/{id}/integration/learnedLessons' ,'LearnedLessonsController@showAll');
//changes
Route::get('/projects/{id}/integration/changes' ,'ChangeController@showAll');
//acquisitions

//provider

//team

//teamMemebers

//teamManagement

//resources

//activies

    