<?php 

	 class personnage{

		private $force = 50;
        private $localisation = 'Bourg Palette';
        private $experience = 1;
        private $degats = 100;
        private $pv = 1000;
        
        

        function frapper($persoAFrapper){
        	$persoAFrapper->degats += $this->force;
        }
        function gagnerExperience(){
		    $this->experience = $this->experience + 1;
		}

		function deplacer( ){

		}

        function parler ( ){
        	echo 'Hello invocateur tu es mon maître !';
        }

        function afficherExperience()
		{
		  echo $this->experience;
		}

		function setForce($force)
		{
		if (!is_int($force)) 
		{
		  trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
		  return;
		}

		if ($force > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
		{
		  trigger_error('La force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
		  return;
		}

		$this->force = $force;
		}

		// Mutateur chargé de modifier l'attribut $_experience.
		public function setExperience($experience)
		{
		if (!is_int($experience)) // S'il ne s'agit pas d'un nombre entier.
		{
		  trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
		  return;
		}

		if ($experience > 100) // On vérifie bien qu'on ne souhaite pas assigner une valeur supérieure à 100.
		{
		  trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
		  return;
		}

		$this->experience = $experience;
		}

		// Ceci est la méthode degats() : elle se charge de renvoyer le contenu de l'attribut $_degats.
		public function degats()
		{
		return $this->degats;
		}

		// Ceci est la méthode force() : elle se charge de renvoyer le contenu de l'attribut $_force.
		public function force()
		{
		return $this->force;
		}

		// Ceci est la méthode experience() : elle se charge de renvoyer le contenu de l'attribut $_experience.
		public function experience()
		{
		return $this->experience;
		}
	}
	$perso1 = new Personnage();
	$perso2 = new Personnage();

	$perso1->setForce(10);
	$perso1->setExperience(2);

	$perso2->setForce(90);
	$perso2->setExperience(58);

	$perso1->frapper($perso2);
	$perso1->gagnerExperience();

	$perso2->frapper($perso1);
	$perso2->gagnerExperience();


	echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.<br />';
	echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.<br />';
	echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.<br />';
	?>