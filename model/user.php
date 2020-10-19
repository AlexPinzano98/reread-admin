<?php
    class User{
        //Atributos
        private $id_user;
        private $email;
        private $passwd;
        private $name;
        //Constructor
        public function __construct($email, $passwd){
            $this->email=$email;
            $this->passwd=$passwd;
        }
        //Metodos GETTERS AND SETTERS
        //metodo get para devolver valores y set para meter valores
        /**
         * Get the value of password
         */ 
        public function getPasswd()
        {
                return $this->passwd;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPasswd($passwd)
        {
                $this->passwd = $passwd;

                return $this;
        }

        /**
         * Get the value of id_user
         */ 
        public function getId_user()
        {
                return $this->id_user;
        }

        /**
         * Set the value of id_user
         *
         * @return  self
         */ 
        public function setId_user($id_user)
        {
                $this->id_user = $id_user;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }
   }
?>