<?php
include '..\template\header.php';
?>
                            
                            <?php
                                if (isset($_SESSION["nombreusuario"])){
                                    echo '<p>Hello ' . $_SESSION["nombreusuario"] . '!</p>';
                                }
                            ?>
                            <div>
                            <img src="..\imagenes\chicas1.png" width="500px";> 
                            </div>
                        </div>
                    </div>        
                </div>
    </body>
</html>