## MediaWiki Stakeholders Group - Components
# VuePlus for MediaWiki

Provides VueJS components for use in MediaWiki extensions and skins.

**This code is meant to be used within the MediaWiki framework. Do not attempt to use it outside of MediaWiki.**

## Use in a MediaWiki extension

Add `"mwstake/mediawiki-component-vueplus": "~1.0"` to the `require` section of your `composer.json` file.

Explicit initialization is required. This can be archived by
- either adding `"callback": "mwsInitComponents"` to your `extension.json`/`skin.json`
- or calling `mwsInitComponents();` within you extensions/skins custom `callback` method

See also [`mwstake/mediawiki-componentloader`](https://github.com/hallowelt/mwstake-mediawiki-componentloader).

### Available VueJS components and ResourceLoader modules

- MWSTreeEditor
- MWSTileView
- ...
// TBD.