<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
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
                            <a href="{{ route('user.editEFormsGrooms') }}" class="btn btn-primary text-light"
                                style="background-color: #0050d1; border:none; width: 100%">Daftar Baru</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <table class="table w-100" id="list">
                            <thead>
                                <tr>
                                    <th>Bil</th>
                                    <th>No. KP/Nama Isteri</th>
                                    <th>No. AKaun Terima</th>
                                    <th>Tarikh Mohon</th>
                                    <th>Status Permohonan</th>
                                    <th>Status Kelulusan</th>
                                    <th class="col-md-3 text-center">Operasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $counter = 0; @endphp
                                @foreach ($datas as $data)
                                    @php $counter++; @endphp
                                    <tr>
                                        <td>{{ $counter }}</td>
                                        <td>{{ $data->mohon->Pasangan_IC_No }} <br>
                                            {{ $data->mohon->P_Name }}</td>
                                        <td>MR00{{ $data->MR_ID }}</td>
                                        <td>{{ \Carbon\Carbon::parse($data->created_at)->format('Y/m/d') }}</td>
                                        <td>{{ $data->MR_Submit_Status ? strtoupper($data->MR_Submit_Status) : '' }}</td>
                                        <td><mark class="{{$data->MR_Approval_Status != 'LULUS' ? 'bg-danger' : ''}}">{{ $data->MR_Approval_Status == 'LULUS' ? 'LULUS' : 'UNTUK DILULUSKAN' }}</mark></td>
                                        <td class="text-center">
                                            <a href="{{ route('user.couple', $data->MR_ID) }}"
                                                class="btn btn-primary">
                                                <i class="fas fa-eye"></i></a>
                                            @if ($data->MR_Approval_Status != 'LULUS')
                                                <a href="{{ route('user.editEFormsGrooms') }}" class="btn btn-warning"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                            @endif
                                            <form id="delete-form-{{ $data->MR_ID }}"
                                                action="{{ route('user.deleteMarriageRegistration', ['id' => $data->MR_ID]) }}"
                                                method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" class="btn btn-danger"
                                                onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this record?')) { document.getElementById('delete-form-{{ $data->MR_ID }}').submit(); }">
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
@endsection
