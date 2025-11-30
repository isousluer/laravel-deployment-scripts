<?php
/**
 * Laravel İlk Kurulum Scripti
 * Güvenlik: Kurulum tamamlandıktan sonra bu dosyayı silin!
 */

// Güvenlik kontrolü: Kurulum sadece bir kez çalışabilir
if (file_exists(__DIR__ . '/install.lock')) {
    die('⛔ Kurulum zaten tamamlanmış. Güvenlik için bu dosyayı silin.');
}

// Laravel dizinine geç
chdir(__DIR__ . '/../laravel');

// Laravel'i başlat
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

// Çıktı formatı
echo "<!DOCTYPE html>
<html lang='tr'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>Laravel İlk Kurulum</title>
<style>
body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; background: #f0f0f0; }
pre { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); line-height: 1.6; }
.success { color: #4CAF50; font-weight: bold; }
.warning { color: #ff9800; font-weight: bold; }
.error { color: #f44336; font-weight: bold; }
.step { color: #2196F3; font-weight: bold; }
</style>
</head>
<body>
<pre>";

try {
    echo "🚀 <span class='step'>LARAVEL İLK KURULUM BAŞLIYOR...</span>\n";
    echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
    
    // ADIM 1: App key oluştur
    echo "🔑 <span class='step'>1. Application key oluşturuluyor...</span>\n";
    $kernel->call('key:generate');
    echo "   ✅ Application key başarıyla oluşturuldu\n\n";
    
    // ADIM 2: Storage link oluştur
    echo "🔗 <span class='step'>2. Storage link oluşturuluyor...</span>\n";
    $kernel->call('storage:link');
    echo "   ✅ Storage link başarıyla oluşturuldu\n\n";
    
    // ADIM 3: Migration çalıştır
    echo "📦 <span class='step'>3. Veritabanı migration'ları çalıştırılıyor...</span>\n";
    $kernel->call('migrate', ['--force' => true]);
    echo "   ✅ Migration'lar başarıyla tamamlandı\n\n";
    
    // ADIM 4: Config cache oluştur
    echo "⚙️  <span class='step'>4. Config cache oluşturuluyor...</span>\n";
    $kernel->call('config:cache');
    echo "   ✅ Config cache oluşturuldu\n\n";
    
    // ADIM 5: Route cache oluştur
    echo "🛣️  <span class='step'>5. Route cache oluşturuluyor...</span>\n";
    $kernel->call('route:cache');
    echo "   ✅ Route cache oluşturuldu\n\n";
    
    // ADIM 6: View cache oluştur
    echo "👁️  <span class='step'>6. View cache oluşturuluyor...</span>\n";
    $kernel->call('view:cache');
    echo "   ✅ View cache oluşturuldu\n\n";
    
    // Lock dosyası oluştur
    file_put_contents(__DIR__ . '/install.lock', date('Y-m-d H:i:s'));
    
    echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    echo "<span class='success'>✅ KURULUM BAŞARIYLA TAMAMLANDI!</span>\n";
    echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
    
    echo "<span class='warning'>⚠️  KRİTİK GÜVENLİK UYARISI:</span>\n";
    echo "   Bu dosyayı HEMEN silin!\n";
    echo "   Komut: <strong>rm " . basename(__FILE__) . "</strong>\n\n";
    
    echo "📌 Kurulum zamanı: " . date('d.m.Y H:i:s') . "\n";
    
} catch (Exception $e) {
    echo "\n<span class='error'>❌ HATA OLUŞTU!</span>\n";
    echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    echo "Hata: " . $e->getMessage() . "\n\n";
    echo "Dosya: " . $e->getFile() . "\n";
    echo "Satır: " . $e->getLine() . "\n\n";
    echo "Stack Trace:\n" . $e->getTraceAsString();
}

echo "</pre>
</body>
</html>";
?>