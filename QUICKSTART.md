# HLM AI SEO - Quick Start Guide

Get started in 5 minutes.

## Installation

### From WordPress Admin

1. Go to **Plugins → Add New**
2. Search for "HLM AI SEO"
3. Click **Install Now**
4. Click **Activate**

### From ZIP File

1. Download `hlm-ai-seo.zip`
2. Go to **Plugins → Add New → Upload Plugin**
3. Choose ZIP file
4. Click **Install Now**
5. Click **Activate**

## Access Your Exports

Exports are immediately available:

- **Compact Export**: `https://yoursite.com/llms.txt`
- **Full Export**: `https://yoursite.com/llms-full.txt`

Visit these URLs in your browser to see generated exports.

## First-Time Setup

### 1. Configure Settings (Optional)

Go to **AI SEO → Settings** to customize:

- Include/exclude content types (posts, pages, products)
- Cache duration (default: 1 hour)
- URL patterns to exclude
- Enable/disable drafts/private posts

Default settings work for most sites.

### 2. View Statistics

Go to **AI SEO → Dashboard** to see:

- Number of indexed pages
- Last generation time
- Cache size
- System information

### 3. Check Admin Pages

- **Dashboard**: Overview and statistics
- **Settings**: Configure plugin options
- **Export**: Preview and regenerate exports
- **Logs**: View debug information (if enabled)

## Use the REST API

### Get Exports via API

```bash
# Get compact export as text
curl https://yoursite.com/wp-json/hlm-ai-seo/v1/export/llms

# Get full export as JSON
curl "https://yoursite.com/wp-json/hlm-ai-seo/v1/export/llms-full?format=json"
```

## Common Tasks

### Exclude a Page from Export

Add to URL exclusion patterns in Settings:

```
/admin/
/members-only/
/private/
```

### Force Regenerate Cache

1. Go to **AI SEO → Export**
2. Click **Regenerate Now**

## What Gets Exported

Each export includes:

- ✅ Post title and content
- ✅ Pages and products
- ✅ Featured images
- ✅ Internal links
- ✅ Related posts
- ✅ Meta description
- ✅ Focus keywords
- ✅ Schema markup

Excluded:

- ❌ Drafts (unless enabled)
- ❌ Private posts (unless enabled)
- ❌ Posts marked "noindex" in Rank Math
- ❌ Admin/plugin pages
- ❌ Comments

## Next Steps

- [Read Full Documentation](https://hlm.dev/docs)
- [Explore REST API](./api-documentation.md)
- [Integrate with AI Tools](./readme-integrations.md)

## Support

- 📖 [Documentation](https://hlm.dev)
- 🐛 [Report Issues](https://github.com/hlm/ai-seo/issues)
- 💬 [Discussions](https://github.com/hlm/ai-seo/discussions)
