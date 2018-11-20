 <!-- Sidebar -->
 <div class="sidebar-fixed position-fixed grey darken-4">
        <div class="list-group list-group-flush">
            <a href="{{url('admin/'.Auth::user()->id)}}" class="list-group-item grey darken-4 waves-effect">
                <i class="fa fa-pie-chart mr-3 mt-2"></i>Dashboard
            </a>
            
            <div class="dropdown">
                <a class="grey darken-4 waves-effect dropdown-toggle white-text ml-3  mt-2"  id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user mr-3 mt-2"></i>Approve
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                        <h6 class="dropdown-header">To Approve</h6>
                        <a class="dropdown-item" href="{{url('admin/'.Auth::user()->id.'/approve')}}">Product Approve</a>
                        <a class="dropdown-item" href="{{url('admin/'.Auth::user()->id.'/approve')}}">Advertisment Approve</a>
                        <a class="dropdown-item" href="#">Event Approve</a>
                      </div>
                    </div>
            </div>

            <a href="" class="list-group-item list-group-item-action waves-effect grey darken-4 white-text">
                <i class="fa fa-table mr-3 mt-2"></i>Tables</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect grey darken-4 white-text">
                <i class="fa fa-map mr-3 mt-2"></i>Maps</a>
            <a href="#" class="list-group-item list-group-item-action waves-effect grey darken-4 white-text">
                <i class="fa fa-money mr-3 mt-2"></i>Orders</a>

                <div class="dropdown">
                        <a class="grey darken-4 waves-effect dropdown-toggle white-text"  id="dropdownMenu3" data-toggle="dropdown"
                          aria-haspopup="true" aria-expanded="false">
                          Dropdown
                    </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
                          <h6 class="dropdown-header">Dropdown header</h6>
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>
        </div>
    
    </div>
    <!-- Sidebar -->