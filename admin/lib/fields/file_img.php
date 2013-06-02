<?
							
final class file_img extends field{

	function get_extension($filename){
	// get a filename by $filename, returns extension, chars from last appearence of '.'
		$last = strrpos($filename,'.');
		$n = strlen($filename) - $last + 1;
	
		return strtolower(substr($filename,$last + 1,$n)); 
	}

	function view(){
		if ($this->value != "")
			return "<img width='100' src='".$this->config->get('base_url_data')."img/thumbs/".$this->value."'>";

	}
	function bake_field (){
				$output="";	
		if ($this->value != "")	{				
			$output .= "<div id='".$this->fieldname."'>";
			$output .= "<img  src=\"".$this->config->get('base_url_data')."img/thumbs/".$this->value."\">";
			$output .= "&nbsp;&nbsp;<a  href=\"javascript:DeleteFile('".$this->fieldname."','".$this->table."','".$this->rid."','".$this->value."');\"><img src='views/img/close.jpg'></a></div>"; 
		}// else $output .= "No hay ninguna imagen cargada.<BR>";					
		$output.= "<input type=\"file\" id=\"".$this->fieldname."\" name=\"".$this->fieldname."\">";
		return $output;
	}
		
	function exec_add () {
		if ($_FILES[$this->fieldname]['name'] != ""){
					$filename_new = generar_nombre_archivo($_FILES[$this->fieldname]['name']);
					copy($_FILES[$this->fieldname]['tmp_name'],$this->config->get('data_dir').'img/'.$filename_new);
					

					$this->resize_image($this->get_extension($filename_new),$this->config->get('data_dir').'img/'.$filename_new,$this->config->get('data_dir').'img/'.$filename_new,$this->config->get('big_w'),$this->config->get('big_h')) ;
					$this->cropImage($this->config->get('thumb_w'), $this->config->get('thumb_h'), $this->config->get('data_dir').'img/'.$filename_new, $this->get_extension($filename_new), $this->config->get('data_dir').'img/'."thumbs/".$filename_new) ;
					/* resize_image($this->get_extension($filename_new),$this->config->get('data_dir').'img/'.$filename_new,$this->config->get('data_dir').'img/'."thumbs/".$filename_new,$this->config->get('thumb_w,$this->config->get('thumb_h) ; */
			return $filename_new;									
		}
		return '';
	}
	function exec_edit () {
			if ($_FILES[$this->fieldname]['name'] != ""){
					$filename_new = generar_nombre_archivo($_FILES[$this->fieldname]['name']);
					copy($_FILES[$this->fieldname]['tmp_name'],$this->config->get('data_dir').'img/'.$filename_new);
					
					// big
					$this->resize_image($this->get_extension($filename_new),$this->config->get('data_dir').'img/'.$filename_new,$this->config->get('data_dir').'img/'.$filename_new,$this->config->get('big_w'),$this->config->get('big_h')) ;
					
					//thumb
					/* @resize_image($this->get_extension($filename_new),$this->config->get('data_dir').'img/'.$filename_new,$this->config->get('data_dir').'img/'."thumbs/".$filename_new,$this->config->get('thumb_w,$this->config->get('thumb_h) ; */
$this->cropImage($this->config->get('thumb_w'), $this->config->get('thumb_h'), $this->config->get('data_dir').'img/'.$filename_new, $this->get_extension($filename_new), $this->config->get('data_dir').'img/'."thumbs/".$filename_new) ;

					
						return $filename_new;
					
				}
				return '';
					
	}
	
	

function cropImage($nw, $nh, $source, $stype, $dest) {
//
// CROP IMAGE ( Recorte forzado de imagen )
// Necesita: NUEVO_ANCHO, NUEVO_ALTO, PATH DE ARCHIVO FUENTE, EXTENSION DE 3 LETRAS ARCHIVO, PATH Y NOMBRE ARCHIVO DESTINACION
//
// Devuelve true si todo ha ido correcto.
// El resultado es la copia del archivo manipulado.

    $size = getimagesize($source);
    $w = $size[0];
    $h = $size[1];
 
    switch($stype) {
        case 'gif':
        $simg = imagecreatefromgif($source);
        break;
        case 'jpg':
        $simg = imagecreatefromjpeg($source);
        break;
        case 'jpeg':
        $simg = imagecreatefromjpeg($source);
        break;

        case 'png':
        $simg = imagecreatefrompng($source);
        break;
    }
 
    $dimg = imagecreatetruecolor($nw, $nh);
 
    $wm = $w/$nw;
    $hm = $h/$nh;
 
    $h_height = $nh/2;
    $w_height = $nw/2;
 
    if($wm> $hm) {
 
        $adjusted_width = $w / $hm;
        $half_width = $adjusted_width / 2;
        $int_width = $half_width - $w_height;
 
        imagecopyresampled($dimg,$simg,-$int_width,0,0,0,$adjusted_width,$nh,$w,$h);
 
    } elseif(($wm <$hm) || ($w == $h)) {
 
        $adjusted_height = $h / $wm;
        $half_height = $adjusted_height / 2;
        $int_height = $half_height - $h_height;
 
        imagecopyresampled($dimg,$simg,0,-$int_height,0,0,$nw,$adjusted_height,$w,$h);
 
    } else {
        imagecopyresampled($dimg,$simg,0,0,0,0,$nw,$nh,$w,$h);
    }
 
  
   
    switch($stype) {
        case 'gif':
imagegif($dimg,$dest,100);
        break;
        case 'jpg':
       imagejpeg($dimg,$dest,100);       
        break;
        case 'jpeg':
       imagejpeg($dimg,$dest,100);       
        break;
        case 'png':
       imagepng($dimg,$dest);
               break;
    }

    
}

function resize_image($stype,$fname,$destino,$n_width,$n_height) {
//
// RESIZE IMAGE ( cambia el tamano de la imagen al especificado siguiendo ratio)
// n_width i n_height son los dos nuevos valores para el tamano.
//
// Realiza la copia del archivo
// Devuelve true si todo ha ido ben


/*$mimetypes = array("image/jpg","image/jpeg", "image/pjpeg",  "image/gif", "image/png");
switch($mime_archivo) {
    case $mimetypes[0]:
    case $mimetypes[1]:
    case $mimetypes[2]:
      $img = imagecreatefromjpeg($fname);
      break;
    case $mimetypes[3]:
      $img = imagecreatefromgif($fname);
      break;
    case $mimetypes[4]:
      $img = imagecreatefrompng($fname);
      break;
  }*/


if ($n_width == 0 and $n_height == 0){

copy($fname,$destino);
	return false;
}
switch($stype) {
        case 'gif':
        $img = imagecreatefromgif($fname);
        break;
        case 'jpg':
        $img = imagecreatefromjpeg($fname);
        break;
        case 'jpeg':
        $img = imagecreatefromjpeg($fname);
        break;

        case 'png':
        $img = imagecreatefrompng($fname);
        break;
    }
 
 
$ancho = imagesx($img);
$alto = imagesy($img);


if ($n_width > $ancho and $n_height > $alto or $n_width == 0){

copy($fname,$destino);
	return false;
}


if ($ancho > $alto or $n_width == 92 or $n_width == 130 or $n_width == 556 or $n_width == 441){ // changed for bisdixit.Falta funcio make thumbs make content i make bigs

	$r_ancho = $n_width;
	$r_alto = ($alto * $r_ancho) / $ancho;

}else if ($ancho < $alto){
	$r_alto = $n_height;
	$r_ancho = ($ancho * $r_alto) / $alto;

} else { // iguales
	$r_ancho = $n_width;
	$r_alto = ($alto * $r_ancho) / $ancho;

}
//echo "Ancho: ".$ancho."<BR>Alto: ".$alto."<BR>";



/*

*/

/* echo "N_Ancho: ".$r_ancho."<BR>N_Alto: ".$r_alto."<BR>"; */

//number_format(float number [, int decimals [, string dec_point, string thousands_sep]])

$r_alto = number_format($r_alto,0,"","");
$r_ancho = number_format($r_ancho,0,"","");

//echo "R_alto: ".$r_alto."<BR>R_ancho: ".$r_ancho;

$thumb = imagecreatetruecolor($r_ancho,$r_alto); 

$fname22= $destino;


imagecopyresampled($thumb,$img,0,0,0,0,$r_ancho,$r_alto,$ancho,$alto); 
 
 switch($stype) {
        case 'gif':
		 imagegif($thumb, $fname22,100);
        break;
        case 'jpg':
	      imagejpeg($thumb, $fname22,100);
        break;
        case 'jpeg':
         imagejpeg($thumb, $fname22,100);
        break;

        case 'png':
        imagepng($thumb, $fname22);
        break;
    }
 
  
  }
  

  


}

