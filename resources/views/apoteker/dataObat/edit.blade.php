                    @extends('layouts.master')

                    @section('content')

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">Form Obat</h3></div>
                                    <div class="panel-body">
                                        @foreach($DataObatEdit as $dob)
                                        <form class="form-horizontal" action="/dataObatApoteker/update/{{$dob->id_obat}}" role="form" method="post">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Nama Obat</label>
                                                <div class="col-md-9">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" name="nama_obat" value="{{ $dob->nama_obat }}" autocomplete="off">

                                                            @if($errors->has('nama_obat'))
                                                                <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                                    {{ $errors->first('nama_obat')}}
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select class="form-control" id="tipe" name="tipe">
                                                                <option value="Tablet" {{ $dob->tipe == 'Tablet' ? 'selected' : '' }}>Tablet</option>
                                                                <option value="Serbuk" {{ $dob->tipe == 'Serbuh' ? 'selected' : '' }}>Serbuk</option>
                                                                <option value="Pil" {{ $dob->tipe == 'Pil' ? 'selected' : '' }}>Pil</option>
                                                                <option value="Kapsul" {{ $dob->tipe == 'Kapsul' ? 'selected' : '' }}>Kapsul</option>
                                                                <option value="Kaplet" {{ $dob->tipe == 'Kaplet' ? 'selected' : '' }}>Kaplet</option>
                                                                <option value="Larutan" {{ $dob->tipe == 'Larutan' ? 'selected' : '' }}>Larutan</option>
                                                                <option value="Salep" {{ $dob->tipe == 'Salep' ? 'selected' : '' }}>Salep</option>
                                                                <option value="Cair Tetes" {{ $dob->tipe == 'Cair Tetes' ? 'selected' : '' }}>Cair Tetes</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label">Harga Obat</label>
                                                <div class="col-md-9">
                                                    <input type="number" class="form-control" name="harga_obat" value="{{ $dob->harga_obat }}" autocomplete="off">

                                                    @if($errors->has('harga_obat'))
                                                        <div class="text-danger" style="border: 1px solid #eeeeee; padding: 5px;">
                                                            {{ $errors->first('harga_obat')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-2 control-label"></label>
                                                <div class="col-md-9">
                                                    <!-- <input type="text" class="form-control" name="status_obat" value="{{ $dob->status_obat }}" autocomplete="off"> -->

                                                    <select class="form-control" id="status_obat" name="status_obat">
                                                        <option value="1" {{ $dob->status_obat == 1 ? 'selected' : '' }}>Obat Jamu Tradisional</option>
                                                        <option value="2" {{ $dob->status_obat == 2 ? 'selected' : '' }}>Obat Herbal Terstandar</option>
                                                        <option value="3" {{ $dob->status_obat == 3 ? 'selected' : '' }}>Obat Fitofarmaka</option>
                                                        <option value="4" {{ $dob->status_obat == 4 ? 'selected' : '' }}>Obat Bebas Umum</option>
                                                        <option value="5" {{ $dob->status_obat == 5 ? 'selected' : '' }}>Obat Bebas Terbatas</option>
                                                        <option value="6" {{ $dob->status_obat == 6 ? 'selected' : '' }}>Obat Keras</option>
                                                        <option value="7" {{ $dob->status_obat == 7 ? 'selected' : '' }}>Obat Narkotika</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <hr />
                                            <div style="float:right;">
                                                <a href={{url('/dataObatApoteker')}} class="btn btn-primary waves-effect waves-light">Kembali</a>
                                                <button type="submit" class="btn btn-success waves-effect waves-light">Simpan</button>
                                            </div>
                                        </form>
                                        @endforeach
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col -->
                        </div> <!-- End row -->

                    @endsection