<?php
    class message
    {
        public $name;
        public $email;
        public $content;

        public function set($name, $value)
        {
            $this -> $name = $value;
        }
    }