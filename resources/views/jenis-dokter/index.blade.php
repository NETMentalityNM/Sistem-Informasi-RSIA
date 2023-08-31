@extends('layouts.master')
@section('judul', 'Data Jenis Dokter')
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
            <a href="/jenis-dokter/form" class="btn mb-3 btn-outline-info">Tambah Data</a>
            <!-- table -->
            <table class="table datatables" id="dataTable-1">
              <thead>
                <tr>
                  <th>Data Entry</th>
                  <th>No Jenis Dokter</th>
                  <th>NIP</th>
                  <th>ID Poli</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach ($jenis_dokter as $jDokter)

                  <td align="center">{{$nomor++}}</td>
                  <td>{{$jDokter->kd_obat}}</td>
                  <td>{{$jDokter->nm_obat}}</td>
                  <td>{{$jDokter->tgl_kadarluasa}}</td>
                  <td>{{$jDokter->satuan}}</td>
                
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="/jenis-dokter/edit/{{$jDokter->id}}">Edit</a>
                      <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-full{{$jDokter->id}}" href="">Remove</button>
                    </div>
                  </td>
                </tr>

                <div class="modal fade modal-full" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-full{{$jDokter->id}}">
                  {{-- <button aria-label="" type="button" class="close px-lg" data-dismiss="modal" aria-hidden="true"> --}}
                    <span aria-hidden="true">×</span>
                  </button>
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-body text-center justify-content-between">
                        <h3 class="modal-title"><i> Peringatan! </i></h3>
                        <p> Anda Yakin menghapus Data Jenis Dokter </p>
                        <p>{{$jDokter->kd_obat}} ~~ {{$jDokter->nm_obat}}</p>
                        <form action="/jenis-dokter/{{$jDokter->id}}" method="POST" class="form-inline justify-content-center">
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

    <script src="{{asset('tinydash-master/js/jquery.min.js')}}"></script>
    <script src="{{asset('tinydash-master/js/popper.min.js')}}"></script>
    <script src="{{asset('tinydash-master/js/moment.min.js')}}"></script>
    <script src="{{asset('tinydash-master/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('tinydash-master/js/simplebar.min.js')}}"></script>
    <script src="{{asset('tinydash-master/js/daterangepicker.js')}}"></script>
    <script src='{{asset('tinydash-master/js/jquery.stickOnScroll.js')}}'></script>
    <script src="{{asset('tinydash-master/js/tinycolor-min.js')}}"></script>
    <script src="{{asset('tinydash-master/js/config.js')}}"></script>
    <script src='{{asset('tinydash-master/js/jquery.dataTables.min.js')}}'></script>
    <script src='{{asset('tinydash-master/js/dataTables.bootstrap4.min.js')}}'></script>

  <script>
    $('#dataTable-1').DataTable(
    {
      autoWidth: true,
      "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
      ]
    });
  </script>

  <script src="{{asset('tinydash-master/js/apps.js')}}"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>

  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag()
    {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
  </script>
@endsection