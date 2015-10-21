# Epicur OAI Plugin

> The Epicur OAI plugin for [Open Monograph Press][omp] (OMP) has been developed at UB Heidelberg. It enables URN transfer via OAI using the [xepicur][xepicur] transfer format defined by the [Deutsche Nationalbibliothek][dnb] (DNB).

## Requirements

* The Epicur **OAI** Plugin relies on the [Epicur **Metadata** plugin][epc10] for OMP to format the metadata. See its [README][epc10-readme] for information on how to install and configure this plugin.

* A separate plugin is required for assigning URNs to OMP publication objects. To conform with the DNB URN requirements, install and enable the [URN DNB plugin][urn_dnb] for OMP.

## Installation

	git clone https://github.com/kadowa/omp-xepicur-oai-plugin omp/plugins/oaiMetadataFormats/epc
	php omp/tools/upgrade.php upgrade

## Bugs / Issues

You can report issues here: <https://github.com/kadowa/omp-xepicur-oai-plugin/issues>

## License

This software is released under the the [GNU General Public License][gpl-licence].

See the [COPYING][gpl-licence] included with OMP for the terms of this license.

[omp]: https://github.com/pkp/omp
[xepicur]: http://www.persistent-identifier.de/?link=210
[epc10]: https://github.com/kadowa/omp-xepicur-metadata-plugin
[epc10-readme]: https://github.com/kadowa/omp-xepicur-metadata-plugin/README.md
[urn_dnb]: https://github.com/kadowa/omp-dnb-urn-plugin
[dnb]: http://www.dnb.de
[gpl-licence]: https://github.com/pkp/omp/blob/master/docs/COPYING
