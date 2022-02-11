<div class="single-comic">

    <a href="{{ route('product', ['id' => $comic['id']]) }}">
        <!-- Thumbnail  -->
        <div class="thumbnail">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        </div>

        <!-- Comic Name  -->
        <div class="comic-name">
            {{ $comic['title'] }}
        </div>
    </a>

</div>