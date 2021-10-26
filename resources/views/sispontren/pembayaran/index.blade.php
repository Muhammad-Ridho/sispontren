@extends('layouts.appSispontren')

@section('content')

  <div class='content-wrapper'>
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Data Pembayaran Santri</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div> 
      <div class="container"> 
        <div class="card card-primary card-outline">
            <div class="card-header">
              <a href="#" class="btn btn-primary">Tambah Data</a>
              
              <div class="float-right d-none d-sm-block">
                  <!-- SEARCH FORM -->
                <form class="form-inline ml-0 ml-md-3">
                  <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
                  <th scope="col">Tgl Transaksi</th>
                  <th scope="col">No Induk</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Asal</th>
                  <th scope="col">Bukti Upload</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>17/10/2021</td>
                  <td>12412412</td>
                  <td>Muhammad Ridho Ramadhan</td>
                  <td>Banyuwangi</td>
                  <td>buktiUpload.jpg</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                      <button type="button" class="btn btn-warning">Lihat</button>
                      <button type="button" class="btn btn-success">Edit</button>
                      <button type="button" class="btn btn-danger">Delete</button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            </div>
        </div>
      </div><!-- /card content -->
    </div> <!-- /content wrapper -->

  @endsection