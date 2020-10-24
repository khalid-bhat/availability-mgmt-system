@extends('layout.main')

@section('title','Task Add')



@section('content')
<div class="container">


    <!-- @if($errors->any()) 
<div class="alert alert-danger"> 
    <ul> 
    @foreach($errors->all() as $error)
            <li>{{ $error }} </li>
    @endforeach
    </ul>
</div> 
@endif -->


    <h2>{{ $type}} Form</h2>

    @if(Session::has('message'))
    <div class="alert alert-success">
        {{  session('message') }}
    </div>
    @endif

    <?php  //echo  app('request')->path(); 
    ?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="@if(isset($id)) {{ route('editTask',['id'=>$id]) }} @else {{ route('taskAdd') }} @endif" method="post" enctype="multipart/form-data"> 
                @csrf
                <div class="form-group row">
                    <div class="col-sm-1"> </div>
                    <label for="pwd" class="col-sm-3">Name:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="@if(isset($detail)) {{$detail->name}} @else{{old('name')}}@endif">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-1"> </div>
                    <label for="pwd" class="col-sm-3">Image:</label>
                    <div class="col-sm-4">
                        <input type="file" class="form-control" name="profilePic" value="">
                    </div>
                </div>
                @error('name')
                <div class="alert alert-danger">{{ $message}} </div>
                @enderror
                <div class="form-group row">
                    <div class="col-sm-1"> </div>
                    <label for="pwd" class="col-sm-3">Email Id:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="emailId" id="emailId" placeholder="Enter Email ID" value="@if(isset($detail)) {{$detail->email_id}} @else{{old('emailId')}}@endif">
                    </div>
                </div>
                @error('emailId')
                <div class="alert alert-danger">{{ $message}} </div>
                @enderror
                <div class="form-group row">
                    <div class="col-sm-1"> </div>
                    <label for="pwd" class="col-sm-3">Phone No:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="phoneNo" name="phoneNo" placeholder="Enter Phone No" value="@if(isset($detail)) {{$detail->phone_no}} @else{{old('phoneNo')}}@endif">
                    </div>
                </div>
                @error('phoneNo')
                <div class="alert alert-danger">{{ $message}} </div>
                @enderror

                <div class="form-group row">
                    <div class="col-sm-4"> </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary">{{$type}}</button>
                        <a href="{{URL::route('task')}}"> <button type="button" class="btn btn-danger">Back</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>


@endsection