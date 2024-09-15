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
					<p>Vállalkozásomat 2011. évben alapítottam, magasépítési kivitelezési munkák végzésére. Kezdetben csak kisebb volumenű, főleg a lakossági igényeket kielégítő kőművesipari munkákat végeztünk, néhány fővel.A jó minőségű munkavégzésünknek köszönhetően a megbízások száma egyre nőtt, ami lehetővé tette az eszközállomány fejlesztését, és építőipari munkagépek beszerzését, sok esetben pályázati támogatással. Ezáltal a hatékonyságunk nagymértékben javult, így a településen és szűk vonzáskörzetében ismert és elismert, foglalkoztatott piaci szereplőkké váltunk.
A vállalkozásom mellett a kivitelezéi munkákhoz kapcsolódó ajánlati dokumentáció elkészítését, a projektek lebonyolítását betéti társaságom (Kissházép Bt.) nagy szakmai tapasztalattal rendelkező mérnök munkatársai (2 fő) végzik. Vállalkozásomban az irodai adminisztrációs feladatokat1 fő látja el. Irodánk jól felszerelt, informatikai eszközeink modernek, kiváló munkakörnyezet alapozza meg a hatékony munkavégzést.

Számos projektben generál kivitelezőként vettünk részt, amihez megbízható, szakmailag kimagasló, a környező település alvállalkozóit sikerült összekovácsolni, így még a nagyobb volumenű, komplex munkák sem jelentenek számunkra problémát. Erre kiváló példa a békésszentandrási Bordűr Wellness Hotel Superior és Szőnyegmúzeum kivitelezése.

A kivitelezéshez szükséges építőanyagok beszerzéséhez széles beszállítói bázist alakítottunk ki, biztosítva ezzel a piacon elérhető alacsonyabb árakat.  
.</p>
					<a href="#" class="btn">More</a>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-2 parallax-block" data-stellar-background-ratio="0.5">
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
	</div>
	<div class="full-width-container block-3">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Miért válasszon minket</span></h2>
					</header>
				</div>
				<div class="grid_4">
					<div class="grid_1 alpha"><span class="element bd-ra">1</span></div>
					<div class="grid_3">
						<p>Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed </p>
					</div>
				</div>
				<div class="grid_4">
					<div class="grid_1 alpha"><span class="element bd-ra">2</span></div>
					<div class="grid_3">
						<p>Kamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed </p>
					</div>
				</div>
				<div class="grid_4">
					<div class="grid_1 alpha"><span class="element bd-ra">3</span></div>
					<div class="grid_3">
						<p>Tamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci se </p>
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