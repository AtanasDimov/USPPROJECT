<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Лукс Каруци</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer="defer"></script>
	<script src="scripts.js" defer="defer"></script>
</head>
<body>
	<?php
	
	session_start();
	if (!isset($_SESSION['username'])) {

		header('Location: admin.php');
		exit();
	}

	?>
	
	<header class="header">
		<div class="shell">
			<a href="home.php" class="logo">
				<img src="images/logo.png" alt="Lux Karuci">
			</a>
		</div>
	</header>

	<a href="add.php" class="trigger">
		<img src="images/add.svg" alt="add" class="trigger-add">
	</a>

	<section class="section-remove-form">
		<div class="section__title">
			<div class="shell">
				<h1>Изтриване</h1>
			</div>
		</div>

		<form action="#" method= "post" class="form form--delete">
			<div class="shell">
				<div class="section__main">
					<div class="form__row">
						<div class="form__col">
							<div class="form__select">
								<select name="make-delete" id="make-delete" required>
									<option value="" hidden selected disabled>Марка</option>
									<option value="bmw">BMW</option>
									<option value="audi">Audi</option>
									<option value="marcedes">Mercedes</option>
								</select>
							</div>
						</div>

						<div class="form__col">
							<input type="text" name="model-delete" id="model-delete" placeholder="Модел">
						</div>
					</div>

					<div class="form__actions">
						<input type="submit" name="submit-remove" id="submit-remove" value="Търси" class="btn">
					</div>

					<ul class="section__decoration">
						<li>
							<img src="images/circle.png" alt="circle">
						</li>

						<li>
							<img src="images/circle.png" alt="circle">
						</li>

						<li>
							<img src="images/circle.png" alt="circle">
						</li>
					</ul>
				</div>
			</div>
		</form>
	</section>

	<section class="section-del-results">
		<div class="shell">
		<h2>Резултат</h2>

			<ul class="section__results">
			<?php
			require "display-remove.php";
			
			?>
			</ul>
		</div>
	</section>

	<footer class="footer">
		<div class="shell">
			<div class="footer__inner">
				<div class="footer__contacts">
					<a href="home.html" class="logo logo--small">
						<img src="images/logo.png" alt="lux karuci">
					</a>

					<ul class="contacts">
						<li>
							<a href="tel:5555555555">
								<img src="images/phone.svg" alt="phone">

								555-555-555
							</a>
						</li>

						<li>
							<a href="mailto:info@lux-karuci.bg">
								<img src="images/email.svg" alt="email">

								info@lux-karuci.bg
							</a>
						</li>
					</ul>
				</div>

				<div class="footer__map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46514.92762341562!2d27.865695803946362!3d43.226623187238275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a455a21e9cd035%3A0xb4633644e73a1c03!2z0JDQstGC0L7RgdCw0LvQvtC9INCV0LLRgNC-0L_QsA!5e0!3m2!1sen!2sbg!4v1682768439771!5m2!1sen!2sbg" width="700" height="272" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>

			<div class="footer__bottom">
				<div class="copyright">Copyright © Lux Karuci 2023</div>

				<div class="credits">Site by StickShifters</div>
			</div>
		</div>
	</footer>
	
</body>
</html>