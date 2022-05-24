@extends($frontTheme)

@section('title')
    Sonagra.com - Blog|Code|It
@endsection

@section('style')
<style type="text/css">
    .card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  /*width: 300px;*/
}
.card-header img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.card-header{
    padding: 0px !important;
}
.card-body {
  display: flex;
  flex-direction: column;
  align-items: start;
  padding: 20px;
  min-height: 250px;
}
.tag {
  background-color: #ccc;
  color: #fff;
  border-radius: 50px;
  font-size: 12px;
  margin: 0;
  padding: 2px 10px;
  text-transform: uppercase;
}
.tag-teal {
  background-color: #1BBD36;
}
.card-body h4 {
  margin: 10px 0;
}
.card-body p {
  font-size: 14px;
  margin: 0 0 20px 0;
  /*font-weight: 500;*/
  color: rgb(70, 68, 68);
}
.user {
  /*display: flex;*/
  margin-top: auto;
}
.user img {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  margin-right: 10px;
  object-fit: cover;
}
.user-info h5 {
  margin: 0;
}
.user-info small {
  color: #888785;
}
.card-custom{
    min-height: 545px;
}
.text-left{
    text-align: left;
}
.text-right{
    text-align: right;
}
@media only screen and (max-width: 600px) {
    .container-fluid{
        padding-left: 10px;
        padding-right: 10px;
    }
    .recent-posts{
        margin-left: -15px !important;
    }
}
</style>
@endsection

@section('content')
<div class="container-fluid" style="padding-left:0px !important;padding-right: 0px !important;">
    <div class="row">
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <div class="about-us-web">
                            <h2 class="text-dark">SONA<span class="text-light">GRA</span></h2>
                            <p class="text-light">Sonagra specifically for sharing programming issue and examples. We’ll be sharing some chunks of codes of PHP, Laravel Framework, CSS3, HTML5, MYSQL, Bootstrap, CodeIgniter Framework, JQuery, Javascript, Server, Ionic Framework etc. In our site i am sure you will find something good solution and find example of topics of PHP, Laravel etc.</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{ route('latest.post') }}" class="custom-btn"> Our Articles</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <img src="{{ asset('frontTheme/assets/img/blog/hero-img.png') }}" alt="" />
                    </div>
                </div>
                
            </div>
            {{-- <div class="justify-content-between align-items-center"> --}}
              {{-- <h2 class="text-dark">SONA<span class="text-light">GRA</span></h2> --}}
              {{-- <p class="text-light">Sonagra specifically for sharing programming issue and examples. We’ll be sharing some chunks of codes of PHP, Laravel Framework, CSS3, HTML5, MYSQL, Bootstrap, CodeIgniter Framework, JQuery, Javascript, Server, Ionic Framework etc. In our site i am sure you will find something good solution and find example of topics of PHP, Laravel etc.</p> --}}
            {{-- </div> --}}

        </section>
    </div>
</div>
<div class="container-fluid mv-container">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                @if(!empty($latestBlog) && $latestBlog->count())
                    @foreach($latestBlog as $key => $value)
                        <div class="col-md-6 card-custom">
                            <div class="card">
                                <div class="card-header">
                                    <img src="{{ asset('frontTheme/assets/img/blog/blog-1.jpg') }}" alt="" />
                                </div>
                                <div class="card-body">
                                    @foreach($value->blogCategoryConnect as $blogValue)
                                        <span class="tag tag-teal">{{ $blogValue->name }}</span>
                                    @endforeach
                                    <h4>{{ $value->title }}</h4>
                                    <p>
                                        {{ Str::limit(strip_tags($value->body), 250, '...') }}
                                    </p>
                                    {{-- <div class="row"> --}}
                                        <div class="col-md-12">
                                            <div class="user">
                                                <div class="user-info">
                                                    <div class="row">
                                                        <div class="col-md-6 text-left">
                                                            <strong><small>{{ $value->created_at->format('M d, Y') }}</small></strong>
                                                        </div>
                                                        <div class="col-md-6 text-right">
                                                            <a href="{{ route('blog.detail',$value->slug) }}">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            {{-- <div class="content-part">
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
            </div> --}}

            <div class="row action-btns-bottom my-5">
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