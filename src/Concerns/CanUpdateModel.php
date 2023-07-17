<?php

namespace XtendLunar\Features\FormBuilder\Concerns;

use Illuminate\Database\Eloquent\Model;
use Lunar\Hub\Http\Livewire\Traits\Notifies;

trait CanUpdateModel
{
    use Notifies;

    public function getMediaModel(): Model
    {
        return $this->model;
    }

    public function getHasUrlsModel(): Model
    {
        return $this->model;
    }

    public function update()
    {
        $this->validate();
        $this->model->save();

        if ($this->model->isRelation('media')) {
            $this->updateImages();
        }

        if ($this->model->isRelation('urls')) {
            $this->saveUrls();
        }
    }

    public function notifyUpdate(): void
    {
        $this->notify(
            message: __('adminhub::notifications.model.updated', ['model' => class_basename($this->model)]),
            route: $this->getRouteName(),
            routeParams: $this->getRouteParams(),
        );
    }
}
