@extends('layouts.cmain')

@section('content')

        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    <form method="post" action="/customer/update/{{ $customer->id }}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Address Book</label>
                            <input name="adrbook" type="radio" value="0818986657" {{ $customer->adrbook == '0818986657' ? 'checked' : '' }}><label>0818 986 657</label>
                            <input name="adrbook" type="radio" value="082219196657" {{ $customer->adrbook == '082219196657' ? 'checked' : '' }}><label>0822 1919 6657</label>
                            <input name="adrbook" type="radio" value="085694717819" {{ $customer->adrbook == '085694717819' ? 'checked' : '' }}><label>0856 9471 7819</label>
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
                                <option value="FFL" {{ $customer->cgroup == 'FFL' ? 'selected' : '' }}>Fiforlif</option>
                                <option value="HIR" {{ $customer->cgroup == 'HIR' ? 'selected' : '' }}>Hirvero</option>
                                <option value="FRD" {{ $customer->cgroup == 'FRD' ? 'selected' : '' }}>Foredi</option>
                                <option value="GAS" {{ $customer->cgroup == 'GAS' ? 'selected' : '' }}>Gasa</option>
                                <option value="GOL" {{ $customer->cgroup == 'GOL' ? 'selected' : '' }}>Gasa Oil</option>
                                <option value="TDM" {{ $customer->cgroup == 'TDM' ? 'selected' : '' }}>TDM</option>
                                <option value="LFM" {{ $customer->cgroup == 'LFM' ? 'selected' : '' }}>Ladyfem</option>
                                <option value="ORI" {{ $customer->cgroup == 'ORI' ? 'selected' : '' }}>Oris</option>
                                <option value="TOM" {{ $customer->cgroup == 'TOM' ? 'selected' : '' }}>Tomo</option>
                                <option value="HJB" {{ $customer->cgroup == 'HJB' ? 'selected' : '' }}>Hijab</option>
                                <option value="ATM" {{ $customer->cgroup == 'ATM' ? 'selected' : '' }}>AbeTeamwork</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label>Sex</label>
                            <input name="sex" type="radio" value="L" {{ $customer->sex == 'L' ? 'checked' : '' }}><label>Laki</label>
                            <input name="sex" type="radio" value="P" {{ $customer->sex == 'P' ? 'checked' : '' }}><label>Perempuan</label>
                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Customer .." value=" {{ $customer->nama }}">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>
                        
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number .." value=" {{ $customer->phone }}">

                             @if($errors->has('phone'))
                                <div class="text-danger">
                                    {{ $errors->first('phone')}}
                                </div>
                            @endif

                        </div>
                        
                        <div class="form-group">
                            <label>Comm Type</label>
                            <input name="ctype" type="radio" value="W" {{ $customer->ctype == 'W' ? 'checked' : '' }}><label>WA</label>
                            <input name="ctype" type="radio" value="S" {{ $customer->ctype == 'S' ? 'checked' : '' }}><label>SMS</label>
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email .." value=" {{ $customer->email }}">

                        </div>

                        <div class="form-group">
                            <label>Kota/Kab</label>
                            <input type="text" name="kota" class="form-control" placeholder="Kota/Kabupaten .." value=" {{ $customer->kota }}">

                        </div>

                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" name="kecam" class="form-control" placeholder="Kecamatan .." value=" {{ $customer->kecam }}">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat Customer .."> {{ $customer->alamat }} </textarea>

                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif

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