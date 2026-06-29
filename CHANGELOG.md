# Changelog

All notable changes to HLM AI SEO will be documented in this file.

## [1.0.0] - 2024-01-15

### Added

- Initial release
- Automatic `/llms.txt` and `/llms-full.txt` export generation
- Rank Math SEO integration
  - Metadata extraction (title, description, canonical, robots, schema)
  - Noindex/nofollow handling
  - Focus keyword extraction
- URL filtering and canonicalization
  - Automatic AMP URL exclusion
  - Redirect detection
  - Custom URL pattern exclusion
- Content sanitization
  - HTML to Markdown conversion
  - Script/style/ad removal
  - Sensitive data filtering
- Multi-language support
  - WPML compatibility
  - Polylang compatibility
  - Language-specific exports
- Intelligent caching
  - Redis/Memcached support
  - WordPress transients fallback
  - Configurable TTL
  - Automatic invalidation
- REST API
  - Public export endpoints
  - Admin settings endpoints
  - JSON and text format support
  - Gzip compression
- Admin Dashboard
  - Statistics display
  - Settings management
  - Export preview
  - Debug logs viewer
- Performance monitoring
  - Operation timing
  - Memory usage tracking
  - Performance reports
- Security
  - Complete input sanitization
  - Output escaping
  - Nonce verification
  - Capability checks
- Documentation
  - API documentation
  - Integration guide
  - PHPDoc comments
  - WordPress hook reference

### Technical Details

- PSR-4 autoloading
- Dependency injection
- Object-oriented architecture
- SOLID principles
- WordPress Coding Standards
- PHP 8.1+ compatibility
- WordPress 6.8+ compatibility
