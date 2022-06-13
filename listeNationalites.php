<?php include "header.php";
include "connexionPdo.php";
$req=$monPdo->prepare("select * from nationalite");
$req->setFetchMode(PDO::FETCH_OBJ);
$req->execute();
$lesNationalites=$req->fetchAll();
?>


    <div class="container mt-5">
        <div class="row pt-3">
            <div class="col-9"><h2>liste desnationalites</h2></div>
            <div class="col-3"><a href="FormeAjoutNationalite.php" class="btn btn-success"><i class="fa-solid fa-user-plus"></i> Creer une nationalite</a></div>
            
        </div>
        <table class="table table-hover table-striped">
            <thead>
                <tr class="t-flex">
                    <th scope="col" class="col-md-2">Numero</th>
                    <th scope="col" class="col-md-8">libelle</th>
                    <th scope="col" class="col-md-2">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($lesNationalites as $nationalite){
                echo "<tr class='t-flex'>";
                echo "<td class='col-md-2'>$nationalite->num</td>";
                echo "<td class='col-md-8'>$nationalite->libelle</td>";
                echo "<td class='col-md-2'>
                    <a href='' class='btn btn-primary'><i class='fas fa-pen'></i></a>
                    <a href='' class='btn btn-danger'><i class='far fa-trash-alt'></i></a>
                </td>";

                echo "</tr>";
            }
            ?>


            </tbody>
    </table>

    </div>

 


<?php include "footer.php";

?>