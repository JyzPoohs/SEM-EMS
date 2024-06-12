<link rel="stylesheet" href="{{ asset('css/staff-marriageRegistration.css') }}">
@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p class="mb-0 text-dark">{{ session()->get('success') }}</p>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p class="mb-0 text-dark">{{ session()->get('error') }}</p>
            </div>
        @endif
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <h5>PERMOHONAN PENDAFTARAN NIKAH</h5>
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba">
                        <h6>Marriage Registration List / Senari Permohonan</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <div class="mt-2">
                            <table class="table w-100" id="list">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No. Daftar</th>
                                        <th>No. KP/<br>Nama Suami</th>
                                        <th>No. KP/<br>Nama Isteri</th>
                                        <th>Tarikh Terima</th>
                                        <th class="text-center">Status Kelulusan</th>
                                        <th class="col-md-2 text-center">Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 0; @endphp
                                    @foreach ($datas as $data)
                                        @php $counter++; @endphp
                                        <tr>
                                            <td>{{ $counter }}</td>
                                            <td>
                                                MR00{{ $data->MR_ID }}
                                            </td>
                                            <td>
                                                {{ $data->mohon->U_IC_No }} <br> {{ strtoupper($data->mohon->user->name) }}
                                            </td>
                                            <td>
                                                {{ $data->mohon->Pasangan_IC_No }} <br>
                                                {{ strtoupper($data->mohon->P_Name) }}
                                            </td>
                                            <td>
                                                {{ $data['created_at']->format('Y/m/d') }}
                                            </td>
                                            <td class="text-center">
                                                {{ $data->MR_Approval_Status }}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('staff.couple', ['id' => $data->MR_ID]) }}"
                                                    class="btn {{$data->MR_Approval_Status == 'LULUS' ? 'btn-primary' : 'btn-warning'}}"><i class="fas {{$data->MR_Approval_Status == 'LULUS' ? 'fa-eye' : 'fa-pencil-alt'}}"></i>
                                                </a>
                                                <form id="delete-form-{{ $data->MR_ID }}"
                                                    action="{{ route('staff.destroy', ['id' => $data->MR_ID]) }}"
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

            </div>

        </div>

    </div>
@endsection
