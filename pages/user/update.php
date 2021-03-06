<!DOCTYPE html>
<html lang="pt">
    <?php
        include "../../helpers/head.php";
        updateUser();
    ?>

<body>
    <?php
    include "../../helpers/header.php";
    ?>  
    <div class="container">
        <div class="col-md-6 center">
            <form action="update.php" method="post">
                    <div class="form-group">
                    <label for="id" title="Id">Selecione o id do usuário que deseja alterar</label>
                    <select name="id" class="form-control" id="id" required>
                            <option value="">Selecione...</option>
                            <?php
                            listToUpdateUser();
                            ?>

                    </select>
                    </div>
                    <div class="form-group">
                        <label for="name" title="Nome">Nome</label>
                        <input name="name" placeholder="nome" class="form-control" type="text" required>    
                    </div>

                    <div class="form-group">
                        <label for="email" title="E-mail">E-mail</label>
                        <input name="email" placeholder="E-mail" class="form-control" type="text" required>    
                    </div>

                    <div class="form-group">
                        <label for="idade" title="Idade">Idade</label>
                        <input name="age" placeholder="Idade"class="form-control" min="0"  max="120" type="number" required>    
                    </div>

                    <div class="form-group">
                        <label for="streetAddress" title="Logradouro">Logradouro</label>
                        <input name="streetAddress" placeholder="Logradouro" class="form-control" type="text" required>    
                    </div>

                    <div class="form-group">
                        <label for="state" title="Estado">Estado</label>
                        <select name="state" class="form-control" id="state" required>
                            <option value="">Selecione...</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="city" title="Cidade">Cidade</label>
                        <input name="city" placeholder="Cidade" class="form-control" type="text" required="A cidade é obrigatória">    
                    </div>

                    <div class="form-group">
                        <input name="delete" value="Salvar" class="btn btn-success" type="submit" >    
                    </div>

            </form>
        </div>
    </div>
    <?php
        include "../../helpers/footer.php";
    ?>
</body>
</html>