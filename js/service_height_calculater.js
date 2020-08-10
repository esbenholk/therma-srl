( function() {

    if(window.location.pathname === "/" || window.location.pathname === ""){
     calculate_height("services-rotation");
    }
  
    function calculate_height(element){
    
        let rotator = document.getElementById(element);
        let article = rotator.getElementsByTagName("article");
        let heights = [];
        for(let i=0; i<article.length; i++){
            heights.push(article[i].offsetHeight);
        }
        let heighest = Math.max(...heights);
        
        rotator.style.height = heighest + "px";
     
    }
  



}() );