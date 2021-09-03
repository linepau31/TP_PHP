


 
const promise = fetch('https://www.ericfreelance.fr/api/check_user.php/user', {

  method: 'POST',
  body: JSON.stringify(),
  headers: {
      'Content-Type': 'application/json'
  },
});

promise.then(async (response) => {

  try {
    console.log(response);
    const contenu = await response.json();
    console.log(contenu);
    
    if(response.ok){
      console.log(`response ok`);
    }
  
  } 
  catch (err) {
    console.log(err);
    
  }
});


const Login = document.getElementById('pseudo');
const Password = document.getElementById('password');



// Effacer les données et changer les chiffres de la grilles
effacer();

function effacer() {

	let nb_alea;
	let test = true;
	let chaine = "";

	purger(); // permet de nettoyer la grille pour régenerer la grille

	for (let i = 0; i < 10; i++) { // chiffre aléatoire avec des cellules vides

		while (test == true) {
			nb_alea = Math.floor(Math.random() * 16); // floor au dessus du chiffre 15 -> 16
			if (chaine.indexOf("-" + nb_alea + "-") > -1)
			{
				nb_alea = Math.floor(Math.random() * 16);
			}
			else {
				document.getElementById('case' + nb_alea).innerHTML = "<input type='button' value='" + i + "' onClick='document.getElementById(\"password\").value += " + i + "' />";
				chaine += "-" + nb_alea + "-";
				test = false;
			}
		}

		test = true;
	}

}

function purger() { // régenère la grille
	for (let i = 0; i < 16; i++) {
		document.getElementById('case' + i).innerHTML = ""; // réinitialise à vide ""
	}
	document.getElementById('login').value = "";
	document.getElementById('password').value = "";

}



// un Formulaire plus précis pour les utilisateurs
const Form = document.getElementById('myForm');

Form.addEventListener('submit', (e) => {

	const inpEmail = document.getElementById('login');

	if(inpEmail.value.trim() == ""){ // si vide on arrête la soumission

		const ErrorEmail = document.getElementById('erreurEmail');

		ErrorEmail.innerHTML = "Le champs Identification est requis !";
		ErrorEmail.style.color = 'red';

		e.preventDefault();
	}

	setTimeout(function() {
		document.getElementById('erreurEmail').innerHTML = "";
	},2000);

	const inpPassword = document.getElementById('password');
	let Regex = /^[0-9]+$/; // Accepte les chiffres de 0 à 9 répéter

	if(inpPassword.value.trim() == ""){ // si vide on arrête la soumission


		const ErrorPassword = document.getElementById('erreurPassword');
		ErrorPassword.innerHTML = "Le champs Mot de Passe est requis !";
		ErrorPassword.style.color = 'red';

		e.preventDefault();
	}
	else if (Regex.test(inpPassword.value) == false){ // si ce n'est pas bon, d'autre valeurs que les chiffres

		const ErrorPassword = document.getElementById('erreurPassword');
		ErrorPassword.innerHTML = "Le Mot de Passe doit comporter uniquement des chifres !";
		ErrorPassword.style.color = 'red';

		e.preventDefault();
	}

	setTimeout(function() {
		document.getElementById('erreurPassword').innerHTML = "";
	},2000);
});














