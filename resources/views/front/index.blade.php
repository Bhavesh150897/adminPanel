@extends($frontTheme)

@section('title')
    Sonagra.com - Blog|Code|It
@endsection

@section('content')
<div class="container-fluid" data-aos="fade-up">
    <div class="row">
        <div class="col-lg-8 entries">
            <div class="content-part">
                <div class="row">
                    @if(!empty($latestBlog) && $latestBlog->count())
                        @foreach($latestBlog as $key => $value)
                            <div class="col-md-6">
                                <article class="entry">
                                    <div class="entry-img">
                                        <img src="{{ asset('frontTheme/assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="{{ route('blog.detail',$value->slug) }}">{{ $value->title }}</a>
                                    </h2>
                                    <div class="entry-content">
                                        <p>
                                          {{ Str::limit(strip_tags($value->body), 250, '...') }}
                                        </p>
                                        <div class="read-more">
                                            <a href="{{ route('blog.detail',$value->slug) }}">Read More</a>
                                        </div>
                                    </div>
                                </article><!-- End blog entry -->
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="row action-btns-bottom mb-4">
                          <div class="col justify-content-center d-flex">
                            @if($latestBlog->currentPage() != 1)
                              <a href="{{ $latestBlog->previousPageUrl() }}"><button type="button" class="btn btn-primary btn-lg next"><i
                                  class="fas fa-chevron-left"></i> Previous</button></a>
                            @else
                              <a href="{{ $latestBlog->previousPageUrl() }}"><button type="button" class="btn btn-primary btn-lg disabled previous"><i
                                  class="fas fa-chevron-left"></i> Previous</button></a>
                            @endif
                            <a href="{{ $latestBlog->nextPageUrl() }}"><button type="button" class="btn btn-secondary btn-lg next">Next<i
                                class="fas fa-chevron-right"></i></button></a>
                          </div>
                        </div>
        </div><!-- End blog entries list -->

        <div class="col-md-4">
            @include('frontTheme.sidebar')
        </div>
    </div>

</div>
@endsection