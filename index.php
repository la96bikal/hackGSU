<?php 
	include('setup.php'); 
  
 

?>
<!DOCTYPE html>
<html>
	<head>
			<title><?php echo $page_title.' | '.$site_title;  ?></title>
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
             
			<?php include('css.php'); ?>
			<?php include('js.php'); ?>


			<!--Latest compiled and minified bootstrap JavaScript-->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

						<!--Set Footer's position-->
			<style>
					html {
				  position: relative;
				  min-height: 100%;
				}
				body {
				  margin-bottom: 60px; /* Margin bottom by footer height */
				}

				#sasa{
					margin-left:450px;
					margin-top: 450px;

				}
				.footer {
				  position: absolute;
				  bottom: 0;
				  width: 100%;
				  height: 60px; /* Set the fixed height of the footer here */
				  line-height: 60px; /* Vertically center the text there */
				  background-color: #f5f5f5;
				  background-image: url("Anthem.png");
				  
				   background-repeat: no-repeat;
				  
				  background-position: right;


				}
				.layers-link{
					background-image: url("Anthem.png");

				}


				
				/* Custom page CSS
				-------------------------------------------------- */
				/* Not required for template or sticky footer method. */

				.container {
				  width: auto;
				  max-width: 680px;
				  padding: 0 15px;
				}
			</style>



	</head>
	
		
	<body>
	

						<!--NAVIGATION AREA-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light" >
			  <a class="navbar-brand" href="index.php?page=1">Home</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link"  href="index.php?page=2">News <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="index.php?page=3">Notifications</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Menu
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="index.php?page=5">Playlist</a>
			          <a class="dropdown-item" href="index.php?page=6">Chat Room</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="index.php?page=7">Play Game</a>
			        </div>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="index.php?page=4">Forum</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form>
			  </div>
			</nav>

<?php
 if($_GET['page']==1)
  {
  include ('home.html');
  }
?>


			
			




			<!--FOOTER AREA-->
			<footer class="footer">
            <div class="container">
                <p class="text-muted">COMPANY CONFIDENTIAL | FOR INTERNAL USE ONLY | DO NOT COPY
                	
           
        	</div>
        	</footer>	
        	 
			
	</body>


</html>