<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>js/dist/excanvas.min.js"></script><![endif]-->

<script language="javascript" type="text/javascript" src="<?= base_url(); ?>assets/js/dist/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/dist/plugins/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/dist/plugins/jqplot.donutRenderer.min.js"></script>
<script src='<?= base_url(); ?>assets/js/fullcalendar.min.js'></script>
<script src='<?= base_url(); ?>assets/js/fullcalendar/locales/pt-br.js'></script>

<link href='<?= base_url(); ?>assets/css/fullcalendar.min.css' rel='stylesheet' />
<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/js/dist/jquery.jqplot.min.css" />

<!--Action boxes-->
<div class="container-fluid">
    <div class="quick-actions_homepage">
        <ul class="quick-actions">
            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) : ?>
                <li style="border-radius: 5px; background: #1f262d;" class="bg_lb">
                    <a href="<?= base_url() ?>index.php/clientes"> <i class="fas fa-users" style="font-size:36px"></i>
                        <div>Clientes <span style="background-color: #ff9900; margin: 5px;" class="badge badge-light">F1</span></div>
                    </a>
                </li>
            <?php endif ?>

            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) : ?>
                <li style="border-radius: 5px; background: #1f262d;"class="bg_lg">
                    <a href="<?= base_url() ?>index.php/produtos"> <i class="fas fa-shopping-bag" style="font-size:36px"></i>
                        <div>Produtos <span style="background-color: #ff9900; margin: 5px;" class="badge badge-light">F2</span></div>
                    </a>
                </li>
            <?php endif ?>

            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) : ?>
                <li style="border-radius: 5px; background: #1f262d;"class="bg_ly">
                    <a href="<?= base_url() ?>index.php/servicos"> <i class="fas fa-wrench" style="font-size:36px"></i>
                        <div>Serviços <span style="background-color: #ff9900; margin: 5px;" class="badge badge-light">F3</span></div>
                    </a>
                </li>
            <?php endif ?>

            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) : ?>
                <li style="border-radius: 5px; background: #1f262d;"class="bg_lo">
                    <a href="<?= base_url() ?>index.php/os"> <i class="fas fa-diagnoses" style="font-size:36px"></i>
                        <div>OS <span style="background-color: #ff9900; margin: 5px;" class="badge badge-light">F4</span></div>
                    </a>
                </li>
            <?php endif ?>

            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) : ?>
                <li style="border-radius: 5px; background: #1f262d;"class="bg_ls">
                    <a href="<?= base_url() ?>index.php/vendas"><i class="fas fa-cash-register" style="font-size:36px"></i>
                        <div>Vendas <span style="background-color: #ff9900; margin: 5px;" class="badge badge-light">F6</span></div>
                    </a>
                </li>
            <?php endif ?>

            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vGarantia')) : ?>
                <li style="border-radius: 5px; background: #1f262d;"class="bg_ls">
                    <a href="<?= base_url() ?>index.php/garantias"><i class="fas fa-book" style="font-size:36px"></i>
                        <div>Termo Garantia <span style="background-color: #ff9900; margin: 5px;" class="badge badge-light">F7</span></div>
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </div>
</div>
<!--End-Action boxes-->

<div class="row-fluid" style="margin-top: 0">
    <div  class="span12">
        <div style="border-radius: 5px 5px 0px 0px;" class="widget-box">
            <div style="background-color: #1f262d; border-radius: 5px 5px 0px 0px;" class="widget-title">
                <span class="icon"><i style="color: white; border: none;" class="fas fa-calendar"></i></span>
                <h5 style="color: white; border: none;">Agenda</h5>
            </div>
            <div style="border-radius: 5px 5px 0px 0px !important;" class="widget-content">
                <table class="table table-bordered">

                    <div id='source-calendar'>
                        <form method="post">
                            <center><select style="width: 100% !important; text-align: center; border: none; background-color: #fff !important; border: 1px solid #1f262d; height: 40px; color: #1f262d; border-radius: 5px; margin: 15px;" class="span12" name="statusOsGet" id="statusOsGet" value=""></center>
                                <option value="">Todos os Status</option>
                                <option value="Aberto">Aberto</option>
                                <option value="Faturado">Faturado</option>
                                <option value="Negociação">Negociação</option>
                                <option value="Orçamento">Orçamento</option>
                                <option value="Em Andamento">Em Andamento</option>
                                <option value="Finalizado">Finalizado</option>
                                <option value="Cancelado">Cancelado</option>
                                <option value="Aguardando Peças">Aguardando Peças</option>
                                <option value="Aprovado">Aprovado</option>
                            </select>
                            <center><button style="width: 20% !important; text-align: center; border: none; background-color: #1f262d !important; height: 40px; color: white; border-radius: 5px; margin-bottom: 10px;" type="button" class="btn-xs" id="btn-calendar">Pesquisar</button></center>
                        </form>

                    </div>

                </table>
            </div>
        </div>
    </div>


    <!-- DESATIVADO -->
    <!-- <div class="span12" style="margin-left: 0">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="fas fa-diagnoses"></i></span>
                <h5 style="color: white">Jobs em aberto</h5>
            </div>
            <div class="widget-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="background-color: #fff !important; border-radius; 0px !important;">ID do Job</th>
                            <th style="background-color: #fff !important; border-radius; 0px !important;">Data Inicial</th>
                            <th style="background-color: #fff !important; border-radius; 0px !important;">Data Final</th>
                            <th style="background-color: #fff !important; border-radius; 0px !important;">Cliente</th>
                            <th style="background-color: #fff !important; border-radius; 0px !important;">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($ordens != null) : ?>
                            <?php foreach ($ordens as $o) : ?>
                                <tr>
                                    <td>
                                        <?= $o->idOs ?>
                                    </td>
                                    <td>
                                        <?= date('d/m/Y', strtotime($o->dataInicial)) ?>
                                    </td>

                                    <td><?php if ($o->dataFinal != null) {
    echo date('d/m/Y', strtotime($o->dataFinal));
} else {
    echo "";
} ?></td>

                                    <td>
                                        <?= $o->nomeCliente ?>
                                    </td>
                                    <td>
                                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) : ?>
                                            <a href="<?= base_url() ?>index.php/os/visualizar/<?= $o->idOs ?>" class="btn">
                                                <i class="fas fa-eye"></i> </a>
                                        <?php endif ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="3">Nenhum JOB em aberto.</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->
    

<!-- Modal Status OS Calendar -->
<div id="calendarModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Status OS Detalhada</h3>
    </div>
    <div class="modal-body">
        <div class="span12" id="divFormStatusOS" style="margin-left: 0"></div>
        <h4><b>OS:</b> <span id="modalId" class="modal-id"></span></h4>
        <h5 id="modalCliente" class="modal-cliente"></h5>
        <div id="modalDataInicial" class="modal-DataInicial"></div>
        <div id="modalDataFinal" class="modal-DataFinal"></div>
        <div id="modalGarantia" class="modal-Garantia"></div>
        <div id="modalStatus" class="modal-Status"></div>
        <div id="modalDescription" class="modal-Description"></div>
        <div id="modalDefeito" class="modal-Defeito"></div>
        <div id="modalObservacoes" class="modal-Observacoes"></div>
        <div id="modalTotal" class="modal-Total"></div>
        <div id="modalValorFaturado" class="modal-ValorFaturado"></div>
    </div>
    <div class="modal-footer">
        <?php
        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) {
            echo '<a id="modalIdVisualizar" style="margin-right: 1%" href="" class="btn tip-top" title="Ver mais detalhes"><i class="fas fa-eye"></i></a>';
        }
        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eOs')) {
            echo '<a id="modalIdEditar" style="margin-right: 1%" href="" class="btn btn-info tip-top" title="Editar OS"><i class="fas fa-edit"></i></a>';
        }
        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dOs')) {
            echo '<a id="linkExcluir" href="#modal-excluir-os" role="button" data-toggle="modal" os="" class="btn btn-danger tip-top" title="Excluir OS"><i class="fas fa-trash-alt"></i></a>  ';
        }
        ?>
    </div>
</div>

<!-- Modal Excluir Os -->
<div id="modal-excluir-os" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="<?php echo base_url() ?>index.php/os/excluir" method="post">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Excluir OS</h5>
        </div>
        <div class="modal-body">
            <input type="hidden" id="modalIdExcluir" name="id" value="" />
            <h5 style="text-align: center">Deseja realmente excluir esta OS?</h5>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
            <button class="btn btn-danger">Excluir</button>
        </div>
    </form>
</div>

<!-- Modal Estoque -->
<div id="atualizar-estoque" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="<?php echo base_url() ?>index.php/produtos/atualizar_estoque" method="post" id="formEstoque">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel"><i class="fas fa-plus-square"></i> Atualizar Estoque</h5>
        </div>
        <div class="modal-body">
            <div class="control-group">
                <label for="estoqueAtual" class="control-label">Estoque Atual</label>
                <div class="controls">
                    <input id="estoqueAtual" type="text" name="estoqueAtual" value="" readonly />
                </div>
            </div>

            <div class="control-group">
                <label for="estoque" class="control-label">Adicionar Produtos<span class="required">*</span></label>
                <div class="controls">
                    <input type="hidden" id="idProduto" class="idProduto" name="id" value="" />
                    <input id="estoque" type="text" name="estoque" value="" />
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
            <button class="btn btn-primary">Atualizar</button>
        </div>
    </form>
</div>

<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<!-- Modal Estoque-->
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', 'a', function(event) {
            var produto = $(this).attr('produto');
            var estoque = $(this).attr('estoque');
            $('.idProduto').val(produto);
            $('#estoqueAtual').val(estoque);
        });

        $('#formEstoque').validate({
            rules: {
                estoque: {
                    required: true,
                    number: true
                }
            },
            messages: {
                estoque: {
                    required: 'Campo Requerido.',
                    number: 'Informe um número válido.'
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

        var srcCalendarEl = document.getElementById('source-calendar');
        var srcCalendar = new FullCalendar.Calendar(srcCalendarEl, {
            locale: 'pt-br',
            height: 500,
            editable: false,
            selectable: false,
            businessHours: true,
            dayMaxEvents: true, // allow "more" link when too many events
            displayEventTime: false,
            events: {
                url: "<?= base_url() . "index.php/mapos/calendario"; ?>",
                method: 'GET',
                extraParams: function() { // a function that returns an object
                    return {
                        status: $("#statusOsGet").val(),
                    };
                },
                failure: function() {
                    alert('Falha ao buscar OS de calendário!');
                },
            },
            eventClick: function(info) {
                var eventObj = info.event.extendedProps;
                $('#modalId').html(eventObj.id);
                $('#modalIdVisualizar').attr("href", "<?php echo base_url(); ?>index.php/os/visualizar/" + eventObj.id);
                if (eventObj.editar) {
                    $('#modalIdEditar').show();
                    $('#linkExcluir').show();
                    $('#modalIdEditar').attr("href", "<?php echo base_url(); ?>index.php/os/editar/" + eventObj.id);
                    $('#modalIdExcluir').val(eventObj.id);
                } else {
                    $('#modalIdEditar').hide();
                    $('#linkExcluir').hide();
                }
                $('#modalCliente').html(eventObj.cliente);
                $('#modalDataInicial').html(eventObj.dataInicial);
                $('#modalDataFinal').html(eventObj.dataFinal);
                $('#modalGarantia').html(eventObj.garantia);
                $('#modalStatus').html(eventObj.status);
                $('#modalDescription').html(eventObj.description);
                $('#modalDefeito').html(eventObj.defeito);
                $('#modalObservacoes').html(eventObj.observacoes);
                $('#modalTotal').html(eventObj.total);
                $('#modalValorFaturado').html(eventObj.valorFaturado);

                $('#eventUrl').attr('href', event.url);
                $('#calendarModal').modal();
            },
        });

        srcCalendar.render();

        $('#btn-calendar').on('click', function() {
            srcCalendar.refetchEvents();
        });
    });
</script>
