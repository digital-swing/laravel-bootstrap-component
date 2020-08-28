<?php

namespace DigitalSwing\LBC;

use Roots\Acorn\View\ViewServiceProvider;
use DigitalSwing\LBC\View\Compilers\RootsBladeCompiler;
use Illuminate\View\Engines\CompilerEngine;

class RootsBladeCompilerViewServiceProvider extends ViewServiceProvider
{
    public function registerBladeEngine($resolver)
    {
        $this->app->singleton('blade.compiler', function () {
            return new RootsBladeCompiler(
                $this->app['files'],
                $this->app['config']['view.compiled']
            );
        });

        $resolver->register('blade', function () {
            return new CompilerEngine($this->app['blade.compiler']);
        });
    }
}
