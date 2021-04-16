@extends('layouts.master')

@section('title')
    Dashboard of Funda
@endsection
@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Book Request</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th>
                Name
              </th>
              <th>
                Country
              </th>
              <th>
                City
              </th>
              <th class="text-right">
                Salary
              </th>
            </thead>
            <tbody>

              @foreach ($books as $data)
              <tr>
                <td> {{ $data->borrower_id }}</td>
                <td> {{ $data->$listBooks->author_name }}</td>
                
              </tr>
              @endforeach
              
             
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection

@section('scripts')
    
@endsection