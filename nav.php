<?php 
  if(!isset($_GET['p'])){
    $_GET['p'] = 'home';
  }
?>
<ul class="nav nav-pills nav-fill">
    <li class="nav-item">
        <a class="nav-link <?php if($_GET['p'] == 'home'){ echo'active';  } ?>" 
                                            href="index.php?p=home">
            <i class="fa fa-home"></i> Início
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if($_GET['p'] == 'tipo' || 
                                        $_GET['p'] == 'cad-tipo' ||
                                        $_GET['p'] == 'fim-cad-tipo'){ echo'active';  } ?>" 
                                        href="area-tipo.php?p=tipo">
            <i class="fa fa-id-card"></i> Área de Tipos
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if($_GET['p'] == 'usuario' || 
                                    $_GET['p'] == 'cad-user' || 
                                    $_GET['p'] == 'con'){ echo'active';  } ?>"
                                     href="area-usuario.php?p=usuario">
            <i class="fa fa-user-circle"></i> Área de Usuários
        </a>
    </li>
</ul>