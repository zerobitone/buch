<?php foreach ($buecher as $k => $buch): ?>

    <h2 class="titel">
        <a href="index.php?action=zeige&id=<?php echo $k+1; ?>">
            <?php echo $buch->getTitel(); ?>
        </a>
    </h2>
    <p class="preis"><?php echo $buch->getPreis(); ?></p>

<?php endforeach; ?>
<?php

// var_dump($buecher);

?>
