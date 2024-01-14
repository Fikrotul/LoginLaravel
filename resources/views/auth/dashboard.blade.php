@extends('auth.layouts')
@section('content')

<style>
body {
background-color: #D24545; /* Set a light background color */
}
.card {
border: 1px solid #ced4da; /* Add a border to the card */
border-radius: 10px; /* Add border-radius for rounded corners */
}
.card-header {
background-color: #025bb5; /* Set a blue background color for the header */
color: #fff; /* Set white text color for the header */
text-align: center;
font-size: 24px; /* Increase font size for header */
}
.btn-primary:hover {
background-color: #0056b3; /* Darker blue on hover */
border-color: #0056b3; /* Darker blue border on hover */
}
</style>
<div class="row justify-content-center mt-5">
<div class="col-md-8">
<div class="card">
<div class="card-header">Dashboard</div>
<div class="card-body">
@if ($message = Session::get('success'))
<div class="alert alert-success">
{{ $message }}
</div>
@else
<div class="alert alert-success">
You are logged in!
</div>
@endif
</div>
</div>
</div>
</div>
@endsection