<link rel="stylesheet" href="{{ asset('css/staff-marriageRegistration.css') }}">
@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <div class="row">
                            <div class="col-md-10"><h6>PERMOHONAN PENDAFTARAN PERKHAWINAN >> E-FORMS >> <b>MARRIAGE</b></h6></div>
                            <div class="col-md-2 mb-2">
                                <a href="{{ route('staff.couple', ['id' => $data->MR_ID]) }}"
                                    class="btn btn-sm btn-light text-dark"
                                    style="border:none; color: white; font-size: 18px">&larr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Tarikh Akad Nikah</td>
                                    <td>: {{ $couple->Date_Nikah }}</td>
                                    <td>Nama Jurunikah</td>
                                    <td>: {{ $data->MR_Jurunikah_Name }}</td>
                                </tr>
                                <tr>
                                    <td>Masa Akad Nikah</td>
                                    <td>: {{ $data->MR_Time_Nikah }}</td>
                                    <td>Lafaz Ta’liq</td>
                                    <td>: {{ $data->MR_Lafaz_Taliq }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Tempat Kahwin</td>
                                    <td>: {{ $couple->Marriage_Place_Address }}</td>
                                    <td>No. Pendaftaran</td>
                                    <td>: MR00{{ $data->MR_ID }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Mas Kahwin</td>
                                    <td>: {{ $couple->Marriage_Dowry_Type }}</td>
                                    <td>Tarikh Pendaftaran</td>
                                    <td>: {{ $couple->Date_Request }}</td>
                                </tr>
                                <tr>
                                    <td>Mas Kahwin</td>
                                    <td>: RM {{ $couple->Marriage_Dowry }}</td>
                                    <td>Tempat Pendaftaran</td>
                                    <td>: {{ $couple->Marriage_Place }}</td>
                                </tr>
                                <tr>
                                    <td>Hantaran</td>
                                    <td>: RM {{ $couple->Other_Grants }}</td>
                                    <td>Negara</td>
                                    <td>: {{ $couple->Marriage_Country }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT WALI</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Nama Wali</td>
                                    <td>: {{ $couple->W_Name }}</td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Wali</td>
                                    <td>: {{ $couple->W_IC_No }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Wali</td>
                                    <td>: {{ $couple->W_Address }}</td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Wali</td>
                                    <td>: {{ $couple->W_Phone }}</td>
                                </tr>
                                <tr>
                                    <td>Kategori Nikah Wali</td>
                                    <td>: {{ $couple->W_Category_Nikah }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT SAKSI</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Saksi</td>
                                    <td>Saksi 1</td>
                                    <td>Saksi 2</td>
                                </tr>
                                <tr>
                                    <td>Nama Saksi</td>
                                    <td>: {{ $couple->Saksi1_Name }}</td>
                                    <td>{{ $couple->Saksi2_Name }}</td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Saksi</td>
                                    <td>: {{ $couple->Saksi1_IC_No }}</td>
                                    <td>{{ $couple->Saksi2_IC_No }}</td>
                                </tr>
                                <tr>
                                    <td>Umur Saksi</td>
                                    <td>: {{ $couple->Saksi1_Age }}</td>
                                    <td>{{ $couple->Saksi2_Age }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Saksi</td>
                                    <td>: {{ $couple->Saksi1_Address }}</td>
                                    <td>{{ $couple->Saksi2_Address }}</td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Saksi</td>
                                    <td>: {{ $couple->Saksi1_Phone }}</td>
                                    <td>{{ $couple->Saksi2_Phone }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('staff.couple', ['id' => $data->MR_ID]) }}"
                                    class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">BACK</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
@endsection
