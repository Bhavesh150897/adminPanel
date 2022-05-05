@extends($frontTheme)

@section('style')
<link href="{{ asset('dvNew/style/article_detail.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/monokai-sublime.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<link href="{{ asset('dvNew/style/home.css') }}" rel="stylesheet">
  <style type="text/css">
    /*pre {
        font-size: 1.125em;
        background-color: #eeeeee;
        padding: 0.750em;
        border-radius: 5px;
    }*/
    /*code {
        color: #000000;
    }*/
    .blog-article{
      width: 100%;
    }
    .post-description p strong.step{
      margin-bottom: 13px;
    }
    .step::before { content: ' '; display: block; }
  </style>
  {{-- <link rel="stylesheet" href="{{ asset('dvNew/style/enlighterjs.min.css') }}"> --}}
@endsection
@section('content')
        <section id="page_body" class="container-fluid mt-5 pt-4">
            <div class="row mx-0">
                <div class="col-12 col-md-12 col-xl-8 col-sm-12">
                    <section class="article-details-main mb-5 mt-5">
                        <div class="row mx-0">
                            <h1 class="mb-3 p-0">
                                <a href="{{ route('blog.detail',$blog->slug ) }}" title="">{{ $blog->title }}</a>
                            </h1>

                            {{-- <section>
                                {!! $frontSettings['ads-1'] !!}
                            </section> --}}

                            <div class="post-info mb-3">
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
                        
                          <section class="recommending-you">
                            <div class="list-boxes mb-50 box-shadow">
                              @if(!empty($relatedBlog))
                                <h4 class="title">We are Recommending you</h4>
                                <ul>
                                  @foreach($relatedBlog as $key => $value)
                                    <li><a href="{{ route('blog.detail',$value->slug) }}">{{ $value->title }}</a></li>
                                  @endforeach
                                </ul>
                              @endif
                            </div>
                          </section>
                    </section>
                </div>
                <div class="col-12 col-md-12 col-xl-4 col-sm-12 sidebar-main">
                    <section class="related-articles mb-5 mt-5">
                        @include('frontTheme.sidebar')
                    </section>
                </div>
            </div>
        </section>
@endsection
@section('script')
{{-- <script src="{{ asset('dvNew/js/enlighterjs.min.js') }}" type="text/javascript"></script> --}}
{{-- <script type="text/javascript">
    EnlighterJS.init('pre', 'code', {
            theme: 'enlighter',
            indent : 2
    });
</script> --}}
 @endsection