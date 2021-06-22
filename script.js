window.onload = function() {

    var elements = document.getElementsByClassName('custom-control-input')

    for(var i=0;i<elements.length;i++){ 
        elements[i].addEventListener('click', function(event) {
            handleClick(event.target.id,event.target.checked)
          });
    };
    
    

}


var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
     console.log('variable this',this);
    }
  };

  
  
  
  
  var handleClick = (id , checked) => {
    var elements = document.getElementsByClassName('custom-control-input')
    
    for(var i=0;i<elements.length;i++){ 
      if(elements[i].id != id ) elements[i].checked=false
    };
    xhttp.open("GET", "script.php?voie="+id+"sens="+checked, true);
    xhttp.send();
    
} 