let users = [];
let aside = document.querySelector("#aside");

async function getAllUsers() {
    const baseUrl = "getAllUsers.php";
    try {
        let donnees = await fetch(baseUrl);
        if (!donnees.ok) {
            throw new Error(donnees.status);
        } else {
            let data = await donnees.json();
            users = data;
            affichage();
        }
    } catch (e) {
        if (e) {
            console.error(e);
        }
    }
}
getAllUsers();

function affichage() {
    let html = "";
    for (const user of users) {
        html += `<a href="messageprive.php?id=${user.id}"><div class="nomListeUser"><img class="mini" src="./images/${user.avatar}" alt=""><p class="nomListe">${user.pseudo}</p></div></a>`;
    }
    aside.innerHTML = html;
}
