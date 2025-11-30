# 🔄 Laravel Update Script

Solve cache issues with one click when updating your Laravel project!

## 🚀 Features

- ✅ **Old Cache Clearing** (config, route, view)
- ✅ **Migration Execution** (new database changes)
- ✅ **New Cache Creation** (optimized)
- ✅ **Security Lock** (single-run)
- ✅ **Professional HTML Output**
- ✅ **Detailed Error Reporting**

## 📝 Usage

### Step 1: Update Code
```bash
# Update with Git
git pull origin main

# Or upload files manually
```

### Step 2: Upload Script
```bash
# Upload file to public/ directory
public/update.php
```

### Step 3: Run from Browser
```
https://domain.com/update.php
```

### Step 4: Delete the File
```bash
rm public/update.php
rm public/install.lock  # For next update
```

## ⚙️ Operations Performed

### SECTION 1: Clear Old Cache
```bash
php artisan cache:clear       # 1. Application cache
php artisan view:clear        # 2. View cache
php artisan config:clear      # 3. Config cache
php artisan route:clear       # 4. Route cache
```

### SECTION 2: Run Migrations
```bash
php artisan migrate --force   # 5. Database updates
```

### SECTION 3: Create New Cache
```bash
php artisan config:cache      # 6. Config cache
php artisan route:cache       # 7. Route cache
php artisan view:cache        # 8. View cache
```

## 🔒 Security

⚠️ **IMPORTANT:** This script creates an `install.lock` file to prevent re-execution.

### Security Checklist:
- [ ] Script should only be used during updates
- [ ] Must be deleted after each update
- [ ] Won't run again without deleting `install.lock`
- [ ] File permissions should be checked (644)

## 📋 Requirements

- PHP 8.0+
- Laravel 9.0+
- Composer dependencies must be up to date
- Database connection must be active
- Migration files must be ready

## 🎯 When to Use?

✅ **Should be used:**
- After production deploy
- After adding new migrations
- After changing config files
- After updating routes
- When experiencing cache issues

❌ **Should not be used:**
- For initial installation (use `install.php` instead)
- Only for clearing cache (use `clear-cache.php` instead)
- Continuously during development

## 🐛 Troubleshooting

### "Migration table not found" error
```bash
# Create initial migration table
php artisan migrate:install
```

### "Nothing to migrate" message
```bash
# This is normal, no new migrations exist
# No action needed
```

### "Syntax error in migration" error
```bash
# Check migration files
# Rollback last added migration
php artisan migrate:rollback --step=1
```

### Cache creation error
```bash
# Check storage permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

## 💡 Best Practices

### Deploy Workflow
```bash
# 1. Enable maintenance mode
php artisan down

# 2. Update code
git pull origin main

# 3. Update Composer dependencies
composer install --no-dev --optimize-autoloader

# 4. Run this script
https://domain.com/update.php

# 5. Restart queue workers
php artisan queue:restart

# 6. Disable maintenance mode
php artisan up
```

### Zero-Downtime Deployment
```bash
# 1. Create new release directory
mkdir releases/v2.0

# 2. Load code
git clone ... releases/v2.0

# 3. Composer install
cd releases/v2.0 && composer install

# 4. Update symbolic link
ln -sfn releases/v2.0 current

# 5. Run this script
https://domain.com/update.php

# 6. Delete old version (optional)
rm -rf releases/v1.0
```

## 📊 install.php vs update.php

| Feature | install.php | update.php |
|---------|-------------|------------|
| Key Generate | ✅ | ❌ |
| Storage Link | ✅ | ❌ |
| Cache Clear | ❌ | ✅ |
| Migration | ✅ | ✅ |
| Cache Create | ✅ | ✅ |
| **When** | Initial installation | Updates |

## 📸 Screenshot

When the script runs, you'll see 3-part output:

1. 🧹 **Cache Clearing** - Blue headings
2. 📦 **Migration** - Green checkmarks
3. ⚡ **Cache Creation** - Success messages

## 🔄 Rollback Strategy

### Migration Rollback
```bash
# Rollback last migration
php artisan migrate:rollback

# Rollback specific steps
php artisan migrate:rollback --step=3

# Rollback all migrations
php artisan migrate:reset

# Rollback and re-run
php artisan migrate:refresh
```

### Code Rollback
```bash
# Return to previous version with Git
git checkout v1.0.0

# Update Composer
composer install --no-dev

# Run update.php
https://domain.com/update.php
```

## 🧪 Testing in Staging Environment

### Staging Environment
```bash
# 1. Deploy to staging
ssh staging@server
cd /var/www/staging

# 2. Copy production data
php artisan db:seed --class=ProductionSeeder

# 3. Run update script
curl https://staging.domain.com/update.php

# 4. Test
php artisan test

# 5. If successful, proceed to production
```

## 📚 Migration Best Practices

### Writing Safe Migrations
```php
<?php
// ✅ Good example - Reversible
public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('phone')->nullable();
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('phone');
    });
}

// ❌ Bad example - Data loss risk
public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('old_field'); // Data will be lost!
    });
}
```

### Migration Ordering
```bash
# Create migrations in correct order
2024_01_01_000001_create_users_table.php
2024_01_01_000002_create_posts_table.php
2024_01_01_000003_add_foreign_keys.php  # Last!
```

## ⚡ Performance Tips

### Large Migrations
```php
// Use batching for large datasets
public function up()
{
    User::chunk(1000, function ($users) {
        foreach ($users as $user) {
            $user->update(['status' => 'active']);
        }
    });
}
```

### Adding Indexes
```php
// Add indexes in migrations
Schema::table('posts', function (Blueprint $table) {
    $table->index('user_id');
    $table->index(['user_id', 'published_at']);
});
```

## 🔗 Related Scripts

| Script | Purpose | Usage |
|--------|---------|-------|
| [install.php](install.md) | Initial installation | New project |
| **update.php** | Update + Migration | After deploy |
| [clear-cache.php](clear-cache.md) | Cache clearing | Development |
| [refresh-cache.php](refresh-cache.md) | Cache refresh | Production |

## 📚 More Information

- [Laravel Migrations](https://laravel.com/docs/migrations)
- [Laravel Caching](https://laravel.com/docs/cache)
- [Laravel Deployment](https://laravel.com/docs/deployment)
- [Database Seeding](https://laravel.com/docs/seeding)

## 📄 License

This script is freely available under the MIT license.

## 🤝 Contributing

Feel free to open issues for bug reports and suggestions!

---

**⚠️ REMINDER:** Make sure to delete this file after the update is complete!