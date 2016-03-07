<?php namespace MyTeachMe\Providers;
//TODO => Service provider para exteder el service provider html de laravel

use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use MyTeachMe\Components\HtmlBuilder;

class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{

    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app->bindShared('html', function($app)
        {
            return new HtmlBuilder($app['url'],$app['config'],$app['view']);
        });
    }





}