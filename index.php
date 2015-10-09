<?php

/**
 * @file plugins/oaiMetadataFormats/epc/index.php
 *
 * Copyright (c) 2014-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_oaiMetadataFormats
 * @brief Wrapper for the OAI Epicur format plugin.
 *
 */

require_once('OAIMetadataFormatPlugin_EPC.inc.php');
require_once('OAIMetadataFormat_EPC.inc.php');

return new OAIMetadataFormatPlugin_EPC();

?>
