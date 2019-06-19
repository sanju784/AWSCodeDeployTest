<nav id="breadcrumb">
    <ul>
        <li><a href="/">人間ドックと検診予約サイト EPARK人間ドック</a></li>
        @foreach($breads as $bread)
            <li>@if($bread['url'] != Request::path())<a href="/{{ $bread['url'] }}">@endif{{ $bread['text'] }}@if($bread['url'] != Request::path())</a>@endif</li>
        @endforeach
    </ul>
</nav>
