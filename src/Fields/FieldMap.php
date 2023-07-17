<?php

namespace XtendLunar\Features\FormBuilder\Fields;

use XtendLunar\Features\FormBuilder\Base\InputField;
use XtendLunar\Features\FormBuilder\Concerns\CanResolveFromContainer;

class FieldMap extends InputField
{
    use CanResolveFromContainer;

    public array $fieldMap = [];

    /**
     * Initialise the component.
     *
     * @param  bool  $error
     */
    public function __construct(string $name, $error = false, $filetypes = [])
    {
        parent::__construct($name);

        $this->error = $error;
        $this->filetypes = $filetypes;

        $this->modelName = $name;
        $this->name = $name;
    }

    public function fieldMap(array $fieldMap): static
    {
        $this->fieldMap = $fieldMap;

        return $this;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('adminhub::components.input.field-map');
    }
}
