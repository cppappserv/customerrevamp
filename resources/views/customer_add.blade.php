@extends('layouts.cmain')

@section('content')

        <div class="container">
            <div class="card mt-5">
                <div class="card-body">

                    <br/>
                    <br/>
                    
                    <form method="post" action="/customer/save">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Address Book</label>
                            <input name="adrbook" type="radio" value="0818986657"><label>0818 986 657</label>
                            <input name="adrbook" type="radio" value="082219196657"><label>0822 1919 6657</label>
                            <input name="adrbook" type="radio" value="085694717819"><label>0856 9471 7819</label>
                        </div>
                        
                        <div class="form-group">
                            <label>Category</label>
                            <select name="title">
                                <option value="CK">Calon Konsumen</option>
                                <option value="KS">Konsumen</option>
                                <option value="VP">VIP Konsumen</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Customer Group</label>
                            <select name="cgroup">
                                <option value="FFL">Fiforlif</option>
                                <option value="HIR">Hirvero</option>
                                <option value="FRD">Foredi</option>
                                <option value="GAS">Gasa</option>
                                <option value="GOL">Gasa Oil</option>
                                <option value="LFM">Ladyfem</option>
                                <option value="TDM">TDM</option>
                                <option value="ORI">Oris</option>
                                <option value="TOM">Tomo</option>
                                <option value="HJB">Hijab</option>
                                <option value="ATM">AbeTeamwork</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>S e x</label>
                            <input name="sex" type="radio" value="L"><label>Laki</label>
                            <input name="sex" type="radio" value="P"><label>Perempuan</label>
                        </div>
                        
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Customer ..">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>
                                                
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number ..">

                             @if($errors->has('phone'))
                                <div class="text-danger">
                                    {{ $errors->first('phone')}}
                                </div>
                            @endif

                        </div>
                        
                        <div class="form-group">
                            <label>Comm Type</label>
                            <input name="ctype" type="radio" value="W"><label>WA</label>
                            <input name="ctype" type="radio" value="S"><label>SMS</label>
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email ..">

                        </div>

                        <div class="form-group">
                            <label>Kota/Kab</label>
                            <input type="text" name="kota" class="form-control" placeholder="Kota/Kabupaten ..">

                        </div>

                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" name="kecam" class="form-control" placeholder="Kecamatan ..">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat Customer .."></textarea>

                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Save">
                            <a href="/customer" class="btn btn-primary">Back</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
@endsection