                    @extends('layouts.master')

                    @section('content')

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Form Kamar</h3></div>
                                    <div class="panel-body">
                                        @foreach($DataKamarEdit as $dob)
                                        <form class="form-horizontal" action="/dataKamar/update/{{$dob->id_ruang}}" role="form" method="post">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Tipe Kamar</label>
                                                <div class="col-md-9">
                                                    <input type="text" style="display: none;" class="form-control" name="id_ruang" value="{{ $dob->id_ruang }}" autocomplete="off">

                                                    <select class="form-control" id="tipe_kamar" name="tipe_kamar">
                                                        <option value="vip" {{ $dob->tipe_kamar == 'vip' ? 'selected' : '' }}>VIP</option>
                                                        <option value="kelas1" {{ $dob->tipe_kamar == 'kelas1' ? 'selected' : '' }}>Kelas 1</option>
                                                        <option value="kelas2" {{ $dob->tipe_kamar == 'kelas2' ? 'selected' : '' }}>Kelas 2</option>
                                                        <option value="kelas3" {{ $dob->tipe_kamar == 'kelas3' ? 'selected' : '' }}>Kelas 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Kamar</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kamar" value="{{ $dob->kamar }}" autocomplete="off">

                                                    @if($errors->has('kamar'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('kamar')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <hr />
                                            <div style="float:right;">
                                                <a href={{url('/dataKamar')}} class="btn btn-primary waves-effect waves-light">Kembali</a>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

                    @endsection