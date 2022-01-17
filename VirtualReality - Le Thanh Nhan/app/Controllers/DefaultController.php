<?php
namespace Demo\Controllers;

use Jenssegers\Blade\Blade;

class DefaultController
{
	public function index()
	{
		$content = json_decode(file_get_contents('https://tunacoding.com/api/articles?&relations[]=user&relations[]=tags&page=1&title=&tag_ids[]=14&tag_ids[]=7&=&=vr&excluded_tag_ids[]=&=&=&order_by=&=&order_by_direction=desc&=Gi%E1%BA%A3m%20d%E1%BA%A7n'));
		$items = json_decode(file_get_contents('https://tunacoding.com/api/articles?&relations[]=user&relations[]=tags&page=1&title=&tag_ids[]=7&=&=vr&excluded_tag_ids[]=14&=&=category&order_by=&=&order_by_direction=desc&=Gi%E1%BA%A3m%20d%E1%BA%A7n'));
		$blade = new Blade([__DIR__.'/../../src/VirtualReality', __DIR__.'/../../sample'], __DIR__.'/../../cache');
		echo $blade->make('index', ['content' => $content->items[0], 'items' => $items->items])->render();
	}
}