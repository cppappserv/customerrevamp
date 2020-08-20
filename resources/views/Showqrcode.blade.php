@extends('layouts.smain')

@section('content')

        <div class="container">
            <div class="card mt-5">
                <div class="card-body">

                    <br/>
                    <br/>
                    

                        {{ csrf_field() }}

                        

                        <div class="form-group">
                            <label class="col-sm-2 control-label" class="col-sm-2 control-label">Plant Code</label>
                            <div class="col-sm-10">
                                <input type="text" name="Plantcode" class="form-control" placeholder="Plant Code .." value="{{$data->plantcode}}" readonly>
                            </div>
                        </div>
                                                
                        <div class="form-group">
                            <label class="col-sm-2 control-label" class="col-sm-2 control-label">Transaksi Type</label>
                            <div class="col-sm-10">
                            <input type="text" name="txtype" class="form-control" placeholder="Transaksi Type .." value="{{$data->txtype}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" class="col-sm-2 control-label">batch</label>
                            <div class="col-sm-10">
                            <input type="text" name="batch" class="form-control" placeholder="Batch .." value="{{$data->batch}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" class="col-sm-2 control-label">Material Code</label>
                            <div class="col-sm-10">
                            <input type="text" name="materialcode" class="form-control" placeholder="Material Code .." value="{{$data->materialcode}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" class="col-sm-2 control-label">Barcode</label>
                            <div class="col-sm-10">
                            <input type="text" name="barcode" class="form-control" placeholder="Barcode .." value="{{$data->barcode}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">S. Type</label>
                            <div class="col-sm-10">
                            <input type="text" name="stype" class="form-control" placeholder="SType .." value="{{$data->stype}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Search Sloc</label>
                            <div class="col-sm-10">
                            <input type="text" name="srcsloccode" class="form-control" placeholder="srcsloccode .." value="{{$data->srcsloccode}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">dstsloccode</label>
                            <div class="col-sm-10">
                            <input type="text" name="dstsloccode" class="form-control" placeholder="dstsloccode .." value="{{$data->dstsloccode}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">refnumber</label>
                            <div class="col-sm-10">
                            <input type="text" name="refnumber" class="form-control" placeholder="refnumber .." value="{{$data->refnumber}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">unpackingstatus</label>
                            <div class="col-sm-10">
                            <input type="text" name="unpackingstatus" class="form-control" placeholder="unpackingstatus .." value="{{$data->unpackingstatus}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">ponumber</label>
                            <div class="col-sm-10">
                            <input type="text" name="ponumber" class="form-control" placeholder="ponumber .." value="{{$data->ponumber}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">manualpo</label>
                            <div class="col-sm-10">
                            <input type="text" name="manualpo" class="form-control" placeholder="manualpo .." value="{{$data->manualpo}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">reversalstatus</label>
                            <div class="col-sm-10">
                            <input type="text" name="reversalstatus" class="form-control" placeholder="reversalstatus .." value="{{$data->reversalstatus}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">status</label>
                            <div class="col-sm-10">
                            <input type="text" name="status" class="form-control" placeholder="status .." value="{{$data->status}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">active</label>
                            <div class="col-sm-10">
                            <input type="text" name="active" class="form-control" placeholder="active .." value="{{$data->active}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">datastatus</label>
                            <div class="col-sm-10">
                            <input type="text" name="datastatus" class="form-control" placeholder="datastatus .." value="{{$data->datastatus}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">lastupdatedby</label>
                            <div class="col-sm-10">
                            <input type="text" name="lastupdatedby" class="form-control" placeholder="lastupdatedby .." value="{{$data->lastupdatedby}}" readonly>
                        </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">created_at</label>
                            <div class="col-sm-10">
                            <input type="text" name="created_at" class="form-control" placeholder="created_at .." value="{{$data->created_at}}" readonly>
                        </div>
                        </div>

                        

                    

                </div>
            </div>
        </div>
@endsection