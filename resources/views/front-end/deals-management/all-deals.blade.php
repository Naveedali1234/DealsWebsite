@extends('front-end.layouts.app')
@section('content')
<section id="product-amazon" class="product-shop-page product-shop-full-grid">
         <div class="container">
            <div class="row">
               <div class=" col-12 col-md-8 col-lg-9 product-grid">
                  <div class="row">
                     <div class="col-12">
                        <div class="filter row">
                           <!-- <div class="col-8 col-md-9 col-xs-9"> -->
                                  <ul class="nav nav-pills" style="list-style: none;">
                                   <li role="presentation" class="active sub-nav"><a href="#">Hot</a></li>
                                   <li role="presentation" class="sub-nav"><a href="#">New</a></li>
                                   
                                 </ul>
                           <!-- </div> -->
                           <!-- <div class="col-4 col-md-3 col-xs-3 sorting text-right">
                              <ul class="nav nav-tabs shop-btn" id="myTab" role="tablist">
                                 <li class="nav-item ">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-bars" aria-hidden="true"></i></a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-th" aria-hidden="true"></i></a>
                                 </li>
                              </ul>
                           </div> -->
                        </div>
                     </div>
                     <div class="tab-content col-12">
                        
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                           <div class="row">
                              @foreach($deals as $deal)
                              <div class="col-12 col-md-6 col-lg-12 reviews-load-more-full_grid">
                                 <figure class="figure product-box row">
                                    <div class="col-12 col-md-12 col-lg-5 col-xl-4 p0">
                                       <div class="product-box-img">
                                          <a href="{{route('deal.description',$deal->id)}}">
                                             @if($deal->link_type=='offline')
                                          <img src="{{asset('storage/images/'.$deal->image)}}" class="figure-img img-fluid" style="width: 270px; height: 233px;" alt="Product Img">
                                          @else
                                          <img src="{{$deal->image}}" class="figure-img img-fluid" style="width: 270px; height: 233px;" alt="Product Img">
                                          @endif
                                          </a>

                                       </div>
                                       
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7 col-xl-8 p0">
                                       <div class="figure-caption text-left">
                                          <div class="row">
                                             <div class="col-4 col-md-4 col-lg-4 col-xl-4 pr-0">
                                                <!-- <div id="deal_like"> -->
                                                   <a href="{{ route('deal.like',$deal->id)}}" class="deal_like">
                                                      
                                                      @if($deal->deal_likes()->where('user_id',$deal->user_id)->where('deal_id',$deal->id)->count() > 0)
                                                      
                                                <span class="fa fa-thumbs-up fa-2x" class="like_count" style="color: 
                                                green;">&nbsp;{{$deal->deal_likes()->count()}}</span>
                                                @else
                                                   <span class="fa fa-thumbs-up fa-2x" class="like_count" style="color: 
                                                black;">&nbsp; {{$deal->deal_likes()->count()}}</span>
                                                @endif
                                                

                                             </a>
                                             <!-- </div> -->
                                             &nbsp;
                                                <!-- <div id="deal_dislike">
                                                <span class="fa fa-thumbs-down" style="color: black;"> 2</span>
                                             </div> -->
                                             </div>
                                             <div class="col-4 col-md-4 col-lg-4 col-xl-4 pr-0">
                                               <span style="color: black;">posted {{$deal->created_at->diffForHumans()}}</span> 
                                             </div>
                                             <div class="col-4 col-md-4 col-lg-4 col-xl-4 pr-0">
                                               <span style="color: black;">Expires on {{date("d/m/Y", strtotime($deal->deal_end_date))}}</span> 
                                             </div>
                                             <div class="col-12">
                                                <div class="content-excerpt">
                                                   <h2><a href="{{route('deal.description',$deal->id)}}">{{$deal->title}}</a></h2>
                                                   <hr>
                                                   <div style="display: flex;">
                                                      <div id="price-preview">
                                                         <h5>{{$deal->price}}</h5>
                                                      </div> 
                                                      <div id="next_best_price-preview" style="margin-left: 10px;">
                                                         <h6 style="padding: 2px 3px 0px 12px; color: grey;"><strike> {{$deal->next_best_price}}</strike></h6>
                                                      </div>
                                                   </div>
                                                   
                                                </div>
                                             </div>
                                            <div class="col-12">
                                                <div class="row">
                                                <div class="col-4">
                                                   <div class="company-header-avatar" style="background-image: url(http://commondatastorage.googleapis.com/codeskulptor-assets/lathrop/asteroid_blue.png)"></div><div style="color: black; margin-top: 23px;">{{$deal->user->name}}</div>
                                                </div>
                                                <div class="col-4" style="margin-top: 23px;">
                                                      <span class="fa fa-comments-o" style="color: black;"></span>
                                                      <a href="{{route('deal.description',$deal->id)}}" style="color: black; "></a>
                                                   
                                                </div>
                                                   <div class="compare-btn col-4">
                                                   <a style="float: right;" class="btn btn-primary btn-sm" href="{{$deal->link}}"> Get Deal <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                          </div>
                                       </div>
                                    </div>
                                 </figure>
                              </div>
                              @endforeach
                              
                           </div>
                        </div>
                     </div>
                     <div class="col-12 text-center">
                        <a href="#" id="loadMore" class="btn btn-primary wd-shop-btn">
                        Show more
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-md-4 col-lg-3 ">
                 @include('front-end.partials.sidebar')
               </div>
         </div>
      </section>
@endsection
 @section('js')
 <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/custom.css')}}">
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
 <script type="text/javascript">
    $(document).ready(function(){
      // Configure/customize these variables.
    var showChar = 10;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Show more >";
    var lesstext = "Show less";
    //console.log('im here');

    $('.product-content').each(function() {
        var content = $(this).text().replace(/<\/?[^>]+(>|$)/g, "");
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $('.deal_like').click(function(e){
      e.preventDefault();
      //$(this).attr('id');
      //console.log($(this).find('span') );
      //console.log($(this).attr('href'));
      $.ajax({
         url: $(this).attr('href'),
            type: 'GET',
            dataType: "json",
            context: this,
            success: function(res) {
               //console.log(res);
               if(res=='notSignedIn'){
                  $('.bd-example-modal-lg2').modal('show');
               }
               else if(res=='liked'){
                  $('#like_count').css('color: green');
                  alert('you already liked this deal');
                  
               }
               else{
                  console.log('hi');

                  $(this).find('span').replaceWith('<span class="fa fa-thumbs-up" id="like_count" style="color:green;">'+res+'</span>');
               }
                //console.log(res);
                //var finalData = res.replace(/\\/g, "");
                //console.log(finalData);
                //console.log(res);
                
                //console.log($('#computer_image').val('')+'hello');
                // $('#image').html('<img src="'+res[0].url+'" width="100px" height="100px"></img>')
                //alert(res);
                //$('title-preview').append(res);
                //alert(res);
            },
            error: function(errorThrown){
         console.log('errorr');
    }
        });
    });
    });
 </script>

           <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script
           src="https://code.jquery.com/jquery-3.3.1.min.js"
           integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
           crossorigin="anonymous"></script> -->
           @endsection
           