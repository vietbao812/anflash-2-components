<div class="ce9f468bbc8d7493f89918363550455db bg-blue overflow-y overflow-x-clip" id="c8efa1fc85142415ab69e0800b86530e7">
    <!-- Write your code here -->
    <div class="container">
        <div class="ce9f468bbc8d7493f89918363550455db__top text-white">
                <h2>{{ $content->title }}</h2>
                <p>{!! $content->content !!}</p>
                <div class="ce9f468bbc8d7493f89918363550455db__items">
                    @foreach($items as $item)
                        <a class="ce9f468bbc8d7493f89918363550455db__item hover" href="{{route('article', ['alias' => $item->alias])}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                    @endforeach
                </div>
                <a href="{{route('article', ['alias' => $content->alias])}}" class="ce9f468bbc8d7493f89918363550455db__button hover-white">
                    Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
                </a>
        </div>
        <div class="ce9f468bbc8d7493f89918363550455db__bottom pos-relative">
            <img src="{{$content->thumbnail}}" class="design-image" alt="">
        </div>
    </div>
    <!-- Write your code here -->
</div>
