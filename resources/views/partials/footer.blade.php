@php
    $links = config('footer_links')   
@endphp

<footer>
    <section id="footer_top">
        <div class="container d-flex d-center">
            <nav>

                @foreach ($links as $link )
                <h3>{{ $link['title'] }}</h3>
                

                <ul>
                    @foreach ($links as $text)
                    <li>
                        <a href="$link">{{ $text['texts'][1] }}</a>
                    </li>
                    @endforeach

                    @endforeach
                </ul>

            </nav>
        </div>
    </section>
</footer>