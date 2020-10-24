 @extends('layout.main')

 @section('title','Student List')


 @section('sidebar')
 @parent
 <p>This is Second Sidebar</p>
 @endsection

 @section('content')
 <div>
    <ul>
       <li>First</li>
       <li>Second</li>
    </ul>
 </div> 
 @if (Session::has('user_id')) 
   <h1>User Id is - {{ Session('user_id') }}</h1> 
 @endif

 @if (Session::has('message')) 
   <div class="{{ session('message')['class'] }}">  {{ session('message')['msj'] }}</div> 
 @endif

 <h1>This is student List file </h1>
 @endsection