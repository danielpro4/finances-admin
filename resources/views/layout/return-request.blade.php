@if( !empty(Session::has('padrao')) )
    <script>
        var options = {
            type: '',
            title: 'Mensagem',
            content: '{{Session::get('padrao')}}',
            lifetime: 5500,
            iconCls: 'fa fa-envelope'
        };
        $.howl (options);
    </script>
@endif
@if( !empty(Session::has('sucesso')) )
    <script>
        var options = {
            type: 'success',
            title: 'Sucesso',
            content: '{{Session::get('sucesso')}}',
            lifetime: 5500,
            iconCls: 'fa fa-check-square-o'
        };
        $.howl (options);
    </script>
@endif
@if( !empty(Session::has('alerta')) )
    <script>
        var options = {
            type: 'warning',
            title: 'Alerta',
            content: '{{Session::get('alerta')}}',
            lifetime: 5500,
            iconCls: 'fa fa-exclamation'
        };
        $.howl (options);
    </script>
@endif
@if( !empty(Session::has('erro')) )
    <script>
        var options = {
            type: 'danger',
            title: 'Erro',
            content: '{{Session::get('erro')}}',
            lifetime: 5500,
            iconCls: 'fa fa-ban'
        };
        $.howl (options);
    </script>
@endif
@if( !empty(Session::has('info')) )
    <script>
        var options = {
            type: 'info',
            title: 'Informação',
            content: '{{Session::get('info')}}',
            lifetime: 5500,
            iconCls: 'fa fa-info'
        };
        $.howl (options);
    </script>
@endif