<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Content Page</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
  <body>
	<?php include 'menu.php';?>
	
	<div class="container-fluid mx-auto w-75">
	<?php
		include_once("db_connect.php");
		// get the id from the content page link 
		$idFromPage = $_GET["id"];
		$sqlQuery = "SELECT Description, Answer from content WHERE ID =$idFromPage;";
		$resultSet = mysqli_query($connection, $sqlQuery) or die("database error:". mysqli_error($connection));
	?>
	<table class="table m-1">
	<thead>
		<tr>
			<th>Description</th>
			<th>Answer</th>
																
		</tr>
	</thead>
	<tbody>
		<?php while( $record = mysqli_fetch_assoc($resultSet) ) { ?>
		   <tr>
		   <td><?php echo $record ['Description']; ?></td>
		   <td><?php echo $record ['Answer']; ?>
		   </td>
		  		   				   				  
		   </tr>
		<?php } ?>
	</tbody>
</table>
	</div>	
	
	<?php mysqli_close($connection); ?>
  </body>
  
</html>