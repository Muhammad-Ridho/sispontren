@section('js')

    <script type="text/javascript">

        $(document).ready(function() {
            $(".users").select2();
        });

    </script>

<script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                return false
            })
        })
        </script>
@stop

@extends('layouts.appSispontren')

@section('content')

<form method="POST" action="{{ route('santri.store') }}" enctype="multipart/form-data">
{{ csrf_field() }}

    <div class="content">
        <div class="row justify-content-center">
            <section class="content">
                <div class="container-fluid">
                        <h2>Tambah Data Santri</h2>
                </div>
            </section>
        </div>
    </div>

    <div class="content">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-7">
                    <section class="content">
                        <div class="card card-primary card-outline">
                            <div class="card-body">
                            <center><label>Data Pribadi</label></center>

                                <div class="form-group{{ $errors->has('noInduk') ? ' has-error' : '' }}">
                                    <label>No Induk :</label>
                
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input id="noInduk" name="noInduk" value="{{ old('noInduk') }}" type="text" class="form-control" data-mask placeholder="Masukkan Nomer Induk Santri">
                                    @if ($errors->has('noInduk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('noInduk') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('tglMasuk') ? ' has-error' : '' }}">
                                    <label>Tanggal Masuk :</label>
                
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
                                    <!-- <input id="noInduk" name="noInduk" value="{{ old('noInduk') }}" type="text" class="form-control" data-mask placeholder="Masukkan Nomer Induk Santri"> -->
                                    <input id="tglMasuk" name="tglMasuk" type="date"  value="{{ old('tglMasuk')}}" class="form-control" data-mask placeholder="Masukkan tanggal">
                                    @if ($errors->has('tglMasuk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tglMasuk') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('nisn') ? ' has-error' : '' }}">
                                    <label>NISN :</label>
                
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input id="nisn" name="nisn" type="text"  value="{{ old('nisn')}}" class="form-control" data-mask placeholder="Masukkan NISN">
                                    @if ($errors->has('nisn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nisn') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>

                                <!-- <div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
                                    <label>Tingkat Pendidikan :</label>
                
                                    <div class="input-group">
                                        <div class="row">
                                            <div class="col">
                                                <select class="form-control select2" name="lokasi" required="">
                                                    <option value="">Pilih Tingkat</option>
                                                    <option value="SD">SD/Sederajat</option>
                                                    <option value="SMP">SMP/Sederajat</option>
                                                    <option value="SMA">SMA/Sederajat</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input id="kelas" name="kelas" type="text"  value="{{ old('kelas')}}" class="form-control" data-mask placeholder="Masukkan angka">
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="form-group{{ $errors->has('namaSantri') ? ' has-error' : '' }}">
                                    <label>Nama Lengkap :</label>
                
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input id="namaSantri" name="namaSantri" type="text"  value="{{ old('namaSantri')}}" class="form-control" data-mask placeholder="Masukkan Nama Lengkap">
                                    @if ($errors->has('namaSantri'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('namaSantri') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('tmpLahir') ? ' has-error' : '' }}">
                                    <label>Tempat Lahir :</label>
                
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input id="tmpLahir" name="tmpLahir" type="text"  value="{{ old('tmpLahir')}}" class="form-control" data-mask placeholder="Masukkan Tempat Lahir">
                                    @if ($errors->has('tmpLahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tmpLahir') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('tglLahir') ? ' has-error' : '' }}">
                                    <label>Tanggal Lahir :</label>
                
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input id="tglLahir" name="tglLahir" type="date"  value="{{ old('tmpLahir')}}" class="form-control" data-mask placeholder="Masukkan Tanggal Lahir">
                                    @if ($errors->has('tglLahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tglLahir') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('jnsKelamin') ? ' has-error' : '' }}">
                                    <label>Jenis Kelamin :</label>
                
                                    <div class="input-group">
                                        <select class="form-control select2" name="lokasi" required="">
                                            <option value=""></option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                                    <label>Alamat :</label>
                
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                                    </div>
                                    <input id="alamat" name="alamat" type="text"  value="{{ old('alamat')}}" class="form-control" data-mask placeholder="Masukkan alamat">
                                    @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('statusSosial') ? ' has-error' : '' }}">
                                    <label>Status Sosial :</label>
                
                                    <div class="input-group">
                                        <select class="form-control select2" name="lokasi" required="">
                                            <option value=""></option>
                                            <option value="Yatim">Yatim</option>
                                            <option value="Dhuafa Fakir">Dhuafa Fakir</option>
                                            <option value="Dhuafa Miskin">Dhuafa Miskin</option>
                                            <option value="Mampu">Mampu</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('statusStudi') ? ' has-error' : '' }}">
                                    <label>Status Studi :</label>
                
                                    <div class="input-group">
                                        <select class="form-control select2" name="lokasi" required="">
                                            <option value=""></option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Non-Aktif">Non-Aktif</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>

                                <center><label>Data Orang Tua</label></center>

                            <div class="card-footer">
                                <a href="{{route('santri.index')}}">
                                <button type="submit" class="btn btn-success btn-block" id="submit">Tambah</button>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection