Title: Congratulations! You've installed MDEngine

## Congratulations!

You've successfully installed **[MDEngine][]**. Simply add [Markdown][] files to your web root (where you put the `_mdengine` directory) and see your files served.

### Adding Content

If a user requests a file, it will be served as-is if it's physically present on the filesystem. Otherwise, MDEngine will kick in and look for a corresponding Markdown file. For example, if somebody requests `/a-file`, and it doesn't exist, MDEngine will look for `a-file.md`. If it finds it, it'll produce some nicely formatted HTML.

You can specify the content of the `<title>` tag by beginning a Markdown file with `Title: ` followed by a title and a line break. A prefix and suffix as well as a default title can be specified in the settings file.

### Configuration

You can edit some options for MDEngine in the file `settings.php`. Edit the theme files, `views/header.php` and `views/footer.php` to change the layout.

In case of a 404 error, the file at `views/404.md` will be displayed, so edit it if you'd like.

To see what some Markdown can produce from this CSS file, check out [this page](_mdengine/views/theme-test).

### Themes

MDEngine comes with three themes built in. Switch the theme of this page to preview the differences (requires JavaScript).

* <a href="#" onclick="loadTheme('plain');return false;">Plain</a> (default)
* <a href="#" onclick="loadTheme('light');return false;">Light</a>
* <a href="#" onclick="loadTheme('dark');return false;">Dark</a>

This is for previewing purposes only; for changes to take effect, you must edit `settings.php`.

### About

MDEngine was created and is maintained by [Ben Burwell][]. You can [fork MDEngine on GitHub][GH].

MDEngine relies on [PHP Markdown][] and [PHP SmartyPants][], both by [Michel Fortin][]. Both projects are PHP ports of original Perl code by [John Gruber][].

[MDEngine]: http://www.benburwell.com/miscellanea/mdengine
[Markdown]: http://daringfireball.net/projects/markdown/
[Ben Burwell]: http://www.benburwell.com/
[GH]: http://github.com/bburwell/MDEngine
[PHP Markdown]: http://michelf.ca/projects/php-markdown/
[PHP SmartyPants]: http://michelf.ca/projects/php-smartypants/
[Michel Fortin]: http://michelf.ca/
[John Gruber]: http://daringfireball.net/