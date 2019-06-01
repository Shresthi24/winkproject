
<h2 class ="recent1"> Previous Post</h2>
 <div class="row comp">
        <div class="col-md-10 col-md-offset-1 " id="load-data" >
@foreach($client as $clients)

<div class="w3-display-container   imagedist1" >
    <a href="{{('blogpage/'. $clients->id)}}">   <img src={{$clients->featured_image}} id="imagepost">  
    
    
    <div class="w3-display-left w3-container"><p> <h3><b> {{$clients->title}} </b></h3>
        
        <h4> {{$clients ->excerpt}} </h4>


    </p> </div>
    <div class="w3-display-bottomleft w3-container"><p><h4> Published on </h4>
        <h5> {{$clients ->publish_date}}
        </h5></p> </div>
    </a>
  </div>

    

      


     @endforeach