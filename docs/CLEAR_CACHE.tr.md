# 🧹 Laravel Cache Temizleme Scripti

Laravel'de tüm cache türlerini tek tıkla temizleyin!

## 🚀 Özellikler

- ✅ **Application Cache** temizleme
- ✅ **Config Cache** temizleme
- ✅ **Route Cache** temizleme
- ✅ **View Cache** temizleme
- ✅ **Compiled Classes** temizleme
- ✅ **Event Cache** temizleme (Laravel 8+)
- ✅ **Profesyonel HTML Çıktısı**
- ✅ **Detaylı Hata Raporlama**

## 📝 Kullanım

### Adım 1: Dosyayı Yükleyin
```bash
# Dosyayı public/ dizinine yükleyin
public/clear-cache.php
```

### Adım 2: Tarayıcıdan Çalıştırın
```
https://domain.com/clear-cache.php
```

### Adım 3: Dosyayı Silin
```bash
rm public/clear-cache.php
```

## ⚙️ Temizlenen Cache'ler

Script şu Artisan komutlarını çalıştırır:

```bash
php artisan cache:clear        # 1. Application cache
php artisan config:clear       # 2. Config cache
php artisan route:clear        # 3. Route cache
php artisan view:clear         # 4. View cache
php artisan clear-compiled     # 5. Compiled classes
php artisan event:clear        # 6. Event cache (Laravel 8+)
```

## 🎯 Ne Zaman Kullanılır?

✅ **Kullanılmalı:**
- Development ortamında sorun çıktığında
- Config dosyalarını değiştirdikten sonra
- Route'ları güncelledikten sonra
- View'lerde değişiklik yapmadığında görünmüyorsa
- "Class not found" hatası aldığında
- .env dosyasını değiştirdikten sonra
- Middleware ekledikten sonra
- Service Provider değişikliklerinde

❌ **Kullanılmamalı:**
- Production ortamında (bunun yerine `refresh-cache.php` kullanın)
- Cache'leri tekrar oluşturmak istiyorsanız (bunun yerine `refresh-cache.php`)

## 🔍 Hangi Cache Ne İşe Yarar?

### 1. Application Cache
```php
// Cache facade ile kaydedilen veriler
Cache::put('key', 'value', 3600);
Cache::remember('users', 3600, function () {
    return DB::table('users')->get();
});

// Nerede saklanır?
// storage/framework/cache/data/
```

**Ne zaman temizlenir:**
- Genel cache temizliği gerektiğinde
- Cache driver değiştiğinde
- Test verilerini temizlerken

### 2. Config Cache
```php
// config/ klasöründeki dosyalar
config('app.name')
config('database.default')
env('APP_KEY')  // ⚠️ Cache'de çalışmaz!

// Nerede saklanır?
// bootstrap/cache/config.php
```

**Ne zaman temizlenir:**
- .env dosyasını değiştirdikten sonra
- config/ dosyalarını değiştirdikten sonra
- Yeni config dosyası ekledikten sonra

⚠️ **ÖNEMLİ:** Config cache aktifken `env()` fonksiyonu NULL döner!

### 3. Route Cache
```php
// routes/ klasöründeki dosyalar
Route::get('/', [HomeController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    // ...
});

// Nerede saklanır?
// bootstrap/cache/routes-v7.php
```

**Ne zaman temizlenir:**
- Yeni route ekledikten sonra
- Route middleware değiştirdikten sonra
- Route group'ları güncelledikten sonra
- 404 hatası alındığında (route tanımlı ama çalışmıyor)

⚠️ **UYARI:** Closure route'lar cache'lenemez!

### 4. View Cache
```php
// resources/views/ klasöründeki Blade dosyaları
@extends('layouts.app')
@include('partials.header')
@component('components.alert')

// Nerede saklanır?
// storage/framework/views/
```

**Ne zaman temizlenir:**
- Blade dosyalarını değiştirdiniz ama görünmüyor
- Layout değişiklikleri yansımıyor
- Component güncellemeleri uygulanmıyor
- Syntax hatası düzelttiniz ama hata devam ediyor

### 5. Compiled Classes
```php
// Bootstrap sırasında derlenen dosyalar
// vendor/composer/autoload_*.php
// bootstrap/cache/packages.php
// bootstrap/cache/services.php

// Nerede saklanır?
// bootstrap/cache/
```

**Ne zaman temizlenir:**
- "Class not found" hatası
- Composer paket ekledikten sonra
- Service Provider ekledikten sonra
- Facade tanımladıktan sonra

### 6. Event Cache
```php
// EventServiceProvider'da tanımlı event'ler
protected $listen = [
    OrderShipped::class => [
        SendShipmentNotification::class,
    ],
];

// Nerede saklanır?
// bootstrap/cache/events.php
```

**Ne zaman temizlenir:**
- Yeni event/listener ekledikten sonra
- Event subscriber değiştirdikten sonra
- Event discovery sorunlarında

## 🐛 Yaygın Sorunlar ve Çözümleri

### Sorun 1: "Class not found"
```bash
# Çözüm
1. clear-cache.php çalıştır
2. composer dump-autoload
3. php artisan optimize:clear
```

### Sorun 2: Config değişiklikleri yansımıyor
```bash
# Çözüm
1. .env dosyasını kontrol et
2. clear-cache.php çalıştır
3. Tarayıcı cache'ini temizle (Ctrl+Shift+R)
```

### Sorun 3: Route bulunamıyor (404)
```bash
# Çözüm
1. Route tanımını kontrol et
2. clear-cache.php çalıştır
3. php artisan route:list ile doğrula
```

### Sorun 4: Blade değişiklikleri görünmüyor
```bash
# Çözüm
1. clear-cache.php çalıştır
2. Tarayıcı cache'ini temizle
3. Hard refresh yap (Ctrl+Shift+R)
```

### Sorun 5: "Permission denied" hatası
```bash
# Storage dizinlerinin izinlerini düzelt
chmod -R 755 storage/framework/cache
chmod -R 755 storage/framework/views
chmod -R 755 bootstrap/cache

# Sahipliği düzelt
chown -R www-data:www-data storage bootstrap/cache
```

### Sorun 6: "Event cache komutu bulunamadı" uyarısı
```
# Normal bir durumdur
# Laravel 7 ve altı versiyonlarda bu komut yoktur
# Diğer cache'ler başarıyla temizlenmiştir
✅ Sorun değil, diğer cache'ler temizlendi
```

## 💡 Development İpuçları

### Cache'i Tamamen Kapatmak

#### .env Ayarları
```env
# Cache driver'ı array yap (RAM'de tutulur, kalıcı değil)
CACHE_DRIVER=array

# Session driver
SESSION_DRIVER=file  # veya array (test için)

# Queue driver
QUEUE_CONNECTION=sync  # development için

# View cache devre dışı (önerilmez)
# VIEW_COMPILED_PATH=false
```

### Config Cache Kullanmayın
```bash
# Development'ta ASLA bunu yapma!
❌ php artisan config:cache

# Config cache sadece production içindir
✅ Production'da kullan
```

### Otomatik Cache Temizleme
```bash
# package.json'a ekle
"scripts": {
    "dev": "npm run development && php artisan cache:clear",
    "watch": "npm run watch && php artisan cache:clear"
}
```

### Git Hook ile Otomatik Temizleme
```bash
# .git/hooks/post-merge
#!/bin/bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## 📊 clear-cache.php vs refresh-cache.php

| Özellik | clear-cache.php | refresh-cache.php |
|---------|-----------------|-------------------|
| Cache Temizleme | ✅ | ✅ |
| Cache Oluşturma | ❌ | ✅ |
| Development | ✅ Önerilen | ❌ |
| Production | ❌ | ✅ Önerilen |
| Performans Sonrası | Normal (yavaş) | Optimize (hızlı) |
| Kullanım Sıklığı | Sık | Nadir |

## 🚀 Performans Notu

⚠️ **ÖNEMLİ:** Bu script sadece cache'leri temizler, yeniden oluşturmaz!

**Production'da bu durum şu anlama gelir:**

### Cache Olmadan (clear-cache.php sonrası)
```
❌ Her istekte config dosyaları okunur
❌ Route'lar her seferde parse edilir
❌ View'lar her istekte compile edilir
❌ Event'ler her seferde discover edilir

Sonuç: 150-200ms yanıt süresi
```

### Cache ile (refresh-cache.php sonrası)
```
✅ Config anında hazır
✅ Route'lar önceden derlenmiş
✅ View'lar optimize edilmiş
✅ Event'ler cache'lenmiş

Sonuç: 10-20ms yanıt süresi
```

**Production için `refresh-cache.php` kullanın! 10-20x daha hızlı!**

## 🔧 Manuel Cache Temizleme

### Artisan Komutları
```bash
# Tüm cache'leri temizle
php artisan optimize:clear

# Sadece application cache
php artisan cache:clear

# Sadece config cache
php artisan config:clear

# Sadece route cache
php artisan route:clear

# Sadece view cache
php artisan view:clear

# Sadece event cache (Laravel 8+)
php artisan event:clear
```

### Dosya Sisteminden Silme
```bash
# Application cache
rm -rf storage/framework/cache/data/*

# View cache
rm -rf storage/framework/views/*

# Config cache
rm bootstrap/cache/config.php

# Route cache
rm bootstrap/cache/routes-v7.php

# Event cache
rm bootstrap/cache/events.php

# Compiled services
rm bootstrap/cache/services.php
rm bootstrap/cache/packages.php
```

## 📸 Ekran Görüntüsü

Script çalıştığında şunları göreceksiniz:

- 🧹 Her cache türü için ayrı adım
- ✅ Yeşil onay işaretleri
- ⚠️ Uyarı mesajları (eski Laravel versiyonları için)
- 📌 Temizleme zamanı damgası

## 🎓 Cache Stratejileri

### Development Ortamı
```php
// Cache kullanma
Cache::remember('users', now()->addMinutes(1), function () {
    return User::all();
});

// Veya hiç cache'leme
User::all();
```

### Staging Ortamı
```php
// Kısa süreli cache
Cache::remember('users', now()->addMinutes(5), function () {
    return User::all();
});
```

### Production Ortamı
```php
// Uzun süreli cache
Cache::remember('users', now()->addHours(24), function () {
    return User::all();
});
```

## 🔗 İlgili Scriptler

| Script | Amaç | Kullanım |
|--------|------|----------|
| [install.php](INSTALL.tr.md) | İlk kurulum | Yeni proje |
| [update.php](UPDATE.tr.md) | Güncelleme + Migration | Deploy sonrası |
| **clear-cache.php** | Cache temizleme | Development |
| [refresh-cache.php](REFRESH_CACHE.tr.md) | Cache yenileme | Production |

## 📚 Daha Fazla Bilgi

- [Laravel Caching](https://laravel.com/docs/cache)
- [Laravel Configuration](https://laravel.com/docs/configuration)
- [Laravel Optimization](https://laravel.com/docs/deployment#optimization)
- [Blade Templates](https://laravel.com/docs/blade)

## 📄 Lisans

Bu script MIT lisansı altında serbestçe kullanılabilir.

## 🤝 Katkıda Bulunma

Hata bildirimleri ve önerileriniz için issue açabilirsiniz!

---

**💡 İPUCU:** Development'ta sürekli kullanacaksanız, cache'leri tamamen kapatmayı düşünün!