@extends('layout.main')

@section('content')

    <div class="col-sm-12">

        <div class="clearfix">
            <a href="{{ route('spent.create') }}" class="btn btn-secondary pull-right">Novo</a>
        </div>

        <h4 class="heading">
            Gastos
        </h4>

        @if(isset($spents) && count($spents) > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-highlight media-table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th style="width: 500px;">Descrição</th>
                        <th>Valor</th>
                        <th style="width: 150px;">Data Vencimento</th>
                        <th style="width: 150px;">Data Pagamento</th>
                        <th class="text-center">Opções</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($spents as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->description }}</td>
                            <td>{{ $s->value }}</td>
                            <td>{{ $s->dueDate->format('d/m/Y') }}</td>
                            <td>{{ $s->paymentDate->format('d/m/Y') }}</td>
                            <td class="text-center">
                                <a href="{{ route('spent.edit', $s->id) }}" class="btn btn-xs btn-tertiary"><i
                                            class="fa fa-pencil"></i></a>
                                &nbsp;
                                <a data-id="{{$s->id}}" href="#modal" class="btn btn-xs btn-primary"><i
                                            class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$spents->links()}}
            </div>
        @else
            <ul class="icons-list notifications-list">
                <li>
                    <i class="icon-li fa fa-ban text-danger"></i>
                    <p>Não existe nehum gasto cadastrado.</p>
                </li>
            </ul>
        @endif
    </div>

@endsection

@section('custom')
    @include('layout.delete-modal')
@endsection

@section('js-custom')

    <script>
        $(function () {
            var deleteModal = $('div#deleteModal');

            $("a[href='#modal']").click(function (event) {
                event.preventDefault();
                var id = $(this).data('id');

                deleteModal.find('.modal-body p').html('Tem certeza que deseja remover o gasto selecionado?');

                $('#formexcluir').attr("action", "spents/destroy/" + id);
                deleteModal.modal('show');
            });
        });
    </script>
@endsection

