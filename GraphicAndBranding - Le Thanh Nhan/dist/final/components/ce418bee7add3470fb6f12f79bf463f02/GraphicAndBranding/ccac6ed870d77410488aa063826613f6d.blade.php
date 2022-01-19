<div class="ce418bee7add3470fb6f12f79bf463f02" id="ccac6ed870d77410488aa063826613f6d">
    <!-- Write your code here -->
    <div class="container ce418bee7add3470fb6f12f79bf463f02__wrapper">
        <div class="ce418bee7add3470fb6f12f79bf463f02__left">
            <img src="{{$content->thumbnail}}" alt="">
        </div>
        <div class="ce418bee7add3470fb6f12f79bf463f02__right">
            <h2>{{ $content->title }}</h2>
            <p>{!! $content->content !!}</p>
            <div class="ce418bee7add3470fb6f12f79bf463f02__items">
                @foreach($items as $item)
                    <a class="ce418bee7add3470fb6f12f79bf463f02__item" href="{{route('article', ['alias' => $item->alias])}}"><i class="fas fa-caret-right"></i>{{$item->title}}</a>
                @endforeach
            </div>
            <a href="{{route('article', ['alias' => $content->alias])}}" class="ce418bee7add3470fb6f12f79bf463f02__button">
                Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
            </a>
            <div class="ce418bee7add3470fb6f12f79bf463f02__contact">
                <p>Bạn đang có ý tưởng thiết kế bộ nhận diện thương hiệu riêng nhưng chưa biết bắt đầu từ đâu?</p>
                <a href="#" class="">Liên hệ ngay!</a>
            </div>
        </div>
    </div>
    <!-- Write your code here -->
</div>
