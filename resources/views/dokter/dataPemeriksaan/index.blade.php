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
                                        <h3 class="panel-title" style="color: #32AC63;">Data Pasien Pemeriksaan</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="data-pemeriksaan" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>No Rekam Medis</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <!-- <th>Jam Registrasi</th> -->
                                                            <th>Poli</th>
                                                            <th>Keluhan</th>
                                                            <th>Pemeriksaan</th>
                                                            <th>Rujukan</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($DataPasien as $index => $pas)
                                                        <tr>
                                                            <td>{{$index +1}}</td>
                                                            <td style="text-transform: uppercase;">{{$pas->no_rekam_medis}}</td>
                                                            <td>{{$pas->nama_pasien}}</td>
                                                            <td>{{$pas->umur}}</td>
                                                            <!-- <td>{{$pas->jam_registrasi}}</td> -->
                                                            <!-- <td>{{Carbon\Carbon::parse($pas->jam_registrasi)->format('g:i:s A')}}</td> -->
                                                            <td>{{$pas->nama_poli}}</td>
                                                            <td>{{$pas->keluhan}}</td>
                                                            @if($pas->status == 0)
                                                            <td>
                                                                <span style="text-transform: capitalize;" class="badge badge-danger">Belum
                                                                </span>
                                                            </td>
                                                            @elseif($pas->status == 1)
                                                            <td>
                                                                <span style="text-transform: capitalize;" class="badge badge-info">Sudah
                                                                </span>
                                                            </td>
                                                            @endif
                                                            <td>
                                                                <a href="/pemeriksaanPasien/rujukan/{{ $pas->id_registrasi }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Rujukan</a>
                                                            </td>
                                                            <td>
                                                                @if($pas->status == 0)
                                                                <a href="/pemeriksaanPasien/pemeriksaan/{{ $pas->id_registrasi }}" class="btn btn-info btn-sm"><i class="fa fa-plus"></i> Buat</a>
                                                                @elseif($pas->status == 1)
                                                                <a href="/pemeriksaanPasien/editPemeriksaan/{{ $pas->id_registrasi }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                                                @endif
                                                                <a href="/pemeriksaanPasien/delete/{{ $pas->id_registrasi }}" class="btn btn-danger btn-sm"><i class="fa fa-undo"></i> Reset</a>
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

