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
                        <h3 class="panel-title">Data Pegawai</h3>
                    </div>
                    <div>
                        <a type="button" class="btn btn-success btn-sm" style="float: left;margin:20px;" data-toggle="modal" data-target="#tambah-pegawai">
                            <i class="fa fa-plus"></i> Tambah Data Pegawai
                        </a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="data-pegawai" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Role</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($DataPegawai as $index => $dus)
                                        <tr>
                                            <td>{{$index +1}}</td>
                                            @if($dus->role == 1)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-secondary">Admin
                                                </span>
                                            </td>
                                            @elseif($dus->role == 2)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-primary">Dokter
                                                </span>
                                            </td>
                                            @elseif($dus->role == 3)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-success">Apoteker
                                                </span>
                                            </td>
                                            @elseif($dus->role == 4)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-info">Kasir
                                                </span>
                                            </td>
                                            @elseif($dus->role == 5)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-purple">Petugas Medis Penunjang
                                                </span>
                                            </td>
                                            @elseif($dus->role == 6)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-purple">Petugas Pendaftaran
                                                </span>
                                            </td>
                                            @elseif($dus->role == 7)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-purple">Petugas Perawatan
                                                </span>
                                            </td>
                                            @elseif($dus->role == 8)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-purple">Petugas Rekam Medis
                                                </span>
                                            </td>
                                            @endif
                                            <td>{{$dus->nip}}</td>
                                            <td>{{$dus->nama_pegawai}}</td>
                                            <td>{{$dus->alamat}}</td>
                                            <td>
                                                <a href="/dataPegawai/edit/{{ $dus->id_pegawai }}" class="btn btn-warning btn-sm">Edit</a>

                                                <a href="/dataPegawai/delete/{{ $dus->kode_user }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus data ini?')">Delete</a>
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

        <div id="tambah-pegawai" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tambah-pegawai" aria-hidden="true" style="display: none">
            <div class="modal-dialog">
                <form action="/dataPegawai/create" method="post" autocomplete="off">
                   {{csrf_field()}}
                <div class="modal-content">
                    <!-- <div class="modal-header">
                        <h4 class="modal-title mt-0">Tambah Pegawai</h4>
                    </button>
                </div>  -->
                <div class="modal-body">
                    <h4 class="mt-0">Data Pegawai</h4>
                    <hr />
                    <div class="row">
                        <div class="col-md-3" style="margin-top: 5px;">
                            <label for="nip" class="control-label">NIP</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="number" class="form-control" id="nip" name="nip" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3" style="margin-top: 5px;">
                            <label for="nama" class="control-label">Nama</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3" style="margin-top: 5px;">
                            <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" data-language='en' autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-md-3" style="margin-top: 5px;">
                            <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="number" class="form-control" id="jenis_kelamin" name="jenis_kelamin" autocomplete="off">
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-md-3">
                            <label for="alamat" class="control-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-sm-9">
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="1">Pria</option>
                                <option value="2">Wanita</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-3" style="margin-top: 5px;">
                            <label for="alamat" class="control-label">Alamat</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <!-- <input type="text" class="form-control" id="alamat" name="alamat" autocomplete="off">  -->
                                <textarea class="form-control" rows="3" id="alamat" name="alamat"></textarea>
                            </div>
                        </div>
                    </div>
                    <h4 class="mt-0">Data Akun</h4>
                    <hr />
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-3" style="margin-top: 5px;">
                            <label for="alamat" class="control-label">Email</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3" style="margin-top: 5px;">
                            <label for="alamat" class="control-label">Role</label>
                        </div>
                        <div class="col-sm-9">
                            <select class="form-control" id="role" name="role">
                                <option value="1">Admin</option>
                                <option value="2">Dokter</option>
                                <option value="3">Apoteker</option>
                                <option value="4">Kasir</option>
                                <option value="5">Petugas Medis Penunjang</option>
                                <option value="6">Petugas Pendaftaran</option>
                                <option value="7">Petugas Perawatan</option>
                                <option value="8">Petugas Rekam Medis</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" id="row-poli" style="display: none;margin-top: 10px;">
                        <div class="col-md-3" style="margin-top: 5px;">
                            <label for="poli" class="control-label">Poli</label>
                        </div>
                        <div class="col-md-9">
                            <select class="form-control" id="id_poli" name="id_poli">
                                @foreach($DataPoli as $index => $dpo)
                                    <option value="{{$dpo->id_poli}}">{{$dpo->nama_poli}}</option>
                                @endforeach
                            </select>
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

