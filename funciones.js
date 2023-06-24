/*
fetch("caract.json")
    .then(function(response){
        let data = response.json();
        //console.log(data);
        //response =>{ return response.json();
    })
    .then(data => {//console.log(data);
        mostrar  =  function (n)  {
            console.log(data); 
        }
*/
    fetch("caract.json")
    .then(response =>{ return response.json();})
    .then(data => {
        /*const openEls = document.querySelectorAll("[data-open]");
        const isVisible = "is-visible";
        for(const el of openEls) {
        el.addEventListener("click", function() {
            const modalId = this.dataset.open;
            document.getElementById(modalId).classList.add(isVisible);
        });
}*/
        
        mostrar  =  function (n)  {
            alert(data[n].titulo, data[n].descripcion, data[n].fecha);
        }})