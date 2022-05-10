@extends($frontTheme)

@section('style')
<style type="text/css">
.box:hover {
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  animation-name: example;
  animation-duration: 0.25s;
  border-left: 8px solid #1BBD36 !important;
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
@keyframes example {
    0%   {border-left: 2px solid #ffffff;}
    25%  {border-left: 3px solid #ffe6e6;}
    50%  {border-left: 4px solid #ff8080;}
    100% {border-left: 5px solid #ff0000;}
}
</style>
@endsection

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
                <li class="box">
                    <a href="{{ route('blog.cat',$value->slug) }}">
                        <div class="browse-main">
                            <h5 class="browse-title" style="padding-top: 16px;">{{ $value->name }}</h5>
                            <p>[{{ $value->post->count() }}]</p>
                        </div>
                    </a>
                </li>
              @endforeach
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="sidebar recommending-you">
                    <div class="list-boxes mb-50 box-shadow">
                      @if(!empty($relatedBlog))
                        <div class="search-box">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="title">We are Recommending you</h4>
                                </div>
                            </div>
                        </div>
                            <div class="sidebar-item recent-posts">
                                @foreach($relatedBlog as $key => $value)
                                    <li style="list-style: none;padding:10px !important;color: #1ECF3B;"><i class="fa fa-forward" style="margin-right: 5px !important;"></i><a href="{{ route('blog.detail',$value->slug) }}">{{ $value->title }}</a></li>
                                @endforeach
                            </div>
                      @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection