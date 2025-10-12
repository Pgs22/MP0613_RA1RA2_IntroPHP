<?php
session_start();

class P48_UserLogin {
    public function main(): void {
        // Write your code here
       
        //Comprobamos si se ha enviado el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Nos guardamos los datos de entrada al formulario en variables
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';
            //Añadimos los valores que queremos comparar con los introducidos
            $valid_username = 'admin';
            $valid_password = 'secret';
            //Comprobamos si coinciden los valores
            if ($username === $valid_username && $password === $valid_password) {
                //Si coinciden lo marcamos como true e imprimimos mensaje
                $_SESSION['loggedin'] = true;
                echo "Welcome, admin\n";
                //Si no coincide
             } else {
                //Lo marcamos como false e imprimimos mensaje
                $_SESSION['loggedin'] = false;
                echo "Invalid credentials\n";
            }
        }    
    }
}
