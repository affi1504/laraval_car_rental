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

<center>
<body style="background-color:#ccccff">
<div class="container-fluid">
  <h1>USER BILL</h1></br>

  @foreach($cars as $car)
  
    <div class="col-sm-3" style="background-color:lavender;">
    <div class="card" style="width: 18rem;">
    <hr>
    
    <div class="card-body">
    <h5 class="card-title"></h5>
    </div>

  <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>User name: </b> {{ Auth::user()->name }}</li>
    <li class="list-group-item"><b>Car: </b> {{$car->carname}}</li>
    <li class="list-group-item"><b>Brand: </b> {{$car->brand}}</li>
    <li class="list-group-item"><b>Model: </b> {{$car->model}}</li>
    <li class="list-group-item"><b>Color: </b> {{$car->color}}</li>
    <li class="list-group-item"><b>Year: </b> {{$car->year}}</li>

    <li class="list-group-item"><b>From: </b> {{$booking->from}}</li>
    <li class="list-group-item"><b>To: </b> {{$booking->to}}</li>
    <li class="list-group-item"><b>Days: </b> {{$booking->days}}</li>
    <li class="list-group-item"><b>Price: </b> {{$booking->totalamt}}</li>
  </ul>
  <div class="card-body">
  <a href="/view_book/{{$car->id}}"><button type="button" class="btn btn-primary">Book</button>
</a>
  </div>
</div>
    </div>
    @endforeach
    
  </div>
  </div>

</center>
</body>
</html>
