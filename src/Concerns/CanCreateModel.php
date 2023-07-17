<?php

namespace XtendLunar\Features\FormBuilder\Concerns;

trait CanCreateModel
{
    /**
     * Soft creates a brand.
     *
     * @return void
     */
    public function create()
    {
        $this->validate();
        $this->model->save();
    }

    public function notifyCreate(): void
    {
        $this->notify(
            message: __('adminhub::notifications.model.created', ['model' => class_basename($this->model)]),
            route: $this->getRouteName(),
            routeParams: $this->getRouteParams(),
        );
    }
}
