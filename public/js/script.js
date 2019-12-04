var i = 0;
var add_recipe = document.getElementById('add');
if (add_recipe) {
	add_recipe.addEventListener('click', function(e) {

		var new_ingredient = document.createElement('div');


		var input_1 = document.createElement('input');
		input_1.setAttribute('type','text');
		input_1.setAttribute('name','nom_ingredient'+i);
		input_1.setAttribute('placeholder','nom');
		new_ingredient.appendChild(input_1);

		var input_2 = document.createElement('input');
		input_2.setAttribute('type','text');
		input_2.setAttribute('name','quantite_ingredient'+i);
		input_2.setAttribute('placeholder','quantité');
		new_ingredient.appendChild(input_2);

		var select_1 = document.createElement('select');
		select_1.setAttribute('name','unit'+i);

		var text = document.createTextNode('Kilogramme');
		var option_1 = document.createElement('option');
		option_1.setAttribute('value','kilogramme');
		option_1.appendChild(text);
		select_1.appendChild(option_1);

		var text_2 = document.createTextNode('Litre');
		var option_2 = document.createElement('option');
		option_2.setAttribute('value','litre');
		option_2.appendChild(text_2);
		select_1.appendChild(option_2);

		new_ingredient.appendChild(select_1);

		document.getElementById('ingredient').appendChild(new_ingredient);

		i++;
	});
}

	var nb_personnes = document.getElementById('nb_personnes');

	if (nb_personnes) {

		var quantite = [];
		var i1 = 0;
	   	var next = true;

    	while(next){
    		var ingredient = document.getElementById('base_quantity'+i1);

	      	if (ingredient) {
	      		quantite.push(ingredient.value);
				i1++;
	    	}else{
	    		next = false;
	    	}

    	}/*EO while */

  		nb_personnes.addEventListener('change', function() {

	    	for (var i = 0; i < quantite.length ; i++) {
	    		var affichage = document.getElementById('quantity'+i);
	    		var quantite_total = nb_personnes.value * quantite[i];
	    		var quantite_ingredient = document.createTextNode(quantite_total.toFixed(3));
	    		affichage.replaceChild(quantite_ingredient, affichage.firstChild);

	    	}/* eo for */
		});/* EO event change */

	

	}/* EO if/else */


	


  


/*	
	var quantite_bdd = <?php echo $donnee['quantity']; ?>;

	var quantite_total = nb_personnes.value * quantite_bdd;

	var quantite_ingredient = document.createTextNode(quantite_total);

	var affichage = document.getElementById('quantity');

	affichage.appendChild(quantite_ingredient);
	quantite_total = nb_personnes.value * quantite_bdd;
   	quantite_ingredient = document.createTextNode(quantite_total);
   	affichage.replaceChild(quantite_ingredient, affichage.firstChild);
*/


