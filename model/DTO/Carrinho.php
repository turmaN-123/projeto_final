    <?php
   
        class Carrinho{
           private UsuarioDTO $usuario;
           private array $itemCarrinho = [];

            public function setUsuario(UsuarioDTO $usuario){
                $this->usuario = $usuario;

            }
            public function getUsuario(){
                return $this->usuario;
            }
            public function getItemCarrinho(){
                return $this->itemCarrinho;
            }
            public function getItemCarrinhoByIdProd($idProd){
                return $this->itemCarrinho[$idProd];
            }

            public function addItem(ProdutoDTO $produto) {
                // se o produto já estiver no carrinho -> adicionar item ao produto
                if (isset($this->itemCarrinho[$produto->getIdProd()])) {
                    $this->itemCarrinho[$produto->getIdProd()]->addItem();
                }else{
                //senão criar um novo item de produto no carrinho
                    $this->itemCarrinho[$produto->getIdProd()] = new ItemCarrinho();
                    $this->itemCarrinho[$produto->getIdProd()]->setProduto($produto);
                }
            }
            public function removerItem(ProdutoDTO $produto){
                unset($this->itemCarrinho[$produto->getIdProd()]);
            }
        }

    ?>