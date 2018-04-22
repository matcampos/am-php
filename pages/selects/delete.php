<!DOCTYPE html>
<html lang="pt">
    <?php
         include "../../helpers/head.php";
 
    ?>

<body>
    <?php
    include "../../helpers/header.php";
    ?>  
    <div class="container">
        <div class="col-md-6 center">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Selecione Cliente ou usuario para deletar</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="../client/delete.php">Cliente</a>
                            </div>
                            <div class="col-md-6">
                                <a href="../user/delete.php" >Usuário</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        include "../../helpers/footer.php";
    ?>
</body>
</html>