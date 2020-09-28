const tabel = document.querySelector('table tbody');
if (!localStorage.getItem('leerlingen')) localStorage.setItem('leerlingen', "[]");

document.querySelector("#voegLeerlingToe").addEventListener('click', () => {
    let leerling = {};
    leerling.naam = prompt("Geef de naam van de leerling", "Jos");
    if (!leerling.naam) return;

    do leerling.geslacht = prompt("Wat is het geslacht van de leerling?", "M of V").toLowerCase();
    while (!(leerling.geslacht == 'm' || leerling.geslacht == 'v'));

    do leerling.geboortejaar = Number(prompt("Geef het geboortejaar?", 2000));
    while (!leerling.geboortejaar);

    let leerlingen = JSON.parse(localStorage.getItem('leerlingen'));
    leerlingen.push(leerling);
    localStorage.setItem('leerlingen', JSON.stringify(leerlingen));
})

document.querySelector("#toonTabel").addEventListener('click', () => {
    const leerlingen = JSON.parse(localStorage.getItem('leerlingen'));

    tabel.innerHTML = "";
    leerlingen.forEach(lln => tabel.innerHTML += `
    <tr>
        <td>${lln.naam}</td>
        <td>${lln.geboortejaar}</td>
        <td>${lln.geslacht}</td>
    </tr>`);

    const totalLeeftijd = leerlingen.reduce((e, ll) => e + (new Date().getFullYear() - ll.geboortejaar), 0);
    const aantalJongens = leerlingen.reduce((e, ll) => ll.geslacht == 'm' ? e + 1 : e, 0)
    document.querySelector("section").innerHTML = `
        De leerlingen zijn samen ${totalLeeftijd} jaar oud,<br>
        De gemiddelde leeftijd is: ${totalLeeftijd / leerlingen.length} jaar,<br>
        Aantal jongens in de klas: ${aantalJongens},<br>
        Aantal meisjes in de klas: ${leerlingen.length - aantalJongens}
        `;

});