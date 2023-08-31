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
            <div class="row mb-4">
              <div class="col-md-7">
                <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at, pretium blandit sapien. </p>
              </div>
              <div class="col">
                <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                <p class="small mb-0 text-muted">(537) 315-1481</p>
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
                    <h3 class="h5 mt-4 mb-1">Total Pegawai</h3>
                    
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
                    <h3 class="h5 mt-4 mb-1">Total Obat</h3>
                    
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
                      <h3 class="h5 mt-4 mb-1">Notifications</h3>
                    </a>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus.</p>
                  </div> <!-- .col -->
                </div> <!-- .row -->
              </div> <!-- .card-body -->
              <div class="card-footer">
                <a href="" class="d-flex justify-content-between text-muted"><span>Notification Settings</span><i class="fe fe-chevron-right"></i></a>
              </div> <!-- .card-footer -->
            </div> <!-- .card -->
          </div> <!-- .col-md-->
        </div> <!-- .row-->
        <h3>Subscription</h3>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus.</p>
        <div class="card-deck my-4">
          <div class="card mb-4 shadow">
            <div class="card-body text-center my-4">
              <a href="#">
                <h3 class="h5 mt-4 mb-0">Basic</h3>
              </a>
              <p class="text-muted">package</p>
              <span class="h1 mb-0">$9.9</span>
              <p class="text-muted">year</p>
              <ul class="list-unstyled">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Eget porttitor lorem</li>
              </ul>
              <span class="dot dot-lg bg-success"></span>
              <span class="text-muted ml-3">Active</span>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
          <div class="card mb-4">
            <div class="card-body text-center my-4">
              <a href="#">
                <h3 class="h5 mt-4 mb-0">Professional</h3>
              </a>
              <p class="text-muted">package</p>
              <span class="h1 mb-0">$16.9</span>
              <p class="text-muted">year</p>
              <ul class="list-unstyled">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Eget porttitor lorem</li>
              </ul>
              <button type="button" class="btn mb-2 btn-primary btn-lg">Ugrade</button>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
        </div> <!-- .card-group -->
        
      </div> <!-- /.col-12 -->
    </div> <!-- .row -->
  </div>
  <div class="row my-4">
  <div class="col-md-4">
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col">
            <small class="text-muted mb-1">Page Views</small>
            <h3 class="card-title mb-0">1168</h3>
            <p class="small text-muted mb-0"><span class="fe fe-arrow-down fe-12 text-danger"></span><span>-18.9% Last week</span></p>
          </div>
          <div class="col-4 text-right">
            <span class="sparkline inlineline"></span>
          </div>
        </div> <!-- /. row -->
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
  <div class="col-md-4">
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col">
            <small class="text-muted mb-1">Conversion</small>
            <h3 class="card-title mb-0">68</h3>
            <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-warning"></span><span>+1.9% Last week</span></p>
          </div>
          <div class="col-4 text-right">
            <span class="sparkline inlinepie"></span>
          </div>
        </div> <!-- /. row -->
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
  <div class="col-md-4">
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col">
            <small class="text-muted mb-1">Visitors</small>
            <h3 class="card-title mb-0">108</h3>
            <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-success"></span><span>37.7% Last week</span></p>
          </div>
          <div class="col-4 text-right">
            <span class="sparkline inlinebar"></span>
          </div>
        </div> <!-- /. row -->
      </div> <!-- /. card-body -->
    </div> <!-- /. card -->
  </div> <!-- /. col -->
</div>
</main>
  @endsection