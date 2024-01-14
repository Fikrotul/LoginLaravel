@extends('auth.layouts')
@section('content')
<style>
body {
background-color: #A367B1; /* Set a light background color */
}
.card {
border: 1px solid #5D3587; /* Add a border to the card */
border-radius: 10px; /* Add border-radius for rounded corners */
}
.card-header {
background-color: #025bb5; /* Set a blue background color for the header */
color: #fff; /* Set white text color for the header */
text-align: center;
font-size: 24px; /* Increase font size for header */
}
.card-body {
padding: 20px; /* Add padding to the card body */
}
.btn-primary {
background-color: #025bb5; /* Set the primary button color to blue */
border-color: #025bb5; /* Set the button border color to blue */
}
.btn-primary:hover {
background-color: #0056b3; /* Darker blue on hover */
border-color: #0056b3; /* Darker blue border on hover */
}
</style>
<div class="row justify-content-center mt-5">
<div class="col-md-6">
<div class="text-center mb-4" style="color: white;">

<img src="https://pelajarinfo.id/wp-content/uploads/2021/03/Universitas-Airlangga-Logo-768x768.png" alt="Logo" class="img-
fluid mb-3" style="width: 100px; height: 100px;">

<h4 class="card-title">Universitas Airlangga</h4>

</div>
<div class="card">
<div class="card-header">Login</div>
<div class="card-body">
<form action="{{ route('authenticate') }}" method="post">
@csrf
<div class="mb-3 row">

<label for="email" class="col-md-4 col-form-label text-md-end text-
start">Email Address</label>

<div class="col-md-6">
<input type="email" class="form-control @error('email') is-invalid
@enderror" id="email" name="email" value="{{ old('email') }}">
@if ($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span>
@endif
</div>
</div>
<div class="mb-3 row">
<label for="password" class="col-md-4 col-form-label text-md-end
text-start">Password</label>
<div class="col-md-6">

<input type="password" class="form-control @error('password') is-
invalid @enderror" id="password" name="password">

@if ($errors->has('password'))
<span class="text-danger">{{ $errors->first('password')
}}</span>
@endif
</div>
</div>
<div class="mb-3 row">
<input type="submit" class="col-md-3 offset-md-5 btn btn-primary"
value="Login">
</div>
</form>
</div>
</div>
</div>
</div>
@endsection