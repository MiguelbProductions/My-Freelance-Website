text_numofprojects_miguel = document.querySelector("#aboutcontent-miguel #project_complete");
text_numofprojects_alan = document.querySelector("#aboutcontent-alan #project_complete");

cooldown = 100

profile2_with_numofprojects = false

num_of_projects_miguel = 0
intervalID_num_of_projects_miguel = setInterval(() => {
    text_numofprojects_miguel.innerHTML = num_of_projects_miguel;
    num_of_projects_miguel++;

    if (num_of_projects_miguel > 37) {
        clearInterval(intervalID_num_of_projects_miguel);
    }
}, cooldown);

previous_btn = document.querySelector("#previous-btn");
following_btn = document.querySelector("#following-btn");

profilephoto_miguel = document.querySelector("#profilephoto-miguel");
profilephoto_alan = document.querySelector("#profilephoto-alan");

about_content = document.querySelector("#about-content");

actualprofile = "Miguel";

previous_btn.addEventListener("click", function() {
    about_content.style.transform = "translateX(4%)";

    previous_btn.style.opacity = 0;
    following_btn.style.opacity = 1;

    actualprofile = "Miguel";

    clearInterval(intervalID);

    intervalID = setInterval(function() {
        change_profile();
    }, 5000);
});

following_btn.addEventListener("click", function() {
    about_content.style.transform = "translateX(-56.85%)";

    previous_btn.style.opacity = 1;
    following_btn.style.opacity = 0;

    actualprofile = "Alan";

    clearInterval(intervalID);

    intervalID = setInterval(function() {
        change_profile();
    }, 5000);

    if (profile2_with_numofprojects == false) {
        profile2_with_numofprojects = true

        num_of_projects_alan = 0
        intervalID_num_of_projects_alan = setInterval(() => {
            text_numofprojects_alan.innerHTML = num_of_projects_alan;
            num_of_projects_alan++;
        
            if (num_of_projects_alan > 8) {
                clearInterval(intervalID_num_of_projects_alan);
            }
        }, cooldown);
    }
});

function change_profile() {
    if (actualprofile == "Alan") {
        about_content.style.transform = "translateX(4%)";

        previous_btn.style.opacity = 0;
        following_btn.style.opacity = 1;

        actualprofile = "Miguel";
    } else if (actualprofile == "Miguel") {
        about_content.style.transform = "translateX(-56.85%)";

        previous_btn.style.opacity = 1;
        following_btn.style.opacity = 0;

        actualprofile = "Alan";

        if (profile2_with_numofprojects == false) {
            profile2_with_numofprojects = true
    
            num_of_projects_alan = 0
            intervalID_num_of_projects_alan = setInterval(() => {
                text_numofprojects_alan.innerHTML = num_of_projects_alan;
                num_of_projects_alan++;
            
                if (num_of_projects_alan > 8) {
                    clearInterval(intervalID_num_of_projects_alan);
                }
            }, cooldown);
        }
    }
}

intervalID = setInterval(function() {
    change_profile();
}, 7000);
