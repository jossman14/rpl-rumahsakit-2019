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
                                        <h3 class="panel-title" style="color: #32AC63;">Data Hasil Pemeriksaan</h3>
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
                                                            <!-- <th>Umur</th> -->
                                                            <th>Rawat</th>
                                                            <th>Diagnosis</th>
                                                            <th>Medis Penunjang</th>
                                                            <th>Aksi</th>
                                                            <th>Rujukan</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($DataHasilPemeriksaan as $index => $pas)
                                                        <tr>
                                                            <td>{{$index +1}}</td>
                                                            <td style="text-transform: uppercase;">{{$pas->no_rekam_medis}}</td>
                                                            <td>{{$pas->nama_pasien}}</td>
                                                            <!-- <td>{{$pas->umur}} Tahun</td> -->
                                                            <!-- <td>{{$pas->jam_registrasi}}</td> -->
                                                            <!-- <td>{{Carbon\Carbon::parse($pas->jam_registrasi)->format('g:i:s A')}}</td> -->
                                                            @if($pas->jenis_perawatan == 1)
                                                            <td>
                                                                <span style="text-transform: capitalize;" class="badge badge-info">Rawat Inap
                                                                </span>
                                                            </td>
                                                            @elseif($pas->jenis_perawatan == 2)
                                                            <td>
                                                                <span style="text-transform: capitalize;" class="badge badge-info">Rawat Jalan
                                                                </span>
                                                            </td>
                                                            @endif
                                                            <td>{{$pas->diagnosis}}</td>
                                                            @if($pas->medis_penunjang == 0)
                                                            <td>
                                                                <span style="text-transform: capitalize;" class="badge badge-danger">Tidak perlu
                                                                </span>
                                                            </td>
                                                            @elseif($pas->medis_penunjang == 1)
                                                            <td>
                                                                <span style="text-transform: capitalize;" class="badge badge-info">Perlu
                                                                </span>
                                                            </td>
                                                            @endif
                                                            <td>
                                                                <a href="/pemeriksaanPasien/editPemeriksaan/{{ $pas->id_registrasi }}" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit</a>
                                                            </td>
                                                            @if($pas->id_surat == null)
                                                            <td>
                                                                <a href="/pemeriksaanPasien/rujukan/{{ $pas->id_hasil_pemeriksaan }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Rujukan</a>
                                                            </td>
                                                            @else
                                                            <td>
                                                                <a href="/pemeriksaanPasien/editRujukan/{{ $pas->id_hasil_pemeriksaan }}" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Rujukan</a>
                                                            </td>
                                                            @endif
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

