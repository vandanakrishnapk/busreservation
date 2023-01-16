
@extends('layouts.user_index')
@section('transaction') 
<h4 style="color:blue"><u>pay now</u></h4>
<div class="col-lg-9 ml-5 mt-5 bg-info" >
<form action="{{ route('transaction') }}" method="POST" id="form">
@csrf
<div class="form-group p-2 mt-5 ">
<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
</div>
<div class="form-group p-2">
paid<input type="radio" name="status" id="exampleInputEmail1" value="paid">
unpaid<input type="radio" name="status"  id="exampleInputEmail1" value="unpaid">
</div>
<div class="form-group p-2 mt-2 w-5">
    <label>fare_amount</label>
<input type="decimal" name="fare_amount" class="form-control">
</div>
<button type="submit" class="btn btn-secondary mb-4 mt-4">submit</button>
</form>
</div>  
@endsection
