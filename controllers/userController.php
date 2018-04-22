<?php
include "../../helpers/db.php";
function insert(){
    global $conection;

    if(isset($_POST['insert'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $streetAddress = $_POST['streetAddress'];
        $state = $_POST['state'];
        $city = $_POST['city'];
        $query = "INSERT INTO user (name,email,streetAddress,age,state,city) VALUES('$name','$email','$streetAddress',$age,'$state','$city')";
        $result = mysqli_query($conection, $query);

        if(!$result){
            die("Falha na inserção");
        }else{
            echo "Dados cadastrados com sucesso";
        }
    }
}

function listUser(){
    global $conection;

        $query = "SELECT * FROM user";
        $result = mysqli_query($conection, $query);

        if(!$result){
            die("Falha na listagem");
        }
        return $result;
}

function listToUpdateUser(){
    global $conection;
    $query = "SELECT * from user";
    $result = mysqli_query($conection, $query);

    while($row = mysqli_fetch_assoc($result)){
    echo "<option>";
        echo($row['id']);
    // echo "<br>";
     echo "</option>";
     }  
}


    function updateUser(){
        global $conection;
        
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $streetAddress = $_POST['streetAddress'];
            $state = $_POST['state'];
            $city = $_POST['city'];

            $query = "UPDATE user SET name = '$name',email = '$email' ,age = $age, streetAddress = '$streetAddress', state = '$state', city = '$city' where id = $id";

            $result = mysqli_query($conection, $query);

            if(!$result){
                    die("Falha a atualização");
                }else{
                    echo "Dados atualizados com sucesso";
                }
        }
    }

    function deleteUser(){
        global $conection;
        if(isset($_POST['delete'])){
            $id = $_POST['id'];

            $query = "DELETE FROM user WHERE id = $id";

            $result = mysqli_query($conection, $query);

            if(!$result){
                die("Falha ao deletar");
            }else{
                echo "Dados deletados com sucesso";
            }
        }
    }
?>