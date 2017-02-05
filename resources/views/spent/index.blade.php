@extends('layout.main')

@section('content')

    <div class="col-sm-12">

        <h4 class="heading">
            Gastos
        </h4>

        <table class="table table-bordered table-highlight">
            <thead>
            <tr>
                <th>#</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Data Vencimento</th>
                <th>Data Pagamento</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Larry</td>
                <td>Smith</td>
                <td>@lsmith</td>
                <td>
                    <span class="label label-primary">Approved</span>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Mark</td>
                <td>Williams</td>
                <td>@mwills</td>
                <td>
                    <span class="label label-secondary">Pending</span>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Jeremy</td>
                <td>Jones</td>
                <td>@jj</td>
                <td>
                    <span class="label label-success">Success</span>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Carlos</td>
                <td>Martin</td>
                <td>@cmar</td>
                <td>
                    <span class="label label-default">Suspended</span>
                </td>
            </tr>
            </tbody>
        </table>

    </div>

@endsection