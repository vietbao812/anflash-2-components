<?php

namespace Components\c15abc9d74c664ae0a61ecc0c8b3178e3\Footer;

use App\Utilities\ExtendedComponent;

class c2f0000d7793249e5a66c048bc77d164c extends ExtendedComponent
{
    protected string $uuid = "c2f0000d7793249e5a66c048bc77d164c";
    protected string $group_id = "c15abc9d74c664ae0a61ecc0c8b3178e3";
    protected string $name = "Footer";
    protected string $description = "Footer";
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