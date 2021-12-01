<?php

namespace Core\HTML;
use Core\HTML\Form;

class BootstrapForm extends Form {

  protected function surround($html) {
    return "<div class='form-group'>{$html}</div>";
  }

  //input
  public function input($name, $label, $options = []) {
    $type = isset($options['type']) ? $options['type'] : 'text';
    $label = '<label class="form-label mt-4">'.$label.'</label>';
    if($type === 'textarea'){
      $input = '<textarea class="form-control" type ="'.$type.'" name="'.$name.'">'. $this->getValue($name).'</textarea>';
    } else {
      $input = '<input class="form-control" type ="'.$type.'" name="'.$name.'" value="'. $this->getValue($name).'" placeholder="'.$name.'"/>';

    }

    return $this->surround($label . $input);
  }

  //btn submit
  public function submit() {
    return $this->surround('<button type="submit" class="btn btn-primary" name="submit">Envoyer</button>');
  }
}