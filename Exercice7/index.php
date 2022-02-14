<?php
  session_start();
?>

<html>
    <body>
        
        <!-- Exercice 7 : 
        Entrer une date (jour/mois/année) à l’aide d’un formulaire
        ,puis déterminer et afficher la date suivante et la date précédente.Le
        champ est obligatoire.
     <input type="date" name="d" value="<?php echo $d; ?>"> -->
    
     <form action="controllers.php" method="POST">
        <label for="">Ajouter une date valide</label><br><br>
        <label for="">Entrez le jour</label>
        <input type="texte" name="jour" placeholder="Entrez un jour"><br><br>
        <label for="">Entrez le mois</label>
        <input type="texte" name="mois" placeholder="entrez un mois"><br><br>
        <label for="">Entrez une année</label>
        <input type="texte" name="annee" placeholder="entrez une anne"><br><br>
        <input type="submit" name="valider" value="Afficher">
      </form>
    </body>
</html>


