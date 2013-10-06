<?php

/**
 * AdmRolesUsuariosTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AdmRolesUsuariosTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object AdmRolesUsuariosTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('AdmRolesUsuarios');
    }
    
    public function getRol($usuario_id)
    {
        $q = $this->createQuery('c')
        ->where('c.adm_usuario_id = ? ', $usuario_id);
        return $q->fetchOne();
    }
}