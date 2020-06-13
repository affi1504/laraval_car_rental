<html>
<head>
<title>
View bookings
</title>
</head>
<body style="background-color:#dab3ff;">
<center>
<form action="view_book" method="post">
@csrf
<h1> BOOKING </h1>

<input type="hidden" value="{{$user_id}}" name="userid">
<br><br>

<input type="hidden" value="{{$cars->id}}" name="vehicleid">
<br><br>
<label class="control-label">FROM:<span class="required"></label>
<input type="date" name="from">
<br><br>
<label class="control-label">TO:<span class="required"></label>
<input type="date" name="to">
<br><br>

<input type="hidden" name="totalamt">
<br><br>
<button type="submit" class="btn btn-primary">PROCEED</button>
</form>
</center>

</body>
</html>