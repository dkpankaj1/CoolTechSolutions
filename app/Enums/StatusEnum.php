<?php

namespace App\Enums;

enum StatusEnum :string
{
    case PENDING = "pending";
    case PROCESSING = "processing";
    case COMPLETE = "complete";
}
