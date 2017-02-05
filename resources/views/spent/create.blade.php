@extends('layout.main')

@section('css-plugins')
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
@endsection

@section('content')

    <div class="portlet">

        <div class="portlet-header">

            <h3>
                <i class="fa fa-tasks"></i>
                Novo Gasto
            </h3>

        </div> <!-- /.portlet-header -->

        <div class="portlet-content">

            <form id="validate-basic" method="post" action="{{ route('spent.store') }}" data-validate="parsley"
                  class="form parsley-form form-horizontal">

                {{csrf_field()}}

                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="description">Descrição</label>
                        <input type="text" id="description" name="description" class="form-control"
                               data-required="true">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-4">
                        <label for="value">Valor</label>
                        <input type="text" id="value" name="value" class="form-control" data-required="true">
                    </div>

                    <div class="col-sm-4">
                        <label for="dueDate">Data Vencimento</label>

                        <div class="input-group date ui-datepicker" data-date-format="dd/mm/yyyy">
                            <input id="dueDate" name="dueDate" class="form-control" type="text" data-required="true">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <label for="paymentDate">Data Pagamento</label>

                        <div class="input-group date ui-datepicker" data-date-format="dd/mm/yyyy">
                            <input id="paymentDate" name="paymentDate" class="form-control" type="text">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                </div>

                <br>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-secondary">Gravar</button>
                        <a href="{{route('spent.index')}}" class="btn btn-default">Voltar</a>
                    </div>
                </div>

            </form>

        </div> <!-- /.portlet-content -->

    </div> <!-- /.portlet -->

@endsection

@section('js-plugins')
    <script src="{{ asset('js/parsley.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('js/jquery.priceformat.min.js') }}"></script>
    <script>
        $('#value').priceFormat({
            prefix: 'R$ ',
            clearPrefix: true,
            centsSeparator: ',',
            thousandsSeparator: '.'
        });
    </script>
@endsection

