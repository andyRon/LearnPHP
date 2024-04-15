<div class="content">
    <div class="title m-b-md">
        Posts
    </div>

    @isset($posts)
        <ul class="posts">
            @foreach($posts as $post)
                <li>{{ $post->title }}</li>
            @endforeach
        </ul>
    @endisset
</div>
