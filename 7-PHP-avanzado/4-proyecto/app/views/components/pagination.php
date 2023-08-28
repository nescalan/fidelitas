<section class="paginacion">
    <ul>
        <!-- Set the number of pages -->
        <?php
        $pagesNumber = pagesNumber($blog_config['publication_per_page'], $dbConnection);
        ?>
        <!-- Show the button to go back one page -->
        <?php if (actualPage() === 1): ?>
            <li class="disabled">&laquo;</li>
        <?php else: ?>
            <li><a href="index.php?p=<?php echo actualPage() - 1 ?>">&laquo;</a></li>
        <?php endif; ?>

        <!-- Create a <li> element for each page we have -->
        <?php for ($i = 1; $i <= $pagesNumber; $i++): ?>
            <!-- Add the active class on the current page  -->
            <?php if (actualPage() === $i): ?>
                <li class="active">
                    <?php echo $i; ?>
                </li>
            <?php else: ?>
                <li>
                    <a href="index.php?p=<?php echo $i ?>"><?php echo $i; ?></a>
                </li>
            <?php endif; ?>
        <?php endfor; ?>

        <!-- Show the button to go forward one page -->
        <?php if (actualPage() == $pagesNumber): ?>
            <li class="disabled">&raquo;</li>
        <?php else: ?>
            <li><a href="index.php?p=<?php echo actualPage() + 1; ?>">&raquo;</a></li>
        <?php endif; ?>
    </ul>
</section>