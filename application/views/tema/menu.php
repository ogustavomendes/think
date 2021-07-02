<!--sidebar-menu-->
    <center>
<div style="background-color: #1f262d !important" id="sidebar"> <a href="#" class="visible-phone"><i class="fas fa-list"></i> Menu</a>
    <ul>
            <li style="width: 80% !important; margin:  1px; text-align: left; border-radius: 3px;" class="<?php if (isset($menuPainel)) {
    echo 'active';
}; ?>"><a href="<?= base_url() ?>"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCliente')) { ?>
            
            <li style="width: 80% !important; margin:  1px; text-align: left; border-radius: 3px;" class="<?php if (isset($menuClientes)) {
    echo 'active';
}; ?>"><a href="<?= site_url('clientes') ?>"><i class="fas fa-users"></i> <span>Cliente / Fornecedor</span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) { ?>
            
            <li style="width: 80% !important; margin:  1px; text-align: left; border-radius: 3px;" class="<?php if (isset($menuProdutos)) {
            echo 'active';
        }; ?>"><a href="<?= site_url('produtos') ?>"><i class="fas fa-shopping-bag"></i> <span>Produtos</span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) { ?>
            
            <li style="width: 80% !important; margin:  1px; text-align: left; border-radius: 3px;" class="<?php if (isset($menuServicos)) {
            echo 'active';
        }; ?>"><a href="<?= site_url('servicos') ?>"><i class="fas fa-wrench"></i> <span>Serviços</span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vOs')) { ?>
            
            <li style="width: 80% !important; margin:  1px; text-align: left; border-radius: 3px;" class="<?php if (isset($menuOs)) {
            echo 'active';
        }; ?>"><a href="<?= site_url('os') ?>"><i class="fas fa-diagnoses"></i> <span>Ordens de Serviço</span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) { ?>
            
            <li style="width: 80% !important; margin:  1px; text-align: left; border-radius: 3px;" class="<?php if (isset($menuVendas)) {
            echo 'active';
        }; ?>"><a href="<?= site_url('vendas') ?>"><i class="fas fa-cash-register"></i> <span>Vendas</span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vGarantia')) { ?>
            
            <li style="width: 80% !important; margin:  1px; text-align: left; border-radius: 3px;" class="<?php if (isset($menuGarantia)) {
            echo 'active';
        }; ?>"><a href="<?= site_url('garantias') ?>"><i class="fas fa-book"></i> <span>Termos de Garantias</span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vArquivo')) { ?>
            
            <li style="width: 80% !important; margin:  1px; text-align: left; border-radius: 3px;" class="<?php if (isset($menuArquivos)) {
            echo 'active';
        }; ?>"><a href="<?= site_url('arquivos') ?>"><i class="fas fa-hdd"></i> <span>Arquivos</span></a></li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vLancamento')) { ?>
            
            <li style="width: 80% !important; margin:  1px; text-align: left; border-radius: 3px;" class="submenu <?php if (isset($menuFinanceiro)) {
            echo 'active open';
        }; ?>">
                <a href="#"><i class="fas fa-hand-holding-usd"></i> <span>Financeiro</span> <span class="label"><i class="fas fa-chevron-down"></i></span></a>
                <ul>
                    <li style=" text-align: left; margin:  1px; border-radius: 3px;" class="<?php if (isset($menuFinanceiro) && $menuFinanceiro == 'financeiro') {
            echo 'active';
        }; ?>"><a href="<?= site_url('financeiro/lancamentos') ?>">Lançamentos</a></li>
                    <li style=" text-align: left; margin:  1px; border-radius: 3px;" class="<?php if (isset($menuFinanceiro) && $menuFinanceiro == 'cobrancas') {
            echo 'active';
        }; ?>"><a href="<?= site_url('cobrancas/cobrancas') ?>">Cobranças</a></li>
                </ul>
            </li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rCliente') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rProduto') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rServico') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rOs') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro') || $this->permission->checkPermission($this->session->userdata('permissao'), 'rVenda')) { ?>
            <li style="width: 80% !important; margin:  1px; text-align: left; border-radius: 3px;" class="submenu <?php if (isset($menuRelatorios)) {
            echo 'active open';
        }; ?>">
                <a href="#"><i class="fas fa-list-alt"></i> <span>Relatórios</span> <span class="label"><i class="fas fa-chevron-down"></i></span></a>
                <ul>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rCliente')) { ?>
                        <li style=" text-align: left; margin:  1px; border-radius: 3px;"><a href="<?= site_url('relatorios/clientes') ?>">Clientes</a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rProduto')) { ?>
                        <li style=" text-align: left; margin:  1px; border-radius: 3px;"><a href="<?= site_url('relatorios/produtos') ?>">Produtos</a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rServico')) { ?>
                        <li style=" text-align: left; margin:  1px; border-radius: 3px;"><a href="<?= site_url('relatorios/servicos') ?>">Serviços</a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rOs')) { ?>
                        <li style=" text-align: left; margin:  1px; border-radius: 3px;"><a href="<?= site_url('relatorios/os') ?>">Ordens de Serviço</a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rVenda')) { ?>
                        <li style=" text-align: left; margin:  1px; border-radius: 3px;"><a href="<?= site_url('relatorios/vendas') ?>">Vendas</a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rGarantia')) { ?>
                        <li style=" text-align: left; margin:  1px; border-radius: 3px;"><a href="<?= site_url('relatorios/Garantias') ?>">Termo Garantia</a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro')) { ?>
                        <li style=" text-align: left; margin:  1px; border-radius: 3px;"><a href="<?= site_url('relatorios/financeiro') ?>">Financeiro</a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro') && $this->permission->checkPermission($this->session->userdata('permissao'), 'rOs')) { ?>
                        <li style=" text-align: left; margin:  1px; border-radius: 3px;"><a href="<?= site_url('relatorios/sku') ?>">SKU</a></li>
                        <?php
                    } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro') && $this->permission->checkPermission($this->session->userdata('permissao'), 'rOs')) { ?>
                        <li style=" text-align: left; margin:  1px; border-radius: 3px;"><a href="<?= site_url('relatorios/receitasBrutasMei') ?>">Receitas Brutas - MEI</a></li>
                        <?php
                    } ?>
                </ul>
            </li>
            <?php
        } ?>
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')  || $this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente') || $this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao') || $this->permission->checkPermission($this->session->userdata('permissao'), 'cBackup')) { ?>
            <li style="width: 80% !important; margin:  1px; text-align: left; border-radius: 3px;" class="submenu <?php if (isset($menuConfiguracoes)) {
            echo 'active open';
        }; ?>">
                <a href="#"><i class="fas fa-cog"></i> <span>Configurações</span> <span class="label"><i class="fas fa-chevron-down"></i></span></a>
                <ul>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cSistema')) { ?>
                        <li style="text-align: left; margin:  1pxb order-;radius: 3px;"><a href="<?= site_url('mapos/configurar') ?>">Sistema</a></li>
                    <?php } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) { ?>
                        <li style="text-align: left; margin:  1pxb order-;radius: 3px;"><a href="<?= site_url('usuarios') ?>">Usuários</a></li>
                    <?php } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cEmitente')) { ?>
                        <li style="text-align: left; margin:  1pxb order-;radius: 3px;"><a href="<?= site_url('mapos/emitente') ?>">Emitente</a></li>
                    <?php } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao')) { ?>
                        <li style="text-align: left; margin:  1pxb order-;radius: 3px;"><a href="<?= site_url('permissoes') ?>">Permissões</a></li>
                    <?php } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cAuditoria')) { ?>
                        <li style="text-align: left; margin:  1pxb order-;radius: 3px;"><a href="<?= site_url('auditoria') ?>">Auditoria</a></li>
                    <?php } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cEmail')) { ?>
                        <li style="text-align: left; margin:  1pxb order-;radius: 3px;"><a href="<?= site_url('mapos/emails') ?>">Emails</a></li>
                    <?php } ?>
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cBackup')) { ?>
                        <li style="text-align: left; margin:  1pxb order-;radius: 3px;"><a href="<?= site_url('mapos/backup') ?>">Backup</a></li>
                    <?php } ?>
                </ul>
            </li>
            <?php
        } ?>

        <li>
            <a style="width: 80% !important; text-align: left; border-radius: 3px;" class="text-white" href="<?= site_url('login/sair'); ?>"><i class="fas fa-sign-out-alt"></i> <span>Sair</span></a>
        </li>

    </ul>
    </center>
</div>
