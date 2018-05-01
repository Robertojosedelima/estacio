<?php
include("../../br.com.autosistem.controle/controle.vendas/CadastroItensPedido.php");
include("../../br.com.autosistem.modelo/modelo.vendas/CadastroItensPedidoBD.php");
require_once '../../br.com.autosistem.conexao/ConexaoBD.php';

 $produto_fk = $_POST['produto'];
 $pedido_fk = $_POST['pedido'];
 $quantidade_escolhida = $_POST['quantidade'];
 $quantidade_produto = $_POST['quantidade_produto'];
 

 
 $cbd = new ConexaoBD();
 $sql = "select * from cadastro_fornecimento WHERE codigo_fornecimento='$produto_fk'";
    $resultado = mysqli_query($cbd->conecta(),$sql);
    $dados = mysqli_fetch_assoc($resultado);
    $valor_produto = $dados['valor'];
    $quantidade_produto = $dados['quantidade'];
    $valor_total = $valor_produto * $quantidade_escolhida;
 $cip = new CadastroItensPedido();
 
 $cip->setPedido_fk($pedido_fk);
 $cip->setProduto_fk($produto_fk);
 $cip->setQuantidade_escolhida($quantidade_escolhida);
 $cip->setTotal($valor_total);
 
 $cipbd = new CadastroItensPedidoBD();
 $cipbd->inserir($cip->getPedido_fk(), $cip->getProduto_fk(), $cip->getQuantidade_escolhida(), $cip->getTotal());
   

?>
