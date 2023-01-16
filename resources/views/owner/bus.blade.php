@extends('layouts.owner_index')
@section('bus_reg')
<h4 style="color:blue"><u>Register your bus here</u></h4>
<div class="col-lg-9 ml-5 mt-5 bg-info" >
<form action="{{ route('createbus') }}" method="POST">
@csrf
<div class="form-group p-2 mt-5">
<input type="hidden" name="owner_id" class="form-control" value="{{ Auth::user()->id }}">
</div>
<div class="form-group p-0.5">
    <label>bus_plate_no</label>
<input type="text" name="bus_plate_no" class="form-control"  id="exampleInputEmail1">
</div>
<div class="form-group p-0.5">
    <label>date</label>
<input type="datetime-local" name="date" class="form-control"  id="exampleInputEmail1">
</div>
<div class="form-group p-0.5">
    <label>bus_name</label>
<input type="text" name="bus_name" class="form-control"  id="exampleInputEmail1">
</div>
<div class="form-group p-0.5">
    <label>bus_type</label>
<select name="bus_type" class="form-control">
    <option value="">select bus_type</option>
    @foreach($bus_type as $bus_types)
    <option value="{{ $bus_types->id }}">{{ $bus_types->bus_types }}</option>
    @endforeach
</select>
</div>
<div class="form-group p-0.5">
    <label>capacity</label>
    <select name="capacity" class="form-control">
    <option value="">select capacity</option>
    @foreach($capacity as $capacities)
    <option value="{{ $capacities->id}}">{{ $capacities->No_of_seats }}</option>
    @endforeach
</select>
</div>
<div class="form-group p-0.5">
    <label>location</label>
    <select name="location" class="form-control">
    <option value="">select location</option>
    @foreach($place as $places)
    <option value="{{ $places->id }}">{{ $places->places }}</option>
    @endforeach
</select>
</div>

<button type="submit" class="btn btn-secondary mb-4">submit</button>
</form>
</div>  
@endsection

