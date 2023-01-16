@extends('layouts.index')
@section('bus_type')
<div class="col-lg-6 ml-5 mt-5 bg-dark" >
<form action="{{ route('create_bus_type') }}" method="POST">
@csrf
<div class="form-group p-3">
    <label>Enter bus_type</label>
<input type="text" class="form-control" name="bus_types" id="exampleInputEmail1">
</div>
<button type="submit" class="btn btn-primary ml-3 mb-3 ">submit</button>
</form>
</div>  
@endsection