<?php
namespace Src\HomeNews;

use Jenssegers\Blade\Blade;

class HomeNews
{
	// variables used in blade template
    protected array $variables = [
        "left-background-color" => "#233b56"
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
    protected array $input_types = [];
    
    public function api(){
        return json_encode([
            "message" => "API is working!"
        ]);
    }
	public function index()
	{
        $articles = json_decode(\file_get_contents("https://tunacoding.com/api/articles?&relations[]=user&relations[]=tags&page=1&title=&tag_ids[]=3&=&=&excluded_tag_ids[]=&=&=&order_by=&=&order_by_direction=desc&=Gi%E1%BA%A3m%20d%E1%BA%A7n"))->items;
		$blade = new Blade([__DIR__.'/../../src/HomeNews'], __DIR__.'/../../cache');
        // return dd(route("article"));
        // return dd($articles);
		echo $blade->make('index', [
            'greetings' => 'THIẾT KẾ WEB VÀ ỨNG DỤNG',
            'articles' => $articles,
            'variables' => $this->variables,
        ])->render();
	}
}