<?php
	$id = $_GET['id'];

	$names = array("Hoodies", "Crewnecks", "T-shirts" );
	$prices = array(32,27,20);
	$PayPalValue = array("4KPATK8YH578C","ZWJ47QUW6SLNU","PXURG4WLCZ85S");
	if($id == 2){
		$options = "<option disabled>Black - SOLD OUT</option><option >Grey</option><option disabled>Maroon - SOLD OUT</option>";
	}elseif($id == 1){
		$options = "<option disabled>Black - SOLD OUT</option><option disabled>Grey - SOLD OUT</option><option >Maroon</option>";	
	}elseif($id == 3){
		$options = "<option >Black</option><option disabled>Grey - SOLD OUT</option><option disabled>Maroon - SOLD OUT</option>";	
	}

?>

<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery-2.2.0.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<title>Royale Apparel - Products</title>
	</head>
	
	<body>
		<nav class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="navbar-header">
        			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
        				<span class="sr-only">Toggle navigation</span>
       					<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
      				</button>
      				<a class="navbar-brand" href="#">Royale Apparel</a>
    			</div>

    			<div class="collapse navbar-collapse" id="navbar-collapse-1">
      				<ul class="nav navbar-nav navbar-right">
        				<li><a href="index.html">Home</a></li>
        				<li class="active"><a href="products.html">Products</a></li>
        				<li><a href="about.html">About</a></li>
      				</ul>
    			</div>
			</div>
		</nav>
		<div class="container">
			<div class="jumbotron">
				<center><h1><?php echo $names[$id-1];?></h1></center>
				<div class="row">
					<div class="col-md-6">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/products/<?php echo $id; ?>.JPG" alt="Chania">
    </div>

    <div class="item">
      <img src="images/products/<?php echo $id . "-back"; ?>.jpg" onError="this.src='images/products/<?php echo $id; ?>.JPG'">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
						<!--<img src="images/products/<?php echo $id; ?>.JPG" alt="" width="100%">-->
					</div>
					<div class="col-md-6">
						<p>Price: <?php echo $prices[$id-1]; ?> USD</p>
						<form name="_xclick" action="https://www.paypal.com/us/cgi-bin/webscr">
							<input type="hidden" name="cmd" value="_s-xclick">
							<input type="hidden" name="id" value="<?php echo $id;?>"></input>
							<input type="hidden" name="hosted_button_id" value="<?php echo $PayPalValue[$id - 1]?>">
						<input type="hidden" name="on0" value="Size">Size
							<select name="os0" id="size" class="form-control">
								<option>Small</option><option>Medium</option><option>Large</option> <option disabled="disabled">Extra Large - SOLD OUT</option>
							</select>
						<br><br>
						<!--input type="hidden" name="on1" value="Color">
						Color:
							<select name="os1" id="color" class="form-control">
								<?php echo $options;?>
							</select-->
						<br><br>
							<a href="http://goo.gl/forms/BnlrJdZq1l" value="pickup" class="btn btn-success">Pick up/pay in person (MSJHS)</a>
						<br><br>
							<button type="submit" name="btn" value="paypal" class="btn btn-info">Pay w/ PayPal</button>
						</form>

					</div>
				</div>
			</div>
		</div>
	</body>
</html>