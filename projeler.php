<!-- projeler.php -->

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeler - Empa74 İnşaat</title>
    <link rel="stylesheet" href="css/projeler.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="content">
        <h2>Projeler</h2>
        <div class="project">
            <h3>Proje Adı 1</h3>
            <?php for ($i = 1; $i <= 8; $i++) { ?>
                <img src="proje1_foto<?php echo $i; ?>.jpg" alt="Proje 1 Fotoğraf <?php echo $i; ?>">
            <?php } ?>
        </div>
        <div class="project">
            <h3>Proje Adı 2</h3>
            <?php for ($i = 1; $i <= 8; $i++) { ?>
                <img src="proje2_foto<?php echo $i; ?>.jpg" alt="Proje 2 Fotoğraf <?php echo $i; ?>">
            <?php } ?>
        </div>
        <!-- Diğer projeler buraya eklenebilir -->
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
