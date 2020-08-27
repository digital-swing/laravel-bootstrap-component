<?php

namespace DigitalSwing\LBC;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BsComponentServiceProvider extends ServiceProvider
{

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // VENDORS
        $this->publishes([
            __DIR__ . '/../config/bs-component.php' => \Roots\config_path('bs-component.php')
        ], 'bs-component');

        // VIEWS
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'bs-component');

        // TRANSLATIONS
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'bs-component');

        // BLADES
        Blade::component('bs-input', \DigitalSwing\LBC\View\Components\Form\Input::class);
        Blade::component('bs-textarea', \DigitalSwing\LBC\View\Components\Form\Textarea::class);
        Blade::component('bs-check-list', \DigitalSwing\LBC\View\Components\Form\CheckList::class);
        Blade::component('bs-select', \DigitalSwing\LBC\View\Components\Form\Select::class);
        Blade::component('bs-input-file', \DigitalSwing\LBC\View\Components\Form\InputFile::class);
        Blade::component('bs-datepicker', \DigitalSwing\LBC\View\Components\Form\Datepicker::class);

        Blade::component('bs-check', \DigitalSwing\LBC\View\Components\Form\Check::class);
        Blade::component('bs-dynamic', \DigitalSwing\LBC\View\Components\Form\Dynamic::class);
        Blade::component('bs-editor', \DigitalSwing\LBC\View\Components\Form\Editor::class);

        Blade::component('bs-alert', \DigitalSwing\LBC\View\Components\Alert::class);
        Blade::component('bs-blockquote', \DigitalSwing\LBC\View\Components\Blockquote::class);
        Blade::component('bs-breadcrumb', \DigitalSwing\LBC\View\Components\Breadcrumb::class);
        Blade::component('bs-card', \DigitalSwing\LBC\View\Components\Card::class);
        Blade::component('bs-figure', \DigitalSwing\LBC\View\Components\Figure::class);
        Blade::component('bs-modal', \DigitalSwing\LBC\View\Components\Modal::class);
        Blade::component('bs-modal-confirm', \DigitalSwing\LBC\View\Components\ModalConfirm::class);
        Blade::component('bs-loading', \DigitalSwing\LBC\View\Components\Loading::class);
        Blade::component('bs-progress', \DigitalSwing\LBC\View\Components\Progress::class);
        Blade::component('bs-toast', \DigitalSwing\LBC\View\Components\Toast::class);
    }
}
