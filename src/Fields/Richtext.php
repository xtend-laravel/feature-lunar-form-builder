<?php

namespace XtendLunar\Features\FormBuilder\Fields;

use XtendLunar\Features\FormBuilder\Base\InputField;

class Richtext extends InputField
{
    /**
     * The initial value.
     *
     * @var string
     */
    public $initialValue = null;

    /**
     * The set of options for the rich text field.
     *
     * @var array
     */
    public array $options = [
        'theme' => 'snow',
    ];

    /**
     * Instantiate the component.
     *
     * @param  string  $initialValue
     */
    public function __construct($initialValue = null, array $options = [])
    {
        $this->initialValue = $initialValue;
        $this->options = array_merge($this->options, $options);
    }

    /**
     * Get a unique instance id.
     *
     * @return string
     */
    protected function getInstanceId()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 25; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('adminhub::components.input.richtext', [
            'instanceId' => $this->getInstanceId(),
        ]);
    }
}
