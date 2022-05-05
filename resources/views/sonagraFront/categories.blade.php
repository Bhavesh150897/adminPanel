@extends($frontTheme)

@section('content')
<div class="row mx-0 mt-5">
    <section class="browse-article mb-80 container-fluid">
        <h3 class="title mb-5">Browse Articles By
            <span class="bold">Categories</span>
        </h3>
        
        {{-- <section>
            {!! $frontSettings['ads-1'] !!}
        </section> --}}

        <div class="row">
            <ul class="inner-sec">
              @foreach($categories as $key => $value)
                <li>
                    <a href="{{ route('blog.cat',$value->slug) }}">
                        <div class="browse-main">
                            <img class="lazyload" alt="{{ $value->image }}" src="{{ asset('frontTheme/assets/img/blog/blog-1.jpg') }}" data-sizes="auto">
                            <h5 class="browse-title">{{ $value->name }}</h5>
                        </div>
                    </a>
                </li>
              @endforeach
            </ul>
        </div>
    </section>
</div>
@endsection