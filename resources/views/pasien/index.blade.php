@extends('layouts.master')
@section('judul', 'Data Pasien')
@section('isi')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-12">
            <div class="row align-items-center mb-2">
            <div class="col">
                <h2 class="h5 page-title">Data Pasien</h2>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <div class="col-auto">
      <form class="form-inline">
      <div class="form-group d-none d-lg-inline">
          <label for="reportrange" class="sr-only">Date Ranges</label>
          <div id="reportrange" class="px-2 py-2 text-muted">
          <span class="small"></span>
        </div>
      </div>  
      <div class="card shadow">
        <div class="card-body">
          <div class="toolbar">
            <form class="form">
              <div class="form-row">
                <div class="form-group col-auto mr-auto">
                  <a href="/pasien/form" class="btn mb-2 btn-info">Tambah Data</a>
                </div>
                <div class="form-group col-auto">
                  <label for="search" class="sr-only">Search</label>
                  <input type="text" class="form-control" id="search1" value="" placeholder="Search">
                </div>
              </div>
            </form>
          </div>
          <!-- table -->
          <table class="table table-borderless table-hover">
            <thead>
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                  </div>
                </td>
                <th>No. Kartu</th>
                <th>Nama Pasien <br> NIK Pasien</th>
                <th>Alamat</th>
                <th>No. Hp</th>
                <th class="w-25">Umur</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pasien as $pasn)
                  
              <tr>
                <td>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="2474">
                    <label class="" for="2474"></label>
                  </div>
                </td>
                <td>
                  <div class="avatar avatar-md">
                    <img src="" alt="..." class="avatar-img rounded-circle">
                  </div>
                </td>
                <td>
                  <p class="mb-0 text-muted"><strong>{{$pasn->nm_pas}}</strong></p>
                  <small class="mb-0 text-muted">{{$pasn->nik_pas}}</small>
                </td>
                <td>
                  <p class="mb-0 text-muted">{{$pasn->alamat_pas}}</p>
                </td>
                <td>
                  <p class="mb-0 text-muted"><a href="#" class="text-muted">{{$pasn->hp_pas}}</a></p>
                </td>
                <td class="w-25"><small class="text-muted">{{$pasn->umur_pas}}</small></td>
                <td class="text-muted">{{$pasn->status_pasien}}</td>
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Remove</a>
                    <a class="dropdown-item" href="#">Assign</a>
                  </div>
                </td>
              </tr>
              
              
              
              @endforeach
            </tbody>
          </table>
          <nav aria-label="Table Paging" class="mb-0 text-muted">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
      
    </form>
  </div>
@endsection