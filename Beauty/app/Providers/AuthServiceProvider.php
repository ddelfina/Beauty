<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Offer' => 'App\Policies\OfferPolicy', 
         'App\User' => 'App\Policies\UserPolicy',
         'App\Answer'=>'App\Policies\AnswerPolicy',
         'App\Group'=>'App\Policies\GroupPolicy'         
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
