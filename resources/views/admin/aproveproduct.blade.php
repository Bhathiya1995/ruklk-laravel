@extends('admin.adminlayout')

@section('content')
<main class="pt-5 mx-lg-5">
    <div class="card mb-4">
        <div class="card-body light-blue lighten-1">
            <h3 class='white-text text-center'>Products for aprovel</h3>
        </div>
    </div>
    <div class="card">
        <div class="card-body px-5 py-3 ">
            @if(count($product)>1)
                @foreach ($product as $product)
                    <div class="row border my-3 px-3">
                        <div class="col-md-2">
                            <img src= "{{asset('Products/'.$product->productImage)}}" style='width:90%; height:90%;' class='px-1 py-1' alt="sample photo">    
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <h5 class="text-capitalize  mx-1 px-1 py-4">{{$product->productName}} {{$product->category}}</h5>
                            </div>
                            <div class="row">
                                <p>{{$product->productDescription}}</p>
                            </div>
                            <div class="row">
                                <p></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row"><p class="text-capitalize  mx-1 px-4 py-4">{{$product->location}}</p></div>
                            <div class="row px-4">
                                <p></i> Rs. {{$product->productPrice}}</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row pt-5 mt-3">
                                <div class="col-md-6">
                               <a href="{{url('admin/'.Auth::user()->id.'/approveproduct/'.$product->id)}}">
                                    <h1><i class=" aicon fa fa-check" aria-hidden="true"></i></h1>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{url('admin/'.Auth::user()->id.'/rejectproduct/'.$product->id)}}">
                                        <h1><i class="aicon fa fa-window-close" aria-hidden="true"></i></h1>
                                    </a>  
                                </div>
                            </div>
                        </div>
                        
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</main>
@endsection 