<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbluser;
use App\Models\kodepost;
use App\Models\Usrprofile;
use App\Models\Usradditional;
use App\Models\Dtadditional;
use App\Models\Tblgroupuser;
use App\Models\Tblobject;
use App\Models\Tbluserphoto;
use App\Models\Zbranch;
use App\Models\Usrupload;
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

      $dis2=($id3=="Luas"?"number":"text");
      if($id5==""){$inp="hidden";} else {$inp="text";}

      $i=1;
      $txt = 	'
         <div class="row" id="rowsjaminan'.$i.'">
            <div class="col-md-2">
               <div class="form-group row">
                  <div class="col-sm-12">
                     <input type="text" class="form-control" id="inputJaminanPribadi[]" name="inputJaminanPribadi[]" value="'.$id2.'" disabled>	
                     <input type="hidden" class="form-control" id="inputJaminanid[]" name="inputJaminanid[]" value="'.$id.'">	
                  </div>
               </div>
            </div>

            <div class="col-md-5">
               <div class="form-group row">
                  <label for="inputbisnislain" class="col-sm-3 col-form-label">'.$id3.'</label>
                  <div class="col-sm-6">
                     <input type="'.$dis2.'" class="form-control" id="inputJaminanValue[]" name="inputJaminanValue[]">	
                  </div>
                  <label for="inputbisnislain" class="col-sm-3 col-form-label">'.$id4.'</label>
               </div>
            </div>

            <!-- /.col -->
            <div class="col-md-3">
               <div class="form-group row">
                  <label for="inputbisnislainrp" class="col-sm-3 col-form-label">'.$id5.'</label>
                  <div class="col-sm-9">
                     <input type="'.$inp.'" class="form-control" id="inputJaminanAlamat[]" name="inputJaminanAlamat[]">	
                  </div>
               </div>
            </div>
            <div class="col-md-2">
               <div class="form-group row">
                  <div class="col-sm-10">
                     <input type="'.$inp.'" class="form-control" id="inputJaminanLain[]" name="inputJaminanLain[]">	
                  </div>
                  <div class="col-sm-2">
                     <button type="button" name="remove" id="'.$i.'" class="btn btn-danger btn_removea">X</button>
                  </div>
               </div>
            </div>
         </div>
      ';
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

   public function inputinfomasi($id, $id2){
      
      $tbluser = Tbluser::where('uid','=',$id)->first();
      $tblobject = Tblobject::where('objtype','=','7')->get();
      $zbranch = Zbranch::get();
      $listcompany = Dtadditional::where('type','=','COMPANY')
      ->where('desc','=',$tbluser->branch)
      ->get();
      $listgroup = Tblgroupuser::get();

      

      $txt = 	'
      <div class="row">
      <div class="col-md-6">
         <div class="form-group row">
            <label for="inputuserid" class="col-sm-3 col-form-label">User ID</label>
            <div class="col-sm-9">
               <div class="input-group">
                  <input type="text" class="form-control" id="inputuserid" name="inputuserid" value="'.$tbluser->user_id.'" onblur="cekinputan()">
                  <input type="hidden" id="inputbaris" name="inputbaris" value="'.$id2.'">
                  <input type="hidden" id="inputuid" name="inputuid" value="'.$tbluser->uid.'">
                  <input type="hidden" id="inputbaru" name="inputbaru" value="1">
                  
               </div>
            </div>
         </div>
         <div class="form-group row">
            <label for="inputusertype" class="col-sm-3 col-form-label">User Type</label>
            <div class="col-sm-9">
               <div class="input-group">
                  <select class="form-control" id="inputusertype" name="inputusertype" > ';
                  foreach ($listgroup as $key => $value) {
            $txt .='<option value="'.$value->idusergroup.'" '.($value->idusergroup == $tbluser->usergroup?'selected':'').'>'.$value->namegroup.'</option>';
                  }
            $txt .='</select>
               </div>
            </div>
         </div>
         <div class="form-group row">
            <label for="inputuserarea" class="col-sm-3 col-form-label">Area</label>
            <div class="col-sm-9">
               <div class="input-group">
                  <select class="form-control" id="inputuserarea" name="inputuserarea" >';
                  foreach ($tblobject as $key => $value) {
            $txt .='<option value="'.$value->objname.'" '.($value->objname == $tbluser->branch?'selected':'').'>'.$value->desc.'</option>';
                  }
                  
            $txt .='</select>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="form-group row">
            <label for="inputuserpass" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-8">
               <div class="input-group">
                  <input type="password" class="form-control" id="inputuserpass" name="inputuserpass" placeholder="password" 
                  value="'.$tbluser->password.'">
               </div>
            </div>
            <button type="button" 
               title="Show Password"
               onclick="myFunction2(1)">
               <span class="fa fa-eye"></span>
            </button> 
         </div>
         <div class="form-group row">
            <label for="inputuserrepass" class="col-sm-3 col-form-label">Re-Type Password</label>
            <div class="col-sm-8">
               <div class="input-group">
               <input type="password" class="form-control" id="inputuserrepass" name="inputuserrepass" placeholder="password" 
               value="'.$tbluser->password.'">
               </div>
            </div>
            <button type="button" 
               title="Show Password"
               onclick="myFunction2(2)">
               <span class="fa fa-eye"></span>
            </button> 
         </div>
         <div class="form-group row">
            <label for="inputusercompany" class="col-sm-3 col-form-label">Company</label>
            <div class="col-sm-9">
               <div class="input-group">
                  <select class="form-control" id="inputusercompany" name="inputusercompany" >';
                  foreach ($listcompany as $key => $value) {
                     $txt .='<option value="'.$value->info.'" '.($value->info == $tbluser->company?'selected':'').'>'.$value->info2.'</option>';
                           }
                     $txt .='</select>
               </div>
            </div>
         </div>
      </div>
   </div>
      ';
       return response()->json(array('msg'=> $txt), 200);

   }

   public function inputinfomasinew(){
      $listgroup = Tblgroupuser::get();
      $tblobject = Tblobject::where('objtype','=','7')->get();
      $txt = 	'
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group row">
                           <label for="inputuserid" class="col-sm-3 col-form-label">User ID</label>
                           <div class="col-sm-9">
                              <div class="input-group">
                                 <input type="text" class="form-control" id="inputuserid" name="inputuserid" onblur="cekinputan()">
                                 <input type="hidden" id="inputbaris" name="inputbaris">
                                 <input type="hidden" id="inputbaru" name="inputbaru" value="0">
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputusertype" class="col-sm-3 col-form-label">User Type</label>
                           <div class="col-sm-9">
                              <div class="input-group">
                              <select class="form-control" id="inputusertype" name="inputusertype" > ';
                           $txt .='<option value="">--- Select User Type ---</option>';
                              foreach ($listgroup as $key => $value) {
                        $txt .='<option value="'.$value->idusergroup.'">'.$value->namegroup.'</option>';
                              }
                        $txt .='</select>
                              </div>
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="inputuserarea" class="col-sm-3 col-form-label">Area</label>
                           <div class="col-sm-9">
                              <div class="input-group">
                              <select class="form-control" id="inputuserarea" name="inputuserarea" >';
                           $txt .='<option value="">--- Select Area ---</option>';
                              foreach ($tblobject as $key => $value) {
                        $txt .='<option value="'.$value->objname.'">'.$value->desc.'</option>';
                              }
                              
                        $txt .='</select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group row">
                           <label for="inputuserpass" class="col-sm-3 col-form-label">Password</label>
                           <div class="col-sm-8">
                              <div class="input-group">
                                 <input type="password" class="form-control" id="inputuserpass" name="inputuserpass" placeholder="password" >
                              </div>
                           </div>
                           <button type="button" 
                              title="Show Password"
                              onclick="myFunction2(1)">
                              <span class="fa fa-eye"></span>
                           </button> 
                        </div>
                        <div class="form-group row">
                           <label for="inputuserrepass" class="col-sm-3 col-form-label">Re-Type Password</label>
                           <div class="col-sm-8">
                              <div class="input-group">
                              <input type="password" class="form-control" id="inputuserrepass" name="inputuserrepass" placeholder="password" >
                              </div>
                           </div>
                           <button type="button" 
                              title="Show Password"
                              onclick="myFunction2(2)">
                              <span class="fa fa-eye"></span>
                           </button> 
                        </div>
                        <div class="form-group row">
                           <label for="inputusercompany" class="col-sm-3 col-form-label">Company</label>
                           <div class="col-sm-9">
                              <div class="input-group">
                                 <select class="form-control" id="inputusercompany" name="inputusercompany" > 
                                 <option value="">--- Select Company ---</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>';
      return response()->json(array('msg'=> $txt), 200);
   }

   public function getcompany($id){
      $data = Dtadditional::where('type','=','COMPANY')
      ->where('desc','=',$id)
      ->select(DB::raw("CONCAT(info2,' - ',info4,' - ',info5) AS infox"),'info')
      ->pluck('infox','info');
      // ->select('info2','info');
    return response()->json($data); 
   }    
}
