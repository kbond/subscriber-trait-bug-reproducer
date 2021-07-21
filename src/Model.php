<?php

namespace App;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
final class Model
{
    public string $something;

    public function __construct(string $something)
    {
        $this->something = $something;
    }
}
