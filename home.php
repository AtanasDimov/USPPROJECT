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
	<header class="header header--home">
		<div class="shell">
			<a href="home.php" class="logo">
				<img src="images/logo.png" alt="Lux Karuci">
			</a>
		</div>
	</header>
	<?php
				$dbHost ="localhost";
				$dbUsername = "root";
				$dbPassword = "";
				$dbName = "koli_bd";

				$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
					if($db->connect_error){
					die("Connection failed:".$db->connect_error);
				}
				$query = "SELECT model, COUNT(*) as count
				FROM koli
				GROUP BY model
				HAVING count > 1;";

				$result = mysqli_query($db,$query);
	?>

	<div class="hero">
		<div class="shell">
			<div class="hero__image">
				<img src="images/hero.jpg" alt="Hero">
			</div>

			<div class="hero__inner">
				<div class="hero__title">
					<h1>Лукс Каруци</h1>
				</div>

				<div class="hero__content">
					<p>Не купувайте каруци, нашите коли не са боклуци!</p>
				</div>
			</div>
		</div>
	</div>

	<section class="section-filters">
		<div class="shell">
			<div class="section__title">
				<h2>Търсене на автомобили</h2>
			</div>

			<form action="#" class="form form--filters">
				<div class="form__rows">
					<div class="form__row">
						<div class="form__col">
							<div class="form__select">
								<select name="make" id="make">
									<option disabled selected hidden value="">Марка</option>
									<option value="bmw">BMW</option>
									<option value="audi">Audi</option>
									<option value="mercedes">Mercedes</option>
								</select>
							</div>
						</div>

						<div class="form__col">
							<div class="form__select">
								<select name="model" id="model">
									<option disabled selected hidden value="">Модел</option>
									<option value="m2">M2</option>
									<option value="a3">A3</option>
									<option value="a4">A4</option>
								</select>
							</div>
						</div>

						<div class="form__col">
							<div class="form__select">
								<select name="chassis" id="chassis">
									<option disabled selected hidden value="">Купе</option>
									<option value="cabrio">Cabrio</option>
									<option value="sedan">Sedan</option>
									<option value="combi">Combi</option>
								</select>
							</div>
						</div>

						<div class="form__col">
							<div class="form__select">
								<select name="engine" id="engine">
									<option disabled selected hidden value="">Двигател</option>
									<option value="petrol">Petrol</option>
									<option value="diesel">Diesel</option>
									<option value="hybrid">Hybrid</option>
								</select>
							</div>
						</div>
					</div>

					<div class="form__row">
						<div class="form__col">
							<div class="form__select">
								<select name="gearbox" id="gearbox">
									<option disabled selected hidden value="">Скорости</option>
									<option value="manual">Ръчна</option>
									<option value="automatic">Автоматична</option>
								</select>
							</div>
						</div>

						<div class="form__col">
							<div class="form__select">
								<select name="color" id="color">
									<option disabled selected hidden value="">Цвят</option>
									<option value="red">Червен</option>
									<option value="blue">Син</option>
									<option value="green">Зелен</option>
								</select>
							</div>
						</div>

						<div class="form__col">
							<input type="text" name="year-from" id="year-from" placeholder="Година от">
						</div>

						<div class="form__col">
							<input type="text" name="year-to" id="year-to" placeholder="Гoдина до">
						</div>
					</div>

					<div class="form__row">
						<div class="form__col">
							<input type="text" name="price-from" id="price-from" placeholder="Цена от">
						</div>

						<div class="form__col">
							<input type="text" name="price-to" id="price-to" placeholder="Цена до">
						</div>

						<div class="form__col">
							<input type="text" name="power-from" id="power-from" placeholder="Мощност от">
						</div>

						<div class="form__col">
							<input type="text" name="power-to" id="power-to" placeholder="Мощност до">
						</div>
					</div>
				</div>

				<div class="form__actions">
					<input type="submit" value="Търси" name="submit-home" id="submit-home" class="btn">
				</div>
			</form>
		</div>
	</section>

	<section class="section-results">
		<div class="shell">
			<div class="section__head">
				<div class="section__title">
					<h3>Намерени Резултати:</h3>
				</div>
				<div class="section__sort">
					<select name="sort" id="sort">
						<option value="" disabled selected hidden>Сортиране</option>
						<option value="price">Цена</option>
						<option value="date">Дата</option>
						<option value="year">Година</option>
					</select>
				</div>
				
			</div>

			<div class="section__body">
				<div class="section__cols">
					<div class="section__col">
						<a href="single.html" class="car">
							<div class="car__image">
								<img src="images/car-thumb.jpg" alt="bmw m2">
							</div>

							<div class="car__price">
								<p><strong>114,000лв</strong></p>
							</div>

							<div class="car__content">
								<h4 class="car__title">BMW M2 Coupe</h4>

								<span class="car__meta">2023, Бензин, Автоматик, син, 453 к.с.</span>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</a>
					</div>
					<?php
						include "showresult.php";
					?>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer">
		<div class="shell">
			<div class="footer__inner">
				<div class="footer__contacts">
					<a href="home.php" class="logo logo--small">
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