<div class="c15abc9d74c664ae0a61ecc0c8b3178e3" id="c2f0000d7793249e5a66c048bc77d164c">
    <!-- Write your code here -->
    <h1>{{ $greetings }}</h1>
    @foreach ($categories as $category)
        <div>Category: {{$category->title}}</div>
    @endforeach
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
