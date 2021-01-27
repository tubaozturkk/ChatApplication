<?php

declare(strict_types=1);

namespace App\Services\Room;

use App\Entity\Room;
use App\Repository\RoomRepository;
use App\Services\BaseService;
use Respect\Validation\Validator as v;

abstract class Base extends BaseService
{
    protected RoomRepository $roomRepository;

    public function __construct(
        RoomRepository $roomRepository,
    ) {
        $this->roomRepository = $roomRepository;
    }
}
