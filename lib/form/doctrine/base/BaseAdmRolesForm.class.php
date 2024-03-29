<?php

/**
 * AdmRoles form base class.
 *
 * @method AdmRoles getObject() Returns the current form's model object
 *
 * @package    universidad
 * @subpackage form
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAdmRolesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'descripcion'        => new sfWidgetFormTextarea(),
      'dat_institucion_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('DatInstitucion'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'descripcion'        => new sfValidatorString(),
      'dat_institucion_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('DatInstitucion'))),
    ));

    $this->widgetSchema->setNameFormat('adm_roles[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AdmRoles';
  }

}
