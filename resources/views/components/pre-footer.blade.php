<section class="pre-footer">
    <div class="container">
        <div class="pre-footer-container">

            @foreach ($pre_footer_items as $item)
                
                {{-- Single Item  --}}
                <div class="item-box">

                    <!-- Img  -->
                    <img src="{{ '../images/buy-' . $item['img_src'] }}" alt="{{ $item['text'] }}">

                    <!-- Text  -->
                    <div>{{ $item['text'] }}</div>

                </div>

            @endforeach

        </div>
    </div>
</section>