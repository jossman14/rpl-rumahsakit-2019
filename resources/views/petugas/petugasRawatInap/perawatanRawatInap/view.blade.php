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
                        <h3 class="panel-title" style="color: #32AC63;">Pemeriksaan Pasien</h3>
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
                                            <th>Umur</th>
                                            <th>Poliklinik</th>
                                            <!-- <th>Tanggal Lahir</th> -->
                                            <!-- <th>Alamat</th> -->
                                            <th>Tipe Perawatan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($DataRawat as $index => $dps)
                                        <tr>
                                            <!-- <td>{{$index +1}}</td> -->
                                            <td style="text-transform: uppercase;">{{$dps->no_rekam_medis}}</td>
                                            <td>{{$dps->nama_pasien}}</td>
                                            <td>{{$dps->umur}} Tahun</td>
                                            <td>{{$dps->nama_poli}}</td>
                                            @if($dps->jenis_perawatan == 1)
                                            <td>
                                                <span style="text-transform: capitalize;" class="badge badge-primary">Rawat Inap
                                                </span>
                                            </td>
                                            @endif
                                            <td>
                                                <a href="/perawatanRawatInap/edit/{{ $dps->id_hasil_pemeriksaan }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Informasi Rawat Inap</a>
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