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
      
      <div class="col-md-12">
        <div class="card shadow">
          <div class="card-body">
            <a href="/pasien/form"  class="btn mb-4 btn-outline-info">Tambah Data</a>
            <form action="/pasien" class="form-inline" method="GET">
              <div class="float-right">
              <input class="form-control mr-sm-1 border-1 pl-2 " type="search" name="search" placeholder="Type something..." aria-label="Search">
              <button type="button" class="btn btn-info ">
                <i class='bx bx-search-alt-2'></i>
              </button>
              </div>

            </form>
            <!-- table -->
            <table class="table datatables" id="dataTable-1">
              <thead>
                <tr>
                  <th>Data Entry</th>
                  <th width="10%">Foto Pasien</th>
                  <th>No Kartu</th>
                  <th>Nama</th>                                  
                  <th>Status Pasien</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  @foreach ($pasien as $pasn)

                  <td align="center">{{$nomor++}}</td>
                  <td>
                    <img src="{{asset('foto-pasien/' . $pasn->foto)}}" alt="foto" srcset="" height="85px" width="90px">
                  </td>
                  <td>{{$pasn->no_kartu}}</td>                 
                  <td>{{$pasn->nm_pas}}</td>                                
                  <td>{{$pasn->status_pasien}}</td>
                  
                  
                  <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-full1{{$pasn->id}}">Detail</button>
                      <a class="dropdown-item" href="/pasien/edit/{{$pasn->id}}">Edit</a>
                      <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modal-full{{$pasn->id}}" href="">Remove</button>
                    </div>
                  </td>
                </tr>
                <div class="modal fade modal-full" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-full1{{$pasn->id}}">
                  {{-- <button aria-label="" type="button" class="close px-lg" data-dismiss="modal" aria-hidden="true"> --}}
                    <span aria-hidden="true">×</span>
                  </button>
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-body text-center justify-content-between">
                        <h3 class="modal-title"> Detail Pasien </h3>
                        <p> Detail Pasien atas nama  <b>{{$pasn->nm_pas}} </b></p>                          
                        <p class="col-3">NIK Pasien <br> <hr > {{$pasn->nik_pas}} </p>
                        <p class="col-3">Umur <br> <hr > {{$pasn->umur_pas}}</p>
                        <p class="col-3">No. Hp <br> <hr> {{$pasn->hp_pas}} </p>
                        <p class="col-3">Alamat <br> <hr> {{$pasn->alamat_pas}} </p>
                        <button class="btn btn-outline-secondary btn-lg mb-2 my-4 my-sm-0" type="button" data-dismiss="modal">Tutup</button>
                      </div>
                    </div>
                  </div>
                </div>  

                <div class="modal fade modal-full" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-full{{$pasn->id}}">
                  {{-- <button aria-label="" type="button" class="close px-lg" data-dismiss="modal" aria-hidden="true"> --}}
                    <span aria-hidden="true">×</span>
                  </button>
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-body text-center justify-content-between">
                        <h3 class="modal-title"><i> Peringatan! </i></h3>
                        <p> Anda Yakin menghapus Data Pasien atas nama </p>
                        <p>{{$pasn->nm_pas}}</p>
                        <form action="/pasien/{{$pasn->id}}" method="POST" class="form-inline justify-content-center">
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
          
          {{$pasien->links()}}
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
  <script type="text/javascript">
    var readFoto = function(event) {
      var input = event.target;
      var reader = new FileReader();
      reader.onload = function(){
        var dataURL = reader.result;
        var output  = document.getElementById('output');
        output.src  = dataURL;
      };
      reader.readAsDataURL(input.files[0]);
    }
  </script>
@endsection