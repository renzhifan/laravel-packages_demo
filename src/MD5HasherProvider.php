<?php

namespace Renzhifan\hasher;

use function foo\func;
use Illuminate\Support\ServiceProvider;

class MD5HasherProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('md5Hash',function (){
            return new MD5Hasher();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
