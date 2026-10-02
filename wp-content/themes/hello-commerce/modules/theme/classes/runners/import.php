<?php
namespace HelloCommerce\Modules\Theme\Classes\Runners;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

use Elementor\App\Modules\ImportExport\Runners\Import\Import_Runner_Base;
use HelloCommerce\Modules\Theme\Classes\Runners\Traits\WooCommerce_Settings_Import;

class Import extends Import_Runner_Base {
	use WooCommerce_Settings_Import;
}
