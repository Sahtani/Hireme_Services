<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;
use Illuminate\Support\Facades\DB;
 

class serviceController extends Controller
{
   public function index()
   {
      $services = ServiceModel::with("category")->get();
       return view('service', compact('services'));
   }
   public function add(){
      return view("add");
   }
}
