@extends('layout.main')

@section('title','Task Add')



@section('content')
<div class="container">

    <h2>Task List</h2>
    @if(Session::has('message'))
    <div class="alert alert-success">
        {{  session('message') }}
    </div>
    @endif
    <?php

    // app('request')->route()->getActionMethod()
    /*    echo  app('request')->path().'==';
    echo app('request')->route()->getActionMethod();
    echo  "<pre>"; print_r( get_class(app('request')->route()->getController())); */
    ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($lists as $row)
                    <tr>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email_id}}</td>
                        <td>{{$row->phone_no}}</td>
                        <td>
                         <a href="{{route('editTask',['id'=>$row->id])}}"><button class="btn btn-primary">Edit</button></a>
                         <a href="{{route('deleteTask',['id'=>$row->id])}}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    <tr>
                @endforeach
                </tbody>
            </table>
          {{$lists->links('pagination')}}
        </div>
       
    </div>

</div>


@endsection