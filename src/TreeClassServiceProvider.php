<?php
/**
 * Created by PhpStorm.
 * User: deepin
 * Date: 20-4-13
 * Time: 下午4:40
 */

namespace James\TreeClass;

use Illuminate\Support\ServiceProvider;

class TreeClassServiceProvider extends ServiceProvider
{

    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('tree_class', function () {
            return new TreeClass();
        });
    }
}