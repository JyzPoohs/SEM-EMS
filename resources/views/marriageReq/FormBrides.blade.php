@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE";>
                    <h6>MAKLUMAT PASANGAN</h6>
                </div>
                <br>
                <div class="card mb-4">
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <form action="{{ route('bride.save') }}" method="POST">
                            @csrf
                            <table>
                                <tbody>
                                    <tr>
                                        <td>No. Kad Pengenalan</td>
                                        <td>: <input type="text" id="P_IC_No" name="P_IC_No" placeholder="" ></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pasangan </td>
                                        <td>: <input type="text" id="P_Name" name="P_Name" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Tarikh Lahir</td>
                                        <td>: <input type="date" id="birthday" name="birthday" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Umur</td>
                                        <td>: <input type="text" id="age" name="age" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Jantina</td>
                                        <td>:
                                            <input disabled type="text" name="gender" value="{{ (auth()->user()->gender === 'FEMALE') ? 'FEMALE' : 'MALE' }}" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bangsa</td>
                                        <td>:
                                            <select name="ethnic">
                                                <option value="MELAYU">MELAYU</option>
                                                <option value="CINA">CINA</option>
                                                <option value="INDIA">INDIA</option>
                                                <option value="ORANG ASLI">ORANG ASLI</option>
                                                <option value="LAIN-LAIN">LAIN-LAIN</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Warganegara</td>
                                        <td>: <input type="text" id="nationality" name="nationality" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat dalam K/P</td>
                                        <td>: <input type="text" id="ic_address" name="ic_address" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Semasa</td>
                                        <td>: <input type="text" id="current_address" name="current_address" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telefon Bimbit</td>
                                        <td>: <input type="text" id="mobile_phone" name="mobile_phone" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telefon Rumah</td>
                                        <td>: <input type="text" id="home_phone" name="home_phone" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Taraf Pendidikan</td>
                                        <td>:
                                            <select name="edu_level">
                                                <option value="UPSR">UPSR</option>
                                                <option value="PMR/PT3">PMR/PT3</option>
                                                <option value="SPM">SPM</option>
                                                <option value="IJAZAH">IJAZAH</option>
                                                <option value="LAIN-LAIN">LAIN-LAIN</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sektor Pekerjaan</td>
                                        <td>: <input type="text" id="employment_sector" name="employment_sector" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan/Jawatan</td>
                                        <td>: <input type="text" id="job_position" name="job_position" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Tempat Kerja</td>
                                        <td>: <input type="text" id="work_address" name="work_address" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telefon Pejabat</td>
                                        <td>: <input type="text" id="office_phone" name="office_phone" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>: <input type="email" id="email" name="email" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Pendapatan</td>
                                        <td>: RM <input type="text" id="income" name="income" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Status Sebelum Perkahwinan</td>
                                        <td>: <input type="text" id="marital_status_before" name="marital_status_before" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>No. Sijil Kursus Pra Perkahwinan</td>
                                        <td>: <input type="text" id="pre_marriage_course_certificate" name="pre_marriage_course_certificate" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Status Saudara Baru (Mualaf)</td>
                                        <td>:
                                            <select name="convert_status">
                                                <option value="YA">YA</option>
                                                <option value="TIDAK">TIDAK</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div class="row justify-content-center text-center">
                                <div class="col-md-3">
                                    <a href="{{ route('user.FormGrooms') }}" class="btn btn-primary btn-block"
                                        style="background-color: #0050d1; border:none; color: white;">BACK</a>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-block"
                                        style="background-color: #0050d1; border:none; color: white;">SAVE</button>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{ route('user.FormMarriage') }}" class="btn btn-primary btn-block"
                                        style="background-color: #0050d1; border:none; color: white;">NEXT</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
