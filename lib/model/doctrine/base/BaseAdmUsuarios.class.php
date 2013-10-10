<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AdmUsuarios', 'doctrine');

/**
 * BaseAdmUsuarios
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $correo_electronico
 * @property integer $habilitado
 * @property string $telefono_fijo
 * @property string $telefono_movil
 * @property string $ci_id
 * @property integer $adm_roles_id
 * @property AdmRoles $AdmRoles
 * @property ClaHabilitado $ClaHabilitado
 * @property DatPersonas $DatPersonas
 * @property Doctrine_Collection $AdmUsuarioAdministra
 * 
 * @method integer             getId()                   Returns the current record's "id" value
 * @method string              getUsername()             Returns the current record's "username" value
 * @method string              getPassword()             Returns the current record's "password" value
 * @method string              getCorreoElectronico()    Returns the current record's "correo_electronico" value
 * @method integer             getHabilitado()           Returns the current record's "habilitado" value
 * @method string              getTelefonoFijo()         Returns the current record's "telefono_fijo" value
 * @method string              getTelefonoMovil()        Returns the current record's "telefono_movil" value
 * @method string              getCiId()                 Returns the current record's "ci_id" value
 * @method integer             getAdmRolesId()           Returns the current record's "adm_roles_id" value
 * @method AdmRoles            getAdmRoles()             Returns the current record's "AdmRoles" value
 * @method ClaHabilitado       getClaHabilitado()        Returns the current record's "ClaHabilitado" value
 * @method DatPersonas         getDatPersonas()          Returns the current record's "DatPersonas" value
 * @method Doctrine_Collection getAdmUsuarioAdministra() Returns the current record's "AdmUsuarioAdministra" collection
 * @method AdmUsuarios         setId()                   Sets the current record's "id" value
 * @method AdmUsuarios         setUsername()             Sets the current record's "username" value
 * @method AdmUsuarios         setPassword()             Sets the current record's "password" value
 * @method AdmUsuarios         setCorreoElectronico()    Sets the current record's "correo_electronico" value
 * @method AdmUsuarios         setHabilitado()           Sets the current record's "habilitado" value
 * @method AdmUsuarios         setTelefonoFijo()         Sets the current record's "telefono_fijo" value
 * @method AdmUsuarios         setTelefonoMovil()        Sets the current record's "telefono_movil" value
 * @method AdmUsuarios         setCiId()                 Sets the current record's "ci_id" value
 * @method AdmUsuarios         setAdmRolesId()           Sets the current record's "adm_roles_id" value
 * @method AdmUsuarios         setAdmRoles()             Sets the current record's "AdmRoles" value
 * @method AdmUsuarios         setClaHabilitado()        Sets the current record's "ClaHabilitado" value
 * @method AdmUsuarios         setDatPersonas()          Sets the current record's "DatPersonas" value
 * @method AdmUsuarios         setAdmUsuarioAdministra() Sets the current record's "AdmUsuarioAdministra" collection
 * 
 * @package    universidad
 * @subpackage model
 * @author     Remberto Quispe <rembertoy2k3@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAdmUsuarios extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('adm_usuarios');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'adm_usuarios_id',
             'length' => 4,
             ));
        $this->hasColumn('username', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('password', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('correo_electronico', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('habilitado', 'integer', 2, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'default' => '1',
             'primary' => false,
             'length' => 2,
             ));
        $this->hasColumn('telefono_fijo', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('telefono_movil', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('ci_id', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('adm_roles_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('AdmRoles', array(
             'local' => 'adm_roles_id',
             'foreign' => 'id'));

        $this->hasOne('ClaHabilitado', array(
             'local' => 'habilitado',
             'foreign' => 'id'));

        $this->hasOne('DatPersonas', array(
             'local' => 'ci_id',
             'foreign' => 'ci'));

        $this->hasMany('AdmUsuarioAdministra', array(
             'local' => 'id',
             'foreign' => 'adm_usuario_id'));
    }
}