<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaGradoAcademico', 'doctrine');

/**
 * BaseClaGradoAcademico
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $descripcion
 * @property Doctrine_Collection $UniSedeCarreras
 * 
 * @method integer             getId()              Returns the current record's "id" value
 * @method string              getDescripcion()     Returns the current record's "descripcion" value
 * @method Doctrine_Collection getUniSedeCarreras() Returns the current record's "UniSedeCarreras" collection
 * @method ClaGradoAcademico   setId()              Sets the current record's "id" value
 * @method ClaGradoAcademico   setDescripcion()     Sets the current record's "descripcion" value
 * @method ClaGradoAcademico   setUniSedeCarreras() Sets the current record's "UniSedeCarreras" collection
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClaGradoAcademico extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_grado_academico');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'cla_grado_academico_id',
             'length' => 4,
             ));
        $this->hasColumn('descripcion', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('UniSedeCarreras', array(
             'local' => 'id',
             'foreign' => 'cla_grado_academico_id'));
    }
}