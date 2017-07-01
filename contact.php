<div class="container-body padding-margin-cero col-xs-12 col-sm-12 col-md-12 col-lg-12 font-helvetica">
	<div style="display: block;" class="text-center"><h2>Hello, reach me at</h2><div>
	<div style="display: block;"><b class="fa fa-instagram" aria-hidden="true" style="font-size:2em; padding:0 5px; margin:0 auto; float:none;"></b><a href="https://www.instagram.com/mss.frrr/" style="list-style:none; color:black;">mss.frrr</a><div>
	<div style="display: block;"><i class="fa fa-envelope-o" aria-hidden="true" style="font-size:2em; padding:0 5px; margin:0 auto; float:none;"></i><a href="mailto:fernanda.gb90@gmail.com" style="list-style:none; color:black;">fernanda.gb90@gmail.com</a><div>
	<div style="display: block;" class="text-center"><h2>4 collabs and everything</h2><div>

	<div style="display: block;" class="text-center"><h2>P.D send nudes</h2><div>
</div>
<div class="col-xs-12 col-md-12 col-sm-12 col-lg-12">
	<div class="col-xs-8 col-md-8 col-sm-8 col-lg-8" style="margin:0 auto; float:none;">
		<form id="upload" method="post" enctype="multipart/form-data">
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
<style>
	.button {
		width:25%;
text-align:center;
	    cursor: pointer;
	    display: block;
	    background-color: black;
	    height:25px;
	    color: white;
	    float:right;
	    font-size: 11px;
	    line-height:25px;
	    text-align: center;
	    -webkit-transition: 500ms all;
	    -moz-transition: 500ms all;
	    transition: 500ms all;
	}

	.button:hover {
	    background-color: #c8c3de;
	}
	.txt-boxname{
		margin-top:50px; width:75%; border:1px solid black;
		height:25px;
	}
	.btn-enviar{
		margin-top:50px; background-color: black;
		-webkit-transition: 500ms all;
	    -moz-transition: 500ms all;
	    transition: 500ms all;
	    color:white;
	}
	.btn-enviar:hover{
		background-color: gray;
		color:white;
	}
	.txtarea-input{
		width:100%;
		height:200px;
		border:1px solid black;
		padding-left:10px;
		resize: none;
	}
</style>
<script>
$('body').on('click', '#enviarC', function() {
	   	$.ajax({
			type:"POST",
			url:'admin/uploadmail.php',
			data: {'subject': $('#titulo').val(), 'content': $('#content').val()},
			success: function(data){
				$('form')[0].reset();
				$("#deletesuccess").fadeIn();
			 	setTimeout(function() {
				    $('#deletesuccess').fadeOut();
				}, 4000);
			 	console.log( data ); 
			}
		});
	});
</script>