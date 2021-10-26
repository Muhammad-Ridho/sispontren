@extends('layouts.appSispontren')

@section('content')
<div class="content">
    <div class="row justify-content-center">
        <section class="content">
            <div class="container-fluid">
                    <h2>Detail Data Santri</h2>
            </div>
        </section>
    </div>
</div>

<div class="content">
    <div class="row justify-content-center">
        <div class="col-5">
            <section class="content">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <!-- <div class="text-center">
                            @if($data->cover)
                              <img src="{{url('images/buku/'. $data->cover)}}" alt="buku cover" class="img-thumbnail" width="300px" />
                            @else
                              <img src="{{url('images/buku/default.png')}}" alt="buku cover" class="img-thumbnail" width="300px" />
                            @endif
                        </div> -->
                        
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>NO INDUK</b> <a class="float-right">{{$data->noInduk}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>TANGGA MASUK</b> <a class="float-right">{{$data->tglMasuk}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>NISN</b> <a class="float-right">{{$data->nisn}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>NAMA LENGKAP</b> <a class="float-right">{{$data->namaSantri}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>TEMPAT, TANGGAL LAHIR</b> <a class="float-right">{{$data->tmpLahir}}, {{$data->tglLahir}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>JENIS KELAMIN</b> <a class="float-right">{{$data->jnsKelamin}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>ALAMAT</b> <a class="float-right">{{$data->alamat}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>STATUS SOSIAL</b> <a class="float-right">{{$data->statusSosial}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="{{ URL::previous() }}">
                            <button type="submit" class="btn btn-danger btn-block">Kembali</button>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection