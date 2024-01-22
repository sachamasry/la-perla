# La Perla Wordpress theme

A Wordpress theme designed for the [Rancho La Perla](https;//laperla.me/)
website.

## Overview

![Rancho La Perla theme screenshot](screenshot.jpg "Rancho La Perla theme")

The theme is a _child theme_ built upon
[Fitmas](https://wptf.themepul.co/fitmas/), a theme by
[themepul](https://themeforest.net/user/themepul).

## Features

* Built on [Bootstrap](https://getbootstrap.com/) for responsiveness and
  well-defined components
* Built with [All Bootstrap Blocks](https://wordpress.org/plugins/all-bootstrap-blocks/) to maintain
  layout consistency developers are used to with Bootstrap
* All template files are modified to create a consistent and reliable sitewide
  layout, removing many extraneous features
* Full-width masthead images are used everywhere to capture attention
* Full-width breakout elements are in use throughout the site, drawing the
  visitor into vast vistas of Patagonian nature
* Use of subtle CSS animations to draw users into the nature presented

## Setup & Installation

First the parent theme, Fitmas, and then this child theme must be installed in
the `/wp-content/themes/` folder, directly under the Wordpress site's root
directory. Fitmas, the parent theme—as well as a template starter child
theme—are both bundled in the `vendor` directory in this repository.

The [Wordpress Codex](https://codex.wordpress.org/Installing_WordPress) 
publishes detailed documentation on all aspects of Wordpress administration,
including plugin and theme installation.

The Fitmas theme has many dependencies, and a detailed guide for further
development, thus it is advisable to refer to the official [Fitmas documentation](https://intro.themepul.com/fitmas/doc/) for a complete installation and configuration guide.

The most heavily used plugin in the design of the website has been [All Bootstrap Blocks](https://wordpress.org/plugins/all-bootstrap-blocks/), making
it almost as easy to design pages using Wordpress' block editor, as it is when
hand-coding a page according to [Bootstrap documentation](https://getbootstrap.com/docs/5.3/getting-started/introduction/).
It is highly recommended that you install this plugin for layout consistency,
which is difficult to achieve using standard included visual blocks.

## Usage & Details

The site has been built to present information pages, and extensive calls to
action leading to a reservation form. No use of blogging or other functionality
has been used, thus this section has not been customised.

As the site has few pages, breadcrumbs are not in use on the site, and have been
disabled at the site level in theme settings, as well as directly in the PHP
template files. Furthermore, most plugins recommended by the Fitmas
documentation are not in use and have been uninstalled for security.

The main plugin heavily relied on for page building is _All Bootstrap Blocks_,
in favour of built-in, Wordpress provided blocks, particularly _button_, _card_,
_container_, _row_, _column_ and _carousel_ components.. This is for
consistency, responsiveness predictability and to adhere to developers'
familiarity with the Bootstrap framework.

## Credits

With thanks to:

* [themepul](https://themeforest.net/user/themepul), for the parent theme,
  [Fitmas](https://wptf.themepul.co/fitmas/)
* [Huerta Tipográphica](https://huertatipografica.com/en/fonts/bitter-ht) for
  their excellent _Bitter HT_ typeface
* [Mozilla](http://mozilla.github.io/Fira/) for their Fira and Fira Sans
  typeface families
* [Nord](https://www.nordtheme.com/) for their elegant and muted colour palette
* Icons from [Icons8](https://icons8.com/) and [The Noun Project](https://thenounproject.com/)
* Extensive imagery thanks to [Unsplash](https://unsplash.com/),
  [Pexels](https://www.pexels.com/), and [Flickr](https://flickr.com/)
