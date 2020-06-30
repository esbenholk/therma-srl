( function() {
    toggleCarousel("services-modul", "services-container", "services-index-indicator", false);
    toggleCarousel("news-modul", "teasers-container", "news-index-indicator", true);
    
    
    function toggleCarousel(modul, classname, bContainer, rotate){
        let element = document.getElementById(modul);
        var pics = element.getElementsByClassName(classname);
        pics[0].classList.add("onscreen");

        createButtons(bContainer);
        function createButtons(bContainer){
            for (var b = 0; b < pics.length; b++) {
                let button = document.createElement("button");
                if(b===0){
                    button.classList.add("on");
                }
                button.classList.add("circlebutton");
            
                element.getElementsByClassName(bContainer)[0].appendChild(button);
            }
        }

        var buttons = element.getElementsByClassName("circlebutton");
        var current = 0;
        var currentlyTransitioning;
        var timer;

        if(rotate === true){
            timer = setTimeout(rotation, 10000);
        }
      
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

        if(pics.length>1){
            let leftArrows = element.getElementsByClassName("left");    
            Array.from(leftArrows).forEach(function(element) {
                element.addEventListener('click', changeNewsDown);
            });
        
            let rightArrows = element.getElementsByClassName("right"); 
            Array.from(rightArrows).forEach(function(element) {
                element.addEventListener('click', changeNewsUp);
            });
        } else {
            let leftArrows = element.getElementsByClassName("left");    
            Array.from(leftArrows).forEach(function(element) {
                element.style.display = "none";
            });
        
            let rightArrows = element.getElementsByClassName("right"); 
            Array.from(rightArrows).forEach(function(element) {
                element .style.display = "none";
            });
        
        }

        function changeNewsUp(){
            currentlyTransitioning = true;
            pics[current].classList.remove("onscreen");
            pics[current].classList.add("offscreen");
            buttons[current].classList.remove("on");

            if(current < pics.length-1){
                current++;
            } else {
                current = 0;
            }
            console.log(current);

            pics[current].classList.add("onscreen");
            buttons[current].classList.add("on");
            clearTimeout(timer);
        }

        function changeNewsDown(){
            currentlyTransitioning = true;
            pics[current].classList.remove("onscreen");
            pics[current].classList.add("offscreen");
            buttons[current].classList.remove("on");

            if(current > 0){
                current--;
            } else {
                current = pics.length-1
            }
            console.log(current);

            pics[current].classList.add("onscreen");
            buttons[current].classList.add("on");
            clearTimeout(timer);
        
        }

        for (var i = 0; i < pics.length; i++) {
            pics[i].addEventListener("transitionend", function(e) {
                if (e.target.classList.contains("offscreen")) {
                    e.target.classList.remove("offscreen");
                }
                currentlyTransitioning = false;
            });
        }

    }
  



}() );