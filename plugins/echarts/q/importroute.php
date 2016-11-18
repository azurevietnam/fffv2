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
	$cot_id_outlet = "";
	$old_session = "";
	$session = trim($item->getCell("B".$i)->getFormattedValue());
	echo $session ;
	echo "---";
	if ($session <> $old_session){
		$old_session = $session; // mot route plan moi
		
		$date = $item->getCell("A".$i)->getFormattedValue();
		$start = $item->getCell("C".$i)->getFormattedValue();
		$end = $item->getCell("D".$i)->getFormattedValue();
		$route_plan_name = uniqid($date."_".$session);

		
		//xac dinh so BA
		$ba = array();
		$outlet = array();
		for ($b = "E"; $b<"Q"; $b++){
			if ($item->getCell("$b".$i) == "x0x") {
				$cot_id_outlet = ++$b;
				break;
			}else{
				$ba_id = $item->getCell("$b".$i)->getFormattedValue();
				$ba_id = trim($ba_id);
				$ba_id = str_replace(" ","",$ba_id);
				if (!empty($ba_id)) $ba[] = $ba_id;
			}
		}
		
		
		
		
		
		for ($j = $i;$j<100;$j++){
			$j_session = $item->getCell("B".$j);
			if ($j_session == $old_session){
				$outlet_id = $item->getCell("$cot_id_outlet".$j)->getFormattedValue();
				// check id nay xem co trong database khong
				$cot_tamp = $cot_id_outlet;
				$cot_name_outlet = ++$cot_tamp;
				$cot_add_outlet = ++$cot_tamp;
				$cot_street_outlet = ++$cot_tamp;
				$cot_ward_outlet = ++$cot_tamp;
				$cot_district_outlet = ++$cot_tamp;
				$cot_province_outlet = ++$cot_tamp;
				$o['outlet_id'] = $item->getCell("$cot_id_outlet".$j)->getFormattedValue();
				$o['outlet_name'] = $item->getCell("$cot_name_outlet".$j)->getFormattedValue();
				$o['outlet_add'] = $item->getCell("$cot_add_outlet".$j)->getFormattedValue();
				$o['outlet_street'] = $item->getCell("$cot_street_outlet".$j)->getFormattedValue();
				$o['outlet_ward'] = $item->getCell("$cot_ward_outlet".$j)->getFormattedValue();
				$o['outlet_district'] = $item->getCell("$cot_district_outlet".$j)->getFormattedValue();
				$o['outlet_province'] = $item->getCell("$cot_province_outlet".$j)->getFormattedValue();
				
				// neu khong check vi tri nay xem co trong database khong
					
				// neu khong insert vao database
				
				$outlet[]= $o;
			}else{
				$i = $j-1; // nhay 1 so luong session
				break;
			}
		}
		
		$r = array(
			'route_plan_name' => $route_plan_name,
			'date' => $date,
			'start' => $start,
			'end' => $end,
			'ba' => $ba,
			'outlet' => $outlet,
		);
		
		$route_plan[] = $r;
		
	}

}

var_dump($route_plan);