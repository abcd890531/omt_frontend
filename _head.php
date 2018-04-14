<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php if (isset($page__title )) { echo $page__title . ' &ndash; '; } ?> Overseas Medical</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script>
    (function(d) {
    var config = {
    kitId: 'lck8yok',
    scriptTimeout: 3000,
    async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
    </script>
    
    <link href="css/ionicons.min.css" rel="stylesheet">
    <link href="css/material-icons.css" rel="stylesheet">
    <link href="css/bootstrap-slider.min.css" rel="stylesheet">
    <link href="css/daterangepicker.css" rel="stylesheet">

    <link href="css/overseasxpress.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="<?php if (isset($is_itinerary ) && $is_itinerary) { echo 'page--itinerary'; } ?>">
