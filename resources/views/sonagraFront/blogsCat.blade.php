@extends($frontTheme)

@section('style')
  <link href="{{ asset('dvNew/style/article_listing.css') }}" rel="stylesheet">
  <link href="{{ asset('dvNew/style/home.css') }}" rel="stylesheet">
@endsection

@section('content')

        <div class="container-fluid" data-aos="fade-up">
            <div class="row mx-0">
                <div class="col-12 col-md-12 col-xl-8 col-sm-12">
                    <section class="article-listing">
                        <h3 class="title mb-5 mt-5">ALL articles of
                            <span class="bold">{{ $blogsCatName }}</span>
                        </h3>

                        {{-- <section>
                            {!! $frontSettings['ads-1'] !!}
                        </section> --}}

                        <div class="row mx-0">
                        @if(!empty($blogsCatDetail))
                          @foreach($blogsCatDetail as $key => $value)
                            <div class="col-12 mb-4">
                                <div class="hr-post-box">
                                    <div class="image-box">
                                        @if($value->image != null)
                                            <a class="btn btn-sm" href="{{ route('blog.detail',$value->slug) }}">
                                                <img class="lazyload" src="{!! !empty($value->image) ? route('image.asset.storage.file',['folder' => 'blog', 'file' => $value->image]) : asset('/upload/blog/default/default.png') !!}" data-sizes="auto" alt="{{ $value->image }}" />
                                            </a>
                                        @else
                                            <a class="btn btn-sm" href="{{ route('blog.detail',$value->slug) }}">
                                                <div class="card" style="border:none;">
                                                    <div class="card-body bg-dark text-light" style="border-radius:10px;">
                                                        <h4 class="lazyload text-center" alt="{{ $value->title }}" data-sizes="auto">{{ $value->title }}</h4>
                                                    </div>
                                                </div>                 
                                            </a>
                                        @endif
                                    </div>
                                    <div class="content-box">
                                        <div class="main-category-tag">
                                            @foreach($value->blogCategoryConnect as $blogValue)
                                                <label>
                                                    <a href="{{ route('blog.cat',$blogValue->slug) }}">{{ $blogValue->name }}</a>
                                                </label>
                                            @endforeach
                                        </div>
                                        <h3>
                                            <a href="{{ route('blog.detail',$value->slug) }}">{{ $value->title }}</a>
                                        </h3>
                                        <p>{{ Str::limit(strip_tags($value->body), 250, '...') }}</p>
                                        <div class="post-info">
                                            <span class="user">
                                                <i class="fas fa-user"></i>By Admin</span>
                                            <span class="time">
                                                <i class="far fa-clock"></i>{{ $value->created_at->format('M d, Y') }}</span>
                                        </div>
                                        <a href="{{ route('blog.detail',$value->slug) }}" class="read-more-btn">READ MORE
                                            <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                          @endforeach
                        </div>

                        {{-- <section>
                            {!! $frontSettings['ads-1'] !!}
                        </section> --}}
                        
                        <div class="row action-btns-bottom mb-4">
                          <div class="col justify-content-center d-flex">
                            @if($blogsCatDetail->currentPage() != 1)
                              <a href="{{ $blogsCatDetail->previousPageUrl() }}"><button type="button" class="btn btn-primary btn-lg next"><i
                                  class="fas fa-chevron-left"></i> Previous</button></a>
                            @else
                              <a href="{{ $blogsCatDetail->previousPageUrl() }}"><button type="button" class="btn btn-primary btn-lg disabled previous"><i
                                  class="fas fa-chevron-left"></i> Previous</button></a>
                            @endif
                            <a href="{{ $blogsCatDetail->nextPageUrl() }}"><button type="button" class="btn btn-secondary btn-lg next">Next<i
                                class="fas fa-chevron-right"></i></button></a>
                          </div>
                        </div>
                      @endif
                    </section>
                </div>
                <div class="col-12 col-md-12 col-xl-4 col-sm-12 sidebar-main">
                    <section class="related-articles mb-5 mt-5">
                        @include('frontTheme.sidebar')
                    </section>
                </div>
            </div>
        </div>
@endsection