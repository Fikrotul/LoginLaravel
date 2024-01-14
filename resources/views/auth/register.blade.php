@extends('auth.layouts')
@section('content')
<style>
body {

background-color: #A367B1; /* Set a light background color */
}
.card {
border: 1px solid #ced4da; /* Add a border to the card */
border-radius: 10px; /* Add border-radius for rounded corners
*/
}
.card-header {
background-color: #025bb5; /* Set a blue background color for
the header */
color: #fff; /* Set white text color for the header */
text-align: center;
font-size: 24px; /* Increase font size for header */
}
.card-body {
padding: 20px; /* Add padding to the card body */
}
.btn-primary {
background-color: #025bb5; /* Set the primary button color to
blue */
border-color: #025bb5; /* Set the button border color to blue
*/
}
.btn-primary:hover {
background-color: #0056b3; /* Darker blue on hover */
border-color: #0056b3; /* Darker blue border on hover */
}
</style>
<div class="row justify-content-center mt-5" >
<div class="col-md-6">
<div class="text-center mb-4">

<img src="https://pelajarinfo.id/wp-content/uploads/2021/03/Universitas-Airlangga-Logo-768x768.png" alt="Logo"

class="img-fluid mb-3" style="width: 100px; height: 100px;">
<h4 class="card-title" style="color: white;">Universitas Airlangga</h4>
</div>
<div class="card">
<div class="card-header" style="text-align:
center;">Register</div>
<div class="card-body">
<form action="{{ route('store') }}" method="post">
@csrf

<div class="mb-3 row">

<label for="name" class="col-md-4 col-form-
label text-md-end text-start">Name</label>

<div class="col-md-6">

<input type="text" class="form-control
@error('name') is-invalid @enderror" id="name" name="name" value="{{
old('name') }}">
@if ($errors->has('name'))
<span class="text-danger">{{ $errors->first('name') }}</span>
@endif
</div>
</div>

<div class="mb-3 row">

<label for="email" class="col-md-4 col-form-
label text-md-end text-start">Email Address</label>

<div class="col-md-6">
<input type="email" class="form-control
@error('email') is-invalid @enderror" id="email" name="email"
value="{{ old('email') }}">
@if ($errors->has('email'))
<span class="text-danger">{{ $errors->first('email') }}</span>
@endif
</div>
</div>

<div class="mb-3 row">

<label for="password" class="col-md-4 col-
form-label text-md-end text-start">Password</label>

<div class="col-md-6">
<input type="password" class="form-control
@error('password') is-invalid @enderror" id="password"
name="password">
@if ($errors->has('password'))
<span class="text-danger">{{ $errors->first('password') }}</span>
@endif
</div>
</div>

<div class="mb-3 row">

<label for="password_confirmation"
class="col-md-4 col-form-label text-md-end text-start">Confirm
Password</label>
<div class="col-md-6">
<input type="password" class="form-control"
id="password_confirmation" name="password_confirmation">
</div>
</div>

<div class="mb-3 row">

<input type="submit" class="col-md-3 offset-
md-5 btn btn-primary" value="Register">

</div>
</form>
</div>
</div>
</div>
</div>
@endsection