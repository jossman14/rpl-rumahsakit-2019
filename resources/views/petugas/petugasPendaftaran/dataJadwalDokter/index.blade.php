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
                        <h3 class="panel-title">Cari Jadwal Dokter</h3>
                    </div>
                    <div class="panel-body">
                        <form action="/JadwalDokter/view" method="get" autocomplete="off">
                            <div class="row"> 
                                <div class="col-md-2" style="margin-top: 5px;"> 
                                    <label for="hari" class="control-label">Hari</label>
                                </div> 
                                <div class="col-md-4"> 
                                    <select class="form-control" id="hari" name="hari">
                                        <option value="1">Senin</option>
                                        <option value="2">Selasa</option>
                                        <option value="3">Rabu</option>
                                        <option value="4">Kamis</option>
                                        <option value="5">Jum'at</option>
                                        <option value="6">Sabtu</option>
                                    </select>
                                </div> 
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-info waves-effect waves-light"><i class="fa fa-search"></i> Cari</button>
                                </div>
                            </div>
                            <!-- <div class="row" style="margin-top: 10px;"> 
                                <div class="col-md-2" style="margin-top: 5px;"> 
                                    <label for="hari" class="control-label">Berdasarkan Nama</label>
                                </div> 
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" autocomplete="off"> 
                                    </div>
                                </div> 
                            </div>
                            <button type="submit" class="btn btn-info waves-effect waves-light"><i class="fa fa-search"></i> Cari</button> -->
                        </form>

                        <form action="/JadwalDokter/view" method="get" autocomplete="off">
                            <div class="row" style="margin-top: 10px;"> 
                                <div class="col-md-2" style="margin-top: 5px;"> 
                                    <label for="hari" class="control-label">Nama Dokter</label>
                                </div> 
                                <div class="col-md-4"> 
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" autocomplete="off"> 
                                    </div>
                                </div> 
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-info waves-effect waves-light"><i class="fa fa-search"></i> Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Jadwal Dokter</h3>
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
</div>
<!-- /.modal -->
<!-- End Row -->
@endsection