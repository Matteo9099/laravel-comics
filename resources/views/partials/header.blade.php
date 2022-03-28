@php
    $links = config('header_links')   
@endphp

<header>
    <div class="container d-flex d-center">
       <a href="#"><img src="{{asset('image/dc-logo.png')}}" alt="DC Logo"></a>
       
       <nav>
           <ul>
               @foreach ($links as $link)
               <li>
                   <a href="$link">{{ $link['text'] }}</a>
                </li>
                @endforeach
            </ul>
        </nav>
        
    </div>
</header>