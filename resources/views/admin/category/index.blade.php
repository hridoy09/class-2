@extends('admin.master.master')
@section('content')

<div class="container">
            <div class="row">
                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>

                        <th scope="col">Action</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$category->name  }}</td>
                            <td><a class="btn btn-md btn-warning" href="">Edit</a>
                          <a class="btn btn-md btn-danger" href="">Delete</a></td>
                          </tr>
                        @endforeach


                  </table>

            </div>
 </div>
 @endsection
