class Fill{
    constructor(){
        var temp = document.getElementById("chaar");
        var capit = document.getElementById("char");
        this.url = `http://localhost:80/ver.php?tiempo=${temp.value}&cap=${capit.value}`;
    }
    verAlumnos(element){
        let html = '';
        fetch(this.url).then( response => response.json()).then( cap => {
        html += `
                <p>Capitulo: ${cap.chapter}</p>
                <p>Nombre del capitulo: ${cap.name}</p>
                <p>Temporada: ${cap.season}</p>
                <p1><iframe width='680' height='480' frameborder='0' src='${cap.video}' scrolling='no' allowfullscreen='' ></iframe>
                
                </p1>
                <br><br>`;
        element.innerHTML = html;
        });
    }
}
