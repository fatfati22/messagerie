let messages = [];
let main = document.querySelector("#main");

async function getAllMessages() {
    const baseUrl = "getAllMessages.php";
    try {
        let donnees = await fetch(baseUrl);
        if (!donnees.ok) {
            throw new Error(donnees.status);
        } else {
            let data = await donnees.json();
            messages = data;
            affichage();
        }
    } catch (e) {
        if (e) {
            console.error(e);
        }
    }
}
getAllMessages();

function affichage() {
    const messagesPublics = messages.filter(
        (message) => message.id_recepteur == null
    );
    console.log(messagesPublics);
    let html = "";
    for (const messagePub of messagesPublics) {
        html += `<div class="message"><div class="modification"><img src="./images/${messagePub.avatar}" width="50px" alt="ffff" /><p>${messagePub.prenom}</p><p>${messagePub.nom}</p><p>${messagePub.heure}</p></div><p class="fff">${messagePub.contenu}</p></div>`;
    }
    main.innerHTML = html;
}
