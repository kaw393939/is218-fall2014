<?php

$page_type = $_GET['pagetype'];

$obj = new $page_type;

class page {

   public $content;
   
   function __construct() {
      $this->content = '<!doctype html>
      <html class="no-js" lang="">
          <head>
	          <meta charset="utf-8">
		          <meta http-equiv="X-UA-Compatible" content="IE=edge">
			          <title></title>
				          <meta name="description" content="">
					          <meta name="viewport"
						  content="width=device-width,
						  initial-scale=1">
						  
						          <!-- Place favicon.ico
							       and
							       apple-touch-icon(s)
							       in the root
							       directory -->
							       
							               <link
								       rel="stylesheet"
								       href="css/normalize.css">
								               <link
									       rel="stylesheet"
									       href="css/main.css">
									               <script
										       src="js/vendor/modernizr-2.8.3.min.js"></script>
										           </head>
											       <body>';

   }

   function __destruct() {
     $this->addContent();
     $this->content .= '
     <script
     src="//ajax.googleapis.com/ajax/libs/jquery/{{JQUERY_VERSION}}/jquery.min.js"></script>
             <script>window.jQuery || document.write(\'<script
	     src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>\')</script>
	             <script src="js/plugins.js"></script>
		             <script src="js/main.js"></script>

			             <!-- Google Analytics: change UA-XXXXX-X to
					  be your site\'s ID. -->
					          <script>
						              (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
							                  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new
									  Date;
									              e=o.createElement(i);r=o.getElementsByTagName(i)[0];
										                  e.src=\'//www.google-analytics.com/analytics.js\';
												              r.parentNode.insertBefore(e,r)}(window,document,\'script\',\'ga\'));
													                  ga(\'create\',\'UA-XXXXX-X\',\'auto\');ga(\'send\',\'pageview\');
															          </script>
																      </body>
																      </html>';


     echo $this->content;
   }
}

class index extends page {

  
  function addContent() {

    $this->content .= 'i\'m an index page';
  }
  

}










?>
