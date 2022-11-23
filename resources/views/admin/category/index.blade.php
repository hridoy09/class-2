@extends('admin.master.master')
@section('content')

<div class="container">
            <div class="row">
                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Sr no.</th>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>

                        <th scope="col">Action</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$category->id }}</td>
                            <td>{{$category->name  }}</td>
                            <td><a class="btn btn-md btn-warning" href="{{URL::to('/category/edit', $category->id)}}">Edit</a>
                          <a class="btn btn-md btn-danger" href="{{URL::to('/category/delete', $category->id)}}">Delete</a></td>
                          </tr>
                        @endforeach


                  </table>

            </div>
 </div>
 @endsection
