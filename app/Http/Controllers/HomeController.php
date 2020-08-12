<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbluser;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function getuser()
    {
        $user = Tbluser::where('user_id','=','supram.maharwantijo@cpp.co.id')->first();
        return $user;
    }

    public function grpbu()
    {
        $sql = "
            select 1 urut, 'Fish Feed' des, 1200 ttl union 
            select 2 urut, 'Fish Fry' des, 502 ttl union
            select 3 urut, 'Food' des, 2492 ttl union
            select 4 urut, 'FPD' des, 1592 ttl union
            select 5 urut, 'Pet CWS' des, 2049 ttl union
            select 6 urut, 'Pet SuHs' des, 902 ttl union
            select 7 urut, 'Probiotik' des, 557 ttl union
            select 8 urut, 'Shrimp Feed' des, 1692 ttl union
            select 9 urut, 'Shrimp Fry' des, 375 ttl
        ";
        $grp = DB::connection('mysql')->select($sql);
        return $grp;
    }

    public function datacompany()
    {
        $sql = "
            select 'KT3005901' customer_id, 'Eddie Susanto 01' customer_name, 'Agri Inti Prima' bu, 'Aditya Yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'Rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'KT3005902' customer_id, 'Eddie Susanto 02' customer_name, 'Agri Inti Prima' bu, 'Aditya Yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'Rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'KT3005903' customer_id, 'Eddie Susanto 03' customer_name, 'Agri Inti Prima' bu, 'Aditya Yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'Rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'KT3005904' customer_id, 'Eddie Susanto 04' customer_name, 'Agri Inti Prima' bu, 'Aditya Yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'Rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'KT3005905' customer_id, 'Eddie Susanto 05' customer_name, 'Agri Inti Prima' bu, 'Aditya Yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'Rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'KT3005906' customer_id, 'Eddie Susanto 06' customer_name, 'Agri Inti Prima' bu, 'Aditya Yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'Rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'KT3005907' customer_id, 'Eddie Susanto 07' customer_name, 'Agri Inti Prima' bu, 'Aditya Yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'Rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'KT3005908' customer_id, 'Eddie Susanto 08' customer_name, 'Agri Inti Prima' bu, 'Aditya Yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'Rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'KT3005909' customer_id, 'Eddie Susanto 09' customer_name, 'Agri Inti Prima' bu, 'Aditya Yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'Rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'KT3005910' customer_id, 'Eddie Susanto 10' customer_name, 'Agri Inti Prima' bu, 'Aditya Yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'Rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time 
        ";
        
        $grp = DB::connection('mysql')->select($sql);
        return $grp;
    }

    public function grpcompany()
    {
        $sql = "
            select 1 urut, 'CPB/'       des, 'PT Central Pertiwi Bahari'   des2, '' des3, 1201 ttl union 
            select 2 urut, 'CPGP SMG/'  des, 'PT Central Pangan Pertiwi '  des2, 'Semarang' des3, 1202 ttl union
            select 3 urut, 'CPGP/'      des, 'PT Central Pangan Pertiwi '  des2, 'Jakarta' des3, 1203 ttl union
            select 4 urut, 'CPP Medan/' des, 'PT. Central Proteina Prima ' des2, 'Medan' des3, 1204 ttl union
            select 5 urut, 'CPgP CKP/'  des, 'PT Central Pangan Pertiwi '  des2, 'Cikampek' des3, 1205 ttl union
            select 6 urut, 'CPP SDA/'   des, 'PT. Central Proteina Prima ' des2, 'Sidoarjo' des3, 1206 ttl
        ";
        $grp = DB::connection('mysql')->select($sql);
        return $grp;
    }

    public function angotakeluarga()
    {
        $sql = "
            select 1 urut, 'Rita Andriana' nama, 'Lampung'        tmplahir, DATE_FORMAT('2020-02-01','%d %b %Y') tgllahir, 'Perempuan' dessex, 'Istri' stakel, 'S1' stapendidikan union 
            select 2 urut, 'Martinus'      nama, 'Tanjung Karang' tmplahir, DATE_FORMAT('2020-03-02','%d %b %Y') tgllahir, 'Laki-laki' dessex, 'Anak'  stakel, 'SMA' stapendidikan union
            select 3 urut, 'Gisela'        nama, 'Bogor'          tmplahir, DATE_FORMAT('2020-04-03','%d %b %Y') tgllahir, 'Perempuan' dessex, 'Anak'  stakel, 'SD' stapendidikan
        ";
        $grp = DB::connection('mysql')->select($sql);
        return $grp;
    }

    public function index()
    {
        $user = $this->getuser();
        $grpcmp = $this->grpbu();
        return view('home', [
            'user' => $user,
            'perbu' => $grpcmp
        ]);
    }

    public function company($kode)
    {
        $user = $this->getuser();
        $grpcmp = $this->grpcompany();
        $pilcompany = $kode;
        return view('company', [
            'user' => $user,
            'percompany' => $grpcmp,
            'pilcompany' => $pilcompany
        ]);
    }

    public function subcompany($kode, $kode2)
    {
        $user = $this->getuser();
        $datacmp = $this->datacompany();
        $pilcompany = $kode;
        return view('subcompany', [
            'user' => $user,
            'listdata' => $datacmp,
            'pilcompany' => $pilcompany
        ]);
    }

    public function detail($kode, $kode2)
    {
        $user = $this->getuser();
        $keluarga = $this->angotakeluarga();
        $pilcompany = $kode;
        $id = $kode2;
        return view('detail',[
            'user' => $user,
            'pilcompany' => $pilcompany,
            'id' => $id,
            'keluarga' => $keluarga
        ]);
    }
    
    public function detaildelete($id)
    {
        return view('detaildelete');
    }

    public function setting()
    {
        $user = $this->getuser();
        
        return view('setting', ['user' => $user]);
    }

    public function upload()
    {
        return view('upload');
    }

    public function upload_history()
    {
        return view('upload_history');
    }

    public function download()
    {
        return view('download');
    }

    public function syncronize()
    {
        return view('sync');
    }

    public function info()
    {
        return view('info');
    }

    public function infoedit()
    {
        return view('infoedit');
    }

    

    public function pribadi()
    {
        return view('pribadi');
    }

    public function usaha()
    {
        return view('usaha');
    }

    public function logout()
    {
        return view('logout');
    }

    public function kepemilikan()
    {
        return view('kepemilikan');
    }

    public function jaminan()
    {
        return view('jaminan');
    }

    public function karakteristik()
    {
        return view('karakteristik');
    }

    public function edit0101()
    {
        return view('edit0101');
    }

    public function edit0201()
    {
        return view('edit0201');
    }

    public function edit0301()
    {
        return view('edit0301');
    }

    public function edit0401()
    {
        return view('edit0401');
    }

    public function edit0501()
    {
        return view('edit0501');
    }

    public function edit0501upload()
    {
        return view('edit0501upload');
    }

    
   

    
}
