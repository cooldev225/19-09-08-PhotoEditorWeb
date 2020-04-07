<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title><?php echo $page_title; ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicons -->
<link rel="shortcut icon" href="/assets/dist/images/favicon.ico" />
<link rel="apple-touch-icon" href="/assets/dist/images/favicon.ico" />
<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<!-- CRITICAL STYLES -->
<link rel="preload" href="/assets/dist/images/logo_mobile.jpg" as="image" />
<link rel="preload" href="/assets/dist/images/logo.png" as="image" />
<meta name="theme-color" content="#203750" />
<base href="<?php echo $base_url; ?>" />
<?php
	foreach ($meta_data as $name => $content)if (!empty($content))echo "<meta name='$name' content='$content'>".PHP_EOL;
	foreach ($stylesheets as $media => $files){
		foreach ($files as $file){
			$url = starts_with($file, 'http') ? $file : base_url($file);
			echo "<link href='$url' rel='stylesheet' media='$media'>".PHP_EOL;	
		}
	}		
	foreach ($scripts['head'] as $file)
	{
		$url = starts_with($file, 'http') ? $file : base_url($file);
		echo "<script src='$url'></script>".PHP_EOL;
	}
?>
</head>
<style type="text/css">
.home-slider{
	height: 762px !important;
	max-width: 1500px !important;
}
.container-area{
	position: relative;
    max-width: 1490px;
    margin-left: 5px;
    margin-right: 5px;
    margin-top: -500px;
        z-index: 100;
}
@font-face {
    font-family:"Cangkhoi";
    src: url("/assets/dist/fonts/cangkhoi/Cangkhoi.etf") /* EOT file for IE */
}
@font-face {
    font-family:"Cangkhoi";
    src: url("/assets/dist/fonts/cangkhoi/Cangkhoi.ttf") /* TTF file for CSS3 browsers */
}
@font-face {
    font-family:"1952-rheinmetall";
    src: url("/assets/dist/fonts/1952-rheinmetall/1952 RHEINMETALL.ttf") /* TTF file for CSS3 browsers */
}
@font-face {
    font-family:"A Sensible Armadillo";
    src: url("/assets/dist/fonts/a-sensible-armadillo/A Sensible Armadillo.ttf") /* TTF file for CSS3 browsers */
}
@font-face {
    font-family:"BlackberryJamPersonalUse-rXOB";
    src: url("/assets/dist/fonts/billy-argel_blackberry-jam-personal-use/BlackberryJamPersonalUse-rXOB.ttf") /* TTF file for CSS3 browsers */
}
@font-face {
    font-family:"Cagliostro-Regular";
    src: url("/assets/dist/fonts/cagliostro/Cagliostro-Regular.ttf") /* TTF file for CSS3 browsers */
}
@font-face {
    font-family:"JandaStylishScript";
    src: url("/assets/dist/fonts/kimberly-geswein_janda-stylish-script/JandaStylishScript.ttf") /* TTF file for CSS3 browsers */
}
@font-face {
    font-family:"Raphtalia";
    src: url("/assets/dist/fonts/nurf-designs_raphtalia-personal-use-only/Raphtalia.otf") /* TTF file for CSS3 browsers */
}
@font-face {
    font-family:"Dancing Script";
    src: url("/assets/dist/fonts/pablo-impallari_dancing-script/Dancing Script.ttf") /* TTF file for CSS3 browsers */
}
@font-face {
    font-family:"Sickness";
    src: url("/assets/dist/fonts/sickness/Sickness.ttf") /* TTF file for CSS3 browsers */
}
@font-face {
    font-family:"URANIA CZECH";
    src: url("/assets/dist/fonts/urania-czech/URANIA CZECH.ttf") /* TTF file for CSS3 browsers */
}
/*
@font-face {
    font-family:"GistUprightExtrabold";
    src: url("/assets/dist/fonts/yellow-design-studio_gist/ GistUprightExtraboldDemo-RwAe.otf")
}*/
</style>
<body class="<?php echo $body_class; ?>">
   