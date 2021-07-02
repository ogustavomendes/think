<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title><?= $this->config->item('app_name') ?> </title>
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery-1.12.4.min.js"></script>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
.full-height {
  height: 100%;
  background: yellow;
}
    </style>
</head>

<body>

<div class="container-fluid full_height">
        <div class="full_height row">
            <div class="full_height col-4">

                <!-- FORMULÁRIO -->
                <form class="form-vertical" id="formLogin" method="post" action="<?= site_url('login/verificarLogin') ?>">
                            <div class="main_input_box">
                                <span class="add-on bg_lg"><i class="fas fa-user"></i></span><input id="email" name="email" type="text" placeholder="Email" />
                            </div>
                            <div>
                                <span><i class="fas fa-lock"></i></span><input name="senha" type="password" placeholder="Senha" />
                            </div>
                        <button id="btn-acessar"/> Acessar</button></form>

            </div>

                <div class="full-height">I am a DIV that will stretch to fit the whole width and height of the browser window!</div>
           
            </div>
    </div>


    <div>
        <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/js/validate.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {

                $('#email').focus();
                $("#formLogin").validate({
                    rules: {
                        email: {
                            required: true,

                        },
                        senha: {
                            required: true
                        }
                    },
                    messages: {
                        email: {
                            required: 'Campo Requerido.',
                            email: 'Insira Email válido'
                        },
                        senha: {
                            required: 'Campo Requerido.'
                        }
                    },
                    submitHandler: function(form) {
                        var dados = $(form).serialize();
                        $('#btn-acessar').addClass('disabled');
                        $('#progress-acessar').removeClass('hide');

                        $.ajax({
                            type: "POST",
                            url: "<?= site_url('login/verificarLogin?ajax=true'); ?>",
                            data: dados,
                            dataType: 'json',
                            success: function(data) {
                                if (data.result == true) {
                                    window.location.href = "<?= site_url('mapos'); ?>";
                                } else {


                                    $('#btn-acessar').removeClass('disabled');
                                    $('#progress-acessar').addClass('hide');
                                    
                                    $('#message').text(data.message || 'Os dados de acesso estão incorretos, por favor tente novamente!');
                                    $('#call-modal').trigger('click');
                                }
                            }
                        });

                        return false;
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
    </div>

</body>

</html>
