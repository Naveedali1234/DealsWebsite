@extends('front-end.layouts.app')
@section('css')
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<link rel="stylesheet" href="{{URL::asset('assets/css/amsify.suggestags.css')}}">
<!-- include summernote css/js -->

@endsection
@section('content')
<section id="" class="product-shop-page product-shop-full-grid">
	<div class="container">
		<h2>Submit a new Deal</h2>
		<div class="row">
			<div class=" col-12 col-md-6 col-lg-5">
				<form method="post" action="{{route('submit.deal-data')}}">
					@csrf
					<div class="form-row">
								<div class="form-group col-md-12">
									<label for="link" class="col-form-label">Deal Link</label>
									<input type="text" class="form-control" name="link" id="link" aria-describedby="link" placeholder="www.site.com">
									<small id="" class="form-text text-muted">Optional</small>
								</div>
								<div id="images">
									<hr>
								</div>
								<div class="form-group col-md-12">
									<h3>Deal Details</h3>
								</div>
								<div class="form-group col-md-6">
										<label class="sr-only" for="price">Price</label>
										<label for="price">Price</label>
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input type="text" required class="form-control" name="price" id="price" placeholder="Price">
										</div>
									</div>
									<div class="form-group col-md-6">
										<label class="sr-only" for="next_best_rice">Next Best Price</label>
										<label for="next_best_rice">Shipping Cost</label>
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input type="text" class="form-control" name="next_best_price" id="next_best_price" placeholder="Next Best Price">
										</div>
									</div>
								<div class="form-group col-md-12">
							      <label for="title">Title</label>
							      <input type="text" maxlength="140" class="form-control" id="title" placeholder="Title" required name="title">
							    </div>
							    <div class="form-group col-md-12">
								    <label for="description">Description</label>
								    <textarea class="form-control" required id="summernote" name="description" rows="3"></textarea>
								</div>
								<div class="form-group col-md-12">
									<label>Groups</label>
									<div class="clearfix"></div>
									<input type="button" required class="btn btn-primary groups-margin" name="group" value="Computer">
									<input type="button" class="btn btn-primary groups-margin" name="group" value="Health">
									<input type="button" class="btn btn-primary groups-margin" name="group" value="Education">
									<input type="button" class="btn btn-primary groups-margin" name="group" value="Mobile">
									<input type="button" class="btn btn-primary groups-margin" name="group" value="Acessories">
									<input type="button" class="btn btn-primary groups-margin" name="group" value="joystick">
									<input type="button" class="btn btn-primary groups-margin" name="group" value="Keyboard">

								</div>
								<!-- for multiple tags search -->
								<div class="form-group col-md-12">
                    <label for="title">Voucher Code</label>
                    <input type="text" class="form-control" id="voucher_code" placeholder="Voucher Code" required name="voucher_code">
                  </div>
								<div class="form-group col-md-6">
									<label for="deal_starts">Deal Starts</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
										<input type="date" required class="form-control" id="deal_starts" name="deal_starts">
									</div>
								</div>
								<div class="form-group col-md-6">
									<label for="deal_ends">Deal Expires</label>
									<div class="input-group">
										<input type="date" required class="form-control" id="deal_ends" name="deal_ends">
										<span class="input-group-addon"><span class="fa fa-calendar"></span></span>
									</div>
								</div>
								<div class="form-group col-md-6">
									<button type="submit" class="btn btn-primary">Post Deal</button>
								</div>
							</div>
							<input type="hidden" name="group_name[]" id="group_name" />
							<input type="hidden" name="computer_image" id="computer_image">
							<input type="hidden" name="online_image" id="online_image">
				</form>
			</div>

			<div class="col-12 col-md-6 col-lg-7 product-grid">
				<div class="row">
                    <div class="tab-content col-12">
                    	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                           		<div class="col-12 col-md-6 col-lg-12 reviews-load-more-full_grid">
                                 <div class="figure product-box row">
                                    <div class="col-12 col-md-12 col-lg-5 col-xl-4 p0">
                                       <!-- <div class="product-box-img"> -->
                                       	<div id="close"></div>
                                          <div id="image">
                                          <img src="{{URL::asset('assets/img/upload-image.png')}}" id="selected_image" class="figure-img img-fluid" alt="Product Img"><br><br>
                                          <h6>Upload your Own Image</h6>
                                          </div>
                                       <!-- </div> -->
                                       <!-- <div class="quick-view-btn">
                                          <div class="compare-btn">
                                             <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1"><i class="fa fa-eye" aria-hidden="true"></i> Quick view</button>
                                          </div>
                                       </div> -->
                                      <!--  <span class="badge badge-secondary wd-badge text-uppercase">New</span>
                                       <div class="wishlist">
                                          <i class="fa fa-heart active-wishlist" aria-hidden="true"></i>
                                       </div> -->
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-7 col-xl-8 p0">
                                       <div class="figure-caption text-left">
                                          <div class="row">
                                             <div class="col-12 col-md-12 col-lg-12 col-xl-12 pr-0">
                                                <!-- <div class="price-start">
                                                   <strong class="active-color"><u>$80.00</u> - <u>$75.00</u></strong>
                                                </div> -->
                                                <span class="fa fa-thumbs-up" style="color: 
                                                #658b5b;"> 2</span>&nbsp;
                                                <span class="fa fa-thumbs-down" style="color: #e43d3d;"> 2</span>
                                            </div>
                                             <!-- <div class="col-12 col-md-12 col-lg-6">
                                                <div class="rating">
                                                   <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                   <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                   <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                   <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                   <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                </div>
                                             </div> -->
                                             <div class="col-12">
                                                <div class="content-excerpt">
                                                   <h6 class="product-title"><div id="title-preview">A short descriptive title of your deal...</div></h6>
                                                   <div style="display: flex;">
	                                                   <div id="price-preview">
	                                                   	
	                                                   </div> 
	                                                   <div id="next_best_price-preview" style="margin-left: 10px;">
	                                                   	
	                                                   </div>
                                               		</div>
                                                   <p class="product-content"><div id="description-preview">Here you can describe the deal in your own words and explain to other users why it's a good deal! Please don't </div></p>
                                                </div>
                                             </div>
                                             <div class="col-12">
                                             	<div class="row">
                                             	<div class="col-6">
                                                	<div class="company-header-avatar" style="background-image: url(http://commondatastorage.googleapis.com/codeskulptor-assets/lathrop/asteroid_blue.png)"></div><div style="color: black; margin-top: 23px;">Naveed Ali</div>
                                                </div>
                                                	<div class="compare-btn col-6">
                                                   <a style="float: right;" class="btn btn-primary btn-sm" href="#"> Get Deal <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                </div>
                            </div>
                       </div>
                    </div>
						
				</div>
			</div>
		</div>
	                      
	</div>
</section>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Upload Image from Computer or insert Online Link</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div>
        	<form method="post" action="" enctype="multipart/form-data" id="upload_form" role="form">
        		@csrf
        		<div class="form-group">
        			<label for="fileToUpload">Select image from your Computer</label>
        			<input name="fileToUpload" type="file" id="fileToUpload"/>
        		</div>
        	</form>
        	<h5>OR</h5>
        	<div class="form-group">
        		<label for="onlineUrl">Online Image URL</label>
        	<input  type="text" name="onlineUrl" id="onlineUrl" placeholder="Image Url" class="form-control" />
        </div>
        <div class="form-group">
        	<input type="button" class="btn btn-primary" value="Upload Image" name="urlImageToUpload" id="urlImageToUpload" >
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection
@section('js')

<?php 
$abc = array('black','white');
 ?>
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script> -->
 <script src="{{URL::asset('assets/js/jquery.amsify.suggestags.js')}}"></script>
 <script>

 	$(document).ready(function(){
 		$('#summernote').summernote({
 			popover: {
         image: [],
         link: [],
         air: []
       },
  toolbar: [
    ['style', ['bold']],
    ['para', ['ul']],
    ['insert', ['picture']],
  ],
  callbacks: {
    onKeyup: function(e) {
      setTimeout(function(){
        let typed = $('#summernote').val();
	console.log('hello');
	if(typed==""){
		$('#description-preview').html("Here you can describe the deal in your own words and explain to other users why it's a good deal! Please don't");
	}
	else{
    	$('#description-preview').html(typed);
	}
      },200);
    }
  }
});
 		
 		//when i write in url textbox
 		$('#link').keyup(function(){
 			var url = $('#link').val();
 			//console.log('hello');
 			ajaxCallforLinkImages(url);
 			
 		});
 		$('#recallAjax').click(function(){
 			var url = $('#link').val();
 			//console.log('hello');
 			ajaxCallforLinkImages(url);
 			
 		});

 		//ajax call
 		function ajaxCallforLinkImages(url){
 			$('#images').html('<div class="loader"></div>');
 				$.ajax({
            url: "/fetch/images?url="+url,
            type: 'GET',
            dataType: "json",
            success: function(res) {
                //console.log(res);
                //var finalData = res.replace(/\\/g, "");
                //console.log(finalData);
                if(res=='nothing'){
                	console.log('hello');
                	$('#images').html('<div>No images Found, Please check your Link Again</div>');
                }
                else {
	                let contents = "<div class=swipe>"
	                $.each(res, function(index) {
	                	contents = contents+"<img src='"+res[index].url+"' style='margin-right: 2px;' height='100px' class='imgs'/>";
	            	console.log(res[index].url);

	            	//alert(data[index].TEST2);
	        		});
	                contents = contents + "</div>"
	                console.log(contents);
	                $('#images').html(contents);
                }
                // $('#image').html('<img src="'+res[0].url+'" width="100px" height="100px"></img>')
                //alert(res);
                //$('title-preview').append(res);
                //alert(res);
            },
            error: function(errorThrown){
        	$('#images').html('<div>No images Found, Please select manually</div> <input class="btn btn-primary" type="button" id="recallAjax" value="Reload again?" >');
    }
        });
 		}



 		
 //when we click on images fetched from url
 		$('.container').on('click','.imgs',function(){
    //var idimg = $(this).attr('id');
    var srcimg = $(this).attr('src');
    $('#image').html('<img src="'+srcimg+'" id="selected_image">');
    $('#close').html('<div class="img-wrap">'
    	+'<span class="close">&times;</span>'+
    	'</div>');
     $('#online_image').val(srcimg);
    

    //alert('ID is: '+ idimg+ '\n SRC: '+ srcimg);
    //$(".img2").attr('src',srcimg);
  });
 //when close button is clicked
  $('.container').on('click','.close',function(){
  	$(this).hide();
  	$('#selected_image').hide();
  	$('#image').html('<div id="image">'+
                         '<img src="/assets/img/upload-image.png" id="selected_image" class="figure-img img-fluid" alt="Product Img"><br><br>'+
                                          '<h6>Upload your Own Image</h6>');

  	$('#online_image').val('');
  	var fileName = $('#computer_image').val();
  	removeComputerUploadedImage(fileName);


  });
  //when preview image div is clicked
  $('#image').click(function(){
  	var check = $('#image').attr('src');
  	
  	$('#myModal').modal('show');
  });
  $("#fileToUpload").on('change', function(){
   // Display image on the page for viewing
   		
        readURL(this,"selected_image");
        $('#myModal').modal('hide');
        $.ajax({
        	url: "/upload-image",
            type: 'POST',
            data: new FormData($("#upload_form")[0]),
            processData: false,
    		contentType: false,
            success: function(res) {
                //console.log(res);
                //var finalData = res.replace(/\\/g, "");
                //console.log(finalData);
                console.log(res);
                $('#computer_image').val(res);
                $('#online_image').val('');
                // $('#image').html('<img src="'+res[0].url+'" width="100px" height="100px"></img>')
                //alert(res);
                //$('title-preview').append(res);
                //alert(res);
            },
            error: function(errorThrown){
        	console.log('error');
    }
        });
        $('#close').html('<div class="img-wrap">'
    	+'<span class="close">&times;</span>'+
    	'</div>');

    	//assign image url to hidden input field
    	//var imageUrl= $('#selected_image').attr('src');

    	//var i = $('#computer_image').val(imageUrl);
    	//console.log($('#computer_image').val());
    	//console.log(i.val());

   });
  $("#urlImageToUpload").on('click', function(){
   // Display image on the page for viewing
   		var url = $('#onlineUrl').val();

        $('#image').html('<div id="image">'+
                         '<img src="'+url+'" id="selected_image" class="figure-img img-fluid" alt="Product Img"><br><br>'+
                                          '<h6>Upload your Own Image</h6>');
        $('#myModal').modal('hide');
        $('#close').html('<div class="img-wrap">'
    	+'<span class="close">&times;</span>'+
    	'</div>');
    	$('#online_image').val(url);
    	var fileName = $('#computer_image').val();
    	//console.log(fileName);
    	removeComputerUploadedImage(fileName);
    	

   });
   function readURL(input , tar) {  
	if (input.files && input.files[0]) { // got sth
    // Clear image container
    //console.log($("#" + tar ).attr('src'))
    $("#" + tar ).removeAttr('src'); 

    $.each(input.files , function(index,ff)  // loop each image 
    {

        var reader = new FileReader();
        //console.log('image00');
        // Put image in created image tags
        reader.onload = function (e) {
            $('#' + tar).attr('src', e.target.result);
        }

        reader.readAsDataURL(ff);

    });
	}
	}
	//ajax call to delete the file uploaded from computer
	function removeComputerUploadedImage(fileName){

    	$.ajax({
        	url: "/delete-image?fileName="+fileName,
            type: 'GET',
            dataType: "json",
            success: function(res) {
                //console.log(res);
                //var finalData = res.replace(/\\/g, "");
                //console.log(finalData);
                //console.log(res);
                $('#computer_image').val('');
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
	}	
//when we type in title input field
$('#title').keyup(function(){

	let typed = $('#title').val();
	if(typed==""){
		$('#title-preview').html("A short descriptive title of your deal...");
	}
	else{
    	$('#title-preview').html(typed);
	}
});
//when we write in description input textfield
$('#summernote').change(function(){
	let typed = $('#summernote').val();
	console.log('hello');
	if(typed==""){
		$('#description-preview').html("Here you can describe the deal in your own words and explain to other users why it's a good deal! Please don't");
	}
	else{
    	$('#description-preview').html(typed);
	}
});
$('#price').keyup(function(e){
	if(e.keyCode>=48 && e.keyCode<=57){
		let typed = $('#price').val();
		$('#price-preview').show();
		$('#price-preview').html('<h4> $'+ typed+' - </h4>');

	}
	else{
		$('#price-preview').hide();
	}
});
$('#next_best_price').keyup(function(e){
	if(e.keyCode>=48 && e.keyCode<=57){
		let typed = $('#next_best_price').val();
		$('#next_best_price-preview').show();
		$('#next_best_price-preview').html('<h5 style="padding: 2px 3px 0px 12px; color: grey;"><strike> $'+ typed+'</strike></h5>');

	}
	else{
		$('#next_best_price-preview').hide();
	}
});
$('.groups-margin').click(function(){
	var data = $(this).val();
	var arr = new Array();
	
	var hidden_input_data = $('#group_name').val();
	var values = hidden_input_data.replace(/,\s+/g, ',').split(',');
	if(jQuery.inArray(data, values) >= 0){
		var index = values.indexOf(data);
		if(index >= 0){
			//console.log(index);
			values.splice(index, 1);
			arr.push(values);
			$('#group_name').val(arr);
			console.log(values);
			$(this).css('background-color','#0069d9');
		}
		//console.log('found');
		
	}
	else{
		$(this).css('background-color','green');
		
		arr.push(data);
	//console.log(arr);
		arr.push(values);
	$('#group_name').val(arr);
	//console.log($('#group_name').val());
	}
	
})

 	});
 </script>
 <style type="text/css">
 	.swipe{
    overflow:auto;
    white-space:nowrap;
}
ul {list-style-type: square; margin-left: 3px;}


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
/* Add a hover effect (blue shadow) */
/*img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}*/
.groups-margin{
	margin: 2px 2px 2px 2px;
}
.close:hover{
	cursor: pointer;
}
.imgs {
    border: 1px solid #ddd;  /*Gray border */
    border-radius: 4px;  /* Rounded border*/ 
    padding: 5px;  Some padding 
    width: 150px;  /*Set a small width */
}
/*.img-wrap {
    position: relative;
    ...
}
.img-wrap .close {
    position: absolute;
    top: 2px;
    right: 2px;
    z-index: 100;
}*/
 </style>
 <style>
.loader {
  border: 10px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 90px;
  height: 90px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
 <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
@endsection