<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdmRolesMenus', 'doctrine');

/**
 * BaseAdmRolesMenus
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $adm_rol_id
 * @property integer $adm_menu_id
 * @property AdmMenus $AdmMenus
 * @property AdmRoles $AdmRoles
 * 
 * @method integer       getAdmRolId()    Returns the current record's "adm_rol_id" value
 * @method integer       getAdmMenuId()   Returns the current record's "adm_menu_id" value
 * @method AdmMenus      getAdmMenus()    Returns the current record's "AdmMenus" value
 * @method AdmRoles      getAdmRoles()    Returns the current record's "AdmRoles" value
 * @method AdmRolesMenus setAdmRolId()    Sets the current record's "adm_rol_id" value
 * @method AdmRolesMenus setAdmMenuId()   Sets the current record's "adm_menu_id" value
 * @method AdmRolesMenus setAdmMenus()    Sets the current record's "AdmMenus" value
 * @method AdmRolesMenus setAdmRoles()    Sets the current record's "AdmRoles" value
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdmRolesMenus extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('adm_roles_menus');
        $this->hasColumn('adm_rol_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('adm_menu_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('AdmMenus', array(
             'local' => 'adm_menu_id',
             'foreign' => 'id'));

        $this->hasOne('AdmRoles', array(
             'local' => 'adm_rol_id',
             'foreign' => 'id'));
    }
}