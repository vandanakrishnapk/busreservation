@extends('layouts.owner_index')
@section('bus_route')
<h4 style="color:blue"><u>Add bus routes</u></h4>
<div class="col-lg-6 ml-2 mt-5 p-3 bg-info" >
<form action="{{ route('createBusRoute') }}" method="POST">
@csrf
<select name="bus_id">
    <option value="">select bus_plate_no</option>
    @foreach($bus as $buses)
    <option value="{{ $buses->id }}">{{ $buses->bus_plate_no }}</option>
    @endforeach
</select>
<div class="form-group p-0.5">
    <label>Location</label>
<select name="location" class="form-control">
    <option value="">Select Location</option>
    @foreach($location as $locations)
    <option value="{{ $locations->id }}">{{ $locations->places }}</option>
    @endforeach
</select>
</div>
<button type="submit" class="btn btn-secondary mb-4">submit</button>
</form>
</div>  

@endsection

