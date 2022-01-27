<?php

namespace Components\ceac9064ab6e54dd58dd62b4c3dcf324a\HomeNews;

use App\Utilities\ExtendedComponent;

class c5b81c3fbe5484abcbaab611664a81069 extends ExtendedComponent
{
    protected string $uuid = "c5b81c3fbe5484abcbaab611664a81069";
    protected string $group_id = "ceac9064ab6e54dd58dd62b4c3dcf324a";
    protected string $name = "HomeNews";
    protected string $description = "News section in home page";
    protected array $variables = [
        "left-background-color" => "#233b56"
    ];
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