<?php

namespace Components\c9d9a1a301da14b42aa40ed5e28e15585\DesignAndApplication;

use App\Utilities\ExtendedComponent;

class c7e19176a44274094b717b48981fab822 extends ExtendedComponent
{
    protected string $uuid = "c7e19176a44274094b717b48981fab822";
    protected string $group_id = "c9d9a1a301da14b42aa40ed5e28e15585";
    protected string $name = "DesignAndApplication";
    protected string $description = "DesignAndApplication";
    // variables used in pug template
    protected array $variables = [
        
    ];
    // define which type of input each variable uses
    // AVAILABLE TYPES
    // ckeditor: for writing articles, large content
    // checkbox: for toggling on/off
    // input: for writing name, title, small content
    // media-input: for inserting images/iframes
    // multi-media-input: for inserting multiple images/iframes
    // select: for selecting content from a dropdown list
    // sortable: for a draggable sorting input
    // tag-input: for selecting multiple tags
    // textarea: for writing notes
    protected array $input_types = [
        
    ];
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
        return view("$this->type.$this->group_id.$this->name.$this->uuid");
    }
}