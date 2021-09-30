<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Open()
 * @method static static Closed()
 */
final class ShopStatusEnum extends Enum
{
    const Open =   'Open';
    const Closed =   'Closed';
}
