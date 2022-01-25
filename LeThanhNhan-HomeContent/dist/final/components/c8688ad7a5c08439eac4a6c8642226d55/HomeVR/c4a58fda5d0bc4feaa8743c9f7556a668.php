<?php

namespace Components\c8688ad7a5c08439eac4a6c8642226d55\HomeVR;

use App\Utilities\ExtendedComponent;

class c4a58fda5d0bc4feaa8743c9f7556a668 extends ExtendedComponent
{
    protected string $uuid = "c4a58fda5d0bc4feaa8743c9f7556a668";
    protected string $group_id = "c8688ad7a5c08439eac4a6c8642226d55";
    protected string $name = "HomeVR";
    protected string $description = "VR section in home page";
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
        return view("$this->group_id.$this->name.$this->uuid");
    }
}