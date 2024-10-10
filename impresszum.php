<?php include("base.php"); ?>
<body class="index-6">
<!--==============================header=================================-->
<?php include("header.php");?>

<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Impresszum</span></h2>
					</header>
				</div>
				<div class="grid_12">
				<h3>Vállalkozás adatai:</h3>
				<p><span>Cégnév:</span> Kissházép Szolgáltató Betéti Társaság</p>
                       <p><span>Székhely: </span>5561 Békésszentandrás, Wesselényi utca 8</p>
                       <p><span>Postacím: </span>5561 Békésszentandrás, Wesselényi utca 8</p>
                       <p><span>Adószám: </span>24920469-2-04</p>
                       <p><span>Cégjegyzékszám: </span>04-06-009155</p>
						<p><span>Telefonszám: </span>+36 70 424-7437</p>
						<p><span>Bankszámlaszáma: </span>K&H Bank Zrt. 813 Szarvas 10408131-50526884-72661000</p>
						<p><span>Email cím: </span>kisshazep@gmail.com</p>
					<!--<a href="#" class="btn">Szolgáltatások</a>-->
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="grid_12">
				<h3>Tárhelyszolgáltató adatai:</h3>
						<p><span>Cégnév: </span>Rackhost Zrt.</p>
                        <p><span>Székhely: </span>6722 Szeged, Tisza Lajos körút 41.</p>
                        <p><span>Adószám: </span>25333572-2-06</p>
                        <p><span>Cégjegyzékszám: </span>06-10-000489</p>
						<p><span>Telefonszám: </span>+36 1 445 1200</p>
						<p><span>Bankszámlaszáma: </span>Cib Bank:	10700433-67330115-51100005</p>
						<p><span>Email cím: </span>info@rackhost.hu</p>
						<p><span>Nyilvántartásba vevő cégbíróság: </span>Szegedi Törvényszék Cégbírósága</p>
						<p><span>Illetékes kamara: </span>Csongrád-Csanád Vármegyei Kereskedelmi és Iparkamara</p>
					<!--<a href="#" class="btn">Szolgáltatások</a>-->
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