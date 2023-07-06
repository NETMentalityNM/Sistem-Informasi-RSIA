@extends('layouts.master')
@section('judul' , 'Edit Data Pasien')
@section('isi')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Form Data Pasien</h2>
          <p class="text-muted">Disini Anda mengisi data pasien yang datang untuk berobat di rumah sakit</p>
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Data Lengkap Pasien</strong>
            </div>
            <div class="card-body">
              <form method="POST" action="/pasien/{{$pasien->id}}">
                @method('PUT')
                @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="simpleinput">No. Kartu</label>
                    <input type="text" name="NO_KARTU" value="{{$pasien->no_kartu}}" class="form-control" placeholder="Masukkan Nomor Kartu" required>
                  </div>
                  <div class="form-group mb-3">
                    <label for="example-email">NIK Pasien</label>
                    <input type="text" name="NIK_PAS" value="{{$pasien->nik_pas}}" name="example-email" class="form-control" placeholder="Masukkan NIK Pasien" required>
                  </div>
                  <div class="form-group mb-3">
                    <label for="example-password">Nama Pasien</label>
                    <input type="text" name="NM_PAS" value="{{$pasien->nm_pas}}" class="form-control" placeholder="Masukkan Nama Pasien" required>
                  </div>
                  <div class="form-group mb-3">
                    <label for="example-palaceholder">Umur Pasien</label>
                    <input type="number" name="UMUR_PAS" value="{{$pasien->umur_pas}}" class="form-control" placeholder="Usia Pasien" required>
                  </div>
                </div> <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="example-helping">Nomor Hp Pasien</label>
                    <input type="text" name="HP_PAS" value="{{$pasien->hp_pas}}" class="form-control" placeholder="Masukkan Nomor Hp Pasien" required>
                  </div>
                  <div class="form-group mb-3">
                    <label for="example-textarea">Alamat Pasien</label>
                    <input type="text" class="form-control" name="ALAMAT_PAS" value="{{$pasien->alamat_pas}}" rows="4" placeholder="Masukkan Tempat Tinggal Pasien" required>  
                  </div>
                  <div class="form-group mb-3">
                    <label for="example-helping">Status Pasien</label>
                    <input type="text" name="STATUS_PAS" value="{{$pasien->status_pasien}}" class="form-control" placeholder="Masukkan Nomor Hp Pasien" required>
                    <span class="help-block"><small>Ket: Status bisa diedit kembali setelah diisi kondisi pasien saat ini</small></span>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn mb-2 btn-primary">Edit</button>
              </form>
            </div>
          </div> <!-- end section -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="list-group list-group-flush my-n3">
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-box fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Package has uploaded successfull</strong></small>
                    <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                    <small class="badge badge-pill badge-light text-muted">1m ago</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-download fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Widgets are updated successfull</strong></small>
                    <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                    <small class="badge badge-pill badge-light text-muted">2m ago</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-inbox fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Notifications have been sent</strong></small>
                    <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                    <small class="badge badge-pill badge-light text-muted">30m ago</small>
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="list-group-item bg-transparent">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <span class="fe fe-link fe-24"></span>
                  </div>
                  <div class="col">
                    <small><strong>Link was attached to menu</strong></small>
                    <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                    <small class="badge badge-pill badge-light text-muted">1h ago</small>
                  </div>
                </div>
              </div> <!-- / .row -->
            </div> <!-- / .list-group -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body px-5">
            <div class="row align-items-center">
              <div class="col-6 text-center">
                <div class="squircle bg-success justify-content-center">
                  <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                </div>
                <p>Control area</p>
              </div>
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                </div>
                <p>Activity</p>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                </div>
                <p>Droplet</p>
              </div>
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                </div>
                <p>Upload</p>
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-users fe-32 align-self-center text-white"></i>
                </div>
                <p>Users</p>
              </div>
              <div class="col-6 text-center">
                <div class="squircle bg-primary justify-content-center">
                  <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                </div>
                <p>Settings</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection