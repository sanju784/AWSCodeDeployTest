<script type="application/ld+json">
{
@context: "http://schema.org",
@type: "BreadcrumbList",
itemListElement:
	[
		{
			@type: "ListItem",
			position: 1,
			item: {
				@id: "https://www.docknet.jp/",
				name: "人間ドックと検診予約サイト EPARK人間ドック"
			}
		}
		@foreach($breads as $bread)

        ,{
            @type: "ListItem",
            position: {{ $loop->index + 2 }},
            item: {
                @id: "https://www.docknet.jp/{{ $bread['url'] }}",
                name: "{{ $bread['text'] }}"
            }
        @endforeach
	]
}
</script>
