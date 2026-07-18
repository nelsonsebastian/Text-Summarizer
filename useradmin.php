<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=No">
    <meta name="description" content="Start your development with Rubic landing page.">
    <meta name="author" content="Devcrud">
    <title>Rubic Landing page | Free Bootstrap 4.1 landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Rubic main styles -->
	<link rel="stylesheet" href="assets/css/rubic.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" ><strong class="text-primary">RU</strong><span class="text-light">BIC</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                     <li class="nav-item"> <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="useradmin.php">Users</a>  </li> 
                    
					 <li class="nav-item">
                        <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="feedbackadmin.php">Feedback</a>
                    </li>
					 <li class="nav-item">
					
                        <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="index.php">Logout</a>
                    </li>
					 
                </ul>
            </div>
        </div>
    </nav>
	
	<section class="section" id="contact" style="min-height:700px;">
        <div class="container ">

		
		<h6 class="display-4 has-line">Users List</h6>
					

			<table class='table'>
			<tr><th>ID</th><th>NAME</th> <th>EMAIL</th></tr>

				<?php
				session_start();
				include('connection.php');
				$j=1;
				$res=mysqli_query($con,"SELECT * FROM reg");
				while($row=mysqli_fetch_array($res))
				{
					echo"<tr>
					<td>$j</td>
					<td>$row[name]</td>
					<td>$row[email]</td>
				
					</tr>";
					$j++;
				}

				?>


			</table>
		
			
        </div>
    </section>
    
	<?php
	include("footer.php");
	?>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Rubic js -->
    <script src="assets/js/rubic.js"></script>

</body>
</html>
