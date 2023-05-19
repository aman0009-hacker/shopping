<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>HONO - Multi Purpose HTML Template</title>

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
          @include('user.css')
   
   

</head>

<body>
    <!-- Start Header Area -->
    @include('user.header')
    <!-- Start Header Area -->

   {{-- register form --}}
<div class="container my-5">
    <h3 class="text-center mb-4"> Register to enter into website</h3>
<form action="register" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="name" name="name">
        <label for="floatingInput">Name</label>
      </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"name="email">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password"name="passowrd">
        <label for="floatingPassword">Password</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingcPassword" placeholder="confirmation_Password"name="confirmation_Password">
        <label for="floatingcPassword">Confirmation Password</label>
      </div>
      <input type="submit"value="submit"class="btn btn-primary mt-4 mx-auto d-block py-2"style="width:10%">
</form>    
</div>     
    <!-- Start Footer Section -->
    @include('user.footer')
    <!-- End Footer Section -->

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    @include('user.script')
</body>



</html>