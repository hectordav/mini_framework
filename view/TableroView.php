<!DOCTYPE html>
<html>
<head>
				<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
				 <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet">
				 <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<div align="center">
	<header>
<h1>JUEGO 3 EN RAYA</h1>
</header> 
</div>
<?
$turno=$turno;
$usuario=$id;

?>
<div align="center">
	<table border="0">
 <tr>
    <td style="border-style:solid;">
    	<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=1&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>

    	</td>
    <td style="border-style:solid;">
    <a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=2&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a></td>  
    <td style="border-style:solid;">
		<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=3&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
 </tr>

 <tr>
    <td style="border-style:solid;">
			<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=4&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
    <td style="border-style:solid;">
    	<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=5&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
    <td style="border-style:solid;">
    	<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=6&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
 </tr>
 <tr>
    <td style="border-style:solid;">
    	<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=7&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
    <td style="border-style:solid;">
    	<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=8&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
    <td style="border-style:solid;">
    	<a href="<?php echo $helper->url("tablero","guardar"); ?>&celda=9&turno=<?=$turno?>&u=<?=$usuario?>"><img src="assets/img/blanco.png" width="96" Height="128" id="c0" /></a>
    </td>  
 </tr>


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

<br/>
<div class="container">
  <div class="row" align="center">
    <?php if ($turno==1): ?>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="col-md-4 col-sm-4 col-xs-4">
      &nbsp;
    </div>
      <div class="animated pulse col-md-4 col-sm-4 col-xs-4">
           <div class="alert alert-info alert-dismissible" role="alert">       
            <strong>Juega <?=$nombre1?></strong>
            <br>
           </div>
    </div>
  </div>
    <?php else: ?>

    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="col-md-4 col-sm-4 col-xs-4">
        &nbsp;
      </div>
      <div class="animated pulse col-md-4 col-sm-4 col-xs-4">
           <div class="alert alert-success alert-dismissible" role="alert">       
            <strong>Juega <?=$nombre2?></strong>
            <br>
           </div>
      </div>
    </div>
    
  <?php endif ?>  
  </div>
</div>
</div>

</body>

</html>
<script type="text/javascript">

 var img='nuevo_poo_php/assets/img/blanco.png' ;
 var turno=1;
 var arreglo = new Array();
 var jug1=0;
 var jug2=0;

 for(i=0; i<=8; i++){

  arreglo[i]=-1;

 }

 function box(pos){

    if(arreglo[pos]==-1){
     
     if(turno==1){
      if(img=='nuevo_poo_php/assets/img/blanco.png'){
        document.getElementById('c'+pos).src=img;
	arreglo[pos]=1;
        turno=2;
	img='/assets/img/x.png';
      }
      
     }else if(turno==2){ 
      if(img=='http://simexsa.com/images/Opera_O.png'){
       document.getElementById('c'+pos).src=img;
       arreglo[pos]=0;
       turno=1;
       img='http://images.coveralia.com/audio/d/Def_Leppard-X-Frontal.jpg' ;
      }

     }

    }else{ alert('Posicion ocupada!'); }
    


 
  if(arreglo[0]==1 && arreglo[1]==1 && arreglo[2]==1){
	alert('gano X');
        jug1=jug1+1;
	reiniciar();
  }

  if(arreglo[0]==0 && arreglo[1]==0 && arreglo[2]==0){
	alert('gano O');
        jug2=jug2+1;
	reiniciar();
  }

  if(arreglo[3]==1 && arreglo[4]==1 && arreglo[5]==1){
	alert('gano X');
        jug1=jug1+1;
	reiniciar();
  }

  if(arreglo[3]==0 && arreglo[4]==0 && arreglo[5]==0){
	alert('gano O');
        jug2=jug2+1;
	reiniciar();
  }

  if(arreglo[6]==1 && arreglo[7]==1 && arreglo[8]==1){
	alert('gano X');
        jug1=jug1+1;
	reiniciar();
  }

  if(arreglo[6]==0 && arreglo[7]==0 && arreglo[8]==0){
	alert('gano O');
        jug2=jug2+1;
	reiniciar();
  }

  if(arreglo[0]==1 && arreglo[3]==1 && arreglo[6]==1){
	alert('gano X');
        jug1=jug1+1;
	reiniciar();
  }

  if(arreglo[0]==0 && arreglo[3]==0 && arreglo[6]==0){
	alert('gano O');
        jug2=jug2+1;
	reiniciar();
  }

  if(arreglo[1]==1 && arreglo[4]==1 && arreglo[7]==1){
	alert('gano X');
        jug1=jug1+1;
	reiniciar();
  }

  if(arreglo[1]==0 && arreglo[4]==0 && arreglo[7]==0){
	alert('gano O');
        jug2=jug2+1;
	reiniciar();
  }
 
  if(arreglo[2]==1 && arreglo[5]==1 && arreglo[8]==1){
	alert('gano X');
        jug1=jug1+1;
	reiniciar();
  }

  if(arreglo[2]==0 && arreglo[5]==0 && arreglo[8]==0){
	alert('gano O');
        jug2=jug2+1;
	reiniciar();
  }
 
  if(arreglo[0]==1 && arreglo[4]==1 && arreglo[8]==1){
	alert('gano X');
        jug1=jug1+1;
	reiniciar();
  }

  if(arreglo[0]==0 && arreglo[4]==0 && arreglo[8]==0){
	alert('gano O');
        jug2=jug2+1;
	reiniciar();
  }
  
  if(arreglo[2]==1 && arreglo[4]==1 && arreglo[6]==1){
	alert('gano X');
        jug1=jug1+1;
	reiniciar();
  }

  if(arreglo[2]==0 && arreglo[4]==0 && arreglo[6]==0){
	alert('gano O');
        jug2=jug2+1;
	reiniciar();
  }
 }
  

 function reiniciar(){

  document.getElementById('reset');

  for(i=0; i<=8; i++){
     document.getElementById('c'+i).src="http://www.movieonmovil.com/data/thumbf//176x220/Abstracto1.jpg";
  }

  
  for(i=0; i<=8; i++){
     arreglo[i]=-1;
  }

 }

</script>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tablero</title>
</head>
<body>
		<?$i=0;?>
	<?php foreach ($tablero as $key): ?>
		<?= $key;?>
		<?$i++?>
		<?= $i;?>
		<br>
	<?php endforeach ?>
	
</body>
</html> -->