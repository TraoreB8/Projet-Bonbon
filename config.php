    <?php
    define("BDD", 'bonbons');
    define("HOTE", 'localhost');
    define("UTILISATEUR", 'root');
    define("MDP", '');


function connect()

{
    try
    {
        $connect= new PDO('mysql:host='. HOTE.';dbname='.BDD , UTILISATEUR, MDP, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
        $connect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e)
    {
        echo"problème de connexion à la BDD <br>". $e->getMessage();

    }
    return $connect;



}









    ?>




