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
                        <h3 class="panel-title" style="color: #32AC63;">Data Rawat Inap</h3>
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
                                            <!-- <th>No</th> -->
                                            <th>No Rekam Medis</th>
                                            <th>Nama Pasien</th>
                                            <th>Dari</th>
                                            <th>Sampai</th>
                                            <!-- <th>Durasi</th> -->
                                            <!-- <th>Tanggal Lahir</th> -->
                                            <!-- <th>Alamat</th> -->
                                            <th>Ruang</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($DataRawatInap as $index => $dps)
                                        <tr>
                                            <!-- <td>{{$index +1}}</td> -->
                                            <td style="text-transform: uppercase;">{{$dps->no_rekam_medis}}</td>
                                            <td>{{$dps->nama_pasien}}</td>
                                            <td>{{Carbon\Carbon::parse($dps->tanggal_masuk)->formatLocalized('%d %B %Y')}}</td> 
                                            <td>{{Carbon\Carbon::parse($dps->tanggal_keluar)->formatLocalized('%d %B %Y')}}</td>
                                            <!-- <td>{{$dps->hari}} Hari</td> -->
                                            <td>{{$dps->kamar}}</td>
                                            @if($dps->status_rawat_inap == 0)
                                            <td><span style="text-transform: capitalize;" class="badge badge-info">Sedang dirawat</span></td>
                                            @elseif($dps->status_rawat_inap == 1)
                                            <td><span style="text-transform: capitalize;" class="badge badge-danger">Selesai</span></td>
                                            @endif
                                            <td>
                                                <a href="/dataRawatInap/monitoringPasien/{{ $dps->no_rekam_medis }}" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> Monitoring Pasien</a>
                                                <a href="/dataRawatInap/perawatanSelesai/{{ $dps->id_rawat_inap }}/{{$dps->id_ruang}}" class="btn btn-danger btn-sm"><i class="fa fa-stethoscope"></i> Perawatan Selesai</a>
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