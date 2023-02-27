<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../Style/util.css">
	<link rel="stylesheet" type="text/css" href="../Style/main.css">

	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
	<title>Register Error | Miguel e Alan</title>

    <?php

        if (isset($_POST["register_btn"])) {
            $pdo = new PDO("mysql: host=localhost; dbname=freelancer_website", "root", "");

            $title_error = "";
            $description_error = "";

            try {
                $pdo2 = new PDO("mysql: host=localhost; dbname=freelancer_website", "root", "");

                $sql2 = $pdo2 -> prepare("SELECT Email FROM clients");
                $sql2 -> execute();

                $info2 = $sql2 -> fetchAll(PDO::FETCH_ASSOC);

                foreach ($info2 as $key => $user) {
                    if ($user["Email"] == $_POST["email"]) {
                        throw new Exception("Email Unavaliable");
                    }
                }


                if (!strstr($_POST["email"], "@gmail.com") && !strstr($_POST["email"], "@hotmail.com") && !strstr($_POST["email"], "@msn.com")) {
                    throw new Exception("Invalid_Email");
                } 

                if (strlen($_POST["username"]) < 5) {
                    throw new Exception("Too Short Username");
                } else if (strlen($_POST["username"]) > 20) {
                    throw new Exception("Too Long Username");
                }

                if (strlen($_POST["first_name"]) < 2) {
                    throw new Exception("Too Short First Name");
                } else if (strlen($_POST["first_name"]) > 14) {
                    throw new Exception("Too Long First Name");
                }

                if (strlen($_POST["last_name"]) < 2) {
                    throw new Exception("Too Short Last Name");
                } else if (strlen($_POST["last_name"]) > 14) {
                    throw new Exception("Too Long Last Name");
                }

                if (strlen($_POST["password"]) < 5) {
                    throw new Exception("Too Short Password");
                } else if (strlen($_POST["password"]) > 12) {
                    throw new Exception("Too Long Password");
                }

                $today = new DateTime();
                $age = $today->diff(new DateTime($_POST["birthday"]))->y;

                if ($age > 115 || $age < 1) {
                    throw new Exception("Invalid Date");
                } else if ($age < 13) {
                    throw new Exception("Too Young");
                } 

                $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

                $sql = $pdo -> prepare("INSERT INTO clients VALUES (null, ?, ?, ?, ?, ?, ?)");
                $sql -> execute(array($_POST["email"], $password, $_POST["username"], $_POST["first_name"], $_POST["last_name"], $_POST["birthday"]));
                
                header("Location: index.php");

            } catch (Exception $e) {
                $message = $e -> getMessage();

                if ($message == "Invalid_Email") {
                    $title_error = "Email Invalido!";
                    $description_error = "Por favor insira um email valido (de preferencia terminado em '@gmail.com', '@hotmail.com' ou '@msn.com')";
                } 
                
                if ($message == "Too Short Username") {
                    $title_error = "Username muito pequeno!";
                    $description_error = "Por favor insira um nome de utilizador com no minimo 5 caracteres.";
                } else if ($message == "Too Long Username") {
                    $title_error = "Username muito longo!";
                    $description_error = "Por favor insira um nome de utilizador com no maximo 20 caracteres.";
                } 
                
                if ($message == "Too Short First Name") {
                    $title_error = "Primeiro Nome muito pequeno!";
                    $description_error = "Por favor insira o seu primeiro Nome com no minimo 2 caracteres.";
                } else if ($message == "Too Long First Name") {
                    $title_error = "Primeiro Nome muito longo!";
                    $description_error = "Por favor insira o seu primeiro Nome com no maximo 14 caracteres.";
                } 
                
                if ($message == "Too Short Last Name") {
                    $title_error = "Ultimo Nome muito pequeno!";
                    $description_error = "Por favor insira o seu ultimo Nome com no minimo 2 caracteres.";
                } else if ($message == "Too Long Last Name") {
                    $title_error = "Ultimo Nome muito longo!";
                    $description_error = "Por favor insira o seu ultimo Nome com no maximo 14 caracteres.";
                }

                if ($message == "Too Short Password") {
                    $title_error = "Palavra Passe muito pequeno!";
                    $description_error = "Por favor insira um Palavra Passe com no minimo 5 caracteres.";
                } else if ($message == "Too Long Last Name") {
                    $title_error = "Palavra Passe muito longa!";
                    $description_error = "Por favor insira uma Palavra Passe com no maximo 12 caracteres.";
                }
                
                if ($message == "Too Young") {
                    $title_error = "Demasiado Novo!";
                    $description_error = "Precisa de ter no minimo 13 anos para se cadastrar.";
                } else if ($message == "Invalid Date") {
                    $title_error = "Data Invalida!";
                    $description_error = "Por favor insira uma idade valida!";
                }

                if ($message == "Email Unavaliable") {
                    $title_error = "Email já está registrado";
                    $description_error = "Esse email já está registrado por favor insira outro diferente por favor.";
                }

            }
        }

        if (isset($_POST["gotoregister"])) {
            header("Location: Register.php"); 
        }
    ?>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/23010e05-5ffd-4d0b-adda-7eba12d2f5a6/d1rwjc9-426fbe6a-aed3-4460-b8cd-a175b2929eaf.jpg/v1/fill/w_1192,h_670,q_70,strp/high_quality_psp_wallpaper_by_will_yen_d1rwjc9-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTAwIiwicGF0aCI6IlwvZlwvMjMwMTBlMDUtNWZmZC00ZDBiLWFkZGEtN2ViYTEyZDJmNWE2XC9kMXJ3amM5LTQyNmZiZTZhLWFlZDMtNDQ2MC1iOGNkLWExNzViMjkyOWVhZi5qcGciLCJ3aWR0aCI6Ijw9MTYwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.OlalY9H4IeEv6mfP82gvukHOsOo0NPcE1i2Om6Ng9Ik');">
			<div class="wrap-login100 p-l-35 p-r-35 p-t-65 p-b-54">
				<form action="VerifyRegister.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title m-b-20">
                        <?php echo $title_error; ?> 
					</span>

					<div class="m-b-35" style="text-align: center;">
						<span class="label-input100" style="font-size: 20px"> <?php echo $description_error; ?> </span>
					</div>

					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="gotoregister">
								Back to Register
							</button>
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</body>
</html>