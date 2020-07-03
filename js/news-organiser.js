( function() {
    if(window.location.pathname === "/news/" || window.location.pathname === "/news" || window.location.pathname === "news" ){
          
    let newsHeadline = document.getElementById("news-headline");
    let newsArray = document.getElementById("news-page").getElementsByTagName("article");

    for(let i = 0; i < newsArray.length; i++){
        if(i===0){
            newsHeadline.appendChild(newsArray[i]);
        }
    }
    }
  
    
 }() );
 