
const bouton = document.getElementById("competences2");
const cible = document.getElementById("competences");
bouton.addEventListener("click", () => {
    cible.scrollIntoView({ behavior: "smooth" }); 
});

const bouton2 = document.getElementById("experiences2");
const cible2 = document.getElementById("experiences");
bouton2.addEventListener("click", () => {
    cible2.scrollIntoView({ behavior: "smooth" }); 
});

const bouton3 = document.getElementById("formation2");
const cible3 = document.getElementById("formation");
bouton3.addEventListener("click", () => {
    cible3.scrollIntoView({ behavior: "smooth" }); 
});

const bouton4 = document.getElementById("loisirs2");
const cible4 = document.getElementById("loisirs");
bouton4.addEventListener("click", () => {
    cible4.scrollIntoView({ behavior: "smooth" }); 
});