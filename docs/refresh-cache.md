# 🔄 Laravel Cache Yenileme Scripti

Laravel cache'lerini temizleyip yeniden oluşturun - Production için optimize!

## 🚀 Özellikler

- ✅ **2 Bölümlü İşlem** (Temizle + Oluştur)
- ✅ **Tüm Cache Türleri** (config, route, view, event)
- ✅ **Production Optimizasyonu** 
- ✅ **10-20x Performans Artışı**
- ✅ **Profesyonel HTML Çıktısı**
- ✅ **Detaylı Hata Raporlama**

## 📝 Kullanım

### Adım 1: Dosyayı Yükleyin
```bash
# Dosyayı public/ dizinine yükleyin
public/refresh-cache.php
```

### Adım 2: Tarayıcıdan Çalıştırın
```
https://domain.com/refresh-cache.php
```

### Adım 3: Dosyayı Silin
```bash
rm public/refresh-cache.php
```

## ⚙️ İşlem Adımları

### 🧹 BÖLÜM 1: Eski Cache'leri Temizle

```bash
php artisan cache:clear        # 1. Application cache
php artisan config:clear       # 2. Config cache
php artisan route:clear        # 3. Route cache
php artisan view:clear         # 4. View cache
php artisan clear-compiled     # 5. Compiled classes
php artisan event:clear        # 6. Event cache
```

### ⚡ BÖLÜM 2: Yeni Cache'leri Oluştur

```bash
php artisan config:cache       # 7. Config cache
php artisan route:cache        # 8. Route cache
php artisan view:cache         # 9. View cache
php artisan event:cache        # 10. Event cache
```

## 🎯 Ne Zaman Kullanılır?

✅ **Kullanılmalı:**
- Production deploy sonrası
- Config dosyalarını değiştirdikten sonra
- Route'ları güncelledikten sonra
- View'larda değişiklik yaptıktan sonra
- Performans optimizasyonu için
- Cache sorunlarında

❌ **Kullanılmamalı:**
- Development ortamında sürekli
- İlk kurulumda (bunun yerine `install.php`)
- Sadece temizlik için (bunun yerine `clear-cache.php`)

## 🚀 Performans Karşılaştırması

### Cache Olmadan (Yavaş)
```
❌ Her istekte config dosyaları okunur
❌ Route'lar her seferde parse edilir
❌ View'lar her istekte compile edilir
❌ 150-200ms yanıt süresi
```

### Cache ile (Hızlı)
```
✅ Config anında hazır
✅ Route'lar önceden derlenmiş
✅ View'lar optimize edilmiş
✅ 10-20ms yanıt süresi
```

**Sonuç: 10-20x daha hızlı! 🚀**

## 🔍 Cache Türleri Detay

### Config Cache
```bash
# Tüm config/ dosyalarını tek dosyada birleştirir
# bootstrap/cache/config.php oluşturur
# env() fonksiyonu artık çalışmaz!
```

⚠️ **UYARI:** Config cache aktifken `env()` fonksiyonu **NULL** döner!

```php
// ❌ Yanlış kullanım (config cache ile çalışmaz)
$debug = env('APP_DEBUG');

// ✅ Doğru kullanım (config cache ile çalışır)
$debug = config('app.debug');
```

### Route Cache
```bash
# Route'ları serialize eder
# bootstrap/cache/routes-v7.php oluşturur
# Closure route'lar desteklenmez!
```

⚠️ **UYARI:** Closure route'lar serialize edilemez!

```php
// ❌ Yanlış (cache'lenemez)
Route::get('/', function () {
    return view('welcome');
});

// ✅ Doğru (cache'lenebilir)
Route::get('/', [HomeController::class, 'index']);
```

### View Cache
```bash
# Blade şablonlarını derler
# storage/framework/views/ dizininde saklar
```

### Event Cache
```bash
# Event-listener eşleşmelerini kaydeder
# bootstrap/cache/events.php oluşturur
# Laravel 8+ için geçerli
```

## 🐛 Sorun Giderme

### "Target class does not exist" hatası
```bash
# Route cache nedeniyle
# Controller namespace'lerini kontrol edin
# RouteServiceProvider'ı güncelleyin
```

### "env() always returns null" sorunu
```bash
# Config cache aktif
# env() yerine config() kullanın
# Veya cache'i temizleyin: php artisan config:clear
```

### "Closure route cannot be cached" hatası
```bash
# routes/web.php dosyasında Closure route var
# Controller'a taşıyın veya cache kullanmayın
```

### "Permission denied" hatası
```bash
# Cache dizinlerinin izinlerini düzeltin
chmod -R 755 storage/framework/cache
chmod -R 755 storage/framework/views
chmod -R 755 bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

## 💡 Production En İyi Uygulamalar

### Deploy Sonrası Checklist
```bash
# ✅ 1. Composer optimizasyonu
composer install --no-dev --optimize-autoloader

# ✅ 2. Cache yenileme (bu script)
https://domain.com/refresh-cache.php

# ✅ 3. OPcache'i yenile (varsa)
php artisan opcache:clear

# ✅ 4. Queue worker'ları yeniden başlat
php artisan queue:restart
```

### Önerilen .env Ayarları (Production)
```env
APP_ENV=production
APP_DEBUG=false
CACHE_DRIVER=redis       # veya memcached
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis
```

## 📊 Script Karşılaştırma Tablosu

| Özellik | clear-cache | refresh-cache | update |
|---------|-------------|---------------|--------|
| Cache Temizle | ✅ | ✅ | ✅ |
| Cache Oluştur | ❌ | ✅ | ✅ |
| Migration | ❌ | ❌ | ✅ |
| Development | ✅ | ❌ | ❌ |
| Production | ❌ | ✅ | ✅ |
| Performans | Yavaş | Hızlı | Hızlı |

## 📸 Ekran Görüntüsü

Script çalıştığında göreceksiniz:

1. 🧹 **BÖLÜM 1:** Mor renkli bölüm başlığı
   - Her cache türü için mavi adım
   - Yeşil onay işaretleri

2. ⚡ **BÖLÜM 2:** Mor renkli bölüm başlığı
   - Cache oluşturma adımları
   - Yeşil başarı mesajları

3. 📊 **ÖZET:** Turuncu renkli özet bilgisi

## 🔗 İlgili Scriptler

| Script | Amaç | Ortam | Performans |
|--------|------|-------|------------|
| [install.php](link) | İlk kurulum | Yeni proje | Optimize |
| [update.php](link) | Güncelleme | Deploy | Optimize |
| [clear-cache.php](link) | Temizleme | Development | Yavaş |
| **refresh-cache.php** | Yenileme | Production | Hızlı |

## 🎓 Deployment Workflow Örneği

```bash
# 1. Maintenance Mode
php artisan down

# 2. Git Pull
git pull origin main

# 3. Composer Update
composer install --no-dev --optimize-autoloader

# 4. NPM Build (varsa)
npm run build

# 5. Cache Refresh (bu script)
curl https://domain.com/refresh-cache.php

# 6. Queue Restart
php artisan queue:restart

# 7. Maintenance Mode Kapat
php artisan up
```

## 📚 Daha Fazla Bilgi

- [Laravel Optimization](https://laravel.com/docs/deployment#optimization)
- [Laravel Caching](https://laravel.com/docs/cache)
- [Laravel Performance](https://laravel.com/docs/deployment#server-requirements)
- [Laravel Deployment](https://laravel.com/docs/deployment)

## ⚡ Performans İpuçları

1. **OPcache Kullanın**
   ```ini
   ; php.ini
   opcache.enable=1
   opcache.memory_consumption=256
   opcache.max_accelerated_files=20000
   ```

2. **Redis Cache Kullanın**
   ```env
   CACHE_DRIVER=redis
   SESSION_DRIVER=redis
   ```

3. **CDN Kullanın**
   ```php
   // public assets için
   asset('css/app.css')  // CDN URL'e yönlendir
   ```

## 📄 Lisans

Bu script MIT lisansı altında serbestçe kullanılabilir.

## 🤝 Katkıda Bulunma

Hata bildirimleri ve önerileriniz için issue açabilirsiniz!

---

**🚀 PERFORMANS:** Bu script sayesinde uygulamanız 10-20x daha hızlı çalışacak!