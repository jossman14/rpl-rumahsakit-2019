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
                        <h3 class="panel-title" style="color: #32AC63;">Data Tujuan Poliklinik</h3>
                    </div>
                    <!-- <div> 
                        <a type="button" class="btn btn-success btn-sm" style="float: left;margin:20px;" href="/RegistrasiPasien">
                            <i class="fa fa-plus"></i> Tambah Data Pasien
                        </a>
                    </div> -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="data-pasien" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th width="150px;">No Rekam Medis</th>
                                            <th width="200px;">Nama</th>
                                            <th>Umur</th>
                                            <!-- <th 150px;">Tanggal Lahir</th> -->
                                            <!-- <th>Alamat</th> -->
                                            <th>Gender</th>
                                            <th>Poliklinik</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($DataTujuan as $index => $dps)
                                        <tr>
                                            <td>{{$index +1}}</td>
                                            <td style="text-transform: uppercase;">{{$dps->no_rekam_medis}}</td>
                                            <td>{{$dps->nama_pasien}}</td>
                                            <td>{{$dps->umur}} Tahun</td>
                                            <!-- <td>{{Carbon\Carbon::parse($dps->tanggal_lahir)->formatLocalized('%d %B %Y')}}</td> -->
                                            <!-- <td>{{$dps->alamat}}</td> -->
                                            @if($dps->jenis_kelamin == 1)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-primary">Pria
                                                </span>
                                            </td>
                                            @elseif($dps->jenis_kelamin == 2)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-pink">Wanita
                                                </span>
                                            </td>
                                            @endif
                                            <td>{{$dps->nama_poli}}</td>
                                            <td>
                                                <!-- <a href="/dataTujuanPoliklinik/cetak/{{ $dps->id_pasien }}" class="btn btn-warning btn-sm"><i class="fa fa-print"></i> Cetak</a> -->

                                                <a href="/dataTujuanPoliklinik/edit/{{ $dps->id_pasien }}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                                                <!-- <a href="/dataPasien/delete/{{ $dps->id_pasien }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus data ini?')"><i class="fa fa-trash"></i> Delete</a> -->
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
    </div>
</div>
<!-- /.modal -->
<!-- End Row -->
@endsection