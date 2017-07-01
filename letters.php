<div class="container-body padding-margin-cero col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php 
		require_once("connection.php");
		$rows = $mysqli->query('SELECT * FROM dat_letters WHERE status = 1 ORDER BY createdDate DESC');
		foreach($rows as $row){
			echo'
				<div class="container-letters col-xs-8 col-sm-8 col-md-8 col-lg-8 padding-margin-cero">
					<h4 class="title-letter"><b>'.$row['titleLetter'].'</b><span class="dateTitle pull-right">'.date("M jS, Y", strtotime($row['createdDate'])).'</span></h4>
					<p class="text-justify">'.$row['messageLetter'].'</p>
					<span class="by-letter" style="font-size:0.8em;">BY '.strtoupper($row['senderLetter']).'</span>
				</div>'
			;
		}
	?>
</div>