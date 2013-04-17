About MDEngine
==============

**MDEngine** is a simple website development platform based on [Markdown](http://daringfireball.net/projects/markdown/) and PHP.

Create your own template (or use the default) and simply add your Markdown files to your web root and they'll be processed into HTML.

Requires PHP and an Apache server (>= 2.2.16) running `mod_dir` in `.htaccess` files.

Installation
============

Simply [download MDEngine][https://github.com/bburwell/MDEngine/archive/master.zip], unzip it and place it in your web root directory. All existing content will act as it did before, and any Markdown files you add will be handled by MDEngine.

Themes
======

MDEngine is highly extensible, but also usable straight out of the box. To that end, MDEngine currently comes with three themes. To change the theme, you must edit the `settings.php` file.

Find the `$mdengine['theme']` and change its value to the name of the theme you want to use. The default is `plain`. Currently available options are:

* `plain`: a simple red and black on white single column layout
* `light`: similar to `plain`; uses [Ethan Schoonover's Solarized][Solarized] colors
* `dark`: also uses Solarized, but with a dark base

[Solarized]: http://ethanschoonover.com/solarized