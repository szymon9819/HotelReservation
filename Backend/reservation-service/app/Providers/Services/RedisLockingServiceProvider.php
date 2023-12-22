<?php

declare(strict_types=1);

namespace App\Providers\Services;

use App\Services\DistributedLock\LockingServiceInterface;
use App\Services\DistributedLock\RedisLockingService;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\ServiceProvider;

final class RedisLockingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(LockingServiceInterface::class, function (): RedisLockingService {
            $redisConnection = Redis::connection('lock');
            return new RedisLockingService($redisConnection);
        });
    }
}
