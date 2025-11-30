# 🧹 Laravel Cache Clearing Script

Clear all cache types in Laravel with one click!

## 🚀 Features

- ✅ **Application Cache** clearing
- ✅ **Config Cache** clearing
- ✅ **Route Cache** clearing
- ✅ **View Cache** clearing
- ✅ **Compiled Classes** clearing
- ✅ **Event Cache** clearing (Laravel 8+)
- ✅ **Professional HTML Output**
- ✅ **Detailed Error Reporting**

## 📝 Usage

### Step 1: Upload the File
```bash
# Upload file to public/ directory
public/clear-cache.php
```

### Step 2: Run from Browser
```
https://domain.com/clear-cache.php
```

### Step 3: Delete the File
```bash
rm public/clear-cache.php
```

## ⚙️ Cleared Caches

The script runs these Artisan commands:

```bash
php artisan cache:clear        # 1. Application cache
php artisan config:clear       # 2. Config cache
php artisan route:clear        # 3. Route cache
php artisan view:clear         # 4. View cache
php artisan clear-compiled     # 5. Compiled classes
php artisan event:clear        # 6. Event cache (Laravel 8+)
```

## 🎯 When to Use?

✅ **Should be used:**
- When issues occur in development environment
- After changing config files
- After updating routes
- When view changes aren't showing
- When getting "Class not found" errors
- After changing .env file
- After adding middleware
- When Service Provider changes

❌ **Should not be used:**
- In production environment (use `refresh-cache.php` instead)
- When you want to recreate cache (use `refresh-cache.php` instead)

## 🔍 What Does Each Cache Do?

### 1. Application Cache
```php
// Data stored with Cache facade
Cache::put('key', 'value', 3600);
Cache::remember('users', 3600, function () {
    return DB::table('users')->get();
});

// Storage location
// storage/framework/cache/data/
```

**When to clear:**
- When general cache cleanup needed
- When cache driver changes
- When clearing test data

### 2. Config Cache
```php
// Files in config/ folder
config('app.name')
config('database.default')
env('APP_KEY')  // ⚠️ Won't work with cache!

// Storage location
// bootstrap/cache/config.php
```

**When to clear:**
- After changing .env file
- After changing config/ files
- After adding new config file

⚠️ **IMPORTANT:** When config cache is active, `env()` function returns NULL!

### 3. Route Cache
```php
// Files in routes/ folder
Route::get('/', [HomeController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    // ...
});

// Storage location
// bootstrap/cache/routes-v7.php
```

**When to clear:**
- After adding new routes
- After changing route middleware
- After updating route groups
- When getting 404 error (route defined but not working)

⚠️ **WARNING:** Closure routes cannot be cached!

### 4. View Cache
```php
// Blade files in resources/views/
@extends('layouts.app')
@include('partials.header')
@component('components.alert')

// Storage location
// storage/framework/views/
```

**When to clear:**
- Changed Blade files but not showing
- Layout changes not reflecting
- Component updates not applying
- Fixed syntax error but error persists

### 5. Compiled Classes
```php
// Files compiled during bootstrap
// vendor/composer/autoload_*.php
// bootstrap/cache/packages.php
// bootstrap/cache/services.php

// Storage location
// bootstrap/cache/
```

**When to clear:**
- "Class not found" error
- After adding Composer package
- After adding Service Provider
- After defining Facade

### 6. Event Cache
```php
// Events defined in EventServiceProvider
protected $listen = [
    OrderShipped::class => [
        SendShipmentNotification::class,
    ],
];

// Storage location
// bootstrap/cache/events.php
```

**When to clear:**
- After adding new event/listener
- After changing event subscriber
- When event discovery issues occur

## 🐛 Common Issues and Solutions

### Issue 1: "Class not found"
```bash
# Solution
1. Run clear-cache.php
2. composer dump-autoload
3. php artisan optimize:clear
```

### Issue 2: Config changes not reflecting
```bash
# Solution
1. Check .env file
2. Run clear-cache.php
3. Clear browser cache (Ctrl+Shift+R)
```

### Issue 3: Route not found (404)
```bash
# Solution
1. Check route definition
2. Run clear-cache.php
3. Verify with php artisan route:list
```

### Issue 4: Blade changes not showing
```bash
# Solution
1. Run clear-cache.php
2. Clear browser cache
3. Do hard refresh (Ctrl+Shift+R)
```

### Issue 5: "Permission denied" error
```bash
# Fix storage directory permissions
chmod -R 755 storage/framework/cache
chmod -R 755 storage/framework/views
chmod -R 755 bootstrap/cache

# Fix ownership
chown -R www-data:www-data storage bootstrap/cache
```

### Issue 6: "Event cache command not found" warning
```
# This is normal
# Laravel 7 and below don't have this command
# Other caches were cleared successfully
✅ No problem, other caches cleared
```

## 💡 Development Tips

### Completely Disable Cache

#### .env Settings
```env
# Set cache driver to array (stored in RAM, not persistent)
CACHE_DRIVER=array

# Session driver
SESSION_DRIVER=file  # or array (for testing)

# Queue driver
QUEUE_CONNECTION=sync  # for development

# Disable view cache (not recommended)
# VIEW_COMPILED_PATH=false
```

### Don't Use Config Cache
```bash
# NEVER do this in development!
❌ php artisan config:cache

# Config cache is only for production
✅ Use in production
```

### Automatic Cache Clearing
```bash
# Add to package.json
"scripts": {
    "dev": "npm run development && php artisan cache:clear",
    "watch": "npm run watch && php artisan cache:clear"
}
```

### Automatic Clearing with Git Hook
```bash
# .git/hooks/post-merge
#!/bin/bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## 📊 clear-cache.php vs refresh-cache.php

| Feature | clear-cache.php | refresh-cache.php |
|---------|-----------------|-------------------|
| Cache Clearing | ✅ | ✅ |
| Cache Creation | ❌ | ✅ |
| Development | ✅ Recommended | ❌ |
| Production | ❌ | ✅ Recommended |
| Performance After | Normal (slow) | Optimized (fast) |
| Usage Frequency | Often | Rarely |

## 🚀 Performance Note

⚠️ **IMPORTANT:** This script only clears cache, doesn't recreate it!

**In production, this means:**

### Without Cache (after clear-cache.php)
```
❌ Config files read on every request
❌ Routes parsed every time
❌ Views compiled on every request
❌ Events discovered every time

Result: 150-200ms response time
```

### With Cache (after refresh-cache.php)
```
✅ Config instantly ready
✅ Routes pre-compiled
✅ Views optimized
✅ Events cached

Result: 10-20ms response time
```

**Use `refresh-cache.php` for production! 10-20x faster!**

## 🔧 Manual Cache Clearing

### Artisan Commands
```bash
# Clear all caches
php artisan optimize:clear

# Only application cache
php artisan cache:clear

# Only config cache
php artisan config:clear

# Only route cache
php artisan route:clear

# Only view cache
php artisan view:clear

# Only event cache (Laravel 8+)
php artisan event:clear
```

### File System Deletion
```bash
# Application cache
rm -rf storage/framework/cache/data/*

# View cache
rm -rf storage/framework/views/*

# Config cache
rm bootstrap/cache/config.php

# Route cache
rm bootstrap/cache/routes-v7.php

# Event cache
rm bootstrap/cache/events.php

# Compiled services
rm bootstrap/cache/services.php
rm bootstrap/cache/packages.php
```

## 📸 Screenshot

When the script runs, you'll see:

- 🧹 Separate step for each cache type
- ✅ Green checkmarks
- ⚠️ Warning messages (for older Laravel versions)
- 📌 Clearing timestamp

## 🎓 Cache Strategies

### Development Environment
```php
// Use cache
Cache::remember('users', now()->addMinutes(1), function () {
    return User::all();
});

// Or don't cache at all
User::all();
```

### Staging Environment
```php
// Short-lived cache
Cache::remember('users', now()->addMinutes(5), function () {
    return User::all();
});
```

### Production Environment
```php
// Long-lived cache
Cache::remember('users', now()->addHours(24), function () {
    return User::all();
});
```

## 🔗 Related Scripts

| Script | Purpose | Usage |
|--------|---------|-------|
| [install.php](install.md) | Initial installation | New project |
| [update.php](update.md) | Update + Migration | After deploy |
| **clear-cache.php** | Cache clearing | Development |
| [refresh-cache.php](refresh-cache.md) | Cache refresh | Production |

## 📚 More Information

- [Laravel Caching](https://laravel.com/docs/cache)
- [Laravel Configuration](https://laravel.com/docs/configuration)
- [Laravel Optimization](https://laravel.com/docs/deployment#optimization)
- [Blade Templates](https://laravel.com/docs/blade)

## 📄 License

This script is freely available under the MIT license.

## 🤝 Contributing

Feel free to open issues for bug reports and suggestions!

---

**💡 TIP:** If you'll use this frequently in development, consider disabling cache completely!