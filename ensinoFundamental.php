        <?php include_once "php/includes/head.php"; ?>
        <?php include_once "php/includes/header.php"; ?>

        <div class="container">
            <div class="jumbotron my-4 d-flex align-items-center img" style="background: url(img/jumbotron_ensinofundamental.jpg) no-repeat center center"></div>
            <div>
                <h4 class="text-center text-secondary mb-4">Metodologias Ativas para o Ensino Fundamental - BNCC</h4><br/>
            </div>
            <strong><p class="ml-1 area_conhecimento desativado" onclick="selecionaMateria('Linguaguens')">Linguaguens</p>
            <div class="box_materia" id="Linguaguens" style="display:none;">
                <div id="container_anoLetivo">
                    <label></label>
                </div>
            </div><br/>
            <p class="ml-1 area_conhecimento" style="cursor: pointer; color:black;" onclick="selecionaMateria('Matemática')">Matemática</p>
            <div id="container_anoLetivo">
                <?php
                    require_once "php/actions/conexao.php";
                    $sql = "select * from anoletivo where ensino=2";
                    $result = $conn->query($sql);
                    $anoletivo = [];
                    $exibir = 0;
                    if($result->num_rows > 0) {
                        while($rows = $result->fetch_assoc()) {
                            array_push($anoletivo, $rows);
                            if($rows['anoletivo'] == 5){
                                ?>
                                <div class="box_materia" id="Matemática" style="display:none;">
                                <a href="matematica5ano.php"><label id="anoLetivo" style="cursor: pointer; font-size: 20px;">
                                <?php echo $rows['anoletivo']; ?>º ano</label></a>
                                </div>
                                <?php
                            }
                            else{             
                                ?>
                                    <div class="box_materia" id="Matemática" style="display:none;">
                                        <label id="anoLetivo" style="color: gray; font-size: 20px;"><?php echo $rows['anoletivo']; ?>º ano</label>
                                    </div>
                                <?php
                            }
                        }
                    }
                    else{
                        die ("Falha na conexão com o BD " . mysqli_connect_error());
                    } 
                ?>
            </div>
            <p class="ml-1 area_conhecimento desativado" onclick="selecionaMateria('Ciências da Natureza')">Ciências da Natureza</p>
            <div class="box_materia" id="Ciências da Natureza" style="display:none;">
                <div id="container_anoLetivo">
                    <label></label>
                </div>
            </div><br/>
            <p class="ml-1 area_conhecimento desativado" onclick="selecionaMateria('Ciências Humanas')">Ciências Humanas</p>
            <div class="box_materia" id="Ciências Humanas" style="display:none;">
                <div id="container_anoLetivo">
                    <label></label>
                </div>
            </div><br/>
            <p class="ml-1 area_conhecimento desativado" onclick="selecionaMateria('Ensino Religioso')">Ensino Religioso</p>
            <div class="box_materia" id="Ensino Religioso" style="display:none;">
                <div id="container_anoLetivo">
                    <label></label>
                </div>
            </div><br/></strong>
        </div>

        <?php include_once "php/includes/footer.php"; ?>
        <?php include_once "php/includes/final_html.php"; ?>