<?php/****************************************************************  Copyright notice**  (c)  2008 Your Name (your.name@domain.tld)**  All rights reserved**  This script is part of the Typo3 project. The Typo3 project is*  free software; you can redistribute it and/or modify*  it under the terms of the GNU General Public License as published by*  the Free Software Foundation; either version 2 of the License, or*  (at your option) any later version.**  The GNU General Public License can be found at*  http://www.gnu.org/copyleft/gpl.html.**  This script is distributed in the hope that it will be useful,*  but WITHOUT ANY WARRANTY; without even the implied warranty of*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*  GNU General Public License for more details.**  This copyright notice MUST APPEAR in all copies of the script!***************************************************************//** * This is a sample file for adding a hook to dataquery. Add the line below in an ext_localconf.php file and *adapt* it:
 *
 * $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['dataquery']['postProcessDataStructureBeforeCache'][] = 'EXT:dataquery/class.tx_dataquery_hook.php:&tx_dataquery_hook'; * * @author Your Name <your.name@domain.tld> */class tx_dataquery_hook {		/**	 * Modifies the data structure for special needs.	 * $pObj is a reference to the parent Object. Have a look at the object definition.	 *	 * @param	array		$structure: data structure	 * @param	object		$pObj: parent object	 * @return	void	 *///	public function postProcessDataStructure($structure, &$pObj) {
//		//		if ($structure['name'] == 'structureName') {//			foreach ($structure['records'] as &$record) {////			}//		}//		return $structure;//	}
		/**	 * Modifies the data structure for special needs before the structure is cached. Optimal for performance!	 * $pObj is a reference to the parent Object. Have a look at the object definition.	 *	 * @param	array		$structure: data structure	 * @param	object		$pObj: parent object	 * @return	void	 *///	public function postProcessDataStructureBeforeCache($structure, &$pObj) {//		if ($structure['name'] == 'structureName') {//			foreach ($structure['records'] as &$record) {////			}//		}//		return $structure;//	}
	}if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dataquery/class.tx_dataquery_hook.php'])	{	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/dataquery/class.tx_dataquery_hook.php']);}?>