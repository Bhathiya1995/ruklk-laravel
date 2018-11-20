<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function vieworganizationpage($id){
        return view('organization.organization');
    }
}
