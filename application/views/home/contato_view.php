<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h2 class="text-center">Contato</h2>
        <p class="">Entre em contato através dos telefones: <span style="font-weight: bolder;">(54) 3045.2215 / (54) 3632.6007</span></p>
        <p class="">E-mail: <a href="mailto:advocacia@hosang.adv.br">advocacia@hosang.adv.br</a> </p>
        <p class="">Ou preencha o formulário abaixo.</p>
            <div class="panel-body">
                <form action="<?= site_url('home/send') ?>" method="post">
                    <label>Seu nome</label>
                    <input type="text" name="nome" class="form-control" value="<?php if(isset($req['nome'])){echo $req['nome'];}?>" />
                    <label>E-mail</label>
                    <input type="text" name="email" class="form-control"  value="<?php if(isset($req['email'])){echo $req['email'];}?>"/>
                    <label>Telefone para contato</label>
                    <input type="text" name="telefone" class="form-control"  value="<?php if(isset($req['telefone'])){echo $req['telefone'];}?>" />
                    <!--br>
                    <label>Motivo do contato</label>
                    <select name="motivo" class="form-control selectpicker" data-live-search="true">
                        <option value="1">Dúvida</option>
                        <option value="2">Sugestão</option>
                        <option value="3">Reclamação</option>
                    </select-->
                    <label>Assunto</label>
                    <input type="text" name="titulo" class="form-control"  value="<?php if(isset($req['titulo'])){echo $req['titulo'];}?>"/>
                    <label>Mensagem</label>
                    <textarea name="mensagem" style="resize: none;" rows="6" class="form-control"><?php if(isset($req['mensagem'])){echo $req['mensagem'];}?></textarea>
                    <br>
                    <div class="text-right"><?= btn("Enviar", "primary") ?></div>
                </form>
            </div>
    </div>
    <div class="col-md-3"></div>
</div>
