@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:#e8eaf6">
<div class="container" >

<center>
    <form action="adminlogin" method="post" >
    @csrf
    <h2>ADMIN LOGIN</h2><br><br>
    <label for="uname">Username : </label>
    <input type="text" placeholder="Enter Username" name="uname" required><br><br>
    
    <label for="psw">Password : </label>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br>
    <input type="submit" value="submit">
    
    </form>
    </center>
    </div>
    </body>
@endsection
