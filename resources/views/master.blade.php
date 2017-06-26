<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
             <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->
       <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       <link rel="stylesheet" href="{{secure_asset('css/app.css')}}">
       
      
	<title>test</title>
	<link rel="stylesheet" href="">
	
</head>
<body>
@include('header')
<div class="container-fluid">
  <div id="app">
      @yield('body')

      </div>
</div>


	
	<script src="{{secure_asset('js/app.js')}}"></script>
  
</body>
</html>