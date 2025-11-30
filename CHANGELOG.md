# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Planned
- Multi-language support (TR, EN, ES, FR)
- CLI version (command line usage)
- Docker support
- Automated testing suite
- GitHub Actions integration

## [1.0.0] - 2024-01-15

### 🎉 First Stable Release

This version is production-ready!

### ✨ Added

#### Scripts
- `install.php` - Initial installation script
  - Application key generation
  - Storage link creation
  - Database migration
  - Cache optimization
  
- `update.php` - Update script
  - Old cache cleaning
  - Migration execution
  - New cache creation
  
- `clear-cache.php` - Cache clearing script
  - Application cache clearing
  - Config cache clearing
  - Route cache clearing
  - View cache clearing
  - Compiled classes clearing
  - Event cache clearing
  
- `refresh-cache.php` - Cache refresh script
  - 2-step process (clear + create)
  - Production optimization
  - Event cache support

#### Documentation
- Main README.md
- Detailed script documentation (4 files)
- CONTRIBUTING.md
- CHANGELOG.md
- LICENSE (MIT)
- SECURITY.md
- CODE_OF_CONDUCT.md

#### Features
- 🎨 Professional HTML output
- 🔒 Security lock (install.lock)
- 🐛 Detailed error reporting
- ✅ Laravel 9+ compatibility
- ⚡ PHP 8.0+ compatibility

### 🔒 Security
- Single-run mechanism (install.lock)
- No sensitive data storage
- Secure error handling
- Permission checks

## [0.3.0] - 2024-01-10

### ✨ Added
- `refresh-cache.php` added
- Event cache support
- 2-step cache refresh process
- Performance comparison documentation

### 📝 Changed
- README.md updated
- Documentation improved
- Emoji usage standardized

### 🐛 Fixed
- Laravel 7 event cache compatibility issue resolved
- Permission error handling improved

## [0.2.0] - 2024-01-05

### ✨ Added
- `clear-cache.php` added
- `update.php` added
- Detailed documentation
- Error handling improved

### 📝 Changed
- HTML output improved
- CSS color palette updated
- Messages made clearer

### 🐛 Fixed
- Storage permission errors fixed
- Laravel 8 compatibility issues resolved

## [0.1.0] - 2024-01-01

### 🎉 Initial Release

### ✨ Added
- `install.php` - Initial installation script
- Basic HTML output
- Artisan command integration
- MIT License

### Features
- Application key generation
- Storage link creation
- Migration support
- Basic cache creation

---

## Version Notation

- **MAJOR** (1.x.x): Breaking changes
- **MINOR** (x.1.x): New features (backward compatible)
- **PATCH** (x.x.1): Bug fixes (backward compatible)

## Change Types

- `Added` - New features
- `Changed` - Changes in existing functionality
- `Deprecated` - Soon-to-be removed features
- `Removed` - Removed features
- `Fixed` - Bug fixes
- `Security` - Security updates

## Links

[Unreleased]: https://github.com/isousluer/laravel-deployment-scripts/compare/v1.0.0...HEAD
[1.0.0]: https://github.com/isousluer/laravel-deployment-scripts/compare/v0.3.0...v1.0.0
[0.3.0]: https://github.com/isousluer/laravel-deployment-scripts/compare/v0.2.0...v0.3.0
[0.2.0]: https://github.com/isousluer/laravel-deployment-scripts/compare/v0.1.0...v0.2.0
[0.1.0]: https://github.com/isousluer/laravel-deployment-scripts/releases/tag/v0.1.0