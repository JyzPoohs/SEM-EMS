<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <a href="{{route('user.manageMarriageRegistration')}}">
                <h5>PERMOHONAN PENDAFTARAN PERKHAWINAN</h5>
            </a>
            <form action="{{ route('user.storeEForms') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-lg-12">
                    <div class="card-header" style="background-color: #819CCE";>
                        <div class="row py-0">
                            <div class="col-md-11 my-auto">
                                <h6>E-FORMS >> <b>MARRIAGE</b></h6>
                            </div>
                            <div class="col-md-1">
                                <a href="{{ route('user.addGroomBride') }}" class="btn btn-sm btn-light text-dark"
                                    style="border:none; color: white; font-size: 18px">&larr;</a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body" style="background-color: #ECF3FF">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-header pb-0 mb-1 text-center">
                                        <h6>MAKLUMAT PERKAHWINAN</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Tarikh Mohon</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <p>{{ $data->Date_Request }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Nama Suami</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <p>{{ auth()->user()->name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Nama Isteri</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <p>{{ $data->P_Name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Resit Daftar Perkhawinan</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input required name="MR_Payment_Receipt" type="text" value="{{ old('MR_Payment_Receipt') }}"
                                                class="form-control @error('MR_Payment_Receipt') is-invalid @enderror"
                                                placeholder="e.g. RPP0001">
                                        </div>
                                        @if ($errors->has('MR_Payment_Receipt'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('MR_Payment_Receipt') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="">Dokumen Resit Daftar Perkhawinan:</label>
                                        <input type="file" class="form-control @error('MR_Receipt_Proof') is-invalid @enderror"
                                            id="file" name="MR_Receipt_Proof" value="{{old('MR_Receipt_Proof')}}">
                                        @if ($errors->has('MR_Receipt_Proof'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('MR_Receipt_Proof') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-header pb-0 mb-1 text-center">
                                        <h6>MAKLUMAT WALI</h6>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">Nama Wali</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->W_Name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">No. IC Wali</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->W_IC_No }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">No. Telefon Wali</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->W_Phone }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">Kategori Nikah Wali</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->W_Category_Nikah }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">Alamat Wali</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->W_Address }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body" style="background-color: #ECF3FF">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-header pb-0 mb-1 text-center">
                                        <h6>MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Tarikh Akad Nikah</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $data->Date_Nikah }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Masa Akad Nikah</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input required name="MR_Time_Nikah" type="time" value="{{ old('MR_Time_Nikah') }}"
                                                class="form-control @error('MR_Time_Nikah') is-invalid @enderror">
                                        </div>
                                        @if ($errors->has('MR_Time_Nikah'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('MR_Time_Nikah') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Alamat Tempat Kahwin</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $data->Marriage_Place }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Jenis Mas Kahwin</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $data->Marriage_Dowry_Type }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Mas Kahwin</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>RM {{ $data->Marriage_Dowry }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Hantaran</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>RM {{ $data->Other_Grants }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Nama Jurunikah</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <input required name="MR_Jurunikah_Name" type="text" value="{{ old('MR_Jurunikah_Name') }}"
                                                class="form-control @error('MR_Jurunikah_Name') is-invalid @enderror"
                                                placeholder="e.g. Abdullah">
                                        </div>
                                        @if ($errors->has('MR_Jurunikah_Name'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('MR_Jurunikah_Name') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">No. Pendaftaran</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $data->Slip_Mohon_Online }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Tarikh Pendaftaran</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $data->Date_Nikah }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Tempat Pendaftaran</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $data->Marriage_Place }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Negara</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $data->Marriage_Country }}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Lafaz Ta’liq</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <select required name="MR_Lafaz_Taliq"
                                                class="form-control @error('MR_Lafaz_Taliq') is-invalid @enderror"
                                                id="MR_Lafaz_Taliq">
                                                <option disabled selected>Lafaz Ta'liq</option>
                                                <option {{old('MR_Lafaz_Taliq') == 'YA' ? 'selected' : ''}} value="YA">YA</option>
                                                <option {{old('MR_Lafaz_Taliq') == 'TIDAK' ? 'selected' : ''}} value="TIDAK">TIDAK</option>
                                            </select>
                                            @if ($errors->has('MR_Lafaz_Taliq'))
                                            <div class="text-danger" role="alert">
                                                {{ $errors->first('MR_Lafaz_Taliq') }}
                                            </div>
                                        @endif
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-header pb-0 mb-1 text-center">
                                        <h6>MAKLUMAT SAKSI</h6>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">Nama Saksi (1)</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->Saksi1_Name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">No. Kad Pengenalan Saksi (1)</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->Saksi1_IC_No }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">Umur Saksi (1)</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->Saksi1_Age }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">Alamat Saksi (1)</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->Saksi1_Address }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">No. Telefon Saksi (1)</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->Saksi1_Phone }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">Nama Saksi (2)</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->Saksi2_Name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">No. Kad Pengenalan Saksi (2)</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->Saksi2_IC_No }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">Umur Saksi (2)</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->Saksi2_Age }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">Alamat Saksi (2)</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->Saksi2_Address }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="">No. Telefon Saksi (2)</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label for="">:</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $data->Saksi2_Phone }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input hidden name="request_id" value="{{ $data->Slip_Mohon_Online }}" type="text">
                            </div>
                            <div class="row justify-content-center text-center mt-3">
                                <div class="col-md-4">
                                    <a href="{{ route('user.addGroomBride') }}" class="btn btn-primary btn-block"
                                        style="background-color: #0050d1; border:none; color: white;">Back</a>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-block"
                                        style="background-color: #0050d1; border:none; color: white;">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
