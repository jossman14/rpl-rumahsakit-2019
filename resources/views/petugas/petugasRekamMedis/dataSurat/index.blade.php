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
                        <h3 class="panel-title" style="color: #32AC63;">Data Surat Rujukan</h3>
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
                                            <th style="font-weight: lighter;">No</th>
                                            <th style="font-weight: lighter;">No Rekam Medis</th>
                                            <th style="font-weight: lighter;">Pasien</th>
                                            <th style="font-weight: lighter;">No Surat</th>
                                            <th style="font-weight: lighter;">Tanggal</th>
                                            <th style="font-weight: lighter;">Dokter Pengirim</th>
                                            <th style="font-weight: lighter;">Jenis Surat Rujukan</th>
                                            <!-- <th width="85px;">No Telp</th> -->
                                            <th style="font-weight: lighter;">Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($dataRujukan as $index => $dps)
                                        <tr>
                                            <td>{{$index +1}}</td>
                                            <td style="text-transform: uppercase;">{{$dps->no_rekam_medis}}</td>
                                            <td>{{$dps->nama_pasien}}</td>
                                            <td>No. {{$dps->no_surat}}/RSIA-B/2019</td>
                                            <td>{{Carbon\Carbon::parse($dps->tanggal_waktu)->formatLocalized('%d %B %Y')}}</td>
                                            <td>{{$dps->nama_pegawai}}</td>
                                            <td>{{$dps->jenis}}</td>
                                            <td>

                                                <a href="/suratRujukanRM/edit/{{ $dps->id_surat }}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a>

                                                <a href="/suratRujukanRM/cetak/{{ $dps->id_surat }}" class="btn btn-warning btn-sm"><i class="fa fa-print"></i> Cetak</a>
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