<h1 class="fs-1 text-center" id="galeria2">Galeria 2</h1>
    <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
                for ($i = 0; $i < 25; $i++){
            ?>
            <div class="col">
                <div class="card">
                    <img src="imgs/img<?php echo$i?>.jpg" class="card-img-top open-modal" data-open="modal1" alt="NOSEVEWE" onclick="mostrar(<?php echo$i?>)">
                    
                </div>
            </div> 
            <?php
                }

            ?>
    </div>