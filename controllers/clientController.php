<?php
include "../../helpers/db.php";
function insertClient(){
    global $conection;

    if(isset($_POST['insert'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $nickname = $_POST['nickname'];
        $cnpj = $_POST['cnpj'];
        $streetAddress = $_POST['streetAddress'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $query = "INSERT INTO client (name,nickname,email,cnpj,streetAddress,state,city) VALUES('$name','$nickname','$email','$cnpj','$streetAddress','$state','$city')";
        $result = mysqli_query($conection, $query);

        if(!$result){
            die("Falha na inserção");
        }else{
            echo "Dados cadastrados com sucesso";
        }
    }
}

function listClient(){
    global $conection;

        $query = "SELECT * FROM client";
        $result = mysqli_query($conection, $query);

        if(!$result){
            die("Falha na listagem");
        }
        return $result;
}

function listToUpdateClient(){
    global $conection;
    $query = "SELECT * from client";
    $result = mysqli_query($conection, $query);

    while($row = mysqli_fetch_assoc($result)){
    echo "<option>";
        echo($row['id']);
    // echo "<br>";
     echo "</option>";
     }  
}


    function updateClient(){
        global $conection;
        
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $nickname = $_POST['nickname'];
            $cnpj = $_POST['cnpj'];
            $streetAddress = $_POST['streetAddress'];
            $state = $_POST['state'];
            $city = $_POST['city'];

            $query = "UPDATE client SET name = '$name',nickname = '$nickname',email = '$email' ,cnpj = '$cnpj', streetAddress = '$streetAddress', state = '$state', city = '$city' where id = $id";
            $result = mysqli_query($conection, $query);

            if(!$result){
                    die("Falha a atualização");
                }else{
                    echo "Dados atualizados com sucesso";
                }
        }
    }

    function deleteClient(){
        global $conection;
        if(isset($_POST['delete'])){
            $id = $_POST['id'];

            $query = "DELETE FROM client WHERE id = $id";

            $result = mysqli_query($conection, $query);

            if(!$result){
                die("Falha ao deletar");
            }else{
                echo "Dados deletados com sucesso";
            }
        }
    }
?>