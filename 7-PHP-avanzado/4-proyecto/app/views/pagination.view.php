<?php

$pagesNumber = pagesNumber($blog_config['publication_per_page'], $dbConnection);
echo " Numero de paginas: $pagesNumber";

?>
<section class="paginacion">
    <ul>
        <li class="disabled">&laquo;</li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">&raquo;</a></li>
    </ul>
</section>