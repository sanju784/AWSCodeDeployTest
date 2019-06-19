<div id="LinkJuice">
    @foreach($linkJuice as $links)
        <h2>{!! key($links) !!}</h2>
        @foreach($links as $link)
            <ul>
                @foreach($link as $html)
                    <li><a href="{{$html['href']}}">{{$html['text']}}</a>
                @endforeach
            </ul>
        @endforeach
    @endforeach
</div>