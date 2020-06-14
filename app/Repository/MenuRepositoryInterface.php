<?php


namespace App\Repository;


use Illuminate\Support\Collection;

interface MenuRepositoryInterface extends EloquentRepositoryInterface
{
    public function all(): Collection;
}
