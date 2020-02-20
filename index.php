<html>
<body>
<!-- <p>Create Album<P>

<form action="album.php" method="get">
Album Name: <input type="text" name="name"><br>
<input  type="submit">
</form>

<p>Open Album<P>
<form action="display.php" method="get">
Album Name: <input type="text" name="name"><br>
<input  type="submit">
</form> -->

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<div class="page-header">
  <div class="jumbotron">
  <h1>Album Manager</h1>   

  </div>
  <p>by lynzil Z. Zynwinz</p> 

</div>

<!--  -->
<div class="form-horizontal">

<form action="bridge.php" >
<label class="control-label col-sm-2" for="submit">  Open Album</label>
  <input type="submit" class = btn-primary>
</form> 

<form action="create.php" >
<label class="control-label col-sm-2" for="submit">  Create Album</label>
<input  type="submit" class = btn-primary> 
</form> 

</div>
<!--  -->


</body>
</html>