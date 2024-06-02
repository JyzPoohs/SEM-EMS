<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <a href="{{ route('user.manageMarriageRegistration') }}">
                <h5>PERMOHONAN PENDAFTARAN PERKHAWINAN</h5>
            </a>
            <form action="{{ route('user.update', ['id' => $data->MR_ID]) }}" method="post" enctype="multipart/form-data"
                role="form">
                @csrf
                @method('PUT')
                <div class="col-lg-12">
                    <div class="card-header" style="background-color: #819CCE";>
                        <div class="row py-0">
                            <div class="col-md-11 my-auto">
                                <h6>E-FORMS >> <b>MARRIAGE</b></h6>
                            </div>
                            <div class="col-md-1">
                                <a href="{{ route('user.couple', ['id' => $data->MR_ID]) }}"
                                    class="btn btn-sm btn-light text-dark"
                                    style="border:none; color: white; font-size: 20px">&larr;</a>
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
                                            <p>{{ $data->mohon->Date_Request }}</p>
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
                                            <p>{{ $eform->P_Name }}</p>
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
                                            @if ($data->MR_Submit_Status == 'SUBMITTED')
                                                <p>{{ $data->MR_Payment_Receipt }}</p>
                                            @else
                                                <input required name="MR_Payment_Receipt" type="text"
                                                    value="{{ $data->MR_Payment_Receipt }}"
                                                    class="form-control @error('MR_Payment_Receipt') is-invalid @enderror"
                                                    placeholder="e.g. RPP0001">
                                                @if ($errors->has('MR_Payment_Receipt'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('MR_Payment_Receipt') }}
                                                    </div>
                                                @endif
                                            @endif

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="">Dokumen Resit Daftar Perkhawinan :</label>
                                            <p>{{ $data->MR_Receipt_Proof ? $data->MR_Receipt_Proof : 'No resit found' }}
                                            </p>
                                            @if ($data->MR_Receipt_Proof)
                                                <a href="{{ route('user.proof', ['id' => $data->MR_ID]) }}"
                                                    class="btn btn-secondary btn-sm w-100">View Resit</a>
                                            @endif
                                            @if ($data->MR_Submit_Status == 'SAVED')
                                                <input type="file"
                                                    class="form-control mt-2 @error('MR_Receipt_Proof') is-invalid @enderror"
                                                    id="file" name="MR_Receipt_Proof">
                                                @if ($errors->has('MR_Receipt_Proof'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('MR_Receipt_Proof') }}
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
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
                                                <p>{{ $eform->W_Name }}</p>
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
                                                <p>{{ $eform->W_IC_No }}</p>
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
                                                <p>{{ $eform->W_Phone }}</p>
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
                                                <p>{{ $eform->W_Category_Nikah }}</p>
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
                                                <p>{{ $eform->W_Address }}</p>
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
                                            <p>{{ $eform->Date_Nikah }}</p>
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
                                            @if ($data->MR_Submit_Status == 'SAVED')
                                                <input required name="MR_Time_Nikah" type="time"
                                                    value="{{ $data->MR_Time_Nikah }}"
                                                    class="form-control @error('MR_Time_Nikah') is-invalid @enderror">
                                                @if ($errors->has('MR_Time_Nikah'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('MR_Time_Nikah') }}
                                                    </div>
                                                @endif
                                            @else
                                                <p>{{ $data->MR_Time_Nikah }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">Alamat Tempat Kahwin</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $eform->Marriage_Place }}</p>
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
                                            <p>{{ $eform->Marriage_Dowry_Type }}</p>
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
                                            <p>RM {{ $eform->Marriage_Dowry }}</p>
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
                                            <p>RM {{ $eform->Other_Grants }}</p>
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
                                            @if ($data->MR_Submit_Status == 'SAVED')
                                                <input required name="MR_Jurunikah_Name" type="text"
                                                    value="{{ $data->MR_Jurunikah_Name }}"
                                                    class="form-control @error('MR_Jurunikah_Name') is-invalid @enderror">
                                                @if ($errors->has('MR_Jurunikah_Name'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('MR_Jurunikah_Name') }}
                                                    </div>
                                                @endif
                                            @else
                                                <p>{{ $data->MR_Jurunikah_Name }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label for="">No. Pendaftaran</label>
                                        </div>
                                        <div class="col-md-1">
                                            <label for="">:</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{ $eform->Slip_Mohon_Online }}</p>
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
                                            <p>{{ $eform->Date_Nikah }}</p>
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
                                            <p>{{ $eform->Marriage_Place }}</p>
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
                                            <p>{{ $eform->Marriage_Country }}</p>
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
                                            @if ($data->MR_Submit_Status == 'SAVED')
                                                <select required name="MR_Lafaz_Taliq"
                                                    class="form-control @error('MR_Lafaz_Taliq') is-invalid @enderror"
                                                    id="MR_Lafaz_Taliq">
                                                    <option disabled selected>Lafaz Ta'liq</option>
                                                    <option {{ $data->MR_Lafaz_Taliq == 'YA' ? 'selected' : '' }}
                                                        value="YA">YA</option>
                                                    <option {{ $data->MR_Lafaz_Taliq == 'TIDAK' ? 'selected' : '' }}
                                                        value="TIDAK">TIDAK</option>
                                                </select>
                                                @if ($errors->has('MR_Lafaz_Taliq'))
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $errors->first('MR_Lafaz_Taliq') }}
                                                    </div>
                                                @endif
                                            @else
                                                <p>{{ $data->MR_Lafaz_Taliq }}</p>
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
                                                <p>{{ $eform->Saksi1_Name }}</p>
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
                                                <p>{{ $eform->Saksi1_IC_No }}</p>
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
                                                <p>{{ $eform->Saksi1_Age }}</p>
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
                                                <p>{{ $eform->Saksi1_Address }}</p>
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
                                                <p>{{ $eform->Saksi1_Phone }}</p>
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
                                                <p>{{ $eform->Saksi2_Name }}</p>
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
                                                <p>{{ $eform->Saksi2_IC_No }}</p>
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
                                                <p>{{ $eform->Saksi2_Age }}</p>
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
                                                <p>{{ $eform->Saksi2_Address }}</p>
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
                                                <p>{{ $eform->Saksi2_Phone }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-4">
                                <a href="{{ route('user.manageMarriageRegistration', ['id' => $data->MR_ID]) }}"
                                    class="btn btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">Back To List</a>
                            </div>
                            @if ($data->MR_Submit_Status == 'SAVED')
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-info btn-block"
                                        style="border:none; color: white;">Save</button>
                                </div>
                            @endif
                            <div class="col-md-4">
                                <a href="{{ route('user.couple', ['id' => $data->MR_ID]) }}" class="btn btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
