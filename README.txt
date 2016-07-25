=== Plugin Name ===
Contributors: dominik.schwind
Tags: json, rest, api, rest-api, geo
Requires at least: 3.9
Tested up to: 3.9
Stable tag: 0.1
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds the geo data to the JSON API.

== Description ==

Adds the geo data to the JSON API.
Because *apparently* the geo data is not part of WP core.

The plugin only works in combination with the v1 version of the [WP REST API](https://wordpress.org/plugins/json-rest-api/) plugin. Once it is installed, it will return the geo data of posts if they have been entered based on [this WordPress Codex entry](https://codex.wordpress.org/Geodata). (Most other geo plugins and the official WP mobile apps use that format.)
