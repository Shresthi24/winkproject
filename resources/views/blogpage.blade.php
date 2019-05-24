@include('welcome')




@foreach($client as $clients)
 <div class="w3-display-container w3-text-red"  >
    <img src={{$clients->featured_image}} style="width: 100%; height:450px">
    
    <div class="w3-display-left w3-container"><p> <h3> {{$clients->title}}</h3>
    	
    	<h4> {{$clients ->excerpt}} </h4>


    </p></div>
    <div class="w3-display-bottomleft w3-container"><p><h4> Published on </h4>
    	<h5> {{$clients ->publish_date}}
    	</h5></p></div>
    
  </div>

	<div class="blogpage"> 	 {!!(strip_tags($clients->body, "<p>,</p>,<div>,</div>,<hr>, <b>,</b>,<br>"))!!}
		
</div>
	

@endforeach
	  


     



@include('footer')