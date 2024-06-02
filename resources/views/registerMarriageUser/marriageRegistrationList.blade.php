<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p class="mb-0 text-dark">{{ session()->get('success') }}</p>
            </div>
        @endif
        <div class="row mt-4">
            <h5>PERMOHONAN PENDAFTARAN NIKAH</h5>
            <div class="card mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE";>
                    <h6>Marriage Registration List / Senarai Permohonan</h6>
                </div>
                <div class="card-body p-3" style="background-color: #ECF3FF";>
                    <div class="row justify-content-center text-center">
                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <a href="{{ route('user.addGroomBride') }}" class="btn btn-primary text-light"
                                style="background-color: #0050d1; border:none; width: 100%">Daftar Baru</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <table class="table w-100" id="list">
                            <thead>
                                <tr>
                                    <th>No. AKaun Terima</th>
                                    <th>No. KP/Nama Isteri</th>
                                    <th>Tarikh Mohon</th>
                                    <th class="text-center">Status Permohonan</th>
                                    <th class="text-center">Status Kelulusan</th>
                                    <th class="col-md-3 text-center">Operasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <td>MR00{{ $data->MR_ID }}</td>
                                        <td>{{ $data->mohon->Pasangan_IC_No }} <br>
                                            {{ $data->mohon->P_Name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->created_at)->format('Y/m/d') }}</td>
                                        <td class="text-center">
                                            {{ $data->MR_Submit_Status ? strtoupper($data->MR_Submit_Status) : '' }}</td>
                                        <td class="text-center">
                                            <span
                                                class="badge {{ $data->MR_Approval_Status == 'LULUS' ? 'badge-success' : 'badge-warning' }}">
                                                {{ $data->MR_Approval_Status }}</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('user.couple', $data->MR_ID) }}" class="btn btn-primary">
                                                <i class="fas fa-eye"></i></a>
                                            @if ($data->MR_Submit_Status == 'SAVED')
                                                <form id="submit-form-{{ $data->MR_ID }}" 
                                                    action="{{ route('user.submit', $data->MR_ID) }}" method="post" style="display: none;">
                                                    @csrf
                                                    @method('PUT')
                                                </form>
                                                <a href="#" class="btn btn-success mr-1"
                                                    onclick="event.preventDefault(); if (confirm('Confirm to submit this application?')) { document.getElementById('submit-form-{{ $data->MR_ID }}').submit(); }">
                                                    <i class="fas fa-paper-plane"></i>
                                                <a href="{{ route('user.couple', $data->MR_ID) }}"
                                                    class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            @endif
                                            <form id="delete-form-{{ $data->MR_ID }}"
                                                action="{{ route('user.deleteMarriageRegistration', ['id' => $data->MR_ID]) }}"
                                                method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" class="btn btn-danger"
                                                onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this application?')) { document.getElementById('delete-form-{{ $data->MR_ID }}').submit(); }">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row w-100" style="font-size: 12px">
                <div class="col-md-7">
                    <p>
                        Status Permohonan:<br>
                        *SAVED: Application saved, viewable by applicant only. <br>
                        *SUBMITTED: Application submitted, viewable by EMS Staff. <br>
                    </p>
                </div>
                <div class="col-md-5">
                    <p>
                        Status Kelulusan:<br>
                        *PENDING: Application review in progress/Not submitted. <br>
                        *GAGAL: Application rejected. <br>
                        *LULUS: Application approved. <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
