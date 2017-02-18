<?php

namespace FinancesAdmin\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const PADRAO = 'padrao';
    const SUCESSO = 'sucesso';
    const ERRO = 'erro';
    const INFO = 'info';
    const ALERTA = 'alerta';

    const INCLUSAO = 'Registro incluído com sucesso!';
    const ALTERACAO = 'Registro alterado com sucesso!';
    const EXCLUSAO = 'Registro excluído com sucesso!';
}
