<html>
<?php include('header.php') ?>

<body class="body">
    <div style="display: block;width:100%;">
        <div>
            <?php include('navbarfranchise.php') ?>
        </div>
        <div>
            <?php include('profilduzenleic.php') ?>
        </div>
        <div class="profilmobilfootermargin">
            <?php include('footer.php') ?>
        </div>
    </div>

    <script>
        document.getElementById("yukleButton").addEventListener("click", function() {
            document.getElementById("resimInput").click(); // Dosya seçim penceresini aç
        });
    </script>
</body>

</html>