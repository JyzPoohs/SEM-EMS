@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE;">
                    <h6>MAKLUMAT PEMOHON</h6>
                </div>
                <br>
                <div class="card mb-4">
                    <div class="card-body p-3" style="background-color: #ECF3FF;">
                        <form action="{{ route('groom.save') }}" method="POST">
                            @csrf
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>No. Kad Pengenalan:</td>
                                        <td><input disabled type="text" id="ic" name="U_IC_No" class="form-control" value="{{ auth()->user()->ic }}" autocomplete="off"></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pemohon:</td>
                                        <td><input disabled type="text" id="name" name="name" class="form-control" value="{{ auth()->user()->name }}" autocomplete="name"></td>
                                    </tr>
                                    <tr>
                                        <td>Tarikh Lahir:</td>
                                        <td><input type="date" id="birthday" name="birthday" class="form-control" required autocomplete="bday"></td>
                                    </tr>
                                    <tr>
                                        <td>Umur:</td>
                                        <td><input type="text" id="age" name="age" class="form-control" placeholder="" autocomplete="off"></td>
                                    </tr>
                                    <tr>
                                        <td>Jantina:</td>
                                        <td>
                                            <select id="gender" name="gender" class="form-control" autocomplete="sex">
                                                <option value="LELAKI">LELAKI</option>
                                                <option value="PEREMPUAN">PEREMPUAN</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bangsa:</td>
                                        <td>
                                            <select id="ethnic" name="ethnic" class="form-control" autocomplete="ethnic">
                                                <option value="MELAYU">MELAYU</option>
                                                <option value="CINA">CINA</option>
                                                <option value="INDIA">INDIA</option>
                                                <option value="ORANG ASLI">ORANG ASLI</option>
                                                <option value="LAIN-LAIN">LAIN-LAIN</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Warganegara:</td>
                                        <td><input type="text" id="nationality" name="nationality" class="form-control" placeholder="" autocomplete="country-name"></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat dalam K/P:</td>
                                        <td><input type="text" id="ic_address" name="ic_address" class="form-control" placeholder="" autocomplete="street-address"></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Semasa:</td>
                                        <td><input type="text" id="current_address" name="current_address" class="form-control" placeholder="" autocomplete="street-address"></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telefon Bimbit:</td>
                                        <td><input type="text" id="mobile_phone" name="mobile_phone" class="form-control" placeholder="" autocomplete="tel"></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telefon Rumah:</td>
                                        <td><input type="text" id="home_phone" name="home_phone" class="form-control" placeholder="" autocomplete="tel"></td>
                                    </tr>
                                    <tr>
                                        <td>Taraf Pendidikan:</td>
                                        <td>
                                            <select id="edu_level" name="edu_level" class="form-control" autocomplete="education-level">
                                                <option value="UPSR">UPSR</option>
                                                <option value="PMR/PT3">PMR/PT3</option>
                                                <option value="SPM">SPM</option>
                                                <option value="IJAZAH">IJAZAH</option>
                                                <option value="LAIN-LAIN">LAIN-LAIN</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sektor Pekerjaan:</td>
                                        <td><input type="text" id="employment_sector" name="employment_sector" class="form-control" placeholder="" autocomplete="organization"></td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan/Jawatan:</td>
                                        <td><input type="text" id="job_position" name="job_position" class="form-control" placeholder="" autocomplete="organization-title"></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Tempat Kerja:</td>
                                        <td><input type="text" id="work_address" name="work_address" class="form-control" placeholder="" autocomplete="work-address"></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telefon Pejabat:</td>
                                        <td><input type="text" id="office_phone" name="office_phone" class="form-control" placeholder="" autocomplete="tel"></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><input type="email" id="email" name="email" class="form-control" placeholder="" autocomplete="email"></td>
                                    </tr>
                                    <tr>
                                        <td>Pendapatan:</td>
                                        <td>RM <input type="text" id="income" name="income" class="form-control" placeholder="" autocomplete="off"></td>
                                    </tr>
                                    <tr>
                                        <td>Status Sebelum Perkahwinan:</td>
                                        <td><input type="text" id="marital_status_before" name="marital_status_before" class="form-control" placeholder="" autocomplete="off"></td>
                                    </tr>
                                    <tr>
                                        <td>No. Sijil Kursus Pra Perkahwinan:</td>
                                        <td><input type="text" id="pre_marriage_course_certificate" name="pre_marriage_course_certificate" class="form-control" placeholder="" autocomplete="off"></td>
                                    </tr>
                                    <tr>
                                        <td>Status Saudara Baru (Mualaf):</td>
                                        <td>
                                            <select id="convert_status" name="convert_status" class="form-control" autocomplete="off">
                                                <option value="YA">YA</option>
                                                <option value="TIDAK">TIDAK</option>
                                            </select>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row justify-content-center text-center">
                                <div class="col-md-3">
                                    <a href="{{ route('user.requestMarriageUser') }}" class="btn btn-primary btn-block"
                                       style="background-color: #0050d1; border:none; color: white;">BACK</a>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-block"
                                            style="background-color: #0050d1; border:none; color: white;">SAVE</button>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{ route('user.FormBrides') }}" class="btn btn-primary btn-block"
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
