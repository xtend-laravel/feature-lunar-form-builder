<?php

namespace XtendLunar\Features\FormBuilder;

use CodeLabX\XtendLaravel\Base\XtendFeatureProvider;
use Livewire\Livewire;
use XtendLunar\Features\FormBuilder\Livewire\Components\Forms\ChannelForm;
use XtendLunar\Features\FormBuilder\Livewire\Components\Forms\CustomerDetailForm;
use XtendLunar\Features\FormBuilder\Livewire\Components\Forms\ProfileForm;

class FormBuilderProvider extends XtendFeatureProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'adminhub');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'adminhub');
    }

    public function boot()
    {
        $this->registerFormComponents();
    }

    protected function registerFormComponents(): void
    {
        Livewire::component('hub.components.forms.channel-form', ChannelForm::class);
        Livewire::component('hub.components.forms.customer-detail-form', CustomerDetailForm::class);
        Livewire::component('hub.components.forms.profile-form', ProfileForm::class);
    }
}
