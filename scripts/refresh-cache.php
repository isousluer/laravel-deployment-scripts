<?php
/**
 * Laravel Cache Yenileme Scripti
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
<title>Laravel Cache Yenileme</title>
<style>
body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px auto; padding: 20px; background: #f0f0f0; }
pre { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); line-height: 1.6; }
.success { color: #4CAF50; font-weight: bold; }
.warning { color: #ff9800; font-weight: bold; }
.error { color: #f44336; font-weight: bold; }
.step { color: #2196F3; font-weight: bold; }
.section { color: #9C27B0; font-weight: bold; }
</style>
</head>
<body>
<pre>";

try {
    echo "🔄 <span class='step'>LARAVEL CACHE YENİLEME BAŞLIYOR...</span>\n";
    echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
    
    // BÖLÜM 1: ESKİ CACHE'LERİ TEMİZLE
    echo "🧹 <span class='section'>[ BÖLÜM 1: ESKİ CACHE'LER TEMİZLENİYOR ]</span>\n\n";
    
    echo "💾 <span class='step'>1. Application cache temizleniyor...</span>\n";
    $kernel->call('cache:clear');
    echo "   ✅ Application cache temizlendi\n\n";
    
    echo "⚙️  <span class='step'>2. Config cache temizleniyor...</span>\n";
    $kernel->call('config:clear');
    echo "   ✅ Config cache temizlendi\n\n";
    
    echo "🛣️  <span class='step'>3. Route cache temizleniyor...</span>\n";
    $kernel->call('route:clear');
    echo "   ✅ Route cache temizlendi\n\n";
    
    echo "👁️  <span class='step'>4. View cache temizleniyor...</span>\n";
    $kernel->call('view:clear');
    echo "   ✅ View cache temizlendi\n\n";
    
    echo "🗑️  <span class='step'>5. Compiled class dosyaları temizleniyor...</span>\n";
    $kernel->call('clear-compiled');
    echo "   ✅ Compiled class dosyaları temizlendi\n\n";
    
    echo "📅 <span class='step'>6. Event cache temizleniyor...</span>\n";
    try {
        $kernel->call('event:clear');
        echo "   ✅ Event cache temizlendi\n\n";
    } catch (Exception $e) {
        echo "   ⚠️  Event cache komutu bulunamadı (eski Laravel versiyonu)\n\n";
    }
    
    // BÖLÜM 2: YENİ CACHE'LERİ OLUŞTUR
    echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    echo "⚡ <span class='section'>[ BÖLÜM 2: YENİ CACHE'LER OLUŞTURULUYOR ]</span>\n\n";
    
    echo "⚙️  <span class='step'>7. Config cache oluşturuluyor...</span>\n";
    $kernel->call('config:cache');
    echo "   ✅ Config cache oluşturuldu\n\n";
    
    echo "🛣️  <span class='step'>8. Route cache oluşturuluyor...</span>\n";
    $kernel->call('route:cache');
    echo "   ✅ Route cache oluşturuldu\n\n";
    
    echo "👁️  <span class='step'>9. View cache oluşturuluyor...</span>\n";
    $kernel->call('view:cache');
    echo "   ✅ View cache oluşturuldu\n\n";
    
    echo "📅 <span class='step'>10. Event cache oluşturuluyor...</span>\n";
    try {
        $kernel->call('event:cache');
        echo "   ✅ Event cache oluşturuldu\n\n";
    } catch (Exception $e) {
        echo "   ⚠️  Event cache komutu bulunamadı (eski Laravel versiyonu)\n\n";
    }
    
    echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
    echo "<span class='success'>✅ CACHE YENİLEME BAŞARIYLA TAMAMLANDI!</span>\n";
    echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";
    
    echo "📊 <span class='step'>ÖZET:</span>\n";
    echo "   • Eski cache'ler temizlendi\n";
    echo "   • Yeni cache'ler oluşturuldu\n";
    echo "   • Uygulama optimize edildi\n";
    echo "   • Production'a hazır! 🚀\n\n";
    
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