<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Daniel Lienert <lienert@punkt.de>, Michael Knoll <knoll@punkt.de>,
*  Christoph Ehscheidt <ehscheidt@punkt.de
*  All rights reserved
*
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

class Tx_PtExtlist_Domain_Configuration_Renderer_RendererConfiguration {

	protected $settings = array();
	protected $columnConfigCollection = null;
	
	public function __construct(array $settings) {
		$this->settings = $settings;
	}
	
	public function getSettings() {
		return $this->settings;
	}
	
	public function setColumnConfigCollection(Tx_PtExtlist_Domain_Configuration_Columns_ColumnConfigCollection $columnConfigCollection) {
		$this->columnConfigCollection = $columnConfigCollection;
	}
	
	public function getColumnConfigCollection() {
		return $this->columnConfigCollection;
	}
	
	public function isEnabled() {
		if($this->settings['enabled'] == '1') {
			return true;
		}
		return false;
	}
	
	public function showCaptionsInBody() {
		if($this->settings['showCaptionsInBody'] == '1') {
			return true;
		}
		return false;
	}
}

?>