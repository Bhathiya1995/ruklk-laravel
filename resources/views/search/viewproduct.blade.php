@extends('layouts.app')
<div class="mb-5">
    @include('layouts.header')
</div>
@section('content')

<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card my-3">
                <div class="card-body pb-1 container">
                    <h2 class=" my-5  mx-5 h1-responsive text-capitalize font-weight-bold ">{{$item->productName}}</h2>
                    
                <div class="row">
                    <div class="col-md-4 mx-5 ml-2">
                        <img src= "{{asset('Products/'.$item->productImage)}}" class="w-100" alt="sample photo" >
                    </div>
                    <div class="col-md-6 ">
                        <h6 clsss='mx-5 px-5 text-capitalize'> <i class="fa fa-user-o" aria-hidden="true"></i> {{$seller->firstname}} {{$seller->secondname}}</h6>
                        <p class="py-4 grey-text text-capitalize"> <i class="fa fa-edit" aria-hidden="true"></i> {{$item->productDescription}}</p>

                        <h3 class="text-capitalize"><i class="fa fa-money" aria-hidden="true"></i> Rs {{$item->productPrice}}.00</h3>
                        <h3 class="mt-5 text-capitalize"><i class="fa fa-location-arrow" aria-hidden="true"> {{$item->location}}</i></h3>
                        <h3 class="my-5 text-capitalize"><i class="fa fa-phone" aria-hidden="true"></i> {{$seller->mobileno}}</i></h3>

                        <div id="map"></div>
                        
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function initMap(){
        var uluru ={lat: -25.344, lng: 131.036};
        var map = new google.maps.Map(document.getElementById('map'),{zoom: 4, center: uluru });
        var marker = new google.maps.Marker({position: uluru, map: map});
    }
    
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAooDiOrI5DkJhCzc3MDARImiS1hTNCTqU&callback=initMap">
</script>
@include('layouts.footer')