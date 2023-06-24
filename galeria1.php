<h1 class="fs-1 text-center" id="galeria1">Galeria 1</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                for ($i = 0; $i < 25; $i++){
            ?>
                    <div class="col">
                        <div class="card">
                            <img src="imgs/img<?php echo$i?>.jpg" class="d-block" alt="NOSEVEWE">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text  text-end">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted" id="ultimafecha">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>