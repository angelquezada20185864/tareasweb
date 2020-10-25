<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Tabla periódica</title>
</head>
<body>

<h1>Tabla Periódica de los Elementos Químicos</h1>

<?php

$elementos  = array(

	$row1 = array(
		['1 <br> H <br> Hidrogeno', 'noMetales',  1], 
		['colspan',16], 
		['2 <br> He <br> Helio', 'gasesNobles',  18]
	),

	$row2 = array(
		['3 <br> Li <br> Litio', 'alcalinos',  1],
		['4 <br> Br <br> Berillio', 'alcalinoterreos',  2], 
		['colspan', 10], 
		['5 <br> B <br> Boro', 'metaloides',  13],
		['6 <br> C <br> Carbono', 'noMetales',  14],
		['7 <br> N <br> Nitrogeno', 'noMetales',  15],
		['8 <br> O <br> Oxigeno', 'noMetales',  16],
		['9 <br> F <br> Fluor', 'halogenos',  17],
		['10 <br> Ne <br> Neon', 'gasesNobles',  18]
	),

	$row3 = array(
		['11 <br> Na <br> Sodio', 'alcalinos',  1],
		['12 <br> Mg <br> Magnecio', 'alcalinoterreos',  2], 
		['colspan', 10], 
		['13 <br> Al <br> Alumnio', 'otrosMetales',  13],
		['14 <br> Si <br> Silicio', 'metaloides',  14],
		['15 <br> P <br> Fosforo', 'noMetales', 15],
		['16 <br> S <br> Azufre', 'noMetales',  16],
		['17 <br> Cl <br> Cloro', 'halogenos', 17],
		['18 <br> Ar <br> Argon', 'gasesNobles',  18]
	),
	$row3 = array(
		['19 <br> K <br> Potasio', 'alcalinos',  1],
		['20 <br> Ca <br> Calcio', 'alcalinoterreos',  2], 
		['21 <br> Sc <br> Escadio', 'metalesTrancision',  3], 
		['22 <br> Ti <br> Titanio', 'metalesTrancision',  4], 
		['23 <br> V <br> Vanadio', 'metalesTrancision',  5], 
		['24 <br> Cr <br> Cromo', 'metalesTrancision',  6], 
		['25 <br> Mn <br> Manganeso', 'metalesTrancision',  7], 
		['26 <br> Fe <br> Hierro', 'metalesTrancision',  8], 
		['27 <br> Co <br> Cobalto', 'metalesTrancision',  9], 
		['28 <br> Ni <br> Niquel', 'metalesTrancision',  10], 
		['29 <br> Cu <br> Cobre', 'metalesTrancision',  11], 
		['30 <br> Zn <br> Zinc', 'metalesTrancision',  12], 
		['31 <br> Ga <br> Galio', 'otrosMetales',  13],
		['32 <br> Gr <br> Germanio', 'metaloides',  14],
		['33 <br> As <br> Arsenico', 'metaloides',  15],
		['34 <br> Se <br> Selenio', 'noMetales', 16],
		['35 <br> Br <br> Bromo', 'halogenos',  17],
		['36 <br> Kr <br> Kripton', 'gasesNobles',  18]
	),

	$row4 = array(
		['37 <br> Rb <br> Rubidio', 'alcalinos',  1],
		['38 <br> Sr <br> Estroncio', 'alcalinoterreos',  2], 
		['39 <br> Y <br> Itrio', 'metalesTrancision',  3], 
		['40 <br> Zr <br> Circonio', 'metalesTrancision',  4], 
		['41 <br> Nb <br> Niobio', 'metalesTrancision', 5], 
		['42 <br> Mo <br> Molibdeno', 'metalesTrancision',  6], 
		['43 <br> Tc <br> Tecnecio', 'metalesTrancision',  7], 
		['44 <br> Ru <br> Rutenio', 'metalesTrancision',  8], 
		['45 <br> Rh <br> Rodio', 'metalesTrancision',  9], 
		['46 <br> Pd <br> Paladio', 'metalesTrancision',  10], 
		['47 <br> Ag <br> Plata', 'metalesTrancision',  11], 
		['48 <br> Cd <br> Cadmnio', 'metalesTrancision',  12], 
		['49 <br> In <br> Indio', 'otrosMetales',  13],
		['50 <br> Sn <br> Estaño', 'otrosMetales',  14],
		['51 <br> Sb <br> Antimonio', 'metaloides',  15],
		['52 <br> Te <br> Telurio', 'metaloides',  16],
		['53 <br> I <br> Yodo', 'halogenos',  17],
		['54 <br> Xe <br> Xenon', 'gasesNobles',  18]
	),

	$row5 = array(
		['55 <br> Cs <br> Calsio', 'alcalinos',  1],
		['56 <br> Ba <br> Bario', 'alcalinoterreos',  2], 
		['57 71<br>La-Lu<br>Lantanidos', 'lantanidos',  3], 
		['72 <br> Hf <br> Hanfnio', 'metalesTrancision',  4], 
		['73 <br> Ta <br> Tantalo', 'metalesTrancision', 5], 
		['74 <br> W <br> Wolframio', 'metalesTrancision',  6], 
		['75 <br> Re <br> Renio', 'metalesTrancision',  7], 
		['76 <br> Os <br> Osmio', 'metalesTrancision',  8], 
		['77 <br> Ir <br> Iridio', 'metalesTrancision',  9], 
		['78 <br> Pt <br> Platino', 'metalesTrancision',  10], 
		['79 <br> Au <br> Oro', 'metalesTrancision',  11], 
		['80 <br> Hg <br> Mercurio', 'metalesTrancision',  12], 
		['81 <br> Tl <br> Talio', 'otrosMetales',  13],
		['82 <br> Pb <br> Plomo', 'otrosMetales',  14],
		['83 <br> Bi <br> Bismuto', 'otrosMetales',  15],
		['84 <br> Po <br> Polonio', 'metaloides',  16],
		['85 <br> At <br> Astato', 'halogenos',  17],
		['86 <br> Rn <br> Randon', 'gasesNobles',  18]
	),

	$row5 = array(
		['87 <br> Fr <br> Francio', 'alcalinos',  1],
		['88 <br> Ra <br> Radio', 'alcalinoterreos',  2], 
		['89 103<br>Ac-Lr<br>Antinidos', 'actinidos',  3], 
		['104 <br> Rf <br> Rutherfordio', 'metalesTrancision',  4], 
		['105 <br> Db <br> Dubnio', 'metalesTrancision', 5], 
		['106 <br> Sg <br> Seaborgio', 'metalesTrancision',  6], 
		['107 <br> Bh <br> Bohirio', 'metalesTrancision',  7], 
		['108 <br> Hs <br> Hasio', 'metalesTrancision',  8], 
		['109 <br> Mt <br> Meltnerio', 'metalesTrancision',  9], 
		['110 <br> Ds <br> Darmstatio', 'metalesTrancision',  10], 
		['111 <br> Rg <br> Roetgenio', 'metalesTrancision',  11], 
		['112 <br> Cn <br> Copernicio', 'metalesTrancision',  12], 
		['113 <br> Nh <br> Nihonio', 'otrosMetales',  13],
		['114 <br> Fl <br> Flerovio', 'otrosMetales',  14],
		['115 <br> Mc <br> Mascovio', 'otrosMetales',  15],
		['116 <br> Lv <br> Livermorio', 'otrosMetales',  16],
		['117 <br> Ts <br> Teneso', 'halogenos',  17],
		['118 <br> Og <br> Oganeson', 'gasesNobles',  18]
    ),
    
    $row6 = array(
        ['colspan',3],
        ['57 <br> La <br> Lantano', 'lantanidos', 4], 
		['58 <br> Ce <br> Cerio', 'lantanidos',  5], 
		['59 <br> Pr <br> Praseodimio', 'lantanidos',  6], 
		['60 <br> Nd <br> Neodimio', 'lantanidos',  7], 
		['61 <br> Pm <br> Prometio', 'lantanidos',  8], 
		['62 <br> Sm <br> Samario', 'lantanidos',  9], 
		['63 <bR> Eu <br> Europio', 'lantanidos',  10], 
		['64 <br> Gd <br> Gadolnio', 'lantanidos',  11], 
		['65 <br> Tb <br> Terbio', 'lantanidos',  12],
		['66 <br> Dy <br> Disprosio', 'lantanidos',  13],
		['67 <br> Ho <br> Holmio', 'lantanidos',  14],
		['68 <br> Er <br> Erbio', 'lantanidos',  15],
		['69 <br> Tm <br> Tulio', 'lantanidos',  16],
        ['70 <br> Yb <br> Lu', 'lantanidos',  17],
        ['71 <br> Lu <br> Lutecio', 'lantanidos',  18]
    ),

    $row7 = array(
        ['colspan',3],
        ['89 <br> Ac <br> Actinio', 'actinidos', 4], 
		['90 <br> Th <br> Torio', 'actinidos',  5], 
		['91 <br> Pa <br> Protactinio', 'actinidos',  6], 
		['92 <br> U <br> Uranio', 'actinidos',  7], 
		['93 <br> Np <br> Neptunio', 'actinidos',  8], 
		['94 <br> Pu <br> Plutonio', 'actinidos',  9], 
		['95 <br> Am <br> Americio', 'actinidos',  10], 
		['96 <br> Cm <br> Curio', 'actinidos',  11], 
		['97 <br> Bk <br> Berkelio', 'actinidos',  12],
		['98 <br> Cf <br> Californio', 'actinidos',  13],
		['99 <br> Es <br> Einstenio', 'actinidos',  14],
		['100 <br> Fm <br> Fermio', 'actinidos',  15],
		['101 <br> Md <br> Mendelevio', 'actinidos',  16],
        ['102 <br> No <br> Nobelio', 'actinidos',  17],
        ['103 <br> Lr <br> Lawrencio', 'actinidos',  18]
    ),
);

$none = [];
	
?>

	<table>
        
		<tbody>
	<?php foreach($elementos as $rows):  ?>
		<tr>
		<?php foreach($rows as $key):  ?>
			<?php if ($key[0] == 'colspan'): ?>
				 <td colspan="<?php echo "{$key[1]}"; ?>">  
				  </td>
				  <?php else: ?>
				 <td class="<?php echo "{$key[1]}"; ?> elementoFormato <?php if (in_array($key[2], $none)): ?> none <?php endif ?>">  
				  	<span class="<?php if (in_array($key[2], $none)): ?> none-title <?php endif ?>"><?php echo "{$key[0]}"; ?></span>
		       </td>
			<?php endif ?>
		<?php endforeach ?>
		</tr>
	<?php endforeach ?>
	 </tbody>
    </table>


     <!--Metales y no metales-->
<div class="tabla3">
<div class="box"> 
<h3 class="metalexBox">Metales</h3>
<div class="metaloideBox"></div>
<h3 class="noMetalesBox">No metales</h3>
 </div>

 <div>
 <table style="width: 75px">  
    <tr>
    <th class="alcalinos">Alcalinos </th>
    <th class="alcalinoterreos">Alcalinoterreos </th>
    <th class="metalesTrancision">Metales de Trancision / Bloque D </th>
    <th class="lantanidos">Lantanidos </th>
    <th class="actinidos">Actinidos </th>
    <th class="otrosMetales">Otros metales </th>
    <th class="metaloides">Metaloides </th>
    <th class="noMetales">Otros no Metales </th>
    <th class="halogenos">Halogeneos </th>
    <th class="gasesNobles">Gases Nobles </th></tr>
    </table>
</div>

</body>
</html>