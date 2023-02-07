<?php include './partials/header.php';
//si on utilise require à la place de include si on change le nom du fichier header = erreur
//avec include on obtiens un warning mais le reste du site s'execute
?>

<header>
    <?php $titre = 'cours php'; ?>
    <h1>
        <?= $titre ?>
    </h1>
</header>
<main>
    <section>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            Blanditiis eius, harum possimus nobis inventore illo praesentium aliquid laudantium facilis ex.
            Sit expedita ab quasi velit, sint temporibus in voluptatum tempora.</p>
    </section>
</main>

<?php include './partials/footer.php'; ?>