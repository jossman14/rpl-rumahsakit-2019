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
                                        <h3 class="panel-title">Data Oli</h3>
                                    </div>
                                    <div> 
                                        <a href="{{url('/oli/form')}}" type="button" class="btn btn-success btn-sm" style="float: right;margin:20px;">
                                            <i class="fa fa-plus"></i>Tambah Data Oli Baru
                                        </a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="data-oli" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th style="width: 50px;">Kode</th>
                                                            <th style="width: 125px;">Nama Barang</th>
                                                            <th style="width: 70px;">Ukuran</th>
                                                            <th>Harga</th>
                                                            <!-- <th>Harga/Item</th> -->
                                                            <th>Stok</th>
                                                            <th>Stok per buah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($oli as $index => $oli)
                                                        <tr>
                                                            <td>{{$index +1}}</td>
                                                            <td>{{$oli->kode}}</td>
                                                            <td style="font-size: 13px;width: 150px;">{{$oli->nm_barang}}</td>
                                                            <!-- <td>{{$oli->ukuran}}</td> -->
                                                            @if($oli->ukuran == '')
                                                                <td><span class="text-muted">Tidak ada ukuran</span></td>
                                                            @else
                                                                <td>{{$oli->ukuran}}</td>
                                                            @endif
                                                            <!-- <td>@currency($oli->harga)</td> -->
                                                            <!-- <td>@currency($oli->harga_pcs)</td> -->
                                                            @if($oli->harga_pcs == 0)
                                                                <td><span class="text-muted">Tidak dijual per item</span></td>
                                                            @else
                                                                <td>@currency($oli->harga) | @currency($oli->harga_pcs)@pcs</td>
                                                            @endif
                                                            <!-- <td>{{$oli->stok}}</td> -->
                                                            @if($oli->stok == 0)
                                                                <td><span class="text-muted">Belum ada stok</span></td>
                                                            @else
                                                                <td>{{$oli->stok}} Box</td>
                                                            @endif
                                                            <!-- <td>{{$oli->stok_pcs}}</td> -->
                                                            @if($oli->stok_pcs == 0)
                                                                <td><span class="text-muted">Belum ada stok</span></td>
                                                            @else
                                                                <td>{{$oli->stok_pcs}} Pcs</td>
                                                            @endif
                                                            <td>
                                                                <a href="/oli/edit/{{ $oli->id_barang }}" class="btn btn-warning btn-sm">Edit</a>

                                                                <a href="/oli/delete/{{ $oli->id_barang }}" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Permanen?')">Delete</a>
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
                    <!-- End Row -->
				@endsection

