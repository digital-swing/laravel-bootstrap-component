<?php

namespace DigitalSwing\LBC\View\Components\Form;

use Illuminate\View\Component;
use Illuminate\Support\Str;
use function Roots\view;


class InputFile extends Component
{
    /**
     * The label of the input.
     *
     * @var string
     */
    public $label;

    /**
     * The name of the input.
     *
     * @var string
     */
    public $name;

    /**
     * The placeholder of the input.
     *
     * @var string
     */
    public $placeholder;

    /**
     * The button of the input.
     *
     * @var string
     */
    public $button;

    /**
     * The help message of the input.
     *
     * @var string
     */
    public $help;

    /**
     * The size of the input.
     * Can be sm or lg
     *
     * @var string
     */
    public $size;

    /**
     * Is the input disabled.
     *
     * @var boolean
     */
    public $isDisabled;

    /**
     * Is the input required.
     *
     * @var boolean
     */
    public $isRequired;

    /**
     * Is the input is an input group.
     *
     * @var boolean
     */
    public $isInputGroup;

    /**
     * Clean name
     * Exemple: field[] become field
     *
     * @return string
     */
    public $cleanName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = null, $name, $placeholder = null, $button = null, $help  = null, $size = null, $disabled = false, $required = false, $inputGroup = false)
    {
        $this->label        = $label;
        $this->name         = $name;
        $this->placeholder  = is_null($placeholder) ? __('bs-component::button.choose-file') : $placeholder;
        $this->button       = is_null($button) ? __('bs-component::button.browse') : $button;
        $this->help         = $help;
        $this->size         = $size;
        $this->isDisabled   = $disabled;
        $this->isRequired   = $required;
        $this->isInputGroup = $inputGroup;
        $this->cleanName    = array_to_dot($this->name);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('bs-component::form.field-template', ['field' => 'bs-component::form.field.input-file']);
    }
}
