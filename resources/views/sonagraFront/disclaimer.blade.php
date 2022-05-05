@extends($frontTheme)

@section('style')
  <link href="{{ asset('dvNew/style/article_detail.css') }}" rel="stylesheet">
@endsection

@section('content')
        <section id="page_body" class="container-fluid mt-5 pt-4">
            <div class="row mx-0">
                <div class="col-12 col-md-12 col-xl-8 col-sm-12">
                    <div class="article-details-main mb-5">
                        <h4 class="mb-3">Disclaimer</h4>
                          {!! $frontSettings['disclaimer'] !!}
                    </div>

                    {{-- <section>
                        {!! $frontSettings['ads-1'] !!}
                    </section> --}}

                    @include('sonagraFront.rendomPost')

                    {{-- <section>
                        {!! $frontSettings['ads-1'] !!}
                    </section> --}}
                    
                </div>
                <div class="col-12 col-md-12 col-xl-4 col-sm-12 sidebar-main mt-4"> 
                  @include('frontTheme.sidebar')
                </div>
            </div>
        </section>
@endsection