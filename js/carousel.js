( function() {
    var pics = document.getElementsByClassName("teaser-item");

    for (var b = 0; b < pics.length; b++) {
        let button = document.createElement("button");
        if(b===0){
            button.classList.add("on");
        }
        button.classList.add("circlebutton");
        document.getElementById("circle-buttons").appendChild(button);
    }

    var buttons = document.getElementsByClassName("circlebutton");
    var current = 0;
    var currentlyTransitioning;
    var timer;
	timer = setTimeout(rotation, 8000);
	pics[0].classList.add("onscreen");
	
    for (var b = 0; b < buttons.length; b++) {
        buttons[b].addEventListener("click", function(e) {

            if (e.target.classList.contains("on")) {
                return;
            }
            if (currentlyTransitioning == true) {
                return;
            }

            clearTimeout(timer);
            
            for (var b = 0; b < buttons.length; b++) {
                if (buttons[b] == e.target) {
                    rotation(b);
                }
            }
        });
    }

    function rotation(arg) {
        currentlyTransitioning = true;
        pics[current].classList.remove("onscreen");
        pics[current].classList.add("offscreen");
        buttons[current].classList.remove("on");

        if (typeof arg != "undefined") {
            current = arg;
        } else {
            current++;
            if (current >= pics.length) {
                current = 0;
            }
        }

        pics[current].classList.add("onscreen");
        buttons[current].classList.add("on");

    }

    for (var i = 0; i < pics.length; i++) {
        pics[i].addEventListener("transitionend", function(e) {
            if (e.target.classList.contains("offscreen")) {
                e.target.classList.remove("offscreen");
                timer = setTimeout(rotation, 10000);
            }
            currentlyTransitioning = false;
        });
    }

    document.getElementById("left").addEventListener("click", function(e) {

        if (e.target.classList.contains("on")) {
            return;
        }
        if (currentlyTransitioning == true) {
            return;
        }

        clearTimeout(timer);
        
        for (var b = 0; b < buttons.length; b++) {
            if (buttons[b] == e.target) {
                rotation(b);
            }
        }
    });
    document.getElementById("right").addEventListener("click", function(e) {
        if (currentlyTransitioning == true) {
            return;
        }
        clearTimeout(timer);
        for (var b = 0; b < buttons.length; b++) {
            if (buttons[b] == e.target) {
                rotation(b);
            }
        }
    });



}() );