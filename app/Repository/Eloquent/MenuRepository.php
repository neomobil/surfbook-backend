<?php


namespace App\Repository\Eloquent;


use App\Models\Menu;
use App\Repository\MenuRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class MenuRepository extends BaseRepository implements MenuRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param Menu $model
     */
    public function __construct(Menu $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * @inheritDoc
     */
    public function create(array $attributes): Model
    {
        // TODO: Implement create() method.
    }

    /**
     * @inheritDoc
     */
    public function find($id): ?Model
    {
        // TODO: Implement find() method.
    }
}
