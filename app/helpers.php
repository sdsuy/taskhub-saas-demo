<?php

if (!function_exists('currentTenant')) {

    function currentTenant()
    {
        if (app()->bound('currentTenant')) {
            return app('currentTenant');
        }

        return \App\Models\Tenant::first();
    }

}
