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
                        <h3 class="panel-title" style="color: #32AC63;">Data Kamar</h3>
                    </div>
                    <!-- <div> 
                        <a type="button" class="btn btn-success btn-sm" style="float: left;margin:20px;" data-toggle="modal" data-target="#tambah-kamar">
                            <i class="fa fa-plus"></i> Tambah Data Kamar
                        </a>
                    </div> -->
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="data-obat" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tipe Kamar</th>
                                            <th>Nama</th>
                                            <th>Kuota</th>
                                            <th>Keterangan</th>
                                            <!-- <th>Aksi</th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($DataKamar as $index => $dk)
                                        <tr>
                                            <td>{{$index +1}}</td>
                                            <!-- <td>{{$dk->id_obat}}</td> -->
                                            <td><span style="text-transform: capitalize;" class="badge badge-primary">{{$dk->tipe_kamar}}</span></td>
                                            <!-- <td>{{$dk->tipe_kamar}}</td> -->
                                            <td>{{$dk->kamar}}</td>
                                            @if($dk->kuota == 0)
                                            <td><span style="text-transform: capitalize;" class="badge badge-warning">Penuh</span></td>
                                            @elseif($dk->kuota > 0)
                                            <td><span style="text-transform: capitalize;" class="badge badge-info">{{$dk->kuota}} Pasien</span></td>
                                            @endif
                                            @if($dk->tipe_kamar == 'VIP')
                                            <td style="font-style: italic;">Tipe Kamar VIP Diperuntukan untuk 1 pasien</td>
                                            @elseif($dk->tipe_kamar == 'Kelas 1')
                                            <td style="font-style: italic;">Tipe Kamar Kelas 1 Diperuntukan untuk 2 pasien</td>
                                            @elseif($dk->tipe_kamar == 'Kelas 2')
                                            <td style="font-style: italic;">Tipe Kamar Kelas 2 Diperuntukan untuk 3 pasien</td>
                                            @elseif($dk->tipe_kamar == 'Kelas 3')
                                            <td style="font-style: italic;">Tipe Kamar Kelas 3 Diperuntukan untuk 5 pasien</td>
                                            @endif
                                            <!-- <td> -->
                                                <!-- <a href="/dataKamar/edit/{{ $dk->id_ruang }}" class="btn btn-warning btn-sm">Edit</a> -->

                                                <!-- @if($dk->kuota > 0)
                                                <a href="/ketersediaanRuangan/delete/{{ $dk->id_ruang }}" class="btn btn-warning btn-sm" onclick="return confirm('Ubah status kamar?')" style="display: none;">Update Status Kamar</a>
                                                @else
                                                <a href="/ketersediaanRuangan/delete/{{ $dk->id_ruang }}" class="btn btn-warning btn-sm" onclick="return confirm('Ubah status kamar?')">Update Status Kamar</a>
                                                @endif
                                            </td> -->
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

