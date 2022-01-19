<div class="ce9f468bbc8d7493f89918363550455db" id="cd54c04c50dfa4a60965c6ad75bf24cfe">
    <!-- Write your code here -->
    <div class="container ce9f468bbc8d7493f89918363550455db__wrapper">
        <div class="ce9f468bbc8d7493f89918363550455db__left">
                <h2>{{ $content->title }}</h2>
                <p>{!! $content->content !!}</p>
                <div class="ce9f468bbc8d7493f89918363550455db__items">
                    @foreach($items as $item)
                        <a class="ce9f468bbc8d7493f89918363550455db__item" href="{{route('article', ['alias' => $item->alias])}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                    @endforeach
                </div>
                <a href="{{route('article', ['alias' => $content->alias])}}" class="ce9f468bbc8d7493f89918363550455db__button">
                    Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
                </a>
        </div>
        <div class="ce9f468bbc8d7493f89918363550455db__right">
            <iframe src="{{$content->thumbnail}}" frameborder="0"></iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
