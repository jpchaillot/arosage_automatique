window.onload = function() {

    var elements = document.getElementsByClassName('custom-control-input')

    for(var i=0;i<elements.length;i++){ 
        elements[i].addEventListener('click', function(event) {
            handleClick(event.target.id,event.target.checked)
          });
    };
    
    

}

var  sleep = (ms)  =>{
  return new Promise(resolve => setTimeout(resolve, ms));
}

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
     console.log('variable this',this);
     console.log('variable response',this.response);
    }
  };

  
  
  
  
  var handleClick = async (id , checked) => {
    var elements = document.getElementsByClassName('custom-control-input')
    
    for(var i=0;i<elements.length;i++){ 
      console.log(elements[i].id )
      console.log(id )
      if(elements[i].id != id ) {
        if(elements[i].checked){
          xhttp.open("GET", "script.php?voie="+(i+1)+"&sens=false", true);
          xhttp.send();
         await sleep(2000);
          elements[i].checked=false
        }
      }
    };
    xhttp.open("GET", "script.php?voie="+id+"&sens="+checked, true);
    xhttp.send();
    
} 