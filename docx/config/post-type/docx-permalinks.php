<?php
/**
 * Docx custom permalinks runtime configuration parameters.
 *
 * @package     KnowTheCode\Docx\Custom
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://UpTechLabs.io
 * @license     GNU General Public License 2.0+
 */

namespace KnowTheCode\Docx;

return array(
	'autoload' => true,
	'config'   => array(
		'custom_post_type'      => 'docx',
		'taxonomy'              => 'technologies',
		'rewrite_with_taxonomy' => array(
			'enable'        => true,
			'pattern'       => '%technologies%',
			'taxonomy_name' => 'technologies',
		),
		'debugger'              => false,
	),
);
