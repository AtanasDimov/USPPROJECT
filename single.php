<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Лукс Каруци</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer="defer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js" defer="defer"></script>
	<script src="sliders.js" defer="defer"></script>
</head>
<body>
	<?php
	$dbHost ="localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "koli_bd";

	$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
	if($db->connect_error){
	die("Connection failed:".$db->connect_error);
	}
	$id=$_GET['id'];
	$query = "SELECT * FROM koli where id = $id";
	$result = mysqli_query($db,$query);
	while($row = mysqli_fetch_assoc($result)){
	$make = $row['make'];
	$model = $row['model'];
	$chassis = $row['chassis'];
	$engine = $row['engine'];
	$mileage = $row['mileage'];
	$color = $row['color'];
	$year = $row['year'];
	$gearbox = $row['gearbox'];
	$power = $row['power'];
	$info = $row['info'];
	$price = $row['price'];
	}
	mysqli_close($db);
	?>
	<header class="header">
		<div class="shell">
			<a href="home.php" class="logo">
				<img src="images/logo.png" alt="Lux Karuci">
			</a>
		</div>
	</header>

	<section class="section-slider">
		<div class="shell">
			<div class="section__title">
			<?php
			echo"<h2>".$make." ".$model."</h2>";
			?>

			</div>

			<div class="section__sliders">
				<div class="slider slider--main">
					<div class="slide">
						<div class="slide__image">
							<img src="images/car-thumbnail.png" alt="car">
						</div>
					</div>

					<div class="slide">
						<div class="slide__image">
							<img src="images/car-placeholder1.png" alt="car">
						</div>
					</div>

					<div class="slide">
						<div class="slide__image">
							<img src="images/car-placeholder2.png" alt="car">
						</div>
					</div>

					<div class="slide">
						<div class="slide__image">
							<img src="images/car-thumbnail.png" alt="car">
						</div>
					</div>

					<div class="slide">
						<div class="slide__image">
						<img src="images/car-placeholder1.png" alt="car">
						</div>
					</div>

					<div class="slide">
						<div class="slide__image">
							<img src="images/car-placeholder2.png" alt="car">
						</div>
					</div>
				</div>

				<div class="slider slider--nav">
					<div class="slide">
						<div class="slide__image">
							<img src="images/car-thumbnail.png" alt="car">
						</div>
					</div>

					<div class="slide">
						<div class="slide__image">
							<img src="images/car-placeholder1.png" alt="car">
						</div>
					</div>

					<div class="slide">
						<div class="slide__image">
							<img src="images/car-placeholder2.png" alt="car">
						</div>
					</div>

					<div class="slide">
						<div class="slide__image">
							<img src="images/car-thumbnail.png" alt="car">
						</div>
					</div>

					<div class="slide">
						<div class="slide__image">
							<img src="images/car-placeholder1.png" alt="car">
						</div>
					</div>

					<div class="slide">
						<div class="slide__image">
							<img src="images/car-placeholder2.png" alt="car">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section-info">
		<div class="shell">
			<div class="section__inner">
				<ul class="features">
					<li>
						<div class="features__image">
							<img src="images/type.png" alt="type">
						</div>

						<span>Тип</span>

						<?php echo "<p><strong>$chassis</strong></p>";?>
					</li>

					<li>
						<div class="features__image">
							<img src="images/engine.png" alt="engine">
						</div>

						<span>Двигател</span>

						<?php echo "<p><strong>$engine</strong></p>";?>
					</li>

					<li>
						<div class="features__image">
							<img src="images/road.png" alt="road">
						</div>

						<span>Пробег</span>

						<?php echo "<p><strong>$mileage км</strong></p>"?>
					</li>

					<li>
						<div class="features__image">
							<img src="images/year.png" alt="year">
						</div>

						<span>Година</span>

						<?php echo "<p><strong>$year</strong></p>"?>
					</li>

					<li>
						<div class="features__image">
							<img src="images/color.png" alt="color">
						</div>

						<span>Цвят</span>

						<?php echo "<p><strong>$color</strong></p>"?>	
					</li>

					<li>
						<div class="features__image">
							<img src="images/power.png" alt="power">
						</div>

						<span>Мощност</span>

						<?php echo "<p><strong>$power к.с.</strong></p>"?>
					</li>

					<li>
						<div class="features__image">
							<img src="images/gears.png" alt="gears">
						</div>

						<span>Скорости</span>

						<?php echo "<p><strong>$gearbox</strong></p>"?>
					</li>
				</ul>

				<div class="section__price">
					<p>Цена: <?php echo "<strong>".number_format($price)." лв</strong></p>"?>
				</div>
			</div>
		</div>
	</section>

	<section class="section-text">
		<div class="shell">
			<div class="section__inner">
				<h3>Допълнителна информация</h3>

				<?php echo "<p>$info</p>"?>
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