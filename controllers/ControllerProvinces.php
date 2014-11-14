<?php
/**
 * ControllerProvinces
 * @version V 0.1
 * @author Alberto Vara (C) Copyright 2014
 * @package OLIF.ControllerProvinces
 *
 * @desc
 */
namespace Olif;

require_once CORE_ROOT . CONTROLLERS . DIRECTORY_SEPARATOR . "ControllerORM.php";

class ControllerProvinces extends ControllerORM
{

    /**
     * table: tabla del objecto seleccionado
     *
     * @var unknown
     */
    protected $table = "ceo_provinces";

    /**
     * table_prefix: prefijo tabla del objecto seleccionado
     *
     * @var unknown
     */
    protected $table_prefix = "";

    /**
     * fields: campos del objecto seleccionado
     *
     * @var unknown
     */
    protected $fields = "ID, NAME_ES, FK_COUNTRY";

    /**
     * joins: uniones que intervienen en la query del objecto seleccionado
     *
     * @var unknown
     */
    protected $joins = "";

    /**
     * $conds: condiciones que intervienen con el objecto seleccionado
     *
     * @var unknown
     */
    protected $conds = "";

    public function assignlistInput($blockName, $selectedId, $countryID, $filters = array())
    {
        $this->getControllerPage();
        if (strlen($countryID) > 0) {
            $filters['COND'] = "FK_COUNTRY = ?";
            $filters['PARAMS'] = array(
                $countryID
            );
            $result = $this->model->{$this->ormSession}->getlist($filters, "ORDER BY NAME_ES ASC", 0, 500, false);
            if ($result !== false) {
                $num_results = count($result['elements']);
                for ($i = 0; $i < $num_results; $i ++) {
                    $fields = array();
                    foreach ($result['elements'][$i] as $clave => $valor) {
                        $fields[$clave] = $valor;
                    }
                    if ($selectedId == $fields['ID']) {
                        $fields['SELECTED'] = 1;
                    } else {
                        $fields['SELECTED'] = 0;
                    }
                    $this->page->assignList($blockName, $fields);
                }
            } else
                return false;
        } else {
            return false;
        }
    }
}
