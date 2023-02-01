<?php
session_start();
$auth = $_SESSION['auth'] ?? null;

include($_SERVER['DOCUMENT_ROOT'] . "/pages/functions.php");

if (!$auth) {
	header('Location: ../index.php');
} else $user_name = getCurrentUser();

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

				</div>
			</div>
		</nav>
	</header>

	<main>

		<div class="container">
			<h1>Elit</h1>
			<p>
				Asperiores consequuntur, sed sunt facilis totam ipsum. Quam aut
				corrupti placeat eligendi nisi rem aspernatur consequatur blanditiis
				ut, cupiditate nulla molestias veniam, recusandae provident delectus
				sint praesentium quos eveniet, odio porro veritatis! Eligendi illum
				vitae aspernatur nisi aperiam corporis! Harum aut aliquid quos officia
				ipsam fuga vitae accusantium voluptatum, cupiditate laborum illo
				necessitatibus modi nulla nisi laboriosam corrupti, voluptatibus ut
				hic alias impedit culpa blanditiis exercitationem! Error, recusandae.
				Perspiciatis deserunt laborum et, nulla voluptatibus vero, deleniti
				hic id dolorum placeat est consequatur fuga? At aut deserunt
				praesentium corrupti labore cumque dicta quos enim maxime ab! Ea sequi
				totam qui nemo alias, explicabo eligendi quasi culpa delectus
				blanditiis deserunt similique id deleniti odit, eum aperiam, vero
				voluptatem itaque illo ab perferendis laborum facilis! Culpa commodi
				labore sed, aperiam facilis magni necessitatibus tenetur at. Obcaecati
				quisquam, quis maiores vel aperiam impedit molestias qui beatae
				laudantium sapiente autem illum consequuntur voluptatibus error quasi
				nisi. Eaque, quis ipsam!
			</p>
			<div class="row row-cols-1 row-cols-md-2 g-4">
				<div class="col">
					<div class="card h-100">
						<img src="../img/11.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title">Molestias esse</h5>
							<p class="card-text">
								Hic, molestias esse minus facilis perferendis nihil deserunt
								magnam debitis eveniet nulla adipisci vero pariatur aut vitae
								ea blanditiis fugit? Aliquam fuga, ipsa cupiditate, dolores
								labore excepturi veniam nisi quam explicabo neque cum saepe
								vel quia, harum molestiae. Impedit nostrum adipisci labore sit
								voluptatum quisquam quas tempora consequatur.
							</p>
						</div>

						<div class="card-footer">
							<small class="text-muted">Цена: <del>4000 &#8381;</del>
								<span class="price-discount">
									<?php
									echo getDiscound(4000);
									?>
									&#8381;</span>
							</small>
						</div>

					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="../img/12.jpg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title">Pariatur</h5>
							<p class="card-text">
								Pariatur, exercitationem voluptatum. Odit reprehenderit ea
								officia quasi labore eum ullam, error soluta illum culpa nemo
								dignissimos repellendus ipsam eaque doloremque! Nesciunt autem
								ipsum, pariatur veniam delectus quae magni numquam odio
								quidem! Explicabo eum iste quos aperiam distinctio. In ratione
								aperiam voluptas facilis qui veritatis, facere velit amet
								inventore odio aliquid id soluta iusto laborum nobis
								perferendis cumque impedit rem optio tempora adipisci ex
								exercitationem commodi.
							</p>
						</div>

						<div class="card-footer">
							<small class="text-muted">Цена: <del>4500 &#8381;</del>
								<span class="price-discount">
									<?php
									echo getDiscound(4500);
									?>
									&#8381;</span>
							</small>
						</div>

					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="../img/13.jpeg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title">Asperiores dolor</h5>
							<p class="card-text">
								Asperiores dolor repellat totam esse eos rerum explicabo
								suscipit nam, natus nobis saepe voluptatum voluptas labore
								nemo aliquam debitis non quaerat soluta sint tempore
								distinctio voluptatibus nulla? Ullam mollitia unde dolorum.
								Incidunt corporis iusto earum commodi exercitationem accusamus
								quis? Officia nesciunt voluptatem cum possimus. Natus ab
								adipisci voluptate placeat ducimus, vitae inventore!
								Laudantium eius vitae assumenda, omnis ea voluptate at
								laboriosam ut beatae aut possimus. Rem tenetur optio ex,
								dolorem odit dolorum sit alias nulla!
							</p>
						</div>

						<div class="card-footer">
							<small class="text-muted">Цена: <del>3700 &#8381;</del>
								<span class="price-discount">
									<?php
									echo getDiscound(3700);
									?>
									&#8381;</span>
							</small>
						</div>

					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="../img/14.jpeg" class="card-img-top" alt="..." />
						<div class="card-body">
							<h5 class="card-title">Delectus</h5>
							<p class="card-text">
								Delectus cupiditate omnis nam dolor necessitatibus voluptates
								facilis dolores architecto voluptatem. Minus dignissimos atque
								aut facilis, nihil vero alias voluptas libero nam veniam
								nostrum cum similique dolor nemo veritatis assumenda dicta
								debitis pariatur aperiam, in laborum omnis! Quos corporis
								officia eaque, magni ut ipsam? Aliquam molestias similique,
								illo atque, fugiat obcaecati mollitia repellendus error maxime
								nostrum dolorem. Accusantium, quam accusamus voluptatibus
								corporis excepturi facere iste saepe maxime, provident
								voluptate rerum! Accusamus, voluptas vitae illo itaque dicta
								obcaecati quo voluptatum officiis?
							</p>
						</div>

						<div class="card-footer">
							<small class="text-muted">Цена: <del>5200 &#8381;</del>
								<span class="price-discount">
									<?php
									echo getDiscound(5200);
									?>
									&#8381;</span>
							</small>
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