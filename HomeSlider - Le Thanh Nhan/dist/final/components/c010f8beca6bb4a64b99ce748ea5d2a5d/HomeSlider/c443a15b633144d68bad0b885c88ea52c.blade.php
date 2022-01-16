<div class="c010f8beca6bb4a64b99ce748ea5d2a5d container" id="c443a15b633144d68bad0b885c88ea52c">
    <!-- Write your code here -->
    <p>{{print_r(json_decode($articles))}}</p>
    <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach(json_decode($articles) as $article)
        <div class="swiper-slide" style="background-image: url({{$article->thumbnail}});">
            <div class="c010f8beca6bb4a64b99ce748ea5d2a5d__box">
                <a href="#">
                    <h3>
                        {!!$article->title!!}
                    </h3>
                    <p>
                        {!! $article->content !!}
                    </p>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
    <!-- If we need pagination -->
    <a href="#" class="c010f8beca6bb4a64b99ce748ea5d2a5d__profile">
        Download Profile
    </a>
</div>
    <!-- Write your code here -->
</div>
