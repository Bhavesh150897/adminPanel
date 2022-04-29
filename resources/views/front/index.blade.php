@extends($frontTheme)

@section('title')
    Sonagra.com - Blog|Code|It
@endsection

@section('content')
<div class="container" data-aos="fade-up">
    <div class="row">
        <div class="col-lg-8 entries">
            <div class="content-part">
                <div class="row">
                    <div class="col-md-6">
                        <article class="entry">
                            <div class="entry-img">
                                <img src="{{ asset('frontTheme/assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <h2 class="entry-title">
                                <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque</a>
                            </h2>
                            <div class="entry-content">
                                <p>
                                  Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                  Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                                </p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>
                        </article><!-- End blog entry -->
                    </div>
                </div>
            </div>

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>
        </div><!-- End blog entries list -->

        <div class="col-md-4">
            @include('frontTheme.sidebar')
        </div>
    </div>

</div>
@endsection