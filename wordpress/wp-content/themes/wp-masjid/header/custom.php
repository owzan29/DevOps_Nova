<?php

$hdbg = get_option('headerbg');
list($hd1, $hd2, $hd3) = sscanf($hdbg, "#%02x%02x%02x");
$hsbg = get_option('hsearchcol');
list($hs1, $hs2, $hs3) = sscanf($hsbg, "#%02x%02x%02x");
$hour = get_option('hourcol');
list($hr1, $hr2, $hr3) = sscanf($hour, "#%02x%02x%02x");
$sin = get_option('sinbg');
list($sn1, $sn2, $sn3) = sscanf($sin, "#%02x%02x%02x");
$pac = get_option('pacbg');
list($pc1, $pc2, $pc3) = sscanf($pac, "#%02x%02x%02x");
$ova = get_option('ovback');
list($ov1, $ov2, $ov3) = sscanf($ova, "#%02x%02x%02x");
$rut = get_option('rutebg');
list($rt1, $rt2, $rt3) = sscanf($rut, "#%02x%02x%02x");
$agg = get_option('agbutbg');
list($ag1, $ag2, $ag3) = sscanf($agg, "#%02x%02x%02x");
$tes = get_option('teslay');
list($tes1, $tes2, $tes3) = sscanf($tes, "#%02x%02x%02x");
$bro = get_option('broccol');
list($bro1, $bro2, $bro3) = sscanf($bro, "#%02x%02x%02x");
$brot = get_option('brotcol');
list($brt1, $brt2, $brt3) = sscanf($brot, "#%02x%02x%02x");
$art = get_option('artesco');
list($art1, $art2, $art3) = sscanf($art, "#%02x%02x%02x");
$sbb = get_option('ssbbg');
list($sbb1, $sbb2, $sbb3) = sscanf($sbb, "#%02x%02x%02x");
$rtp = get_option('rtpakcol');
list($rtp1, $rtp2, $rtp3) = sscanf($rtp, "#%02x%02x%02x");
$wee = get_option('wtextcol');
list($we1, $we2, $we3) = sscanf($wee, "#%02x%02x%02x");
$see = get_option('lipacol');
list($wed1, $wed2, $wed3) = sscanf($see, "#%02x%02x%02x");

$quo = get_option('widbg');
list($q1, $q2, $q3) = sscanf($quo, "#%02x%02x%02x");
$q4 = 10;
$q5 = $q2+$q4;

$ttt = get_option('tetabg');
list($tt1, $tt2, $tt3) = sscanf($ttt, "#%02x%02x%02x");
$jad = get_option('ovhecol');
list($jd1, $jd2, $jd3) = sscanf($jad, "#%02x%02x%02x");

?>


<style>
a {
color: <?php echo (get_option('globallc')) ? get_option('globallc') : '#009990' ?>;
}
body {
color: <?php echo (get_option('globaltc')) ? get_option('globaltc') : '#555555' ?>;
}
.nav-masjid {
background: rgba(<?php if (get_option('headerbg')) { 
echo "$hd1,$hd2,$hd3"; 
} else { 
echo '252,252,252'; 
} ?>, 1);
border-top: 3px solid <?php echo (get_option('sinbg')) ? get_option('sinbg') : '#7bae91' ?>;
}

.logo {
background: <?php echo (get_option('logobg')) ? get_option('logobg') : '#ffffff' ?>;
}

.spo {
background: <?php echo (get_option('hsearchbg')) ? get_option('hsearchbg') : '#7bae91' ?>;
color: <?php echo (get_option('hsearchcol')) ? get_option('hsearchcol') : '#ffffff' ?>;
}

.nav .dd li a {
color: <?php echo (get_option('menucol')) ? get_option('menucol') : '#7bae91' ?>;
}

.nav .dd li span {
background: <?php echo (get_option('mespbg')) ? get_option('mespbg') : '#88cc33' ?>;
color: <?php echo (get_option('mespcol')) ? get_option('mespcol') : '#ffffff' ?>;
}

.nav .dd li span:after {
border-left: 6px solid <?php echo (get_option('mespbg')) ? get_option('mespbg') : '#88cc33' ?>;
}
.nav .dd li.menu-item-has-children:after {
border-top: 4px solid <?php echo (get_option('mespbg')) ? get_option('mespbg') : '#88cc33' ?>;
}

.nav .dd li:hover:after {
border-top: 0px solid #333;
}

.nav .dd li ul{
background: <?php echo (get_option('levmenubg')) ? get_option('levmenubg') : '#ffffff' ?>;
}
.nav .dd li ul li a{
color: <?php echo (get_option('levmenucol')) ? get_option('levmenucol') : '#7bae91' ?>;
}
.nav .dd li ul li ul {
background: <?php echo (get_option('lev2menubg')) ? get_option('lev2menubg') : '#fdfdfd' ?>;
}
.nav .dd li ul li ul li a {
color: <?php echo (get_option('lev2menucol')) ? get_option('lev2menucol') : '#7bae91' ?>;
}
.nav .dd li ul li ul li ul,
.nav .dd li ul li:hover ul li ul {
background: <?php echo (get_option('lev3menubg')) ? get_option('lev3menubg') : '#f7f7f7' ?>;
}
.nav .dd li ul li ul li ul li a {
color: <?php echo (get_option('lev3menucol')) ? get_option('lev3menucol') : '#7bae91' ?>;
}

.wee-slider {
background: <?php echo (get_option('spacbg')) ? get_option('spacbg') : '#eeeeee' ?>;
}

.allother {
background: <?php echo (get_option('spacbg')) ? get_option('spacbg') : '#eeeeee' ?>;
}

.justslide {
background: <?php echo (get_option('sboxbg')) ? get_option('sboxbg') : '#eeeeee' ?>;
}

.single .justslide {
background: #f7f7f7;
}

.headslide {
color: <?php echo (get_option('slidecol')) ? get_option('slidecol') : '#ffffff' ?>;
}

.headslide:before {
border-top: 4px solid <?php echo (get_option('slidebdr')) ? get_option('slidebdr') : '#ffffff' ?>;
border-left: 4px solid <?php echo (get_option('slidebdr')) ? get_option('slidebdr') : '#ffffff' ?>;
}

.headslide:after {
border-right: 4px solid <?php echo (get_option('slidebdr')) ? get_option('slidebdr') : '#ffffff' ?>;
border-bottom: 4px solid <?php echo (get_option('slidebdr')) ? get_option('slidebdr') : '#ffffff' ?>;
}

.alloverlay {
 background-image: url("<?php echo (get_option('compar')) ? get_option('compar').'' : get_template_directory_uri().'/images/slide-one.jpg' ?>");
}

.madticker {
background: <?php echo (get_option('sinbg')) ? get_option('sinbg') : '#7bae91' ?>;
}
.madticker #infotit,
.madticker .infotim {
background: <?php echo (get_option('sintbg')) ? get_option('sintbg') : '#7bae91' ?>;
color: <?php echo (get_option('sintcol')) ? get_option('sintcol') : '#ffffff' ?>;
}

.madticker #infotit:after {
border-bottom: 40px solid <?php echo (get_option('sintbg')) ? get_option('sintbg') : '#7bae91' ?>;
}

ul.newstickers li {
color: <?php echo (get_option('sincol')) ? get_option('sincol') : '#ffffff' ?>;
}
.insel {
background:  <?php echo (get_option('insel')) ? get_option('insel') : '#ffffff' ?>;
}
.insel input,
.insel select {
background:  <?php echo (get_option('insel')) ? get_option('insel') : '#ffffff' ?>;
color: <?php echo (get_option('spincol')) ? get_option('spincol') : '#555555' ?>;
}

.insel .fa {
background: <?php echo (get_option('lefinbg')) ? get_option('lefinbg') : '#88cc33' ?>;
color: <?php echo (get_option('leficol')) ? get_option('leficol') : '#ffffff' ?>;
}

.divbut .insel .fa {
background: <?php echo (get_option('butsebg')) ? get_option('butsebg') : '#88cc33' ?>;
color: <?php echo (get_option('butsecol')) ? get_option('butsecol') : '#ffffff' ?>;
}

.breadcrumbs {
background: <?php echo (get_option('bread')) ? get_option('bread') : '#ffffff' ?>;
color: <?php echo (get_option('breadcol')) ? get_option('breadcol') : '#444444' ?>;
}

.breadcrumbs a {
color: <?php echo (get_option('breadlink')) ? get_option('breadlink') : '#7bae91' ?>;
}

.weefirst {
background: #ffffff;
}

.weefirst:after {
border-bottom: 60px solid #ffffff;
}

.pack-img .dets {
background: <?php echo (get_option('pacbg')) ? get_option('pacbg') : '#ffffff' ?>;
color: <?php echo (get_option('paccol')) ? get_option('paccol') : '#222222' ?>;
}
.pack-img .dets h4 a {
color: <?php echo (get_option('paccol')) ? get_option('paccol') : '#222222' ?>;
}
.pack-img .dets .ors {
color: <?php echo (get_option('norprice')) ? get_option('norprice') : '#88cc33' ?>;
}
.dets del {
color: <?php echo (get_option('disprice')) ? get_option('disprice') : '#e92c4b' ?>;
}
.order {
background:rgba(<?php if (get_option('pacbg')) { 
echo "$pc1,$pc2,$pc3"; 
} else { 
echo '255,255,255'; 
} ?>, 0.6);
color: <?php echo (get_option('paccol')) ? get_option('paccol') : '#222222' ?>;
line-height: 1.6
}
.p-span {
background: <?php echo (get_option('pdbg')) ? get_option('pdbg') : '#009900' ?>;
color: <?php echo (get_option('pdcol')) ? get_option('pdcol') : '#ffffff' ?>;
}
.p-span a {
color: <?php echo (get_option('pdcol')) ? get_option('pdcol') : '#ffffff' ?>;
}
.pack-img .boxpops span {
color: <?php echo (get_option('ppcol')) ? get_option('ppcol') : '#ffffff' ?>;
background: linear-gradient(to right, <?php echo (get_option('pplbg')) ? get_option('pplbg') : '#009900' ?> , <?php echo (get_option('pprbg')) ? get_option('pprbg') : '#88cc33' ?>);
}
.relimg .homepro {
background: <?php echo (get_option('probg')) ? get_option('probg') : '#e92c4b' ?>; 
color: <?php echo (get_option('protcol')) ? get_option('protcol') : '#ffffff' ?>;
}



.weethird {
background-image: url("<?php echo (get_option('paral')) ? get_option('paral').'' : get_template_directory_uri().'/images/slide-one.jpg' ?>");
}
.we-23 {
color: <?php echo (get_option('descol')) ? get_option('descol') : '#222222' ?>;
}
.weelay {
background: rgba(<?php if (get_option('ovback')) { 
echo "$ov1,$ov2,$ov3"; 
} else { 
echo '255,255,255'; 
} ?>, <?php if (get_option('ovbackop')) { 
echo get_option('ovbackop'); 
} else { 
echo "0.8"; 
} 
?>);
}
.prom {
color: <?php echo (get_option('ovhecol')) ? get_option('ovhecol') : '#222222' ?>;
}
.prom span {
color: <?php echo (get_option('ovhespan')) ? get_option('ovhespan') : '#3dac1e' ?>;
}
.prom:after {
background: <?php echo (get_option('ovhecol')) ? get_option('ovhecol') : '#222222' ?>;
}
.butn {
background: <?php echo (get_option('ovbutbg')) ? get_option('ovbutbg') : '#d91b3b' ?>;
}
.butn a {
color: <?php echo (get_option('ovbutcol')) ? get_option('ovbutcol') : '#ffffff' ?>;
}
.jad td {
color: <?php echo (get_option('ovhecol')) ? get_option('ovhecol') : '#222222' ?>;
border-bottom: 1px dashed rgba(<?php if (get_option('ovhecol')) { 
echo "$jd1,$jd2,$jd3,0.1"; 
} else { 
echo '85,85,85,0.1'; 
} 
?>);
};
}
.jlime {
color: <?php echo (get_option('ovhespan')) ? get_option('ovhespan') : '#3dac1e' ?>;
}
.jlef {
color: <?php echo (get_option('ovhecol')) ? get_option('ovhecol') : '#222222' ?>;
}
.co-bot {
color: <?php echo (get_option('ovhecol')) ? get_option('ovhecol') : '#222222' ?>;
}
.co-onhour {
border-bottom: 2px solid <?php echo (get_option('ovhespan')) ? get_option('ovhespan') : '#3dac1e' ?>;
}
.co-bot .onh {
background: <?php echo (get_option('ovhespan')) ? get_option('ovhespan') : '#3dac1e' ?>;
color: <?php echo (get_option('ovback')) ? get_option('ovback') : '#ffffff' ?>;
}
.jorange {
color: <?php echo (get_option('ovbutbg')) ? get_option('ovbutbg') : '#d91b3b' ?>;
}
.weefourth {
background: <?php echo (get_option('partbg')) ? get_option('partbg') : '#f7f7f7' ?>;
}
.ttt {
background: <?php echo (get_option('partbut')) ? get_option('partbut') : '#3dac1e' ?>;
color: <?php echo (get_option('partcol')) ? get_option('partcol') : '#ffffff' ?>;
}

.additional,
.additional .blog-content {
background: <?php echo (get_option('tetabg')) ? get_option('tetabg') : '#ffffff' ?>;
color:  <?php echo (get_option('tetacol')) ? get_option('tetacol') : '#555555' ?>;
}

.additional .blog-content a {
color:  <?php echo (get_option('tetalink')) ? get_option('tetalink') : '#009900' ?>;
}
.additional .blog-content p {
color:  <?php echo (get_option('tetacol')) ? get_option('tetacol') : '#555555' ?>;
}
.additional .blog-content li {
color:  <?php echo (get_option('tetacol')) ? get_option('tetacol') : '#555555' ?>;
}
.additional .blog-content blockquote {
background: rgba(<?php if (get_option('tetabg')) { 
echo "255,255,255,0.1"; 
} else { 
echo '235,235,235,1'; 
} 
?>);
}
 
.additional .blog-content h1, 
.additional .blog-content h2, 
.additional .blog-content h3, 
.additional .blog-content h4, 
.additional .blog-content h5, 
.additional .blog-content h6 {
color:  <?php echo (get_option('tetacol')) ? get_option('tetacol') : '#555555' ?>;
}


.weesche {
background: <?php echo (get_option('agalbg')) ? get_option('agalbg') : '#ffffff' ?>;
}
.schelay {
color: <?php echo (get_option('agalcol')) ? get_option('agalcol') : '#ffffff' ?>;
}
.schelay .td {
border-right: 2px dashed <?php echo (get_option('agalcol')) ? get_option('agalcol') : '#ffffff' ?>;
}
#clockz h4 {
color:<?php echo (get_option('agalcol')) ? get_option('agalcol') : '#ffffff' ?>;
}
.schelay .guide img {
border: 5px solid <?php echo (get_option('agalcol')) ? get_option('agalcol') : '#ffffff' ?>;
}
.wtg {
background: rgba(<?php if (get_option('rutebg')) { 
echo "$rt1,$rt2,$rt3"; 
} else { 
echo '255,255,255'; 
} ?>, 0.85);
color: <?php echo (get_option('rutecol')) ? get_option('rutecol') : '#333333' ?>;
}
.evcount {
background: rgba(<?php if (get_option('agbutbg')) { 
echo "$ag1,$ag2,$ag3"; 
} else { 
echo '52,152,37'; 
} ?>, 0.9);
color: <?php echo (get_option('agbutcol')) ? get_option('agbutcol') : '#ffffff' ?>;
}

.cek {
background: <?php echo (get_option('agbutbg')) ? get_option('agbutbg') : '#009900' ?>;
}

.cek a {
color: <?php echo (get_option('agbutcol')) ? get_option('agbutcol') : '#ffffff' ?>;
}

.weetestimo {
background-image: url("<?php echo (get_option('partes')) ? get_option('partes').'' : get_template_directory_uri().'/images/slide-one.jpg' ?>");
}
.teslay {
background: rgba(<?php if (get_option('teslay')) { 
echo "$tes1,$tes2,$tes3"; 
} else { 
echo '255,255,255'; 
} ?>, <?php if (get_option('teslayop')) { 
echo get_option('teslayop'); 
} else { 
echo "0.8"; 
} 
?>);
}

.psay .star {
color: <?php echo (get_option('starcol')) ? get_option('starcol') : '#3abc23' ?>;
}

.psay .star span {
color: <?php echo (get_option('tescol')) ? get_option('tescol') : '#333333' ?>;
}

.psay .spans {
color: <?php echo (get_option('tescol')) ? get_option('tescol') : '#333333' ?>;
}

.down td {
background: <?php echo (get_option('brocbg')) ? get_option('brocbg') : '#ffffff' ?>;
color: <?php echo (get_option('broccol')) ? get_option('broccol') : '#444444' ?>;
border-bottom: 1px solid rgba(<?php if (get_option('broccol')) { 
echo "$bro1,$bro2,$bro3, 0.3"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}

.down td .fa {
color: <?php echo (get_option('broicol')) ? get_option('broicol') : '#009900' ?>;
}

.down td a {
color: <?php echo (get_option('brolicol')) ? get_option('brolicol') : '#dd3333' ?>;
}

.down td.ctr {
background: <?php echo (get_option('brotbg')) ? get_option('brotbg') : '#ffffff' ?>;
color: <?php echo (get_option('brotcol')) ? get_option('brotcol') : '#444444' ?>;
border-bottom: 1px solid rgba(<?php if (get_option('brotcol')) { 
echo "$brt1,$brt2,$brt3, 0.3"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}

.ltsm p {
color : <?php echo (get_option('artesco')) ? get_option('artesco') : '#444444' ?>;
}

.ltsm .star {
color: <?php echo (get_option('artestar')) ? get_option('artestar') : '#009900' ?>;
}
.ltsm .wgt strong {
color: <?php echo (get_option('arnacol')) ? get_option('arnacol') : '#444444' ?>;
}
.ltsm .wgt span {
color: <?php echo (get_option('arjocol')) ? get_option('arjocol') : '#444444' ?>;
}
.ltsm .tap {
	border: 10px solid rgba(<?php if (get_option('artesco')) { 
echo "$art1,$art2,$art3, 0.03"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}


.wecontent {
background: #ffffff;
border-top: 1px solid #eee;
}

.post-tags a {
background: <?php echo (get_option('tagscol')) ? get_option('tagscol') : '#7bae91' ?>;
color: <?php echo (get_option('tagscol')) ? get_option('tagscol') : '#ffffff' ?>;
}
#submit {
background: <?php echo (get_option('combubg')) ? get_option('combubg') : '#7bae91' ?>;
color: <?php echo (get_option('combucol')) ? get_option('combucol') : '#ffffff' ?>;
}

.showprice{
background: rgba(<?php if (get_option('ssbbg')) { 
echo "$sbb1,$sbb2,$sbb3, 0.9"; 
} else { 
echo '255,255,255,0.9'; 
} ?>);
color: <?php echo (get_option('ssbcol')) ? get_option('ssbcol') : '#333333' ?>;
}
.showprice .butn {
background: <?php echo (get_option('probubg')) ? get_option('probubg') : '#e33b0e' ?>;
color: <?php echo (get_option('probucol')) ? get_option('probucol') : '#ffffff' ?>;
}
.showprice .priceft .hanodis .htext {
background: <?php echo (get_option('pribubg')) ? get_option('pribubg') : '#009900' ?>;
color: <?php echo (get_option('pribucol')) ? get_option('pribucol') : '#ffffff' ?>;
}
.showprice .diskon {
color: <?php echo (get_option('nopri')) ? get_option('nopri') : '#49c61a' ?>;
}
.showprice del {
color: <?php echo (get_option('nopro')) ? get_option('nopro') : '#e81111' ?>;
}

.days, .hours, .minutes {
background: <?php echo (get_option('protibg')) ? get_option('protibg') : '#ffffff' ?>;
color: <?php echo (get_option('proticol')) ? get_option('proticol') : '#19af28' ?>;
}
.seconds {
background: <?php echo (get_option('prosebg')) ? get_option('prosebg') : '#49c61a' ?>;
color: <?php echo (get_option('prosecol')) ? get_option('prosecol') : '#ffffff' ?>;
}



.iti, .ket, .vid , .kom, .bag {
background: <?php echo (get_option('pamebg')) ? get_option('pamebg') : '#009900' ?>;
color: <?php echo (get_option('pamecol')) ? get_option('pamecol') : '#ffffff' ?>;
}
.pri {
background: <?php echo (get_option('hamebg')) ? get_option('hamebg') : '#333333' ?>;
color: <?php echo (get_option('hamecol')) ? get_option('hamecol') : '#ffffff' ?>;
}
.ititab td.inleft .fa {
background: <?php echo (get_option('pamebg')) ? get_option('pamebg') : '#009900' ?>;
color: <?php echo (get_option('pamecol')) ? get_option('pamecol') : '#ffffff' ?>;
}
.drin {
color: #222;
}
.drin strong {
color: <?php echo (get_option('lihacol')) ? get_option('lihacol') : '#49c61a' ?>;
}
.drin del {
color: <?php echo (get_option('liprocol')) ? get_option('liprocol') : '#e81111' ?>;
}

.odtt, .pactive {
background: <?php echo (get_option('ormebg')) ? get_option('ormebg') : '#009900' ?>;
color: <?php echo (get_option('ormecol')) ? get_option('ormecol') : '#ffffff' ?>;
}

.pagination a,
.pagination .disabled {
background: <?php echo (get_option('pglibg')) ? get_option('pglibg') : '#eeeeee' ?>;
color: <?php echo (get_option('pglico')) ? get_option('pglico') : '#444444' ?>;
}

.pagination a:hover,
.pagination a.active {
background: <?php echo (get_option('pglihobg')) ? get_option('pglihobg') : '#7bae91' ?>;
color: <?php echo (get_option('pglihoco')) ? get_option('pglihoco') : '#ffffff' ?>;
}


.outline {
color: #444;
	background: #fff;
}

.includes {
color: <?php echo (get_option('rtpakcol')) ? get_option('rtpakcol') : '#777777' ?>;
}
.includes strong {
color: <?php echo (get_option('trpricol')) ? get_option('trpricol') : '#88cc33' ?>;
}



.imglay {
	background: <?php echo (get_option('sijabg')) ? get_option('sijabg') : '#fdfdfd' ?>;
	color: <?php echo (get_option('sijacol')) ? get_option('sijacol') : '#333333' ?>;
}
.evendes .days, .evendes .hours, .evendes .minutes {
background: <?php echo (get_option('sitibg')) ? get_option('sitibg') : '#ffffff' ?>;
color: <?php echo (get_option('siticol')) ? get_option('siticol') : '#19af28' ?>;
}
.evendes .seconds {
background: <?php echo (get_option('secobg')) ? get_option('secobg') : '#49c61a' ?>;
color: <?php echo (get_option('secocol')) ? get_option('secocol') : '#ffffff' ?>;
}




#sidebar .widget {
background: <?php echo (get_option('widbg')) ? get_option('widbg') : '#ffffff' ?>;
color: <?php echo (get_option('wtextcol')) ? get_option('wtextcol') : '#444444' ?>;
}

#sidebar .widget a {
color: <?php echo (get_option('wlinkcol')) ? get_option('wlinkcol') : '#7bae91' ?>;
}

#sidebar .widget h3, #sidebar .widget-small h3, #sidebar .widget h3 a, #sidebar .widget-small h3 a {
background: <?php echo (get_option('widhbg')) ? get_option('widhbg') : '#7bae91' ?>;
color: <?php echo (get_option('widhcol')) ? get_option('widhcol') : '#ffffff' ?>;
}
#sidebar .widget .weesid {
border-bottom: 1px solid rgba(<?php if (get_option('wtextcol')) { 
echo "$we1,$we2,$we3, 0.1"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#sidebar .widget .dapro .prs {
border-left: 1px solid rgba(<?php if (get_option('wtextcol')) { 
echo "$we1,$we2,$we3, 0.1"; 
} else { 
echo '240,240,240,1'; 
} ?>);
border-bottom: 1px solid rgba(<?php if (get_option('wtextcol')) { 
echo "$we1,$we2,$we3, 0.1"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#sidebar .widget.widget_jadwaltour .jadw {
border-top: 1px solid rgba(<?php if (get_option('wtextcol')) { 
echo "$we1,$we2,$we3, 0.1"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#sidebar .widget.widget_paketpopuler .lst {
    border-bottom: 1px solid rgba(<?php if (get_option('wtextcol')) { 
echo "$we1,$we2,$we3, 0.1"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#sidebar .widget.widget_rss li, 
#sidebar .widget.widget_meta li, 
#sidebar .widget.widget_nav_menu li, 
#sidebar .widget.widget_recent_entries li, 
#sidebar .widget.widget_pages li, 
#sidebar .widget.widget_archive li, 
#sidebar .widget.widget_categories li {
    border-bottom: 1px solid rgba(<?php if (get_option('wtextcol')) { 
echo "$we1,$we2,$we3, 0.1"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#sidebar .widget.widget_recent_comments ul li.recentcomments {
border-bottom: 1px solid rgba(<?php if (get_option('wtextcol')) { 
echo "$we1,$we2,$we3, 0.1"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#sidebar .widget.widget_nav_menu ul li:first-child,
#sidebar .widget.widget_categories ul li:first-child {
border-top: 1px solid rgba(<?php if (get_option('wtextcol')) { 
echo "$we1,$we2,$we3, 0.1"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#sidebar .widget label {
color: <?php echo (get_option('wtextcol')) ? get_option('wtextcol') : '#ffffff' ?>;
}
#sidebar widget.widget_recent_entries span {
color: <?php echo (get_option('wtextcol')) ? get_option('wtextcol') : '#ffffff' ?>;
}

#sidebar .widget.widget_paketpopuler .lst span {
color: <?php echo (get_option('protextcol')) ? get_option('protextcol') : '#ffffff' ?>;
background: <?php echo (get_option('protextbg')) ? get_option('protextbg') : '#e81111' ?>;
}
#sidebar .widget.widget_paketpopuler .relpri {
    color: <?php echo (get_option('popricol')) ? get_option('popricol') : '#88cc33' ?>;
}

#sidebar .widget.widget_paketpopuler .relpri del {
    color: <?php echo (get_option('podiscol')) ? get_option('podiscol') : '#e81111' ?>;
}


#sidebar .widget.widget_daftarpaket {
background: <?php echo (get_option('lipabg')) ? get_option('lipabg') : '#ffffff' ?>;
color: <?php echo (get_option('lipacol')) ? get_option('lipacol') : '#e81111' ?>;
}
#sidebar .widget.widget_daftarpaket h3 {
color: <?php echo (get_option('lihecol')) ? get_option('lihecol') : '#ffffff' ?>;
background: <?php echo (get_option('lihebg')) ? get_option('lihebg') : '#88cc33' ?>;
}
#sidebar .widget.widget_daftarpaket .lst {
border-bottom: 1px solid rgba(<?php if (get_option('lipacol')) { 
echo "$wed1,$wed2,$wed3, 0.1"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#sidebar .widget.widget_daftarpaket .lst a {
color: <?php echo (get_option('liwicol')) ? get_option('liwicol') : '#333333' ?>;
}
#sidebar .widget.widget_daftarpaket .lst span {
color: <?php echo (get_option('lipromcol')) ? get_option('lipromcol') : '#ffffff' ?>;
background: <?php echo (get_option('liprobg')) ? get_option('liprobg') : '#e81111' ?>;
}
#sidebar .widget.widget_daftarpaket .relpri {
color: <?php echo (get_option('lipricol')) ? get_option('lipricol') : '#88cc33' ?>;
}

#sidebar .widget.widget_daftarpaket .relpri del {
color: <?php echo (get_option('lidiscol')) ? get_option('lidiscol') : '#e81111' ?>;
}

#sidebar .widget .tagcloud a {
border: 1px solid <?php echo (get_option('wtextcol')) ? get_option('wtextcol') : '#aaaaaa' ?>;
}
#sidebar .widget blockquote {
background: rgb(<?php if (get_option('widbg')) { 
echo "$q1,$q5,$q3"; 
} else { 
echo '247,247,247'; 
} 
?>);
}
#sidebar .widget .calendar_wrap th {
    background: <?php echo (get_option('widhcol')) ? get_option('widhcol') : '#eeeeee' ?>;
	color: <?php echo (get_option('widhbg')) ? get_option('widhbg') : '#444444' ?>;
}

#sidebar .search-post fieldset {
background: #fdfdfd;
}

#sidebar .search-post input {
background: #fdfdfd;
	color: #444;
}

.tttl {
color: #fff;
}

.tttl .fa {
color: #ff1155;
}






#footbar {
background: <?php echo (get_option('fowidbg')) ? get_option('fowidbg') : '#ffffff' ?>;
color : <?php echo (get_option('fowidcol')) ? get_option('fowidcol') : '#555555' ?>;
}
#footbar .widget h3,
#footbar .widget-small h3 {
border-bottom: 1px solid rgba(<?php if (get_option('fowidcol')) { 
echo "$wed1,$wed2,$wed3, 0.2"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#footbar .widget a {
color : <?php echo (get_option('fowidlink')) ? get_option('fowidlink') : '#009900' ?>;
}
#footbar .widget .tagcloud a {
border: 1px solid <?php echo (get_option('fowidlink')) ? get_option('fowidlink') : '#009900' ?>;
}
#footbar .widget .search-post input.spo {
background: <?php echo (get_option('fowidbg')) ? get_option('fowidbg') : '#ffffff' ?>;
border-bottom: 1px solid  <?php echo (get_option('fowidcol')) ? get_option('fowidcol') : '#555555' ?>;
color : <?php echo (get_option('fowidcol')) ? get_option('fowidcol') : '#555555' ?>;
}
#footbar .widget .calendar_wrap table {
background: rgba(<?php if (get_option('fowidcol')) { 
echo "$wed1,$wed2,$wed3, 0.2"; 
} else { 
echo '240,240,240,0.2'; 
} ?>);
}
#footbar .widget .calendar_wrap table thead {
background: rgba(<?php if (get_option('fowidcol')) { 
echo "$wed1,$wed2,$wed3, 0.2"; 
} else { 
echo '240,240,240,0.2'; 
} ?>);
}
#footbar .widget.widget_rss ul li:first-child,
#footbar .widget.widget_meta ul li:first-child,
#footbar .widget.widget_nav_menu ul li:first-child,
#footbar .widget.widget_recent_entries ul li:first-child,
#footbar .widget.widget_pages ul li:first-child,
#footbar .widget.widget_archive ul li:first-child,
#footbar .widget.widget_categories ul li:first-child {
border: 0;
}
#footbar .widget.widget_rss ul li,
#footbar .widget.widget_meta ul li,
#footbar .widget.widget_nav_menu ul li,
#footbar .widget.widget_recent_entries ul li,
#footbar .widget.widget_pages ul li,
#footbar .widget.widget_archive ul li,
#footbar .widget.widget_categories ul li {
border-top: 1px solid rgba(<?php if (get_option('fowidcol')) { 
echo "$we1,$we2,$we3, 0.2"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#footbar .widget.widget_rss ul li ul li:first-child,
#footbar .widget.widget_meta ul li ul li:first-child,
#footbar .widget.widget_nav_menu ul li ul li:first-child,
#footbar .widget.widget_recent_entries ul li ul li:first-child,
#footbar .widget.widget_pages ul li ul li:first-child,
#footbar .widget.widget_archive ul li ul li:first-child,
#footbar .widget.widget_categories ul li ul li:first-child,
#footbar .widget.widget_categories ul li ul li:first-child{
border-top: 1px solid  rgba(<?php if (get_option('fowidcol')) { 
echo "$we1,$we2,$we3, 0.1"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#footbar .widget .dapro .prs {
border-left: 1px solid rgba(<?php if (get_option('fowidcol')) { 
echo "$we1,$we2,$we3, 0.2"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#footbar .widget.widget_jadwaltour .jadw {
border-bottom: 1px solid rgba(<?php if (get_option('fowidcol')) { 
echo "$we1,$we2,$we3, 0.2"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#footbar .widget.widget_daftarpaket .lst {
border-bottom: 1px solid rgba(<?php if (get_option('fowidcol')) { 
echo "$we1,$we2,$we3, 0.2"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#footbar .widget.widget_paketpopuler .lst {
border-bottom: 1px solid rgba(<?php if (get_option('fowidcol')) { 
echo "$we1,$we2,$we3, 0.2"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#footbar .widget .weesid {
border-bottom: 1px solid rgba(<?php if (get_option('fowidcol')) { 
echo "$we1,$we2,$we3, 0.2"; 
} else { 
echo '240,240,240,1'; 
} ?>);
}
#footbar .widget.widget_daftarpaket .lst span,
#footbar .widget.widget_paketpopuler .lst span {
background: <?php echo (get_option('fowidlink')) ? get_option('fowidlink') : '#009900' ?>;
color : <?php echo (get_option('fowidbg')) ? get_option('fowidbg') : '#ffffff' ?>;
}

.footer {
background: <?php echo (get_option('footbg')) ? get_option('footbg') : '#7bae91' ?>;
color : <?php echo (get_option('footco')) ? get_option('footco') : '#ffffff' ?>;
}
.footer a {
color : <?php echo (get_option('footlk')) ? get_option('footlk') : '#ffffff' ?>;
}
#return-to-top {
background: <?php echo (get_option('bttbg')) ? get_option('bttbg') : '#7bae91' ?>;
color : <?php echo (get_option('btt')) ? get_option('btt') : '#ffffff' ?>;
}

@media screen and (max-width:1050px) {


.kon:after {
border-bottom: 70px solid <?php echo (get_option('headerbg')) ? get_option('headerbg') : '#ffffff' ?>;
}
}

@media screen and (max-width:980px) {

.mob {
background:  <?php echo (get_option('levmenubg')) ? get_option('levmenubg') : '#ffffff' ?>;
}
.mobi:before {
	border-bottom: 12px solid <?php echo (get_option('levmenubg')) ? get_option('levmenubg') : '#7bae91' ?>;
}
.mobi .accordion li a {
color: <?php echo (get_option('levmenucol')) ? get_option('levmenucol') : '#7bae91' ?>;
}
.mobi .accordion li.menu-item-has-children:after {
border-top: 6px solid <?php echo (get_option('levmenucol')) ? get_option('levmenucol') : '#7bae91' ?>;
}
.mobi .accordion li ul {
    background: <?php echo (get_option('lev2menubg')) ? get_option('lev2menubg') : '#fdfdfd' ?>;
}
.mobi .accordion li ul li a {
color: <?php echo (get_option('lev2menucol')) ? get_option('lev2menucol') : '#63a57f' ?>;
}
.mobi .accordion li ul li.menu-item-has-children:after {
border-top: 6px solid <?php echo (get_option('lev2menucol')) ? get_option('lev2menucol') : '#63a57f' ?>;
}
.mobi .accordion li ul li ul {
    background: <?php echo (get_option('lev3menubg')) ? get_option('lev3menubg') : '#ffffff' ?>;
}
.mobi .accordion li ul li ul li a {
color: <?php echo (get_option('lev3menucol')) ? get_option('lev3menucol') : '#63a57f' ?>;
}
.mobi .accordion li ul li ul li.menu-item-has-children:after {
border-top: 6px solid <?php echo (get_option('lev3menucol')) ? get_option('lev3menucol') : '#63a57f' ?>;
}
}


@media screen and (max-width:640px) {


.headslide:before {
border-top: 3px solid <?php echo (get_option('slidebdr')) ? get_option('slidebdr') : '#ffffff' ?>;
border-left: 3px solid <?php echo (get_option('slidebdr')) ? get_option('slidebdr') : '#ffffff' ?>;
}

.headslide:after {
border-right: 3px solid <?php echo (get_option('slidebdr')) ? get_option('slidebdr') : '#ffffff' ?>;
border-bottom: 3px solid <?php echo (get_option('slidebdr')) ? get_option('slidebdr') : '#ffffff' ?>;
}
}




</style>