<?php

namespace XtendLunar\Features\FormBuilder\Base;

use Illuminate\View\Component;
use XtendLunar\Features\FormBuilder\Concerns\CanResolveFromContainer;
use XtendLunar\Features\FormBuilder\Concerns\EvaluatesClosures;

abstract class InputField extends Component
{
    use CanResolveFromContainer;
    use EvaluatesClosures;

    public string $name;

    public string $modelName;

    public string $label;

    public bool $required = false;

    public function __construct(string $name)
    {
        $this->modelName = 'model.'.$name;
        $this->name = $name;
    }

    public function required(bool $condition = true): static
    {
        $this->required = $condition;

        return $this;
    }

    public function label(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    abstract public function render();
}
