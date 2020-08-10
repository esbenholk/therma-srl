( function() {
    if(window.location.pathname === "/news/" || window.location.pathname === "/news" || window.location.pathname === "news" ){
          
    let newsHeadline = document.getElementById("news-headline");
    let newsArray = document.getElementById("news-page").getElementsByTagName("article");

    for(let i = 0; i < newsArray.length; i++){
        if(i===0){
            newsArray[i].classList.add("throw-shadow")
            // Array.from(newsArray[i].getElementsByTagName("p")).forEach(function(item) {
            //     item.style.display ="none";
            //  });
            
            newsHeadline.appendChild(newsArray[i]);
        } 
        }
    }
  
    
 }() );
 