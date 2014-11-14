<?php
/**
 * ControllerCountries
 * @version V 0.1
 * @author Alberto Vara (C) Copyright 2014
 * @package OLIF.ControllerCountries
 *
 * @desc
 */
namespace Olif;

require_once CORE_ROOT . CONTROLLERS . DIRECTORY_SEPARATOR . "ControllerORM.php";

class ControllerCountries extends ControllerORM
{

    /**
     * table: tabla del objecto seleccionado
     *
     * @var unknown
     */
    protected $table = "ceo_countries";

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
    protected $fields = "ID, NAME_ES";

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
}
