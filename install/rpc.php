<?php
/*
 * Copyright (c) 2013 by Wolfgang Wiedermann
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as
 * published by the Free Software Foundation; version 3 of the
 * License.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307
 * USA
 */

# HTTP-Header standardmäßig auf application/json stellen
header("Content-type: application/json");
# Datenbank-Helper laden
include_once("../lib/Util.php");
# So umstellen das Errors als Exceptions geliefert werden
include_once("../lib/ErrorsToExceptions.php");
# Einstiegspunkt in das Framework
require_once("../lib/Dispatcher.php");
$disp = new Dispatcher();
echo $disp->invoke($_REQUEST);

?>
