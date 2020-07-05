<?php

namespace App\Http\Controllers;

use App\Http\Resources\MenuResourceCollection;
use App\Repository\MenuRepositoryInterface;

class MenuController extends Controller
{
    private $menuRepository;

    public function __construct(MenuRepositoryInterface $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    /**
     * @return MenuResourceCollection
     */
    public function index()
    {
        return new MenuResourceCollection($this->menuRepository->all());
    }
}
