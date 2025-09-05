<?php

namespace App\Enums;

use App\Traits\BaseEnum;

enum PlanStatus: int
{
    use BaseEnum;
    
    case ACTIVE = 1;
    case INACTIVE = 0;
}
