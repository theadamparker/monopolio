# Monopolio

This is the repository for the draft version of the Monopolio website.

## CMS

The Monopolio site runs on Kirby, a file-based CMS. Learn more at [getkirby.com](https://getkirby.com). Kirby does not require a database, which makes it very easy to install. Just clone this repo to your server and visit the URL for your website in the browser.

### Requirements

Kirby runs on PHP 7.1+, Apache or Nginx.

## Development

This site uses [Grunt](https://gruntjs.com) as a Javascript task runner for writing Sass, concatenating, and minifying. After cloning the repo, make sure to `npm install --save-dev` to install dependencies. Then run `grunt` to output CSS and JS to the linked, minified files.

## Site Structure

The single-page site uses a series of Snippets located in the `site/snippets` directory. Most structural changes to the site happen here.

Much of the front-end structure of the site uses CSS grid, with Modernizr fallback to a Flexbox layout.

### Photos
The site uses a few primary photo layouts that are be managed differently.
- *Featured photo*: This spans half of the page, and sits beside a section headline and intro.
- *Gallery photo*: This is one-third of a page, and sits below a featured photo.

These are referenced in preset `srcset` and `sizes` definitions, and are used like this:
```
<img
src="<?= $image->url()?>"
srcset="<?= $image->srcset() ?>"
sizes="<?= sizes('featuredImage') ?>"
alt="<?= $image->alt()?>"
/>
```

## Panel

The Panel is the client-facing interface for managing content. Its structure is set using Blueprints in the `site/blueprints` directory.


## Issues

If you have a Github account, please report issues
directly on Github: <https://github.com/theadamparker/monopolio/issues>

Otherwise you can send an email: <adam@theadamparker.com>

## Copyright

© 2019 Adam Parker
