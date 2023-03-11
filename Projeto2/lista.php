<?php
    $css = "./assets/css/lista.css";
    $titulo = "Lista";
    include "./layout/header.php";
?>
    <main class="main">
        <div class="titulo">
            <h1 class="h1">Contate a <span class="roxo"> instituição</span></h1>
        </div>
        <div class="img">
            <img src="./assets/img/forms.jpg" alt="">
        </div>
        <div class="formulario">
            <form class="form" id="clientes" name="clientes" method="post" action="script1.php" target="_blank">
                <fieldset>
                    <legend>Formulário de contato</legend>
                    <label for="nome"><span>*</span>Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Seu Nome" autofocus="autofocus" required="required" autocomplete="off"/>
                    <br>
                    <label for="email"><span>*</span>Email:</label>
                    <input type="email" id="email" name="email" placeholder="Seu E-mail" required="required" autocomplete="off"/>
                    <br><br>
                    <div class="bot">
                        <input id="submit-button" class="style-button" type="submit" value="Listar"/> 
                        <input class="style-button" type="submit" value="Incluir"/> 
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
<?php
    include "./layout/footer.php";
?>