<?php include('dom.php'); ?>
<!DOCTYPE html>
<!-- saved from url=(0031)https://www.csesoc.unsw.edu.au/ -->
<html lang="en" class=" js no-touch svg inlinesvg svgclippaths no-ie8compat js no-touch svg inlinesvg svgclippaths no-ie8compat"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Blog | CSESoc</title>

    <link rel="shortcut icon" href="https://www.csesoc.unsw.edu.au/static/img/favicon.ico">

    <link href="./Blog   CSESoc_files/css" rel="stylesheet" type="text/css">
    <link href="./Blog   CSESoc_files/css(1)" rel="stylesheet" type="text/css">


    <link rel="alternate" type="application/rss+xml" title="RSS" href="https://www.csesoc.unsw.edu.au/blog/feeds/rss/">
    <link rel="alternate" type="application/atom+xml" title="Atom" href="https://www.csesoc.unsw.edu.au/blog/feeds/atom/">



        <link rel="stylesheet" href="https://www.csesoc.unsw.edu.au/static/css/mezzanine.css">
        <link rel="stylesheet" href="https://www.csesoc.unsw.edu.au/static/css/normalize.css">
        <link rel="stylesheet" href="https://www.csesoc.unsw.edu.au/static/css/foundation.css">
        <link rel="stylesheet" href="https://www.csesoc.unsw.edu.au/static/css/csesoc.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link href="./Blog   CSESoc_files/css" rel="stylesheet" type="text/css">
    <link href="./Blog   CSESoc_files/css(1)" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="/static/js/html5shiv.js"></script>
    <script src="/static/js/respond.min.js"></script>
    <![endif]-->
    <style>
    #sponsors img {
height: 2rem!important;
}

#sponsors {
 float: center!important; 
}
</style>

<meta class="foundation-mq-small"><meta class="foundation-mq-medium"><meta class="foundation-mq-large"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-xxlarge"><style></style><meta class="foundation-mq-topbar"><style type="text/css"></style></head>

<body id="body">
  <div class="wrapper">
    <div id="content">
      <div class="row" style='padding-bottom:15px'>
        <img class="medium-12 columns" src="http://i.imgur.com/zbuGvMf.jpg" />
      </div>




    <?php


    	$numbers = $_GET["slugs"];
    	if(isset($numbers)) {

		$numbers2 = explode(",", $numbers);

    	foreach($numbers2 as &$slug) {
    		
    		$html = file_get_dom('https://www.csesoc.unsw.edu.au/blog/'.$slug.'/');
 			echo "<div class='row' style='padding-top:5px'><div class='medium-12 columns'>";
 			echo $html('div.news-card', 0)->html();
 			echo "</div></div>";
	}
}
?>

<div class="row">
	<div class="medium-12 columns">
		<div class="panel">
		
            <p style="text-align:center;font-size:0.8rem">For further information, including event cancellations <a href="http://goo.gl/jMFxF">visit the CSESoc website</a>. </p>
            <p style="text-align:center;font-size:0.8rem">Help out, <a href="http://goo.gl/2DT25y">join a team</a>.</p>
            <p style="text-align:center;font-size:0.8rem"> If you do not wish to continue to receive this email, you can unsubscribe by removing 'soc-announce' from your  <a href="http://goo.gl/tKlMb">CSE mailing lists</a>.</p>
            <p style="text-align:center;font-size:0.8rem">Stay connected with CSESoc on <a href="http://goo.gl/7L1Uw">Facebook</a>, <a href="http://goo.gl/0r4JJ">Google+</a> and <a href="http://goo.gl/YCHhl">Twitter</a> for updates on the latest news and events!</p>

            <table width="100%" class="footerText">
                <tbody>
                    <tr>
                        

                        <td style="text-align:center">
                            <div id="sponsors">
                                <img height="20px" src="http://i.imgur.com/JWWgdmW.png" title="Arc" style="margin:0 0 0 5px">
                                <img height="20px" src="http://i.imgur.com/its7TXP.png" title="PWC" style="margin:0 0 0 5px">
                                <img height="20px" src="http://i.imgur.com/bfOPOq5.png" title="Freelancer" style="margin:0 0 0 5px">
                                <img height="20px" src="http://i.imgur.com/joMvTxK.png" title="Accenture" style="margin:0 0 0 5px">
                                <img height="20px" src="http://i.imgur.com/c8ZBNes.png" title="Jane Street" style="margin:0 0 0 5px">
                                <img height="20px" src="http://i.imgur.com/RZgobMU.png" title="Google" style="margin:0 0 0 5px">
                                <img height="20px" src="http://i.imgur.com/EhItV4B.png" title="Facebook" style="margin:0 0 0 5px">
                                
                            </div>
                        </td>

                    </tr>
                    
                </tbody>
            </table>
        

</div>
	</div>
</div>



  
    </div>
  </div>
</body></html>

