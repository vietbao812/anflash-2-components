<?php

namespace Components\c8688ad7a5c08439eac4a6c8642226d55\HomeGraphicsAndBranding;

use App\Utilities\ExtendedComponent;

class c818aa2d9118d4615b66e80278293208b extends ExtendedComponent
{
    protected string $uuid = "c818aa2d9118d4615b66e80278293208b";
    protected string $group_id = "c8688ad7a5c08439eac4a6c8642226d55";
    protected string $name = "HomeGraphicsAndBranding";
    protected string $description = "Graphics and branding section in home page";
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