<?php

/**
 * @defgroup oai_format_epc Epicur OAI format plugin
 */

/**
 * @file plugins/oaiMetadataFormats/epc/OAIMetadataFormat_EPC.inc.php
 *
 * Copyright (c) 2014-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class OAIMetadataFormat_EPC
 * @ingroup oai_format_epc
 * @see OAI
 *
 * @brief OAI metadata format class -- Epicur.
 */

import('plugins.metadata.epc10.schema.Epc10Schema');
import('plugins.metadata.epc10.filter.Epc10DescriptionXmlFilter');

class OAIMetadataFormat_EPC extends OAIMetadataFormat {
	
	/**
	 * @copydoc OAIMetadataFormat::toXML
	 */
	function toXml(&$record, $format = null) {
		$publicationFormat =& $record->getData('publicationFormat');
		$monograph =& $record->getData('monograph');

 		$description = $monograph->extractMetadata(new Epc10Schema());
		
		$xmlFilter = new Epc10DescriptionXmlFilter(PersistableFilter::tempGroup(
				'metadata::plugins.metadata.epc10.schema.Epc10Schema(*)',
				'xml::schema(plugins/metadata/epc10/filter/xepicur.xsd)'));
		
		//FIXME: Hack to remove the duplicate XML document declarations
		$response = substr($xmlFilter->process($description), 39);
		
		return $response;
	}
}

?>
