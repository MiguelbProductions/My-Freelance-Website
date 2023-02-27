<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../Style/util.css">
	<link rel="stylesheet" type="text/css" href="../Style/main.css">

	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
	<title>Login Error | Miguel e Alan</title>

    <?php

        if (isset($_POST["login_btn"])) {
            $pdo = new PDO("mysql: host=localhost; dbname=freelancer_website", "root", "");

            $sql = $pdo -> prepare("SELECT Email, Password, Username FROM clients");
            $sql -> execute();

            $info = $sql -> fetchAll(PDO::FETCH_ASSOC);

            $email_founded = "";
            $password_founded = "";
            $user_founded = "";

            $title_error = "";
            $description_error = "";

            if (isset($_POST["email"]) && isset($_POST["password"])) {
                if (strstr($_POST["email"], "@gmail.com") || strstr($_POST["email"], "@hotmail.com") || strstr($_POST["email"], "@msn.com")) {
                    foreach ($info as $key => $user) {
                        if ($user["Email"] == $_POST["email"]) {
                            $email_founded = $user["Email"];
                            $password_founded = $user["Password"];
                            $user_founded = $user["Username"];
                        }
                    }

                    if ($email_founded == "") {
                        $title_error = "Conta Inexistente!";
                        $description_error = "Esse email ainda não foi registrado, por favor insira um email já cadastrado ou <a href='Register.php' style='font-size: 20px'>registre</a> uma nova conta";
                    } else if (password_verify($_POST["password"], $password_founded)){
                        session_start();

                        $_SESSION["username"] = $user_founded;

                        if (!$_COOKIE["random_cookie"]) {
                            setcookie('random_cookie', 'random_value_cookie', time() + 60);
                        }

                        header("Location: Home.php");   
                    } else {
                        $title_error = "Password Incorreta!";
                        $description_error = "A password digitada está incorreta por favor tente novamente!";
                    }
                } else {
                    $title_error = "Email Invalido!";
                    $description_error = "Por favor insira um email valido (de preferencia terminado em '@gmail.com', '@hotmail.com' ou '@msn.com')";
                }
            
            }     
        }

        if (isset($_POST["gotologin"])) {
            header("Location: index.php"); 
        }
    ?>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/23010e05-5ffd-4d0b-adda-7eba12d2f5a6/d1rwjc9-426fbe6a-aed3-4460-b8cd-a175b2929eaf.jpg/v1/fill/w_1192,h_670,q_70,strp/high_quality_psp_wallpaper_by_will_yen_d1rwjc9-pre.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9OTAwIiwicGF0aCI6IlwvZlwvMjMwMTBlMDUtNWZmZC00ZDBiLWFkZGEtN2ViYTEyZDJmNWE2XC9kMXJ3amM5LTQyNmZiZTZhLWFlZDMtNDQ2MC1iOGNkLWExNzViMjkyOWVhZi5qcGciLCJ3aWR0aCI6Ijw9MTYwMCJ9XV0sImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl19.OlalY9H4IeEv6mfP82gvukHOsOo0NPcE1i2Om6Ng9Ik');">
			<div class="wrap-login100 p-l-35 p-r-35 p-t-65 p-b-54">
				<form action="VerifyLogin.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title m-b-20">
                        <?php echo $title_error; ?> 
					</span>

					<div class="m-b-35" style="text-align: center;">
						<span class="label-input100" style="font-size: 20px"> <?php echo $description_error; ?> </span>
					</div>

					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="gotologin">
								Back to Login
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