<?php

echo<<<'EOT'
<div class="d-flex justify-content-between mt-3">
<div class="">
    <a id="oke" style="font-size:30px;cursor:pointer">&#9776;</a>
    <a href="/index.php"><i class="far fa-arrow-alt-circle-left text-muted"></i></a>
</div>
<div class="d-flex justify-content-between align-items-center gap-3">
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    </form>
    <div>
        <a href="#"><i class="far fa-bell text-muted"></i></a>
    </div>
</div>
</div>

EOT;

?>