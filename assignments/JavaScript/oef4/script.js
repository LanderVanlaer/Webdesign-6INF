document.querySelectorAll('form input').forEach(e => e.addEventListener('input', () => {
    let stars = "";
    for (let i = 0; i < Number(form.judgement.value); i++) {
        stars += "★";
    }
    for (let i = 0; i < 5 - Number(form.judgement.value); i++) {
        stars += "☆";
    }


    document.querySelector('article').innerText = `Formulier
Naam: ${form.name.value}
Adres: ${form.adres.value}
Postcode: ${form.postalcode.value}
Geboorte datum: ${form.date.value}

Meer afbeeldingen: ${form.morePictures.checked ? "★" : "☆"}
Favoriete links: ${form.favfavoriteLinks.checked ? "★" : "☆"}
Video's: ${form.video.checked ? "★" : "☆"}

${stars}
`
}))