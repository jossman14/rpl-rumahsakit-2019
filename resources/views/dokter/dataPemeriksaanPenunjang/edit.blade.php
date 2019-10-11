                    @extends('layouts.master')

                    @section('content')

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Form Oli</h3></div>
                                    <div class="panel-body">
                                        @foreach($oli as $oli)
                                        <form class="form-horizontal" action="/oli/update/{{$oli->id_barang}}" role="form" method="post">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Kode Barang</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="kd_barang" placeholder="Masukkan Kode Barang..." value="{{ $oli->kode }}" autocomplete="off">

                                                    @if($errors->has('kd_barang'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('kd_barang')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Barang</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="nm_barang" placeholder="Masukkan Nama Barang..." value="{{ $oli->nm_barang }}" autocomplete="off">

                                                    @if($errors->has('nm_barang'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('nm_barang')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Ukuran</label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" name="ukuran" placeholder="Masukkan Ukuran Barang..." value="{{ $oli->ukuran }}" autocomplete="off">

                                                    @if($errors->has('ukuran'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('ukuran')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="col-md-4 control-label">Harga</label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control" name="harga" placeholder="Masukkan Harga..." value="{{ $oli->harga }}" autocomplete="off">

                                                            @if($errors->has('harga'))
                                                                <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                    {{ $errors->first('harga')}}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label class="col-md-4 control-label">Harga Per Item</label>
                                                        <div class="col-md-8">
                                                            <input type="number" class="form-control" name="harga_pcs" placeholder="Masukkan Harga Per Item..." value="{{ $oli->harga_pcs }}" autocomplete="off">

                                                            @if($errors->has('harga_pcs'))
                                                                <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                    {{ $errors->first('harga_pcs')}}
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div style="float:right;">
                                                <a href={{url('/oli')}} class="btn btn-primary waves-effect waves-light">Kembali</a>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

                    @endsection