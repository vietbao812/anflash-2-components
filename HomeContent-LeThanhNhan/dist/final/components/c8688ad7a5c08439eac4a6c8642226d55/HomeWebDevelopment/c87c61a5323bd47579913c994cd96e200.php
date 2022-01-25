<?php

namespace Components\c8688ad7a5c08439eac4a6c8642226d55\HomeWebDevelopment;

use App\Utilities\ExtendedComponent;

class c87c61a5323bd47579913c994cd96e200 extends ExtendedComponent
{
    protected string $uuid = "c87c61a5323bd47579913c994cd96e200";
    protected string $group_id = "c8688ad7a5c08439eac4a6c8642226d55";
    protected string $name = "HomeWebDevelopment";
    protected string $description = "Web development section in home page";
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