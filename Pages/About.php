<!DOCTYPE html>
    <html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About | Miguel and Alan</title>

        <link rel="stylesheet" href="../Style/About.css">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        </style>
    </head>
    <body>
        <?php include "Header.php" ?>

        <div id="about-content">
            <img src="../Data/Images/Miguel.png" id="profilephoto-miguel" alt="Miguel Photo" height="625em" width="560em">

            <span id="aboutcontent-miguel">
                <h1>
                    About Me
                </h1>

                <div id="about-info">
                    <b>Name: </b> Miguel Brandão <br>
                    <b>Email: </b> Miguellbproductions@gmail.com <br>
                    <b>Phone: </b> +351 927-326-387 <br>
                    <b>Years of experience: </b> 2-3 years
                </div>

                <h2>
                    <b id="project_complete"></b> Projects Complete
                </h2>
                
                <input type="button" id="download-cv" value="Download CV">

            </span>

            

            <span id="aboutcontent-alan">
                <h1>
                    About Me
                </h1>

                <div id="about-info">
                    <b>Name: </b> Alan João <br>
                    <b>Email: </b> Alanjoao@gmail.com <br>
                    <b>Phone: </b> +351 934-582-967 <br>
                    <b>Years of experience: </b> 1-2 years
                </div>

                <h2>
                    <b id="project_complete"></b> Projects Complete
                </h2>
                
                <input type="button" id="download-cv" value="Download CV">

            </span>

            <img src="../Data/Images/Alan.png" id="profilephoto-alan" alt="Miguel Photo" height="625em" width="560em">
        </div>
        

        <span id="previous-btn"><i class="fa-solid fa-chevron-left fa-6x"></i></span>
        <span id="following-btn"><i class="fa-solid fa-chevron-right fa-6x"></i></span>
        
        <script src="../Scripts/About.js"></script>
    </body>
</html>