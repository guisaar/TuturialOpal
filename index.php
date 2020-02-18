<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Tutorial</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:900,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="Scripts\Main.css"> 
</head>
<body >

  <header class="header-paralax">
    <table  width="100%" height="100%" id="table">
	<tr width= 33%>
	<td id="etec"><img src="Scripts\Imagens\BannerTuturial.png"></img>
	</td>
	<td id="meio">Tutorial
	</td>
	<td id="data">Banco de Dados II <br> Eli
	</td>
	</tr>
	</table>
 </header>
  <main>
  	<div id="openModal" class="modalDialog">
  <div id="Popup" >
 
   <a href="#close" title="Close" class="close">X</a>
  </div></div>
    <div class="content" id="Xampp" style="display:none;">
 <div class="texto"> 
 <b>Como Instalar o Xampp</b>
	</div>
	
	 </div>
	 <div class="content" id="MySql" style="display:block;">
 <div class="texto"> 
  <b>Como Instalar o MySql</b><br>
<img src="Scripts\Imagens\foto1.jpg">
  <p>Após o download do Instalador do MySQL terminar, execute-o. </p>
  <p>Pode ser que o instalador identifique uma atualização e peça para ser atualizado, você pode escolher...
Eu preferi atualizar o instalador do MySQL. Neste caso ele vai baixar a atualização e em seguida iniciar o processo de instalação.
</p>
<img src="Scripts\Imagens\foto2.png">
<p>A primeira tela do instalador do MySQL pede para aceitar os termos de licença. Se concordar aceite (marcando o checkbox I accept the license terms) e clique em Next.</p>
<img src="Scripts\Imagens\foto3.png">
<p>Em seguida o instalador nos oferece 5 opções de instalação:<br>
	Padrão de desenvolvedor: inclui o servidor Mysql, ferramentas como Shell, Router e Workbench, conectores, etc.<br>
	Somente o servidor<br>
	Somente cliente: não instala o servidor MySQL<br>
	Completo: Tudo!<br>
	Personalizado<br>
Eu sempre escolho personalizado pois nunca preciso de todos os conectores nem todas as ferramentas. E se precisar também, basta executar o instalador denovo e instalar o compoenente que eu precisar.
Escolha o que preferir e clique em Next >.
</p>
<img src="Scripts\Imagens\foto4.jpg">
<p>Se você, assim como eu, escolhou a opção de personalizar a instalação, você poderá escolher o que quer instalar.<br>
Selecione o que quer instalar e clique na setinha para direita. Se quiser remover algum componete da instalação, selecione-o e clique na setinha para esquerda.
Escolha o que quer que seja instalado (o que ficará na lista da direita) e clique em Next >.
</p>
<img src="Scripts\Imagens\foto5.png">
<p>Se você, assim como eu, escolhou a opção de personalizar a instalação, você poderá escolher o que quer instalar.<br>
Selecione o que quer instalar e clique na setinha para direita. Se quiser remover algum componete da instalação, selecione-o e clique na setinha para esquerda.
<br>Escolha o que quer que seja instalado (o que ficará na lista da direita) e clique em Next >.
</p>
<img src="Scripts\Imagens\foto6.png">
<p>No meu caso o instalador do Visual C++ 2013 foi baixado e executado automaticamente. Bastou aceitar os termos e clicar em Install.
<br>Após finalizar a instalação do Visual C++ 2013, o instalador do MySQL identifica que as dependências já estão resolvidas.
<br>Se tiver mais de uma dependência para ser instalada no seu computador o instalador do MySQL não vai continuar enquando não atender os requisitos.
<br>Quando as dependências estiverem devidamente instaladas, clique em Next >.
</p>
<img src="Scripts\Imagens\foto7.png">
<p>Por fim, o instalador apresenta o que será baixado (se você escolheu o instalador mais leve que baixa o que precisa na hora da instalação) e instalado no seu computador. Se estiver tudo certo, clique em Execute.</p>
<img src="Scripts\Imagens\foto8.png">
<p>Agora o instalador vai baixar tudo que precisa (se precisar)...</p>
<img src="Scripts\Imagens\foto9.png">
<p>E instalar os componentes que você escolheu, um por um...</p>
<img src="Scripts\Imagens\foto10.png">
<p>Após todos os componentes estiverem instalados, clique em Next >.</p>
<img src="Scripts\Imagens\foto11.png">
<p>Se você escolheu instalar algum componente que precisa de configuração como servidor SGBD MySQL, o instalador solicita que as configurações básicas sejam configuradas.
<br>No meu caso era só o servidor MySQL que precisava de configuração. Clique em Next >.
</p>
<img src="Scripts\Imagens\foto12.png">
<p>Para configurar o servidor do MySQL, o instalador oferece duas opções: Standalone ou Cluster.
<br>Se você está configurando um servidor para desenvolvimento e não precisa trabalhar com "Cluster", escolha a primeira opção.
<br>Após escolher a forma de replicação (Standalone ou Cluster) clique em Next >.
</p>
<img src="Scripts\Imagens\foto13.png">
<p>Para configurar o servidor do MySQL, o instalador oferece duas opções: Standalone ou Cluster.
Se você está configurando um servidor para desenvolvimento e não precisa trabalhar com "Cluster", escolha a primeira opção.
Após escolher a forma de replicação (Standalone ou Cluster) clique em Next >.
</p>
<img src="Scripts\Imagens\foto14.png">
<p>Na sequência, chega o momento de configurar a forma de acesso do usuário principal do SGBD MySQL.
<br>Você pode escolher se quer um método de autenticação com senha encriptada (recomendado) ou o método antigo de autenticação.
<br>Eu prefiro o mais seguro! =P
<br>E se você for usar MySQL com versão 8.0 ou superior você precisará escolher esta opção.
<br>Clique em Next após se decidir entre as duas opções.
</p>
<img src="Scripts\Imagens\foto15.png">
<p>A tela seguinte pede para definirmos uma senha para o usuário root, ou seja, o usuário administrador.
<br>A sua senha pode ser considerada fraca, média ou forte ... É bom usar uma senha complicada, mas você precisa lembrar dela! rs
<br>Independente se você criar uma senha forte ou fraca, você poderá continuar com a instalação do MySQL. Mas é necessário que você digite a mesma senha, exatamente igual, nos dois campos apresentados. Clique em Next > para continuar.
</p>
<img src="Scripts\Imagens\foto16.png">
<p>Seguindo o processo de instalação, nós podemos configurar se queremos que o servidor do MySQL seja gerenciado como um processo do Windows, se deve ser iniciado quando o sistema iniciar e sob qual usuário o processo do servidor do MySQL deve ser executado.
<br>Eu prefiro que o servidor do MySQL seja executado como um serviço do Windows mesmo, iniciado junto com o Windows e sob o usuário padrão.
<br>Após escolher, clique em Next >.
</p>
<img src="Scripts\Imagens\foto17.png">
<p>Para finalizar a configuração do MySQL, o instalador nos mostra um resumo do que será feito. Só precisamos clicar em Execute.</p>
<img src="Scripts\Imagens\foto18.png">
<p>Após o processo de configuração terminar, basta clicar em Finish.</p>
<img src="Scripts\Imagens\foto19.png">
<p>Por fim, você poderá copiar o log da instalação para a memória do seu computador e/ou iniciar algumas ferramentas de utilização do MySQL como o MySQL Workbench e o MysQL Shell.</p>
<img src="Scripts\Imagens\foto20.png">
<p>Pronto! Tudo certo pra você começar a usar o MySQL no seu computador.</p>
	</div>
	 </div>
  </main>
  
  <div id="body2" onclick="Xampp()" style="display:block;"><div id="margin"><br>M<br>y<br>S<br>Q<br>L<br><br> W<br>o<br>r<br>k<br>e<br>b<br>e<br>a<br>c<br>h<br></div></div>
 
 
 
 
 
  <div id="body3" onclick="MySql()" style="display:none;"><div id="margin"><br><br><br><br>X<br><br>A<br><br>M<br><br>P<br><br>P</div></div>
 
 
 
<script type="text/javascript" src="Scripts\Main.js"></script>
</body>
</html>
