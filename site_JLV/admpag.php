<?php

//chamando o arquivo de conexao
require 'conexao.php';

//chamando o header na pagina	
include_once 'header.php';

?>
<br><br>

<h4 class="light"> Área do administrador </h4>
<br>
<h5 class="center">Cadastrar</h5>
<p class='menuadm'><a class='menuadm' href='cadastro.php'>Alunos</a></p>                                                                            
<p class='menuadm'><a class='menuadm' href='crelat.php'>Relatórios</a></p>
<p class='menuadm'><a class='menuadm'  href='cevent.php'> Eventos</a></p>
<br><br>

<h5 class="light"> Alteração de dados </h5>
<p class='menuadm'><a class='menuadm' href='dados.php'>Alunos</a></p>                                                                                                                                      
<p class='menuadm'><a class='menuadm' href='altrelat.php'>Relatórios</a></p>
<p class='menuadm'><a class='menuadm' href='altevent.php'> Eventos</a></p>
<p class='menuadm'><a class='menuadm' href='altevent.php'> Etnias</a></p>
<p class='menuadm'><a class='menuadm' href='altevent.php'> Cursos</a></p>
<p class='menuadm'><a class='menuadm' href='altevent.php'> Cota</a></p>
<br><br><br><br>



<!-- chamando o footer na pagina -->	
<?php include_once 'footer.php';?>                        