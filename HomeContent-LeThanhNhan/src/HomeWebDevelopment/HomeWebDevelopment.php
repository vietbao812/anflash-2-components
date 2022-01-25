<?php
namespace Src\HomeWebDevelopment;

use Jenssegers\Blade\Blade;

class HomeWebDevelopment
{
	// variables used in blade template
    protected array $variables = [];
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
    protected array $input_types = [];
    
    public function api(){
        return json_encode([
            "message" => "API is working!"
        ]);
    }
	public function index()
	{
		$blade = new Blade([__DIR__.'/../../src/HomeWebDevelopment'], __DIR__.'/../../cache');

		echo $blade->make('index', ['greetings' => 'Hello World!'])->render();
	}
}