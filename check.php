<?php 
// var_dump($_POST);
$user = $_POST["user"];
echo "<p>$user</p>";
$nom = $_POST["nom"];
echo "<p>$nom</p>";
$ape = $_POST["ape"];
echo "<p>$ape</p>";
$dir = $_POST["dir"];
echo $dir;
$pob = $_POST["pob"];
echo "<p>$pob</p>";
$prov = $_POST["prov"];
echo "<p>$prov</p>";
$cod = $_POST["cod"];
echo "<p>$cod</p>";
$email = $_POST["email"];
echo "<p>$email</p>";
$tel = $_POST["tel"];
echo "<p>$tel</p>";
$platos = $_POST["platos"];
foreach ($platos as $plato) {
    echo "<p>$plato</p>";
}
$metodoField = $_POST["metodoField"];
echo "<p>$metodoField</p>";
$recogida = $_POST["recogida"];
echo "<p>$recogida</p>";
$desc = $_POST["desc"];
echo "<p>$desc</p>";

echo"<form action='index.php' method='post'>
    <input type='hidden' name='user' id='' value=$user>
    <input type='hidden' name='nom' id='' value=$nom>
    <input type='hidden' name='ape' id='' value=$ape>
    <input type='hidden' name='dir' id='' value=$dir>
    <input type='hidden' name='pob' id='' value=$pob>
    <input type='hidden' name='prov' id='' value=$prov>
    <input type='hidden' name='cod' id='' value=$cod>
    <input type='hidden' name='email' id='' value=$email>
    <input type='hidden' name='tel' id='' value=$tel>
    <input type='hidden' name='metodoField' id='' value=$metodoField>
    <input type='hidden' name='recogida' id='' value=$recogida>
    <input type='hidden' name='desc' id='' value=$desc>";
    if(isset($_POST["platos"])){
        foreach($platos as $plato){
            echo"<input type='hidden' name='platos[]' value='$plato'>";
        }
    }
echo"
    <button type='submit'>Volver</button>
</form>";
?>
