<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
	<div class="col-xs-8 col-md-8 col-sm-8 col-lg-8" style="margin:0 auto; float:none;">
		<h1 style="color: black; padding:25px 0px;">New letter</h1>
		<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
			<div id="div">
		 		<span class="button" style="margin-top: 50px;">Title</span>
		 		<input type="text" name="titulo" id="titulo" style="padding-left:10px" class="txt-boxname"/>
		 		<span class="button" style="margin-top: 50px;">Content</span>
		 		<textarea class="txtarea-input" name="content" id="content"></textarea>
		 		<span class="button" style="margin-top: 50px;">Autor</span>
		 		<input type="text" name="autor" id="autor" style="padding-left:10px;" class="txt-boxname"/>
				<input type="button" name="enviarL" id="enviarL" value="Enviar" style="margin:50px 0px;" class="btn btn-default pull-right"/>
			</div>
		</form>
		<div class="alert alert-success" id="deletesuccess" role="alert" style="display:none;">The information was saved successfully.</div>
		<hr style="border-bottom:1px solid black; width: 100%; ">	
	</div>
</div>
<div class="container-body padding-margin-cero col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<?php 
		require_once("../connection.php");
		$rows = $mysqli->query('SELECT * FROM dat_letters WHERE status = 1 ORDER BY createdDate DESC');
		foreach($rows as $row){
			echo'
				<div class="container-letters col-xs-8 col-sm-8 col-md-8 col-lg-8 padding-margin-cero">
					<h4 class="title-letter"><b>'.$row['titleLetter'].'</b><span class="dateTitle">'.date("M jS, Y", strtotime($row['createdDate'])).'</span></h4><a href="#" id="id'.$row["idLetter"].'" class="fa fa-times deleterowletter" style="position:absolute; right:25px; top:40px; color:black"aria-hidden="true"></a>
					<input type="hidden" value="'.$row["idLetter"].'" class="id'.$row["idLetter"].'1">
					<p class="text-justify">'.$row['messageLetter'].'</p>
					<span class="by-letter" style="font-size:0.8em;">BY '.strtoupper($row['senderLetter']).'</span>
				</div>'
			;
		}
	?>
</div>