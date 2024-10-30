<?php
/*
Plugin Name: Custom CMS
Plugin URI: http://pankajanupam.in/wordpress-plugins/custom-cms/
Description: Custom CMS
Version: 1.0
Author: PANKAJ ANUPAM
Author URI: http://pankajanupam.in

* LICENSE
    Copyright 2011 PANKAJ ANUPAM  (email : mymail.anupam@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
?>
<?php function login_logo() {
    echo '<style type="text/css">
        h1 a { background-image: url('.get_bloginfo('template_directory').'/images/logo.png);  }
    </style>';
}
add_action('login_head', 'login_logo'); ?>