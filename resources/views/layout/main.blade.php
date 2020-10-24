<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

</style> 

<body> 
<div class="header">
  <a href="javascript:void()" class="logo">  Code Improve</a>
  <div class="header-right">
    <a class="@if(app('request')->path()=='task') active @endif"  href="{{URL::route('task')}}">Home</a>
    <a class="@if(app('request')->path()=='task/add') active @endif" href="{{URL::route('taskAdd')}}">Add</a>
    <a class="" href="javascript:void()">About</a>
  </div>
</div>
    @section('sidebar')
    <!-- <p>Master sidebar</p> -->
    @show
    @yield('content')
</body>

</html>