<?php

declare(strict_types=1);

namespace App\Providers\Services;

use App\Services\Room\RoomLockingService;
use App\Services\Room\RoomLockingServiceInterface;
use Illuminate\Support\ServiceProvider;
use Override;

final class RoomLockingServiceProvider extends ServiceProvider
{
    #[Override]
    public function register(): void
    {
        $this->app->bind(RoomLockingServiceInterface::class, RoomLockingService::class);
    }
}
