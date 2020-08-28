<?php

namespace DigitalSwing\LBC\View\Components;

use Roots\Acorn\View\Component;

use function Roots\view;

class Alert extends Component
{
    /**
     * The color of the alert.
     *
     * @var string
     */
    public $color;

    /**
     * Has a close button.
     *
     * @var boolean
     */
    public $closable;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = 'primary', $closable = false)
    {
        $this->color    = $color;
        $this->closable = $closable;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('bs-component::alert');
    }
}
