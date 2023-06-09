<!doctype html>
<html lang="en">
  <head>
    <title>@yield('judul')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/simplebar.css')}}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/feather.css')}}">
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/dropzone.css')}}">
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/uppy.min.css')}}">
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/jquery.steps.css')}}">
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/quill.snow.css')}}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/daterangepicker.css')}}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/app-light.css')}}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/app-dark.css')}}" id="darkTheme">
  </head>
  <body class="vertical  dark  ">
    <div class="wrapper">
      {{-- Memanggil Navbar --}}
      @include('layouts.navbar')
      {{--  --}}
      {{-- <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row align-items-center mb-2">
                <div class="col">
                  <h2 class="h5 page-title">Selamat Datang di Website Admin RSIA!</h2>
                </div>
                <div class="col-auto">
                  <form class="form-inline">
                    <div class="form-group d-none d-lg-inline">
                      <label for="reportrange" class="sr-only">Date Ranges</label>
                      <div id="reportrange" class="px-2 py-2 text-muted">
                        <span class="small"></span>
                      </div>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        @yield('isi')
{{-- Balance --}}
<!-- .row -->
              <div class="row">
                <!-- Recent Activity -->
                {{-- <div class="col-md-12 col-lg-4 mb-4">
                  <div class="card timeline shadow">
                    <div class="card-header">
                      <strong class="card-title">Recent Activity</strong>
                      <a class="float-right small text-muted" href="#!">View all</a>
                    </div>
                    <div class="card-body" data-simplebar style="height:355px; overflow-y: auto; overflow-x: hidden;">
                      <h6 class="text-uppercase text-muted mb-4">Today</h6>
                      <div class="pb-3 timeline-item item-primary">
                        <div class="pl-5">
                          <div class="mb-1"><strong>@Brown Asher</strong><span class="text-muted small mx-2">Just create new layout Index, form, table</span><strong>Tiny Admin</strong></div>
                          <p class="small text-muted">Creative Design <span class="badge badge-light">1h ago</span>
                          </p>
                        </div>
                      </div>
                      <div class="pb-3 timeline-item item-warning">
                        <div class="pl-5">
                          <div class="mb-3"><strong>@Hester Nissim</strong><span class="text-muted small mx-2">has upload new files to</span><strong>Tiny Admin</strong></div>
                          <div class="row mb-3">
                            <div class="col"><img src="./assets/products/p1.jpg" alt="..." class="img-fluid rounded"></div>
                            <div class="col"><img src="./assets/products/p2.jpg" alt="..." class="img-fluid rounded"></div>
                            <div class="col"><img src="./assets/products/p3.jpg" alt="..." class="img-fluid rounded"></div>
                            <div class="col"><img src="./assets/products/p4.jpg" alt="..." class="img-fluid rounded"></div>
                          </div>
                          <p class="small text-muted">Front-End Development <span class="badge badge-light">1h ago</span>
                          </p>
                        </div>
                      </div>
                      <div class="pb-3 timeline-item item-success">
                        <div class="pl-5">
                          <div class="mb-3"><strong>@Kelley Sonya</strong><span class="text-muted small mx-2">has commented on</span><strong>Advanced table</strong></div>
                          <div class="card d-inline-flex mb-2">
                            <div class="card-body bg-light py-2 px-3 small rounded"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim nulla eu quam cursus placerat. Vivamus non odio ullamcorper, lacinia ante nec, blandit leo. </div>
                          </div>
                          <p class="small text-muted">Back-End Development <span class="badge badge-light">1h ago</span>
                          </p>
                        </div>
                      </div>
                      <h6 class="text-uppercase text-muted mb-4">Yesterday</h6>
                      <div class="pb-3 timeline-item item-warning">
                        <div class="pl-5">
                          <div class="mb-3"><strong>@Fletcher Everett</strong><span class="text-muted small mx-2">created new group for</span><strong>Tiny Admin</strong></div>
                          <ul class="avatars-list mb-3">
                            <li>
                              <a href="#!" class="avatar avatar-sm">
                                <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-1.jpg">
                              </a>
                            </li>
                            <li>
                              <a href="#!" class="avatar avatar-sm">
                                <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-4.jpg">
                              </a>
                            </li>
                            <li>
                              <a href="#!" class="avatar avatar-sm">
                                <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-3.jpg">
                              </a>
                            </li>
                          </ul>
                          <p class="small text-muted">Front-End Development <span class="badge badge-light">1h ago</span>
                          </p>
                        </div>
                      </div>
                      <div class="pb-3 timeline-item item-success">
                        <div class="pl-5">
                          <div class="mb-3"><strong>@Bertha Ball</strong><span class="text-muted small mx-2">has commented on</span><strong>Advanced table</strong></div>
                          <div class="card d-inline-flex mb-2">
                            <div class="card-body bg-light py-2 px-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim nulla eu quam cursus placerat. Vivamus non odio ullamcorper, lacinia ante nec, blandit leo. </div>
                          </div>
                          <p class="small text-muted">Back-End Development <span class="badge badge-light">1h ago</span>
                          </p>
                        </div>
                      </div>
                      <div class="pb-3 timeline-item item-danger">
                        <div class="pl-5">
                          <div class="mb-3"><strong>@Lillith Joseph</strong><span class="text-muted small mx-2">has upload new files to</span><strong>Tiny Admin</strong></div>
                          <div class="row mb-3">
                            <div class="col"><img src="./assets/products/p4.jpg" alt="..." class="img-fluid rounded"></div>
                            <div class="col"><img src="./assets/products/p1.jpg" alt="..." class="img-fluid rounded"></div>
                            <div class="col"><img src="./assets/products/p2.jpg" alt="..." class="img-fluid rounded"></div>
                          </div>
                          <p class="small text-muted">Front-End Development <span class="badge badge-light">1h ago</span>
                          </p>
                        </div>
                      </div>
                    </div> <!-- / .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-6 --> --}} 
                @yield('content')
                <!-- Striped rows -->
                <!-- Striped rows -->
              </div> <!-- .row-->
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
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="{{asset('tinydash-master/dark/js/jquery.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/popper.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/moment.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/simplebar.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/daterangepicker.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/jquery.stickOnScroll.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/tinycolor-min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/config.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/d3.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/topojson.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/datamaps.all.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/datamaps-zoomto.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/datamaps.custom.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/Chart.min.js')}}"></script>
    <script>
      /* defind global options */
      Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
      Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{asset('tinydash-master/dark/js/gauge.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/apexcharts.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/apexcharts.custom.js')}}"></script>
    <script src='{{asset('tinydash-master/dark/js/jquery.mask.min.js')}}''></script>
    <script src='{{asset('tinydash-master/dark/js/select2.min.js')}}'></script>
    <script src='{{asset('tinydash-master/dark/js/jquery.steps.min.js')}}'></script>
    <script src='{{asset('tinydash-master/dark/js/jquery.validate.min.js')}}'></script>
    <script src='{{asset('tinydash-master/dark/js/jquery.timepicker.js')}}'></script>
    <script src='{{asset('tinydash-master/dark/js/dropzone.min.js')}}'></script>
    <script src='{{asset('tinydash-master/dark/js/uppy.min.js')}}'></script>
    <script src='{{asset('tinydash-master/dark/js/quill.min.js')}}'></script>
    <script>
      $('.select2').select2(
      {
        theme: 'bootstrap4',
      });
      $('.select2-multi').select2(
      {
        multiple: true,
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker(
      {
        singleDatePicker: true,
        timePicker: false,
        sho wDropdowns: true,
        locale:
        {
          format: 'MM/DD/YYYY'
        }
      });
      $('.time-input').timepicker(
      {
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
      });
      /** date range picker */
      if ($('.datetimes').length)
      {
        $('.datetimes').daterangepicker(
        {
          timePicker: true,
          startDate: moment().startOf('hour'),
          endDate: moment().startOf('hour').add(32, 'hour'),
          locale:
          {
            format: 'M/DD hh:mm A'
          }
        });
      }
      var start = moment().subtract(29, 'days');
      var end = moment();

      function cb(start, end)
      {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }
      $('#reportrange').daterangepicker(
      {
        startDate: start,
        endDate: end,
        ranges:
        {
          'Today': [moment(), moment()],
          'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days': [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month': [moment().startOf('month'), moment().endOf('month')],
          'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
      }, cb);
      cb(start, end);
      $('.input-placeholder').mask("00/00/0000",
      {
        placeholder: "__/__/____"
      });
      $('.input-zip').mask('00000-000',
      {
        placeholder: "____-___"
      });
      $('.input-money').mask("#.##0,00",
      {
        reverse: true
      });
      $('.input-phoneus').mask('(000) 000-0000');
      $('.input-mixed').mask('AAA 000-S0S');
      $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
      {
        translation:
        {
          'Z':
          {
            pattern: /[0-9]/,
            optional: true
          }
        },
        placeholder: "___.___.___.___"
      });
      // editor
      var editor = document.getElementById('editor');
      if (editor)
      {
        var toolbarOptions = [
          [
          {
            'font': []
          }],
          [
          {
            'header': [1, 2, 3, 4, 5, 6, false]
          }],
          ['bold', 'italic', 'underline', 'strike'],
          ['blockquote', 'code-block'],
          [
          {
            'header': 1
          },
          {
            'header': 2
          }],
          [
          {
            'list': 'ordered'
          },
          {
            'list': 'bullet'
          }],
          [
          {
            'script': 'sub'
          },
          {
            'script': 'super'
          }],
          [
          {
            'indent': '-1'
          },
          {
            'indent': '+1'
          }], // outdent/indent
          [
          {
            'direction': 'rtl'
          }], // text direction
          [
          {
            'color': []
          },
          {
            'background': []
          }], // dropdown with defaults from theme
          [
          {
            'align': []
          }],
          ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
        {
          modules:
          {
            toolbar: toolbarOptions
          },
          theme: 'snow'
        });
      }
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function()
      {
        'use strict';
        window.addEventListener('load', function()
        {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form)
          {
            form.addEventListener('submit', function(event)
            {
              if (form.checkValidity() === false)
              {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
    <script>
      var uptarg = document.getElementById('drag-drop-area');
      if (uptarg)
      {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
        {
          inline: true,
          target: uptarg,
          proudlyDisplayPoweredByUppy: false,
          theme: 'dark',
          width: 770,
          height: 210,
          plugins: ['Webcam']
        }).use(Uppy.Tus,
        {
          endpoint: 'https://master.tus.io/files/'
        });
        uppy.on('complete', (result) =>
        {
          console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
      }
    </script>
    <script src="{{asset('tinydash-master/dark/js/apps.js')}}"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
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
  </body>
</html>