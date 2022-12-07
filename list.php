<?php if($userLevel != 'user') : ?>
            <li><a href="masuk.php">Masuk</a></li>
            <?php else : ?>
        <li><a href="logout.php">Keluar</a></li>
        <?php endif; ?>