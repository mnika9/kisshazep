<?php include("base.php") ?>
<body class="index-4">
<!--==============================header=================================-->
<?php include("header.php") ?>

<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Címünk</span></h2>
					</header>
					<!--MAP-->
						<div class="map-container"> 
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6122.589372661237!2d20.48573236949739!3d46.87707580205813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4746a9f34cdde553%3A0x24ecc0bf6e3f703!2zQsOpa8Opc3N6ZW50YW5kcsOhcywgV2Vzc2Vsw6lueWkgdS4gOCwgNTU2MQ!5e0!3m2!1shu!2shu!4v1727243708719!5m2!1shu!2shu"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div> 
						<!-- END MAP -->
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<!--
				<div class="grid_5">
					<form id="contact-form">
						<div class="contact-form-loader"></div>
							<header>
								<h2><span>Lépjen velünk kapcsolatba</span></h2>
							</header>
							<fieldset>
									<label class="name">
										<span class="text">Név:</span>
										<input type="text" name="name" placeholder="" value="" data-constraints="@Required @JustLetters" />
											<span class="empty-message">*Kitöltése kötelező.</span>
											<span class="error-message">*Kitöltése kötelező.</span>
									</label>
									<label class="email">
										<span class="text">E-mail:</span>
										<input type="text" name="email" placeholder="" value="" data-constraints="@Required @Email" />
										<span class="empty-message">*Kitöltése kötelező.</span>
										<span class="error-message">*Rossz az email cím.</span>
									</label>
									<label class="phone">
										<span class="text">Tárgy:</span>
										<input type="text" name="phone" placeholder="" value="" data-constraints="@Required @JustNumbers" />
										<span class="empty-message">*Kitöltése kötelező.</span>
										<span class="error-message">*Rossz a telefonszám.</span>
									</label>
									<label class="message">
										<span class="text">Üzenet:</span>
										<textarea name="message" placeholder="" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
										<span class="empty-message">*Kitöltése kötelező.</span>
										<span class="error-message">*Üzenete túl rövid.</span>
									</label>
								<div class="cont_btn">
									<a href="#" data-type="reset" class="btn">Törlés</a>
									<a href="#" data-type="submit" class="btn">Küldés</a>
								</div>
						</fieldset> 
						<div class="modal fade response-message">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title">Modal title</h4>
									</div>
									<div class="modal-body">
										Az üzeneted elküldve! Hamarosan felvesszük veled a kapcsolatot
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>-->
				<div class="row">
					<div class="grid_6 preffix_1">
						<div>
							<header>
								<h2><span>Céginformációk</span></h2>
							</header>
								<h4>KISSHÁZÉP Szolgáltató Betéti Társaság</h4>
								<ul>
									<li>Adószám: 24920469-2-04</li>
									<li>Cégjegyzékszám: 04-06-009155 </li>
									<li>Címünk: </b>5561 Békésszentandrás, <br>Wesselényi utca 8.</li>
								<li>Telefonszám:</b><a href="tel:+36704247437"> +36 70 424 7437 </a></li>
								<li>Email cím:</b> <a href="mailto:kisshazep@gmail.com" class="mail">kisshazep@gmail.com</a></li>
								</ul>			
						</div>
					</div>
					<div>
						<img id="lentilogo" src="images/logo.png" alt="logo" style="width: 250px
							">
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!--=======footer=================================-->
<?php include("footer.php") ?>

</body>
</html>