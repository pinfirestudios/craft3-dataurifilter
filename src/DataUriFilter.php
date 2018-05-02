<?php
/**
 * dataurifilter plugin for Craft CMS 3.x
 *
 * Adds a dataUri filter to encode the file contents to work as a data URI
 *
 * @link      www.pinfirestudios.com
 * @copyright Copyright (c) 2018 Pinfire Studios
 */

namespace pinfirestudios\dataurifilter;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;

use yii\base\Event;

/**
 * Class DataUriFilter
 *
 * @author    Pinfire Studios
 * @package   Dataurifilter
 * @since     1.0.0
 *
 */
class DataUriFilter extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Dataurifilter
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Craft::$app->view->registerTwigExtension(new \DataURI\TwigExtension);

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'dataurifilter',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

}
