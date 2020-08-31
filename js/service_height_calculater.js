( function() {

    if(window.location.pathname === "/" || window.location.pathname === ""){
     calculate_height("services-rotation");
     calculate_height("news-rotation", "high");
     window.addEventListener('resize',calculate_height("services-rotation"));
    }
  
    
  
    function calculate_height(element, feature){
    
        let rotator = document.getElementById(element);
        let article = rotator.getElementsByTagName("article");
        let heights = [];
        for(let i=0; i<article.length; i++){
            heights.push(article[i].offsetHeight);
        }
        let heighest = Math.max(...heights);

        if(!feature){
            rotator.style.height = heighest + "px";
        } else if(feature === "high"){
            rotator.style.height = heighest + 50 +"px";
        }
   
        
     
    }
  
    let toTopButton = document.getElementById("to-top");
    toTopButton.addEventListener("click", function() {
        window.scrollTo({ top: 0, behavior: `smooth` })    
    });



}() );