<link rel="stylesheet" href="/main.css">
<div class="ceac9064ab6e54dd58dd62b4c3dcf324a" id="c5b81c3fbe5484abcbaab611664a81069">
    <!-- Write your code here -->

    <div class="container">
        <div class="left">
            <div class="left-image">
                <a href="">
                    <img src="https://anflash.com/upload/news/doanh-thu-cua-ban-se-tang-neu-ban-co-1-website-ban-hang-rieng-cho-minh1568215567.jpg" alt="">
                </a>          
            </div>
            <div class="left-content">
                <div class="left-title">
                    <a href="">{{$greetings}}</a>
                    <span class="day">11 - 09 - 2019</span>
                </div>

                <h3><a class="title-name" href="">Doanh thu của bạn sẽ tăng nếu bạn có 1 website bán hàng riêng cho mình</a></h3>
                @foreach ($articles as $article)
                    <p class="description">{{$article -> title}}</p>
                @endforeach
            </div>
        </div>
        <div class="right">
            <div class="right-item">
                <a class="title" href="">{{$greetings}}</a>
                <span class="day">09 - 09 - 2019</span>
                <h3><a class="title-name" href="">Lý do bạn nên chọn dịch vụ và thiết kế website của Anflash</a></h3>
                <p class="description">Bạn đang có mong muốn tìm kiếm một công ty dịch vụ thiết kế web chuyên nghiệp và đáng tin cậy. Chúng tôi, Anflash cung cấp</p>
                    <a class="see-more" href="">Xem thêm</a>
            </div>
            <div class="right-item">
                <a class="title" href="">{{$greetings}}</a>
                <span class="day">08 - 09 - 2019</span>
                <h3><a class="title-name" href="">Bí quyết giữ chân khách hàng trên website lâu hơn.</a></h3>
                <p class="description">Cho đến 2019, website bán hàng trực tuyến dần trở thành cuộc chạy đua, cạnh tranh khốc liệt giữa</p>
                <a class="see-more" href="">Xem thêm</a>
            </div>
            <div class="right-item">
                <a class="title" href="">{{$greetings}}</a>
                <span class="day">08 - 09 - 2019</span>
                <h3><a class="title-name" href="">Bí quyết giữu chân khách hàng trên website lâu hơn</a></h3>
                <p class="description">Cho đến 2019, website bán hàng trực tuyến dần trở thành cuộc chạy đua, cạnh tranh khốc liệt giữa</p>
                <a class="see-more" href="">Xem thêm</a>
            </div>
            
            <a class="btn-see-more" href="">Xem thêm tin khác</a>
        </div>
    </div>

    <!-- <h1>{{ $greetings }}</h1>
    @foreach ($articles as $article)
        <div>{{$article->title}}</div>
    @endforeach
    <h1>1111</h1>
    <div style="width: 100px; height: 100px; background-color: {{$variables["left-background-color"]}};"></div> -->

    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
