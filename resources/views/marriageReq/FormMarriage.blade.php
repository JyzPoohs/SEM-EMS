@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE";>
                    <h6>MAKLUMAT PERKAHWINAN</h6>
                </div>
                <br>
                <div class="card-header pb-0" style="background-color: #D9D9D9";>
                    <h6>MAKLUMAT PERKAHWINAN</h6>
                </div>
                <div class="card mb-4">
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <form action="{{ route('marriage.save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Nama Pemohon</td>
                                        <td>: ALI BIN IDRIS</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pasangan</td>
                                        <td>: SITI BIN ABU</td>
                                    </tr>
                                    <tr>
                                        <td>Tarikh Mohon</td>
                                        <td>: <input type="text" id="tarikh_mohon" name="tarikh_mohon" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Kahwin</td>
                                        <td>: <input type="text" id="tempat_kahwin" name="tempat_kahwin" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Negara</td>
                                        <td>:
                                            <select name="negara">
                                                <option value="MALAYSIA">MALAYSIA</option>
                                                <option value="SINGAPURA">SINGAPURA</option>
                                                <option value="INDONESIA">INDONESIA</option>
                                                <option value="THAILAND">THAILAND</option>
                                                <option value="BRUNEI">BRUNEI</option>
                                            </select>
                                        </td>
                                   </tr>
                                   <tr>
                                    <td>Negeri</td>
                                    <td>:
                                        <select name="negeri">
                                            <option value="PAHANG">PAHANG</option>
                                            <option value="KELANTAN">KELANTAN</option>
                                            <option value="TERENGGANU">TERENGGANU</option>
                                            <option value="PERLIS">PERLIS</option>
                                            <option value="KEDAH">KEDAH</option>
                                            <option value="PENANG">PENANG</option>
                                            <option value="PERAK">PERAK</option>
                                            <option value="SELANGOR">SELANGOR</option>
                                            <option value="KUALA LUMPUR">KUALA LUMPUR</option>
                                            <option value="MELAKA">MELAKA</option>
                                            <option value="JOHOR">JOHOR</option>
                                            <option value="SABAH">SABAH</option>
                                            <option value="SARAWAK">SARAWAK</option>
                                        </select>
                                    </td>
                               </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <form action="{{ route('marriage.save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Tarikh Akad Nikah</td>
                                        <td>: <input type="text" id="tarikh_akad_nikah" name="tarikh_akad_nikah" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Tempat Kahwin</td>
                                        <td>: <input type="text" id="alamat_tempat_kahwin" name="alamat_tempat_kahwin" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Mas Kahwin</td>
                                        <td>:
                                            <select name="jenis_mas_kahwin">
                                                <option value="TUNAI">TUNAI</option>
                                                <option value="ATAS TALIAN">ATAS TALIAN</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mas Kahwin</td>
                                        <td>: RM <input type="text" id="mas_kahwin" name="mas_kahwin" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Hantaran</td>
                                        <td>: RM <input type="text" id="hantaran" name="hantaran" placeholder=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT WALI</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <form action="{{ route('marriage.save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Nama Wali</td>
                                        <td>: <input type="text" id="nama_wali" name="nama_wali" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>No. Kad Pengenalan Wali</td>
                                        <td>: <input type="text" id="no_kad_pengenalan_wali" name="no_kad_pengenalan_wali" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Wali</td>
                                        <td>: <input type="text" id="alamat_wali" name="alamat_wali" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Tarikh Lahir</td>
                                        <td>: <input type="date" id="tarikh_lahir" name="tarikh_lahir" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Umur Wali</td>
                                        <td>: <input type="number" id="umur_wali" name="umur_wali" placeholder=""> TAHUN</td>
                                    </tr>
                                    <tr>
                                        <td>No. Telefon Wali</td>
                                        <td>: <input type="text" id="no_telefon_wali" name="no_telefon_wali" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Hubungan</td>
                                        <td>: <input type="text" id="hubungan" name="hubungan" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Tarikh Nikah Ibu Bapa</td>
                                        <td>: <input type="date" id="tarikh_nikah_ibu_bapa" name="tarikh_nikah_ibu_bapa" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>No. Sijil Nikah Ibu Bapa</td>
                                        <td>: <input type="text" id="no_sijil_nikah_ibu_bapa" name="no_sijil_nikah_ibu_bapa" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pelulus (Surat Sumpah)</td>
                                        <td>: <input type="text" id="nama_pelulus" name="nama_pelulus" placeholder=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT SAKSI</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <form action="{{ route('marriage.save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Nama Saksi (1)</td>
                                        <td>: <input type="text" id="nama_saksi_1" name="nama_saksi_1" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>No. Kad Pengenalan Saksi (1)</td>
                                        <td>: <input type="text" id="no_kad_pengenalan_saksi_1" name="no_kad_pengenalan_saksi_1" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Umur Saksi (1)</td>
                                        <td>: <input type="number" id="umur_saksi_1" name="umur_saksi_1" placeholder=""> TAHUN</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Saksi (1)</td>
                                        <td>: <input type="text" id="alamat_saksi_1" name="alamat_saksi_1" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telefon Saksi (1)</td>
                                        <td>: <input type="text" id="no_telefon_saksi_1" name="no_telefon_saksi_1" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Saksi (2)</td>
                                        <td>: <input type="text" id="nama_saksi_2" name="nama_saksi_2" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>No. Kad Pengenalan Saksi (2)</td>
                                        <td>: <input type="text" id="no_kad_pengenalan_saksi_2" name="no_kad_pengenalan_saksi_2" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Umur Saksi (2)</td>
                                        <td>: <input type="number" id="umur_saksi_2" name="umur_saksi_2" placeholder=""> TAHUN</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Saksi (2)</td>
                                        <td>: <input type="text" id="alamat_saksi_2" name="alamat_saksi_2" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telefon Saksi (2)</td>
                                        <td>: <input type="text" id="no_telefon_saksi_2" name="no_telefon_saksi_2" placeholder=""></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>PEMBAYARAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <form action="{{ route('marriage.save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Bukti Pembayaran:</td>
                                        <td><input type="file" id="document" name="document"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div class="row justify-content-center text-center">
                                <div class="col-md-3">
                                    <a href="{{ route('user.FormBrides') }}" class="btn btn-primary btn-block"
                                        style="background-color: #0050d1; border:none; color: white;">BACK</a>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-block"
                                        style="background-color: #0050d1; border:none; color: white;">SAVE</button>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{ route('user.Document') }}" class="btn btn-primary btn-block"
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
