<div class="c3ed3bd0cfcf0458f98525f141095afe3" id="c6995b8f5961a40bf92b98ce8d026dd61">
    <!-- Write your code here -->
    <div class="container">
        <div class="c3ed3bd0cfcf0458f98525f141095afe3__top">
            <h2>{{ $content->title }}</h2>
            <p>{!! $content->content !!}</p>
            <div class="c3ed3bd0cfcf0458f98525f141095afe3__items">
                @foreach($items as $item)
                    <a class="c3ed3bd0cfcf0458f98525f141095afe3__item" href="{{$item->alias}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                @endforeach
                <a class="c3ed3bd0cfcf0458f98525f141095afe3__item" href="#"><i class="fas fa-caret-right"></i>Quét 3D thực tế - 3D Scanning Quét 3D thực tế - 3D Scanning</a>
            </div>
            <a href="{{$content->alias}}" class="c3ed3bd0cfcf0458f98525f141095afe3__button">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="c3ed3bd0cfcf0458f98525f141095afe3__bottom">
            <iframe src="{{$content->thumbnail}}" frameborder="0"></iframe>
        </div>
    </div>
    <!-- Write your code here -->
</div>
