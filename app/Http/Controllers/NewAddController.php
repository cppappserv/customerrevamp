<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbluser;
use App\Models\kodepost;
use DB;

class NewAddController extends Controller
{
    /**
     * create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * show the application dashboard.
     *
     * @return \illuminate\contracts\support\renderable
     */

   public function jaminan($id,$id2,$id3,$id4,$id5,$id6)
   {
      if ($id3=='-'){$id3='';}
      if ($id4=='-'){$id4='';}
      if ($id5=='-'){$id5='';}
      if ($id6=='-'){$id6='';}

      $i=1;
      $txt = 	'<div class="row" id="rowsjaminan'.$i.'">'.
							'	<div class="col-md-2">'.
							'		<div class="form-group row">'.
							'			<div class="col-sm-12">'.
                     '				<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis" value="'.$id2.'" disabled>'.
                     '           <input type="hidden" class="form-control" id="inputJaminanid[]" name="inputJaminanid[]" value="'.$id1.'">'.	
							'			</div>'.
							'		</div>'.
							'	</div>'.
							'	<div class="col-md-5">'.
							'		<div class="form-group row">'.
							'			<label for="inputbisnislain" class="col-sm-3 col-form-label">'.$id3.'</label>'.
							'			<div class="col-sm-6">'.
							'				<input type="text" class="form-control" id="inputbisnislain[]" name="inputbisnislain[]" placeholder="Nama Bisnis">	'.
							'			</div>'.
							'			<label for="inputbisnislain" class="col-sm-3 col-form-label">'.$id4.'</label>'.
							'		</div>'.
							'	</div>'.
							'	<div class="col-md-3">'.
							'		<div class="form-group row">'.
							'			<label for="inputbisnislainrp" class="col-sm-3 col-form-label">'.$id5.'</label>'.
							'			<div class="col-sm-9">'.
							'				<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]" placeholder="'.$id5.'">'.
							'			</div>'.
							'		</div>'.
							'	</div>'.
							'	<div class="col-md-2">'.
							'		<div class="form-group row">'.
							'			<div class="col-sm-10">'.
							'				<input type="text" class="form-control" id="inputbisnislainrp[]" name="inputbisnislainrp[]">'.
							'			</div>'.
							'			<div class="col-sm-2">'.
							'				<button type="button" name="remove" id="'.$i.'" class="btn btn-danger btn_removea">X</button>'.
							'			</div>'.
							'		</div>'.
							'	</div>'.
                     '</div>';
       return response()->json(array('msg'=> $txt), 200);
   }

   public function assetpribadi($seq,$desc,$info,$info2,$info3,$info4)
   {
      if ($info =='-'){$info ='';}
      if ($info2=='-'){$info2='';}
      if ($info3=='-'){$info3='';}
      if ($info4=='-'){$info4='';}
      $i=1;
      $txt = 	'
         <div class="row" id="rowsassetpribadi'.$i.'">
            <div class="col-md-2">
               <div class="form-group row">
                  <div class="col-sm-12">
                     <input type="text" class="form-control" id="inputasetpribadi[]" name="inputasetpribadi[]" value="'.$desc.'">
                  </div>
               </div>
            </div>
            <div class="col-md-5">
               <div class="form-group row">
                  <label for="inputbisnislainrp" class="col-sm-2 col-form-label">'.$info.'</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" id="inputAssetValue[]" name="inputAssetValue[]">	
                     <input type="hidden" class="form-control" id="inputAssetSseq[]" name="inputAssetSseq[]">	
                  </div>
                  <label for="inputbisnislainrp" class="col-sm-2 col-form-label">'.$info2.'</label>
               </div>
            </div>
            <div class="col-md-3">
               <div class="form-group row">
                  <label for="inputasetpribadirp" class="col-sm-4 col-form-label">'.$info3.'</label>
                  <div class="col-sm-8">
                     <input type="text" class="form-control" id="inputAssetAlamat[]" name="inputAssetAlamat[]">	
                  </div>
               </div>
            </div>
            <div class="col-md-2">
               <div class="form-group row">
                  <div class="col-sm-10">
                     <input type="text" class="form-control" id="inputAssetLain[]" name="inputAssetLain[]">	
                  </div>
                  <div class="col-sm-2">
                     <button type="button" name="remove" id="'.$i.'" class="btn btn-danger btn_remove8">X</button>
                  </div>
               </div>
            </div>
         </div>
      ';
       return response()->json(array('msg'=> $txt), 200);
   }
}
