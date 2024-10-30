<?php

/**
*   On commence par vérifier que mhr_arrayReplaceIfNotNull n'existe pas avant de la déclarer
*
*   Fonction qui a pour but de fussioner deux tableaux sauf si la valeur est null ou vide

*   On parcourt $firstArray et, pour chaque élément, s'il possède une valeur,
*     on l'écrit dans $secondArray. Le premier tableau écrase donc le second
*     sauf s'il a des valeurs vides.
*
* @param $firstArray : Tableau parcourt qui écrase les valeurs du second tableau
*                         sauf si les valeurs sont nulles
*
* @param $secondArray : Tableau de référence
*
**/

//On vérifie que mhr_arrayReplaceIfNotNull n'existe pas déjà
if(!function_exists('mhr_arrayReplaceIfNotNull')){
  function mhr_arrayReplaceIfNotNull($firstArray, $secondArray)
  {
    foreach($firstArray as $key=>$value){
      if(!is_null($value) && !empty($value)){
        $secondArray[$key] = $value;
      }
    }
    return $secondArray;
  }
}
