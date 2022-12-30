<?php

    $cttModel = new \Models\ContatoModel();
    include('config.php');
    session_start();
?>

<section class="contato-container">

    <img src="Images/backContatoTeste.png" alt="" class="form-image">
    <form action="" class="contato-formulario" method="POST" id="form-1" nome="formContato">
        <h2 class="section-title">Entre em contato</h2>
        <label for="nome_cliente">Seu nome ou da sua empresa</label>
        <input type="text" name="nome_cliente" required>
        <label for="email_cliente">Email para entrarmos em contato</label>
        <input type="email" name="email_cliente" required>
        <label for="">Você já possui um site?</label>
        <div>
            <input type="radio" name="tem_site" id="sim" value="tem_site_sim" required>
            <label for="sim">Sim</label>
            <br>
            <input type="radio" name="tem_site" id="nao" value="tem_site_nao" required>
            <label for="nao">Não</label>
        </div>
        <label for="descricao_projeto">Descrição do projeto</label>
        <textarea required name="descricao_projeto" cols="30" rows="5" form="form-1" placeholder="Descreva resumidamente seu projeto"></textarea>
        <input type="submit" value="<?php if(isset($_SESSION['contato']) && $_SESSION['contato'] == 1) {echo 'Contato enviado!';}else{echo 'Enviar Contato';}?>"  class="btn" name="enviarForm" <?php if (isset($_SESSION['contato']) && $_SESSION['contato'] == 1) {echo 'disabled';} ?> >
    </form>
</section>

<?php

    if(isset($_POST['enviarForm']) && !isset($_SESSION['contato'])){
        $nome_cliente = $_POST['nome_cliente'];
        $email_cliente = $_POST['email_cliente'];
        $tem_site = $_POST['tem_site'];
        $descricao_projeto = $_POST['descricao_projeto'];
        $tentativaCadastro = $cttModel->CadastrarContatoCliente($EX, $nome_cliente, $email_cliente, $tem_site, $descricao_projeto);
        
        if($tentativaCadastro == 1){
            $_SESSION['contato'] = 1;
        echo '<script>document.location.reload();</script>';
        }
    }

?>
