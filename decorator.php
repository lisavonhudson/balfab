<!DOCTYPE>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
  <meta http-equiv="x-ua-compatible" content="IE=Edge"/>
<title>Balfab Services, LLC - Dynamic Balancing Services, Fan Repair and Rebuilding <?php echo $title; ?></title>
<meta name="google-site-verification" content="aIW5zB_YFmclIHWoTMB_9kpSlnHSS5DTPcLtGoYSTjs" />
<link rel="stylesheet/less" type="text/css" href="css/balfab3.less">
<style>
  body{
  visibility: hidden;
  }
</style>
</head>
<body>

<div class="wrapper">
<div class="header-contain">
  <div class="header">
    <div class="logo-contain">
      <img src="images/logo.png"  title="BalFab Services, LLC" alt="BalFab Services, LLC" class="logo" />
      <img src="images/fan-logo.png"  alt="spinning fan" class="spinning-fan"/>
      <img src="images/logo-arrow.png"  alt="arrow" class="arrow"/>
      
    
  </div>
    
   <ul class="nav" id="nav<?php echo $class;?>">  
       <li id="homelink"><a href="index.php">Home</a></li>  
       <li id="serviceslink"><a href="#">Services</a>  
           <ul> 
           
           <li><a href="dynamic-balancing-services.php">Dynamic Balancing Services</a></li>
            <li><a href="fan-repair.php">Fan Repair and Maintenance</a></li>  
            <li><a href="custom-fabrication.php">Fabrication Capabilities</a></li>  
            <li><a href="maintenance-repairs.php">Preventative Maintenance and Repairs</a></li>   
           </ul>  
       </li>  
       <li id="systemslink"><a href="#">Systems</a>  
           <ul>  
               <li><a href="air-quality-control.php">Air Quality Control</a></li>   
               <li><a href="air-make-up.php">Air Make-up Systems</a></li>  
                <li><a href="specialized-ducting.php">Custom or Specialized Ducting</a></li>
                <li><a href="scrap-trim-handling-systems.php">Scrap &amp; Trim Handling Systems</a></li>   
           </ul>  
       </li>  
       <li id="contactlink"><a href="contact.php">Contact Us</a></li>  
   </ul> 
 </div>
</div>
<?php 

/*image function*/

function slideshow($images, $ip){
  $in = count($images);
  if($in >0)
      {

  $slides ="";
  $captions = '';

  for ($i=0; $i<$in; $i++)
                {

                    $slides .='<img class="ss-img" img-index="'.$i.'" src="images/'.$ip.'/'.$images[$i][0].'" alt="" />';
                    $captions.='<li style="list-style-type: none;"  li-index="'.$i.'">'.$images[$i][1].'</li>';
                }
    

         echo '<div class="slideshow-container">';
          echo '<div class="lva-slideshow">';
          echo $slides;
         echo '<img id="prev" class="ss-nav" src="images/prev.png" alt="previous image"/><img id="next" class="ss-nav"src="images/next.png" alt="next image"/>';
           
          echo '</div>';

          
          echo '<div class="select-container">';
          echo '<div class="slideshow-title"></div>';
          echo '<ul id="captions">'.$captions.'</ul>';
          echo '<div id="slider"></div>';
          echo '</div>';
          
         
          echo '</div>';


      }
}
echo '<div class="content ';
 
echo $class;

 echo '">';


if($class == 'home')
{
  
  echo '<div class="pageContent">';
  echo $heading; 
   echo $content; 
  echo '</div>';
}
else
{
  echo '<h1>'.$heading.'</h1>';
  echo '<div class="pageContent">';
  echo $content; 
  echo '</div>';

      if($imagePath != 'none'){
      slideshow($images,$imagePath);
    }
  }
        ?>

        
</div>
<!--end content-->
  <div class="footer-contain">  
    <div class="footer">
      <!--div class="address">
        <p>590 Milwaukee Street, Lomira, WI 53048</p>
        <p>Phone: (920) 269-8057</p>
        <p>Fax: (920) 269-8110</p>
      </div-->
      <div class="copyright">&copy; <?php echo date('Y'); ?> BalFab Services, LLC</div>
      <div class="emergency">
        <h2>Have an Emergency?</h2>
        <p>Call (414) 659-1902</p>
      </div>
      
    </div>
    
</div>

</div>

<script src="js/less-1.3.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/jQueryRotateCompressed.js"></script>
<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
<script type="text/javascript" src="js/hoverintent.min.js"></script> 
<script type="text/javascript" src="js/balfab.js"></script> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50750007-1', 'balfabservices.com');
  ga('send', 'pageview');

</script>
</body>
</html>