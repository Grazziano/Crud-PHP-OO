<?php
include_once '../model/Conexao.class.php';
include_once '../model/Manager.class.php';
include_once 'dependencias.php';

$manager = new Manager();
$id = $_POST['id'];
?>

<h2 class="text-center">
    Page of Update <i class="fa fa-user-edit"></i>
</h2>
<hr>

<form action="../controller/update_client.php" method="post">

    <div class="container">
        <div class="form-row">

            <?php
            foreach ($manager->getInfo("registros", $id) as $client_info) :
                ?>

                <div class="col-md-6">
                    Nome: <i class="fa fa-user"></i>
                    <input class="form-control" type="text" name="name" value="<?= $client_info['name'] ?>" required autofocus><br>
                </div>

                <div class="col-md-6">
                    E-mail: <i class="fa fa-envelope"></i>
                    <input class="form-control" type="text" name="email" value="<?= $client_info['email'] ?>" required><br>
                </div>

                <div class="col-md-4">
                    CPF: <i class="fa fa-address-card"></i>
                    <input class="form-control" type="text" name="cpf" id="cpf" value="<?= $client_info['cpf'] ?>" required><br>
                </div>

                <div class="col-md-4">
                    Dt. de Nascimento: <i class="fa fa-calendar"></i>
                    <input class="form-control" type="date" name="birth" value="<?= $client_info['birth'] ?>" required><br>
                </div>

                <div class="col-md-4">
                    Telefone: <i class="fab fa-whatsapp"></i>
                    <input class="form-control" type="text" name="phone" id="phone" value="<?= $client_info['phone'] ?>" required><br>
                </div>

                <div class="col-md-12">
                    Endereço: <i class="fa fa-map"></i>
                    <input class="form-control" type="text" name="address" value="<?= $client_info['address'] ?>" required><br>
                </div>

                <div class="col-md-4">

                    <input type="hidden" name="id" value="<?= $client_info['id'] ?>">

                <?php
                endforeach;
                ?>

                <button class="btn btn-warning btn-lg">Update Client <i class="fa fa-user-edit"></i></button><br><br>

                <a href="../index.php">Voltar</a>
            </div>

        </div>
    </div>

</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#cpf").mask("000.000.000-00");
        $("#phone").mask("(00) 0000-0000");
    });
</script>