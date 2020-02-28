<?php

namespace Sawyerlancer\Auth;

use Illuminate\Support\ServiceProvider;

class SawyerLancerAuthServiceProvider extends ServiceProvider
{

    /**
     * загрузка ресурсов
     */
    public function boot()
    {
        /// передача файлов настроек
        $this->publishes([
            __DIR__.'/config/sawyerlancer-auth.php' => config_path('sawyerlancer-auth.php'),
        ]);

        /// передача роутов
        $this->loadRoutesFrom(__DIR__.'/route/auth.php');


    }

    public function register()
    {

        /// обьединение настроек
        $this->mergeConfigFrom(
            __DIR__.'/config/sawyerlancer-auth.php' , 'sawyerlancer-auth'
        );

    }

}