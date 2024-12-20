<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid">
        <div class="row mt-4">
            <a href="{{route('user.manageMarriageRegistration')}}">
                <h5>PERMOHONAN PENDAFTARAN PERKHAWINAN</h5>
            </a>
            <div class="col-lg-12">
                <div class="card-header" style="background-color: #819CCE">
                    <div class="row py-0">
                        <div class="col-md-11 my-auto">
                            <h6>E-FORMS >> <b>GROOM & BRIDE</b></h6>
                        </div>
                        <div class="col-md-1">
                            <a href="{{ route('user.addMarriage') }}" class="btn btn-sm btn-light text-dark"
                                style="border:none; color: white; font-size: 18px">&#8594;</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body form-group" style="background-color: #ECF3FF">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="role">Role</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <h6 class="font-weight-bold">Groom</h6>
                            </div>
                            <div class="col-md-4 text-center">
                                <h6 class="font-weight-bold">Bride</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">No. Kad Pengenalan</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->U_IC_No}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->Pasangan_IC_No}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="name">Nama</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->user->name}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Name}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="birth">Tarikh Lahir</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->Birthday}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Date_of_Birth}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Umur</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->Age}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Age}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Bangsa</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->Ethnic}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Ethnic}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Warganegara</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->Nationality}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Rationality}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Taraf Pendidkan</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->Edu_Level}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Edu_Level}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Sektor Perkerjaan/Jawatan</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->Employment_Sector}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Employment_Sector}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Pendapatan</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->Amount_Salary}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Amount_Salary}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Perkerjaan/Jawatan</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->Job}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Job}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Alamat Dalam K/P</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->IC_Address}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_IC_Address}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">No. Telefon</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->user->phone}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Phone_No}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Alamat Dalam K/P</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->IC_Address}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_IC_Address}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Alamat Semasa</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->Current_Address}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Current_Address}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Status Sebelum Perkahwinan</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->Marriage_Status}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Marriage_Status}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Status Saudara Baru</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->Status_Saudara_Baru}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Status_Saudara_Baru}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">No. Sijil Kursus Pra Perkahwinan</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->PrepCourse_ID}}</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_PrepCourse_ID}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">Tarikh Masuk Islam</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p> - </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Date_Convert_Islam}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">No. Pendaftaran Islam</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p> - </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Islam_Register_No ? $data->P_Islam_Register_No : ''}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="ic">No. Lesen Kahwin</label>
                            </div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-4 text-center">
                                <p> - </p>
                            </div>
                            <div class="col-md-4 text-center">
                                <p>{{ $data->P_Marriage_Couple_License__No}}</p>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('user.manageMarriageRegistration') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">Back To List</a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('user.addMarriage') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">NEXT</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
