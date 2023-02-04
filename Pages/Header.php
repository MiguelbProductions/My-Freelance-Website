<!DOCTYPE html>
    <html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../Style/Header.css">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        </style>
    </head>
    <body>
        <nav>
            <div id="logo">
                MIGUEL AND ALAN
            </div>
    
            <ul id="website-pageslinks">
                <li <?php if(basename($_SERVER['PHP_SELF']) == "index.php") { echo 'class="selected"'; } ?>>
                    <a href="index.php">
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
                <li <?php if(basename($_SERVER['PHP_SELF']) == "Hireus.php") echo 'class="selected"'?>>
                    <a href="">
                        <span>
                            Hire us
                        </span>
                    </a>
                </li>
                <li <?php if(basename($_SERVER['PHP_SELF']) == "Skills.php") echo 'class="selected"'?>>
                    <a href="">
                        <span>
                            Skills
                        </span>
                    </a>
                </li>
                <li <?php if(basename($_SERVER['PHP_SELF']) == "About.php") echo 'class="selected"'?>>
                    <a href="">
                        <span>
                            About
                        </span>
                    </a>
                </li>
                <li <?php if(basename($_SERVER['PHP_SELF']) == "Contact.php") echo 'class="selected"'?>>
                    <a href="">
                        <span>
                            Contact
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
    </body>
</html>