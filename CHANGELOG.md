# Changelog

Projeye yapılan tüm önemli değişiklikler bu dosyada belgelenir.

Format [Keep a Changelog](https://keepachangelog.com/en/1.0.0/) standardına dayanır ve bu proje [Semantic Versioning](https://semver.org/spec/v2.0.0.html) kullanır.

## [Unreleased]

### Planlanıyor
- Multi-language support (TR, EN, ES, FR)
- CLI version (command line kullanımı)
- Docker support
- Automated testing suite
- GitHub Actions integration

## [1.0.0] - 2024-01-15

### 🎉 İlk Stabil Sürüm

Bu sürüm production kullanımı için hazır!

### ✨ Eklenenler

#### Scripts
- `install.php` - İlk kurulum scripti
  - Application key generation
  - Storage link creation
  - Database migration
  - Cache optimization
  
- `update.php` - Güncelleme scripti
  - Old cache cleaning
  - Migration execution
  - New cache creation
  
- `clear-cache.php` - Cache temizleme scripti
  - Application cache clearing
  - Config cache clearing
  - Route cache clearing
  - View cache clearing
  - Compiled classes clearing
  - Event cache clearing
  
- `refresh-cache.php` - Cache yenileme scripti
  - 2-step process (clear + create)
  - Production optimization
  - Event cache support

#### Dokümantasyon
- Ana README.md
- Detaylı script dokümantasyonları (4 adet)
- CONTRIBUTING.md
- CHANGELOG.md
- LICENSE (MIT)
- SECURITY.md
- CODE_OF_CONDUCT.md

#### Özellikler
- 🎨 Profesyonel HTML çıktısı
- 🔒 Güvenlik kilidi (install.lock)
- 🐛 Detaylı hata raporlama
- ✅ Laravel 9+ uyumluluğu
- ⚡ PHP 8.0+ uyumluluğu

### 🔒 Güvenlik
- Single-run mechanism (install.lock)
- No sensitive data storage
- Secure error handling
- Permission checks

## [0.3.0] - 2024-01-10

### ✨ Eklenenler
- `refresh-cache.php` eklendi
- Event cache desteği
- 2-step cache refresh process
- Performance comparison documentation

### 📝 Değişiklikler
- README.md güncellendi
- Dokümantasyon iyileştirildi
- Emoji kullanımı standardize edildi

### 🐛 Düzeltmeler
- Laravel 7 event cache uyumluluk sorunu çözüldü
- Permission hatası handling iyileştirildi

## [0.2.0] - 2024-01-05

### ✨ Eklenenler
- `clear-cache.php` eklendi
- `update.php` eklendi
- Detaylı dokümantasyon
- Hata yönetimi iyileştirildi

### 📝 Değişiklikler
- HTML çıktısı iyileştirildi
- CSS renk paleti güncellendi
- Mesajlar daha açık hale getirildi

### 🐛 Düzeltmeler
- Storage permission hataları düzeltildi
- Laravel 8 uyumluluk sorunları çözüldü

## [0.1.0] - 2024-01-01

### 🎉 İlk Sürüm

### ✨ Eklenenler
- `install.php` - İlk kurulum scripti
- Temel HTML çıktısı
- Artisan komut entegrasyonu
- MIT License

### Özellikler
- Application key generation
- Storage link creation
- Migration support
- Basic cache creation

---

## Versiyon Notasyonu

- **MAJOR** (1.x.x): Breaking changes
- **MINOR** (x.1.x): Yeni özellikler (geriye uyumlu)
- **PATCH** (x.x.1): Bug fixes (geriye uyumlu)

## Değişiklik Tipleri

- `Added` - Yeni özellikler
- `Changed` - Mevcut işlevlerde değişiklikler
- `Deprecated` - Yakında kaldırılacak özellikler
- `Removed` - Kaldırılan özellikler
- `Fixed` - Bug düzeltmeleri
- `Security` - Güvenlik güncellemeleri

## Linkler

[Unreleased]: https://github.com/isousluer/laravel-deployment-scripts/compare/v1.0.0...HEAD
[1.0.0]: https://github.com/isousluer/laravel-deployment-scripts/compare/v0.3.0...v1.0.0
[0.3.0]: https://github.com/isousluer/laravel-deployment-scripts/compare/v0.2.0...v0.3.0
[0.2.0]: https://github.com/isousluer/laravel-deployment-scripts/compare/v0.1.0...v0.2.0
[0.1.0]: https://github.com/isousluer/laravel-deployment-scripts/releases/tag/v0.1.0