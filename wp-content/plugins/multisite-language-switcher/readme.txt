=== Multisite Language Switcher ===

Contributors: realloc
Donate link: http://www.greenpeace.org/international/
Tags: multilingual, multisite, language, switcher, international, localization, i18n
Requires at least: 3.2
Tested up to: 3.4
Stable tag: 0.9.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A simple, powerful and easy to use plugin that will help you to manage your contents in a multilingual multisite-installation.

== Description ==

A simple, powerful and easy to use plugin that will help you to manage the relations of posts, pages, custom post types, categories, tags and custom taxonomies in your multilingual multisite-installation.

The plugin is using the flag-icons from [FamFamFam](http://famfamfam.com). Thanks to Mark James for his great work.

= Translators =
* German (de_DE) - [Dennis Ploetner](http://www.urlaub-und-reisen.net/)
* Italian (it_IT) - [Antonella Cucinelli](http://www.freely.de/it/)
* Dutch (nl_NL) - [Alexandra Kleijn](http://www.buurtaal.de/)
* Brazillian Portuguese (pt_BR) - [Coolweb](http://www.coolweb.com.br/)
* Spanish (es_ES) - [Andreas Breitschopp](http://www.ab-weblog.com/en/)
* French (fr_FR) - [Andreas Breitschopp](http://www.ab-tools.com/en/)
* Russian (ru_RU) - [Andrey Vystavkin](http://j4vk.com/)
* Ukrainian (uk) - [Victor Melnichenko](http://worm.org.ua/)
* Croatian (hr_HR) - [Brankec69](https://github.com/Brankec69) 
* Romanian (ro_RO) - [Armand K](http://caveatlector.eu/)

If you have created your own language pack, or have an update of an existing one, you can [send me](mailto:re@lloc.de) your gettext PO and MO so that I can bundle it into the Multisite Language Switcher. You can download the latest POT file [from here](http://plugins.svn.wordpress.org/multisite-language-switcher/trunk/languages/default.pot).

== Installation ==

* download the plugin and uncompress it with your preferred unzip programme
* copy the entire directory in your plugin directory of your wordpress blog (/wp-content/plugins)
* activate the plugin in your plugin page
* set some configuration in Options -> Multisite Language Switcher

Now you can

* set the relations of your pages and posts in Posts -> Edit or Page -> Edit
* set the relations of your categories and tags in Posts -> Categories or Post -> Tags
* use a widget and/or a content_filter which displays a hint if a translation is available
* optionally you can use a line like `<?php if ( function_exists( 'the_msls' ) ) the_msls(); ?>` directly in your theme-files

Have a look at the [Multisite Language Switcher Wiki](https://github.com/lloc/Multisite-Language-Switcher/wiki) for more information.

== Changelog ==

= 0.9.6 =
* a lot of bugfixes and enhancements
* some modifications - how the meta box handles hierarchical post types - by [Joost de Keijzer](http://dekeijzer.org/)
* behaviour - how the plugin collects the blogs - changed
* language files for ro_RO added

= 0.9.5 =
* new: Support for author- and date-archives
* language files for hr_HR added
* some modifications of the image path handling by [Tobias Bäthge](http://tobias.baethge.com/)

= 0.9.4 =
* language files for uk added

= 0.9.3 =
* language files for ru_RU added

= 0.9.2 =
* new: _msls_output_get_-filter for customizing the output
* new: link of the current language is marked with `class="current_language"`
* new: index.php in all directories redirects to HTTP_HOST
* bugfix: admin metabox and the link to a _new_ page
* bugfix: "Display link to the current language" was ignored when option "Show only links with a translation" is checked as well
* bugfix: _msls_content_filter_ should work only when display a post_type
* _msls_blog_collection_get_-filter deleted

= 0.9.1 =
* bugfix: broken methods in MslsAdmin

= 0.9 =
* new: support for custom post types
* new: apply_filters( 'msls_blog_collection_construct', $arr ); in MslsBlogCollection::__construct();
* bugfix: msls_blog_collection_get
* language files for fr_FR and es_ES updated

= 0.8 =
* new: now flags in the backend are allways clickable, link to edit the translation or to create a new item
* new: meta-box is now also available when you want to add a new post 
* new: custom url for flag-images
* new: now you can order the output by description; default is country-code
* new: apply_filters( 'msls_blog_collection_get', $arr ); in MslsBlogCollection::get();
* added empty index.php-files to all subdirectories
* source code meets now the [WordPress PHP formatting standards](http://urbangiraffe.com/articles/wordpress-codesniffer-standard/)

= 0.7.1 =
* language files for pt_BR updated

= 0.7 =
* new: you can now choose if you want to show only links with a translation
* new: flags in edit_posts are clickable now, link to edit the translation
* new: function get_the_msls for complete the_msls
* new: option to choose if a link to the current blog should be displayed too
* new: option to exclude a blog from output
* language files for fr_FR added

= 0.6.8 =
* bugfix: str_replace problem with 4th parameter

= 0.6.7 =
* bugfix: get_term_link seems to fail if there is a custom category_base or tag_base defined
* bugfix: get_term_link expects term_id as integer
* bugfix: do not include blogs without configuration
* bugfix: fatal error if there is no configuration

= 0.6.6 =
* language files for es_ES added

= 0.6.5 =
* language files for pt_BR added

= 0.6.4 =
* bugfix: strange behaviour of the sidebar-widget corrected

= 0.6.3 =
* bugfix: there was a problem with restore_current_blog() and more then 2 languages
* bugfix: problem under some circumstancess with the content_filter 

= 0.6.2 =
* bugfix: sometimes no flag was shown because WPLANG could be empty for en_US-Blogs in the network

= 0.6.1 =
* bugfix: notice when MslsLink::$txt was requested for output of the link-title

= 0.6 =
* new: relations between categories and tags in different languages

= 0.5 =
* language files for nl_NL added

= 0.4 =
* widget added
* hint for available translations as filter of the_content added
* bugfix: $this->options->before_output, $this->options->after_output

= 0.3 =
* new display-option added
* optimization/refactoring

= 0.2 =
* bugfix: showstopper in MslsMain::__construct()

= 0.1 =
* first version
