@include('welcome')




<h2 class ="recent"> Recent Post</h2>
 <div class="row">
        <div class="col-md-10 col-md-offset-1 " id="load-data" >
@foreach($client as $clients)

<div class="w3-display-container w3-text-red imagedist" >
	<a href="{{('blogpage/'. $clients->id)}}">   <img src={{$clients->featured_image}} id="imagepost">  
	
    
    <div class="w3-display-left w3-container"><p> <h3> {{$clients->title}}</h3>
    	
    	<h4> {{$clients ->excerpt}} </h4>


    </p> </div>
    <div class="w3-display-bottomleft w3-container"><p><h4> Published on </h4>
    	<h5> {{$clients ->publish_date}}
    	</h5></p> </div>
    </a>
  </div>

	

	  


     @endforeach
<div id="remove-row">
              <center>  <span class="glyphicon glyphicon-chevron-down cursor" id="btn-more" data-id="{{ $clients->publish_date }}" class="nounderline btn-block mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" >  </span> 
                <center>
                            </div>

        </div>
    </div>

<script>






$(document).ready(function(){
   $(document).on('click','#btn-more',function(){
       var id = $(this).data('id');
       $("#btn-more").html("Loading....");
       $.ajax({
           url : '{{ url("/") }}',
           method : "POST",
           data : {id:id, _token:"{{csrf_token()}}"},
           dataType : "text",
           success : function (data)
           {
              if(data != '') 
              {
                  $('#remove-row').remove();
                  $('#load-data').append(data);
              }
           
           }
       });
   });  
}); 
</script>


@include('footer')



