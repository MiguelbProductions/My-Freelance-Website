<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../Style/util.css">
	<link rel="stylesheet" type="text/css" href="../Style/main.css">

	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
	<title>Login | Miguel e Alan</title>

</head>
<body>
	<header>
		<div class="header">
			<h2>Informações Sobre o Autor</h2>
			<button id="toggle-header">&#9660;</button>
		</div>

		<div class="content hidden" style="color: white">
			<p>Site Realizado por o Miguel Brandão Nº17 11ºF para o Trabalho de Redes do Modulo 2 do 11º ano</p>
		</div>
	</header>
	

	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/23010e05-5ffd-4d0b-adda-7eba12d2f5a6/d1rwjc9-426fbe6a-aed3-4460-b8cd-a175b2929eaf.jpg/v1/fill/w_1192,h_670,q_70,strp/high_quality_psp_wallpaper_by_will_yen_d1rwjc9-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTAwIiwicGF0aCI6IlwvZlwvMjMwMTBlMDUtNWZmZC00ZDBiLWFkZGEtN2ViYTEyZDJmNWE2XC9kMXJ3amM5LTQyNmZiZTZhLWFlZDMtNDQ2MC1iOGNkLWExNzViMjkyOWVhZi5qcGciLCJ3aWR0aCI6Ijw9MTYwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.OlalY9H4IeEv6mfP82gvukHOsOo0NPcE1i2Om6Ng9Ik');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="VerifyLogin.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Type your email" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Type your password" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="login_btn">
								Login
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-45">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="Register.php" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>

		<footer>
			<div class="container">
				<div class="footer-content">
					<p>Para mais informações contacte me através do <a href="mailto:miguellbproductions@gmail.com"><b>email</b></a> ou através do meu <a href="tel:927-326-387"><b>número de telefone</b></a>.</p>
				</div>
			</div>
		</footer>


		<script>
			const toggleHeader = document.querySelector('#toggle-header');
			const content = document.querySelector('.content');

			open = false

			toggleHeader.addEventListener('click', () => {
				content.classList.toggle('hidden');

				if (open) {
					toggleHeader.innerHTML = "&#9660;";
				} else {
					toggleHeader.innerHTML = "&#9650;";
				}

				open = !open;
			});

		</script>
	</body>
</html>