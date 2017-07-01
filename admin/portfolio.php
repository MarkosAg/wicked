<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
	<div class="col-xs-8 col-md-8 col-sm-8 col-lg-8" style="margin:0 auto; float:none;">
		<h1 style="color: black; padding:25px 0px;">New image</h1>
		<iframe src="iframe-portfolio.php" frameborder="0" style="width:100%; height:auto; height:300px;"></iframe>
		<div class="alert alert-success" id="deletesuccess" role="alert" style="display:none;">The information was saved successfully.</div>
	</div>
</div>
<div class="container-body padding-margin-cero col-xs-12 col-sm-12 col-md-12 col-lg-12">
	
	<?php 
		require_once("../connection.php");
		$rows = $mysqli->query('SELECT * FROM sis_images  WHERE status = 1 ORDER BY uploadDate DESC');
		
		$contador = 1;
		foreach($rows as $row){
			echo'
				<div class="container-imgs col-xs-12 col-sm-12 col-md-6 col-lg-6 padding-margin-cero">
					<img src="upload/'.$row['nameImage'].'" class="img-center-text each-img-portfolio" style="display:block; float:none; margin:0 auto;"/>
					<div class="img-center-text" style="display:block;">
						<input type="hidden" value="'.$row["idImage"].'" class="id'.$row["idImage"].'1">
						<h4 class="text-center display-block" style="font-size:0.78em;">'.$row['titleImage'].'</h4><a href="#" id="id'.$row["idImage"].'" class="fa fa-times deleterowimg" style="position:absolute; right:25px; top:40px; color:black"aria-hidden="true"></a>
						<h4 class="display-block text-center" style="font-size:0.78em; line-height:0px;"> '.date("M jS, Y", strtotime($row['uploadDate'])).'</h4>
					</div>
				</div>'
			;

			
			$contador++;
			if($contador >= 3){
				echo '</div>';
				$contador = 1;
				echo '<div class="container-body padding-margin-cero col-xs-12 col-sm-12 col-md-12 col-lg-12">';
			}
		}
		if($contador == 2)
			echo '</div>';
	?>
</div>