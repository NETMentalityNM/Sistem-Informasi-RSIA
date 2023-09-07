@extends('layouts.master')
@section('isi')
@section('judul', 'Dashboard')
<main role="main" class="main-content">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="h3 mb-4 page-title">Profile</h2>
        <div class="row mt-5 align-items-center">
          <div class="col-md-3 text-center mb-5">
            <div class="avatar avatar-xl">
              <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
            </div>
          </div>
          <div class="col">
            <div class="row align-items-center">
              <div class="col-md-7">
                <h4 class="mb-1">{{ Auth::user()->name }}</h4>
                <p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="row my-4">
          <div class="col-md-4">
            <div class="card mb-4 shadow">
              <div class="card-body my-n3">
                <div class="row align-items-center">
                  <div class="col-3 text-center">
                    <span class="circle circle-lg bg-light">
                      <i class="fe fe-user fe-24 text-primary"></i>
                    </span>
                  </div> <!-- .col -->
                  <div class="col">
                    <h3 class="h5 mt-4 mb-1">Pegawai</h3>
                    
                    <h5 class="text-muted">{{$pegawai}} <i>Orang</i></h5> 
                  </div> <!-- .col -->
                </div> <!-- .row -->
              </div> <!-- .card-body -->
              <div class="card-footer">
                <a href="/pegawai" class="d-flex justify-content-between text-muted"><span>Detai Pegawai</span><i class="fe fe-chevron-right"></i></a>
              </div> <!-- .card-footer -->
            </div> <!-- .card -->
          </div> <!-- .col-md-->
          <div class="col-md-4">
            <div class="card mb-4 shadow">
              <div class="card-body my-n3">
                <div class="row align-items-center">
                  <div class="col-3 text-center">
                    <span class="circle circle-lg bg-light">
                      <i class="fe fe-shield fe-24 text-primary"></i>
                    </span>
                  </div> <!-- .col -->
                  <div class="col">
                    <h3 class="h5 mt-4 mb-1">Obat</h3>
                    
                    <h5 class="text-muted">{{$obat}} <i>Macam</i></h5>
                  </div> <!-- .col -->
                </div> <!-- .row -->
              </div> <!-- .card-body -->
              <div class="card-footer">
                <a href="/obat" class="d-flex justify-content-between text-muted"><span>Detai Data Obat</span><i class="fe fe-chevron-right"></i></a>
              </div> <!-- .card-footer -->
            </div> <!-- .card -->
          </div> <!-- .col-md-->
          <div class="col-md-4">
            <div class="card mb-4 shadow">
              <div class="card-body my-n3">
                <div class="row align-items-center">
                  <div class="col-3 text-center">
                    <span class="circle circle-lg bg-light">
                      <i class="fe fe-bell fe-24 text-primary"></i>
                    </span>
                  </div> <!-- .col -->
                  <div class="col">
                    <a href="#">
                      <h3 class="h5 mt-4 mb-1">Poli</h3>
                    </a>
                    <h5 class="text-muted"> {{$poli}} <i>Jenis</i></h5>
                  </div> <!-- .col -->
                </div> <!-- .row -->
              </div> <!-- .card-body -->
              <div class="card-footer">
                <a href="/poli" class="d-flex justify-content-between text-muted"><span>Detail Data Poli</span><i class="fe fe-chevron-right"></i></a>
              </div> <!-- .card-footer -->
            </div> <!-- .card -->
          </div> <!-- .col-md-->
        </div> <!-- .row-->
            </div> <!-- .card-body -->
          </div> <!-- .card -->
        </div> <!-- .card-group -->
        </
      </div> <!-- /.col-12 -->
    </div> <!-- .row -->
  </div>

</main>
  @endsection