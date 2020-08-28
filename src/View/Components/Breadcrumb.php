<?php

namespace DigitalSwing\LBC\View\Components;

use Roots\Acorn\View\Component;
use function Roots\view;

class Breadcrumb extends Component
{
    /**
     * The links.
     * Key => Name of the link &  Value => Route name of the link
     *
     * @var array
     */
    public $items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items = null)
    {
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('bs-component::breadcrumb');
    }
}
