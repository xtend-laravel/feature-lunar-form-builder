<?php

namespace XtendLunar\Features\FormBuilder\Fields;

use Closure;
use XtendLunar\Features\FormBuilder\Base\InputField;

class Select extends InputField
{
    /**
     * Whether or not the input has an error to show.
     *
     * @var bool
     */
    public bool $error = false;

    /**
     * The options for the select.
     *
     * @var array
     */
    public array $options = [];

    /**
     * The relationship for the select.
     *
     * @var string
     */
    public string $relationship = '';

    /**
     * Whether or not the select is multiple.
     *
     * @var bool
     */
    public bool $multiple = false;

    /**
     * Initialise the component.
     *
     * @param  bool  $error
     */
    public function __construct(string $name, $error = false)
    {
        parent::__construct($name);

        $this->error = $error;
    }

    public function options(array $options, bool $relationship = false): static
    {
        $this->options = $options;

        return $this;
    }

    public function relationship(string $relationship): static
    {
        $this->relationship = $relationship;

        return $this;
    }

    public function multiple(bool $multiple = true): static
    {
        $this->multiple = $multiple;

        return $this;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('adminhub::components.input.select');
    }
}
