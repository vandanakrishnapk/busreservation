@extends('layouts.owner_index')
@section('edit_profile')
<div class="col-md-12 grid-margin stretch-card mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="color:blue">Update Profile</h4>
                
                        <form class="forms-sample" method="POST" action="{{ route('update_profile',$owner->id) }}" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                     <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" value="{{ $owner->name }}" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">mobile_no</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="mobile_no" value="{{ $owner->mobile_no }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" value="{{ $owner->email }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label  class="col-sm-4 col-form-label">Photo</label>
                        <div class="col-sm-9">
                        <img src="{{ asset('storage/images/'.$owner->profile_photo) }}" height="100" width="120" />
                          <input type="file" class="form-control mt-1" name="profile_photo" >
                       
                        </div>
                      </div>
                     <button type="submit" class="btn btn-primary me-2">Update</button>
                    </form>                   
                  </div>
                </div>
              </div>
@endsection