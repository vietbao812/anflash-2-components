<link rel="stylesheet" href="/main.css">
<div class="c9d9a1a301da14b42aa40ed5e28e15585" id="c7e19176a44274094b717b48981fab822">
    <!-- Write your code here -->
    <div class="container">
    <div class="c9d9a1a301da14b42aa40ed5e28e15585__top">
            <h2>{{ $content->title }}</h2>
            <p>{!! $content->content !!}</p>
            <div class="c9d9a1a301da14b42aa40ed5e28e15585__items">
                @foreach($items as $item)
                    <a class="c9d9a1a301da14b42aa40ed5e28e15585__item" href="{{route('article', ['alias' => $item->alias])}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                @endforeach
            </div>
            <a href="{{route('article', ['alias' => $content->alias])}}" class="c9d9a1a301da14b42aa40ed5e28e15585__button">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
    </div>
    <div class="c9d9a1a301da14b42aa40ed5e28e15585__bottom">
        <img src="{{$content->thumbnail}}" alt="">
    </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>