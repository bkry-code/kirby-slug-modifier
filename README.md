# Slug Modifier

***Version 0.1***

When adding a new page in the panel the slug is generated (with javascript).

This plugin makes it possible to change matches inside the slug.

**It can be helpful in these cases:**

- When odd characters are translated to unwanted characters.
- For SEO purposes by removing or replacing some words.
- For shorterning long slugs.

## Install

1. Add the folder `slug-modifier` in `site/plugins/`.
1. Add options. See below.

## Options

### Replace items

To replace items, add an array in an option, like this:

```php
c::set('plugin.slug.modifier.replace.items', array(
	'test' => 'haha',
	'lol' => 'laugh'
));
```

### Remove items

To remove item, add an array in an option, like this:

```php
c::set('plugin.slug.modifier.remove.items', array('aaa', 'bbb'));
```

### Set

There are something called sets included in the plugin. They are predefined and follow the plugin.

```php
c::set('plugin.slug.modifier.set', 'sv');
```

#### Available sets

```
sv
```

Right now there are only one available set.

## Known issues

The Kirby Panel does only replace the first match, not the rest.

https://github.com/getkirby/panel/issues/853

## Requirements

Kirby 2.2

## Changelog

### 0.1

- Inital release.

## License

MIT