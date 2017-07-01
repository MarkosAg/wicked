<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
	<div class="col-xs-8 col-md-8 col-sm-8 col-lg-8" style="margin:0 auto; float:none;">
		<h1 style="color: black; padding:25px 0px;">New email</h1>
		<form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
			<div id="div">
		 		<span class="button" style="margin-top: 50px;">Subject</span>
		 		<input type="text" name="subject" id="titulo" style="padding-left:10px" class="txt-boxname"/>
		 		<span class="button" style="margin-top: 50px;">Content</span>
		 		<textarea class="txtarea-input" name="content" id="content"></textarea>
				<input type="button" name="enviarL" id="enviarC" value="Enviar" style="margin:50px 0px;" class="btn btn-default pull-right"/>
			</div>
		</form>
		<div class="alert alert-success" id="deletesuccess" role="alert" style="display:none;">The email was send successfully.</div>
	</div>
</div>