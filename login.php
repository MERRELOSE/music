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
    background-color: rgb(255, 255, 255);
    font-family: Arial, Helvetica, sans-serif;
    padding: 0;
    margin: 0;
}
#papa{
    height: 744.4px;
    background-image: url("assets/images/femina-28-psycho-emotion-en-musique.jpg");
    background-size: 100%;
    background-attachment: local;
    padding: 0px, 0px, 0px, 60%;
}
header {
    color: rgb(75, 73, 73);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    height: 80px;
}
.nav-link{
    color: #ffffff;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 4px;
    background-color: #333333;
  
  }
  .nav-link:hover{
    background-color: #555555;
  }
  .nav-link:active {
    background-color: #222222;
  }
  
  
  nav ul {
    list-style: none;
    color: rgb(24, 121, 231);
    margin: 0;
    padding: 0;
    display: flex;
  }
  
  nav li {
    margin-right: 1rem;
  }
  
  nav a {
    color: rgb(0, 0, 0);
    text-decoration: none;
    font-size: 20px;
  }
  nav a:hover{
    color:rgb(24, 121, 231);
}

  #titre{
    text-align: center;
    font-size: 40px;
    margin: 10px;
    color: rgb(0, 110, 255);
  }
  #connexion{
    font-size: 60px;
    color: rgb(221, 222, 226);
    margin-left: -6%;
    margin-top: 12px;
  }
.marquee{
    color: rgb(0, 0, 0);
    text-align: center;
    font-size: 30px;
    font-weight: 50px;
    margin-bottom: 0.5px;
}  
span{
    font-size: 45px;
    font-weight: 25px;
}  
h5{
    color: rgb(41, 35, 35);
}
#a1{
    background-color: #ffffff;
    border: solid white;
    border-radius: 10px;
    width: 270px;
    height: 270px;
    padding: 15px;
    margin: -15px;
                                        

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
    color: rgb(75, 73, 73);
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

form{
    margin: 15px;
    justify-content: center;
    align-items: center;
    text-align: center;
}
footer{
    text-align: center;
    color:rgb(0, 0, 0);
}

</style>
<body>

    <header>
        <h1 id="titre">MéloBooks </h1><br>
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="login.php" class="nav-link">Connexion/Inscription</a></li>
            </ul>
        </nav>
    </header>
    <div id="papa"><br><br>
        
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2 id="connexion">Connexion </h2>
        <div id="a1">
                <form action="" method="post">
                    <input type="email" name="email" id="a2" required placeholder="Adresse e-mail..."><br><br>

                    <input type="password" name="password" id="a3" required  placeholder= "Mot de passe..."><br><br>

                    <input type="submit" id="a4" name="submit" value="Se connecter">
                
                    <a href="passforget.php" id="a5"><h6 >Mot de passe oublié ?</h6></a>
                    <hr id="a7"><br>
                    <a href="signup.php"><input type="button" id="a6" value="Créer nouveau compte"></a>
                </form>
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
    <footer>
        <p>© 2024 Copyright - Mélobooks - Designed by Kennedy Merrelose.</p>
    </footer>

</body>
</html>