<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>
<body>



@if(Session::has('success'))
<div class="position-absolute w-100 h-100 m-0 p-0 transparent closeTab" style="display: block;">
  <div class="card w-50 h-20 rounded-4 topMargin">
    <div class="card-header">
      <h1 class="text-center">Message</h1>
    </div>
    <div class="card-body">
      <h4>Your provided information is successfully registerated!</h4>
      <button class="btn btn-primary float-end" onclick="Close()">Close</button>
    </div>
  </div>
</div>
@endif


@if(Session::has('fail'))
<script>
  window.alert("Email Already Exist!");
</script>
@endif

<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Staffs Register</p>

                <form class="mx-1 mx-md-4 subtForm needs-validation" action="{{ url('StaffRegister') }}" method="POST" novalidate>
                    @csrf
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example1c">Name</label>
                      <input type="text" name="StaffName" id="form3Example1c" class="form-control" required />
                      <h6 class="text-danger invalid-feedback">Please enter name!</h6>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example3c"> Email</label>
                      <input type="email" name="StaffEmail" id="form3Example3c" class="form-control" required />
                      <h6 class="text-danger invalid-feedback">Please enter Email!</h6>
                    </div>
                  </div>

                  

                  @error('StaffEmail')
                  <div class=" top-0 w-100 h-100 m-0 p-0 full-page-alert closeTab" style="display: block;">
                    <div class="card w-25 h-20 rounded-4 topMargin">
                      <div class="card-header">
                        <h1 class="text-center">Message</h1>
                      </div>
                      <div class="card-body">
                        <h4 class="text-danger">Email Already exist!</h4>
                        <button class="btn btn-primary float-end" onclick="Close()">Close</button>
                      </div>
                    </div>
                  </div>
                  @enderror

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4c">Password</label>
                      <input type="password" name="StaffPassword" class="form-control pass" required />
                      <h6 class="text-danger invalid-feedback">Please enter password!</h6>
                      <h6 class="text-danger invalid-feedback passFeed">Please enter password that contains at least 8 characters and alpha numeric value!</h6>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div data-mdb-input-init class="form-outline flex-fill mb-0">
                      <label class="form-label" for="form3Example4cd">Phone Number</label>
                      <input type="text" name="StaffPhoneNo" id="form3Example4cd" class="form-control" required />
                      <h6 class="text-danger invalid-feedback">Please enter phone Number!</h6>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="{{ asset('/JavaScript/script.js') }}"></script>
</body>
</html>
