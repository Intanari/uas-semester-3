<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset( 'assets' )}}/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset( 'assets' )}}/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                </a>
                <p class="text-center">Login Your account</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <!-- Display validation errors if any -->
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        <!-- Display validation errors if any -->
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input class="form-check-input primary" type="checkbox" name="remember" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2 fs-4 mb-4 rounded-2">Sign In</button>
                </form>
<div class="d-flex align-items-center justify-content-center">
    <a class="text-primary fw-bold ms-2" href="{{ route('register') }}">Create an account</a>
</div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset( 'assets' )}}/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset( 'assets' )}}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>