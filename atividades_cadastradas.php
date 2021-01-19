<?php
        require_once "php/actions/conexao.php";
        include_once "php/includes/head.php";
        include_once "php/includes/header.php";
        include "php/actions/verifica_login.php";

        if(isset($_SESSION['edicao_sucesso'])) {
            echo "<script> alert('Edição efetuada com sucesso !')</script>";
    
            unset($_SESSION['edicao_sucesso']);
        }

        if(isset($_SESSION['excluiu'])) {
            echo "<script> alert('Exclusão efetuada com sucesso !')</script>";
    
            unset($_SESSION['excluiu']);
        }

        if(isset($_SESSION['id_usuario']) && isset($_SESSION['nome']) && isset($_SESSION['email'])) {
                
                $id = $_SESSION['id_usuario'];
                
                $sql = "select * from atividades where autor = $id";
                $result = $conn->query($sql);

?>     

        <h3 class="text-center mt-3">Suas atividades cadastradas</h3>  

        <?php
            while($row = mysqli_fetch_assoc($result)) {

        ?>

        <div class="container d-flex justify-content-center mt-5 mb-4">
            <div class="card border" style="width: 50rem; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                <div class="container d-flex justify-content-end pt-3" style="background-color: #f2f2f2">
                
                    <a href="edicao.php?idatividade=<?php echo $row['id_atividade']; ?>" class="btn mr-3">
                        <img src="img/editar.jpg" width="35">
                    </a>
                    <button class="btn btn-danger remocao" data-toggle="modal" data-target="#confirma"
                    onclick="pegarDados('<?php echo $row['id_atividade']; ?>', '<?php echo $row['titulo']; ?>')">X</button>
                </div>

                <div style="background-color: #00b300">
                    <h4 class="text-center text-white mt-3">Disciplina: <?php echo $row['disciplina']; ?></h4>
                </div>

                <div style="background-color: #00cc00">
                    <h5 class="text-center text-white p-1">Metodologia: <?php echo $row['metodologia']; ?></h5>
                </div>
                
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['titulo']; ?></h5>
                    <p class="card-text"><?php echo $row['descricao']; ?></p>

                    <div class="container d-flex justify-content-between p-0">
                        <textarea cols="16" rows="3" disabled><?php echo $row['links']; ?></textarea>
                        <img src="img/pdf.png" style="cursor: pointer;" width="60" height="70">
                    </div>
    
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmar exclusão</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="php/actions/excluir_atividade.php" method="post">
                    <p>Deseja realmente excluir a atividade <b id="titulo"></b> ?</p>
                    
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-danger" value="sim">
                        <input type="hidden" name="excluiatividade" id="id_atividade" value="">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                     </div>
                </form>
            </div>
            </div>
        </div>
        </div>

        <script>
            function pegarDados(idatividade, titulo) {
                document.getElementById('titulo').innerHTML = titulo
                document.getElementById('id_atividade').value = idatividade
            }
        </script>

<?php } ?>
<?php } ?>

<?php include_once "php/includes/final_html.php"; ?>