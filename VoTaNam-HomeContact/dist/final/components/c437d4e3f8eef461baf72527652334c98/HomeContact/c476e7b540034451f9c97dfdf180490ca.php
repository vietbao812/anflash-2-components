<?php

namespace Components\c437d4e3f8eef461baf72527652334c98\HomeContact;

use App\Utilities\ExtendedComponent;

class c476e7b540034451f9c97dfdf180490ca extends ExtendedComponent
{
    protected string $uuid = "c476e7b540034451f9c97dfdf180490ca";
    protected string $group_id = "c437d4e3f8eef461baf72527652334c98";
    protected string $name = "HomeContact";
    protected string $description = "Contact section in home page";
    protected array $variables = [];
    protected array $input_types = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        error_log("Hello world");
    }
}