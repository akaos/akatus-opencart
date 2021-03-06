<p align="left">
    <img src="https://site.akatus.com/wp-content/uploads/2012/12/logo.gif" alt="Akatus" title="Akatus" />
</p>

# Módulo Akatus para OpenCart (1.5.3.1 ou superior)

__Importante:__ Existem duas versões disponíveis para este módulo.
Por padrão a versão para download é sem One Step Checkout.
Caso queira utilizar a versão com One Step Checkout clique no link: https://github.com/Akatus/akatus-opencart/archive/one_step_checkout.zip

## Instalação

__Atenção:__ Faça um backup completo dos arquivos e banco de dados da sua loja antes de iniciar a instalação.
             
__O módulo requer a instalação do Vqmod__


* Abra o arquivo compactado e extraia todos os diretórios na raíz de sua loja OpenCart, sobrescrevendo os arquivos e diretórios já existentes.

* Execute apenas 1 vez o arquivo “akatus_db_install.php”, acessando ele através de http://sualoja.com.br/akatus_db_install.php. Este arquivo criará os status de
compras que precisaremos para atualizar os pagamentos. Se tudo der certo, aparecerá
a mensagem “Os status das transacoes da Akatus foram inseridos com sucesso” ao término da execução.

* Efetue login na Administração. Vá ao menu *Extensions >> Payments*. Aparecerão 3 novos módulos Akatus – Cartões de Crédito, Boleto Bancário e Transferência Eletrônica. Clique no link INSTALL, localizado ao lado direito de cada um deles e em seguida em EDIT.

## Configuração

* __Nome do Módulo__ - Adicione um nome a ser exibido no checkout.

* __Status Padrão dos Pedidos__ – Selecione o status "Aguardando Pagamento"

* __Zona__ – Selecione a zona de pagamento onde o módulo deverá ser exibido. Mantenha a opção “Todas as Zonas”.

* __Ordem__ – Informe a ordem na qual essa opção de pagamento deverá ser exibida no checkout __(número inteiro)__.

* __Parcelamento sem juros até__ – Informe quantas parcelas você deseja assumir dos juros. Para que essa opção funcione corretamente, é necessário também alterá-la no seu painel da
Akatus em *“Minha Conta >> Meios de Pagamento”*. O valor padrão é 1. __*(apenas para cartão de crédito)*__

* __Status__ - Selecione Ativo

## Dados da conta Akatus

* __Tipo__ - Produção ou Sandbox (para realização de testes)

* __E-mail da Conta__ - E-mail de cadastro da conta Akatus

* __Token NIP__ - Código gerado no painel da conta Akatus (menu Integração > Chaves de Segurança)

* __API Key__ - Código gerado no painel da conta Akatus (menu Integração > Chaves de Segurança)

*__Public Token__ - Código gerado no painel da conta Akatus (menu Integração > Chaves de Segurança)

* __Número máximo de parcelas__ - Informe em até quantas
parcelas o usuário poderá dividir suas compras. O padrão é 12 parcelas, e o valor mínimo da parcela será sempre 5 reais. 
__*(apenas para cartão de crédito)*__

## Notificação Instantânea de Pagamento (NIP)

Para receber as notificações de mudanças no status das transações é necessário:

1. Acessar o menu *Integração >> Notificações*, dentro da sua conta Akatus.
2. Habilitar as notificações e inserir a URL no padrão: http://www.sualoja.com.br/akatus/retorno.php

Clique em Salvar.

__Atenção:__ É interessante utilizar HTTPS para o NIP, porém é necessário que o servidor esteja corretamente configurado e com certificado SSL válido.


## Configuração de Desconto

A opção de desconto está disponível apenas para boleto e TEF. Entre nas respectivas opções de pagamento e realize a configuração.
Lembramos que o campo só aceita porcentagem.


## Mostrando o valor do desconto no checkout

Para mostrar o valor do desconto no checkout entre em: *Extensions >> Order Totals* e ative as opções Akatus Discount Docket e Akatus Discount TEF.
