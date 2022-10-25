<?php

namespace XtendLunar\Features\FormBuilder\Managers;

use Illuminate\Support\Manager;
use XtendLunar\Features\FormBuilder\Concerns\CanResolveFromContainer;

class ImageManager extends Manager
{
    use CanResolveFromContainer;

    public function getDefaultDriver(): string
    {
        return config('lunar.images.driver', 's3');
    }
}
