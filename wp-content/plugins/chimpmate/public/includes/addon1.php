<?php 
$theme = $wpmchimpa['theme']['a1'];
?>

 <style type="text/css">

.wpmchimpab {
width: 100%;
background: #fff;
display:none;
<?php  if(isset($theme["addon_bg_c"])){
    echo 'background-color:'.$theme["addon_bg_c"].';';
}?>
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
}
.wpmchimpab .wpmchimpa-leftpane{
padding: 0 20px;
display: inline-block;
float: left;
<?php 
        if(isset($theme["addon_dissoc"])){
          echo 'display:none;';
        }?>
}
.wpmchimpab form{
  display: inline-block;
  padding: 0 20px;
  width: calc(100% - 240px);
min-width: 250px;
}
.wpmchimpab .wpmchimpa-cont{
  margin-top: 20px;
}
.wpmchimpab h3{
  font-size: 18px;
  <?php 
        if(isset($theme["addon_heading_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["addon_heading_f"]).';';
        }
        if(isset($theme["addon_heading_fs"])){
            echo 'font-size:'.$theme["addon_heading_fs"].'px;';
        }
        if(isset($theme["addon_heading_fw"])){
            echo 'font-weight:'.$theme["addon_heading_fw"].';';
        }
        if(isset($theme["addon_heading_fst"])){
            echo 'font-style:'.$theme["addon_heading_fst"].';';
        }
        if(isset($theme["addon_heading_fc"])){
            echo 'color:'.$theme["addon_heading_fc"].';';
        }
    ?>
}
.wpmchimpab .wpmchimpa_para ,
.wpmchimpab .wpmchimpa_para *{
<?php if(isset($theme["addon_msg_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["addon_msg_f"]).';';
}if(isset($theme["addon_msg_fs"])){
    echo 'font-size:'.$theme["addon_msg_fs"].'px;';
}?>
}

.wpmchimpab  .wpmchimpa-field{
position: relative;
width:100%;
margin: 0 auto 10px auto;
}
.wpmchimpab .inputicon{
display: none;
}
.wpmchimpab .wpmc-ficon .inputicon {
display: block;
width: 45px;
height: 45px;
position: absolute;
top: 0;
left: 0;
pointer-events: none;
<?php 
if(isset($theme["addon_tbox_h"])){
  echo 'width:'.$theme["addon_tbox_h"].'px;';
  echo 'height:'.$theme["addon_tbox_h"].'px;';
}
?>
}
.wpmchimpab .wpmchimpa-field.wpmc-ficon input[type="text"],
.wpmchimpab .wpmchimpa-field.wpmc-ficon .inputlabel{
  padding-left: 45px;
  <?php 
if(isset($theme["addon_tbox_h"])){
  echo 'padding-left:'.$theme["addon_tbox_h"].'px;';
  }?>
}
<?php
$col = ((isset($theme["addon_tbox_fc"]))? $theme["addon_tbox_fc"] : '#888');
foreach ($form['fields'] as $f) {
  if($f['icon'] != 'idef' && $f['icon'] != 'inone')
    echo '.wpmchimpab .wpmc-ficon [wpmcfield="'.$f['tag'].'"] ~ .inputicon {background: '.$this->getIcon($f['icon'],25,$col).' no-repeat center}';
}
?>
.wpmchimpab .wpmchimpa-field select,
.wpmchimpab input[type="text"]{
    width: 100%;
    height: 45px;
    background: #f8fafa;
    padding: 0 20px;
    border-radius: 5px;
    border: 1px solid #e4e9e9;
    color: #353535;
    font-size: 16px;
    outline:0;
    display: block;
    <?php 
        if(isset($theme["addon_tbox_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["addon_tbox_f"]).';';
        }
        if(isset($theme["addon_tbox_fs"])){
            echo 'font-size:'.$theme["addon_tbox_fs"].'px;';
        }
        if(isset($theme["addon_tbox_fw"])){
            echo 'font-weight:'.$theme["addon_tbox_fw"].';';
        }
        if(isset($theme["addon_tbox_fst"])){
            echo 'font-style:'.$theme["addon_tbox_fst"].';';
        }
        if(isset($theme["addon_tbox_fc"])){
            echo 'color:'.$theme["addon_tbox_fc"].';';
        }
        if(isset($theme["addon_tbox_bgc"])){
            echo 'background:'.$theme["addon_tbox_bgc"].';';
        }
        if(isset($theme["addon_tbox_w"])){
            echo 'width:'.$theme["addon_tbox_w"].'px;';
        }
        if(isset($theme["addon_tbox_h"])){
            echo 'height:'.$theme["addon_tbox_h"].'px;';
        }
        if(isset($theme["addon_tbox_bor"]) && isset($theme["addon_tbox_borc"])){
            echo ' border:'.$theme["addon_tbox_bor"].'px solid '.$theme["addon_tbox_borc"].';';
        }
    ?>
}


.wpmchimpab .wpmchimpa-field.wpmchimpa-drop:before{
content: '';
width: 45px;
height: 45px;
position: absolute;
right: 0;
top: 0;
pointer-events: none;
background: no-repeat center;
background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAAJ1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADdEvm1AAAADHRSTlMAEDBAYJC/wN/g7/BpIqb+AAAASUlEQVQI12NgYGBgDWCAAJ8jEJppzSkFMEPizJlGMKPmzJljIJr1DBCAlNuAGIcZsAG4FFwxSPtxsJzkmTMTIVbsOa2AainEGQDXCB+cPGdC9gAAAABJRU5ErkJggg==);
<?php 
if(isset($theme["addon_tbox_h"])){
  echo 'width:'.$theme["addon_tbox_h"].'px;';
  echo 'height:'.$theme["addon_tbox_h"].'px;';
}
?>
}
.wpmchimpab input[type="text"] ~ .inputlabel{
position: absolute;
top: 0;
left: 0;
right: 0;
pointer-events: none;
width: 100%;
line-height: 45px;
color: rgba(0,0,0,0.6);
font-size: 16px;
font-weight:500;
padding: 0 20px;
white-space: nowrap;
<?php 
if(isset($theme["addon_tbox_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["addon_tbox_f"]).';';
}
if(isset($theme["addon_tbox_fs"])){
    echo 'font-size:'.$theme["addon_tbox_fs"].'px;';
}
if(isset($theme["addon_tbox_fw"])){
    echo 'font-weight:'.$theme["addon_tbox_fw"].';';
}
if(isset($theme["addon_tbox_fst"])){
    echo 'font-style:'.$theme["addon_tbox_fst"].';';
}
if(isset($theme["addon_tbox_fc"])){
    echo 'color:'.$theme["addon_tbox_fc"].';';
}
?>
}
.wpmchimpab input[type="text"]:valid + .inputlabel{
display: none;
}
.wpmchimpab select.wpmcerror,
.wpmchimpab input[type="text"].wpmcerror{
  border-color: red;
}
.wpmchimpab .wpmchimpa-check *,
.wpmchimpab .wpmchimpa-radio *{
<?php
if(isset($theme["addon_check_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["addon_check_f"]).';';
}
if(isset($theme["addon_check_fs"])){
    echo 'font-size:'.$theme["addon_check_fs"].'px;';
}
if(isset($theme["addon_check_fw"])){
    echo 'font-weight:'.$theme["addon_check_fw"].';';
}
if(isset($theme["addon_check_fst"])){
    echo 'font-style:'.$theme["addon_check_fst"].';';
}
if(isset($theme["addon_check_fc"])){
    echo 'color:'.$theme["addon_check_fc"].';';
}
?>
}
.wpmchimpab .wpmchimpa-item input {
  display: none;
}
.wpmchimpab .wpmchimpa-item span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 35px;
  line-height: 29px;
  margin-right: 10px;
}

.wpmchimpab .wpmchimpa-item span:before,
.wpmchimpab .wpmchimpa-item span:after {
  content: '';
  display: inline-block;
  width: 18px;
  height: 18px;
  left: 0;
  top: 5px;
  position: absolute;
}
.wpmchimpab .wpmchimpa-item span:before {
box-shadow: 0 0 1px 1px #ccc;
background-color: #fafafa;
transition: all 0.3s ease-in-out;
border-radius: 3px;
<?php
  if(isset($theme["addon_check_borc"])){
      echo 'border: 1px solid'.$theme["addon_check_borc"].';';
  }
?>
}
.wpmchimpab .wpmchimpa-item input[type='checkbox'] + span:before {
border-radius: 3px;
}
.wpmchimpab .wpmchimpa-item input:checked + span:before{
  <?php if(isset($theme["addon_check_c"]))echo 'background: '.$theme["addon_check_c"].';';?>
}
.wpmchimpab .wpmchimpa-item input[type='checkbox'] + span:hover:after, .wpmchimpab input[type='checkbox']:checked + span:after {
  content:'';
  background: no-repeat center;
  <?php if(isset($theme['addon_check_shade']))$chs=$theme['addon_check_shade'];else $chs='1';
  echo 'background-image: '.$this->chshade($chs).';';?>
  left: -1px;
  bottom: -1px;
}
.wpmchimpab .wpmchimpa-item input[type='radio'] + span:before {
border-radius: 50%;
width: 16px;
height: 16px;
top: 5px;
}
.wpmchimpab input[type='radio']:checked + span:after {
background: <?php echo ($chs == 1)?'#7C7C7C':'#fafafa';?>;
width: 12px;
height: 12px;
top: 7px;
left: 2px;
border-radius: 50%;
}
.wpmchimpab .wpmcinfierr{
  display: block;
  height: 10px;
  line-height: 10px;
  margin-bottom: -10px;
  font-size: 10px;
  color: red;
  <?php
    if(isset($theme["addon_status_f"])){
      echo 'font-family:'.str_replace("|ng","",$theme["addon_status_f"]).';';
    }
    if(isset($theme["addon_status_fw"])){
        echo 'font-weight:'.$theme["addon_status_fw"].';';
    }
    if(isset($theme["addon_status_fst"])){
        echo 'font-style:'.$theme["addon_status_fst"].';';
    }
  ?>
}
.wpmchimpab .wpmchimpa-subs-button{
    border-radius: 3px;
    width: 100%;
	padding: 0 22px;
    color: #fff;
    font-size: 22px;
    border: 1px solid #3079ed;
   background-color: #4d90fe;
   height: 45px;
line-height: 45px;
    text-align: center;
    cursor: pointer;
    margin-bottom: 10px;
     <?php
        if(isset($theme["addon_button_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["addon_button_f"]).';';
        }
        if(isset($theme["addon_button_fs"])){
            echo 'font-size:'.$theme["addon_button_fs"].'px;';
        }
        if(isset($theme["addon_button_fw"])){
            echo 'font-weight:'.$theme["addon_button_fw"].';';
        }
        if(isset($theme["addon_button_fst"])){
            echo 'font-style:'.$theme["addon_button_fst"].';';
        }
        if(isset($theme["addon_button_fc"])){
            echo 'color:'.$theme["addon_button_fc"].';';
        }
        if(isset($theme["addon_button_w"])){
            echo 'width:'.$theme["addon_button_w"].'px;';
        }
        if(isset($theme["addon_button_h"])){
            echo 'height:'.$theme["addon_button_h"].'px;';
        }
        if(isset($theme["addon_button_bc"])){
            echo 'background-color:'.$theme["addon_button_bc"].';';
        }
        else{ ?>
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -mz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  <?php }
        if(isset($theme["addon_button_br"])){
            echo 'border-radius:'.$theme["addon_button_br"].'px;';
        }
        if(isset($theme["addon_button_bor"]) && isset($theme["addon_button_borc"])){
            echo ' border:'.$theme["addon_button_bor"].'px solid '.$theme["addon_button_borc"].';';
        }
      ?>
}
.wpmchimpab .wpmchimpa-subs-button::before{
content: '<?php if(isset($theme['addon_button'])) echo $theme['addon_button'];else echo 'Subscribe';?>';
<?php if(isset($theme["addon_button_h"])){
      echo 'line-height:'.$theme["addon_button_h"].'px;';
  } ?>
}
.wpmchimpab .wpmchimpa-subs-button:hover{
<?php if(isset($theme["addon_button_fch"])){
        echo 'color:'.$theme["addon_button_fch"].';';
    }    
    if(isset($theme["addon_button_bch"])){
        echo 'background-color:'.$theme["addon_button_bch"].';';
    } else{ ?>
  background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
background-image: -moz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -mz-linear-gradient(top,#4d90fe,#4787ed);
background-image: -o-linear-gradient(top,#4d90fe,#4787ed);
background-image: -webkit-linear-gradient(top,#4d90fe,#4787ed);
  <?php }?>
}

.wpmchimpab .wpmchimpa-subs-button.subsicon:before{
padding-left: 45px;
  <?php 
  if(isset($theme["addon_button_w"])){
      echo 'padding-left:'.$theme["addon_button_h"].'px;';
  }
  ?>
}
.wpmchimpab .wpmchimpa-subs-button.subsicon::after{
content:'';
position: absolute;
height: 45px;
width: 45px;
top: 0;
left: 0;
pointer-events: none;
  <?php 
  if(isset($theme["addon_button_h"])){
      echo 'width:'.$theme["addon_button_h"].'px;';
      echo 'height:'.$theme["addon_button_h"].'px;';
  }
  if($theme["addon_button_i"] != 'inone' && $theme["addon_button_i"] != 'idef'){
    $col = ((isset($theme["addon_button_fc"]))? $theme["addon_button_fc"] : '#fff');
     echo 'background: '.$this->getIcon($theme["addon_button_i"],25,$col).' no-repeat center;';
  }
  ?>
}
.wpmchimpab .wpmchimpa-social{
display: block;
}
.wpmchimpab .wpmchimpa-social::before{
content: '<?php if(isset($theme['addon_soc_head'])) echo $theme['addon_soc_head'];else echo 'Subscribe with';?>';
font-size: 20px;
line-height: 30px;
display: block;
     <?php
        if(isset($theme["addon_soc_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["addon_soc_f"]).';';
        }
        if(isset($theme["addon_soc_fs"])){
            echo 'font-size:'.$theme["addon_soc_fs"].'px;';
        }
        if(isset($theme["addon_soc_fw"])){
            echo 'font-weight:'.$theme["addon_soc_fw"].';';
        }
        if(isset($theme["addon_soc_fst"])){
            echo 'font-style:'.$theme["addon_soc_fst"].';';
        }
        if(isset($theme["addon_soc_fc"])){
            echo 'color:'.$theme["addon_soc_fc"].';';
        }
      ?>
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc{
margin: 5px;
cursor: pointer;
width:150px;
height: 35px;
margin-bottom: 5px;
border-radius: 5px;
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc::before{
display: block;
margin: 4px 6px;
padding: 0px 5px;
display: inline-block;
border-right: 1px solid #cccccc;
height: 23px;
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc::after{
position: absolute;
line-height: 35px;
padding-left: 10px;
color: #fff;
font-size: 14px;
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb {
    background: #2d609b;
    <?php if(!isset($wpmchimpa["fb_api"])){
	echo 'display:none;';
    }?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::before {
   content:<?php echo ChimpMate_WPMC_Assistant::getIcon('fb',25,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp {
    background: #eb4026;
    <?php if(!isset($wpmchimpa["gp_api"])){
	echo 'display:none;';
    }?>
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::before {
    content: <?php echo ChimpMate_WPMC_Assistant::getIcon('gp',25,'#fff');?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms {
    background: #00BCF2;
    <?php if(!isset($wpmchimpa["ms_api"])){
  echo 'display:none;';
    }?>
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::before {
    content: <?php echo ChimpMate_WPMC_Assistant::getIcon('ms',25,'#fff');?>
}

.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-fb::after {
    content:"Facebook";
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-gp::after {
    content:"Google Plus";
}
.wpmchimpab .wpmchimpa-social .wpmchimpa-soc.wpmchimpa-ms::after {
    content:"Outlook";
}



.wpmchimpab .wpmchimpa-signalc {
	position: relative;
	height: 50px;
}
.wpmchimpab.signalshow .wpmchimpa-signal {
  display: block;
}
.wpmchimpab .wpmchimpa-signal {
  -webkit-animation: animatew 1.5s linear infinite;
  -moz-animation: animatew 1.5s linear infinite;
  -ms-animation: animatew 1.5s linear infinite;
  -o-animation: animatew 1.5s linear infinite;
  animation: animatew 1.5s linear infinite;
  clip: rect(0, 40px, 40px, 20px); 
  height: 40px;
  width: 40px;
  position: absolute;
 display: none;
 left: calc(50% - 20px);
}
@-webkit-keyframes animatew {
  0% { 
    -webkit-transform: rotate(0deg)
  }
  100% { 
    -webkit-transform: rotate(220deg)
  }
}
@-moz-keyframes animatew {
  0% { 
    -moz-transform: rotate(0deg)
  }
  100% { 
    -moz-transform: rotate(220deg)
  }
}
@-ms-keyframes animatew {
  0% { 
    -ms-transform: rotate(0deg)
  }
  100% { 
    -ms-transform: rotate(220deg)
  }
}
@-o-keyframes animatew {
  0% { 
    -o-transform: rotate(0deg)
  }
  100% { 
    -o-transform: rotate(220deg)
  }
}
@keyframes animatew {
  0% { 
    transform: rotate(0deg)
  }
  100% { 
    transform: rotate(220deg)
  }
}
.wpmchimpab .wpmchimpa-signal:after {
  -webkit-animation: animatew2 1.5s ease-in-out infinite;
  -moz-animation: animatew2 1.5s ease-in-out infinite;
  -ms-animation: animatew2 1.5s ease-in-out infinite;
  -o-animation: animatew2 1.5s ease-in-out infinite;
  animation: animatew2 1.5s ease-in-out infinite;
  
  clip: rect(0, 40px, 40px, 20px);
  content:'';
  -webkit-border-radius: 50%; 
  -moz-border-radius: 50%; 
  -ms-border-radius: 50%; 
  -o-border-radius: 50%; 
  border-radius: 50%; 
  height: 40px;
  width: 40px;
  position: absolute; 
} 
<?php  if(isset($theme["addon_spinner_c"]))$c=$theme["addon_spinner_c"];else $c="#000";?>
@-webkit-keyframes animatew2 {
  0% {
    -webkit-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -webkit-transform: rotate(-140deg);
  }
  50% {
    -webkit-box-shadow: inset <?php echo $c;?> 0 0 0 2px;
  }
  100% {
    -webkit-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -webkit-transform: rotate(140deg);
  }
} 
@-moz-keyframes animatew2 {
  0% {
    -moz-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -moz-transform: rotate(-140deg);
  }
  50% {
    -moz-box-shadow: inset <?php echo $c;?> 0 0 0 2px;
  }
  100% {
    -moz-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -moz-transform: rotate(140deg);
  }
} 
@-ms-keyframes animatew2 {
  0% {
    -ms-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -ms-transform: rotate(-140deg);
  }
  50% {
    -ms-box-shadow: inset <?php echo $c;?> 0 0 0 2px;
  }
  100% {
    -ms-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -ms-transform: rotate(140deg);
  }
} 
@-o-keyframes animatew2 {
  0% {
    -o-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -o-transform: rotate(-140deg);
  }
  50% {
    -o-box-shadow: inset <?php echo $c;?> 0 0 0 2px;
  }
  100% {
    -o-box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    -o-transform: rotate(140deg);
  }
} 
@keyframes animatew2 {
  0% {
    box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    transform: rotate(-140deg);
  }
  50% {
    box-shadow: inset <?php echo $c;?> 0 0 0 2px;
  }
  100% {
    box-shadow: inset <?php echo $c;?> 0 0 0 7px;
    transform: rotate(140deg);
  }
}

.wpmchimpab .wpmchimpa-tag,
.wpmchimpab .wpmchimpa-tag *{
color:#000;
font-size: 10px;
text-align: center;
position: relative;
<?php
        if(isset($theme["addon_tag_f"])){
          echo 'font-family:'.str_replace("|ng","",$theme["addon_tag_f"]).';';
        }
        if(isset($theme["addon_tag_fs"])){
            echo 'font-size:'.$theme["addon_tag_fs"].'px;';
        }
        if(isset($theme["addon_tag_fw"])){
            echo 'font-weight:'.$theme["addon_tag_fw"].';';
        }
        if(isset($theme["addon_tag_fst"])){
            echo 'font-style:'.$theme["addon_tag_fst"].';';
        }
        if(isset($theme["addon_tag_fc"])){
            echo 'color:'.$theme["addon_tag_fc"].';';
        }
      ?>
}
.wpmchimpab .wpmchimpa-tag:before{

   content:<?php
        $tfs=10;
        if(isset($theme["addon_tag_fs"])){$tfs=$theme["addon_tag_fs"];}
        $tfc='#000';
        if(isset($theme["addon_tag_fc"])){$tfc=$theme["addon_tag_fc"];}
        echo $this->getIcon('lock1',$tfs,$tfc);?>;
   margin: 5px;
   top: 1px;
   position:relative;
}
.wpmchimpab .wpmchimpa-feedback{
position: relative;
text-align: center;
font-size: 16px;
<?php
if(isset($theme["addon_status_f"])){
  echo 'font-family:'.str_replace("|ng","",$theme["addon_status_f"]).';';
}
if(isset($theme["addon_status_fs"])){
    echo 'font-size:'.$theme["addon_status_fs"].'px;';
}
if(isset($theme["addon_status_fw"])){
    echo 'font-weight:'.$theme["addon_status_fw"].';';
}
if(isset($theme["addon_status_fst"])){
    echo 'font-style:'.$theme["addon_status_fst"].';';
}
if(isset($theme["addon_status_fc"])){
    echo 'color:'.$theme["addon_status_fc"].';';
}
?>
}

.wpmchimpab .wpmchimpa-feedback.wpmchimpa-done{
top: 20px;
}

</style>

<div class="wpmchimpa-reset wpmchimpselector wpmchimpab">
<?php if(isset($theme['addon_heading'])) echo '<h3>'.$theme['addon_heading'].'</h3>';?>
          <?php if(isset($theme['addon_msg'])) echo '<div class="wpmchimpa_para">'.$theme['addon_msg'].'</div>';?>
  <div class="wpmchimpa-cont">
	    <div class="wpmchimpa-leftpane">
            <div class="wpmchimpa-social">
                <div class="wpmchimpa-soc wpmchimpa-fb"></div>
                <div class="wpmchimpa-soc wpmchimpa-gp"></div>
                <div class="wpmchimpa-soc wpmchimpa-ms"></div>
            </div>
        </div>
	    <form action="" method="post">
<input type="hidden" name="action" value="wpmchimpa_add_email_ajax"/>
<input type="hidden" name="wpmcform" value="<?php echo $form['id'];?>"/>
<?php $set = array(
'icon' => false,
'type' => 1
);
$this->stfield($form['fields'],$set); ?>
			<div class="wpmchimpa-subs-button<?php echo (isset($theme['addon_button_i']) && $theme['addon_button_i'] != 'inone' && $theme['addon_button_i'] != 'idef')? ' subsicon' : '';?>"></div>
		                        <?php if(isset($theme['addon_tag_en'])){
                          if(isset($theme['addon_tag'])) $tagtxt= $theme['addon_tag'];
                          else $tagtxt='Secure and Spam free...';
                          echo '<div class="wpmchimpa-tag">'.$tagtxt.'</div>';
                          }?>	
      <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"></div></div>
		</form>
    	<div class="wpmchimpa-feedback" wpmcerr="gen"></div>
    </div>
	</div>	