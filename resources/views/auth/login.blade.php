<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login | SBL</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/css/horizontal-layout/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/images/logo.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="/images/logo.png" alt="logo">
                </div>
                <style>
                    .auth .brand-logo img {
                        width: 158px;
                        margin: auto 32% auto 32%;
                    }
                </style>
                <h4 style="text-align: center;">Back Office</h4>
                <h6 class="font-weight-light" style="text-align: center;">Sign in to continue.</h6>
                <form class="pt-3" method="POST" action="{{ route('login') }}">
                @csrf
                  <div class="form-group">
                    <input id="email" type="email" class="form-control form-control-lg{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required autofocus>
                    <!-- <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="{{ __('E-Mail Address') }}"> -->
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">
                    <!-- <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password"> -->
                    <input id="password" type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                        {{ __('Login') }}
                    </button>
                    <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">{{ __('Login') }}</a> -->
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/vendors/js/vendor.bundle.base.js"></script>
  <script src="/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/hoverable-collapse.js"></script>
  <script src="/js/template.js"></script>
  <script src="/js/settings.js"></script>
  <script src="/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
