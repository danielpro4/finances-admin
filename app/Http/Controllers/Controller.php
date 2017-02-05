<?php

namespace FinancesAdmin\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

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
