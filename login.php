<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<style>
    body{
    background-color: rgb(196, 188, 188);
    font-family: Arial, Helvetica, sans-serif;
    
    padding: 0;
    margin: 0;


    
}
#papa{
    height: 744.4px;
    background-image: url("femina-28-psycho-emotion-en-musique.jpg");
    background-repeat: no-repeat;
    background-size: 1420px;
    background-attachment: local;
    padding:  0px 0px 0px 70%;
}
header {
    background-color: #ece8e8;
    color: rgb(75, 73, 73);
    display: flex;

    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    background: url("site4.jpg") no-repeat;
    background-size: 100%;
    height: 120px;
  }

  #titre{
    text-align: center;
    font-size: 60px;
    color: beige;
  }
  #connexion{
    font-size: 60px;
    color: rgb(221, 222, 226);
    margin-left: -6%;
    margin-top: 12px;
  }
h1{
    color: rgb(53, 114, 245);
    text-align: center;
    font-size: 30px;
    font-weight: 25px;
}  
span{
    font-size: 45px;
    font-weight: 25px;
}  
h5{
    color: rgb(41, 35, 35);
}
#a1{
    background-color: transparent;
    border: solid white;
    border-radius: 10px;
    width: 270px;
    height: 270px;
    padding: 15px;
    margin: -9px;
                                        

}
#a2{
    height: 24px;
    width: 225px;
    border-radius: 7px 7px;
    border-color: #d6d1d1 5px;
    background-color: aliceblue;
}
#a3{
    height: 24px;
    width: 225px;
    border-radius: 7px 7px;
    background-color: aliceblue;
}
#a4{
    width: 225px;
    height: 27px;
    border-radius: 7px 7px;
    color: rgb(243, 238, 238);
    background:rgb(0, 110, 255);
}
#a5{
    text-decoration: none;
    color: white;
    font-family: Arial, sans-serif;
}
#a7{
    color: aliceblue;
    background-color: #d6d1d1;
    text-decoration-color: #d6d1d1;
    
}
#a6{
    background-color: rgb(6, 146, 6);
    border-radius: 5px 5px;
    width: 225px;
    height: 27px;
    color: rgb(243, 238, 238);
}
</style>
<body>

    <header>
        <h1 id="titre">MéloBooks </h1><br>
        <h1> <marquee behavior="" direction="">Bienvenue sur Mon site de téléchargement de musique. </marquee></h1>
        <audio controls="controls " loop="loop" autoplay="autoplay">
            <source src="solo_mp3.mp3">
        </audio>
    </header>
    <footer>
    <div id="papa"><br><br>
        
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2 id="connexion">Connexion </h2>
        <div id="a1">
            <center>
                <form action="" method="post">
                    <input type="email" name="email" id="a2" required placeholder="Adresse e-mail..."><br><br>

                    <input type="password" name="password" id="a3" required  placeholder= "Mot de passe..."><br><br>

                    <input type="submit" id="a4" name="submit" value="Se connecter">
                
                    <a href="passforget.php" id="a5"><h6 >Mot de passe oublié ?</h6></a>
                    <hr id="a7"><br>
                    <a href="signup.php"><input type="button" id="a6" value="Créer nouveau compte"></a>
                </form>
            </center>
        </div>
        <?php
            if(isset($_POST["submit"])){
                $email=htmlentities($_POST["email"]);
                $db=new PDO("mysql:host=localhost;dbname=debut_php","root","");
                $request= $db->query("select* from melodie where email='".$email."'");
                $data= $request->fetch();
                //Vérification de l'existance du compte
                if($data){
                    //Comparer le password de l'inscription au password de la connexion
                    $dbpassword=$data["password"];
                    if(password_verify($_POST["password"],$dbpassword)){
                        Session_start();
                        $_SESSION["melodie"]=$data["email"];
                        $_SESSION["id"]=$data["id"];
                        header("location:./accueil.php");
                }else{
                    echo "Mot de passe incorrect.Veuillez réessayer svp";
                }
                }
            }
        ?>

            
        
    </div>
    <p>© 2024 Mon site de téléchargement de musique.</p>
    </footer>

</body>
</html>