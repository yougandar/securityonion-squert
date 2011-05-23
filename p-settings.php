<?php

//
//
//      Copyright (C) 2011 Paul Halliday <paul.halliday@gmail.com>
//
//      This program is free software: you can redistribute it and/or modify
//      it under the terms of the GNU General Public License as published by
//      the Free Software Foundation, either version 3 of the License, or
//      (at your option) any later version.
//
//      This program is distributed in the hope that it will be useful,
//      but WITHOUT ANY WARRANTY; without even the implied warranty of
//      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//      GNU General Public License for more details.
//
//      You should have received a copy of the GNU General Public License
//      along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//

include_once '.inc/session.php';
include_once '.inc/tabs.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Query</title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<style type="text/css" media="screen">@import ".css/squert.css";</style>
<style type="text/css" media="screen">@import ".css/tabs.css";</style>
</head>

<body>

<!---- Navigation ---->

<table id=main-table width=1000 align=center cellpadding=0 cellspacing=0">
<tr>
<td>
<?php tabber("SETTINGS",$id);?>
<div id="main">
<div id="contents" class="main">
<?php include_once '.inc/settings.php';?>
</div>
</div>
</td>
</tr>
</table>
</body>
</html>