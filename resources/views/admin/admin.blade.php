@extends('admin.adminlayout')

@section('content')
<main class="pt-5 mx-lg-5">
    <div class="row">
        <div class="col-md-4">
                <div class="container-fluid mt-3">
                        <div class="card mb-4 wow fadeIn">
                            <div class="card-body">
                                <h3>Total count</h3>
                                <p class="pt-2 px-2" style="font-size: 40px"><i class="fa fa-tree" aria-hidden="true"></i> {{$treecount}} </p>
                                <p class="pt-2 px-2" style="font-size: 40px"><i class="fa fa-cube" aria-hidden="true"></i> {{$landcount}} </p>
                                <p class="pt-2 px-2" style="font-size: 40px"><i class="fa fa-cube" aria-hidden="true"></i> {{$seedcount}} </p>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="col-md-8">
            <div class="container mt-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</main>
@endsection


