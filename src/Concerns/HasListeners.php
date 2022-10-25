<?php

namespace XtendLunar\Features\FormBuilder\Concerns;

trait HasListeners
{
    public function getListeners()
    {
        return array_merge($this->listeners, [
            'onCreateForm' => 'create',
            'onUpdateForm' => 'update',
        ]);
    }
}
