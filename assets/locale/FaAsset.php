<?php
/**
 * FaAsset.php
 *
 * Yii2 asset for Moment Locale
 * http://momentjs.com
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @license MIT
 *
 * @package p2made/yii2-p2y2-moment-timezone
 * @class \p2m\assets\locale\FaAsset
 */

/**
 * Load this asset with...
 * p2m\assets\locale\FaAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\assets\locale\FaAsset',
 */

namespace p2m\assets\locale;

class FaAsset extends \p2m\assets\base\P2MomentAssetBase
{
	protected $version = $this->momentVersion;

	private $resourceData = array(
		'published' => [
			'sourcePath' => '@p2m@/moment-##-version-##/locale',
			'js' => [
				'fa.js'
			],
		],
		'static' => [
			'baseUrl' => '//cdnjs.cloudflare.com/ajax/libs/moment.js/##-version-##/locale',
			'js' => [
				'fa.js',
			],
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
