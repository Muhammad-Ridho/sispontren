@extends('layouts.appSispontren')

@section('content')

    <div class='content-wrapper'>
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Data Santri</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div> 
      <div class="container"> 
        <div class="card card-primary card-outline">
            <div class="card-header">
              <a href="{{ route('santri.create') }}" class="btn btn-primary">Tambah Data</a>
              
              <div class="float-right d-none d-sm-block">
                  <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3">
                  <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" name="keyword" id="keyword" placeholder="Search" aria-describedby="keyword" value="{{request()->query('keyword')}}">
                    <div class="input-group-append">
                      <button class="btn btn-outline-primary" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="card-body">
            <table class="table table-striped table-hover">
              <thead class="table-dark">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">No Induk</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tempat, Tanggal Lahir</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @php $no = 1; @endphp
                @foreach($dtsantri as $data)
                <tr>
                  <td>
                    {{ $no++ }}
                  </td>
                  <td>
                    {{$data->noInduk}}
                  </td>
                  <td>
                    {{$data->namaSantri}}
                  </td>
                  <td>
                    {{$data->tmpLahir}}, {{$data->tglLahir}}
                  </td>
                  <td>
                    {{$data->jnsKelamin}}
                  </td>
                  <td>
                  <form action="{{ route('santri.destroy', $data->noInduk) }}" class="pull-left"  method="post">
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                      <a class="dropdown-item"  href="{{route('santri.show', $data->noInduk)}}">
                        <button type="button" class="btn btn-warning">Details</button>
                      </a>
                      <a class="dropdown-item"  href="#">
                      <button type="button" class="btn btn-success">Edit</button>
                      </a>
                      <a class="dropdown-item"  href="#">
                      <button type="button" class="btn btn-danger">Delete</button>
                      </a>
                    </div>
                  </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            </div>
        </div>
      </div><!-- /card content -->
    </div> <!-- /content wrapper -->




  @endsection