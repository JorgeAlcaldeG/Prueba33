<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
</head>
<body>
    <h1>Registro del pedido</h1>
    <form action="check.php" method="post">
        <!-- Datos del cliente -->
        <fieldset id="datosCliente" style="max-width: 35%;">
            <legend for="datosCliente">Datos del cliente</legend>
            <!-- Usuario -->
            <label for="user">Usuario:</label>
            <abbr aria-label="obligatorio">*</abbr>
            <input type="text" name="user" id="user" placeholder="usuario" required value="<?php if(isset($_POST["user"])){echo $_POST['user'];};?>">
            <br>
            <br>
            <!-- Nombre -->
            <label for="nom">Nombre:</label>
            <abbr aria-label="obligatorio">*</abbr>
            <input type="text" name="nom" id="nom" placeholder="Nombre"required value="<?php if(isset($_POST["nom"])){echo $_POST['nom'];};?>">
            <!-- Apellidos -->
            <label for="ape">Apellidos:</label>
            <abbr aria-label="obligatorio">*</abbr>
            <input type="text" name="ape" id="ape" placeholder="Apellidos"required value="<?php if(isset($_POST["ape"])){echo $_POST['ape'];};?>">
            <br>
            <br>
            <!-- Dirección -->
            <label for="dir">Dirección:</label>
            <abbr aria-label="obligatorio">*</abbr>
            <input type="text" name="dir" id="dir" placeholder="Dirección"required value="<?php if(isset($_POST["dir"])){echo $_POST['dir'];};?>">
            <!-- Población -->
            <label for="pob">Población:</label>
            <abbr aria-label="obligatorio">*</abbr>
            <input type="text" name="pob" id="pob" placeholder="Población"required value="<?php if(isset($_POST["pob"])){echo $_POST['pob'];};?>">
            <br>
            <br>
            <!-- Provincia -->
            <label for="prov">Provincia:</label>
            <abbr aria-label="obligatorio">*</abbr>
            <input type="text" name="prov" id="prov" placeholder="Provincia"required value="<?php if(isset($_POST["prov"])){echo $_POST['prov'];};?>">
            <!-- Código postal -->
            <label for="cod">Código postal:</label>
            <abbr aria-label="obligatorio">*</abbr>
            <input type="text" name="cod" id="cod" placeholder="00000" size="5"required value="<?php if(isset($_POST["cod"])){echo $_POST['cod'];};?>">
            <br>
            <br>
            <!-- Correo electrónico -->
            <label for="email">Correo:</label>
            <abbr aria-label="obligatorio">*</abbr>
            <input type="email" name="email" id="email" style="width: 50%;"placeholder="Correo electrónico"required value="<?php if(isset($_POST["email"])){echo $_POST['email'];};?>">
            <br>
            <br>
            <!-- Telefono -->
            <label for="tel">Teléfono:</label>
            <abbr aria-label="obligatorio">*</abbr>
            <input type="tel" name="tel" id="tel" size="9"required placeholder="Teléfono" value="<?php if(isset($_POST["tel"])){echo $_POST['tel'];};?>">
        </fieldset>
        <br>
        <!-- Carta de platos -->
        <fieldset id="carta" style="max-width: 40%;">
            <legend for="carta">Carta de platos</legend>
            <input type="checkbox" name="platos[]" id="plato1" value="Gyoza con pollo" <?php if(isset($_POST["platos"]) && in_array('Gyoza con pollo',$_POST["platos"])){echo "checked";} ?>>
            <label for="plato1">Gyozas de pollo</label>
            <input type="checkbox" name="platos[]" id="plato4" value="Gyoza con verdura" <?php if(isset($_POST["platos"]) && in_array('Gyoza con verdura',$_POST["platos"])){echo "checked";} ?>>
            <label for="plato4">Gyoza de verduras</label>
            <input type="checkbox" name="platos[]" id="plato2" value="Katsudon" <?php if(isset($_POST["platos"]) && in_array('Katsudon',$_POST["platos"])){echo "checked";} ?>>
            <label for="plato2">Katsudon</label>
            <input type="checkbox" name="platos[]" id="plato3" value="Dorayaki" <?php if(isset($_POST["platos"]) && in_array('Dorayaki',$_POST["platos"])){echo "checked";} ?>>
            <label for="plato3">Dorayaki</label>
            <input type="checkbox" name="platos[]" id="plato4" value="Sopa de miso" <?php if(isset($_POST["platos"]) && in_array('Sopa de miso',$_POST["platos"])){echo "checked";} ?>>
            <label for="plato4">Sopa de miso</label>
            <br>
            <input type="checkbox" name="platos[]" id="plato4" value="Arroz al curry" <?php if(isset($_POST["platos"]) && in_array('Arroz al curry',$_POST["platos"])){echo "checked";} ?>>
            <label for="plato4">Arroz al curry</label>
            <input type="checkbox" name="platos[]" id="plato4" value="Nigiri" <?php if(isset($_POST["platos"]) && in_array('Nigiri',$_POST["platos"])){echo "checked";} ?>>
            <label for="plato4">Nigiri</label>
            <input type="checkbox" name="platos[]" id="plato4" value="Sashimi" <?php if(isset($_POST["platos"]) && in_array('Sashimi',$_POST["platos"])){echo "checked";} ?>>
            <label for="plato4">Sashimi</label>
            <input type="checkbox" name="platos[]" id="plato4" value="Takoyaki" <?php if(isset($_POST["platos"]) && in_array('Takoyaki',$_POST["platos"])){echo "checked";} ?>>
            <label for="plato4">Takoyaki</label>
            <input type="checkbox" name="platos[]" id="plato4" value="Karage" <?php if(isset($_POST["platos"]) && in_array('Karage',$_POST["platos"])){echo "checked";} ?>>
            <label for="plato4">Karage</label>
        </fieldset>
        <!-- Método de pago -->
        <br>
        <label for="metodoField">Método de pago</label>
        <abbr aria-label="obligatorio">*</abbr>
        <br>
        <select name="metodoField" id="metodoField" required>
            <option value="" selected disabled>Selecciona un método</option>
            <option value="efectivo" <?php if(isset($_POST["metodoField"])&& $_POST["metodoField"] == "efectivo"){echo "selected";};?>>En efectivo</option>
            <option value="visa" <?php if(isset($_POST["metodoField"])&& $_POST["metodoField"] == "visa"){echo "selected";};?>>Visa</option>
            <option value="paypal" <?php if(isset($_POST["metodoField"])&& $_POST["metodoField"] == "paypal"){echo "selected";};?>>Paypal</option>
        </select>
        <br>
        <br>
        <!-- Metodo de recogida -->
        <fieldset id="recogidaMetodo" style="max-width:10%">
            <legend for="recogidaMetodo">Método de recogida</legend>
            <input <?php if(isset($_POST["recogida"])&& $_POST["recogida"] == "domicilio"){echo "checked";};?> type="radio"id="domicilio" name="recogida" value="domicilio" required>
            <label for="tarjeta">Domicilio</label>
            <br>
            <input <?php if(isset($_POST["recogida"])&& $_POST["recogida"] == "EnRes"){echo "checked";};?> type="radio"id="EnRes" name="recogida" value="EnRes"required>
            <label for="tarjeta">En restaurante</label>
        </fieldset>
        <br>
        <!-- Observaciones -->
        <label for="desc">Observaciones</label>
        <br>
        <textarea name="desc" id="desc" cols="90" rows="10" placeholder="Observaciones..."><?php if(isset($_POST["desc"])){echo $_POST["desc"];};?></textarea>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>