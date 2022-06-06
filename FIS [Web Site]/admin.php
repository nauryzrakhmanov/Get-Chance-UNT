<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="row justify-content-center">
<form action="process.php" method="POST">
<div class="form-group"> 
<label>Name of university</label>
<input type="text" name="name" class="form-control" >
</div> 
<div class="form-group"> 
	<label>information about university</label>
<input type="text" name="information" class="form-control" >
</div> 
<div class="form-group"> 
	<label>Subject</label>
<input type="text" name="subject" class="form-control" >
</div> 
<div class="form-group"> 
	<label>Minimum score </label>
<input type="text" name="minscore" class="form-control">
</div> 
<div class="form-group"> 
	<button type="submit" name="save">Save</button> 
</div>
</form> 
</div>	
</body>
</html>