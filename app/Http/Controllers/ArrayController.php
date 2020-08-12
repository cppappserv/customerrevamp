<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\models\usradditional;
use Validator;
 
class ArrayController extends Controller
{
   public function addMore()
   {
       return view("addMore");
   }


   public function addMorePost(Request $request)
   {
       $rules = [];
       foreach($request->input('desc') as $key => $value) {
           $rules["desc.{$key}"] = 'required';
       }

       $validator = Validator::make($request->all(), $rules);
       if ($validator->passes()) {
           foreach($request->input('desc') as $key => $value) {
               kodepost::create(['desc'=>$value]);
           }
           return response()->json(['success'=>'done']);
       }
       return response()->json(['error'=>$validator->errors()->all()]);
   }
}