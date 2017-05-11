<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title text-center">Contato</div>
            </div>
            <div class="panel-body">
                <form action="<?= site_url('mensageiro/contato') ?>" method="post">
                    <label>Motivo</label>
                    <select name="motivo" class="form-control selectpicker" data-live-search="true">
                        <option value="1">Dúvida</option>
                        <option value="2">Sugestão</option>
                        <option value="3">Reclamação</option>
                    </select>
                    <br>
                    <br>
                    <label>Título</label>
                    <input type="text" name="titulo" class="form-control"/>
                    <br>
                    <label>Mensagem</label>
                    <textarea name="mensagem" style="resize: none;" rows="6" class="form-control"></textarea>
                    <br>
                    <div class="text-right"><?= btn("Enviar", "default") ?></div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
