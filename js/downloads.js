( function() {
   if(window.location.pathname === "/" || window.location.pathname === ""){
  
   let wrapper = document.createElement('div');
   wrapper.classList.add("download");

   let downloadArray = document.getElementById("downloads").getElementsByTagName("a");
      for(let i = 0; i < downloadArray.length; i++){

   
       let downloadIcon = document.createElement("IMG");
       downloadIcon.src = "https://www.thermasrl.com/wp-content/uploads/2020/08/pdf.svg";
       downloadIcon.classList.add("pdf-icon")
       

      org_html = downloadArray[i].outerHTML;
      new_html = "<div class='download'>" + org_html + "</div>";
      downloadArray[i].outerHTML = new_html;
      downloadArray[i].before(downloadIcon);
      }
  
  }


    


}() );
