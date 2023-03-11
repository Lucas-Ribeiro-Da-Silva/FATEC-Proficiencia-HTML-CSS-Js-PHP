<?php
    $css = "./assets/css/relogio.css";
    $titulo = "Home";
    include "./layout/header.php";
?>
    <main class="main">
        <div class="titulo">
            <h1 class="h1">Bem-vindos à <span class="roxo">PROF01</span></h1>
        </div>
        <div class="paragrafo">
            
                <div>
                    <span id="horas">
                        00
                    </span>
                    <span class="tempo">
                        Horas
                    </span>
                </div>
                <div>
                    <span id="minutos">
                        00
                    </span>
                    <span class="tempo">
                        Minutos
                    </span>
                </div>
                <div>
                    <span id="segundos">
                        00
                    </span>
                    <span class="tempo">
                        Segundos
                    </span>
                </div>
            
                <div>
                    <span id="dia">
                        01
                    </span>
                    <span class="tempo">
                        Dia
                    </span>
                </div>
                <div>
                    <span id="mes">
                        01
                    </span>
                    <span class="tempo">
                        Mês
                    </span>
                </div>
                <div>
                    <span id="ano">
                        2000
                    </span>
                    <span class="tempo">
                        Ano
                    </span>
                </div>
        </div>
        <div class="buttons">
            <button class="style-button">
                <a href="./index.php">Listar</a>
            </button>
            <button class="style-button">
                <a href="./lista.php">Consultar</a>
            </button>
        </div>
    </main>
<?php
    include "./layout/footer.php";
?>