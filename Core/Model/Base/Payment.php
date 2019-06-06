<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2019 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace FacturaScripts\Core\Model\Base;

use FacturaScripts\Dinamic\Model\Asiento;

/**
 * Description of Payment
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 */
abstract class Payment extends ModelClass
{

    /**
     *
     * @var string
     */
    public $fecha;
    
    /**
     *
     * @var string
     */
    public $hora;

    /**
     *
     * @var int
     */
    public $idasiento;

    /**
     *
     * @var int
     */
    public $idpago;

    /**
     *
     * @var int
     */
    public $idrecibo;

    /**
     *
     * @var float
     */
    public $importe;

    /**
     *
     * @var string
     */
    public $nick;

    public function clear()
    {
        parent::clear();
        $this->fecha = date('d-m-Y');
        $this->hora = date('H:i:s');
        $this->importe = 0.0;
    }

    /**
     * 
     * @return string
     */
    public function install()
    {
        /// needed dependencies
        new Asiento();

        return parent::install();
    }

    /**
     * 
     * @return string
     */
    public static function primaryColumn()
    {
        return 'idpago';
    }
}