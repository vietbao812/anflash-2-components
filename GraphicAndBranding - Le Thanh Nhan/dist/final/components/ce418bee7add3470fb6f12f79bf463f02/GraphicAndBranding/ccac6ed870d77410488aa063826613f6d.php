<?php

namespace Components\ce418bee7add3470fb6f12f79bf463f02\GraphicAndBranding;

use App\Utilities\ExtendedComponent;

class ccac6ed870d77410488aa063826613f6d extends ExtendedComponent
{
    protected string $uuid = "ccac6ed870d77410488aa063826613f6d";
    protected string $group_id = "ce418bee7add3470fb6f12f79bf463f02";
    protected string $name = "GraphicAndBranding";
    protected string $description = "GraphicAndBranding";
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