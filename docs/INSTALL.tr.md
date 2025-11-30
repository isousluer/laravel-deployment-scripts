# 📦 Laravel İlk Kurulum Scripti

Laravel projenizin ilk kurulumunu tek tıkla tamamlayın!

## 🚀 Özellikler

- ✅ **Application Key** oluşturma
- ✅ **Storage Link** kurulumu
- ✅ **Database Migration** çalıştırma
- ✅ **Cache Optimizasyonu** (config, route, view)
- ✅ **Güvenlik Kilidi** (tek seferlik çalışma)
- ✅ **Profesyonel HTML Çıktısı**
- ✅ **Detaylı Hata Raporlama**

## 📝 Kullanım

### Adım 1: Dosyayı Yükleyin
```bash
# Dosyayı public/ dizinine yükleyin
public/install.php
```

### Adım 2: Tarayıcıdan Çalıştırın
```
https://domain.com/install.php
```

### Adım 3: Dosyayı Silin
```bash
rm public/install.php
```

## ⚙️ Yapılan İşlemler

Script şu Artisan komutlarını sırayla çalıştırır:

```bash
php artisan key:generate      # 1. Uygulama anahtarı
php artisan storage:link      # 2. Storage bağlantısı
php artisan migrate --force   # 3. Veritabanı migration'ları
php artisan config:cache      # 4. Config cache
php artisan route:cache       # 5. Route cache
php artisan view:cache        # 6. View cache
```

## 🔒 Güvenlik

⚠️ **ÖNEMLİ:** Bu script bir kez çalıştıktan sonra `install.lock` dosyası oluşturur ve tekrar çalışmaz.

### Güvenlik Kontrol Listesi:
- [ ] Script sadece kurulum sırasında kullanılmalı
- [ ] Kurulum sonrası mutlaka silinmeli
- [ ] Production'da .gitignore'a eklenmiş olmalı
- [ ] Dosya izinleri kontrol edilmeli (644)

## 📋 Gereksinimler

- PHP 8.0+
- Laravel 9.0+
- Composer bağımlılıkları yüklenmiş olmalı
- `.env` dosyası yapılandırılmış olmalı
- Veritabanı bağlantısı hazır olmalı

## 🎯 Ne Zaman Kullanılır?

✅ **Kullanılmalı:**
- Yeni bir Laravel projesi kurulurken
- Sunucuya ilk deploy yapılırken
- Klonlanmış bir proje ilk kez çalıştırılırken

❌ **Kullanılmamalı:**
- Güncellemeler için (bunun yerine `update.php` kullanın)
- Development sırasında tekrar tekrar
- Production'da zaten kurulu sistemlerde

## 🐛 Sorun Giderme

### "Class not found" hatası
```bash
# Composer bağımlılıklarını yükleyin
composer install --no-dev --optimize-autoloader
```

### "Permission denied" hatası
```bash
# Dizin izinlerini düzeltin
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### "Database connection error"
```bash
# .env dosyasını kontrol edin
nano .env

# Veritabanı bilgilerini doğrulayın
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 📸 Ekran Görüntüsü

Script çalıştığında profesyonel bir HTML çıktısı göreceksiniz:

- 🔵 Mavi renkli adım başlıkları
- ✅ Yeşil başarı mesajları
- ⚠️ Turuncu uyarılar
- ❌ Kırmızı hata mesajları

## 🔗 İlgili Scriptler

| Script | Amaç | Kullanım |
|--------|------|----------|
| **install.php** | İlk kurulum | Yeni proje |
| [update.php](UPDATE.tr.md) | Güncelleme + Migration | Deploy sonrası |
| [clear-cache.php](CLEAR_CACHE.tr.md) | Cache temizleme | Development |
| [refresh-cache.php](REFRESH_CACHE.tr.md) | Cache yenileme | Production |

## 📚 Daha Fazla Bilgi

- [Laravel Dokumentasyonu](https://laravel.com/docs)
- [Laravel Deployment](https://laravel.com/docs/deployment)
- [Artisan Console](https://laravel.com/docs/artisan)

## 📄 Lisans

Bu script MIT lisansı altında serbestçe kullanılabilir.

## 🤝 Katkıda Bulunma

Hata bildirimleri ve önerileriniz için issue açabilirsiniz!

---

**⚠️ HATIRLATMA:** Kurulum tamamlandıktan sonra bu dosyayı mutlaka silin!