# Contao legacy templates (HTML5)

Restores the HTML elements in Contao 5

## Purpose of this Plugin

This plugin only serves the purpose to make sure that individuals that migrated from Contao 4.13 to 5.x have time to
adjust their templates to Twig.

> **HTML5 support will be removed in Contao 6**

If you encounter issues with Twig-Templates such as errors, uninstall this plugin as you won't need it anymore :)

### I want to learn about Twig

Please follow the official Contao and Twig documentation if you want to learn more about Twig.

* [Contao-Documentation](https://docs.contao.org/manual/en/layout/templates/twig/)
* [Twig-Documentation](https://twig.symfony.com/doc/)

### Templates that are restored

Besides the `html`-Template (it only embeds your html), the following Content-Elements are restored to their legacy HTML
version.

#### Content Elements

* Code
* Headline
* List
* Text
* Table
* Hyperlink
* Top link
* Image
* Gallery
* Player
* Youtube
* Vimeo
* Download
* Downloads
* Teaser

See [Contao 5 Upgrade.md](https://github.com/contao/contao/blob/5.3/UPGRADE.md#content-elements) for more information.
