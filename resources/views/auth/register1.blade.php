<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/feather.css')}}">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/daterangepicker.css')}}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/app-light.css')}}" id="lightTheme" disabled>
    <link rel="stylesheet" href="{{asset('tinydash-master/dark/css/app-dark.css')}}" id="darkTheme">
  </head>
  <body class="dark ">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <form class="col-lg-6 col-md-8 col-10 mx-auto" method="POST" action="{{ route('register') }}">
          <div class="mx-auto text-center my-4">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
            <h2 class="my-3">Register</h2>
          </div>
          <div class="form-group">
            <label for="inputEmail4">Nama</label>
            <input type="text" id="name"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" id="inputEmail4" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror  
        </div>
          <div class="form-group">
            <div class="form-group ">
              <label for="firstname">Email</label>
              <input type="email" id="email"  class="form-control mr-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <hr class="my-4">
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
              <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" name="password_confirmation" type="password" class="form-control" id="" required autocomplete="new-password">
              </div>
            </div>
            <div class="col-md-6">
              <p class="mb-2">Persyaratan Password</p>
              <p class="small text-muted mb-2"> Untuk membuat kata sandi baru, Anda harus memenuhi semua persyaratan berikut: </p>
              <ul class="small text-muted pl-4 mb-0">
                <li> Minimal 8 karakter </li>
                <li>Tambahkan satu karakter khusus</li>
                <li>Tambahkan satu nomor</li>
              </ul>
            </div>
          </div>
          <button class="btn btn-lg btn-info btn-block" type="submit">Daftar</button>
          
        </form>
      </div>
    </div>
    <script src="{{asset('tinydash-master/dark/js/jquery.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/popper.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/moment.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/simplebar.min.js')}}"></script>
    <script src='{{asset('tinydash-master/dark/js/daterangepicker.js')}}'></script>
    <script src='{{asset('tinydash-master/dark/js/jquery.stickOnScroll.js')}}'></script>
    <script src="{{asset('tinydash-master/dark/js/tinycolor-min.js')}}"></script>
    <script src="{{asset('tinydash-master/dark/js/config.js')}}"></script>
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
</body>
</html>