                    @extends('layouts.master')

                    @section('content')

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title" style="color: #32AC63;">Form Rawat Inap</h3></div>
                                    <div class="panel-body">
                                        <!-- <h4 class="mt-0">Data Pemeriksaan</h4>
                                        <hr /> -->
                                        @foreach($dataHasilPemeriksaanRuangan as $dob)
                                        <form class="form-horizontal" action="/perawatanRawatInap/create" role="form" method="post">
                                            {{csrf_field()}}
                                                <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Tanggal</label>
                                                    </div> 
                                                    <div class="col-sm-8">
                                                        <div class="row">
                                                            <div class="col-sm-5">

                                                                <input type="text" class="form-control" name="id_registrasi" id="id_registrasi" value="{{$dob->id_registrasi}}" style="display: none;" autocomplete="off">

                                                                <input type="text" class="form-control" name="id_hasil_pemeriksaan" id="id_hasil_pemeriksaan" value="{{$dob->id_hasil_pemeriksaan}}" style="display: none;" autocomplete="off">

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" name="tanggal_masuk" id="tanggal_masuk" data-language='en' autocomplete="off">

                                                                        @if($errors->has('tanggal_masuk'))
                                                                            <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                                {{ $errors->first('tanggal_masuk')}}
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-7">
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <label for="jenis" class="control-label">Sampai</label>
                                                                    </div>
                                                                    <div class="col-md-10">
                                                                        <input type="text" class="form-control" name="tanggal_keluar" id="tanggal_keluar" data-language='en' autocomplete="off">

                                                                        @if($errors->has('tanggal_keluar'))
                                                                            <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                                {{ $errors->first('tanggal_keluar')}}
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <!-- <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Tanggal Keluar</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="tanggal_keluar" id="tanggal_keluar" data-language='en' autocomplete="off">

                                                        @if($errors->has('tanggal_keluar'))
                                                            <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                {{ $errors->first('tanggal_keluar')}}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Total Hari</label>
                                                    </div> 
                                                    <div class="col-md-8">
                                                        <input type="number" class="form-control" id="hari" name="hari" autocomplete="off">

                                                        @if($errors->has('hari'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('hari')}}
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>  -->
                                                <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Ruang</label>
                                                    </div> 
                                                    <div class="col-md-8">
                                                        <select class="form-control" id="id_ruang" name="id_ruang">
                                                            @foreach($dataRuang as $index => $dpo)
                                                                <option value="{{$dpo->id_ruang}}">[{{$dpo->tipe_kamar}}] {{$dpo->kamar}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Biaya</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <!-- <input type="number" class="form-control" id="biaya_rawat_inap" name="biaya_rawat_inap" autocomplete="off"> -->

                                                        <select class="form-control" id="biaya_rawat_inap" name="biaya_rawat_inap">
                                                            <!-- @foreach($dataRuang as $index => $dpo)
                                                                <option value="{{$dpo->biaya}}">[{{$dpo->tipe_kamar}}] {{$dpo->biaya}}</option>
                                                            @endforeach -->
                                                            <option value="150000">VIP - Rp. 150.000</option>
                                                            <option value="100000">Kelas 1 - Rp. 100.000</option>
                                                            <option value="75000">Kelas 2 - Rp. 75.000</option>
                                                            <option value="50000">Kelas 3 - Rp. 50.000</option>
                                                        </select>

                                                        @if($errors->has('biaya_rawat_inap'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('biaya_rawat_inap')}}
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div> 

                                                <!-- <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Total Biaya</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="number" class="form-control" id="total_biaya_rawat_inap" name="total_biaya_rawat_inap" autocomplete="off" readonly="readonly">
                                                    </div>
                                                </div>  -->
                                                <!-- <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Biaya</label>
                                                    </div> 
                                                    
                                                </div> -->
                                            <!-- <h4 class="mt-0">Data Perawatan</h4>
                                            <hr />
                                            <div class="form-group"> 
                                                <div class="col-md-2 control-label"> 
                                                    <label for="jenis" class="control-label">Perawatan</label>
                                                </div> 
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="jenis" name="jenis">
                                                        <option value="1">Rawat Inap</option>
                                                        <option value="2">Rawat Jalan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div id="rawat-inap">
                                                <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Tanggal</label>
                                                    </div> 
                                                    <div class="col-sm-8">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" name="tanggal_masuk" id="tanggal_masuk" data-language='en' autocomplete="off">

                                                                @if($errors->has('tanggal_masuk'))
                                                                    <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                        {{ $errors->first('tanggal_masuk')}}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text" class="form-control" name="tanggal_keluar" id="tanggal_keluar" data-language='en' autocomplete="off">

                                                                @if($errors->has('tanggal_keluar'))
                                                                    <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                        {{ $errors->first('tanggal_keluar')}}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Tanggal Keluar</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="tanggal_keluar" id="tanggal_keluar" data-language='en' autocomplete="off">

                                                        @if($errors->has('tanggal_keluar'))
                                                            <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                {{ $errors->first('tanggal_keluar')}}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Total Hari</label>
                                                    </div> 
                                                    <div class="col-md-8">
                                                        <input type="number" class="form-control" id="hari" name="hari" autocomplete="off">
                                                    </div>
                                                </div> 
                                                <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Biaya Harian</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="number" class="form-control" id="biaya_rawat_inap" name="biaya_rawat_inap" autocomplete="off">
                                                    </div>
                                                </div> 

                                                <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Total Biaya</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="number" class="form-control" id="total_biaya_rawat_inap" name="total_biaya_rawat_inap" autocomplete="off" readonly="readonly">
                                                    </div>
                                                </div>  -->
                                                <!-- <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Biaya</label>
                                                    </div> 
                                                    
                                                </div> -->
                                                <!-- <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Ruang</label>
                                                    </div> 
                                                    <div class="col-md-8">
                                                        <select class="form-control" id="id_ruang" name="id_ruang">
                                                            @foreach($dataRuang as $index => $dpo)
                                                                <option value="{{$dpo->id_ruang}}">{{$dpo->kamar}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>   
                                            </div> -->
                                            <!-- <div id="rawat-jalan">
                                                <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="tanggal" class="control-label">Mulai Perawatan</label>
                                                    </div> 
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="tanggal_masuk_jalan" id="tanggal_masuk_jalan" data-language='en' autocomplete="off" readonly="readonly">

                                                        @if($errors->has('tanggal_masuk_jalan'))
                                                            <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                {{ $errors->first('tanggal_masuk_jalan')}}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="durasi" class="control-label">Durasi Rawat Jalan</label>
                                                    </div> 
                                                    <div class="col-md-8">
                                                        <input type="number" class="form-control" id="durasi" name="durasi" autocomplete="off">
                                                    </div>
                                                </div>  
                                            </div> -->
                                            <hr />
                                            <div style="float:right;">
                                                <a href={{url('/perawatanRawatInap')}} class="btn btn-primary waves-effect waves-light">Kembali</a>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

                    @endsection