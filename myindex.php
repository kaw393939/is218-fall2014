<?php
  
  $obj = new program;
 
class program {

  public function __construct() {
   $page_type = 'index';

   if(!empty($_GET)) {
      $page_type = $_GET['page'];
   }
   
   $obj = new $page_type;
   
   if($_SERVER['REQUEST_METHOD'] == 'GET') {
     $obj->get();
   }  else {
     $obj->post();
   }
  }
}   
   
   abstract class page {
     
     public $content;

     public function __construct() {
        $this->pageheader();
        $this->pagemenu();
     }
     private function pagemenu() {
                $this->content .= '
		         <ul>
			            <li><a href="myindex.php?page=tweet">Tweet</a></li>
				               <li><a href="myindex.php?page=timeline">Timeline</a></li>
					               ';

     }
     private function pagefooter() {

       $this->content .= '</body></html>';
     }
     private function pageheader() {
        $this->content .= '<!doctype html>
	<html class="no-js" lang="">
	    <head>
	            <meta charset="utf-8">
		            <meta http-equiv="X-UA-Compatible" content="IE=edge">
			            <title></title>
				            <meta name="description" content="">
					            <meta name="viewport" content="width=device-width,
						    initial-scale=1">

						            <link rel="apple-touch-icon"
							    href="apple-touch-icon.png">
							            <!-- Place favicon.ico in the root
									 directory -->

									         <link rel="stylesheet"
										 href="css/normalize.css">
										         <link
											 rel="stylesheet"
			 href="css/main.css">
         <script
		 src="js/vendor/modernizr-2.8.3.min.js"></script>
	     </head>
             <body>';

     }

     public function __destruct() {
        $this->pagefooter();
	echo $this->content;
     }

     public function get() {
       $this->content .=  '
       <form method="POST" action="myindex.php?page=timeline">
       First name: <input type="text" name="firstname"><br>
       Last name: <input type="text" name="lastname">
      <input type="submit">
      </form>
       ';
     }

     public function post() {
       print_r($_POST);
     }

   }
  
   class index extends page {

   }

   class tweet extends page {

   public function __construct() {
      parent::__construct();
      $this->content .= 'tweeting I will go';
   }

   }

   class timeline extends page {

   }


