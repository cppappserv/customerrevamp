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

   public function getmsg($id,$id2,$id3,$id4,$id5,$id6)
   {
    $i=1;
    $txt = 	'<div class="row" id="rowsjaminan'.$i.'">'.
							'	<div class="col-md-2">'.
							'		<div class="form-group row">'.
							'			<div class="col-sm-12">'.
							'				<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis">	'.
							'			</div>'.
							'		</div>'.
							'	</div>'.
							'	<div class="col-md-5">'.
							'		<div class="form-group row">'.
							'			<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis</label>'.
							'			<div class="col-sm-6">'.
							'				<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis">	'.
							'			</div>'.
							'			<label for="inputbisnislain" class="col-sm-3 col-form-label">Bisnis</label>'.
							'		</div>'.
							'	</div>'.
							'	<div class="col-md-3">'.
							'		<div class="form-group row">'.
							'			<label for="inputbisnislainrp" class="col-sm-3 col-form-label">123</label>'.
							'			<div class="col-sm-9">'.
							'				<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="Nilai Omset">'.
							'			</div>'.
							'		</div>'.
							'	</div>'.
							'	<div class="col-md-2">'.
							'		<div class="form-group row">'.
							'			<div class="col-sm-10">'.
							'				<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="Nilai Omset">'.
							'			</div>'.
							'			<div class="col-sm-2">'.
							'				<button type="button" name="remove" id="'.$i.'" class="btn btn-danger btn_removea">X</button>'.
							'			</div>'.
							'		</div>'.
							'	</div>'.
                            '</div>';
       return response()->json(array('msg'=> $txt), 200);
   }
}