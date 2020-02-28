<?php

Route::group(['prefix' => 'cms','middleware' => 'guest', 'namespace' => 'Sawyerlancer\Auth\Controller'], function ()
{
    Route::post('/register', 'SawyerLancerAuthController@register');
    Route::post('/login', 'SawyerLancerAuthController@login');
});
