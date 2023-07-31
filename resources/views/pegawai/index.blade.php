@extends('layouts.master')
@section('judul', 'Data Pegawai')
@section('isi')
<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
        <div class="col-12">
            <div class="row align-items-center mb-2">
            <div class="col">
                <h2 class="h5 page-title">Data Rekam Medik</h2>
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
      
      <div class="col-md-12">
        <div class="card shadow">
          <div class="card-body">
            <a href="/pegawai/form" class="btn mb-3 btn-outline-info">Tambah Data</a>
            <!-- table -->
            <table class="table datatables" id="dataTable-1">
              <thead>
                <tr>
                    <th>Entry</th>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Umur Pegawai</th>
                    <th>Alamat Pegawai</th>
                    <th>Hp Pegawai</th>
                    <th>ID Jabatan</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach ($pegawai as $pgw)

                  <td align="">{{$nomor++}}</td>
                  <td>{{$pgw->nip}}</td>
                  <td>{{$pgw->nm_pegawai}}</td>
                  <td>{{$pgw->umur_pegawai}}</td>
                  <td>{{$pgw->alamat_pegawai}}</td>
                  <td>{{$pgw->hp_pegawai}}</td>
                  <td>{{$pgw->jabatan->id_jabatan}}</td>
                  
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="/pegawai/edit/{{$pgw->id}}">Edit</a>
                      <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-full{{$pgw->id}}" href="">Remove</button>
                      <a class="dropdown-item" href="#">Assign</a>
                    </div>
                  </td>
                </tr>

                <div class="modal fade modal-full" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-full{{$pgw->id}}">
                  {{-- <button aria-label="" type="button" class="close px-lg" data-dismiss="modal" aria-hidden="true"> --}}
                    <span aria-hidden="true">×</span>
                  </button>
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-body text-center justify-content-between">
                        <h3 class="modal-title"><i> Peringatan! </i></h3>
                        <p> Anda Yakin menghapus Data Pasien atas nama </p>
                        <p>{{$pgw->nm_pas}}</p>
                        <form action="/pegawai/{{$pgw->id}}" method="POST" class="form-inline justify-content-center">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-outline-secondary btn-lg mb-2 my-2 my-sm-0" type="button" data-dismiss="modal">Batal</button>
                          <button class="btn btn-outline-danger btn-lg mb-2 my-2 my-sm-0" type="submit">Yakin</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </tbody>
                
            </table>
          </div>
        </div>
      
    </form>
  </div>

@endsection