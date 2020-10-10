<?php


namespace App\Repository\Eloquent;


use App\Models\Menu;
use App\Repository\MenuRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
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

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model::all();
    }

    /**
     * @return Paginator
     */
    public function paginate(): Paginator
    {
        return $this->model::paginate();
    }

}
