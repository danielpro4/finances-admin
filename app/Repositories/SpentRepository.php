<?php

namespace FinancesAdmin\Repositories;

use FinancesAdmin\Models\Spent;

/**
 * Class PermissionRepository.
 */
class SpentRepository extends BasicRepository
{
    /**
     * Define o model que será instanciado pelo repository.
     *
     * @return mixed
     */
    public function model()
    {
        return Spent::class;
    }

}