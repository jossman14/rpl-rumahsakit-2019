        @extends('layouts.master')

        @section('content')

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="color: #32AC63;">Kartu Pasien</h3>
                    </div>
                    
                    <!-- <div> 
                        <a type="button" class="btn btn-success btn-sm" style="float: left;margin:20px;" href="/RegistrasiPasien">
                            <i class="fa fa-plus"></i> Tambah Data Pasien
                        </a>
                    </div> -->
                    <div class="col-md-4" style="margin-top: 20px;padding-left: 0">
                        <div style="border: 2px solid #32AC63; border-radius: 5px;height: auto; background-color: white;">
                            <div class="row" style="padding: 10px 10px 0px 10px;">
                                <div class="col-md-2">
                                    <img src="{{ asset('admin/assets/images/RSIA.png') }}" height="60px" style="margin: 0px;"></img>
                                </div>
                                <div class="col-md-10">
                                    <p style="margin:10px 5px; font-size: 14px; font-weight: bold;">RSIA Bahagia <br> <span style="font-size: 9px;line-height: -20px;font-weight: lighter;">BTN Minasa Upa Blok H7 No. 9, Gn. Sari, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 42111</span></p>
                                </div>
                            </div>
                            <!-- <hr /> -->
                            <div class="row" style="margin-top:20px; padding: 10px 20px; line-height: 10px;">
                                <p style="margin-left: 10px; margin-top: -10px;margin-bottom: 20px; font-size: 12px; font-weight: bold;text-transform: uppercase;">Kartu Pasien</p>
                                @foreach($DataPasien as $index => $dps)
                                <p style="margin-left: 10px; font-size: 11px;">No Rekam Medis : <span style="text-transform: uppercase;">{{$dps->no_rekam_medis}}</span></p>
                                <p style="margin-left: 10px; font-size: 11px;">Nama : {{$dps->nama_pasien}}</p>
                                <p style="margin-left: 10px; font-size: 11px;">Tanggal Lahir : {{Carbon\Carbon::parse($dps->tanggal_lahir)->formatLocalized('%d %B %Y')}}</p>
                                <p style="margin-left: 10px; font-size: 11px;">Alamat : {{$dps->alamat}}</p>
                                @endforeach
                                <p style="margin-left: 10px; font-size: 11px;">Harap dibawa saat ingin melakukan pendaftaran ke dokter poliklinik tujuan</p>
                                <!-- <hr /> -->
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