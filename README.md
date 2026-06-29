# HLM AI SEO

Generate AI-readable website exports (`/llms.txt` and `/llms-full.txt`) for LLMs and AI tools.

## Features

- **Automatic Export Generation** - Generates exports dynamically without physical files
- **Rank Math Integration** - Full SEO metadata extraction and filtering
- **URL Filtering** - Intelligent canonicalization and noindex handling
- **Content Sanitization** - HTML to clean Markdown conversion
- **Multi-Language** - WPML and Polylang support
- **Performance Optimized** - Redis/Memcached caching
- **REST API** - Complete programmatic access
- **Admin Dashboard** - Professional UI with statistics
- **Debug Logging** - Comprehensive logging system
- **WooCommerce Support** - Optional product export

## Quick Start

### Installation

1. Download from [WordPress.org](https://wordpress.org/plugins/hlm-ai-seo/)
2. Upload to `/wp-content/plugins/`
3. Activate plugin
4. Access exports:
   - `https://yoursite.com/llms.txt` - Compact export
   - `https://yoursite.com/llms-full.txt` - Full export

### Configuration

Go to **AI SEO → Settings** to configure:
- Content types to include (posts, pages, products)
- Cache duration (default: 1 hour)
- URL patterns to exclude

Default settings work out of the box.

## REST API

### Public Endpoints

```bash
# Get compact export
curl https://yoursite.com/wp-json/hlm-ai-seo/v1/export/llms

# Get full export as JSON
curl "https://yoursite.com/wp-json/hlm-ai-seo/v1/export/llms-full?format=json"
```

### Admin Endpoints

```bash
# Get statistics
curl https://yoursite.com/wp-json/hlm-ai-seo/v1/export/stats -u "username:password"

# Regenerate cache
curl -X POST https://yoursite.com/wp-json/hlm-ai-seo/v1/export/regenerate -u "username:password"
```

See [API Documentation](api-documentation.md) for complete reference.

## Architecture

```
src/
├── Core/              # Plugin orchestration
├── Export/            # Export generation
├── Query/             # Database queries
├── API/               # REST API
├── Admin/             # Admin interface
├── Integrations/      # Third-party integrations
└── Helpers/           # Utility classes
```

## Requirements

- WordPress 6.8+
- PHP 8.1+
- Rank Math SEO (optional but recommended)

## Development

### Setup

```bash
composer install
npm install
make build
```

### Commands

```bash
make install    # Install dependencies
make build      # Build assets
make test       # Run tests
make lint       # Lint code
make format     # Format code
make release    # Create release package
```

## Documentation

- [Quick Start Guide](QUICKSTART.md)
- [API Documentation](api-documentation.md)
- [Integration Guide](readme-integrations.md)
- [Deployment Guide](DEPLOYMENT.md)
- [Contributing Guide](CONTRIBUTING.md)

## License

GPL v2.0 or later. See [LICENSE](LICENSE) file.

## Support

- 📖 [Documentation](https://hlm.dev)
- 🐛 [Report Issues](https://github.com/hlm/ai-seo/issues)
- 💬 [Discussions](https://github.com/hlm/ai-seo/discussions)
