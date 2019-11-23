                    @extends('layouts.master')

                    @section('content')

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title" style="color: #32AC63;">Form Pemeriksaan</h3></div>
                                    <div class="panel-body">
                                        <!-- <h4 class="mt-0">Data Pemeriksaan</h4>
                                        <hr /> -->
                                        @foreach($dataHasilPemeriksaan as $dob)
                                        <form class="form-horizontal" action="/pemeriksaanPasien/update/{{$dob->id_registrasi}}" role="form" method="post">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Diagnosis</label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" rows="3" id="diagnosis" name="diagnosis">{{$dob->diagnosis}}</textarea>

                                                    @if($errors->has('diagnosis'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('diagnosis')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Anamnesis</label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" rows="3" id="anamnesis" name="anamnesis">{{$dob->anamnesis}}</textarea>
                                            
                                                    @if($errors->has('anamnesis'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('anamnesis')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Pemeriksaan Fisik</label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" rows="3" id="pemeriksaan_fisik" name="pemeriksaan_fisik">{{$dob->pemeriksaan_fisik}}</textarea>

                                                    @if($errors->has('pemeriksaan_fisik'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('pemeriksaan_fisik')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tindakan</label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" rows="3" id="tindakan" name="tindakan">{{$dob->tindakan}}</textarea>

                                                    @if($errors->has('tindakan'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('tindakan')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Biaya</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="id_registrasi" value="{{ $dob->id_registrasi }}" autocomplete="off" style="display: none">

                                                    <input type="number" class="form-control" name="biaya" autocomplete="off" value="{{$dob->biaya}}">

                                                    @if($errors->has('biaya'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('biaya')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group"> 
                                                <div class="col-md-2 control-label"> 
                                                    <label for="jenis_perawatan" class="control-label">Tipe Perawatan</label>
                                                </div> 
                                                <div class="col-sm-8" style="margin-top: 5px;">
                                                    <select class="form-control" id="jenis_perawatan" name="jenis_perawatan">
                                                        <option value="1" {{ $dob->jenis_perawatan == 1 ? 'selected' : '' }}>Rawat Inap</option>
                                                        <option value="2" {{ $dob->jenis_perawatan == 2 ? 'selected' : '' }}>Rawat Jalan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group"> 
                                                <div class="col-md-2 control-label"> 
                                                    <!-- <label for="jenis_perawatan" class="control-label">Membutuhkan medis penunjang?</label> -->
                                                </div> 
                                                <div class="col-sm-8" style="margin-top: 5px;">
                                                    <div class="checkbox checkbox-info checkbox-circle">
                                                        <input type="hidden" name="medis_penunjang" value="0">
                                                        <input id="medis_penunjang" name="medis_penunjang" type="checkbox" checked="checked" value="1">
                                                        <label for="checkbox8">
                                                            Butuh Medis Penunjang (Pemeriksaan Laboratorium)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- @foreach($dataRawatInap as $dob)
                                            <h4 class="mt-0">Data Perawatan</h4>
                                            <hr /> -->
                                            <!-- <div class="form-group"> 
                                                <div class="col-md-2 control-label"> 
                                                    <label for="jenis" class="control-label">Jenis Perawatan</label>
                                                </div> 
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="jenis" name="jenis">
                                                        <option value="1">Rawat Inap</option>
                                                        <option value="2">Rawat Jalan</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                            <!-- <div id="rawat-inap"> -->
                                               <!--  <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Tanggal Masuk</label>
                                                    </div> 
                                                    <div class="col-sm-8">
                                                        <input type="text" class="form-control" name="tanggal_masuk" id="tanggal_masuk" data-language='en' value="{{$dob->tanggal_masuk}}" autocomplete="off">

                                                        @if($errors->has('tanggal_masuk'))
                                                            <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                {{ $errors->first('tanggal_masuk')}}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div> 
                                                <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Tanggal Keluar</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" name="tanggal_keluar" id="tanggal_keluar" data-language='en' value="{{$dob->tanggal_keluar}}" autocomplete="off">

                                                        @if($errors->has('tanggal_keluar'))
                                                            <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                {{ $errors->first('tanggal_keluar')}}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Hari</label>
                                                    </div> 
                                                    <div class="col-md-8">
                                                        <input type="text" class="form-control" id="hari" autocomplete="off">
                                                    </div>
                                                </div>  -->
                                                <!-- <div class="form-group"> 
                                                    <div class="col-md-2 control-label" style="margin-top: -5px;"> 
                                                        <label for="jenis" class="control-label">Biaya Perawatan</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="number" class="form-control" id="biaya_rawat_inap" name="biaya_rawat_inap" value="{{$dob->biaya_rawat_inap}}" autocomplete="off" readonly="readonly">
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
                                                        <input type="text" class="form-control" id="ruang" name="ruang" value="{{$dob->ruang}}"autocomplete="off">
                                                    </div>
                                                </div>    -->
                                            <!-- </div> -->
                                            <!-- @endforeach
                                            @foreach($dataRawatJalan as $dob)
                                            <h4 class="mt-0">Data Perawatan</h4>
                                            <hr /> -->
                                            <!-- <div class="form-group"> 
                                                <div class="col-md-2 control-label"> 
                                                    <label for="jenis" class="control-label">Jenis Perawatan</label>
                                                </div> 
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="jenis" name="jenis">
                                                        <option value="1">Rawat Inap</option>
                                                        <option value="2">Rawat Jalan</option>
                                                    </select>
                                                </div>
                                            </div> -->
                                            <!-- <div id="rawat-jalan"> -->
                                                <!-- <div class="form-group"> 
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
                                                        <input type="number" class="form-control" id="durasi" name="durasi" value="{{$dob->durasi}}" autocomplete="off">
                                                    </div>
                                                </div>   -->
                                            <!-- </div> -->
                                            <!-- @endforeach -->
                                            <hr />
                                            <div style="float:right;">
                                                <a href={{url('/pemeriksaanPasien')}} class="btn btn-primary waves-effect waves-light">Kembali</a>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                            </div>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

                    @endsection