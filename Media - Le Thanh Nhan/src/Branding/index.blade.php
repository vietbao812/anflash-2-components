<link rel="stylesheet" href="/main.css">
<div class="ce9f468bbc8d7493f89918363550455db" id="caceecbf971be42fe8dbe57797affa1f5">
    <!-- Write your code here -->
    <div class="container-lg ce9f468bbc8d7493f89918363550455db__wrapper">
        <div class="ce9f468bbc8d7493f89918363550455db__left">
            <img src="{{$content->thumbnail}}" alt="">
        </div>
        <div class="ce9f468bbc8d7493f89918363550455db__right flex-column order-first z-999">
            <h2>{{ $content->title }}</h2>
            <p>{!! $content->content !!}</p>
            <div class="ce9f468bbc8d7493f89918363550455db__items">
                @foreach($items as $item)
                    <a class="ce9f468bbc8d7493f89918363550455db__item text-black hover" href="{{route('article', ['alias' => $item->alias])}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                @endforeach
            </div>
            <a href="{{route('article', ['alias' => $content->alias])}}" class="ce9f468bbc8d7493f89918363550455db__button hover-white">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
            <div class="ce9f468bbc8d7493f89918363550455db__contact bg-blue p-3 mt-3 text-white">
                <p>Bạn đang có ý tưởng thiết kế bộ nhận diện thương hiệu riêng nhưng chưa biết bắt đầu từ đâu?</p>
                <a href="#" class="text-decoration-none text-white hover">Liên hệ ngay!</a>
            </div>
        </div>
    </div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>