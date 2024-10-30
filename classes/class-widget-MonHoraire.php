<?php

/*On déclare la classe widget_MonHoraire et, comme il s'agit d'un widget,
  hérite de la classe WP_Widget, native sous WordPress*/
class widget_MonHoraire extends WP_Widget{

  /**
  * Fonction qui permet d'initialiser le widget (semblable à un constructeur)
  *
  **/
  function widget_MonHoraire()
  {
    //Tableau d'options du widget
    $options = array(
      "classname" => "mhr_MonHoraire",
      "description" => "Proposez dès maintenant la prise de rendez-vous en ligne
                            sur votre site internet Wordpress avec MonHoraire"
    );

    /*On créer le widget avec la fonction "$this->WP_widget()", auquel on passe en
    paramètre le nom de la classe, le nom du widget qui sera affiché. On peut
    rajouter un tableau d'options tels qu'une description et un tableau de
    contrôles qui définira, par exemple, la taille et la largeur du widget*/

    $this->WP_widget("widget_MonHoraire","MonHoraire", $options);
  }

  /**
  * Fonction qui affiche le contenu du widget dans le site WordPress
  *
  * @param $args : Tableau qui contient les balises HTML nécessaires à l'affichage
  *
  * @param $instance : Tableau des paramètres du widget
  *
  **/
  function widget($args, $instance)
  {
    //On appelle la vue relative à l'affichage du widget dans le site WordPress
    require_once  __DIR__ . '/../views/view-widget-MonHoraire.php';
  }

  /**
  * Fonction qui permet de mettre à jour l'instance du widget. Elle est appelé
  *   dès lors que l'on enregistre ses modifications
  *
  * @param $newinstance : Nouvelle instance du widget qui contient
  *                         les nouveaux paramètres
  *
  * @param $oldInstance : Ancienne instance du widget qui contient
  *                         les anciens paramètres
  *
  **/
  function update($newInstance, $oldInstance)
  {
    /** On déclare dans un tableau tous les morceaux d'adresse url à supprimer
    * Puis on supprime ces morceaux grâce à la fonction str_replace()
    * Par exemple, si l'on veut que l'utilisateur entre 'monSite' et qu'il entre
    * 'https://www.monhoraire.fr/monSite', alors l'adresse sera modifié en 'monSite'
    **/
    $UrlPartToErase = array(
      'https://',
      'www.monhoraire.fr/',
      'www.monhoraire.pro/'
    );

    $newInstance['url'] = str_replace($UrlPartToErase, '', $newInstance['url']);

    /**
    * Ensuite il nous reste à nous protéger de la faille XSS
    * On va utiliser la fonction strip_tags qui va supprimer ces balises
    * et on va le faire sur tout les champs qui sont du texte (prévisions d'évolution
    * car ils le sont tous pour le moment)
    **/

    foreach($newInstance as $key=>$value){
      if(isset($newInstance[$key])){
        $newInstance[$key] = strip_tags($newInstance[$key]);
      }
    }

    /**
    * On vérifie que les champs 'Largeur' et 'Hauteur' sont de type nombre
    *   sinon, on met leur valeur à null
    **/
    if(!is_numeric($newInstance['width'])){
      $newInstance['width'] = null;
    }

    if(!is_numeric($newInstance['height'])){
      $newInstance['height'] = null;
    }

    return $newInstance;
  }

  /**
  * Fonction qui permet d'afficher les paramètres que l'utilisateur pourra modifier
  *   depuis la partie administrateur de son site
  *
  * @param $instance : Tableau qui contient les paramètres courants de l'instance
  *
  */
  function form($instance)
  {
    /**
    * On déclare un tableau $default, qui contiendra les valeurs des paramètres
    *  par défault. Ainsi, si l'utilisateur n'as pas ou pas encore rempli un champ,
    *  on souhaite que ce champ prenne la valeur par défaut contenu dans le tableau.
    *  Si la valeur est null, on ne déclare pas de variable par défaut.
    **/
    $default = array(
      'titre' => null,
      'description' => null,
      'url' => null,
      'width' => '500' ,
      'height' => '500'
    );
    /**
    * On appelle la fonction mhr_arrayReplaceIfNotNull, qui va renvoyer un tableau,
    * composé des valeurs du premier tableau passé en argument, remplacé par les
    * valeurs du tableau $default si ces valeurs sont nulles
    **/
    $instance = mhr_arrayReplaceIfNotNull($instance, $default);

    //On appelle la vue relative à l'affichage des changements de paramètres du widget
    require __DIR__ . '/../views/view-settings-MonHoraire.php';
  }
}
