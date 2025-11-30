# Security Policy

## 🔒 Güvenlik Politikası

Laravel Deployment Scripts projesinin güvenliğini ciddiye alıyoruz.

## 📝 Desteklenen Versiyonlar

| Versiyon | Destekleniyor |
| -------- | ------------- |
| 1.0.x    | ✅            |
| < 1.0    | ❌            |

## 🐛 Güvenlik Açığı Bildirimi

Güvenlik açığı bulduysanız, lütfen **public issue açmayın**.

### Bildirme Adımları

1. **Email gönderin**: ismail@usluer.net
2. **Detay verin**: 
   - Açığın açıklaması
   - Etkilenen versiyon
   - Yeniden üretme adımları
   - Olası etki
3. **Yanıt bekleyin**: 48 saat içinde cevap vereceğiz

### Bildirimde Bulunulacaklar
```markdown
- Güvenlik açığının türü
- Etkilenen dosya/kod satırları
- Yeniden üretme adımları
- Potansiyel etki değerlendirmesi
- Önerilen çözüm (varsa)
```

## 🛡️ Güvenlik En İyi Uygulamaları

### Scriptleri Kullanırken

1. ✅ **Kullanım sonrası silin**
```bash
   rm public/install.php
   rm public/update.php
```

2. ✅ **Install.lock kontrol edin**
   - Script tek seferlik çalışır
   - Kilidi manuel silmeyin

3. ✅ **.gitignore'a ekleyin**
```gitignore
   public/*.php
   public/install.lock
```

4. ✅ **Dosya izinlerini kontrol edin**
```bash
   chmod 644 public/*.php
```

5. ✅ **HTTPS kullanın**
   - HTTP üzerinden çalıştırmayın
   - SSL sertifikası kullanın

6. ✅ **Production'da dikkatli olun**
   - Maintenance mode açın
   - Backup alın
   - Test ortamında deneyin

### .env Güvenliği
```env
# Hassas bilgileri koruyun
APP_KEY=base64:...
DB_PASSWORD=...

# Production'da debug kapalı
APP_DEBUG=false
APP_ENV=production
```

## 🚨 Bilinen Güvenlik Konuları

### Script Erişimi
- ⚠️ Scriptler public dizinde çalışır
- ✅ Kullanım sonrası mutlaka silin
- ✅ Web sunucu konfigürasyonu yapın

### Örnek Nginx Konfigürasyonu
```nginx
# Deployment scriptlerini engelle
location ~* \.(php)$ {
    if ($request_filename ~* (install|update|clear-cache|refresh-cache)\.php$) {
        return 403;
    }
}
```

### Örnek Apache .htaccess
```apache
# Deployment scriptlerini engelle
<FilesMatch "(install|update|clear-cache|refresh-cache)\.php$">
    Require all denied
</FilesMatch>
```

## 📞 İletişim

- 📧 Email: ismail@usluer.net
- 💬 Private disclosure: [GitHub Security Advisory](https://github.com/isousluer/laravel-deployment-scripts/security/advisories/new)

## 🙏 Hall of Fame

Güvenlik açıklarını sorumlu bir şekilde bildiren araştırmacılar:

- (Henüz yok - ilk siz olun!)

## 📚 Kaynaklar

- [OWASP Top 10](https://owasp.org/www-project-top-ten/)
- [Laravel Security](https://laravel.com/docs/security)
- [PHP Security Guide](https://www.php.net/manual/en/security.php)

---

**Güvenlik önceliğimizdir!** Sorumlu açıklama için teşekkürler.