<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Setting;
use App\Admin;
use App\Social;
use App\About;
use App\Language;
use Session;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        $setting = Setting::first();
        $adminprofile = Admin::first();
        $socials = Social::all();
        $abouts = About::first();
        $langs = Language::all();


        View::composer('*', function ($view) {
            $view->with('theme', session()->get('theme'));
            $view->with('themecolor', session()->get('color'));
            $view->with('homeVersion', session()->get('homeVersion'));

            if (session()->has('lang')) {
                $currentLang = Language::where('code', session()->get('lang'))->first();

                $view->with('currentLang', $currentLang);

              } else {
                $currentLang = Language::where('is_default', 1)->first();
                $view->with('currentLang', $currentLang);
              }
        });

        View::share('setting', $setting);
        View::share('adminprofile', $adminprofile);
        View::share('socials', $socials);
        View::share('abouts', $abouts);
        View::share('langs', $langs);

    }
}


//basicinfo
