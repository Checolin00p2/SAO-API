const leer = document.querySelector('#anime');
const cargar = document.querySelector('#cargar');

cargar.addEventListener('click', e => {

    e.preventDefault();
    e.stopPropagation();

    var fill = new Fill();

    fill.verAlumnos(leer);
});