@extends('layouts.index')
@section('approve')
<h1> Owners registered </h1>
<table class="table  table-dark table-striped">
  <thead>
    <tr> 
      <th scope="col">Name</th>
      <th scope="col">Mobile_no</th>
      <th scope="col">Email</th>
      
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($approve as $approves)
  <tbody>    
    <tr>   
      <td>{{ $approves->name }}</td>
      <td>{{ $approves->mobile_no }}</td>
      <td>{{ $approves->email }} </td> 
      <!-- <td>  <img src="{{ asset($approves->profile_photo) }}" width="100" height="100" class="img img-responsive"> </td>    -->
        <td>  
        @if($approves->status == 'approved')  
        <a class="btn btn-danger p-1" href="{{ route('update',$approves->id) }}">Approved</a>      
         @else   
        <a class="btn btn-primary p-1" href="{{ route('update',$approves->id) }}">Approve</a>   
        </td>
        @endif
  </tr>   
  </tbody>
  @endforeach 
</table>
@endsection