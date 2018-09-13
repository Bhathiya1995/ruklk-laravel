@extends('layouts.app')

@section('content')
@include('layouts.registerform') 
  <div class="view jarallax" data-jarallax='{"speed":0.2 }' style="background-image: url('{{asset("images/main-cover.jpg")}}');  background-repeat: no-repeat; background-size: cover; background-position: center center" >
        <div class="mask rgba-white-light d-flex justyfy-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 white-text text-center">
                        <h1 class="display-3 mb-0 pt-md-5 pt-5 green-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Ruk
                            <a class="green-text font-weight-bold">.LK</a>
                        </h1>
                        <h5 class="text-uppercase pt-md-5 pt-sm-2 pt-5 pb-md-5 pb-sm-3 pb-5 green-text font-weight-bold wow fadeInDown" data-wow-delay="0.3s">Make a green world</h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <!-- project -->
 
    <section class="text-center my-5">
        <h2 class="h1-responsive font-weight-bold my-5">Who are you</h2>
        <p class="grey-text w-responsive mx-auto mb-5">You're warmly welcome to Ruk.LK. Let us know who are </p>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-5 mb-4">
                <div class="view overlay rounded z-depth-2">
                <img src="{{asset('images/buyer.jpg')}}" class="img-fluid">
               
                <div class="card-body">
                        <a href="" class="green-text"><h4 class="font-weight-bold mt-2 mb-3">Buyer</h4></a>
                        <div class="container">
                            <p>Are you interst in buying plants ? So here is the chance. Come and Join with us</p>
                             <!-- modal import-->                      
                             <div class="text-center">
                             <a href="" class="btn btn-rounded green" data-toggle="modal" data-target="#RegistrationForm" value="Volunteer" name='register' data-user="Buyer">Register</a>
                            </div>                                                                           
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="col-md-6 col-xl-5 mb-4">
                    <div class="view overlay rounded z-depth-2">
                    <img src="{{asset('images/seller.jpg')}}" class="img-fluid">
                   
                    <div class="card-body">
                            <a href="" class="green-text"><h4 class="font-weight-bold mt-2 mb-3">Seller</h4></a>
                            <div class="container">
                                <p>Are you Selling plants? Do you want to meet customers ? So here is the chance. Come and Join with us</p>
                               <!-- modal import-->                
                             <div class="text-center">
                             <button type="submit" href="" class="btn btn-rounded green" data-toggle="modal" data-target="#RegistrationForm" value="Seller" name='register' data-user="Seller">Register</a>
                            
                            </div>                             
                            
                            </div>
                        </div>
                    </div>
                    
                </div>
        </div>

        <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-5 mb-4">
                    <div class="view overlay rounded z-depth-2">
                    <img src="{{asset('images/volunteer.jpg')}}" class="img-fluid">
                   
                    <div class="card-body">
                            <a href="" class="green-text"><h4 class="font-weight-bold mt-2 mb-3">Volunteer</h4></a>
                            <div class="container">
                                <p>Are you a volunteer ? Are you interst in donating money for plant trees ? So here is the chance. Come and Join with us</p>
                                 <!-- modal import-->                
                             <div class="text-center">
                                    <a href="" class="btn btn-rounded green" data-toggle="modal" data-target="#RegistrationForm" value="Volunteer" name='register' data-user="Volunteer" >Register</a>
                                   
                                   </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
    
                <div class="col-md-6 col-xl-5 mb-4">
                        <div class="view overlay rounded z-depth-2">
                        <img src="{{asset('images/organization.jfif')}}" class="img-fluid">
                       
                        <div class="card-body">
                                <a href="" class="green-text"><h4 class="font-weight-bold mt-2 mb-3">Organization</h4></a>
                                <div class="container">
                                    <p>Are you volunteering organizations? Do you want to meet volunteers ? So here is the chance. Come and Join with us</p>
                                     <!-- modal import-->                
                                    <div class="text-center">
                                    <a href="" class="btn btn-rounded green" data-toggle="modal" data-target="#RegistrationForm" value="organization" name='register' data-user="Organization">Register</a>
                                   
                                   </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
            </div>
    </section>
@endsection
