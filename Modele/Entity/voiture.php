<?php
     class voiture
	 {
	    private $id;
		private $numero;
		private $type;
		private $marque;
		private $idPers;
		
		public function getId()
		{
			return $this->id;
		}
		public function setId($id)
		{
			$this->id=$id;
			return $this;
		}
		
		public function getNumero()
		{
			return $this->numero;
		}
		public function setNumero($numero)
		{
			$this->numero=$numero;
			return $this;
		}
		
		public function getType()
		{
			return $this->type;
		}
		public function setType($type)
		{
			$this->type=$type;
			return $this;
		}
		
		public function getMarque()
		{
			return $this->marque;
		}
		public function setMarque($marque)
		{
			$this->marque=$marque;
			return $this;
		}
		
		public function getIdPers()
		{
			return $this->idPers;
		}
		public function setIdPers($idPers)
		{
			$this->idPers=$idPers;
			return $this;
		}
	 }
?>