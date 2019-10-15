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
                        <h3 class="panel-title">Data Poli</h3>
                    </div>
                    <div> 
                        <a type="button" class="btn btn-success btn-sm" style="float: left;margin:20px;" data-toggle="modal" data-target="#tambah-poli">
                            <i class="fa fa-plus"></i> Tambah Data Poli
                        </a>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <table id="data-poli" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Poli</th>
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($DataPoli as $index => $dp)
                                        <tr>
                                            <td>{{$index +1}}</td>
                                            <td>{{$dp->id_poli}}</td>
                                            <td>{{$dp->nama_poli}}</td>
                                            <td>
                                                <a href="/dataPoli/edit/{{ $dp->id_poli }}" class="btn btn-warning btn-sm">Edit</a>

                                                <a href="/dataPoli/delete/{{ $dp->id_poli }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus data ini?')">Delete</a>
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

        <div id="tambah-poli" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tambah-poli" aria-hidden="true" style="display: none">
            <div class="modal-dialog"> 
                <form action="/dataPoli/create" method="post" autocomplete="off">
                   {{csrf_field()}}
                   <div class="modal-content"> 
                    <div class="modal-header">
                        <h4 class="modal-title mt-0">Tambah Poli</h4>
                    </button>
                </div> 
                <div class="modal-body"> 
                    <div class="row"> 
                        <div class="col-md-3" style="margin-top: 5px;"> 
                            <label for="nama_poli" class="control-label">Nama Poli</label>
                        </div> 
                        <div class="col-md-9"> 
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama_poli" name="nama_poli" autocomplete="off"> 
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

