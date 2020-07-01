( function() {

    let newsHeadline = document.getElementById("news-headline");
    let newsArray = document.getElementById("news-page").getElementsByTagName("article");
    console.log(newsArray);
    
    
    for(let i = 0; i < newsArray.length; i++){
        if(i===0){
            newsHeadline.appendChild(newsArray[i]);
        }
    }
    
 }() );
 