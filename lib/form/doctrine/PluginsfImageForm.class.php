<?php

/**
 * Image form.
 *
 * @package    form
 * @subpackage Image
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
abstract class PluginsfImageForm extends BasesfImageForm
{
  public function setup()
  {
    parent::setup();

    unset($this->widgetSchema['extension']);
    unset($this->validatorSchema['extension']);
    unset($this->widgetSchema['size']);
    unset($this->validatorSchema['size']);
    unset($this->widgetSchema['mime_type']);
    unset($this->validatorSchema['mime_type']);
    unset($this->widgetSchema['content']);
    unset($this->validatorSchema['content']);
    unset($this->widgetSchema['last_modified']);
    unset($this->validatorSchema['last_modified']);

    $this->widgetSchema['reference']->setLabel('Name');

    $this->widgetSchema['file'] = new sfWidgetFormInputFile(array(
      'label' => 'Image',
    ));

    $this->validatorSchema['file'] = new sfValidatorFile(array(
      'required' => true,
    ));
  }
}