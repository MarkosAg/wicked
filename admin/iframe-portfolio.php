<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wicked Wasted</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<style type="text/css">
		.div {
	    width: 100%;
	    height: 25px;
	    background-color: white;
	    box-shadow: 1px 2px 3px #ededed;
	    border: 1px solid #d8d8d8;
	}
	input[type='file'] {
	    width:20%;
	    height:25px;
	    opacity:0;
	}
	#val {
	    height:25px;
	    width:80%;
	    float:left;
	    font-size:13px;
	    line-height: 25px;
	    text-indent: 10px;
	    pointer-events: none;
	    border:black 1px solid;
	}
	.button {
		width:20%;
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
	    background-color: gray;
	}
	.txt-boxname{
		margin-top:50px; width:80%; border:1px solid black;
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
</style>
<form id="upload" method="post" action="upload.php" id="form" enctype="multipart/form-data">
	<div id="div">
		<input type='file' name="file" id="img-input"> <span id='val'></span>
 		<span class='button' id="button">Select File</span>
 		<span class="button" style="margin-top: 50px;">Title</span>
 		<input type="text" name="nombre-img" id="nombre-img" style="padding-left:10px" class="txt-boxname">
		<input type="submit" name="enviar" value="Enviar" id="enviarP" style="margin-top:50px;" class="btn btn-default pull-right"/>
		<hr style="border-bottom:1px solid black; width: 100%; padding-top:50px;">
	</div>
</form>
<script>
		$('body').on('click', '#button', function() {
   		 $("input[type='file']").trigger('click');
	});

	$("input[type='file']").change(function () {
	    $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''));
	});
</script>