/* Javascript del Buscador: https://youtu.be/I3stKiPIb-w?si=TQ0hoW30-FeWLg5I*/
document.addEventListener("keyup",parametro => {
   if(parametro.target.matches("#buscador")){
      document.querySelectorAll(".pagina").forEach(pagina =>{
         pagina.textContent.toLowerCase().includes(parametro.target.value.toLowerCase())?pagina.classList.remove("filtro"):pagina.classList.add("filtro")
      })
   }
})