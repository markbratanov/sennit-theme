<?php namespace Markbratanov\SennitTheme;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class StarterThemeServiceProvider
 *
 * @author        Mark Bratanov <markbratanov@gmail.com>
 * @package       Markbratanov\SennitTheme
 */
class SennitThemeServiceProvider extends AddonServiceProvider
{

    /**
     * The view overrides.
     *
     * @var array
     */
    protected $overrides = [
        'streams::errors/404' => 'theme::errors/404',
        'streams::errors/500' => 'theme::errors/500'
    ];

}
