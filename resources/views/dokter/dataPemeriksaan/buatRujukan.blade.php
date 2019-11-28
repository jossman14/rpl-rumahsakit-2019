                    @extends('layouts.master')

                    @section('content')

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title" style="color: #32AC63;">Form Rujukan</h3></div>
                                    <div class="panel-body">
                                        <!-- <h4 class="mt-0">Data Pemeriksaan</h4>
                                        <hr /> -->
                                        @foreach($dataHasilPemeriksaan as $dob)
                                        <form class="form-horizontal" action="/rujukan/create" role="form" method="post">
                                            {{csrf_field()}}
                                            <!-- <div class="form-group">
                                                <label class="col-md-2 control-label">No Surat</label>
                                                <div class="col-md-8">

                                                    <input type="text" class="form-control" name="no_surat" autocomplete="off">
                                                    <input type="text" placeholder="" name="no_surat" data-mask="9999/9999-9/9999" class="form-control">
                                                    <span class="help-inline">0001/RSIA-B/2019</span>

                                                    @if($errors->has('no_surat'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('no_surat')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div> -->
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tanggal</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="id_hasil_pemeriksaan" value="{{ $dob->id_hasil_pemeriksaan }}" autocomplete="off" style="display: none">
                                                    <input type="text" class="form-control" name="tanggal" id="tanggal_surat" autocomplete="off" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Jenis Surat Rujukan</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" name="jenis" id="jenis" autocomplete="off">

                                                    @if($errors->has('jenis'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('jenis')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <hr />
                                            <div style="float:right;">
                                                <a href={{url('/hasilPemeriksaanPasien')}} class="btn btn-primary waves-effect waves-light">Kembali</a>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

                    @endsection