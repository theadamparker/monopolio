# Monopolio

Note: This is an active project, and the readme file is still a work in progress.

## Development

This site uses [Grunt](https://gruntjs.com) as a Javascript task runner for writing Sass, concatenating, and minifying. After cloning the repo, make sure to `npm install --save-dev` to install dependencies. Then run `grunt` to output CSS and JS to the linked, minified files.

## Photo Styles
The site uses a few primary photo layouts that can be managed differently.
- *Featured photo*: This spans half of the page, and sits beside a section headline and intro.
- *Gallery photo*: This is one-third of a page, and sits below a featured photo.

These are referenced in preset `srcset` definitions, and can be used like this:
```
$image->srcset('featuredPhoto');
$image->srcset('galleryPhoto');
```

## CMS

The Monopolio site runs on Kirby, a file-based CMS. Learn more at [getkirby.com](https://getkirby.com). Kirby does not require a database, which makes it very easy to install. Just clone this repo to your server and visit the URL for your website in the browser.

### Requirements

Kirby runs on PHP 7.1+, Apache or Nginx.

## Issues

If you have a Github account, please report issues
directly on Github: <https://github.com/theadamparker/monopolio/issues>

Otherwise you can send an email: <adam@theadamparker.com>

## Copyright

© 2019 Adam Parker
