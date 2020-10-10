<?php


namespace App\Repository;


use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

interface MenuRepositoryInterface extends EloquentRepositoryInterface
{
    public function all(): Collection;
    public function paginate(): Paginator;
}
