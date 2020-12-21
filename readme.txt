=== TK SmugMug Slideshow Shortcode ===
Contributors: cliffpaulick, freemius
Tags: adopt-me, SmugMug, slideshow, responsive, carousel
Requires at least: 4.0
Tested up to: 5.1
Requires PHP: 5.6
Stable tag: 1.7
License: GPL version 3 or any later version
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Adds [smugmug_slideshow] shortcode. Easily embed a SmugMug Slideshow iframe (not Flash).

== Description ==

+-+-+-+

**No longer maintained.**

**Information is likely outdated and plugin may not work.**

+-+-+-+

Making it easy to embed a SmugMug slideshow (iframe, not Flash)

Integrates with Shortcake (Shortcode UI) so building shortcodes (even ones with complex options) is super easy!

= Highlights =

* Easily embed a responsive HTTPS SmugMug Slideshow iframe (not Flash so it works on all devices, including mobile)
* Customize each slideshow's settings, including Width, Auto Start, Captions, etc.
* Slideshow is responsive by default (set to 100% Width) but can be modified to be fixed width.
* Shortcode appears in Classic Editor's Visual Editor for live preview, avoiding the need to preview every change by visiting the front-end.
* Internationalized / translatable.
* Lightweight code base using WordPress best practices.
* Valid HTML5 output.
* No WP_DEBUG messages.
* Actions and Filters available for developers and advanced customizations.
* Responsive plugin developer.

= Complementary Items =

These items may come in handy for using TK SmugMug Slideshow Shortcode:
(may contain affiliate links)

* My [Copy SmugMug Album Key Chrome extension](https://github.com/cliffordp/chrome-ext-copy-smugmug-album-key/) helps me easily find the AlbumKey required to use this shortcode; it might come in handy for you too.
* Unless you're embedding another user's SmugMug galleries, you'll need to [get your own SmugMug account](https://secure.smugmug.com/signup?Coupon=vGSrlGb7FH6Cs). Sign up via my link to support me. Plus, you'll get 20% off your subscription!
* [Shortcake (Shortcode UI)](https://wordpress.org/plugins/shortcode-ui/) - You'll be prompted to install this one when you install TK SmugMug Slideshow Shortcode; that's how great it is!

= Acknowledgements =

Special thanks to the Shortcake (Shortcode UI) and [TGM Plugin Activation](http://tgmpluginactivation.com/) developers/contributors.

FYI: This is a third-party plugin, not officially from the SmugMug company.

= Support Me =

* [Leave a great review](https://wordpress.org/support/view/plugin-reviews/tk-smugmug-slideshow-shortcode?rate=5#postform)
* [View my other plugins](https://profiles.wordpress.org/cliffpaulick/#content-plugins)
* [Hire Me for Customizations](https://tourkick.com/)
* [Contribute code via GitHub](https://github.com/cliffordp/tk-smugmug-slideshow-shortcode)
* **[Tweet this plugin](https://twitter.com/home?status=I%20love%20the%20free%20TK%20%40SmugMug%20Slideshow%20Shortcode%20plugin%20at%20https%3A//wordpress.org/plugins/tk-smugmug-slideshow-shortcode/%20-%20Thanks%20%40TourKick!)**

== Installation ==

After automatically installing to wp-content/plugins/:

1. Install the Shortcake (Shortcode UI) plugin (you'll be prompted to do so if it's not already installed and activated). It's optional but highly recommended.
2. Just use the shortcode in any Visual Editor (e.g. Post/Page edit screens). With Shortcake (Shortcode UI) plugin activated you'll be able to click "Add Media" then "Insert Post Element" then select one of the shortcodes to customize. If you are using the WordPress 5.0 Block Editor (a.k.a. Gutenberg), you will have to be within a "Classic" block to use Shortcake's interface.

== Frequently Asked Questions ==

**What are some shortcode examples?**

Here are some shortcode examples:

* At the least, the SmugMug Album Key is required: `[smugmug-slideshow key="TrBCmb"]`
* A variety of shortcode arguments: `[smugmug-slideshow domain="mymug.example.com" key="TrBCmb" autostart_off="true" navigation="true" playbutton="true" height="400"]`
* By default, width is set to 100% (responsive), but here's an example of how to make it fixed width: `[smugmug-slideshow key="TrBCmb" width="450" widthunits="px"]`


*Don't forget: This shortcode has a user interface (UI) to make it easy to generate or edit `[smugmug-slideshow]` in the Visual Editor (so you don't have to manually enter all that shortcode garbly-gook).*

**Does the shortcode work with my theme?**

Yes. It's just an iframe.

**Does the shortcode work over SSL/HTTPS?**

Yes, always (as of version 1.6). Thank you (finally), SmugMug!

== Screenshots ==

1. Plugin GUI - Shortcode Generator (with Shortcake active)

2. Shortcode vs SmugMug slideshow generators

3. Classic Editor preview

4. Classic Editor preview with Edit-Delete buttons

== Changelog ==

*Changelog DIFFs for all versions are available at <a href="https://plugins.trac.wordpress.org/browser/tk-smugmug-slideshow-shortcode/trunk" target="_blank">WordPress SVN</a>.*

= Version 1.7 =
* December 21, 2020
* Tested with WordPress 5.6
* Update Freemius SDK from v2.2.4 to v2.4.1.
* Added the WordPress.org "Adopt Me" tag. Contact me if you want to take over this plugin. I no longer use SmugMug.

= Version 1.6 =
* March 5, 2019
* Tested with WordPress 5.1
* Now requires PHP 5.6 or greater.
* Now always loads via HTTPS, even for custom domains. Thank you (finally), SmugMug!
* Update Freemius SDK from v1.2.1.7.1 to v2.2.4 (security fix).
* Update TGM Plugin Activation from v2.5.2 to v2.6.1
* License changed from GPLv2+ to GPLv3+.

= Version 1.5 =
* May 27, 2017
* Added HTTPS/SSL support. If the shortcode's "domain" argument ends with 'smugmug.com' (e.g. xyz.smugmug.com), the slideshow will load via HTTPS, else HTTP. Really, though, you could just leave the "domain" argument empty to load it from https://smugmug.com/..., which should work in all cases.
* Added 'randomize' shortcode argument
* Added tk_smugmug_slideshow_shortcode_before_output and tk_smugmug_slideshow_shortcode_after_output filters in case you want to add your own button that links to view the full screen slideshow (same link as the generated iframe src).
* Integrated Freemius.

= Version 1.4 =
* January 30, 2017
* Technically no version change from 1.3 but somehow the plugin's version was set at 1.4. Either I missed a readme update or ¯\_(ツ)_/¯ so we'll call it v1.4...
* Readme updated to include link to Chrome extension, specify that others’ SmugMug galleries could be used too, and that this plugin has been tested working with WordPress 4.7.2

= Version 1.3 =
* November 25, 2015
* Fix check for global $content_width (!empty instead of isset to avoid iframe width of zero).
* Added esc_url() to iframe src to improve HTML validation and security.

= Version 1.2 =
* November 21, 2015
* Fix plugin header to avoid error with attempt to activate plugin upon initial installation (included TGM Plugin Activation had valid plugin header info and WP scans down another directory looking for additional plugins)

= Version 1.1 =
* November 20, 2015
* Change Tested Up To WP version 4.4.

= Version 1.0 =
* November 17, 2015
* Initially uploaded to WordPress.org on November 17, 2015