<?php

namespace Components\ce9f468bbc8d7493f89918363550455db\Branding;

use App\Utilities\ExtendedComponent;

class caceecbf971be42fe8dbe57797affa1f5 extends ExtendedComponent
{
    protected string $uuid = "caceecbf971be42fe8dbe57797affa1f5";
    protected string $group_id = "ce9f468bbc8d7493f89918363550455db";
    protected string $name = "Branding";
    protected string $description = "Branding";
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