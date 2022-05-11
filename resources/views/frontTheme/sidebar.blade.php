<link rel="stylesheet" type="text/css" href="{{ asset('frontTheme/assets/css/sidebar.css') }}">
<div class="sidebar">

    <div class="search-box">
        <div class="row">
            <div class="col-md-12">
                <h3 class="sidebar-title">Search</h3>
            </div>
        </div>
    </div>
    {{-- <div class="sidebar-item search-form">
        <form action="">
            <input type="text">
            <button type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div> --}}
</div>

    {{-- <h3 class="sidebar-title">Categories</h3>
    <div class="sidebar-item categories">
        <ul>
            @foreach($latestCategory as $key => $value)
              <li><a href="{{ route('blog.cat', $value->slug ) }}">{{ $value->name }}</a></li>
            @endforeach
            <li><a href="#">Educaion <span>(14)</span></a></li>
        </ul>
    </div> --}}
<div class="sidebar">
    <div class="search-box">
        <div class="row">
            <div class="col-md-12">
                <h3 class="sidebar-title">Popular Posts</h3>
            </div>
        </div>
    </div>
    {{-- <div class="sidebar-item recent-posts">
        @foreach($popularPosts as $key => $value)
            <li><i class="fas fa-chevron-right"></i> <a href="{{ route('blog.detail', $value->slug ) }}">{{ $value->title }}</a></li>
        @endforeach

    </div> --}}
</div>

<div class="sidebar">
    <div class="search-box">
        <div class="row">
            <div class="col-md-12">
                <h3 class="sidebar-title">Recent Posts</h3>
            </div>
        </div>
    </div>
    <div class="sidebar-item recent-posts">
        <ul style="padding-left: 0px !important; list-style: none;">
            @foreach($latestBlogLimit as $key => $value)
              <li style="padding:10px !important;color:#1ECF3B;"><i class="fa fa-forward" style="margin-right: 5px !important;"></i> <a href="{{ route('blog.detail', $value->slug ) }}">{{ $value->title }}</a></li>
            @endforeach
          </ul>

    </div>
</div>
<div class="sidebar">
    <div class="search-box">
        <div class="row">
            <div class="col-md-12">
                <h3 class="sidebar-title">Category</h3>
            </div>
        </div>
    </div>
    <div class="sidebar-item tags sidebar-tag">
        <ul>
            @foreach($latestCategory as $key => $value)
              <li><a href="{{ route('blog.cat', $value->slug ) }}">{{ $value->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
