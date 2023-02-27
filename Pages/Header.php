<!DOCTYPE html>
    <html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../Style/Header.css">

        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/all.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/sharp-solid.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.3.0/css/sharp-regular.css">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        </style>

        <?php 
            session_start(); 

            if (!$_SESSION["username"]) {
                header("Location: index.php");
            }

            if (isset($_POST["logout_btn"])) {
                session_unset();
                session_destroy();

                header("Location: index.php");
            }
        ?>
    </head>
    <body>
        <nav>
            <div id="logo">
                MIGUEL AND ALAN
            </div>

            <ul id="website-pageslinks">
                <li <?php if(basename($_SERVER['PHP_SELF']) == "index.php") { echo 'class="selected"'; } ?>>
                    <a href="Home.php">
                        <span>
                            Home
                        </span>
                    </a>
                </li>   
                <li <?php if(basename($_SERVER['PHP_SELF']) == "Services.php") echo 'class="selected"'?>>
                    <a href="Services.php">
                        <span>
                            Services
                        </span>
                    </a>
                </li>
                <li <?php if(basename($_SERVER['PHP_SELF']) == "About.php") echo 'class="selected"'?>>
                    <a href="About.php">
                        <span>
                            About
                        </span>
                    </a>
                </li>
                <li <?php if(basename($_SERVER['PHP_SELF']) == "Contact.php") echo 'class="selected"'?>>
                    <a href="Contact.php">
                        <span>
                            Contact
                        </span>
                    </a>
                </li>
            </ul>

            <form method="post" style="display: inline">
                <button id="user-logout" type="submit" name="logout_btn">
                    <?php echo $_SESSION["username"]; ?> 
                    <i class="fa-solid fa-right-from-bracket" style="padding-left: 8px"></i>
                </div>
            </form>

        </nav>
    </body>
</html>