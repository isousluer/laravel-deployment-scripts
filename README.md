# 🚀 Laravel Deployment Scripts

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-blue.svg)](https://www.php.net/)
[![Laravel](https://img.shields.io/badge/Laravel-9.0%2B-red.svg)](https://laravel.com/)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](CONTRIBUTING.md)
[![GitHub Stars](https://img.shields.io/github/stars/isousluer/laravel-deployment-scripts.svg)](https://github.com/isousluer/laravel-deployment-scripts/stargazers)

Ready-to-use scripts to deploy your Laravel projects fast, secure, and professionally!

## ✨ Features

- 🎯 **One-Click Setup** - Get rid of complex commands
- 🔒 **Security-Focused** - Single-run lock mechanism
- 🎨 **Professional Interface** - Colorful HTML output
- ⚡ **Performance** - 10-20x speed boost
- 🐛 **Error Handling** - Detailed error reporting
- 📦 **Easy Maintenance** - Single file, no dependencies

## 📦 Scripts

| Script | Purpose | Environment | Documentation |
|--------|---------|-------------|---------------|
| **install.php** | Initial setup (key, storage, migration) | New Project | [📖 Details](docs/INSTALL.md) |
| **update.php** | Update + Migration | Production Deploy | [📖 Details](docs/UPDATE.md) |
| **clear-cache.php** | Cache clearing | Development | [📖 Details](docs/CLEAR_CACHE.md) |
| **refresh-cache.php** | Cache refresh | Production | [📖 Details](docs/REFRESH_CACHE.md) |

## 🚀 Quick Start

### 1. Initial Installation

```bash
# 1. Download the script
wget https://raw.githubusercontent.com/isousluer/laravel-deployment-scripts/main/scripts/install.php

# 2. Move to public/ directory
mv install.php public/

# 3. Run from browser
https://yourdomain.com/install.php

# 4. Delete the file
rm public/install.php
```

### 2. Production Update

```bash
# After code update
wget https://raw.githubusercontent.com/isousluer/laravel-deployment-scripts/main/scripts/update.php
mv update.php public/
https://yourdomain.com/update.php
rm public/update.php
```

### 3. Cache Refresh

```bash
# For performance optimization
wget https://raw.githubusercontent.com/isousluer/laravel-deployment-scripts/main/scripts/refresh-cache.php
mv refresh-cache.php public/
https://yourdomain.com/refresh-cache.php
rm public/refresh-cache.php
```

## 📖 Detailed Documentation

- 📘 [Installation Guide](docs/install.md)
- 📗 [Update Guide](docs/update.md)
- 📙 [Cache Clearing Guide](docs/clear-cache.md)
- 📕 [Cache Refresh Guide](docs/refresh-cache.md)

## 🎯 Usage Scenarios

### Scenario 1: New Project Setup
```bash
1. Git clone
2. composer install
3. .env configuration
4. Run install.php  ← This script!
```

### Scenario 2: Production Deploy
```bash
1. git pull
2. composer install --no-dev
3. Run update.php  ← This script!
```

### Scenario 3: Cache Issues
```bash
1. Changed config but not working?
2. Run refresh-cache.php  ← This script!
```

## 🔒 Security

⚠️ **IMPORTANT WARNINGS:**

- ✅ Scripts run only once (install.lock mechanism)
- ✅ Delete after use
- ✅ Add to `.gitignore`
- ❌ Don't leave in production
- ❌ Contains no sensitive data

### Add to .gitignore

```gitignore
# Deployment Scripts
public/install.php
public/update.php
public/clear-cache.php
public/refresh-cache.php
public/install.lock
```

## 📊 Performance Comparison

| Status | Response Time | Cache |
|--------|--------------|-------|
| ❌ No Cache | 150-200ms | None |
| ✅ With Cache | 10-20ms | Active |
| **Difference** | **10-20x Faster** | **refresh-cache.php** |

## 🛠️ Requirements

- PHP 8.0 or higher
- Laravel 9.0 or higher
- Composer dependencies installed
- Active database connection
- Web server (Apache/Nginx)

## 💡 Best Practices

### Development Environment
```bash
# Disable cache
CACHE_DRIVER=array
VIEW_COMPILED_PATH=false

# Clear when needed
clear-cache.php
```

### Production Environment
```bash
# Deploy workflow
1. php artisan down
2. git pull
3. composer install --no-dev --optimize-autoloader
4. update.php or refresh-cache.php
5. php artisan queue:restart
6. php artisan up
```

## 🤝 Contributing

We welcome your contributions! Please read [CONTRIBUTING.md](CONTRIBUTING.md).

### Contribution Process

1. 🍴 Fork it
2. 🌱 Create feature branch (`git checkout -b feature/amazing`)
3. 💾 Commit changes (`git commit -m 'Add amazing feature'`)
4. 📤 Push to branch (`git push origin feature/amazing`)
5. 🎉 Open Pull Request

## 🐛 Report Issues

Found a bug? [Open an issue](https://github.com/isousluer/laravel-deployment-scripts/issues/new)!

### Issue Templates
- 🐛 [Bug Report](https://github.com/isousluer/laravel-deployment-scripts/issues/new?template=bug_report.md)
- 💡 [Feature Request](https://github.com/isousluer/laravel-deployment-scripts/issues/new?template=feature_request.md)

## 📝 Changelog

All notable changes are documented in [CHANGELOG.md](CHANGELOG.md).

## 📄 License

This project is licensed under the [MIT License](LICENSE).

## 🌟 Star History

[![Star History Chart](https://api.star-history.com/svg?repos=isousluer/laravel-deployment-scripts&type=Date)](https://star-history.com/#isousluer/laravel-deployment-scripts&Date)

## 💖 Thanks

Thanks to everyone who starred, forked, and contributed to this project!

## 🔗 Links

- 📚 [Laravel Documentation](https://laravel.com/docs)
- 💬 [Discussions](https://github.com/isousluer/laravel-deployment-scripts/discussions)
- 🐦 [Twitter](https://twitter.com/isousluer)

## 📧 Contact

Have questions? [Send an email](mailto:ismail@usluer.net)

---

<p align="center">
  Made with ❤️ by <a href="https://github.com/isousluer">İsmail Usluer</a>
</p>

<p align="center">
  <a href="#-laravel-deployment-scripts">Back to Top ⬆️</a>
</p>