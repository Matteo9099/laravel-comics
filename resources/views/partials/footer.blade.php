@php
    $links = config('footer_links')   
@endphp

<footer>
    <div id="footer_top">
        <div class="container">
            <nav>
                <div class="section_link">

                    
                    @foreach ($links as $link)
                    <h3>{{ $link['title'] }}</h3>
                    <ul>
                        @foreach ($link['links'] as $link)
                        <li>
                            <a href="{{$link['route']}}">{{ $link['text'] }}</a>
                        </li>
                        @endforeach
    
                    </ul>
                    @endforeach

                </div>
            </nav>

                <div class="logo_dc_bg"></div>

        </div>
    </div>
</footer>