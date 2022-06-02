<?php
    class Persona
    {
        private $rut;
        private $nombre;
        private $sexo;
        private $est_civil;

       
        #constructor

        public function __construct($rut,$nombre,$sexo,$est_civil){
            $this->rut = $rut;
            $this->nombre = $nombre;
            $this->sexo = $sexo;
            $this->est_civil = $est_civil;

        }

        #Metodos accesadores
        public function getRut(){
            return $this->rut;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function getEst_civil(){
            return $this->est_civil;
        }

        public function setRut($rut){
             $this->rut = $rut;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;

        }

        public function setSexo($sexo){
            $this->sexo = $sexo;

        }

        public function setEst_civil($est_civil){
            $this->est_civil = $est_civil;
        }
    }
    


?>