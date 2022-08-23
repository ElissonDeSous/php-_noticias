<?php
$autenticacao = false;
$login_registrado = [
    ['email' => 'adm3663@outlook.com','senha'=> '12345'],
    ['email' => 'elissondsousa@gmail.com','senha'=> '123'],
];
 foreach($login_registrado as $login){
   if($login['email'] == $_POST['Email'] && $login['senha']== $_POST['Senha'])
   {
       $autenticacao = true;
   }

   if($autenticacao == true)
   {
         header('location:home.php');
   }else{
    header('location:index.php?login=error');
   }
}
?>