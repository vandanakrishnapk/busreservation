@extends('layouts.owner_index')
@section('view_profile')
<div class="col-md-9 grid-margin stretch-card mt-5">
                <div class="card">
                    <div class="card-body">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4 style=color:blue> profile</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('owner') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img src="{{ asset('storage/images/'. $owner->profile_photo) }}" width="100" height="100" class="img img-responsive">
            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $owner->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>mobile</strong>
                {{ $owner->mobile_no }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>email</strong>
                {{ $owner->email }}
            </div>
        </div>        
    </div>
</div>
</div>
</div>
@endsection