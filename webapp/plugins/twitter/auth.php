<?php
/**
 *
 * ThinkUp/webapp/plugins/twitter/auth.php
 *
 * Copyright (c) 2009-2016 Gina Trapani, Mark Wilkie, Christoffer Viken
 *
 * LICENSE:
 *
 * This file is part of ThinkUp (http://thinkup.com).
 *
 * ThinkUp is free software: you can redistribute it and/or modify it under the terms of the GNU General Public
 * License as published by the Free Software Foundation, either version 2 of the License, or (at your option) any
 * later version.
 *
 * ThinkUp is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with ThinkUp.  If not, see
 * <http://www.gnu.org/licenses/>.
 *
 * @author Gina Trapani <ginatrapani[at]gmail[dot]com>
 * @author Mark Wilkie <mark[at]bitterpill[dot]org>
 * @author Christoffer Viken <christoffer[at]viken[dot]me>
 * @license http://www.gnu.org/licenses/gpl.html
 * @copyright 2009-2016 Gina Trapani, Mark Wilkie, Christoffer Viken
 *
 * This file has been deprecated; Twitter authorization now happens on the plugin settings page. Therefore, just
 * redirect there from here.
 */
header('Location: ../../account/?p=twitter');