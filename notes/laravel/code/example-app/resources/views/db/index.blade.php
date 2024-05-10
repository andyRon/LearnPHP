
<div class="container">
    @foreach($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
</div>

{{ $posts->links() }}
