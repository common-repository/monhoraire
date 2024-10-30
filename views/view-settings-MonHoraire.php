<!-- Vue des changements de paramètres sur l'outil administrateur -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <div class="monhoraire_link">
      <a href="https://www.monhoraire.fr/" target="_blank">Lien vers MonHoraire.fr</a>
    </div>
    <div class="form-group input_title_monhoraire">
      <label for="<?php echo $this->get_field_id("titre"); ?>">Titre : </label>
      <input class="form-control" type="text"
             name="<?php echo $this->get_field_name("titre"); ?>"
             id="<?php echo $this->get_field_id("titre"); ?>"
             value="<?php echo $instance['titre']; ?>">
    </div>
    <div class="form-group">
      <label class="control-label"
             for="<?php echo $this->get_field_id("description"); ?>">Description :
      </label>
      <div>
        <textarea class="form-control" id="<?php echo $this->get_field_id("description"); ?>"
                  name="<?php echo $this->get_field_name("description"); ?>" rows="4"
                  placeholder="Entrez votre description"><?php echo $instance['description']; ?></textarea>
      </div>
    </div>
    <div class="form-group">
      <label for="<?php echo $this->get_field_id("url"); ?>">URL : </label>
        <div class="input-group">
          <div class="input-group-addon input_url_monhoraire">
            https://www.monhoraire.fr/
          </div>
          <input class="form-control" type="url"
                  id="<?php echo $this->get_field_id("url"); ?>"
                  name="<?php echo $this->get_field_name("url"); ?>"
                  value="<?php echo $instance['url']; ?>">
        </div>
    </div>
    <div class="form-group">
      <label for="<?php echo $this->get_field_id('width'); ?>">Largeur : </label>
      <input class="form-control" type="number"
             id="<?php echo $this->get_field_id('width'); ?>"
             name="<?php echo $this->get_field_name('width'); ?>"
             value="<?php echo $instance['width']; ?>">
    </div>
    <div class="form-group">
      <label for="<?php echo $this->get_field_id('height'); ?>">Hauteur : </label>
      <input class="form-control" type="number"
             id="<?php echo $this->get_field_id('height'); ?>"
             name="<?php echo $this->get_field_name('height'); ?>"
             value="<?php echo $instance['height']; ?>">
    </div>
  </body>
</html>
