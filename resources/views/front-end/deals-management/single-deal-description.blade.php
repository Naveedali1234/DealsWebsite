@extends('front-end.layouts.app')
@section('content')
<!-- =========================
Product Details Section
============================== -->
<section class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 col-lg-9 ">
                <div class="row">
                    <div class="col-12 p0">
                        <div class="page-location">
                            <ul>
                                <li><a href="#">
                                    Home / Deal Description <span class="divider">/</span>
                                </a></li>
                                <li><a class="page-location-active" href="{{$deal->title}}">
                                    {{$deal->title}}
                                    <span class="divider">/</span>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 product-details-section">
                        <!-- ====================================
                        Deal Details Section
                        ========================================= -->
                        <div class="row">
                            <div class="product-gallery col-12 col-md-12 col-lg-6">
                                <!-- ====================================
                                Single Deal Section
                                ========================================= -->
                                <div class="row">
                                    <div class="col-md-12 product-slier-details">
                                        <a href="{{route('deal.description',$deal->id)}}" target="_blank">
                                            @if($deal->link_type=='offline')
                                            <img src="{{asset('storage/images/'.$deal->image)}}" class="figure-img img-fluid" style="width: 270px; height: 300px;" alt="Product Img">
                                            @else
                                            <img src="{{$deal->image}}" class="figure-img img-fluid" style="width: 270px; height: 300px;" alt="Product Img">
                                            @endif
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-12 col-md-12 col-lg-6">
                                <div class="product-details-gallery">
                                    <div class="list-group">
                                        <h4 class="list-group-item-heading product-title">
                                        {{$deal->title}}
                                        </h4>
                                        <div class="media">
                                            <div class="media-left media-middle">
                                                <span class="fa fa-thumbs-up" style="color:
                                                #658b5b;"> 2</span>&nbsp;
                                                <span class="fa fa-thumbs-down" style="color: #e43d3d;"> 2</span>
                                            </div>
                                            <div class="media-body">
                                                <!-- <p>3.7/5 <span class="product-ratings-text"> -1747 Ratings</span></p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group content-list">
                                        <span>Groups</span>
                                        @foreach($deal->groups as $group)
                                        
                                        <p><i class="fa fa-dot-circle-o" aria-hidden="true"></i> {{$group->name}}</p>
                                        @endforeach
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="company-header-avatar" style="background-image: url(http://commondatastorage.googleapis.com/codeskulptor-assets/lathrop/asteroid_blue.png)"></div><div style="color: black; margin-top: 23px;">{{$deal->user->name}}</div>
                                            </div>
                                            <div class="compare-btn col-6">
                                                <a style="float: right;" class="btn btn-primary btn-sm" href="{{$deal->link}}"> Get Deal <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="wd-tab-section">
                            <div class="bd-example bd-example-tabs">
                                <ul class="nav nav-pills mb-3 wd-tab-menu" id="pills-tab" role="tablist">
                                    <li class="nav-item col-6 col-md">
                                        <a class="nav-link active" id="description-tab" data-toggle="pill" href="#description-section" role="tab" aria-controls="description-section" aria-expanded="true">Description</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade active show " id="description-section" role="tabpanel" aria-labelledby="description-tab" aria-expanded="true">
                                        <div class="product-tab-content">
                                            {!! $deal->description !!}
                                        </div>
                                        <hr>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3 ">
                @include('front-end.partials.sidebar')
            </div>
            <div id="disqus_thread"></div>
                <script>
                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                
                var disqus_config = function () {
                this.page.url = '{{Request::url()}}';  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = {{$deal->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://deal-website.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>    
        </div>
       
                
    </div>
</section>
@endsection
@section('js')
<style type="text/css">
/*avatar image*/
.company-header-avatar{
width: 60px;
height: 60px;
-webkit-border-radius: 60px;
-webkit-background-clip: padding-box;
-moz-border-radius: 60px;
-moz-background-clip: padding;
border-radius: 60px;
background-clip: padding-box;
margin: 7px 0 0 5px;
float: left;
background-size: cover;
background-position: center center;
}
</style>
@endsection