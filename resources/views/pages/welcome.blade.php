@extends('main') 

@section('title'.'|Homepage')

@section('content')

        
    <div class="row" >
            <div class="col-md-12">
               <div class="jumbotron "> 
                  <div class=
                  <div class="mask rgba-black-strong d-flex justify-content-center">
                    <h1 class='topic' align="center">Welcome to Ruk wiki</h1>
                  </div>
                   
                  
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
       

                  

          <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Posts</a> </p> 
           

                      <p></p>

            
              </div>
            </div>
    </div> <!-- end of row -->
     
  <div class="row">
         <div class="col-md-8">
             
            @foreach($posts as $post)

            <div class="post">
                   <h3>{{ $post-> title}}</h3>
                      <p> {{ substr(strip_tags($post->body),0 ,300) }} {{strlen( strip_tags($post-> body)) >300 ?"...": ""}}</p>
                          <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-success">Read More</a>
            </div>
          
      <hr>

      @endforeach


      </div>
         <div class="col-md-3 col-md-offset-1 ml-5">
            <h2>Categories</h2>

            @foreach($categories as $category)
              <div class="card mt-2 ">
                <div class="card-body">
                  <img class="card-img-top" src="{{asset('wikiimages/'.$category->name.'.jpg')}}">
                    <h6 class="mt-2 mb-1 text-center"><a href="{{ route('category',$category->id) }}">{{ $category->name }}</a></h6>
                </div>
              </div>
            @endforeach
</div>

 




         </div>

      </div>


    

@stop


