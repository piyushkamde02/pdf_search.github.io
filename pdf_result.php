<html>
<head>
	<title>Pdf search website</title>
	<meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
	<link type="text/css" rel="stylesheet" href="pdf_result.css">
</head>
<body>
  <div class="main">
  	<img src="bg.jpg" height="100%" width="100%">
	<div class="search_pdf">
		<div class="image">
			<img src="logo.jpg" height="135px" width="150px">
        </div>
        <div class="heading">
			<h1><center><br> Search Maker </center></h1>
	    </div>
	    <div class="nav">
	    	<?php
               $search = $_POST['search'];
	    	?>
            <form action="/pdf_search/pdf_result.php">
      		    <input type="text" name="keyword" value="<?php echo $search;?>">
      			<button type="submit"><img src="icon.jpg" height="21px" width="30px"></button>
      			<span id="result"></span>
    		</form>
        </div>
        <div class="left">
        	
        </div>
        <div class="right">
        	
        </div>
	</div>
	<div class="search_result">
       <h1></h1>
	</div>
  </div>
  
</body>
</html>