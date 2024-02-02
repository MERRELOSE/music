<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="signup.css">
<body>
<?php
        if(isset($_POST["submit"])){
            $prenom=$_POST["prenom"];
            $nom=$_POST["nom"];
            $email=$_POST["email"];
            $date=$_POST["date"];
            $genre=$_POST["genre"];
            $password=$_POST["password"];
            $hash=password_hash($password, PASSWORD_DEFAULT);

            $data= [$prenom,$nom, $email, $date, $genre, $hash];
            $pdo= new PDO("mysql:host=localhost;dbname=debut_php","root","");
            $request=$pdo-> prepare("insert into melodie(prenom, nom, email, date, genre, password) values(?,?,?,?,?,?)");
            $request->execute ($data);

            echo "Your signup was sucessful";
            header("location:./login.php");
        }

?>
    
        <div>
            <center>        

                <p id="p1"><span id="p2"> Inscription</span><br>C'est rapide  et  simple</p>
                <hr>
                <form action="" method="post">
                    <p>First name</p>
                    <input type="text" name="prenom"required id="b1" placeholder="Prénom"><br>
                    <p>Name</p>
                    <input type="text" name="nom"required id="b1" placeholder="Nom de famille"><br>
                    <p>E-mail</p>
                    <input type="email" name="email"required id="b2" placeholder="Numero mobile ou e-mail"><br>
                    <p>Password</p>
                    <input type="password" name="password"required id="b3" placeholder="Nouveau mot de passe">
                    <p>Date of birth <p>
                    <select name="date" id="b4">
    
                        <option value="">01</option>
                        <option value="">02</option>
                        <option value="">03</option>
                        <option value="">04</option>
                        <option value="">05</option>
                        <option value="">06</option>
                        <option value="">07</option>
                        <option value="">08</option>
                        <option value="">09</option>
                        <option value="">10</option>
                        <option value="">11</option>
                        <option value="">12</option>
                        <option value="">13</option>
                        <option value="">14</option>
                        <option value="">15</option>
                        <option value="">16</option>
                        <option value="">17</option>
                        <option value="">18</option>
                        <option value="">19</option>
                        <option value="">20</option>
                        <option value="">21</option>
                        <option value="">22</option>
                        <option value="">23</option>
                        <option value="">24</option>
                        <option value="">25</option>
                        <option value="">26</option>
                        <option value="">27</option>
                        <option value="">28</option>
                        <option value="">29</option>
                        <option value="">30</option>
                        <option value="">31</option>
                    </select>&nbsp;&nbsp;&nbsp;
                    <select name="date" id="b4">
                        <option value="Mois">jan</option>
                        <option value="Mois">fév</option>
                        <option value="Mois">mars</option>
                        <option value="Mois">avril</option>
                        <option value="Mois">mai</option>
                        <option value="Mois">juin</option>
                        <option value="Mois">juillet</option>
                        <option value="Mois">aout</option>
                        <option value="Mois">sept</option>
                        <option value="Mois">oct</option>
                        <option value="Mois">nov</option>
                        <option value="Mois">dec</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    <select name="date" id="h4">
                        <option value="">2023</option>
                        <option value="">2022</option>
                        <option value="">2021</option>
                        <option value="">2020</option>
                        <option value="">2019</option>
                        <option value="">2018</option>
                        <option value="">2017</option>
                        <option value="">2016</option>
                        <option value="">2015</option>
                        <option value="">2014</option>
                        <option value="">2013</option>
                        <option value="">2012</option>
                        <option value="">2011</option>
                        <option value="">2010</option>
                        <option value="">2009</option>
                        <option value="">2008</option>
                        <option value="">2007</option>
                        <option value="">2006</option>
                        <option value="">2005</option>
                        <option value="">2004</option>
                        <option value="">2003</option>
                        <option value="">2002</option>
                        <option value="">2001</option>
                        <option value="">2000</option>
                        <option value="">1999</option>
                        <option value="">1998</option>
                        <option value="">1997</option>
                        <option value="">1996</option>
                        <option value="">1995</option>
                        <option value="">1994</option>
                        <option value="">1993</option>
                        <option value="">1992</option>
                        <option value="">1991</option>
                        <option value="">1990</option>
                        <option value="">1989</option>
                        <option value="">1988</option>
                        <option value="">1987</option>
                        <option value="">1986</option>
                        <option value="">1985</option>
                        <option value="">1984</option>
                        <option value="">1983</option>
                        <option value="">1982</option>
                        <option value="">1981</option>
                        <option value="">1980</option>
                        <option value="">1979</option>
                        <option value="">1978</option>
                        <option value="">1977</option>
                        <option value="">1976</option>
                        <option value="">1975</option>
                        <option value="">1974</option>
                        <option value="">1973</option>
                        <option value="">1972</option>
                        <option value="">1971</option>
                        <option value="">1970</option>
                        <option value="">1969</option>
                        <option value="">1968</option>
                        <option value="">1967</option>
                        <option value="">1966</option>
                        <option value="">1965</option>
                        <option value="">1964</option>
                        <option value="">1963</option>
                        <option value="">1962</option>
                        <option value="">1961</option>
                        <option value="">1960</option>
                        <option value="">1959</option>
                        <option value="">1958</option>
                        <option value="">1957</option>
                        <option value="">1956</option>
                        <option value="">1955</option>
                        <option value="">1954</option>
                        <option value="">1953</option>
                        <option value="">1952</option>
                        <option value="">1951</option>
                        <option value="">1950</option>
                        <option value="">1949</option>
                        <option value="">1948</option>
                        <option value="">1947</option>
                        <option value="">1946</option>
                        <option value="">1945</option>
                    </select><br>
            </center>
                    <p>Genre</p>       
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="p"><label for="" id="b5">Femme</label><input type="radio" name="genre" id=""></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span id="p"><label for="" id="b5">Homme</label><input type="radio" name="genre" id=""></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span id="p"><label for="" id="b5">Personnel</label><input type="radio" name="genre" id="" placeholder=""></span><br><br><br>
                    
                    <center>
                    <input type="submit" name="submit" value="S'inscrire" id="b6">
                    </center>
                </form>
        </div>
</body>
</html>