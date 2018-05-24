
<?php
include("../../br.com.autosistem.controle/controle.garantia/Garantia.php");
include("../../br.com.autosistem.modelo/modelo.garantia/CadastroGarantiaBD.php");



$codigo_solicitacao_garantia = $_POST['codigo_solicitacao_garantia'];
$pedido = $_POST['numero_pedido'];
$nota = $_POST['numero_nota'];
$codigo_produto = $_POST['codigo_produto'];
$codigo_fabricacao = $_POST['codigo_fabricacao'];
$data_fabricacao = $_POST['data_fabricacao'];
$data_compra = $_POST['data_compra'];
$lote = $_POST['lote'];
$descricao_solicitacao = $_POST['descricao_solicitacao'];
$descricao_motivo = $_POST['descricao_motivo'];
$nome_solicitante = $_POST['nome_solicitante'];
$cpf_rg_solicitante = $_POST['cpf_rg_solicitante'];
$data_solicitacao = $_POST['data_solicitacao'];
$telefone01 = $_POST['telefone01_solicitante'];
$telefone02 = $_POST['telefone02_solicitante'];
$prazo_retorno = $_POST['prazo_retorno'];
$status = $_POST['status'];
$conclusao = $_POST['conclusao'];

$cg = new Garantia();
$cg->setPedido_fk($pedido);
$cg->setNota_fk($nota);
$cg->setProduto_fk($codigo_produto);
$cg->setCodigo_fabricacao($codigo_fabricacao);
$cg->setData_fabricacao($data_fabricacao);
$cg->setData_compra($data_compra);
$cg->setLote($lote);
$cg->setDescricao_solicitacao($descricao_solicitacao);
$cg->setDescricao_motivo($descricao_motivo);
$cg->setNome_solicitante($nome_solicitante);
$cg->setCpf_rg_solicitante($cpf_rg_solicitante);
$cg->setData_solicitacao($data_solicitacao);
$cg->setTelefone01_solicitante($telefone01);
$cg->setTelefone02_solicitante($telefone02);
$cg->setPrazo_retorno($prazo_retorno);
$cg->setStatus($status);
$cg->setConclusao($conclusao);
    
$cgbd = new CadastroGarantiaBD();
$cgbd->alterar(
        $codigo_solicitacao_garantia,$cg->getPedido_fk($pedido), $cg->getNota_fk($nota), $cg->getProduto_fk($codigo_produto), 
        $cg->getCodigo_fabricacao($codigo_fabricacao), $cg->getData_fabricacao($data_fabricacao), 
        $cg->getData_compra($data_compra), $cg->getLote($lote), $cg->getDescricao_solicitacao($descricao_solicitacao), 
        $cg->getDescricao_motivo($descricao_motivo), $cg->getNome_solicitante($nome_solicitante), 
        $cg->getCpf_rg_solicitante($cpf_rg_solicitante), $cg->getData_solicitacao($data_solicitacao), 
        $cg->getTelefone01_solicitante($telefone01), $cg->getTelefone02_solicitante($telefone02), 
        $cg->getPrazo_retorno($prazo_retorno), $cg->getStatus($status), $cg->getConclusao($conclusao));

?>






