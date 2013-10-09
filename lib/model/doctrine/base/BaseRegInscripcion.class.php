<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('RegInscripcion', 'doctrine');

/**
 * BaseRegInscripcion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $ci
 * @property integer $uni_sede_id
 * @property integer $uni_carrera_id
 * @property integer $gestion_id
 * @property integer $adm_usuario_id
 * @property timestamp $fecha_registro
 * @property DatPersonas $DatPersonas
 * 
 * @method string         getCi()             Returns the current record's "ci" value
 * @method integer        getUniSedeId()      Returns the current record's "uni_sede_id" value
 * @method integer        getUniCarreraId()   Returns the current record's "uni_carrera_id" value
 * @method integer        getGestionId()      Returns the current record's "gestion_id" value
 * @method integer        getAdmUsuarioId()   Returns the current record's "adm_usuario_id" value
 * @method timestamp      getFechaRegistro()  Returns the current record's "fecha_registro" value
 * @method DatPersonas    getDatPersonas()    Returns the current record's "DatPersonas" value
 * @method RegInscripcion setCi()             Sets the current record's "ci" value
 * @method RegInscripcion setUniSedeId()      Sets the current record's "uni_sede_id" value
 * @method RegInscripcion setUniCarreraId()   Sets the current record's "uni_carrera_id" value
 * @method RegInscripcion setGestionId()      Sets the current record's "gestion_id" value
 * @method RegInscripcion setAdmUsuarioId()   Sets the current record's "adm_usuario_id" value
 * @method RegInscripcion setFechaRegistro()  Sets the current record's "fecha_registro" value
 * @method RegInscripcion setDatPersonas()    Sets the current record's "DatPersonas" value
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRegInscripcion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reg_inscripcion');
        $this->hasColumn('ci', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => '',
             ));
        $this->hasColumn('uni_sede_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('uni_carrera_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('gestion_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('adm_usuario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
        $this->hasColumn('fecha_registro', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DatPersonas', array(
             'local' => 'ci',
             'foreign' => 'ci'));
    }
}