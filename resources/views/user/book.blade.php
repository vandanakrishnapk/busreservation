@extends('layouts.user_index')
@section('booking')

<div class="col-lg-9 ml-5 mt-5 bg-info" >
<form action="#" method="POST">
@csrf
<div class="form-group p-2 mt-5 ">
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
</div>
<div class="form-group p-2 mt-5 ">
<input type="hidden" name="bus_id" value="{{ Auth::user()->id }}">
</div>
<div class="form-group p-2 mt-2 w-5">
    <label>starting_point</label>
<input type="text" name="starting_point" class="form-control">
</div>
<div class="form-group p-2 mt-2 w-5">
    <label>destination</label>
<input type="text" name="fare_amount" class="form-control">
</div>
<div class="form-group p-2 mt-2 w-5">
    <label>date</label>
<input type="text" name="destination" class="form-control">
</div>
<div class="form-group p-2 mt-2 w-5">
    <label>status</label>
<input type="text" name="status" class="form-control">
</div>
<div class="form-group p-2 mt-2 w-5">
    <label>no_of_seats</label>
<input type="text" name="no_of_seats" class="form-control">
</div>
<a href="{{ route('transaction') }}" class="btn btn-primary">pay now</a>
<button type="submit" class="btn btn-secondary mb-4 mt-4">submit</button>
</form>
</div>  
@endsection