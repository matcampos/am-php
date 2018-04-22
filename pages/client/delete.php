<!DOCTYPE html>
<html lang="pt">
    <?php
        include "../../helpers/head.php";
        deleteClient();
    ?>

<body>
    <?php
    include "../../helpers/header.php";
    ?>  
    <div class="container">
        <div class="col-md-6 center">
            <form action="delete.php" method="post">
                <div class="form-group">
                    <label for="id" title="Id">Selecione o id do cliente que deseja deletar</label>
                    <select name="id" class="form-control" id="id" required>
                        <option value="">Selecione...</option>
                            <?php
                            listToUpdateClient();
                            ?>
                    </select>
                </div>

                <div class="form-group">
                    <input name="delete" value="Deletar" class="btn btn-primary" type="submit" >    
                </div>
        </div>
    </div>
    <?php
        include "../../helpers/footer.php";
    ?>
</body>
</html>