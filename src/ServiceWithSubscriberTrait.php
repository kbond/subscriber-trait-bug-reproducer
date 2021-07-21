<?php

namespace App;

use Symfony\Component\Routing\RouterInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class ServiceWithSubscriberTrait implements ServiceSubscriberInterface
{
    use ServiceSubscriberTrait;

    private ?Model $model;

    private function memoizeModelWithoutReturnTypeHint()
    {
        return $this->model ??= new Model('something');
    }

    private function memoizeModelWithReturnTypeHint(): Model
    {
        return $this->model ??= new Model('something');
    }

    private function router(): RouterInterface
    {
        return $this->container->get(__METHOD__);
    }
}
