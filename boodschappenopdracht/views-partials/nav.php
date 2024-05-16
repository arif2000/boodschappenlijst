<?php

?>
<ul>
    <li>
        <a href="/" <?php echo urlIs("/controllers/index.php") ? "style='font-weight: bold'" : "" ?>>home</a>
    </li>
    <li>
        <a href="/create" <?php echo urlIs("/controllers/create.php") ? "style='font-weight: bold'" : "" ?>>create</a>
    </li>
</ul>