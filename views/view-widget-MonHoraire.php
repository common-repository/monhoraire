<?php
/* On extrait les données du tableaux $args
*  Exemple: $args['before_widget'] créé la variable $before_widget qui aura la même valeur
*/
extract($args);

//On ouvre la balise section qui contiendra le widget
echo $before_widget;

//On écrit le titre, entouré des balises h2 (variables $before_title et $after_title)
echo $before_title . $instance['titre'] . $after_title;
?>
<section>
  <?php echo $instance['description']; ?>
</section>
<!-- On inclut l'i-frame du site monhoraire.fr dans le widget -->
<iframe id="widget_monhoraire"
      src="https://www.monhoraire.fr/<?php echo $instance['url']; ?>?iframe=true"
      style="border:none"
      width="<?php echo $instance['width']; ?>"
      height="<?php echo $instance['height']; ?>">
</iframe>
<?php
//On ferme la balise section contenant le widget
echo $after_widget;
