        @extends('layouts.master')

        @section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="color: #32AC63;">Edit Registrasi Pasien</h3>
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
                                        @foreach($DataPasien as $dob)
                                        <form class="form-horizontal" action="/dataPasienPendaftaran/update/{{$dob->id_pasien}}" role="form" method="post">
                                            {{csrf_field()}}
                                            <h4><i class="md md-assignment" style="margin-right: 5px;"></i>Data Pasien</h4>
                                            <hr />
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Pasien</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" name="id_pasien" value="{{$dob->id_pasien }}" autocomplete="off" style="display: none;">
                                                    <input type="text" class="form-control" name="nama_pasien" value="{{$dob->nama_pasien }}" autocomplete="off">

                                                    @if($errors->has('nama_pasien'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('nama_pasien')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal Lahir</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" data-language='en' value="{{$dob->tanggal_lahir }}" autocomplete="off">

                                                    @if($errors->has('tanggal_lahir'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('tanggal_lahir')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Umur</label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id="umur" name="umur" value="{{$dob->umur }}" class="umur" autocomplete="off" readonly="readonly">

                                                    @if($errors->has('umur'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('umur')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div> -->

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Jenis Kelamin</label>
                                                <div class="col-md-7">
                                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                        <option value="1" {{ $dob->jenis_kelamin == 1 ? 'selected' : '' }}>Pria</option>
                                                        <option value="2" {{ $dob->jenis_kelamin == 2 ? 'selected' : '' }}>Wanita</option>
                                                    </select>

                                                    @if($errors->has('jenis_kelamin'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('jenis_kelamin')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal Lahir</label>
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" id="tanggal_lahir" class="tanggal_lahir" name="tanggal_lahir" value="{{$dob->tanggal_lahir}}" data-language='en' autocomplete="off">

                                                            @if($errors->has('tanggal_lahir'))
                                                                <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                    {{ $errors->first('tanggal_lahir')}}
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4" style="padding-left: 0;">
                                                            <label class="col-md-4 control-label">Umur</label>
                                                            <div class="col-md-8" style="padding-right: 0;">
                                                                <input type="text" class="form-control" id="umur" name="umur" class="umur" value="{{$dob->umur }}" autocomplete="off" readonly="readonly">

                                                                @if($errors->has('umur'))
                                                                    <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                        {{ $errors->first('umur')}}
                                                                    </div>
                                                                @endif
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Alamat</label>
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <textarea class="form-control" rows="3" id="alamat" name="alamat">{{$dob->alamat}}</textarea>

                                                            @if($errors->has('alamat'))
                                                                <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                    {{ $errors->first('alamat')}}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">No Telp</label>
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control" name="no_telp" value="{{$dob->no_telp }}" autocomplete="off">

                                                            @if($errors->has('no_telp'))
                                                                <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                    {{ $errors->first('no_telp')}}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div style="float:left;">
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                                <a href={{url('/dataPasienPendaftaran')}} class="btn btn-primary waves-effect waves-light">Batal</a>
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

