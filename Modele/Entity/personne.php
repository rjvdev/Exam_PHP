<?php
     class personne
	 {
	    private $id;
		private $nom;
		private $prenom;
		private $adresse;
		
		public function getId()
		{
			return $this->id;
		}
		public function setId($id)
		{
			$this->id=$id;
			return $this;
		}
		
		public function getNom()
		{
			return $this->nom;
		}
		public function setNom($nom)
		{
			$this->nom=$nom;
			return $this;
		}
		
		public function getPrenom()
		{
			return $this->prenom;
		}
		public function setPrenom($prenom)
		{
			$this->prenom=$prenom;
			return $this;
		}
		
		public function getAdresse()
		{
			return $this->adresse;
		}
		public function setAdresse($adresse)
		{
			$this->adresse=$adresse;
			return $this;
		}
	 }
?>