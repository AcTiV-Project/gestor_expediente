document.addEventListener('DOMContentLoaded', ()=>{
      //codigo para mostrar los formulario de cada opcion

      const botones = {
            opcion1: document.getElementById("opcion1"),
            opcion2: document.getElementById("opcion2"),
            opcion3: document.getElementById("opcion3"),
      };

      const formularios = {
            opcion1: document.getElementById("form1"),
            opcion2: document.getElementById("form2"),
            opcion3: document.getElementById("form3"),
      };

      function mostrarFormulario(opcion) {
            for (let key in formularios) {
                  if (key === opcion) {
                        formularios[key].classList.remove("oculto");
                  } else {
                        formularios[key].classList.add("oculto");
                  }
            }
      }

      botones.opcion1.addEventListener("click", () => mostrarFormulario("opcion1"));
      botones.opcion2.addEventListener("click", () => mostrarFormulario("opcion2"));
      botones.opcion3.addEventListener("click", () => mostrarFormulario("opcion3"));

});