@php
    $links = config('footer_links')   
@endphp

<footer>
    <section id="footer_top">
        <div class="container d-flex d-center">
            <nav>

                @foreach ($links as $link)
                <h3>{{ $link['title'] }}</h3>
                
                <ul>
                    @foreach ($link['links'] as $link)
                    <li>
                        <a href="{{$link['route']}}">{{ $link['text'] }}</a>
                    </li>
                    @endforeach

                    @endforeach
                </ul>

            </nav>
        </div>
    </section>
</footer>