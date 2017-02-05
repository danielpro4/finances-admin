<?php
namespace FinancesAdmin\Repositories;

use FinancesAdmin\Models\Spent;

/**
 * Class PermissionRepository
 * @package App\Repositories
 */
class SpentRepository extends BasicRepository
{
    /**
     * Define o model que será instanciado pelo repository.
     *
     * @return mixed
     */
    function model()
    {
        return Spent::class;
    }
}