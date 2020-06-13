<html>
<head>
<title>
Addition of cars
</title>
</head>
<body style="background-color:#dab3ff;">
<center>
<form enctype="multipart/form-data" action="add_car" method="post">
@csrf
<h1> ADD CAR </h1></br>
<label class="control-label">Enter the name:<span class="required"></label>
<input type="text" name="carname" placeholder="enter name">
<br><br>
<label class="control-label">Enter the brand:<span class="required"></label>
<input type="text" name="brand" placeholder="enter brand">
<br><br>
<label class="control-label">Enter the model:<span class="required"></label>
<input type="text" name="model" placeholder="enter model">
<br><br>
<label class="control-label">Enter the color:<span class="required"></label>
<input type="text" name="color" placeholder="enter color">
<br><br>
<label class="control-label">Enter the year:<span class="required"></label>
<input type="text" name="year" placeholder="enter year">
<br><br>
<input data-preview="#preview" name="input_img" type="file" id="imageInput">

<input type="submit" value="SUBMIT">
</center>

</body>
</html>