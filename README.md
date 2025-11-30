# 🚀 Laravel Deployment Scripts

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-blue.svg)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/Laravel-9.0%2B-red.svg)](https://laravel.com/)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](CONTRIBUTING.md)
[![GitHub Stars](https://img.shields.io/github/stars/isousluer/laravel-deployment-scripts.svg)](https://github.com/isousluer/laravel-deployment-scripts/stargazers)

Laravel projelerinizi hızlı, güvenli ve profesyonel şekilde deploy etmek için hazır scriptler!

## ✨ Özellikler

- 🎯 **Tek Tıkla Kurulum** - Karmaşık komutlardan kurtulun
- 🔒 **Güvenlik Odaklı** - Tek seferlik çalışma kilidi
- 🎨 **Profesyonel Arayüz** - Renkli HTML çıktısı
- ⚡ **Performans** - 10-20x hız artışı
- 🐛 **Hata Yönetimi** - Detaylı hata raporlama
- 📦 **Bakım Kolay** - Tek dosya, bağımlılık yok

## 📦 Scriptler

| Script | Amaç | Ortam | Dokümantasyon |
|--------|------|-------|---------------|
| **install.php** | İlk kurulum (key, storage, migration) | Yeni Proje | [📖 Detaylar](docs/install.md) |
| **update.php** | Güncelleme + Migration | Production Deploy | [📖 Detaylar](docs/update.md) |
| **clear-cache.php** | Cache temizleme | Development | [📖 Detaylar](docs/clear-cache.md) |
| **refresh-cache.php** | Cache yenileme | Production | [📖 Detaylar](docs/refresh-cache.md) |

## 🚀 Hızlı Başlangıç

### 1. İlk Kurulum

```bash
# 1. Script'i indirin
wget https://raw.githubusercontent.com/isousluer/laravel-deployment-scripts/main/scripts/install.php

# 2. public/ dizinine taşıyın
mv install.php public/

# 3. Tarayıcıdan çalıştırın
https://yourdomain.com/install.php

# 4. Dosyayı silin
rm public/install.php
```

### 2. Production Güncelleme

```bash
# Kod güncelleme sonrası
wget https://raw.githubusercontent.com/isousluer/laravel-deployment-scripts/main/scripts/update.php
mv update.php public/
https://yourdomain.com/update.php
rm public/update.php
```

### 3. Cache Yenileme

```bash
# Performans optimizasyonu için
wget https://raw.githubusercontent.com/isousluer/laravel-deployment-scripts/main/scripts/refresh-cache.php
mv refresh-cache.php public/
https://yourdomain.com/refresh-cache.php
rm public/refresh-cache.php
```

## 📖 Detaylı Dokümantasyon

- 📘 [İlk Kurulum Rehberi](docs/install.md)
- 📗 [Güncelleme Rehberi](docs/update.md)
- 📙 [Cache Temizleme Rehberi](docs/clear-cache.md)
- 📕 [Cache Yenileme Rehberi](docs/refresh-cache.md)

## 🎯 Kullanım Senaryoları

### Senaryo 1: Yeni Proje Kurulumu
```bash
1. Git clone
2. composer install
3. .env ayarları
4. install.php çalıştır  ← Bu script!
```

### Senaryo 2: Production Deploy
```bash
1. git pull
2. composer install --no-dev
3. update.php çalıştır  ← Bu script!
```

### Senaryo 3: Cache Sorunu
```bash
1. Config değiştirdin ama çalışmadı?
2. refresh-cache.php çalıştır  ← Bu script!
```

## 🔒 Güvenlik

⚠️ **ÖNEMLİ UYARILAR:**

- ✅ Scriptler tek seferlik çalışır (install.lock mekanizması)
- ✅ Kullanım sonrası mutlaka silin
- ✅ `.gitignore`'a ekleyin
- ❌ Production'da bırakmayın
- ❌ Şifreli bilgi içermez

### .gitignore'a Ekleyin

```gitignore
# Deployment Scripts
public/install.php
public/update.php
public/clear-cache.php
public/refresh-cache.php
public/install.lock
```

## 📊 Performans Karşılaştırması

| Durum | Yanıt Süresi | Cache |
|-------|-------------|-------|
| ❌ Cache Yok | 150-200ms | Yok |
| ✅ Cache Var | 10-20ms | Var |
| **Fark** | **10-20x Hızlı** | **refresh-cache.php** |

## 🛠️ Gereksinimler

- PHP 8.0 veya üzeri
- Laravel 9.0 veya üzeri
- Composer bağımlılıkları yüklü
- Veritabanı bağlantısı aktif
- Web sunucu (Apache/Nginx)

## 💡 En İyi Uygulamalar

### Development Ortamı
```bash
# Cache'leri kapatın
CACHE_DRIVER=array
VIEW_COMPILED_PATH=false

# Gerektiğinde temizleyin
clear-cache.php
```

### Production Ortamı
```bash
# Deploy workflow
1. php artisan down
2. git pull
3. composer install --no-dev --optimize-autoloader
4. update.php veya refresh-cache.php
5. php artisan queue:restart
6. php artisan up
```

## 🤝 Katkıda Bulunma

Katkılarınızı bekliyoruz! Lütfen [CONTRIBUTING.md](CONTRIBUTING.md) dosyasını okuyun.

### Katkı Süreci

1. 🍴 Fork edin
2. 🌱 Feature branch oluşturun (`git checkout -b feature/amazing`)
3. 💾 Commit yapın (`git commit -m 'Add amazing feature'`)
4. 📤 Push edin (`git push origin feature/amazing`)
5. 🎉 Pull Request açın

## 🐛 Sorun Bildirme

Sorun mu buldunuz? [Issue açın](https://github.com/isousluer/laravel-deployment-scripts/issues/new)!

### Issue Şablonları
- 🐛 [Bug Report](https://github.com/isousluer/laravel-deployment-scripts/issues/new?template=bug_report.md)
- 💡 [Feature Request](https://github.com/isousluer/laravel-deployment-scripts/issues/new?template=feature_request.md)

## 📝 Changelog

Tüm önemli değişiklikler [CHANGELOG.md](CHANGELOG.md) dosyasında belgelenir.

## 📄 Lisans

Bu proje [MIT Lisansı](LICENSE) altında lisanslanmıştır.

## 🌟 Yıldız Geçmişi

[![Star History Chart](https://api.star-history.com/svg?repos=isousluer/laravel-deployment-scripts&type=Date)](https://star-history.com/#isousluer/laravel-deployment-scripts&Date)

## 💖 Teşekkürler

Bu projeyi yıldızlayan, fork yapan ve katkıda bulunan herkese teşekkürler!

## 🔗 Bağlantılar

- 📚 [Laravel Dokümantasyonu](https://laravel.com/docs)
- 🌐 [Proje Web Sitesi](https://yourdomain.com)
- 💬 [Discussions](https://github.com/isousluer/laravel-deployment-scripts/discussions)
- 🐦 [Twitter](https://twitter.com/isousluer)

## 📧 İletişim

Sorularınız mı var? [Email gönderin](mailto:your@email.com)

---

<p align="center">
  Made with ❤️ by <a href="https://github.com/isousluer">Your Name</a>
</p>

<p align="center">
  <a href="#-laravel-deployment-scripts">Başa Dön ⬆️</a>
</p>