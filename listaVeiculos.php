    <div style="display:grid;
                grid-template-columns: auto auto auto;
                grid-gap: 30px;
                padding: 20px; "> 
    <?php
        require_once "dataBase.php";
        $sql="SELECT * FROM cadastro";
        $resultado=$con->query($sql);
        
        while($veiculo=$resultado->fetch_array()){
            echo'<div class="card" style="width:16vw; ">
                    <img class="card-img-top" src="'.$veiculo['foto'].'" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">'.$veiculo['nome'].'</h5>
                    <p class="card-text">'.$veiculo['email'].'</p>
                </div>
                </div>';
        }
    ?>
        
    </div>