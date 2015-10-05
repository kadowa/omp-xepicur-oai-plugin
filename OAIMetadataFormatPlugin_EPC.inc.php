<?php

/**
 * @file plugins/oaiMetadataFormats/epc/OAIMetadataFormatPlugin_EPC.inc.php
 *
 * Copyright (c) 2015 Heidelberg University
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class OAIMetadataFormatPlugin_EPC
 * @ingroup oai_format
 * @see OAI
 *
 * @brief Epicur metadata format plugin for OAI.
 */

import('lib.pkp.classes.plugins.OAIMetadataFormatPlugin');

class OAIMetadataFormatPlugin_EPC extends OAIMetadataFormatPlugin {
	/**
	 * Constructor
	 */
	function OAIMetadataFormatPlugin_EPC() {
		parent::OAIMetadataFormatPlugin();
	}
	
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'OAIMetadataFormatPlugin_EPC';
	}

	function getDisplayName() {
		return __('plugins.oaiMetadata.epc.displayName');
	}

	function getDescription() {
		return __('plugins.oaiMetadata.epc.description');
	}

	function getFormatClass() {
		return 'OAIMetadataFormat_EPC';
	}

	static function getMetadataPrefix() {
		return 'oai_EPC';
	}
	
	static function getSchema() {
		return 'http://www.persistent-identifier.de/xepicur/version1.0/xepicur.xsd';
	}

	static function getNamespace() {
		return 'http://www.persistent-identifier.de/xepicur/version1.0/xepicur.xsd';
	}
}

?>
