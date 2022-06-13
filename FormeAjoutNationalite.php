<?php include "header.php";

?>


    <div class="container mt-5">
    
        <h2 class="pt-3 text-center">Ajouter une nationalite</h2>
        <form action="valideAjoutNationalite.php" method="POST" class="col-md-6 offset-md-3 border border-primary p-3 rounded">
            <div class="form-group">
                <label for="libelle"> libelle</label>
                <input type="text" class="form-control" id="libelle" placeholder="saisir le libelle" name="libelle">
            </div>
            <div class="row">
                <div class="col"> <a href="listeNationalites.php" class="btn btn-warning btn-block">Revenir a la liste</a></div>
                <div class="col"><button type="submit" class="btn btn-success btn-block">Ajouetr</button></div>
            </div>
        </form>
    </div>

 


<?php include "footer.php";

?>