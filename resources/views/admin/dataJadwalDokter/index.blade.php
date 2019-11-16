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
                        <h3 class="panel-title">Jadwal Dokter</h3>
                    </div>
                    <div> 
                        <a type="button" class="btn btn-success btn-sm" style="float: left;margin:20px;" data-toggle="modal" data-target="#input-jadwal-dokter">
                            <i class="fa fa-plus"></i> Tambah Jadwal Dokter
                        </a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="jadwal-dokter" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Spesialis</th>
                                            <th>Hari</th>
                                            <th>Jam Mulai</th>
                                            <th>Jam Selesai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($DataJadwalDokter as $index => $djd)
                                        <tr>
                                            <td>{{$index +1}}</td>
                                            <td>{{$djd->nip}}</td>
                                            <td>{{$djd->nama_pegawai}}</td>
                                            <td>{{$djd->poli}}</td>
                                            <!-- <td>{{$djd->hari}}</td> -->
                                            @if($djd->hari == 1)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-secondary">Senin
                                                </span>
                                            </td>
                                            @elseif($djd->hari == 2)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-primary">Selasa
                                                </span>
                                            </td>
                                            @elseif($djd->hari == 3)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-success">Rabu
                                                </span>
                                            </td>
                                            @elseif($djd->hari == 4)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-info">Kamis
                                                </span>
                                            </td>
                                            @elseif($djd->hari == 5)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-purple">Jum'at
                                                </span>
                                            </td>
                                            @elseif($djd->hari == 6)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-purple">Sabtu
                                                </span>
                                            </td>
                                            @endif
                                            <td>{{Carbon\Carbon::parse($djd->jam_mulai)->format('g:i A')}}</td>
                                            <td>{{Carbon\Carbon::parse($djd->jam_selesai)->format('g:i A')}}</td>
                                            <td>
                                                <!-- <a href="/dataPegawai/edit/{{ $djd->id_pegawai }}" class="btn btn-warning btn-sm">Edit</a> -->

                                                <a href="/dataJadwalDokter/delete/{{ $djd->id }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus data ini?')">Delete</a>
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

        <div id="input-jadwal-dokter" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="input-jadwal-dokter" aria-hidden="true" style="display: none">
            <div class="modal-dialog"> 
                <form action="/dataJadwalDokter/create" method="post" autocomplete="off">
                   {{csrf_field()}}
                <div class="modal-content"> 
                    <!-- <div class="modal-header">
                        <h4 class="modal-title mt-0">Tambah Pegawai</h4>
                    </button>
                </div>  -->
                <div class="modal-body">
                    <h4 class="mt-0">Data Jadwal Dokter</h4>
                    <hr />
                    <div class="row" style="margin-bottom: 10px;"> 
                        <div class="col-md-3" style="margin-top: 5px;"> 
                            <label for="id_pegawai" class="control-label">Pilih Dokter</label>
                        </div> 
                        <div class="col-md-9"> 
                            <select class="form-control" id="id_pegawai" name="id_pegawai">
                                @foreach($DataDokter as $index => $dpo)
                                    <option value="{{$dpo->id_pegawai}}">{{$dpo->nama_pegawai}} - {{$dpo->poli}}</option>
                                @endforeach
                            </select>
                        </div> 
                    </div>
                    <div class="row"> 
                        <div class="col-md-3" style="margin-top: 5px;"> 
                            <label for="hari" class="control-label">Hari</label>
                        </div> 
                        <div class="col-md-9"> 
                            <select class="form-control" id="hari" name="hari">
                                <option value="1">Senin</option>
                                <option value="2">Selasa</option>
                                <option value="3">Rabu</option>
                                <option value="4">Kamis</option>
                                <option value="5">Jum'at</option>
                                <option value="6">Sabtu</option>
                            </select>
                        </div> 
                    </div>
                    <div class="row" style="margin-top: 10px;"> 
                        <div class="col-md-3" style="margin-top: 5px;"> 
                            <label for="jam_mulai" class="control-label">Jam Mulai</label>
                        </div> 
                        <div class="col-md-9"> 
                            <div class="form-group">
                                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" autocomplete="off">
                            </div> 
                        </div> 
                    </div>
                    <div class="row"> 
                        <div class="col-md-3" style="margin-top: 5px;"> 
                            <label for="jam_selesai" class="control-label">Jam Selesai</label>
                        </div> 
                        <div class="col-md-9"> 
                            <div class="form-group">
                                <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" autocomplete="off">
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