<?php
session_start();
$auth = $_SESSION['auth'] ?? null;

include($_SERVER['DOCUMENT_ROOT'] . "/pages/functions.php");

if ($auth) {
	$user_name = getCurrentUser();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>SPA-салон</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

	<link rel="stylesheet" href="../css/styles.css" />
</head>

<body>
	<header>

		<div class="d-flex justify-content-center" id="site-name">
			<a href="../index.php">
				<h1>SPA-салон</h1>
			</a>
		</div>

		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid">
				<a class="navbar-brand" href="../index.php"><img src="../img/18.png" alt="logo" width="80" height="50" class="d-inline-block align-text-center" /></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<?php
					if (!$auth) { // если пользователь не авторизован доступна только главная страница, вход и регистрация
					?>

						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="../index.php">Главная</a>
							</li>
						</ul>

						<div class="d-flex justify-content-end">
							<form action="registration.php" method="POST">
								<input type="submit" value="Зарегестрироваться" />
							</form>
							<form action="login.php" method="POST">
								<input type="submit" value="Войти" />
							</form>
						</div>

					<?php
					} ?>

					<?php
					if ($auth) { // если пользователь авторизован доступны и другие страницы
						$user_name = getCurrentUser();
					?>

						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="../index.php">Главная</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="lorem.php">Lorem</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="ipsum.php">Ipsum</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="dolor.php">Dolor</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="elit.php">Elit</a>
							</li>
						</ul>

						<div class="d-flex justify-content-end ">
							<div class="d-flex justify-content-center" id="username">
								<?php
								echo $user_name;
								?>
							</div>

							<form action="My-account.php" method="POST">
								<input type="submit" value="Личный кабинет" />
							</form>

							<form action="clear-session.php" method="POST">
								<input type="submit" value="Выйти" />
							</form>
						</div>

					<?php
					} ?>

				</div>
			</div>
		</nav>
	</header>

	<main>
		<div class="container">
			<h1>О нас</h1>
			<p>
				Ipsa ducimus quia laboriosam libero, perspiciatis in repudiandae quod
				officia ad expedita tenetur eius aperiam recusandae, odit excepturi
				reprehenderit magnam dolores maiores nemo laborum iusto vitae aut
				mollitia. Repellendus iusto aliquam recusandae eos enim veritatis
				facere atque voluptatibus, est blanditiis soluta voluptates commodi
				fugit eligendi, obcaecati laborum, deleniti nostrum quibusdam
				doloribus suscipit saepe at quas. Est illo eaque quam qui vel tempore
				excepturi veniam, esse mollitia debitis repellendus, error vitae
				voluptas maiores iure officia nam consequuntur enim incidunt nesciunt
				magnam, dolores repudiandae sit odit. Dolore asperiores inventore
				consectetur, in molestias suscipit! Animi, quis iste soluta qui
				laborum ut excepturi!
			</p>
			<div class="row row-cols-1 row-cols-md-2 g-4">
				<div class="col">
					<div class="card h-100">
						<img src="../img/15.jpg" class="card-img-top" alt="pic" />
						<div class="card-body">
							<h5 class="card-title">Dolorem quia maxime</h5>
							<p class="card-text">
								Dolorem quia maxime hic quis, perferendis harum nemo, quos a
								libero distinctio perspiciatis vitae eos id tempora quae
								necessitatibus ipsam incidunt aperiam? Natus ab nisi, at
								minima ducimus ipsum! Incidunt id atque modi nesciunt nobis
								corporis, amet obcaecati impedit hic, quibusdam placeat
								architecto recusandae officia voluptatibus. Doloribus corporis
								et vel eum dolorum rem similique impedit aspernatur commodi,
								reiciendis maxime rerum nobis asperiores voluptatum ea dicta!
							</p>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="../img/16.jpg" class="card-img-top" alt="pic" />
						<div class="card-body">
							<h5 class="card-title">Veniam corporis ducimus</h5>
							<p class="card-text">
								Veniam corporis ducimus assumenda iure aliquid quisquam vitae
								blanditiis modi mollitia ipsum cupiditate deserunt, culpa
								nisi! Tempora, aut amet alias odio itaque optio eos
								consequuntur architecto, cum consequatur debitis. Aliquid
								aperiam consequuntur, facere iste unde soluta quam, tenetur
								eveniet temporibus et tempore, dolore quidem inventore ipsa!
								Optio consequuntur molestiae dolorum doloribus qui dolor
								ipsam. Officia dolores ex at ipsam quisquam dignissimos nihil
								distinctio veritatis? Minima ea eum rem autem? Consequatur
								sapiente fugiat facere molestias sint impedit tempore
								distinctio, veritatis deserunt exercitationem quaerat
								explicabo atque!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer>
		<div class="links">
			<a href="vacancies.php">Вакансии</a>
			<a href="contacts.php">Контакты</a>
			<a href="about.php">О нас</a>
		</div>

		<div class="copyright">Сopyright &copy; Spa-салон 2023</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>