@extends('frontend.master')
@section('content')

@foreach($data->items as $key =>$row)
<div class="post-outer-container col mt-0 mb-4 px-0 px-sm-2 left top position-relative transition-post-home">
    <div class="post-outer post-home-outer dv-blog-box"> 
        <div class="post has-featured-image">       
            <div class="snippet-thumbnail overflow-hidden img-fluid img-thumbnail-h">
                <a href="{{URL::to('/watch?v=')}}/{{$row->id->videoId}}">
                    <img alt="Image" sizes="(max-width: 576px) 100vw, (max-width: 1024px) 576px, 490px" src="{{$row->snippet->thumbnails->default->url}}" srcset="{{$row->snippet->thumbnails->medium->url}}">
                    <span class="dv-post-home-overlay"></span>
                </a>
                <!-- <div class="posts-category-gallery posts-label">
                    <a class="label Google" href="https://davidews-white.blogspot.com/search/label/Google" rel="tag">Google</a>
                    <div class="icon-Google icon-default icon-hover d-flex text-center align-items-center justify-content-center"></div>
                    <a class="label GooglePixel" href="https://davidews-white.blogspot.com/search/label/GooglePixel" rel="tag">GooglePixel</a>
                    <div class="icon-GooglePixel icon-default icon-hover d-flex text-center align-items-center justify-content-center"></div>
                </div> -->
                <span class="posts-timestamp-wrap"><time class="published" datetime="2021-08-03T06:09:00-07:00" title="2021-08-03T06:09:00-07:00">  {{date('M d Y', strtotime($row->snippet->publishedAt))}} </time></span>
            </div>
            <div class="card-body p-0 pt-1 px-3 px-sm-0">
                <div class="dv-blog-meta position-relative">
                    <div class="post-header">
                        <div class="post-header-line-1">
                            <span class="byline post-author vcard">
                                <!-- <span class="post-author-label"> </span>
                                <span class="fn">
                                    <span class="author-avatar-wrap d-flex text-start align-items-center justify-content-center">
                                    <div class="author-avatar" style="background-image: url(&quot;//4.bp.blogspot.com/-sFpxiC7i1pg/XriJuYMQ4aI/AAAAAAAAAmE/UgUaHmf4gEE1pRx21NA9s3Eev02pW-ScQCK4BGAYYCw/s113-pf/LOGO_FARYCREATE_ICON.png&quot;);">
                                    </div> 
                                    <span class="author-text-avatar">Farycreate
                                        <span class="icon-author"><i class="fas fa-check"></i></span>
                                    </span>
                                </span> -->
                    </span>
                </span>
            </div>
        </div>
    </div>
    <div class="blog-title">  <a name="680034192365361613"></a> 
    <h3 class="post-title entry-title">  <a href="{{URL::to('/watch?v=')}}/{{$row->id->videoId}}">{{$row->snippet->title}}</a> </h3>
</div>
</div>
</div>
</div>
</div>
@endforeach

@endsection