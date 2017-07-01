<!DOCTYPE html>
<html lang="en" >

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
<link rel="icon" href="../img/iconh.png">
</head>

<body class="font-helvetica">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
    	/*GENERIC THINGS*/
    	*{
    		padding:0;
    		margin:0;
    	}
    	@font-face{
    		font-family: Helvetica;
    		src: url("../fonts/helvetica.ttf");
    	}
    	.font-helvetica{
    		font-family: Helvetica !important;
    	}
    	.padding-margin-cero{
    		padding:0;
    		margin:0;
    	}
	    .text-justify{
	    	text-align: justify;
	    }
	    .display-inlineblock{
	    	display:inline-block;
	    }
	    .display-block{
	    	display:block;
	    }
    	/*BODY*/
	    body {
		   background-image: url("../img/bg_1.png");
	       background-repeat: repeat;
		   background-width: 50%;
		   background-size: 400px;
	    }
	    .container{
	    	border:solid 1px #c8c3de;
	    }
	    #datacontainer{
	    	min-height:400px;
	    }
	    /*LETTERS*/
	    .title-letter{
	    	color:#000717;
	    	padding-bottom: 10px;
	    }
	    .dateTitle{
	    	font-size:0.5em;
	    	padding-left:30px;
	    }
	    .container-letters{
	    	margin:0px auto;
	    	padding-top:15px;
	    	padding-bottom:15px;
	    	float:none;
	    }
	    .by-letter{
	    	color: #c8c3de;
	    }
	    /*PORTFOLIO*/
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
	    background-color: #c8c3de;
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
	.txtarea-input{
		width:100%;
		height:200px;
		border:1px solid black;
		padding-left:10px;
		resize: none;
	}
	/*PORTFOLIO*/
	    .each-img-portfolio{
	    	height: 200px;
	    	margin:15px 30px;
	    }
	    @media screen and (max-width: 750px){
	    	#header-hide{
	    		display:none;
	    	}
	    	.img-center-text{
	    		display:block;
	    		float:none;
	    		margin:0 auto;
	    	}
	    }
    </style>
	<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 container" style="margin:0 auto; padding:0px !important; float: none; background: white !important;">
		<?php require_once("header.php"); ?>
		<div id="datacontainer"><div id="datacontainer">
			
			<?php require_once("portfolio.php");?></div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-margin-cero">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:100px;">
				<h5 style="position:absolute; bottom:0; right:35px;">Copyright Wicked Wasted<i class="fa fa-copyright" aria-hidden="true"></i> 2016</h5>
			</div>
				
		</div>
		</div>
		
	</div>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
<script type="text/javascript">
	$('#letters,#portfolio, #contact').click(function(){
		$('#datacontainer').fadeOut(500,function(){
			$(this).empty();
		});
	});
	$('#letters').click(function(){
		$.get("letters.php").done(function(code){
			$('#datacontainer').fadeIn(500,function(){
				$(this).append(code);
			});
		});
	});
	$('#portfolio').click(function(){
		$.get("portfolio.php").done(function(code){
			$('#datacontainer').fadeIn(500,function(){
				$(this).append(code);
			});
		});
	});
	$('#contact').click(function(){
		$.get("contact.php").done(function(code){
			$('#datacontainer').fadeIn(500,function(){
				$(this).append(code);
			});
		});
	});


	$('body').on('click', '#enviarC', function() {
	   	$.ajax({
			type:"POST",
			url:'uploadcontact.php',
			data: {'subject': $('#subject').val(), 'content': $('#content').val()},
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

	$('body').on('click', '#enviarL', function() {
	   	$.ajax({
			type:"POST",
			url:'uploadletters.php',
			data: {'titulo': $('#titulo').val(), 'content': $('#content').val(), 'autor': $('#autor').val()},
			success: function(data){ 
				$('form')[0].reset();
				$("#deletesuccess").fadeIn();
			 	setTimeout(function() {
				    $('#deletesuccess').fadeOut();
				}, 4000);
			 	console.log(data); 
			}
		});
	});
//data: {'img-input': $('#img-input').val(), 'nombre-img': $('#nombre-img').val()},
	$('body').on('submit', '#enviarP', function(e){
		var formObj = $(this);
	    var formURL = formObj.attr("action");
	    var formData = new FormData(this);
		$.ajax({
			type:"POST",
			url:'upload.php',
			data: formData,
			mimeType:"multipart/form-data",
		    contentType: false,
	        cache: false,
	        processData:false,
			success: function(data){ 
				alert(data);
				$("#deletesuccess").fadeIn();
			 	setTimeout(function() {
				    $('#deletesuccess').fadeOut();
				}, 4000);
				console.log(data); 
			}
		});
		return false;
		e.preventDefault();
		e.bind();
	});
	$('body').on('click', '.deleterowimg', function(event){
		var id = event.target.id;
		id = $("."+id+"1").val();
		if (confirm('Are you sure you want to delete this?')) {
			$.ajax({
				type:"POST",
				url:'deleteRow.php',
				data: {id:id, type:"img"},
				success: function(data){ 
					console.log(data); 
				}
			});
		}
	});
	$('body').on('click', '.deleterowletter', function(e){
		var id = e.target.id;
		id = $("."+id+"1").val();
		if (confirm('Are you sure you want to delete this?')) {
			$.ajax({
				type:"POST",
				url:'deleteRow.php',
				data: {id:id, type:"letter"},
				success: function(data){ 
					console.log(data); 
				}
			});
			e.preventDefault(); //Prevent Default action. 
   			 e.unbind();
		}
	});
	$('nav li a').click(function() {
      $('.collapse').collapse('hide');
    });
</script>