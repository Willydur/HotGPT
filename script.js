// on encapsule le boutton
let sum = document.getElementById("submit");
sum.addEventListener("click", function () {
  champ = document.getElementById("input");

  // on recupère les valeurs des champs
  let userInput = champ.value;

  // on efface les champs
  champ.value = "";

  // console.log(userInput);

  // on affiche l'entrée de l'utilisateur
  let p = document.createElement("p");
  p.textContent = userInput;
  document.querySelector(".content").appendChild(p);

  // on affiche la reponse de l'IA
  setTimeout(function () {
    // on ajoute le texte dans la page
    let p = document.createElement("p");
    p.textContent = randomString();
    document.querySelector(".content").appendChild(p);
  }, 1000);

  // on focus sur le champ
  champ.focus();
});

// fonction qui cree une chaine de smyleys aleatoire
function randomString() {
  let chars = "🍌🍆🍉";
  let string_length = Math.floor(Math.random() * 10) + 1;
  let randomstring = "";
  for (let i = 0; i < string_length; i++) {
    let rnum = Math.floor(Math.random() * chars.length);
    randomstring += chars.substring(rnum, rnum + 1);
  }
  return randomstring;
}
