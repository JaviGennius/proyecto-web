document.addEventListener("keyup",e => {
   if(e.target.matches("#buscador")){
      document.querySelectorAll(".pagina").forEach(pagina =>{
         pagina.textContent.toLowerCase().includes(e.target.value.toLowerCase())?pagina.classList.remove("filtro"):pagina.classList.add("filtro")
      })
   }
})