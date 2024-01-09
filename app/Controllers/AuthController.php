<?php

namespace App\Controllers;
use App\Model\User;

class AuthController extends Controller
{
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            
            $image = $_FILES['image'];
            $uploadDir = 'public/assets/uploads/'; // Assurez-vous que ce dossier existe sur votre serveur
            $uploadPath = $uploadDir . basename($image['name']);
            move_uploaded_file($image['tmp_name'], $uploadPath);

            $user = new User();
            $user->setUsername($username);
            $user->setEmail($email);
            $user->setPassword($password);
            $user->setRoleId(2); 
            $user->setImage($uploadPath); 

            if ($user->registerAuthor()) {
                header('Location: /login'); 
                exit();
            } else {
                echo "Erreur lors de l'enregistrement.";
            }
        } else {
            $this->view('auth.register');
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userModel = new User();
            $user = $userModel->selectUserByEmail($email);

            if ($user && password_verify($password, $user->password)) {
                
                $_SESSION['user'] = $user;
                header('Location: /dashboard'); 
                exit();
            } else {
                
                echo "Identifiants invalides.";
            }
        } else {
            
            $this->view('auth.login');
        }
    }

    public function logout()
    {
        
        session_destroy();
        header('Location: /');
        exit();
    }
}