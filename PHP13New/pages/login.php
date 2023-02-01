<?php

session_start();
$auth = $_SESSION['auth'] ?? null;

// если пользователь авторизован переадресовывает на главную страницу
if ($auth) {
	header('Location: ../index.php');
}

// если попытке входа не существовал текстовый файл с базой пользователей,
// то создаёт новый файл с одним пользователем по умолчанию
if (!is_file('users.txt')) {
	$reg_time = time();
	$example_user = ['user1' => ['birthday' => '1987-02-01', 'password' => sha1('user1'), 'regtime' => $reg_time]];

	// кодируем ассоциативный массив в срочку и записываем в текстовый файл
	file_put_contents('users.txt', json_encode($example_user, true));
}
// ...

?>

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
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="../index.php">Главная</a>
						</li>

					</ul>

					<div class="d-flex justify-content-end">
						<form action="registration.php" method="POST">
							<input type="submit" value="Зарегистрироваться" />
						</form>
						<form action="login.php" method="POST">
							<input type="submit" value="Войти" />
						</form>
					</div>

				</div>
			</div>
		</nav>

	</header>

	<main>
		<div class="container">
			<h3>Войти в личный кабинет</h3>
			<form action="process.php" method="post">
				<input name="login" type="text" placeholder="Логин" required /> <br />
				<input name="password" type="password" placeholder="Пароль" required />
				<br />
				<input type="submit" value="Войти" />
			</form>
			<form action="registration.php" method="POST" id="error">
				<input type="submit" value="Зарегестрироваться" />
			</form>
		</div>
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="../img/10.jpg" class="d-block w-100" alt="pic" />
					<div class="carousel-caption d-none d-md-block">
						<h5>Dignissimos</h5>
						<p>
							Dignissimos, deleniti molestiae ab asperiores tempore explicabo.
							Dignissimos fugit nemo quia officia non sit omnis dolorum culpa
							quod, id quaerat veritatis error cumque vel aliquam qui
							cupiditate! Veritatis ea odit quia facilis reiciendis omnis fuga
							atque et reprehenderit molestias hic officiis consequuntur
							voluptatum quidem perferendis, sapiente placeat, in sint
							voluptates quisquam. Ducimus ipsam, quasi sequi repellendus
							molestiae cupiditate! Fugiat aliquid, facere culpa ad odio
							impedit qui.
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="../img/14.jpeg" class="d-block w-100" alt="pic" />
					<div class="carousel-caption d-none d-md-block">
						<h5>Inventore</h5>
						<p>
							Inventore fugit tempore consectetur ab laborum sed ad enim
							voluptas nostrum pariatur omnis nam temporibus excepturi,
							doloribus at, optio maxime dolor officiis suscipit delectus
							magni eaque velit. Sint vel eum eligendi reiciendis culpa,
							explicabo excepturi neque quas exercitationem reprehenderit
							beatae alias quae est, suscipit distinctio dignissimos similique
							voluptatibus architecto eaque? Ea ex laboriosam vel commodi,
							quae iste quaerat. Tenetur quisquam aliquam nulla eligendi. Ipsa
							magnam excepturi iste ad fugiat provident doloribus aliquam
							libero nesciunt cum fuga consequuntur est accusantium
							perferendis, qui eveniet laborum odit nam debitis.
						</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="../img/12.jpg" class="d-block w-100" alt="pic" />
					<div class="carousel-caption d-none d-md-block">
						<h5>Repellendus</h5>
						<p>
							Hic, assumenda aut. Eos ducimus, repellendus commodi ab debitis
							quam ut porro nulla voluptatibus modi deleniti voluptatem
							assumenda necessitatibus corporis dolor ipsa facilis, quos
							explicabo voluptate obcaecati iste minus odit. Sunt totam
							asperiores dolores quis obcaecati optio officiis, culpa harum
							commodi aliquam, ab laborum possimus qui cupiditate aspernatur
							maiores magnam molestiae quibusdam sit eaque distinctio deleniti
							perspiciatis. Omnis, non quis perspiciatis cupiditate illum
							error velit minus placeat excepturi sapiente expedita.
						</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Предыдущий</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Следующий</span>
			</button>
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