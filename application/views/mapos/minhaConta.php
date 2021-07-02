

<div class="span6">
    <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="fas fa-lock"></i>
            </span>
            <h5 style="color: white;">Alterar Minha Senha</h5>
        </div>
        <div class="widget-content">
            <div class="row-fluid">
                <div class="span12" style="min-height: 260px">
                    <form id="formSenha" action="<?= site_url('mapos/alterarSenha'); ?>" method="post">

                        <div class="span12" style="margin-left: 0">
                            <label for="">Senha Atual</label>
                            <input type="password" id="oldSenha" name="oldSenha" class="span12" />
                        </div>
                        <div class="span12" style="margin-left: 0">
                            <label for="">Nova Senha</label>
                            <input type="password" id="novaSenha" name="novaSenha" class="span12" />
                        </div>
                        <div class="span12" style="margin-left: 0">
                            <label for="">Confirmar Senha</label>
                            <input type="password" name="confirmarSenha" class="span12" />
                        </div>
                        <div class="span12" style="margin-left: 0; text-align: center">
                            <button class="btn btn-primary">Alterar Senha</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


<script src="<?= base_url() ?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#formSenha').validate({
            rules: {
                oldSenha: {
                    required: true
                },
                novaSenha: {
                    required: true
                },
                confirmarSenha: {
                    equalTo: "#novaSenha"
                }
            },
            messages: {
                oldSenha: {
                    required: 'Campo Requerido'
                },
                novaSenha: {
                    required: 'Campo Requerido.'
                },
                confirmarSenha: {
                    equalTo: 'As senhas não combinam.'
                }
            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });
    });
</script>
