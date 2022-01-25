<?php

namespace Components\c8688ad7a5c08439eac4a6c8642226d55\HomeMedia;

use App\Utilities\ExtendedComponent;

class c6f81155f0de84ad2965c8f75db5fe97a extends ExtendedComponent
{
    protected string $uuid = "c6f81155f0de84ad2965c8f75db5fe97a";
    protected string $group_id = "c8688ad7a5c08439eac4a6c8642226d55";
    protected string $name = "HomeMedia";
    protected string $description = "Media section in home page";
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