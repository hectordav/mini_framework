<!DOCTYPE html>
<html>
<head>
				<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
				<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
         <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet">
</head>
<body>
    <div class="container" align="center">
      <br>
    <div class="row">
      <?php if ($correcto=='x'): ?>
         <div class="animated bounceInDown">
           <div class="alert alert-info alert-dismissible" role="alert">       
            <strong><h1>!Ha ganado <?=$nombre1?>!</h1></strong>
            <br>
           </div>
         </div>
        <?php endif ?>
        <?php if ($correcto=='o'): ?>
         <div class="animated bounceInDown">
           <div class="alert alert-success alert-dismissible" role="alert">       
            <strong><h1>!Ha ganado <?=$nombre2?>!</h1></strong>
            <br>
           </div>
         </div>
        <?php endif ?>
        <?php if ($correcto=='empate'): ?>
         <div class="animated bounceInDown">
           <div class="alert alert-warning  alert-dismissible" role="alert">       
            <strong><h1>!Es un empate!</h1></strong>
            <br>
           </div>
         </div>
        <?php endif ?>
    </div>
  </div>
<div align="center"><header>
<h1>JUEGO 3 EN RAYA</h1>
</header> </div>
<?
$turno=$turno;
$usuario=$id;
?>
<div align="center">
  <table border="0" class="table-responsive">
   <tr>
     <?php for ($j = 1; $j <= 9; $j++) {?>
         <?php if (isset($tablero['celda'.$j])):  ?>
            <?php if ($tablero['valor'.$j]=='x'): ?>
              <td style="border-style:solid;">
                <a href="#"><img src="assets/img/x.png" width="96" Height="128" id="<?=$celda[$j]?>" /></a>
                </td>
                  <?php if ($j==3 || $j==6 ||$j==9): ?>
                  </tr>
                  <?php endif ?>
                <?php else: ?>
                <td style="border-style:solid;">
                <a href="#"><img src="assets/img/O.png" width="96" Height="128" id="<?=$j?>" /></a>
                </td>
                  <?php if ($j==3 || $j==6 ||$j==9): ?>
                    </tr>
                  <?php endif ?>
            <?php endif ?>
        <?php else: ?>
          <td style="border-style:solid;">
          <a href="#"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a></td>
             <?php if ($j==3 || $j==6 ||$j==9): ?>
                    </tr>
                  <?php endif ?>
          <?php endif ?>

    <?php }?>
<tr>
    <td><img src="assets/img/x.png" width="80" Height="100"/></td>  
    <td><img src="assets/img/vs.png" width="80" Height="100"/></td>  
    <td><img src="assets/img/o.png" width="80" Height="100"/></td>  
 </tr>
 <tr>
    <th><?=$nombre1?></th>  
    <td></td>  
    <th><?=$nombre2?></th>  
 </tr>
</table>
<br>
<div class="container">
  <div class="row" align="center">
      <div class="col-md-12 col-sm-12 col-xs-12" align="center">
        <div class="col-md-1 col-sm-1 col-xs-1">
          &nbsp;
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1">
          &nbsp;
        </div>
        <div class="col-md-2 col-sm-2 col-xs-2">
          &nbsp;
        </div>
        <div class="col-md-2 col-sm-2 col-xs-2">
          <a href="<?php echo $helper->url("Usuario","registrousuario"); ?>"><button type="button" class="btn btn-primary btn-lg">Home</button><a>
        </div>
        <div class="col-md-1 col-sm-1 col-xs-1">
          <a href="<?php echo $helper->url("tablero","index"); ?>"><button type="button" class="btn btn-warning btn-lg">Reinicar</button><a>
        </div>
    </div>
    
  </div>
</div>

<br />
</div>

</body>

</html>
