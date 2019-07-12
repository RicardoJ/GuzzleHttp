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
Route::get('/projects/{id}/acquisitions/acquisitions' ,'AcquisitionController@showAll');
//provider
Route::get('/projects/{id}/acquisitions/providers' ,'ProviderController@showAll');
//team
Route::get('/projects/{id}/resources/teams' ,'TeamController@showAll');
//teamMemebers
Route::get('/projects/{id}/resources/teamMembers' ,'TeamMembersController@showAll');
//teamManagement
Route::get('/projects/{id}/resources/teamManagement' ,'TeamManagementController@showAll');
//resources
Route::get('/projects/{id}/resources/resources' ,'ResourcesController@showAll');
//activies
Route::get('/projects/{id}/resources/activities' ,'ActivitiesController@showAll');
    