# wp-matomo-php
Connecting WordPress to Matomo with the PHP API - Tracking WordPress App Behaviour

Disables:
* IP delivering to Matomo
* Country detection inside Matomo
* Cookies set by Matomo
* Recurring Users detection

Enables:
* No JS needed but XHR Events tracking is still possible
* Full programatic control to send WordPress Hooks `add_action`, `add_filter` as Events to Matomo.
* Campain tracking with URL Parameter `?c=<pk_campaign>(-<pk_source>)(-<pk_medum>)(-<pk_keyword>)(-<pk_content>)` 
* Banner tracking with URL Parameter (ToDo: description)
* Form tracking integration with `Contact Form 7` WordPress Plugin
* Downloads tracking integration for `Alpha Downloads` WordPress Plugin
* Allows to track WordPress from inside out (ToDo: description)
* Anonymous Ajax (XHR) tracking (Heatmaps etc.) with WordPress `wp_ajax_nopriv` methods possible (ToDo: description)

## Install

Currently this is a "must use plugin".

Create a folder `mu-plugins` inside of `<wp_root_directory>/wp-content/` if it does not exist and upload the content of the `mu-plugins` folder you have downloaded here.

Edit the `config.php` regarding your matomo server.
