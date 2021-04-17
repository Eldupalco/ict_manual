@extends('layouts.master')

@section('title')
   Edit Book of Funda
@endsection


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create Account of Funda
                </div>
                <div class="card-body">
                  <form action="{{url('update-faculty/'.$student->id)}}" method="POST">

                    {{ csrf_field() }}
                    {{method_field('PUT')}}
       
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Student ID</label>
                        <input type="text" name="user_id" class="form-control rounded-0" value="{{$student->student_id}}">
                      </div>
          
                      <div class="mb-3">
                          <label for="recipient-name" class="col-form-label r">Name</label>
                          <input type="text" name="last_name" class="form-control rounded-0">
                        </div>

                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label r">Email</label>
                          <input type="email" name="last_name" class="form-control rounded-0">
                        </div>

                        <div class="mb-3">
                          <label for="recipient-name" class="col-form-label r">Phone</label>
                          <input type="email" name="last_name" class="form-control rounded-0">
                        </div>
          
          
                        <div class="form-group">
                          <label>User Type</label>
                          <select name="department" class="form-control rounded-0">
                              <option value="Information Technology">Information Technology</option>
                              <option value="Business Administration">Business Administration</option>
                          </select>
                      </div>
       
                  
                   <div class="text-right">
                       <a href="{{url('faculty')}}" class="btn btn-secondary">Cancel</a>
                       <button type="submit" class="btn btn-primary">Save</button>
                     </div>
       
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    
@endsection