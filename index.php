<?php include('dom.php'); ?>
<!DOCTYPE html>
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

   <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>

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
      max-height: 3rem!important;
      padding:10px;
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
            <img class="medium-12 columns" src="http://i.imgur.com/FVydpgu.png" />
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
                  <p style="text-align:center;font-size:0.8rem">For further information, including event cancellations <a href="https://www.csesoc.unsw.edu.au/">visit the CSESoc website</a>. </p>
                  <p style="text-align:center;font-size:0.8rem">Help out, <a href="https://www.csesoc.unsw.edu.au/teams/">join a team</a>.</p>
                  <p style="text-align:center;font-size:0.8rem"> If you do not wish to continue to receive this email, you can unsubscribe by removing 'soc-announce' from your  <a href="https://status.cse.unsw.edu.au/Control_Panel/Mail/Mailing_List_Subscriptions">CSE mailing lists</a>.</p>
                  <p style="text-align:center;font-size:0.8rem">Stay connected with CSESoc on <a href="https://www.facebook.com/groups/csesoc/">Facebook</a> for updates on the latest news and events!</p>
                  <table width="100%" class="footerText">
                     <tbody>
                        <tr>
                           <td style="text-align:center">
                              <div id="sponsors">
                                 <?php
                                 $html = file_get_dom('https://www.csesoc.unsw.edu.au/sponsors');

                                 $principal = $html('.table-sponsors', 0);
                                 foreach ($principal('img') as $key => $value) {
                                    echo "<img src=\"//www.csesoc.unsw.edu.au$value->src\" alt=\"$value->alt\" />";
                                 }

                                 $major = $html('.table-sponsors', 1);
                                 foreach ($major('img') as $key => $value) {
                                    echo "<img src=\"//www.csesoc.unsw.edu.au$value->src\" alt=\"$value->alt\" />";
                                 }
                                 ?>
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
