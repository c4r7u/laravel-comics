<section class="comic-list">
    <div class="container">
        <div class="comic-list-container">

            {{-- Title  --}}
            <a href="#" class="title btn btn-regular btn-blue">current series</a>

            {{-- Single comic  --}}
            @foreach ($comics as $comic)
                @include('components.comic-card', $comic)
            @endforeach

            {{-- Load more  --}}
            <a href="#" class="btn btn-wide btn-blue">load more</a>

        </div>
    </div>
</section>