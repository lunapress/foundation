<?php
declare(strict_types=1);

namespace LunaPress\Foundation\Subscriber;

use LunaPress\FoundationContracts\Subscriber\FilterSubscriber;

defined('ABSPATH') || exit;

abstract class AbstractFilterSubscriber extends AbstractSubscriber implements FilterSubscriber
{
}
