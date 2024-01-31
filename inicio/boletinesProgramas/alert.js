const materias = document.getElementById("materias");
const radios = document.querySelectorAll(".año");
const ciclosR = document.querySelectorAll(".cicloR");
let materiasArray = [];
let valorCiclo;
const materiasPorCiclo = {
  1: ["Practicas de lenguaje", "Matematicas", "Ciencias naturales", "Ciencias sociales", "Inglés", "Educación física", "Educación artística", "Construcción de la ciudadanía", "Lenguaje tecnológico", "Procesos tecnológicos", "Sistemas tecnológicos"],
  2: ["Prácticas del lenguaje", "Matemáticas", "Historia", "Geografía", "Biología", "Fisicoquímica", "Inglés", "Educación física", "Educación Artística", "Construcción de la ciudadanía", "Lenguaje tecnológico", "Procesos tecnológicos", "Sistemas tecnológicos"],
  4: ["Literatura", "Inglés", "Educación física", "Salud y adolescencia", "Historia", "Geografía", "Matemática ciclo sup.", "Física", "Química", "Lenguajes artis/music", "Guion", "Morfológia visual", "Morfológia sonora", "Introd. a los multimed."],
  5: ["Literatura", "Inglés", "Educación física", "Política y ciudadanía", "Historia", "Geografía", "Análisis matemático", "Comunicación", "Metodología de la investigación", "Lenguajes artis/plástica", "Guion", "Gráfica editorial", "Tecnología del sonido", "Sistemas multimediales"],
  6: ["Literatura", "Inglés", "Educación física", "Filosofía", "Arte", "Matemática aplicada", "Leng. Artist./Teatro y Diseñ. escenogr.", "Gestión de proyectos", "Diseño gráfico", "Derechos del trabajador", "Síntesis de imagen y Animación", "Realización audiovisual", "Sistemas multimediales"],
  7: ["Prácticas profesionalizantes/multimedial", "Emprendim. Produc. y desarr. local", "Teoría de la comunicación", "Ética y deontología profesional", "Marketing de servicios", "RealizaciÓn audiovisual", "Arte digital y diseño web", "Tecnología y producción gráfica"],
  8: ["Literatura", "Inglés", "Educación física", "Salud y adolescencia", "Historia", "Geografía", "Matemática ciclo sup.", "Física", "Química", "Tecnologías electrónicas", "Laboratorio de programación", "Laboratorio de hardware", "Laboratorio de sist. operativos", "Laboratorio de aplicaciones"],
  9: ["Literatura", "Inglés", "Educación física", "Política y ciudadanía", "Historia", "Geografía", "Análisis matemático", "Sistemas digitales", "Base de datos", "Modelos y sistemas", "Laboratorio de programación ||", "Laboratorio de redes informáticas", "Laboratorio de diseño web", "Lab. de diseño de base de datos"],
  10: ["Literatura", "Inglés", "Educación física", "Filosofía", "Arte", "Matemática discreta", "Sistemas digitales", "Gestión y autogestión", "Seguridad informática", "Derechos del trabajador", "Lab. de programación |||", "Lab. de proc. industr.", "Desar. de app. web estáticas", "Desar. de app. web dinámicas"],
  11: ["Prácticas profesionalizantes/programación", "Emprendim. Produc. y desarr. local", "Evaluac. de proyec.", "Modelos y sistemas", "Organización y métodos", "Sistemas computacionales", "Desarr. de software para plataf. moviles", "Implemen. de sitios web dinámicos"]
};

ciclosR.forEach((ciclo) => {
  ciclo.addEventListener("click", () => {
    valorCiclo = ciclo.value;
    const superior=document.getElementById("ciclo_superior")
    const basico=document.getElementById("ciclo_basico")
    if (ciclo.value == "basico") {
      superior.classList.add("hidden")
      superior.classList.remove("show")
      basico.classList.add("show")
    } else {
      superior.classList.add("show")
      basico.classList.remove("show")

    }
  });
});
// Iterar sobre cada elemento y agregar un event listener
radios.forEach((radio) => {
  radio.addEventListener("click", () => {
    if (radio.value > 0 && radio.value <= 3) {
      radio.value == 3 ? (radio.value = 2) : null;
      materiasArray = materiasPorCiclo[radio.value];
    } else if (radio.value > 3 && valorCiclo == "tecmu") {
      materiasArray = materiasPorCiclo[radio.value];
    } else if (radio.value > 3 && valorCiclo == "tecpro") {
      materiasArray = materiasPorCiclo[parseInt(radio.value, 10) + 4];
    }

    // Obtener todas las etiquetas con la clase "label"
    let labels = document.querySelectorAll(".label");
    materias.classList.add("show")

    const inputs = document.querySelectorAll("#materias input");
    // Ocultar los inputs dependiendo de la segund los elementos del array e inputs
    for (let i = materiasArray.length; i < inputs.length; i++) {
      inputs[i].classList.add("hidden")
      inputs[i].classList.remove("show")
    }
    // Iterar sobre cada etiqueta y asignar el valor correspondiente del array
    labels.forEach((label, index) => {
      // Verificar si hay un elemento en el array antes de intentar acceder
      if (materiasArray[index]) {
        label.innerHTML = materiasArray[index];
        inputs[index].classList.add("show")
      } else {
        // En caso de que el índice esté fuera del rango del array
        label.innerHTML = "";
      }
    });
  });
});


