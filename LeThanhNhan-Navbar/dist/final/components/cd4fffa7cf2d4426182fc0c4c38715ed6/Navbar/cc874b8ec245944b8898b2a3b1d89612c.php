<?php

namespace Components\cd4fffa7cf2d4426182fc0c4c38715ed6\Navbar;

use App\Utilities\ExtendedComponent;

class cc874b8ec245944b8898b2a3b1d89612c extends ExtendedComponent
{
    protected string $uuid = "cc874b8ec245944b8898b2a3b1d89612c";
    protected string $group_id = "cd4fffa7cf2d4426182fc0c4c38715ed6";
    protected string $name = "Navbar";
    protected string $description = "Navbar";
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