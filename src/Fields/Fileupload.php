<?php

namespace XtendLunar\Features\FormBuilder\Fields;

use XtendLunar\Features\FormBuilder\Base\InputField;

class Fileupload extends InputField
{
    /**
     * Whether or not the input has an error to show.
     *
     * @var bool
     */
    public bool $error = false;

    /**
     * Specify any filetypes for validation client side.
     *
     * @var array
     */
    public $filetypes = [];

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
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('adminhub::components.input.fileupload');
    }
}
