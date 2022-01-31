# wp-matomo-php
Connecting WordPress to Matomo with the PHP API - Tracking WordPress App Behaviour

Disables:
* IP delivering to Matomo
* Cookies set by Matomo
* Country detection inside Matomo
* Recurring Users detection

Enables:
* No JS needed but XHR Events tracking is still possible
* Full programatic control to send WordPress Hooks `add_action`, `add_filter` as Events to Matomo.
* Allows to track WordPress from inside out
* Anonymous Ajax (XHR) tracking (Heatmaps etc.) with WordPress `wp_ajax_nopriv` methods possible

## Install

Currently this is a "must use plugin".

Create a folder `mu-plugins` inside of `<wp_root_directory>/wp-content/` if it does not exist and upload the content of the `mu-plugins` folder you haver downloaded here.

Edit the `config.php` regarding your matomo server.
