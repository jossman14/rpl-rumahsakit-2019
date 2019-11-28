        @extends('layouts.master')

        @section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="color: #32AC63;">Lihat Surat Rujukan</h3>
                    </div>
                    
                    <!-- <div> 
                        <a type="button" class="btn btn-success btn-sm" style="float: left;margin:20px;" href="/RegistrasiPasien">
                            <i class="fa fa-plus"></i> Tambah Data Pasien
                        </a>
                    </div> -->
                    <div class="col-md-10" style="margin-top: 20px;padding-left: 0">
                        <div style="border: 2px solid #32AC63; border-radius: 5px;height: auto; background-color: white;">
                            <div class="row" style="padding: 10px 10px 0px 10px;">
                                <div class="col-md-12" style="text-align: center;">
                                        <img src="{{ asset('admin/assets/images/RSIA.png') }}" height="150px" style="margin: 0px;"></img>
                                        <p style="margin:10px 5px; font-size: 20px; font-weight: bold;">RSIA Bahagia <br> <span style="font-size: 15px;line-height: -20px;font-weight: lighter;">BTN Minasa Upa Blok H7 No. 9, Gn. Sari, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 42111</span></p>
                                </div>
                            </div>
                            <hr />
                            <div class="row" style="margin-top:20px; padding: 10px 20px; line-height: 20px;">
                                <div style="text-align: center;">
                                    <p style="margin-top: -10px;margin-bottom: 20px; font-size: 15px; font-weight: bold;text-transform: uppercase;text-decoration: underline;">Surat Rujukan Pasien</p>
                                @foreach($dataSurat as $index => $dps)
                                    <p style="margin-top: -10px;margin-bottom: 20px; font-size: 15px; font-weight: bold;text-transform: uppercase;">No. {{$dps->no_surat}}</p>
                                </div>
                                <p style="margin-left: 10px; font-size: 14px;">Kami sampaikan surat rujukan dengan data sebagai berikut: </p>
                                <br>
                                <p style="margin-left: 30px; font-size: 14px;">Nama : {{$dps->nama_pasien}}</p>
                                <p style="margin-left: 30px; font-size: 14px;">Umur : {{$dps->umur}}</p>
                                <p style="margin-left: 30px; font-size: 14px;">Alamat : {{$dps->alamat}}</p>
                                <p style="margin-left: 30px; font-size: 14px;">Diagnosa Sementara : {{$dps->diagnosis}}</p>
                                <br>
                                <p style="margin-left: 10px; font-size: 14px;">Pasien diatas memerlukan Rujukan {{$dps->jenis}}, atas bantuan nya kami ucapkan terima kasih.</p>
                                <!-- <hr /> -->
                                <br>
                                <br>
                                <div style="float: right;margin: 0px 50px 50px 0px;">
                                    <p style="font-size: 14px;">Makassar, {{Carbon\Carbon::parse($dps->tanggal_waktu)->formatLocalized('%d %B %Y')}}</p>
                                    <p style="font-size: 14px;">Dokter Pemeriksa</p>
                                    <p style="font-size: 14px;margin-top: 100px;font-weight: bold;">dr. {{$dps->nama_pegawai}}</p>
                                </div>
                                @endforeach
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