@extends($frontTheme)

@section('style')
<link href="{{ asset('dvNew/style/article_detail.css') }}" rel="stylesheet">
<link href="{{ asset('dvNew/style/home.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/themes/monokai.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/rainbow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rainbow/1.2.0/js/language/php.min.js"></script>
@endsection
@section('content')
        <section id="page_body" class="container-fluid mt-5 pt-4">
            <div class="row mx-0">
                <div class="col-12 col-md-12 col-xl-8 col-sm-12">
                    <section class="article-details-main mb-5 mt-5">
                        <div class="row mx-0">
                            <div class="col-md-12">
                                <h1 class="mb-3" style="font-size: 40px;">
                                    <a href="{{ route('blog.detail',$blog->slug ) }}" title="">{{ $blog->title }}</a>
                                </h1>
                            </div>

                            {{-- <section>
                                {!! $frontSettings['ads-1'] !!}
                            </section> --}}

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="post-info mb-3" style="width:751px !important">
                                        <span class="time">
                                            <i class="fas fa-calendar-alt"></i> {{ $blog->created_at->format('M d, Y') }}</span>
                                        <span class="eye">
                                            <i class="fas fa-user"></i> By Admin</span>
                                        Category: 
                                            @foreach($blog->blogCategoryConnect as $blogValue)
                                                <span class="category">
                                                    <a href="{{ route('blog.cat',$blogValue->slug) }}">{{ $blogValue->name }}</a>
                                                </span>&nbsp;
                                            @endforeach
                                    </div>
                                </div>
                            </div>
                            
                            <img class="post-image blog-article" src="{{ asset('frontTheme/assets/img/blog/blog-1.jpg') }}" alt="{{ $blog->image }}" />
                            
                            {{-- <section>
                                {!! $frontSettings['ads-1'] !!}
                            </section> --}}

                            <div class="col-12">
                            </div>
                            <section class="post-description mb-3">
                              <div class="discription">
                                <p>{!! $blog->body !!}</p>
                              </div>
                            </section>
                            <div class="row">
                                <div class="col-md-12 col-xs-12 tags-postdetail-page">
                                    @if(!empty($postTags))
                                    <strong><i class="fa fa-tags" aria-hidden="true"></i> Tags:-</strong>
                                        @foreach($postTags->getTags as $key=>$value)
                                            @if(!empty($value->tags->tag))
                                                <a href="" class="tag">
                                                    <span class="txt">{{ $value->tags->tag }}</span><span class="num">{{ $value->tags->post->count() }}</span>
                                                </a>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="seperator">
                        </div>

                        {{-- <section>
                            {!! $frontSettings['ads-1'] !!}
                        </section> --}}
                        
                    </section>
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
                <div class="col-md-4 sidebar-main">
                    {{-- <section class="related-articles mb-5 mt-5"> --}}
                        @include('frontTheme.sidebar')
                    {{-- </section> --}}
                </div>
            </div>
        </section>
@endsection
@section('script')
<script type="text/javascript">
</script>
 @endsection