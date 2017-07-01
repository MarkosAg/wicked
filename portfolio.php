<div class="container-body padding-margin-cero col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php 
		require_once("connection.php");
		$rows = $mysqli->query('SELECT * FROM sis_images WHERE status = 1 ORDER BY uploadDate DESC');
		
		$contador = 1;
		foreach($rows as $row){
			echo'
				<div class="container-imgs col-xs-12 col-sm-12 col-md-6 col-lg-6 padding-margin-cero">
					<img src="admin/upload/'.$row['nameImage'].'" class="img-center-text each-img-portfolio" style="display:block; float:none; margin:0 auto;"/>
					<div class="img-center-text" style="display:block;">
					<h5 class="display-block text-center" style="font-size:0.78em;">'.$row['titleImage'].'</h5>
						<h5 class="display-block text-center" style="font-size:0.78em; line-height:0px;">'.date("M jS, Y", strtotime($row['uploadDate'])).'</h5>
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