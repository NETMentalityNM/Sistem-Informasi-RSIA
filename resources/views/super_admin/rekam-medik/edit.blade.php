@extends('layouts.master')
@section('judul', 'Form Rekam Medik')
@section('isi')
<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">Edit Rekam Medik</h2>
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Data Lengkap Pasien</strong>
            </div>
            <div class="card-body">
              <form method="POST" action="/rekam-medik/{{$rekam_medik->id}}">
                @method('PUT')
                @csrf
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="example-email">No. Rekam Medik</label>
                        <input type="text" name="NO_REKMED" value="{{$rekam_medik->no_rekmed}}" name="example-email" class="form-control" placeholder="Masukkan No. Rekam Medik" required>
                    </div>
                    <div class="form-group mb-3">
                      <label for="simpleinput">No. Kartu</label>
                      <input type="text" name="NO_KARTU" value="{{$rekam_medik->no_kartu}}" class="form-control" placeholder="Masukkan Nomor Kartu" required>
                    </div>
                  <div class="form-group mb-3">
                    <label for="example-password">Tanggal Berobat</label>
                    <input type="date" name="TGL_BEROBAT" value="{{$rekam_medik->tgl_berobat}}" class="form-control" required>
                  </div>
                </div> <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="example-palaceholder">Diagnosa</label>
                    <input type="text" name="DIAGNOSA" value="{{$rekam_medik->diagnosa}}" class="form-control" placeholder="Diagnosa pasien" required>
                  </div>
                  <div class="form-group mb-3">
                    <label for="example-textarea">NIP</label>
                    <select name="NIP" class="form-control" id="" >
                        <option value="">--Pilih ID--</option>
                        {{-- @foreach ($rekam_medik as $item)
                        <option value="{{$item->id}}" @selected($rekam_medik->nip == $item->id)>{{$item->nip}} ++ {{$item->nm_pegawai}}</option>
                        @endforeach --}}
                    </select>
                  </div>
                  <div class="form-group mb-3">
                    <label for="example-textarea">ID Poli</label>
                    <select name="id_poli" class="form-control" id="" >
                        <option value="">--Pilih ID Poli--</option>
                        {{-- @foreach ($rekam_medik as $item)
                        <option value="{{$item->id}}" @selected($rekam_medik->id_poli == $item->id)>{{$item->id_poli}}  {{$item->nm_poli}}</option>
                        @endforeach --}}
                    </select>
                </div>
              </div>
            </div>
            <button type="submit" class="btn mb-2 btn-primary">Edit</button>
          </form>
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