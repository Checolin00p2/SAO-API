class Fill{
    constructor(){
        var temp = document.getElementById("chaar");
        var capit = document.getElementById("char");
        this.url = `http://localhost:3000/${temp.value}/${capit.value}`;
    }
    verAlumnos(element){
        let html = '';
        fetch(this.url).then( response => response.json()).then( cap => {
        html += `
                <p>Capitulo: ${cap.chapter}</p>
                <p>Nombre del capitulo: ${cap.name}</p>
                <p>Temporada: ${cap.season}</p>
                <p>
                <video width:100%; height:100%; controls>
                <source src=${cap.video} type='video/mp4' label='480p' data-res='480'>
                </video>
                </p>`;
        element.innerHTML = html;
        });
    }
}

//<source src="https://www121.playercdn.net/86/3/vhrOpo9DkjZYJNk-12Cm_A/1561087571/190620/922G48BAEFOC27EGYZYSV.mp4" type="video/mp4" label="480p" data-res="480">
//</video>