<?php

//On récupère le chemin du dossier qui contient les extensions
$url = plugins_url();

/**
* On fait appel aux feuilles de style qui mettent en forme le tableau de configuration
*   des paramètres du widget
**/

wp_enqueue_style('bootstrap', $url . '/MonHoraire/ressources/bootstrap.min.css');

wp_enqueue_style('style', $url . '/MonHoraire/ressources/style.css');

/**
* Fonction qui permet le référencement du widget pour Wordpress
*
**/
function mhr_registerWidget()
{
  register_widget("widget_MonHoraire");
}

/**
* Liste des différentes actions à réaliser tel que référencer le widget
**/
add_action('widgets_init', 'mhr_registerWidget');
