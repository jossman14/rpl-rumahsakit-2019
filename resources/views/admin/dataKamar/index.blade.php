        @extends('layouts.master')

        @section('content')
        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
        @if(session()->has('message_delete'))
        <div class="alert alert-danger">
            {{ session()->get('message_delete') }}
        </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Kamar</h3>
                    </div>
                    <div> 
                        <a type="button" class="btn btn-success btn-sm" style="float: left;margin:20px;" data-toggle="modal" data-target="#tambah-kamar">
                            <i class="fa fa-plus"></i> Tambah Data Kamar
                        </a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="data-obat" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tipe Kamar</th>
                                            <th>Nama Kamar</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($DataKamar as $index => $dk)
                                        <tr>
                                            <td>{{$index +1}}</td>
                                            <!-- <td>{{$dk->id_obat}}</td> -->
                                            @if($dk->tipe_kamar == 'vip')
                                            <td><span style="text-transform: capitalize;" class="badge badge-primary">VIP</span></td>
                                            @elseif($dk->tipe_kamar == 'kelas1')
                                            <td><span style="text-transform: capitalize;" class="badge badge-primary">Kelas 1</span></td>
                                            @elseif($dk->tipe_kamar == 'kelas2')
                                            <td><span style="text-transform: capitalize;" class="badge badge-primary">Kelas 2</span></td>
                                            @elseif($dk->tipe_kamar == 'kelas3')
                                            <td><span style="text-transform: capitalize;" class="badge badge-primary">Kelas 3</span></td>
                                            @endif
                                            <!-- <td>{{$dk->tipe_kamar}}</td> -->
                                            <td>{{$dk->kamar}}</td>
                                            @if($dk->status == 0)
                                            <td><span style="text-transform: capitalize;" class="badge badge-primary">Tersedia</span></td>
                                            @elseif($dk->status == 1)
                                            <td><span style="text-transform: capitalize;" class="badge badge-danger">Sudah terisi</span></td>
                                            @endif
                                            <td>
                                                <a href="/dataKamar/edit/{{ $dk->id_ruang }}" class="btn btn-warning btn-sm">Edit</a>

                                                <a href="/dataKamar/delete/{{ $dk->id_ruang }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus data ini?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> 

        <div id="tambah-kamar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tambah-kamar" aria-hidden="true" style="display: none">
            <div class="modal-dialog"> 
                <form action="/dataKamar/create" method="post" autocomplete="off">
                   {{csrf_field()}}
                   <div class="modal-content"> 
                    <div class="modal-header">
                        <h4 class="modal-title mt-0">Tambah Kamar</h4>
                    </button>
                </div> 
                <div class="modal-body"> 
                    <div class="row"> 
                        <div class="col-md-3" style="margin-top: 5px;"> 
                            <label for="tipe_kamar" class="control-label">Tipe Kamar</label>
                        </div> 
                        <div class="col-md-9"> 
                            <select class="form-control" id="tipe_kamar" name="tipe_kamar">
                                <option value="vip">VIP</option>
                                <option value="kelas1">Kelas 1</option>
                                <option value="kelas2">Kelas 2</option>
                                <option value="kelas3">Kelas 3</option>
                            </select>
                        </div> 
                    </div> 
                    <div class="row" style="margin-top: 10px;"> 
                        <div class="col-md-3" style="margin-top: 5px;"> 
                            <label for="harga_obat" class="control-label">Nama Kamar</label>
                        </div> 
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" id="nama" name="nama">
                                        <option value="Melati">Melati</option>
                                        <option value="Menur">Menur</option>
                                        <option value="Bougenville">Bougenville</option>
                                        <option value="Kenanga">Kenanga</option>
                                        <option value="Cempaka">Cempaka</option>
                                        <option value="Dahlia">Dahlia</option>
                                        <option value="Anggrek">Anggrek</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="no" name="no" autocomplete="off"> 
                                    </div> 
                                </div>
                            </div>
                        </div> 
                    </div> 
                </div> 
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button> 
                    <button type="submit" class="btn btn-info waves-effect waves-light">Simpan Data</button> 
                </div> 
            </form>
        </div> 
    </div>
</div>
<!-- /.modal -->
<!-- End Row -->
@endsection

