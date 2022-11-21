@extends('admin.master.master')
@section('content')

<div class="container">
            <div class="row">
               <form action="{{URL::to('/category/store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label class="text-white" for="">Name</label>
                    <input class="form-control"  name="name"   type="text">
                </div>
                <button class="btn btn-md btn-primary mt-3" type="submit"  >save</button>
               </form>
            </div>
 </div>
 @endsection
