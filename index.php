<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Bootstrap template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link href="css/style2.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Scroller styles -->
	<link rel="stylesheet" type="text/css" media="screen" href="css/als_demo.css" />
	
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.als-1.7.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() 
		{
			$("#lista2").als({
				visible_items: 2,
				scrolling_items: 1,
				orientation: "vertical",
				circular: "yes",
				autoscroll: "no",
				easing: "swing",
				start_from: 0
			});
			
		});
	</script>
		
  </head>
  <body>
    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-10">
            <img class="logo" src="img/logo-spgq.png"/>
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8" style="background-color:#d7083b; margin-top: 40px; margin-bottom:40px; height: 2px;"></div>
            </div>
            <p>Campagne publicitaire de valorisation du personnel professionnel du 
            gouvernement du Québec qui se déroule tout au long du mois de mai 2015.</p>
            <p>Le Syndicat de professionnels et professionnelles du gouvernement du Québec 
            (<b>SPGQ</b>) a réalisé une série de trois vidéos mettant en valeur différentes 
            catégories d’emplois du personnel professionnel de l’État, tant dans la 
            fonction publique que dans les secteurs parapublics.</p>
            <p>Réalisées sous forme d’entrevues et d’une durée variant de 1 à 2 minutes, ces capsules 
            permettent au public d’en savoir plus sur le rôle et l'engagement des professionnelles 
            et des professionnels de l’État québécois.</p>
          </div>
        </div>
        <div class="row" id="suiveznous" style="margin-top: 150px;">
          <div class="col-md-6"><b>SUIVEZ-NOUS</b></div>
        </div>
        <div class="row" id="suiveznous">
          <div class="col-lg-1 col-md-2 col-sm-1 col-xs-2"><a href="https://www.facebook.com/lespgq" target="blank"><img src="img/facebook.png"></a></div>
          <div class="col-lg-1 col-md-2 col-sm-1 col-xs-2"><a href="https://twitter.com/spgq" target="blank"><img src="img/twitter.png"></a></div>
          <div class="col-lg-1 col-md-2 col-sm-1 col-xs-2"><a href="https://plus.google.com/+SpgqQcCaquebec/posts" target="blank"><img src="img/google.png"></a></div>
          <div class="col-lg-1 col-md-2 col-sm-1 col-xs-2"><a href="https://www.youtube.com/user/SPGQinformation" target="blank"><img src="img/youtube.png"></a></div>
        </div>
      </div>
      <div class="col-md-4" style="background-color: #d7083b;">
		<section id="content">
			<div id="lista2" class="als-container">
				<span class="als-prev"><img src="img/thin_top_arrow_333.png" alt="prev" title="previous" /></span>
				<div class="als-viewport">
					<div class="als-wrapper">
						<div class="als-item"><img src="img/temoin_preview_1.jpg" alt="calculator" title="calculator" /></div>
						<div class="als-item"><img src="img/temoin_preview_2.jpg" alt="light bulb" title="light bulb" /></div>
						<div class="als-item"><img src="img/temoin_preview_3.jpg" alt="card" title="card" /></div>
						<div class="als-item"><img src="img/temoin_preview_1.jpg" alt="chess" title="chess" /></div>
						<div class="als-item"><img src="img/temoin_preview_2.jpg" alt="alarm clock" title="alarm clock" /></div>
						<div class="als-item"><img src="img/temoin_preview_3.jpg" alt="scissors" title="scissors" /></div>
					</div>
				</div>
				<span class="als-next"><img src="img/thin_bottom_arrow_333.png" alt="next" title="next" /></span>
			</div>
		</section>
	  </div>
	  <div class="col-md-4" style="background-color: #d7083b;">
        <ul>
          <li><a class="popup-youtube" href="https://www.youtube.com/watch?v=BgPv2fqDUuk">Yves Bédard</a></li>
          <li><a class="popup-youtube" href="https://www.youtube.com/watch?v=-pzv4nxj2b0">Sonia Tremblay</a></li>
          <li><a class="popup-youtube" href="https://www.youtube.com/watch?v=WNhec5-wpVU">Karine Gibson</a></li>
        </ul>
      </div>
	  <div class="clearfix"></div>
    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>