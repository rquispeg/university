<?php

/**
 * ProcSeguimientoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ProcSeguimientoTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ProcSeguimientoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ProcSeguimiento');
    }
    
    /**
     * Descripcion: Tramites que se encuentran en la Bandeja de Entrada
     * @param type $user_id
     * @return type
     */
    public function getSeguimiento($user_id)
    {
        $q = $this->createQuery('c')
        ->InnerJoin('c.ClaGestion d')
        ->InnerJoin('c.ClaProceso e')
        ->InnerJoin('e.ClaTramite f')
        ->InnerJoin('c.DatPersonas g')
        ->InnerJoin('c.AdmUsuarios h')
        ->InnerJoin('h.Administra i')
        ->where('c.adm_usuario_salida_id = ?',$user_id);
        return $q->execute();
    }
    
    /**
     * 
     * Descripcion: Tramites que se enviaros
     * @param type $user_id
     * @return type
     */
    public function getEnviado($user_id)
    {
        $q = $this->createQuery('c')
        ->InnerJoin('c.ClaGestion d')
        ->InnerJoin('c.ClaProceso e')
        ->InnerJoin('e.ClaTramite f')
        ->InnerJoin('c.DatPersonas g')
        ->InnerJoin('c.AdmUsuarios_3 h')
        ->InnerJoin('h.Administra i')
        ->where('c.adm_usuario_entrada_id = ?',$user_id);
        return $q->execute();
    }
    
    /**
     * Descripcion: Tramites que se encuentran en la Bandeja de Entrada
     * @param type $user_id
     * @return type
     */
    public function getTramite($id)
    {
        $q = $this->createQuery('c')
        ->innerJoin('c.ProcFormularios b on c.id = b.id and c.cla_tramite_id = b.cla_tramite_id and c.cla_proceso_id = b.cla_proceso_id')        
        ->innerJoin('b.ClaTabla d on b.cla_tabla_id = d.id')
        ->where('c.id = ?',$id);
        return $q->fetchOne();
    }
}