[![Build Status](https://travis-ci.org/vedmaka/mediawiki-extension-Mustache_i18n.svg?branch=master)](https://travis-ci.org/vedmaka/mediawiki-extension-Mustache_i18n)

# Intro

**Mustache_i18n** — extension for [Mediawiki](https://mediawiki.org)  which adds i18n support for its templating engine. 

# Installation

1. Clone this repository into `/your/mediawiki/extensions/Mustache_i18n` folder 
2. Add this like to bottom of your `LocalSettings.php` file: `wfLoadExtension('Mustache_i18n')`
3. Done

# Usage

Extension provides you with two new helpers available directly in Mustache templates:

* `_` (dash) — process plain text message string
* `__` (double dash) — process parsed message string

# Examples

```html
    <div class="text-block">
        Plain text string: {{ _ "my-i18n-message-string" }}
        Parsed string: {{ __ "my-i18n-message-string" }}
    </div>
```

See more at https://www.mediawiki.org/wiki/Extension:Mustache_i18n