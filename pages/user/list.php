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
                                    <th>E-mail</th>
                                    <th>Idade</th>
                                    <th>Logradouro</th>
                                    <th>Estado</th>
                                    <th>Cidade</th>
                                </thead>
                        
                            <tbody>
                            <?php
                       $result = listUser();
                            while($row = mysqli_fetch_assoc($result)){
                                $id = $row['id'];
                                $name = $row['name'];
                                $email = $row['email'];
                                $age = $row['age'];
                                $streetAddress = $row['streetAddress'];
                                $state = $row['state'];
                                $city = $row['city'];

    
                                echo "<tr>";
                                echo "<td> $id </td>";
                                echo "<td> $name </td>";
                                echo "<td> $email </td>";
                                echo "<td> $age </td>";
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