<link rel="stylesheet" href="/main.css">
<div class="ceac9064ab6e54dd58dd62b4c3dcf324a" id="c5b81c3fbe5484abcbaab611664a81069">
    <!-- Write your code here -->
    <h1>{{ $greetings }}</h1>
    @foreach ($articles as $article)
        <div>{{$article->title}}</div>
    @endforeach
    <div style="width: 100px; height: 100px; background-color: {{$variables["left-background-color"]}};"></div>
    <!-- Write your code here -->
</div>
<script src="/main.js"></script>
