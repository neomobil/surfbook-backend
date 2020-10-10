<?php


namespace App\Repository;


use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface
{

    /**
     * @param $id
     * @return Model
     */
    public function getById($id): ?Model;
}
