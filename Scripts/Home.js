content = document.querySelector("#landpage-content").children;
image = document.querySelector("#profile-photo" );

person = "Miguel";

setInterval(() => {
    if (person == "Miguel") {
        console.log(content);
        content[0].innerHTML = "And";
        content[1].innerHTML = 'I\'m <span id="name"> Alan <br> João.</span>';
        content[2].innerHTML = 'A Freelancer <span id="function">Python Dev</span>'

        image.src = "../Data/Images/Alan.png"

        person = "Alan";
    } else {
        content[0].innerHTML = "Hello!";
        content[1].innerHTML = 'I\'m <span id="name"> Miguel <br> Brandão.</span>';
        content[2].innerHTML = 'A Freelancer <span id="function">Full Stack</span>'

        image.src = "../Data/Images/Miguel.png"

        person = "Miguel";
    }
  }, 10000);