<div class="ce9f468bbc8d7493f89918363550455db no-background" id="c5f8e2943c37f46e0880068d83109940d">
    <!-- Write your code here -->
    <div class="container">
        <div class="ce9f468bbc8d7493f89918363550455db__top">
            <h2>{{ $content->title }}</h2>
            <p>{!! $content->content !!}</p>
            <div class="ce9f468bbc8d7493f89918363550455db__items">
                @foreach($items as $item)
                    <a class="ce9f468bbc8d7493f89918363550455db__item text-black" href="{{$item->alias}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                @endforeach
            </div>
            <a href="{{$content->alias}}" class="ce9f468bbc8d7493f89918363550455db__button hover-white">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="ce9f468bbc8d7493f89918363550455db__bottom my-45 overflow-bottom">
            <iframe  class="media-iframe" src="{{$content->thumbnail}}" frameborder="0"></iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
