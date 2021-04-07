// Etiqueta
let glossaryButton = document.getElementById("glossaryButton")
let glossary = document.getElementById("glossary")

let closeNav = document.getElementById("shutFour")

glossaryButton.onclick = () => {
    glossary.classList.add('-openNavGlossary')
}


closeNav.onclick = () => {
    if (glossary.classList.contains('-openNavGlossary')) {
        glossary.classList.remove('-openNavGlossary')
        console.log('Hola lok')
    }
}
