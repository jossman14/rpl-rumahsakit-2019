        @extends('layouts.master')

        @section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="color: #32AC63;">Edit Monitoring Pasien</h3>
                    </div>
                    <!-- <div> 
                        <a type="button" class="btn btn-success btn-sm" style="float: left;margin:20px;" data-toggle="modal" data-target="#tambah-pegawai">
                            <i class="fa fa-plus"></i> Tambah Data Pegawai
                        </a>
                    </div> -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- <div class="panel panel-primary"> -->
                                    <div class="panel-body" style="padding: 0px 20px;">
                                        @foreach($DataMonitoring as $dob)
                                        <form class="form-horizontal" action="/dataRawatInap/monitoringPasien/update/{{$dob->id}}" role="form" method="post">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Keluhan Pasien</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="id_monitoring" value="{{$dob->id}}" autocomplete="off" style="display: none;">
                                                    <input type="text" class="form-control" name="no_rekam_medis" value="{{$dob->no_rekam_medis}}" autocomplete="off" style="display: none;">
                                                    <!-- <input type="text" class="form-control" name="keluhan_pasien" value="{{$dob->keluhan_pasien }}" autocomplete="off"> -->
                                                    <textarea class="form-control" rows="3" id="keluhan_pasien" name="keluhan_pasien">{{$dob->keluhan_pasien}}</textarea>

                                                    @if($errors->has('keluhan_pasien'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('keluhan_pasien')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tensi</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="tensi" value="{{$dob->tensi }}" autocomplete="off">

                                                    @if($errors->has('tensi'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('tensi')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Frekuensi Pernapasan</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="frekuensi_pernapasan" value="{{$dob->frekuensi_pernapasan}}" autocomplete="off">

                                                    @if($errors->has('frekuensi_pernapasan'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('frekuensi_pernapasan')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nadi</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="nadi" value="{{$dob->nadi}}" autocomplete="off">

                                                    @if($errors->has('nadi'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('nadi')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Suhu</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="suhu" value="{{$dob->suhu}}" autocomplete="off">

                                                    @if($errors->has('suhu'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('suhu')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tindakan</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="tindakan" value="{{$dob->tindakan}}" autocomplete="off">

                                                    @if($errors->has('tindakan'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('tindakan')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <hr />
                                            <div style="float:left;">
                                                <a href="/dataRawatInap/monitoringPasien/{{$dob->no_rekam_medis}}" class="btn btn-primary waves-effect waves-light">Batal</a>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div> <!-- panel-body -->
                                <!-- </div> panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->
                    </div>
                </div>
            </div>

        </div> 
    </div>
</div>
<!-- /.modal -->
<!-- End Row -->
@endsection

