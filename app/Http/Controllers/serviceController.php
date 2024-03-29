<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceModel;
use App\Models\categoryModel;

use Illuminate\Support\Facades\DB;
 

class serviceController extends Controller
{
   public function index()
   {
      $services = ServiceModel::with("category")->get();
       return view('service', compact('services'));
   }
   public function create(){
      $categories = categoryModel::all();
    return view('create', ['categories' => $categories]);
   }
   public function store(Request $request){
   
      $title=$request->title;
      $desc=$request->desc;
      $cost=$request->cost;
      $email=$request->email; 
      $phone=$request->phone;
      $cat=$request->cat;

      // validation
      $request->validate([
         'title'=>['required','min:4'],
         'desc'=>['required','min:8'],
         'email' => ['required', 'email'],
         'cost' => ['required', 'numeric'],
         'phone' => ['required', 'regex:/^\d{10}$/'],
      ]);
      
// Insertion
ServiceModel::create([
   'title'=>$title,
   'desc'=>$desc,
   'cost'=>$cost,
   'email'=>$email,
   'tel'=>$phone,
   'cat_id'=>$cat,
]);

   return redirect()->route('services.index');
}}
