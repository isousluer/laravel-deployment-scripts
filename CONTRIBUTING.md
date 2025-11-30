# 🤝 Contributing Guide

Thank you for considering contributing to Laravel Deployment Scripts! 

## 📋 Table of Contents

- [Code of Conduct](#-code-of-conduct)
- [How Can I Contribute?](#-how-can-i-contribute)
- [Development Process](#-development-process)
- [Code Standards](#-code-standards)
- [Commit Messages](#-commit-messages)
- [Pull Request Process](#-pull-request-process)
- [Issue Reporting](#-issue-reporting)

## 📜 Code of Conduct

This project and community are committed to providing an open and welcoming environment for everyone.

### Our Expectations

✅ **Positive Behaviors:**
- Use respectful and constructive language
- Be open to different opinions
- Accept constructive criticism
- Focus on community benefit
- Show empathy to other contributors

❌ **Unacceptable Behaviors:**
- Harassment or insulting language
- Trolling or provocative comments
- Personal or political attacks
- Sharing others' private information

## 💡 How Can I Contribute?

There are many ways to contribute:

### 1. 🐛 Bug Reports
Found a bug? [Open an issue](https://github.com/isousluer/laravel-deployment-scripts/issues/new?template=bug_report.md)!

### 2. 💡 Feature Suggestions
Have a new idea? [Open a Feature Request](https://github.com/isousluer/laravel-deployment-scripts/issues/new?template=feature_request.md)!

### 3. 📝 Documentation
Improve documentation:
- Fix typos
- Add examples
- Clarify explanations
- Add translations

### 4. 💻 Code Contributions
- Solve existing issues
- Add new features
- Make performance improvements
- Increase test coverage

### 5. ⭐ Support the Project
- Star on GitHub
- Share on social media
- Write blog posts
- Recommend to others

## 🔨 Development Process

### 1. Fork the Repository

```bash
# Click Fork button on GitHub
# Then clone
git clone https://github.com/isousluer/laravel-deployment-scripts.git
cd laravel-deployment-scripts
```

### 2. Create a Branch

```bash
# For features
git checkout -b feature/amazing-feature

# For bug fixes
git checkout -b fix/bug-description

# For documentation
git checkout -b docs/improvement
```

### 3. Make Your Changes

```bash
# Edit files
nano scripts/install.php

# Test
# (Run in Laravel test environment)
```

### 4. Commit

```bash
git add .
git commit -m "feat: add amazing feature"
```

### 5. Push

```bash
git push origin feature/amazing-feature
```

### 6. Open Pull Request

Click "Compare & pull request" button on GitHub.

## 📏 Code Standards

### PHP Code Style

```php
<?php
/**
 * File description
 * Should be short and clear
 */

// Well-spaced code
echo "🚀 <span class='step'>STEP STARTING...</span>\n";
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n\n";

// Descriptive variable names
$kernel->call('cache:clear');
echo "   ✅ Cache cleared successfully\n\n";

// Error handling with try-catch
try {
    $kernel->call('event:clear');
    echo "   ✅ Event cache cleared\n\n";
} catch (Exception $e) {
    echo "   ⚠️  Event cache command not found\n\n";
}
```

### HTML/CSS Style

```css
/* Consistent color palette */
.success { color: #4CAF50; font-weight: bold; }
.warning { color: #ff9800; font-weight: bold; }
.error { color: #f44336; font-weight: bold; }
.step { color: #2196F3; font-weight: bold; }
```

### Documentation Style

````markdown
## 📝 Heading

Description text should be clear and understandable.

### Code Examples

```bash
# Description for each command
php artisan cache:clear
```

✅ **Good Practices:**
- Use emojis
- Make lists
- Provide examples

## 📝 Commit Messages

We use [Conventional Commits](https://www.conventionalcommits.org/) standard.

### Format

````
<type>(<scope>): <subject>

<body>

<footer>
`````
``````

### Types

- `feat:` New feature
- `fix:` Bug fix
- `docs:` Documentation
- `style:` Formatting
- `refactor:` Code restructuring
- `perf:` Performance improvement
- `test:` Adding/fixing tests
- `chore:` Maintenance tasks

### Examples

```bash
# Good examples
feat(install): add storage link creation
fix(cache): resolve permission denied error
docs(readme): update installation steps
style(scripts): improve HTML output formatting

# Bad examples
❌ "fixed stuff"
❌ "update"
❌ "asdasd"
```

### Detailed Example

```
feat(refresh): add event cache support

- Add event:clear command
- Add event:cache command  
- Handle Laravel 7 compatibility
- Update documentation

Closes #123
```

## 🎯 Pull Request Process

### PR Checklist

Check before opening PR:

- [ ] Code compatible with PHP 8.0+
- [ ] Compatible with Laravel 9.0+
- [ ] HTML output properly formatted
- [ ] Error handling present
- [ ] Documentation updated
- [ ] Commit messages follow standards
- [ ] No conflicts

### PR Template

```markdown
## 📝 Change Summary

Brief description

## 🎯 Change Type

- [ ] Bug fix
- [ ] New feature
- [ ] Breaking change
- [ ] Documentation update

## 🧪 Tested?

- [ ] PHP 8.0
- [ ] PHP 8.1
- [ ] PHP 8.2
- [ ] Laravel 9
- [ ] Laravel 10
- [ ] Laravel 11

## 📸 Screenshots

(Add if available)

## 📋 Related Issue

Fixes #123

## ✅ Checklist

- [ ] Follows code standards
- [ ] Documentation updated
- [ ] Tested
```

### Review Process

1. ✅ Automated checks must pass
2. 👀 At least 1 maintainer review required
3. 💬 Respond to feedback
4. ✅ All conversations must be resolved
5. 🎉 Merge!

## 🐛 Issue Reporting

### Bug Report Template

```markdown
## 🐛 Bug Description

Clear and concise bug description

## 📋 Steps to Reproduce

1. Go to 'X'
2. Click on 'Y'
3. Scroll down
4. See error

## ✅ Expected Behavior

What did you expect to happen

## ❌ Actual Behavior

What happened

## 📸 Screenshots

(Add if available)

## 🖥️ Environment

- OS: [e.g. Ubuntu 22.04]
- PHP Version: [e.g. 8.2]
- Laravel Version: [e.g. 10.0]
- Web Server: [e.g. Nginx 1.22]

## 📝 Additional Information

Anything else you want to add?
```

### Feature Request Template

```markdown
## 💡 Feature Description

Clear and concise description

## 🎯 Problem

What problem does it solve?

## 💭 Proposed Solution

How should it be solved?

## 🔄 Alternatives

Have you considered other solutions?

## 📝 Additional Information

Anything else you want to add?
```

## 🏷️ Branch Naming

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

## 🎨 Emoji Usage

We use emojis in README and commit messages:

- 🚀 Deploy/Release
- ✨ New feature
- 🐛 Bug fix
- 📝 Documentation
- 🎨 Style/Formatting
- ⚡ Performance
- 🔒 Security
- ✅ Test
- 🔧 Configuration
- 🗑️ Removal

## 💬 Contact

- 💬 [GitHub Discussions](https://github.com/isousluer/laravel-deployment-scripts/discussions)
- 🐦 [Twitter](https://twitter.com/isousluer)
- 📧 [Email](mailto:ismail@usluer.net)

## 🙏 Thanks

Thank you for taking the time to contribute! Every contribution, big or small, makes this project better.

---

**Have questions?** [Open a discussion](https://github.com/isousluer/laravel-deployment-scripts/discussions/new)!