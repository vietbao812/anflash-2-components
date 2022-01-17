<?php

namespace Components\c3ed3bd0cfcf0458f98525f141095afe3\VirtualReality;

use App\Utilities\ExtendedComponent;

class c6995b8f5961a40bf92b98ce8d026dd61 extends ExtendedComponent
{
    protected string $uuid = "c6995b8f5961a40bf92b98ce8d026dd61";
    protected string $group_id = "c3ed3bd0cfcf0458f98525f141095afe3";
    protected string $name = "VirtualReality";
    protected string $description = "VirtualReality";
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