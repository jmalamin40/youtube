@extends('frontend.master')
@section('content')


<div class='container overflow-hidden pt-0 pt-lg-3'>
        <div class='row'>
            <div class='col-12 col-sm-12 col-md-12 col-lg px-0 px-sm-2 page-body-wrap'>
                <main class='main-wrapper page-body-main dv-post-home' id='main' role='main' tabindex='-1'>
                  <!-- Results Message Space Original -->
                  <h2 class='main-heading'>Posts</h2>
                  <div class='theme-options section' id='theme-option-sec-03' name='Theme Option - Latest Posts'>
                    <div class='widget HTML' data-version='2' id='HTML18'>
                      <style type='text/css'>
                        .noHideBlogPosts .section-main-post-blog {display: none;}
                      </style>
                    </div>
                  </div>
                  <div class='main w-100 section' id='page_body' name='Page body'>
                    <div class='widget Text' data-version='2' id='Text3'>
                        <div class='heading-head d-flex text-start align-items-center'>
                            <a href='/search'>
                              <h3 class='title'>Latest Posts</h3>
                            </a>
                            <a class='view-more' href='/search'> View All <span class='more-icon-post'></span></a>
                        </div>
                    </div>
                    <div class='widget Blog' data-version='2' id='Blog1'>
                      <div class='blog-posts hfeed container' >
                        @foreach($data->items as $key =>$row)
                        <div class="post-outer-container col mt-0 mb-4 px-0 px-sm-2 left top position-relative transition-post-home">
                            <div class="post-outer post-home-outer dv-blog-box"> 
                                <div class="post has-featured-image">       
                                    <div class="snippet-thumbnail overflow-hidden img-fluid img-thumbnail-h">
                                        <a href="{{URL::to('/video/')}}/{{$row->id->videoId}}">
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
                            <h3 class="post-title entry-title">  <a href="{{URL::to('/video/')}}/{{$row->id->videoId}}">{{$row->snippet->title}}</a> </h3>
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>
                        @endforeach
                          
                      </div>
                    </div>
                    <div class='blog-pager container' id='blog-pager'>
                      <nav aria-label='Page navigation'>
                        <ul class='pagination flex-row justify-content-center align-items-center mt-5'>
                          <li class='page-item'>
                          <a class='blog-pager-older-link' href='https://davidews-white.blogspot.com/search?updated-max=2021-08-01T09:07:00-07:00&amp;max-results=10' id='Blog1_blog-pager-older-link' title='Older Posts'>
                          Older Posts
                          </a>
                          <button class='post-pagination-icons' href='https://davidews-white.blogspot.com/search?updated-max=2021-08-01T09:07:00-07:00&amp;max-results=10' id='post-pagination-icons'>
                          <svg class='bi bi-chevron-right' fill='currentColor' height='1em' viewBox='0 0 16 16' width='1em' xmlns='http://www.w3.org/2000/svg'>
                          <path d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z' fill-rule='evenodd'></path>
                          </svg>
                          </button>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                
                  <div class='theme-options section' id='theme-option-sec-04' name='Theme Option - Page Title'>
                    <div class='widget HTML' data-version='2' id='HTML11'>
                      <style>
                        .dv-page-title-wrap .dv-page-title-Image-wrap {
                            background-position: left top; /* alineación */
                        }
                      </style>
                    </div>
                    <div class='widget HTML' data-version='2' id='HTML12'>
                      <style>
                        .dv-page-title-wrap .dv-page-title-Image-wrap {
                            background-repeat: no-repeat; /* alineación */
                        }
                      </style>
                    </div>
                    <div class='widget HTML' data-version='2' id='HTML14'>
                      <style>
                        .dv-page-title-wrap .dv-page-title-Image-wrap {
                            background-size: cover; /* tamaño */
                        }
                      </style>
                    </div>
                    <div class='widget HTML' data-version='2' id='HTML21'>
                    </div>
                    <div class='widget HTML' data-version='2' id='HTML15'>
                      <style>
                        .dv-page-title-overlay {
                            opacity: 0.8; /* tamaño */
                        }
                      </style>
                    </div>
                  </div>
                </main>
              </div>
            </div>
          </div>
      </div>
      <div class='clear'></div>
      <!-- ============ Posts section ============= -->

      <div class='clear'></div>
    </div>

@endsection