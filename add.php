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

	<a href="#" class="trigger">
		<img src="images/remove.svg" alt="trash" class="trigger-remove">

		<img src="images/add.svg" alt="add" class="trigger-add" style="display:none;">
	</a>

	<section class="section-add-form">
		<div class="section__title">
			<div class="shell">
				<h1>Добавяне</h1>
			</div>
		</div>

		<form action="add-car.php" method="post" class="form form--add" enctype="multipart/form-data">
			<div class="shell">
				<div class="form__image">
					<input type="file" name="images" id="images" accept=".jpg, .jpeg, .png" required>

					<label class="form__image-upload" for="images">Щракнете за да добавите снимки на автомобил</label>
				</div>
			</div>

			<div class="section__main">
				<div class="shell">
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

					<div class="form__inner">
						<h3>Въведете характеристики на автомобила</h3>

						<div class="form__rows">
							<div class="form__row">
								<label for="make-add">Избери марка</label>
								<div class="form__select">
									<select name="make-add" id="make-add" required>
										<option value="" hidden selected disabled>Марка</option>
										<option value="bmw">BMW</option>
										<option value="audi">Audi</option>
										<option value="mercedes">Mercedes</option>
									</select>
								</div>
							</div>
							<div class="form__row">
								<label for="model-add">Въведи модел</label>
								<input type="text" name="model-add" id="model-add" placeholder="Модел" required>
							</div>
							<div class="form__row">
								<label for="chassis-add">Избери Купе</label>
								<div class="form__select">
									<select name="chassis-add" id="chassis-add" required>
										<option disabled selected hidden value="">Купе</option>
										<option value="cabrio">Cabrio</option>
										<option value="sedan">Sedan</option>
										<option value="combi">Combi</option>
									</select>
								</div>
							</div>
							<div class="form__row">
								<label for="engine-add">Избери гориво</label>
								<div class="form__select">
									<select name="engine-add" id="engine-add" required>
										<option disabled selected hidden value="">Двигател</option>
										<option value="petrol">Petrol</option>
										<option value="diesel">Diesel</option>
										<option value="hybrid">Hybrid</option>
									</select>
								</div>
							</div>
							<div class="form__row">
								<label for="color-add">Избери цвят</label>
								<div class="form__select">
									<select name="color-add" id="color-add" required>
										<option disabled selected hidden value="">Цвят</option>
										<option value="red">Червен</option>
										<option value="blue">Син</option>
										<option value="green">Зелен</option>
									</select>
								</div>
							</div>
							<div class="form__row">
								<label for="mileage-add">Въведи пробег</label>
								<input type="text" name="mileage-add" id="mileage-add" placeholder="Пробег" required>
							</div>
							<div class="form__row">
								<label for="price-add">Въведи цена</label>
								<input type="text" name="price-add" id="price-add" placeholder="Цена" required>
							</div>
							<div class="form__row">
								<label for="gearbox-add">Избери скорости</label>
								<div class="form__select">
									<select name="gearbox-add" id="gearbox-add" required>
										<option disabled selected hidden value="">Скорости</option>
										<option value="manual">Ръчна</option>
										<option value="automatic">Автоматична</option>
									</select>
								</div>
							</div>
							<div class="form__row">
								<label for="power-add">Въведи мощност (к.с.)</label>
								<input type="text" name="power-add" id="power-add" placeholder="Мощност" required>
							</div>
							<div class="form__row">
								<label for="year-add">Въведи година</label>
								<input type="text" name="year-add" id="year-add" placeholder="Година" required>
							</div>
							<div class="form__row">
								<textarea name="info-add" id="info-add" rows="10" placeholder="Допълнителна информация"></textarea>
							</div>
						</div>
					</div>
				</div>

				
				<div class="form__actions">
					<input type="submit" value="Запиши" id="submit-add" name="submit-add" class="btn btn--alt">
				</div>
			</div>
		</form>
	</section>

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