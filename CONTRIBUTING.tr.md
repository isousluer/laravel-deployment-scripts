# 🤝 Katkıda Bulunma Rehberi

Laravel Deployment Scripts projesine katkıda bulunmayı düşündüğünüz için teşekkürler! 

## 📋 İçindekiler

- [Davranış Kuralları](#-davranış-kuralları)
- [Nasıl Katkıda Bulunabilirim?](#-nasıl-katkıda-bulunabilirim)
- [Geliştirme Süreci](#-geliştirme-süreci)
- [Kod Standartları](#-kod-standartları)
- [Commit Mesajları](#-commit-mesajları)
- [Pull Request Süreci](#-pull-request-süreci)
- [Issue Raporlama](#-issue-raporlama)

## 📜 Davranış Kuralları

Bu proje ve topluluk, herkes için açık ve misafirperver bir ortam sağlamayı taahhüt eder.

### Beklentilerimiz

✅ **Olumlu Davranışlar:**
- Saygılı ve yapıcı dil kullanın
- Farklı görüşlere açık olun
- Yapıcı eleştiri kabul edin
- Topluluk yararına odaklanın
- Diğer katkı sağlayıcılara empati gösterin

❌ **Kabul Edilemez Davranışlar:**
- Taciz veya hakaret içeren dil
- Trolling veya kışkırtıcı yorumlar
- Kişisel veya politik saldırılar
- Başkalarının özel bilgilerini paylaşma

## 💡 Nasıl Katkıda Bulunabilirim?

Katkıda bulunmanın birçok yolu var:

### 1. 🐛 Bug Bildirimi
Hata mı buldunuz? [Issue açın](https://github.com/isousluer/laravel-deployment-scripts/issues/new?template=bug_report.md)!

### 2. 💡 Özellik Önerisi
Yeni bir fikriniz mi var? [Feature Request açın](https://github.com/isousluer/laravel-deployment-scripts/issues/new?template=feature_request.md)!

### 3. 📝 Dokümantasyon
Dokümantasyonu geliştirin:
- Yazım hatalarını düzeltin
- Örnekler ekleyin
- Açıklamaları netleştirin
- Çeviriler ekleyin

### 4. 💻 Kod Katkısı
- Mevcut issue'ları çözün
- Yeni özellikler ekleyin
- Performans iyileştirmeleri yapın
- Test kapsamını artırın

### 5. ⭐ Projeyi Destekleyin
- GitHub'da yıldız verin
- Sosyal medyada paylaşın
- Blog yazısı yazın
- Başkalarına önerin

## 🔨 Geliştirme Süreci

### 1. Repository'yi Fork Edin

```bash
# GitHub'da Fork butonuna tıklayın
# Sonra klonlayın
git clone https://github.com/isousluer/laravel-deployment-scripts.git
cd laravel-deployment-scripts
```

### 2. Branch Oluşturun

```bash
# Feature için
git checkout -b feature/amazing-feature

# Bug fix için
git checkout -b fix/bug-description

# Dokümantasyon için
git checkout -b docs/improvement
```

### 3. Değişikliklerinizi Yapın

```bash
# Dosyaları düzenleyin
nano scripts/install.php

# Test edin
# (Laravel test ortamında çalıştırın)
```

### 4. Commit Yapın

```bash
git add .
git commit -m "feat: add amazing feature"
```

### 5. Push Edin

```bash
git push origin feature/amazing-feature
```

### 6. Pull Request Açın

GitHub'da "Compare & pull request" butonuna tıklayın.

## 📏 Kod Standartları

### PHP Kod Stili

```php
<?php
/**
 * Dosya açıklaması
 * Kısa ve net olmalı
 */

// İyi havalandırılmış kod
echo "🚀 <span class='step'>ADIM BAŞLIYOR...</span>\n";
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";

// Açıklayıcı değişken isimleri
$kernel->call('cache:clear');
echo "   ✅ Cache başarıyla temizlendi\n\n";

// Try-catch ile hata yönetimi
try {
    $kernel->call('event:clear');
    echo "   ✅ Event cache temizlendi\n\n";
} catch (Exception $e) {
    echo "   ⚠️  Event cache komutu bulunamadı\n\n";
}
```

### HTML/CSS Stili

```css
/* Tutarlı renk paleti */
.success { color: #4CAF50; font-weight: bold; }
.warning { color: #ff9800; font-weight: bold; }
.error { color: #f44336; font-weight: bold; }
.step { color: #2196F3; font-weight: bold; }
```

### Dokümantasyon Stili

```markdown
## 📝 Başlık

Açıklama metni net ve anlaşılır olmalı.

### Kod Örnekleri

# Her komut için açıklama
php artisan cache:clear


✅ **İyi Pratikler:**
- Emoji kullanın
- Listeler yapın
- Örnekler verin


## 📝 Commit Mesajları

[Conventional Commits](https://www.conventionalcommits.org/) standardını kullanıyoruz.

### Format

<type>(<scope>): <subject>

<body>

<footer>
```


### Tipler

- `feat:` Yeni özellik
- `fix:` Bug düzeltmesi
- `docs:` Dokümantasyon
- `style:` Formatlama
- `refactor:` Kod yeniden yapılandırma
- `perf:` Performans iyileştirmesi
- `test:` Test ekleme/düzeltme
- `chore:` Bakım işleri

### Örnekler

```bash
# İyi örnekler
feat(install): add storage link creation
fix(cache): resolve permission denied error
docs(readme): update installation steps
style(scripts): improve HTML output formatting

# Kötü örnekler
❌ "fixed stuff"
❌ "update"
❌ "asdasd"
```

### Detaylı Örnek

```
feat(refresh): add event cache support

- Add event:clear command
- Add event:cache command  
- Handle Laravel 7 compatibility
- Update documentation

Closes #123
```

## 🎯 Pull Request Süreci

### PR Checklist

PR açmadan önce kontrol edin:

- [ ] Kod PHP 8.0+ ile uyumlu
- [ ] Laravel 9.0+ ile uyumlu
- [ ] HTML çıktısı düzgün formatlanmış
- [ ] Hata yönetimi mevcut
- [ ] Dokümantasyon güncellenmiş
- [ ] Commit mesajları standartlara uygun
- [ ] Conflict yok

### PR Şablonu

```markdown
## 📝 Değişiklik Özeti

Kısa açıklama

## 🎯 Değişiklik Tipi

- [ ] Bug fix
- [ ] New feature
- [ ] Breaking change
- [ ] Documentation update

## 🧪 Test Edildi mi?

- [ ] PHP 8.0
- [ ] PHP 8.1
- [ ] PHP 8.2
- [ ] Laravel 9
- [ ] Laravel 10
- [ ] Laravel 11

## 📸 Ekran Görüntüleri

(Varsa ekleyin)

## 📋 İlgili Issue

Fixes #123

## ✅ Checklist

- [ ] Kod standartlarına uygun
- [ ] Dokümantasyon güncellendi
- [ ] Test edildi
```

### Review Süreci

1. ✅ Automated checks geçmeli
2. 👀 En az 1 maintainer review almalı
3. 💬 Feedback'lere cevap verilmeli
4. ✅ Tüm conversation'lar resolved olmalı
5. 🎉 Merge!

## 🐛 Issue Raporlama

### Bug Report Şablonu

```markdown
## 🐛 Bug Açıklaması

Açık ve net bug açıklaması

## 📋 Adımlar

1. 'X'e git
2. 'Y'ye tıkla
3. Aşağı kaydır
4. Hatayı gör

## ✅ Beklenen Davranış

Ne olmasını bekliyordunuz

## ❌ Gerçekleşen Davranış

Ne oldu

## 📸 Ekran Görüntüleri

(Varsa ekleyin)

## 🖥️ Ortam

- OS: [örn. Ubuntu 22.04]
- PHP Version: [örn. 8.2]
- Laravel Version: [örn. 10.0]
- Web Server: [örn. Nginx 1.22]

## 📝 Ek Bilgiler

Başka bir şey eklemek ister misiniz?
```

### Feature Request Şablonu

```markdown
## 💡 Özellik Açıklaması

Net ve özlü açıklama

## 🎯 Problem

Hangi problemi çözüyor?

## 💭 Önerilen Çözüm

Nasıl çözülmeli?

## 🔄 Alternatifler

Başka çözümler düşündünüz mü?

## 📝 Ek Bilgiler

Başka eklemek istediğiniz bir şey?
```

## 🏷️ Branch Adlandırma

```bash
# Feature
feature/user-authentication
feature/cache-optimization

# Bug Fix
fix/permission-denied
fix/migration-error

# Docs
docs/installation-guide
docs/api-reference

# Hotfix (production bug)
hotfix/critical-security-issue
```

## 🎨 Emoji Kullanımı

README ve commit mesajlarında emoji kullanıyoruz:

- 🚀 Deploy/Release
- ✨ Yeni özellik
- 🐛 Bug fix
- 📝 Dokümantasyon
- 🎨 Stil/Formatlama
- ⚡ Performans
- 🔒 Güvenlik
- ✅ Test
- 🔧 Konfigürasyon
- 🗑️ Silme

## 💬 İletişim

- 💬 [GitHub Discussions](https://github.com/isousluer/laravel-deployment-scripts/discussions)
- 🐦 [Twitter](https://twitter.com/isousluer)
- 📧 [Email](mailto:ismail@usluer.net)

## 🙏 Teşekkürler

Zamanınızı ayırıp katkıda bulunduğunuz için teşekkür ederiz! Her katkı, büyük veya küçük, projeyi daha iyi hale getirir.

---

**Sorunuz mu var?** [Discussion açın](https://github.com/isousluer/laravel-deployment-scripts/discussions/new)!