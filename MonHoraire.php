<?php
/**
* Plugin Name: MonHoraire
* Description: Proposez dès maintenant la prise de rendez-vous en ligne sur votre site internet Wordpress avec MonHoraire
* Version: 0.1
* Author: MonHoraire
* Author URI: https://www.monhoraire.fr/
*/

/*
Copyright (C) 2017 MonHoraire

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

//On appelle les fonctions nécessaires au widget
require_once 'lib/functions.php';

//On appelle toutes les ressources dont on a besoin
require_once 'lib/load_ressources.php';

//On appelle la classe qui créer et gère le widget
require_once 'classes/class-widget-MonHoraire.php';
