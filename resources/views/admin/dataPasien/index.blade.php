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
                        <h3 class="panel-title">Data Pasien</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="data-pasien" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th width="200px">No Rekam Medis</th>
                                            <th>Nama</th>
                                            <th width="100px">Gender</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($DataPasien as $index => $dps)
                                        <tr>
                                            <td>{{$index +1}}</td>
                                            <td>{{$dps->no_rekam_medis}}</td>
                                            <td>{{$dps->nama_pasien}}</td>
                                            @if($dps->jenis_kelamin == 1)
                                            <td><span class="badge badge-pill badge-primary" style="margin: 5px;">L</span></td>
                                            @else
                                            <td><span class="badge badge-pill badge-pink" style="margin: 5px;">P</span></td>
                                            @endif
                                            <td>{{$dps->alamat}}</td>
                                            <td>{{$dps->no_telp}}</td>
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

