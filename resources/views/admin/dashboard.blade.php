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
          <table class="table table-sm mb-0">
            <thead class="text-primary">
              <th>Name</th>
              <th>Book</th>
              <th>Quantity</th>
              <th>Date</th>
              <th>Status</th>
            </thead>
            <tbody>

              @foreach ($bookRequest as $data)
              <tr>
                <td> {{ $data->user->name}}</td>
                <td> {{ $data->book->author_name }}</td>
                <td> {{ $data->borrow_quantity }}</td>
                <td> {{ $data->return_date }}</td>
                <td> {{ $data->borrow_status }}</td>
               


                <td class="">
                  <div class="flex d-flex float-right">
                    <form action="{{ url('return-books-requested/'.$data->id) }}" method="POST" class=" m-1">

                        {{ csrf_field() }}
                        
                        {{method_field('PUT')}}

                      <input type="hidden" name="id" value="{{$data->id}}">
                      <input type="hidden" name="borrow_status" value="Return">
                      <button type="submit" class="btn btn-primary btn-md"><i class="fa fa-id-card"></i></button>

                  </form>

                      
                      <a href="{{ url('request-books-update/'.$data->id) }}" class="btn btn-success btn-md m-1"> <i class="fas fa-edit"></i></a>
                

                  {{-- <a href="/role-delete/{{$data->id}}" class="btn btn-danger"> Delete</a> --}}

                  <form action="{{url('delete-book/'.$data->id)}}" method="POST" class=" m-1">

                      {{-- security token purpose --}}
                      {{ csrf_field() }}
                      {{-- method use for updating data --}}
                      {{ method_field('DELETE') }}

                      <input type="hidden" name="id" value="{{$data->id}}">
                      <button type="submit" class="btn btn-danger btn-md"><i class="far fa-trash-alt"></i></button>

                  </form>

                  </div>
              </td>
                
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