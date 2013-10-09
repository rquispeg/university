<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('UniSede', 'doctrine');

/**
 * BaseUniSede
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $descripcion
 * @property integer $uni_universidad_id
 * @property UniUniversidad $UniUniversidad
 * @property Doctrine_Collection $UniSedeCarreras
 * @property Doctrine_Collection $AdmUsuarioAdministra
 * 
 * @method integer             getId()                   Returns the current record's "id" value
 * @method string              getDescripcion()          Returns the current record's "descripcion" value
 * @method integer             getUniUniversidadId()     Returns the current record's "uni_universidad_id" value
 * @method UniUniversidad      getUniUniversidad()       Returns the current record's "UniUniversidad" value
 * @method Doctrine_Collection getUniSedeCarreras()      Returns the current record's "UniSedeCarreras" collection
 * @method Doctrine_Collection getAdmUsuarioAdministra() Returns the current record's "AdmUsuarioAdministra" collection
 * @method UniSede             setId()                   Sets the current record's "id" value
 * @method UniSede             setDescripcion()          Sets the current record's "descripcion" value
 * @method UniSede             setUniUniversidadId()     Sets the current record's "uni_universidad_id" value
 * @method UniSede             setUniUniversidad()       Sets the current record's "UniUniversidad" value
 * @method UniSede             setUniSedeCarreras()      Sets the current record's "UniSedeCarreras" collection
 * @method UniSede             setAdmUsuarioAdministra() Sets the current record's "AdmUsuarioAdministra" collection
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUniSede extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('uni_sede');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'uni_sede_id',
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
        $this->hasColumn('uni_universidad_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('UniUniversidad', array(
             'local' => 'uni_universidad_id',
             'foreign' => 'codigo'));

        $this->hasMany('UniSedeCarreras', array(
             'local' => 'id',
             'foreign' => 'uni_sede_id'));

        $this->hasMany('AdmUsuarioAdministra', array(
             'local' => 'id',
             'foreign' => 'uni_sede_id'));
    }
}