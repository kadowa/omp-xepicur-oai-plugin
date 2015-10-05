<?php

/**
 * @file plugins/oaiMetadataFormats/dc/index.php
 *
 * Copyright (c) 2015 Heidelberg University
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_oaiMetadataFormats
 * @brief Wrapper for the epicur OAI format plugin.
 *
 */

require_once('OAIMetadataFormatPlugin_EPC.inc.php');
require_once('OAIMetadataFormat_EPC.inc.php');

return new OAIMetadataFormatPlugin_EPC();

?>
