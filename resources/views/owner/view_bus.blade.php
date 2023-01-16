@extends('layouts.owner_index')
@section('view_bus')
<div class="md-6">
<table class="table table-hover table-info" id="tabledata"> 
    <thead>
        <th>bus_name</th>
        <th>bus_plate_no</th>
        <th>location</th>     
        <th>date</th>
        <th>capacity</th>
        <th>bus_type</th>       
    </thead>
    <tbody>       
        
        @foreach($items as $item)
        <tr>      
          <td>{{ $item->bus_name }}</td>   
          <td>{{ $item->bus_plate_no }}</td>            
           <td> {{ $item->places }} </td>         
          
            <td>{{ $item->date }}</td>
      
            <td>{{ $item->No_of_seats }}</td>
   
            <td>{{ $item->bus_types }}</td>    
   
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection