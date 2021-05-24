let numPreferiti=0, numOfferte=0;
let offertePreferite =  new Array();

let stellaPiena="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Red_star.svg/260px-Red_star.svg.png";
let stellaVuota="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Stellone_d%27Italia.svg/1200px-Stellone_d%27Italia.svg.png";

let main= document.getElementById("main");
let avviso = document.getElementById("avviso");
let overlay = document.getElementById("overlay_commenti");
let modaleCommenti = document.getElementById("modale_commenti");
let formCommento = document.getElementById("formCommento");
let bottoneInviaCommento = document.getElementById("invia_commento");
let invioRicerca = document.getElementById("formRicerca");
let avvisoCommenti = document.getElementById("avviso_commenti");

avviso.classList.add("hide");
overlay.style.display = "none";
modaleCommenti.style.display = "none";

overlay.addEventListener("click", chiudiCommenti);
formCommento.addEventListener("submit", aggiungiCommento)
formRicerca.addEventListener("submit", ricerca)

let url_offerte_preferite="funzioni/cercaOffertePreferite.php";
fetch(url_offerte_preferite).then(onResponse).then(onOffertePreferite);

function onOffertePreferite(json){
    console.log(json)

    for(let i=0; i<json.length; i++)
        offertePreferite[i]=json[i].id;

  
}

function mostraDescrizione(event){
    console.log("Ho cliccato")
    console.log(event.currentTarget);
    let descrizione= event.currentTarget.parentNode.childNodes[2];
    let nascondi= event.currentTarget.parentNode.childNodes[4];
    console.log(descrizione)
    descrizione.classList.remove("hide");
    event.currentTarget.classList.add("hide");
    nascondi.classList.remove("hide");

}

function nascondiDescrizione(event){

    console.log("Ho cliccato")
    console.log(event.currentTarget);
    let descrizione= event.currentTarget.parentNode.childNodes[2];
    let mostra= event.currentTarget.parentNode.childNodes[3];
    console.log(descrizione)
    descrizione.classList.add("hide");
    event.currentTarget.classList.add("hide");
    mostra.classList.remove("hide");
}

function aggiungiPreferiti(event){
    let offerta = event.currentTarget.parentNode;

    let preferiti = document.getElementById("preferiti");

    //preferiti.appendChild(offerta);
    let stella =     offerta.childNodes[1];
    stella.src=stellaPiena;

    stella.removeEventListener("click", aggiungiPreferiti);
    stella.addEventListener("click", rimuoviPreferiti);

    let url="funzioni/aggiungiPreferiti.php";

    let formData = new FormData();
    let link = offerta.dataset.link;
    let titolo = offerta.dataset.titolo;
    let descrizione = offerta.dataset.descrizione;
    let id= offerta.dataset.id;

    formData.append("id", id);
    formData.append("titolo", titolo);
    formData.append("descrizione", descrizione);
    formData.append("link", link);


//ora eseguiamo il fetch:
    fetch(url, {
        method: "POST",
        body: formData
    }).then(onResponse).then(onAggiungiPreferiti);

}

function onAggiungiPreferiti(json){
    console.log(json)
    
}

function onRimuoviPreferiti(json){
    console.log(json)
}

function rimuoviPreferiti(event){

    let offerta = event.currentTarget.parentNode;

    let offerte = document.getElementById("main");

    let preferiti = document.getElementById("preferiti");


    let stella =     offerta.childNodes[1];
    stella.src=stellaVuota;

    stella.removeEventListener("click", rimuoviPreferiti);
    stella.addEventListener("click", aggiungiPreferiti);

    let url="funzioni/rimuoviPreferiti.php";

    let formData = new FormData();
    let titolo = offerta.dataset.titolo;
    console.log(titolo)

    formData.append("titolo", titolo);

//ora eseguiamo il fetch:
    fetch(url, {
        method: "POST",
        body: formData
    }).then(onResponse).then(onRimuoviPreferiti);


}


function ricerca(event){

    event.preventDefault();
    let numRisultati=0;

    let offerte = document.getElementById("main")
    let ricerca = document.getElementById("ricerca");

    let testoRicerca=ricerca.value;                     //Prendiamo la sottostringa che vogliamo cercare nel titolo delle offerte

    console.log("Sono cercaLavoro");

    const off_api_endpoint = "https://api.adzuna.com/v1/api/jobs/gb/search/1";
    const id_off ="ecd078c8"
    const key_off = "fa1a1c738ab24692f3581f304d885680";

    rest_url= off_api_endpoint + "?app_id=" + id_off + "&app_key=" + key_off + "&title_only="+testoRicerca;
//ora eseguiamo il fetch:
    fetch(rest_url).then(onResponse).then(onJson);
}

function cercaLavoro(){

    console.log("Sono cercaLavoro");

    const off_api_endpoint = "https://api.adzuna.com/v1/api/jobs/gb/search/1";
    const id_off ="ecd078c8"
    const key_off = "fa1a1c738ab24692f3581f304d885680";

    rest_url= off_api_endpoint + "?app_id=" + id_off + "&app_key=" + key_off;
//ora eseguiamo il fetch:
    fetch(rest_url).then(onResponse).then(onJson);

}




function onJson(json){
    console.log('JSON off ricevuto');
    console.log(json);

    main.innerHTML="";
    const results = json.results
    for(result of results)
    {
        console.log(result+' questo e un result');
    }

    if(results.length === 0)
    {
        const errore = document.createElement("h1");
        const messaggio = document.createTextNode("Nessun risultato!");
        errore.appendChild(messaggio);
        library.appendChild(errore);
    }

    for(let i =0; i < json.results.length; i++) {
        let title = json.results[i].title;
        let description = json.results[i].description;
        let redirect_url = json.results[i].redirect_url;
        let id= json.results[i].id

        let titolo = document.createElement("h1");
        let descrizione = document.createElement("p");
        let link = document.createElement("a");
        let contenitore = document.createElement("div");
        let testo = document.createElement("div");
        let mostra = document.createElement("button");
        let nascondi = document.createElement("button");
        let stella = document.createElement("img");
        let commentIcon=document.createElement("img");

        contenitore.classList.add("offerta");
        testo.classList.add("testo");
        titolo.classList.add("titolo");
        descrizione.classList.add("corpo");
        mostra.classList.add("bottone");
        nascondi.classList.add("bottone");
        nascondi.classList.add("hide");
        descrizione.classList.add("hide");
        stella.classList.add("stella");
        commentIcon.src="../img/comment.png"
        commentIcon.classList.add("commentIcon");

        let flag=false;
        for(let i=0; i<offertePreferite.length; i++){
            if(offertePreferite[i]==id)
                flag=true;
        }

        if(flag){
            stella.src = stellaPiena;
            stella.addEventListener("click", rimuoviPreferiti);
        }
        else{
            stella.src = stellaVuota;
            stella.addEventListener("click", aggiungiPreferiti);
        }


        
        titolo.textContent = title;
        descrizione.textContent = description;
        link.href = redirect_url;
        link.textContent = "Link Offerta";
        mostra.textContent = "Mostra Descrizione";
        nascondi.textContent = "Nascondi Descrizione";

        contenitore.dataset.titolo=title;
        contenitore.dataset.link=link;
        contenitore.dataset.descrizione=description;
        contenitore.dataset.id=id;

        mostra.addEventListener("click", mostraDescrizione);
        nascondi.addEventListener("click", nascondiDescrizione);
        commentIcon.addEventListener("click", apriCommenti);


        testo.appendChild(link);
        testo.appendChild(titolo);
        testo.appendChild(descrizione);
        testo.appendChild(mostra);
        testo.appendChild(nascondi);
        contenitore.appendChild(testo);
        contenitore.appendChild(stella);
        contenitore.appendChild(commentIcon);



        main.appendChild(contenitore);
        numOfferte++;
    }
}

function aggiungiCommento(event){
    
    event.preventDefault();
    console.log("Aggiungo "+ formCommento.dataset.id)
    let url="funzioni/aggiungiCommento.php";
    let formData = new FormData();

    formData.append("id", formCommento.dataset.id);
    formData.append("commento", formCommento.commento.value)

    formCommento.commento.value="";

    fetch(url, {
        method: "POST",
        body: formData
    }).then(onResponse).then(onAggiungiCommento);
}

function onAggiungiCommento(json){
    console.log(json);

    if(json==1){
        aggiornaCommenti(formCommento.dataset.id);
    }
}

function apriCommenti(event){
    let offerta= event.currentTarget.parentNode;
    console.log("Sono apri commenti di "+offerta.dataset.id);
    
    overlay.style.display = "block";
    modaleCommenti.style.display = "flex";
    formCommento.dataset.id = offerta.dataset.id;
    fetch("funzioni/cercaCommenti.php?id="+offerta.dataset.id).then(onResponse).then(onApriCommenti);
}

function aggiornaCommenti(id){
    console.log("Sono apri commenti di "+id);
    
    overlay.style.display = "block";
    modaleCommenti.style.display = "flex";
    formCommento.dataset.id = id;
    fetch("funzioni/cercaCommenti.php?id="+id).then(onResponse).then(onApriCommenti);
}

function onApriCommenti(json){
    console.log(json)

    window.scrollTo(0,0);

    let commenti = document.getElementById("commenti");
    commenti.innerHTML="";

    if(json==-1){
        avvisoCommenti.classList.remove("hide")
    }
    else{
        avvisoCommenti.classList.add("hide")
    }

    for(let i=0; i<json.length; i++){
        let data_commento = json[i].data_commento;
        let contenuto = json[i].contenuto;
        let email_utente = json[i].email_utente;

        let commento = document.createElement("div");
        let testo = document.createElement("div");

        commento.classList.add("commento");

        let label = document.createElement("label");

        testo.textContent=contenuto;
        label.textContent=email_utente+" "+data_commento;

        commento.appendChild(label);
        commento.appendChild(testo);

        commenti.appendChild(commento);

        console.log("ho appeso tutto");
    }
}

function chiudiCommenti(event){
    overlay.style.display = "none";
    modaleCommenti.style.display = "none";


}

function onConfrontoOfferte(json){
    console.log(json);
}

function onResponse(response){
    console.log('Risposta ricevuta');
    return response.json();
}



