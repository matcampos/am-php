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
                        <h3>Selecione Cliente ou usuario para cadastrar</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="../client/insert.php">Cliente</a>
                            </div>
                            <div class="col-md-6">
                                <a href="../user/insert.php" >Usuário</a>
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