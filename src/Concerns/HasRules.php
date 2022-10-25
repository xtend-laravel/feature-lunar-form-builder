<?php

namespace XtendLunar\Features\FormBuilder\Concerns;

trait HasRules
{
    /**
     * Returns validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'model.name' => 'required|string|max:255',
        ];
    }
}
