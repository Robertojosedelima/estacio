
<?php
include("../../br.com.autosistem.controle/controle.complemento/ComplementoProduto.php");
include("../../br.com.autosistem.modelo/modelo.complemento/CadastroComplementoProdutoBD.php");




$codigo_complemento_produto = $_POST['codigo_complemento_produto'];
$codigo_fabricacao = $_POST['codigo_fabricacao'];
$data_fabricacao = $_POST['data_fabricacao'];
$lote = $_POST['lote'];
$tempo_garantia = $_POST['tempo_garantia'];
$observacao_garantia = $_POST['observacao_garantia'];
$altura = $_POST['altura'];
$largura = $_POST['largura'];
$peso_produto = $_POST['peso_produto'];
$peso_embalagem = $_POST['peso_embalagem'];
$itens_produto = $_POST['itens_produto'];
$site_fabricante = $_POST['site_fabricante'];
$telefone_fabricante = $_POST['telefone_fabricante'];
 


$ccp = new ComplementoProduto();

$ccp->setFornecimento_fk($codigo_complemento_produto);
$ccp->setCodigo_fabricacao($codigo_fabricacao);
$ccp->setData_fabricacao($data_fabricacao);
$ccp->setLote($lote);
$ccp->setTempo_garantia($tempo_garantia);
$ccp->setObservacao_garantia($observacao_garantia);
$ccp->setAltura($altura);
$ccp->setLargura($largura);
$ccp->setPeso_produto($peso_produto);
$ccp->setPeso_embalagem($peso_embalagem);
$ccp->setItens_produto($itens_produto);
$ccp->setSite_fabricante($site_fabricante);
$ccp->setTelefone_fabricante($telefone_fabricante);

$ccpbd = new CadastroComplementoProdutoBD();

$ccpbd->alterar($ccp->getFornecimento_fk(), $ccp->getCodigo_fabricacao(), $ccp->getData_fabricacao(), $ccp->getLote(), $ccp->getTempo_garantia(),$ccp->getObservacao_garantia(), $ccp->getAltura(), $ccp->getLargura(), $ccp->getPeso_produto(), $ccp->getPeso_embalagem(), $ccp->getItens_produto(), $ccp->getSite_fabricante(), $ccp->getTelefone_fabricante());


?>






