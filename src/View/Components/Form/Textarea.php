<?php

namespace DigitalSwing\LBC\View\Components\Form;

use Roots\Acorn\View\Component;
use Illuminate\Support\Str;
use function Roots\view;

class Textarea extends Component
{
    /**
     * The label of the textarea.
     *
     * @var string
     */
    public $label;

    /**
     * The name of the textarea.
     *
     * @var string
     */
    public $name;

    /**
     * The default value of the textarea.
     *
     * @var string
     */
    public $value;

    /**
     * The placeholder of the textarea.
     *
     * @var string
     */
    public $placeholder;

    /**
     * The help message of the textarea.
     *
     * @var string
     */
    public $help;

    /**
     * Is the textarea readonly.
     *
     * @var boolean
     */
    public $isReadonly;

    /**
     * Is the textarea disabled.
     *
     * @var boolean
     */
    public $isDisabled;

    /**
     * Is the textarea required.
     *
     * @var boolean
     */
    public $isRequired;

    /**
     * Is the textarea is an input group.
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
    public function __construct($label = null, $name, $value = null, $placeholder = null, $help  = null, $readonly = false, $disabled = false, $required = false, $inputGroup = false)
    {
        $this->label        = $label;
        $this->name         = $name;
        $this->value        = $value;
        $this->placeholder  = $placeholder;
        $this->help         = $help;
        $this->isReadonly   = $readonly;
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
        return view('bs-component::form.field-template', ['field' => 'bs-component::form.field.textarea']);
    }
}
