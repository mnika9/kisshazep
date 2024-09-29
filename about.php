<?php include("base.php"); ?>
<body class="index-1">
<!--==============================header=================================-->
<?php include("header.php");?>

<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Rólunk</span></h2>
					</header>
				</div>
				<div class="grid_4">
					<div class="img_container"><img src="images/logo.png" alt="logo"></div>
				</div>
				<div class="grid_7 preffix_1">
					<p>A Kissházép Szolgáltató Betéti Társaság 2014-ben került megalapításra.
						A már egy évtizede sikeresen működő társaság fő profilja a lakó és nem lakó épületek építése,
						kivitelezése, meglévő ingatlanok felújítása, és átalakítása, illetve különböző gépi földmunkák
						végzése. A lakossági igényeket kielégítő kőművesipari munkák végzésén felül, más helyi
						gazdasági szereplők építőipari és ahhoz kapcsolódó megbízásait is vállaljuk a településen és
						annak vonzáskörzetében. A jó minőségű munkavégzésünknek köszönhetően a megbízások
						száma folyamatosan növekszik, és ezzel párhuzamosan a társaságunk profilja is bővül,
						színesedik. Az eszközállományunkat folyamatosan fejlesztjük, az építőipari munkagépeink
						skálája is bővül, korszerűsödik, amihez a Miniszterelnökség eszközfejlesztésre nyújtott
						támogatása is nagyban hozzájárult.</p>
					<!--<a href="#" class="btn">Szolgáltatások</a>-->
				</div>
			</div>
		</div>
	</div>

	<!-- MEGBÍZÓINK-->
	<!--<div class="full-width-container block-2 parallax-block" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Megbízóink</span></h2>
					</header>
				</div>
				<div class="grid_3">
					<article>
						<div class="img_container"><img src="images/index-1_img-2.jpg" alt="our team"></div>
						<h4>Mark Gret</h4>
						<p>Lamus at magna non derto merli seworet gertomin</p>
					</article>
				</div>
				<div class="grid_3">
					<article>
						<div class="img_container"><img src="images/index-1_img-3.jpg" alt="our team"></div>
						<h4>Irma Anderson</h4>
						<p>Lamus at magna non derto merli seworet gertomin</p>
					</article>
				</div>
				<div class="grid_3">
					<article>
						<div class="img_container"><img src="images/index-1_img-4.jpg" alt="our team"></div>
						<h4>Sam Wood</h4>
						<p>Lamus at magna non derto merli seworet gertomin</p>
					</article>
				</div>
				<div class="grid_3">
					<article>
						<div class="img_container"><img src="images/index-1_img-5.jpg" alt="our team"></div>
						<h4>Kevin Thomson</h4>
						<p>Lamus at magna non derto merli seworet gertomin</p>
					</article>
				</div>
			</div>
		</div>
	</div>-->
	<div class="full-width-container block-3">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2>Miért válasszon minket?</h2>
					</header>
				</div>
				<div class="grid_4">
					<div class="grid_1 alpha"><span class="element bd-ra">1</span></div>
					<div class="grid_3">
						<p>Partnereink és a BCP szerint is <span>megbízható cég vagyunk</span>.</p>
						<a href="images/bcp.jpg"><img src="images/bcp-big.jpg" alt="bvp_tanusitvany" title="BCP tanúsítvány"></a>
					</div>
				</div>
				<div class="grid_4">
				
					<div class="grid_1 alpha"><span class="element bd-ra">2</span></div>
					<div class="grid_3">
						<p><span>A megfelelő szakembereket </span>foglalkoztatjuk. <span>Eszközparkunk felszerelt,</span> modern és megbízható gépekkel dolgozunk</p>
					</div>
				</div>
				<div class="grid_4">
					<div class="grid_1 alpha"><span class="element bd-ra">3</span></div>
					<div class="grid_3">
						<p><span>Szakmai tapasztalatunk</span> közel 15 éves, többféle sikeres projektet fejeztünk be</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--=======footer=================================-->
<?php include("footer.php");?>
<script>
	$(document).ready(function() { 
			if ($('html').hasClass('desktop')) {
				$.stellar({
					horizontalScrolling: false,
					verticalOffset: 20,
					resposive: true,
					hideDistantElements: true,
				});
			}
		});	
</script>
</body>
</html>