<!-- iletisim.php -->

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - Empa74 İnşaat</title>
    <link rel="stylesheet" href="iletisim.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="content">
        <h2>İletişim</h2>
        <form action="iletisim.php" method="post">
            <label for="name">Ad Soyad:</label><br>
            <input type="text" id="name" name="name" required><br>
            <label for="email">E-posta Adresi:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="message">Mesajınız:</label><br>
            <textarea id="message" name="message" required></textarea><br><br>
            <input type="submit" value="Gönder">
        </form>
    </div>

    <?php include 'footer.php'; ?>
    php_check_syntax?$_COOKIE
    et  the cookşe verşitable 
    @tujhe cocokie 
the post menu 
is the post menuı 
'footer.php'; ?>
    php_check_syntax?$_COOKIE
    et  the cookşe verşitable 
    @tujhe cocokie 
the post menu 
is the post menuı  'footer.php'; ?>
    php_check_syntax?$_COOKIE
    et  the cookşe verşitable 
    @tujhe cocokie 
the post menu 
is the post menuı 
'footer.php'; ?>
    php_check_syntax?$_COOKIE
    et  the cookşe verşitable 
    @tujhe cocokie 
the post menu 
is the post menuı tje poprsy öemnu 
 'footer.php'; ?>
    php_check_syntax?$_COOKIE
    et  the cookşe verşitable 
    @tujhe cocokie 
the post menu 
is the post menuı 

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Veritabanına kaydetme işlemi
        // Örnek olarak:
        // $db->query("INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')");

        // E-posta gönderme işlemi
        $to = "recepakgul150@gmail.com";
        
        $subject = "Yeni İletişim Mesajı";
        $body = "Ad Soyad: $name\nE-posta: $email\n\n$message";
        header <select name="the header s" id="" disabled="disabled"></select>headers = "From: $email";

        mail($to, $subject, $body, $headers);
    }
    ?>
</body>
</html>
