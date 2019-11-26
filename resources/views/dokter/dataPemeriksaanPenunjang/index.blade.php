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
                                        <h3 class="panel-title" style="color: #32AC63;">Data Pasien Pemeriksaan Penunjang</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="data-pemeriksaan" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>No Rekam Medis</th>
                                                            <th>Nama Pasien</th>
                                                            <th>Umur</th>
                                                            <!-- <th>Jam Registrasi</th> -->
                                                            <th>Poli</th>
                                                            <th>Keluhan</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($DataMedisPenunjang as $index => $pas)
                                                        <tr>
                                                            <td>{{$index +1}}</td>
                                                            <td style="text-transform: uppercase;">{{$pas->no_rekam_medis}}</td>
                                                            <td>{{$pas->nama_pasien}}</td>
                                                            <td>{{$pas->umur}}</td>
                                                            <!-- <td>{{Carbon\Carbon::parse($pas->jam_registrasi)->format('g:i:s A')}}</td> -->
                                                            <td>{{$pas->nama_poli}}</td>
                                                            <td>{{$pas->keluhan}}</td>
                                                            <td>
                                                                <a href="/pemeriksaanPenunjang/edit/{{ $pas->id_registrasi }}" class="btn btn-info btn-sm"><i class="fa fa-stethoscope" style="margin-right: 5px;"></i> Lihat Pemeriksaan</a>
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

