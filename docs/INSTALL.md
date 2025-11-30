# 📦 Laravel Initial Installation Script

Complete your Laravel project's initial setup with one click!

## 🚀 Features

- ✅ **Application Key** generation
- ✅ **Storage Link** setup
- ✅ **Database Migration** execution
- ✅ **Cache Optimization** (config, route, view)
- ✅ **Security Lock** (single-run)
- ✅ **Professional HTML Output**
- ✅ **Detailed Error Reporting**

## 📝 Usage

### Step 1: Upload the File
```bash
# Upload file to public/ directory
public/install.php
```

### Step 2: Run from Browser
```
https://domain.com/install.php
```

### Step 3: Delete the File
```bash
rm public/install.php
```

## ⚙️ Operations Performed

The script runs these Artisan commands in order:

```bash
php artisan key:generate      # 1. Application key
php artisan storage:link      # 2. Storage link
php artisan migrate --force   # 3. Database migrations
php artisan config:cache      # 4. Config cache
php artisan route:cache       # 5. Route cache
php artisan view:cache        # 6. View cache
```

## 🔒 Security

⚠️ **IMPORTANT:** After running once, this script creates an `install.lock` file and won't run again.

### Security Checklist:
- [ ] Script should only be used during installation
- [ ] Must be deleted after installation
- [ ] Should be added to .gitignore in production
- [ ] File permissions should be checked (644)

## 📋 Requirements

- PHP 8.0+
- Laravel 9.0+
- Composer dependencies must be installed
- `.env` file must be configured
- Database connection must be ready

## 🎯 When to Use?

✅ **Should be used:**
- When setting up a new Laravel project
- During first deploy to server
- When running a cloned project for the first time

❌ **Should not be used:**
- For updates (use `update.php` instead)
- Repeatedly during development
- On already installed production systems

## 🐛 Troubleshooting

### "Class not found" error
```bash
# Install Composer dependencies
composer install --no-dev --optimize-autoloader
```

### "Permission denied" error
```bash
# Fix directory permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

### "Database connection error"
```bash
# Check .env file
nano .env

# Verify database credentials
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## 📸 Screenshot

When the script runs, you'll see professional HTML output:

- 🔵 Blue step headings
- ✅ Green success messages
- ⚠️ Orange warnings
- ❌ Red error messages

## 🔗 Related Scripts

| Script | Purpose | Usage |
|--------|---------|-------|
| **install.php** | Initial installation | New project |
| [update.php](link) | Update + Migration | After deploy |
| [clear-cache.php](link) | Cache clearing | Development |
| [refresh-cache.php](link) | Cache refresh | Production |

## 📚 More Information

- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Deployment](https://laravel.com/docs/deployment)
- [Artisan Console](https://laravel.com/docs/artisan)

## 📄 License

This script is freely available under the MIT license.

## 🤝 Contributing

Feel free to open issues for bug reports and suggestions!

---

**⚠️ REMINDER:** Make sure to delete this file after installation is complete!