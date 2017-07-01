<!DOCTYPE html>
<html lang="en" >

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wicked Wasted</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="icon" href="img/iconh.png">
</head>

<body class="font-helvetica">
    <style>
    	/*GENERIC THINGS*/
    	*{
    		padding:0;
    		margin:0;
    	}
    	@font-face{
    		font-family: Helvetica;
    		src: url("fonts/helvetica.ttf");
    	}
    	.font-helvetica{
    		font-family: Helvetica;
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
    	.container{
	    	border:solid 1px #c8c3de;
	    }
	    body {
		   background-image: url("img/bg_1.png");
	       background-repeat: repeat;
		   background-width: 50%;
		   background-size: 400px;
	    }

	    #datacontainer{
	    	min-height:350px;
	    }
	    /*LETTERS*/
	    .title-letter{
	    	color:#000717;
	    	padding-bottom: 10px;
	    }
	    .dateTitle{
	    	font-size:0.48em;
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
	    .each-img-portfolio{
	    	height: 200px;
	    	margin:15px 30px;
	    }
.container-imgs{
margin-bottom:12px;
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
		<div>
			<div id="datacontainer">
			<?php require_once("portfolio.php"); ?></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding-margin-cero">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="height:100px;">
				<h5 style="position:absolute; bottom:0; right:35px;">Copyright Wicked Wasted<i class="fa fa-copyright" aria-hidden="true"></i> 2016</h5>
			</div>
				
		</div>
		</div>
		</div>
	</div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

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
	$('nav li a').click(function() {
      $('.collapse').collapse('hide');
    });
</script>