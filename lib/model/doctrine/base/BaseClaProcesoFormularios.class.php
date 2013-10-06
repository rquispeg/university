<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('ClaProcesoFormularios', 'doctrine');

/**
 * BaseClaProcesoFormularios
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $cla_proceso_id
 * @property integer $cla_tramite_id
 * @property integer $cla_formulario_id
 * @property integer $orden
 * 
 * @method integer               getClaProcesoId()      Returns the current record's "cla_proceso_id" value
 * @method integer               getClaTramiteId()      Returns the current record's "cla_tramite_id" value
 * @method integer               getClaFormularioId()   Returns the current record's "cla_formulario_id" value
 * @method integer               getOrden()             Returns the current record's "orden" value
 * @method ClaProcesoFormularios setClaProcesoId()      Sets the current record's "cla_proceso_id" value
 * @method ClaProcesoFormularios setClaTramiteId()      Sets the current record's "cla_tramite_id" value
 * @method ClaProcesoFormularios setClaFormularioId()   Sets the current record's "cla_formulario_id" value
 * @method ClaProcesoFormularios setOrden()             Sets the current record's "orden" value
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseClaProcesoFormularios extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('cla_proceso_formularios');
        $this->hasColumn('cla_proceso_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('cla_tramite_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('cla_formulario_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('orden', 'integer', 4, array(
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
        
    }
}