window.onload = function() {

    var elements = document.getElementsByClassName('custom-control-input')
    console.log(elements)

    for(var i=0;i<elements.length;i++){ 
        elements[i].addEventListener('click', function(event) {
            console.log(event.target.id)
            if (this.checked) {
              console.log("Checkbox is checked..");
            } else {
              console.log("Checkbox is not checked..");
            }
          });
    };
    
    

}