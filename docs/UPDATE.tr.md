# 🔄 Laravel Güncelleme Scripti

Laravel projenizi güncellerken cache sorunlarını tek tıkla çözün!

## 🚀 Özellikler

- ✅ **Eski Cache Temizleme** (config, route, view)
- ✅ **Migration Çalıştırma** (yeni veritabanı değişiklikleri)
- ✅ **Yeni Cache Oluşturma** (optimize edilmiş)
- ✅ **Güvenlik Kilidi** (tek seferlik çalışma)
- ✅ **Profesyonel HTML Çıktısı**
- ✅ **Detaylı Hata Raporlama**

## 📝 Kullanım

### Adım 1: Kodu Güncelleyin
```bash
# Git ile güncelleyin
git pull origin main

# Veya dosyaları manuel yükleyin
```

### Adım 2: Scripti Yükleyin
```bash
# Dosyayı public/ dizinine yükleyin
public/update.php
```

### Adım 3: Tarayıcıdan Çalıştırın
```
https://domain.com/update.php
```

### Adım 4: Dosyayı Silin
```bash
rm public/update.php
rm public/install.lock  # Yeni güncelleme için
```

## ⚙️ Yapılan İşlemler

### BÖLÜM 1: Eski Cache'leri Temizle
```bash
php artisan cache:clear       # 1. Uygulama cache
php artisan view:clear        # 2. View cache
php artisan config:clear      # 3. Config cache
php artisan route:clear       # 4. Route cache
```

### BÖLÜM 2: Migration Çalıştır
```bash
php artisan migrate --force   # 5. Veritabanı güncellemeleri
```

### BÖLÜM 3: Yeni Cache Oluştur
```bash
php artisan config:cache      # 6. Config cache
php artisan route:cache       # 7. Route cache
php artisan view:cache        # 8. View cache
```

## 🔒 Güvenlik

⚠️ **ÖNEMLİ:** Bu script `install.lock` dosyası oluşturarak tekrar çalışmasını engeller.

### Güvenlik Kontrol Listesi:
- [ ] Script sadece güncelleme sırasında kullanılmalı
- [ ] Her güncelleme sonrası silinmeli
- [ ] `install.lock` dosyasını silmeden tekrar çalışmaz
- [ ] Dosya izinleri kontrol edilmeli (644)

## 📋 Gereksinimler

- PHP 8.0+
- Laravel 9.0+
- Composer bağımlılıkları güncel olmalı
- Veritabanı bağlantısı aktif olmalı
- Migration dosyaları hazır olmalı

## 🎯 Ne Zaman Kullanılır?

✅ **Kullanılmalı:**
- Production deploy sonrası
- Yeni migration ekledikten sonra
- Config dosyalarını değiştirdikten sonra
- Route'ları güncelledikten sonra
- Cache sorunları yaşandığında

❌ **Kullanılmamalı:**
- İlk kurulumda (bunun yerine `install.php` kullanın)
- Sadece cache temizlemek için (bunun yerine `clear-cache.php`)
- Development sırasında sürekli

## 🐛 Sorun Giderme

### "Migration table not found" hatası
```bash
# İlk migration tablosunu oluşturun
php artisan migrate:install
```

### "Nothing to migrate" mesajı
```bash
# Normal bir durumdur, yeni migration yoktur
# Hiçbir şey yapmanıza gerek yok
```

### "Syntax error in migration" hatası
```bash
# Migration dosyalarını kontrol edin
# Son eklenen migration'ı geri alın
php artisan migrate:rollback --step=1
```

### Cache oluşturma hatası
```bash
# Storage izinlerini kontrol edin
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

## 💡 En İyi Uygulamalar

### Deploy İş Akışı
```bash
# 1. Bakım modunu etkinleştirin
php artisan down

# 2. Kodu güncelleyin
git pull origin main

# 3. Composer bağımlılıklarını güncelleyin
composer install --no-dev --optimize-autoloader

# 4. Bu scripti çalıştırın
https://domain.com/update.php

# 5. Queue worker'ları yeniden başlatın
php artisan queue:restart

# 6. Bakım modunu kapatın
php artisan up
```

### Zero-Downtime Deployment
```bash
# 1. Yeni release dizini oluştur
mkdir releases/v2.0

# 2. Kodu yükle
git clone ... releases/v2.0

# 3. Composer install
cd releases/v2.0 && composer install

# 4. Symbolic link güncelle
ln -sfn releases/v2.0 current

# 5. Bu scripti çalıştır
https://domain.com/update.php

# 6. Eski sürümü sil (opsiyonel)
rm -rf releases/v1.0
```

## 📊 install.php vs update.php

| Özellik | install.php | update.php |
|---------|-------------|------------|
| Key Generate | ✅ | ❌ |
| Storage Link | ✅ | ❌ |
| Cache Clear | ❌ | ✅ |
| Migration | ✅ | ✅ |
| Cache Create | ✅ | ✅ |
| **Ne Zaman** | İlk kurulum | Güncellemeler |

## 📸 Ekran Görüntüsü

Script çalıştığında 3 bölümlü bir çıktı göreceksiniz:

1. 🧹 **Cache Temizleme** - Mavi başlıklar
2. 📦 **Migration** - Yeşil onay işaretleri
3. ⚡ **Cache Oluşturma** - Başarı mesajları

## 🔄 Rollback Stratejisi

### Migration Geri Alma
```bash
# Son migration'ı geri al
php artisan migrate:rollback

# Belirli adım kadar geri al
php artisan migrate:rollback --step=3

# Tüm migration'ları geri al
php artisan migrate:reset

# Geri al ve yeniden çalıştır
php artisan migrate:refresh
```

### Kod Geri Alma
```bash
# Git ile önceki versiyona dön
git checkout v1.0.0

# Composer güncelle
composer install --no-dev

# Update.php çalıştır
https://domain.com/update.php
```

## 🧪 Test Ortamında Deneme

### Staging Ortamı
```bash
# 1. Staging'e deploy et
ssh staging@server
cd /var/www/staging

# 2. Production verilerini kopyala
php artisan db:seed --class=ProductionSeeder

# 3. Update scripti çalıştır
curl https://staging.domain.com/update.php

# 4. Test et
php artisan test

# 5. Başarılıysa production'a geç
```

## 📚 Migration En İyi Uygulamaları

### Güvenli Migration Yazma
```php
<?php
// ✅ İyi örnek - Geri alınabilir
public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('phone')->nullable();
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('phone');
    });
}

// ❌ Kötü örnek - Veri kaybı riski
public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('old_field'); // Veri kaybolur!
    });
}
```

### Migration Sıralaması
```bash
# Migration'ları doğru sırayla oluşturun
2024_01_01_000001_create_users_table.php
2024_01_01_000002_create_posts_table.php
2024_01_01_000003_add_foreign_keys.php  # En son!
```

## ⚡ Performans İpuçları

### Büyük Migration'lar
```php
// Büyük veri setlerinde batch kullanın
public function up()
{
    User::chunk(1000, function ($users) {
        foreach ($users as $user) {
            $user->update(['status' => 'active']);
        }
    });
}
```

### Index Ekleme
```php
// Index'leri migration'da ekleyin
Schema::table('posts', function (Blueprint $table) {
    $table->index('user_id');
    $table->index(['user_id', 'published_at']);
});
```

## 🔗 İlgili Scriptler

| Script | Amaç | Kullanım |
|--------|------|----------|
| [install.php](INSTALL.tr.md) | İlk kurulum | Yeni proje |
| **update.php** | Güncelleme + Migration | Deploy sonrası |
| [clear-cache.php](CLEAR_CACHE.tr.md) | Cache temizleme | Development |
| [refresh-cache.php](REFRESH_CACHE.tr.md) | Cache yenileme | Production |

## 📚 Daha Fazla Bilgi

- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Caching](https://laravel.com/docs/cache)
- [Laravel Deployment](https://laravel.com/docs/deployment)
- [Database Seeding](https://laravel.com/docs/seeding)

## 📄 Lisans

Bu script MIT lisansı altında serbestçe kullanılabilir.

## 🤝 Katkıda Bulunma

Hata bildirimleri ve önerileriniz için issue açabilirsiniz!

---

**⚠️ HATIRLATMA:** Güncelleme tamamlandıktan sonra bu dosyayı mutlaka silin!