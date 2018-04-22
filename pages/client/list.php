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
        <div class="center">
            <div class="col-sm-12">
                        <table class="table table-bordered">
                                <thead>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Apelido</th>
                                    <th>E-mail</th>
                                    <th>CNPJ</th>
                                    <th>Logradouro</th>
                                    <th>Estado</th>
                                    <th>Cidade</th>
                                </thead>
                        
                            <tbody>
                            <?php
                       $result = listClient();
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['id'];
                                $name = $row['name'];
                                $nickname = $row['nickname'];
                                $email = $row['email'];
                                $cnpj = $row['cnpj'];
                                $streetAddress = $row['streetAddress'];
                                $state = $row['state'];
                                $city = $row['city'];

    
                                echo "<tr>";
                                echo "<td> $id </td>";
                                echo "<td> $name </td>";
                                echo "<td> $nickname </td>";
                                echo "<td> $email </td>";
                                echo "<td> $cnpj </td>";
                                echo "<td> $streetAddress </td>";
                                echo "<td> $state </td>";
                                echo "<td> $city </td>";
                                echo "</tr>";
                            }
                                ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    <?php
        include "../../helpers/footer.php";
    ?>
</body>
</html>