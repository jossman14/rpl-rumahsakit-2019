                    @extends('layouts.master')

                    @section('content')

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Form Jabatan</h3></div>
                                    <div class="panel-body">
                                        @foreach($DataJabatanEdit as $dj)
                                        <form class="form-horizontal" action="/dataJabatan/update/{{$dj->id_jab}}" role="form" method="post">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Jabatan</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="jabatan" value="{{ $dj->jabatan }}" autocomplete="off">

                                                    @if($errors->has('jabatan'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('jabatan')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <hr />
                                            <div style="float:right;">
                                                <a href={{url('/dataJabatan')}} class="btn btn-primary waves-effect waves-light">Kembali</a>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

                    @endsection