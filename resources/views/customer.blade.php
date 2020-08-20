@extends('layouts.cmain')

@section('content')
            
        {{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
 
		 
		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/customer/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		
        <!-- Filter -->
		<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="get" action="/customer/filter" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Filter</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
                                                        
                            <div class="form-group">
                                <label>Address Book</label>
                                <select name="adrbook">
                                    <option value="%">All</option>
                                    <option value="0818986657">0818986657</option>
                                    <option value="082219196657">082219196657</option>
                                    <option value="085694717819">085694717819</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                            <label>Customer Group</label>
                            <select name="cgroup">
                                <option value="%">All</option>
                                <option value="FFL">Fiforlif</option>
                                <option value="HIR">Hirvero</option>
                                <option value="FRD">Foredi</option>
                                <option value="GAS">Gasa</option>
                                <option value="GOL">Gasa Oil</option>
                                <option value="TDM">TDM</option>
                                <option value="LFM">Ladyfem</option>
                                <option value="ORI">Oris</option>
                                <option value="TOM">Tomo</option>
                                <option value="HJB">Hijab</option>
                                <option value="ATM">AbeTeamwork</option>
                            </select>
                            </div>

                            <div class="form-group">
                                <label>Catagory</label>
                                <input name="title" type="radio" value="C"><label>Calon Konsumen</label>
                                <input name="title" type="radio" value="K"><label>Konsumen</label>
                                <input name="title" type="radio" value="V"><label>VIP</label>

                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama ..">
                            </div>                                                                                                                
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
					</div>
				</form>
			</div>
		</div>
        <!-- Send Message -->
		<div class="modal fade" id="sendmsg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">   
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="" id="SEND">Send Msg
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     
                        <div class="form-group">
                            <label>Text Message</label>
                            <textarea id="pesan" name="txmsg" class="form-control" placeholder="Text Message .."></textarea>
                        </div>
                        <div class="form-group">

                            <input id="uploadFile" type="file" onchange="encodeImageFileAsURL();" />
                            <br/>
                            <div id="image_preview"></div>
                            <br/>
                            
                        </div>                                        
                    </div>
                </div>
            </div>
        </div>

            <!-- <form method="get" action="/customer"> -->
            <!--  /customer/send  --->
            <div class="card-body">
                <div class="panel">
                        <div class="panel-heading">
                            <a href="/customer/add" class="fa fa-plus-circle"></a>
                            <button type="button" class="fa fa-filter" data-toggle="modal" data-target="#filter">
                            </button>
                            <button type="button" class="fa fa-cloud-upload" data-toggle="modal" data-target="#importExcel">
                            </button>
                            <a href="/customer/export_excel" class="fa fa-cloud-download" target="_blank"></a>
                            <button type="button" class="fa fa-envelope" data-toggle="modal" data-target="#sendmsg">
                            </button       
                        </div>        
                        <div class="panel-body">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <button type="button" class="fa fa-check-square" data-toggle="modal" id='markall'></button>
                                            <button type="button" class="fa fa-check-square-o" data-toggle="modal" id='unmarkall'></button>
                                        </th>
                                        <th>Nama</th>
                                        <th>Phone</th>
                                        <th>Cat</th>
                                        <th>C.Grp</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customer as $p)
                                    <tr>
                                        <td align="center"><input type="checkbox" name="sele[]" value="{{ $p->phone }}" class="mark" id="ID{{ $p->id }}" ></td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->phone }}</td>
                                        <td align="center">{{ $p->title }}</td>
                                        <td align="center">{{ $p->cgroup }}</td>
                                        <td  align="center">
                                            <a href="/customer/edit/{{ $p->id }}" class="fa fa-pencil"></a>
                                            <a href="/customer/delete/{{ $p->id }}" class="fa fa-trash-o"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
                        
 @endsection

