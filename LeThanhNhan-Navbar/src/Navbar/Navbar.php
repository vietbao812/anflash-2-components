<?php
namespace Src\Navbar;

use Jenssegers\Blade\Blade;

class Navbar
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
        $categories = json_decode(file_get_contents("https://tunacoding.com/api/articles?&relations[]=user&relations[]=tags&page=1&title=&tag_ids[]=14&=&=&excluded_tag_ids[]=&=&=&order_by=&=&order_by_direction=desc&=Gi%E1%BA%A3m%20d%E1%BA%A7n"))->items;
        $logo = json_decode(file_get_contents("https://tunacoding.com/api/values?page=1&key=logo"))->items[0]->value;
        $hotline = json_decode(file_get_contents("https://tunacoding.com/api/values?page=1&key=hotline"))->items[0]->value;
        $email = json_decode(file_get_contents("https://tunacoding.com/api/values?page=1&key=email"))->items[0]->value;
        $facebook = json_decode(file_get_contents("https://tunacoding.com/api/values?page=1&key=facebook"))->items[0]->value;
        $youtube = json_decode(file_get_contents("https://tunacoding.com/api/values?page=1&key=youtube"))->items[0]->value;
		$blade = new Blade([__DIR__.'/../../src/Navbar'], __DIR__.'/../../cache');

		echo $blade->make('index', [
            'greetings' => 'Hello World!',
            'categories' => $categories,
            'logo' => $logo,
            'hotline' => $hotline,
            'email' => $email,
            'facebook' => $facebook,
            'youtube' => $youtube,
        ])->render();
	}
}