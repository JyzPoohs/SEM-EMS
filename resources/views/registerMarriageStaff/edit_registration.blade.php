<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid">
        @if (session('error'))
            <div class=" mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                <p class="mb-0 text-dark">{{ session()->get('error') }}</p>
            </div>
        @endif
        <div class="row mt-4">
            <a href="{{ route('user.manageMarriageRegistration') }}">
                <h5>PERMOHONAN PENDAFTARAN PERKHAWINAN</h5>
            </a>
            <div class="card p-0">
                <div class="card-header" style="background-color: #66bdba">
                    <div class="row">
                        <div class="col-md-10 my-auto ml-5">
                            <h6>E-FORMS >> <b>Registration Approval Information</b></h6>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('staff.manageMarriage') }}" class="btn btn-sm btn-light text-dark">Back to
                                List</a>
                            <a href="{{ route('staff.eFormsMarriage', ['id' => $data->MR_ID]) }}"
                                class="btn btn-sm btn-light text-dark"
                                style="border:none; color: white; font-size: 18px">&#8594;</a>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="background-color: #e2fbfb">
                    <div class="row">
                        <div class="col-md-7">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Nama/IC Suami</td>
                                        <td>&nbsp;&nbsp;:</td>
                                        <td> &nbsp;&nbsp;{{ $couple->suami_name }}&nbsp;({{ $couple->U_IC_No }})</td>
                                    </tr>
                                    <td>Nama/IC Isteri</td>
                                    <td>&nbsp;&nbsp;:</td>
                                    <td> &nbsp;&nbsp;{{ $couple->P_Name }}&nbsp;({{ $couple->Pasangan_IC_No }})</td>
                                    </tr>
                                    <tr>
                                        <td>Tarikh Mohon</td>
                                        <td>&nbsp;&nbsp;:</td>
                                        <td> &nbsp;&nbsp;{{ $data['created_at']->format('Y/m/d') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tarikh Terima</td>
                                        <td>&nbsp;&nbsp;:</td>
                                        <td> &nbsp;&nbsp;{{ $data['updated_at']->format('Y/m/d') }}</td>
                                    </tr>
                                    <tr>
                                        <td>No. Permohonan Online</td>
                                        <td>&nbsp;&nbsp;:</td>
                                        <td> &nbsp;&nbsp;MR00{{ $data->MR_ID }}</td>
                                    </tr>
                                    <tr>
                                        <td>No. Akaun Terima</td>
                                        <td>&nbsp;&nbsp;:</td>
                                        <td> &nbsp;&nbsp;{{ $data->MR_Payment_Receipt }}</td>
                                    </tr>
                                    <tr>
                                        <td>Resit</td>
                                        <td>&nbsp;&nbsp;:</td>
                                        <td>&nbsp;&nbsp;{{ $data->MR_Receipt_Proof }}
                                            @if ($data->MR_Receipt_Proof)
                                                <a href="{{ route('staff.proof', ['id' => $data->MR_ID]) }}"
                                                    class="btn btn-sm bg-light">View</a>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-5">
                            <form action="{{ route('staff.update', ['id' => $data->MR_ID]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                @if ($data->MR_Approval_Status == 'PENDING')
                                    <label for="MR_Approval_Status">Status</label>
                                    <select required name="MR_Approval_Status"
                                        class="form-select @error('MR_Approval_Status') is-invalid @enderror">
                                        <option value="PENDING" disabled selected>Status Kelulusan</option>
                                        <option {{ old('MR_Approval_Status') == 'LULUS' ? 'selected' : '' }}
                                            value="LULUS">
                                            LULUS</option>
                                        <option {{ old('MR_Approval_Status') == 'GAGAL' ? 'selected' : '' }}
                                            value="GAGAL">
                                            GAGAL</option>
                                    </select>
                                    @if ($errors->has('MR_Approval_Status'))
                                        <div class="text-danger" role="alert">
                                            {{ $errors->first('MR_Approval_Status') }}
                                        </div>
                                    @endif
                                    <label for="MR_Approval_Date">Tarikh Kelulusan</label>
                                    <input required value="{{ old('MR_Approval_Date') }}" name="MR_Approval_Date"
                                        type="date" class="form-control @error('MR_Approval_Date') is-invalid @enderror">
                                    @if ($errors->has('MR_Approval_Date'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first('MR_Approval_Date') }}
                                        </div>
                                    @endif
                                    <div class="d-flex justify-content-center align-items-center">
                                        <button class="btn btn-primary mt-2" type="submit">Update</button>
                                    </div>
                                @else
                                    <label for="MR_Approval_Status">Status</label>
                                    <p>{{$data->MR_Approval_Status}}</p>
                                    <label for="MR_Approval_Date">Tarikh Kelulusan</label>
                                    <p>{{$data->MR_Approval_Date}}</p>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 card p-0 mt-3">
                <div class="card-header" style="background-color: #66bdba">
                    <div class="row py-0">
                        <div class="col-md-11 my-auto ml-5">
                            <h6>E-FORMS >> <b>GROOM & BRIDE</b></h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card-body" style="background-color: #e2fbfb">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>Role</td>
                                    <td>Groom</td>
                                    <td>Bride</td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan</td>
                                    <td>{{ $data->mohon->U_IC_No }}</td>
                                    <td>{{ $data->mohon->Pasangan_IC_No }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>{{ $data->mohon->user->name }}</td>
                                    <td>{{ $data->mohon->P_Name }}</td>
                                </tr>
                                <tr>
                                    <td>Tarikh Lahir</td>
                                    <td>{{ $data->mohon->Birthday }}</td>
                                    <td>{{ $data->mohon->P_Date_of_Birth }}</td>
                                </tr>
                                <tr>
                                    <td>Umur</td>
                                    <td>{{ $data->mohon->Age }}</td>
                                    <td>{{ $data->mohon->P_Age }}</td>
                                </tr>
                                <tr>
                                    <td>Bangsa</td>
                                    <td>{{ $data->mohon->Ethnic }}</td>
                                    <td>{{ $data->mohon->P_Ethnic }}</td>
                                </tr>
                                <tr>
                                    <td>Warganegara</td>
                                    <td>{{ $data->mohon->Nationality }}</td>
                                    <td>{{ $data->mohon->P_Rationality }}</td>
                                </tr>
                                <tr>
                                    <td>Taraf Pendidkan</td>
                                    <td>{{ $data->mohon->Edu_Level }}</td>
                                    <td>{{ $data->mohon->P_Edu_Level }}</td>
                                </tr>
                                <tr>
                                    <td>Sektor Perkerjaan/Jawatan</td>
                                    <td>{{ $data->mohon->Employment_Sector }}</td>
                                    <td>{{ $data->mohon->P_Employment_Sector }}</td>
                                </tr>
                                <tr>
                                    <td>Pendapatan</td>
                                    <td>{{ $data->mohon->Amount_Salary }}</td>
                                    <td>{{ $data->mohon->P_Amount_Salary }}</td>
                                </tr>
                                <tr>
                                    <td>Perkerjaan/Jawatan</td>
                                    <td>{{ $data->mohon->Job }}</td>
                                    <td>{{ $data->mohon->P_Job }}</td>
                                </tr>
                                <tr>
                                    <td>No. Telefon</td>
                                    <td>{{ $data->mohon->user->phone }}</td>
                                    <td>{{ $data->mohon->P_Phone_No }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Dalam K/P</td>
                                    <td>{{ $data->mohon->IC_Address }}</td>
                                    <td>{{ $data->mohon->P_IC_Address }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat Semasa</td>
                                    <td>{{ $data->mohon->Current_Address }}</td>
                                    <td>{{ $data->mohon->P_Current_Address }}</td>
                                </tr>
                                <tr>
                                    <td>Status Sebelum Perkahwinan</td>
                                    <td>{{ $data->mohon->Marriage_Status }}</td>
                                    <td>{{ $data->mohon->P_Marriage_Status }}</td>
                                </tr>
                                <tr>
                                    <td>Status Saudara Baru</td>
                                    <td>{{ $data->mohon->Status_Saudara_Baru }}</td>
                                    <td>{{ $data->mohon->P_Status_Saudara_Baru }}</td>
                                </tr>
                                <tr>
                                    <td>No. Sijil Kursus Pra Perkahwinan</td>
                                    <td>{{ $data->mohon->PrepCourse_ID }}</td>
                                    <td>{{ $data->mohon->P_PrepCourse_ID }}</td>
                                </tr>
                                <tr>
                                    <td>Tarikh Masuk Islam</td>
                                    <td>-</td>
                                    <td>{{ $data->mohon->P_Date_Convert_Islam }}</td>
                                </tr>
                                <tr>
                                    <td>No. Pendaftaran Islam</td>
                                    <td>-</td>
                                    <td>{{ $data->mohon->P_Islam_Register_No }}</td>
                                </tr>
                                <tr>
                                    <td>No. Lesen Kahwin</td>
                                    <td>-</td>
                                    <td>{{ $data->mohon->P_Marriage_Couple_License__No }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center text-center my-3">
                <div class="col-md-4">
                    <a href="{{ route('staff.manageMarriage') }}" class="btn btn-primary btn-block"
                        style="background-color: #65dc97; border:none; color: white;">Back To List</a>
                    <a href="#" class="btn btn-primary btn-block"
                        style="background-color: #519765; border:none; color: white;">Back To Top</a>
                </div>
            </div>

        </div>

    </div>
@endsection
