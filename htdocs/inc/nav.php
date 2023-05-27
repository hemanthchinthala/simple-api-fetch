
<?php

$mynavslugs = ['<i class="fad fa-home" style="color: red;" ></i> Home' => '../',
			   //' Trending' => '#',
			   '<i class="fad fa-search" ></i> Find' => '../find' ];

function navi() {
$sitename = ucfirst($_SERVER['SERVER_NAME']); 
  global $mynavslugs;
  $navi = '<div class="menunav" >
             <ul class="hList"  >
            <!---li class="nav-item"><a href="/" class=" btn btn-primary btn-sm ajaxhomelink mr-1"><i class="fa fa-home"></i></a></li--->';
      // Auto generate some entrys
      foreach($mynavslugs as $name => $slug) {
        $navi.= ' <li class="nav-item">
		<a href="/'.$slug.'"  class="ajaxhome btn btn-primary btn-sm mr-1 btn-block me-1 " >'.$name.'  </a> </li>';
      }

  $navi.= '
        </ul>
		</div> 
		';  
	
  echo $navi;
	
  echo ' <br> ' ; 

}


?>