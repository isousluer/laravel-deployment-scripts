<?php
/**
 * Laravel Cache Temizleme Scripti
 * Güvenlik: İşlem tamamlandıktan sonra bu dosyayı silin!
 */

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
<title>Laravel Cache Temizleme</title>
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
    echo "🧹 <span class='step'>LARAVEL CACHE TEMİZLEME BAŞLIYOR...</span>\n";
    echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
    
    // ADIM 1: Application cache temizle
    echo "💾 <span class='step'>1. Application cache temizleniyor...</span>\n";
    $kernel->call('cache:clear');
    echo "   ✅ Application cache temizlendi\n\n";
    
    // ADIM 2: Config cache temizle
    echo "⚙️  <span class='step'>2. Config cache temizleniyor...</span>\n";
    $kernel->call('config:clear');
    echo "   ✅ Config cache temizlendi\n\n";
    
    // ADIM 3: Route cache temizle
    echo "🛣️  <span class='step'>3. Route cache temizleniyor...</span>\n";
    $kernel->call('route:clear');
    echo "   ✅ Route cache temizlendi\n\n";
    
    // ADIM 4: View cache temizle
    echo "👁️  <span class='step'>4. View cache temizleniyor...</span>\n";
    $kernel->call('view:clear');
    echo "   ✅ View cache temizlendi\n\n";
    
    // ADIM 5: Compiled class temizle
    echo "🗑️  <span class='step'>5. Compiled class dosyaları temizleniyor...</span>\n";
    $kernel->call('clear-compiled');
    echo "   ✅ Compiled class dosyaları temizlendi\n\n";
    
    // ADIM 6: Event cache temizle (Laravel 8+)
    echo "📅 <span class='step'>6. Event cache temizleniyor...</span>\n";
    try {
        $kernel->call('event:clear');
        echo "   ✅ Event cache temizlendi\n\n";
    } catch (Exception $e) {
        echo "   ⚠️  Event cache komutu bulunamadı (eski Laravel versiyonu)\n\n";
    }
    
    echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    echo "<span class='success'>✅ TÜM CACHE'LER BAŞARIYLA TEMİZLENDİ!</span>\n";
    echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
    
    echo "<span class='warning'>⚠️  GÜVENLİK UYARISI:</span>\n";
    echo "   Bu dosyayı kullandıktan sonra silin!\n";
    echo "   Komut: <strong>rm " . basename(__FILE__) . "</strong>\n\n";
    
    echo "📌 İşlem zamanı: " . date('d.m.Y H:i:s') . "\n";
    
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