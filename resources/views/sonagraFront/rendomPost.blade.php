<section class="feature-posts mb-50">
  
  {{-- <section>
      {!! $frontSettings['ads-1'] !!}
  </section> --}}

  <div class="sidebar recommending-you">
    <div class="list-boxes mb-50 box-shadow">
      @if(!empty($randomPostFooter))
        <div class="search-box">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title">Our Featured Posts</h4>
                </div>
            </div>
        </div>
            <div class="sidebar-item recent-posts">
                @foreach($randomPostFooter as $key => $value)
                    <li style="list-style: none;padding:10px !important;color: #1ECF3B;"><i class="fa fa-forward" style="margin-right: 5px !important;"></i><a href="{{ route('blog.detail',$value->slug) }}">{{ $value->title }}</a></li>
                @endforeach
            </div>
      @endif
    </div>
  </div>
</section>