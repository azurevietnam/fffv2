<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2015 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');


/** Include PHPExcel_IOFactory */
require_once dirname(__FILE__) . '/Classes/PHPExcel/IOFactory.php';


$objPHPExcel = PHPExcel_IOFactory::load("./nambo.xlsx");
// Echo memory usage
$sodong = $objPHPExcel->getActiveSheet()->getHighestRow();
for ($i=2;$i<=$sodong;$i++){
	$item = $objPHPExcel->getActiveSheet();
	$input['date'] = trim($item->getCell("A".$i)->getFormattedValue());
	$input['session'] = trim($item->getCell("B".$i)->getFormattedValue());
	$input['start'] = trim($item->getCell("C".$i)->getFormattedValue());
	$input['end'] = trim($item->getCell("D".$i)->getFormattedValue());
	$input['ba_phone'] = trim($item->getCell("E".$i)->getFormattedValue());
	$input['outlet_id']= trim($item->getCell("F".$i)->getFormattedValue());
	$input['outlet_name']= trim($item->getCell("G".$i)->getFormattedValue());
	$input['outlet_add']= trim($item->getCell("H".$i)->getFormattedValue());
	$input['outlet_street']= trim($item->getCell("I".$i)->getFormattedValue());
	$input['outlet_district']= trim($item->getCell("J".$i)->getFormattedValue());
	$input['outlet_province']= trim($item->getCell("K".$i)->getFormattedValue());
	echo "INSERT wz_tmp_import (`date`,`start`,`end`,`ba_phone`,`outlet_id`,`outlet_name`,`outlet_add`,`outlet_street`,`outlet_district`,`outlet_province`) VALUES ('".$input['date']."','".$input['start']."','".$input['end']."','".$input['ba_phone']."','".$input['outlet_id']."','".$input['outlet_name']."','".$input['outlet_add']."','".$input['outlet_street']."','".$input['outlet_district']."','".$input['outlet_province'].")";
	exit();
	//$mysql->query("INSERT wz_tmp_import (`date`,`start`,`end`,`ba_phone`,`outlet_id`,`outlet_name`,`outlet_add`,`outlet_street`,`outlet_district`,`outlet_province`) VALUES ('".$input['date']."','".$input['start']."','".$input['end']."','".$input['ba_phone']."','".$input['outlet_id']."','".$input['outlet_name']."','".$input['outlet_add']."','".$input['outlet_street']."','".$input['outlet_district']."','".$input['outlet_province'].")");
}