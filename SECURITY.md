# Security Policy

## 🔒 Security Policy

We take the security of Laravel Deployment Scripts project seriously.

## 📝 Supported Versions

| Version | Supported |
| ------- | --------- |
| 1.0.x   | ✅        |
| < 1.0   | ❌        |

## 🐛 Reporting Security Vulnerabilities

If you discover a security vulnerability, please **do not open a public issue**.

### Reporting Steps

1. **Send an email**: ismail@usluer.net
2. **Provide details**: 
   - Description of the vulnerability
   - Affected version
   - Steps to reproduce
   - Potential impact
3. **Wait for response**: We will respond within 48 hours

### What to Include in Report
```markdown
- Type of security vulnerability
- Affected file/code lines
- Steps to reproduce
- Potential impact assessment
- Suggested fix (if any)
```

## 🛡️ Security Best Practices

### When Using Scripts

1. ✅ **Delete after use**
```bash
   rm public/install.php
   rm public/update.php
```

2. ✅ **Check install.lock**
   - Script runs only once
   - Don't manually delete the lock

3. ✅ **Add to .gitignore**
```gitignore
   public/*.php
   public/install.lock
```

4. ✅ **Check file permissions**
```bash
   chmod 644 public/*.php
```

5. ✅ **Use HTTPS**
   - Don't run over HTTP
   - Use SSL certificate

6. ✅ **Be careful in production**
   - Enable maintenance mode
   - Take backups
   - Test in staging environment

### .env Security
```env
# Protect sensitive information
APP_KEY=base64:...
DB_PASSWORD=...

# Debug off in production
APP_DEBUG=false
APP_ENV=production
```

## 🚨 Known Security Considerations

### Script Access
- ⚠️ Scripts run in public directory
- ✅ Always delete after use
- ✅ Configure web server

### Example Nginx Configuration
```nginx
# Block deployment scripts
location ~* \.(php)$ {
    if ($request_filename ~* (install|update|clear-cache|refresh-cache)\.php$) {
        return 403;
    }
}
```

### Example Apache .htaccess
```apache
# Block deployment scripts
<FilesMatch "(install|update|clear-cache|refresh-cache)\.php$">
    Require all denied
</FilesMatch>
```

## 📞 Contact

- 📧 Email: ismail@usluer.net
- 💬 Private disclosure: [GitHub Security Advisory](https://github.com/isousluer/laravel-deployment-scripts/security/advisories/new)

## 🙏 Hall of Fame

Security researchers who responsibly disclosed vulnerabilities:

- (None yet - be the first!)

## 📚 Resources

- [OWASP Top 10](https://owasp.org/www-project-top-ten/)
- [Laravel Security](https://laravel.com/docs/security)
- [PHP Security Guide](https://www.php.net/manual/en/security.php)

---

**Security is our priority!** Thanks for responsible disclosure.