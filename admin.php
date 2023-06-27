<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Лукс Каруци</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header">
		<div class="shell">
			<a href="home.php" class="logo">
				<img src="images/logo.png" alt="Lux Karuci">
			</a>
		</div>
	</header>

	<div class="shell">
		<div class="admin-login">
			<h3>Login</h3>

			<form method="POST" action="" class="form form--login">
				<div class="form__row">
					<label for="name">Username</label>

					<input type="text" name="username" id="username">
				</div>

				<div class="form__row">
					<label for="password">Password</label>

					<input type="password" name="password" id="password">
				</div>

				<div class="form__actions">
					<input type="submit" value="Login" class="btn">

				</div>
			</form>
		</div>
	</div>

<?php
session_start();
if (isset($_SESSION['username'])) {

	header('Location: add.php');
	exit();
}
$dbHost ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "koli_bd";



try {
    $conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT password_hash FROM admin WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row && password_verify($password, $row['password_hash'])) {
        session_start();

        $_SESSION['username'] = $username;

        header('Location: add.php');
        exit();
    } else {
        echo 'Invalid username or password';
    }

}

?>

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

