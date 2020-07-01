( function() {


   let downloadArray = document.getElementById("download-modul").getElementsByTagName("a");
   
   for(let i = 0; i < downloadArray.length; i++){
    let downloadIcon = document.createElement("IMG");
    downloadIcon.src = "../wp-content/themes/THERMA-theme/assets/pdf.svg";
    downloadArray[i].before(downloadIcon)
   }
    


}() );
