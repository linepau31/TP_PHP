


 
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
			document.getElementById('pseudo').value = "";
			document.getElementById('password').value = "";

	}














