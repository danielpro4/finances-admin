<div id="deleteModal" class="modal modal-styled fade" data-backdrop="static">
    <form action="" method="post" id="formexcluir">
        {{ method_field('delete') }}
        {!! csrf_field() !!}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title">Exclusão</h3>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
                    <button type="submit" class="btn btn-primary">Excluir</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </form>
</div><!-- /.modal -->