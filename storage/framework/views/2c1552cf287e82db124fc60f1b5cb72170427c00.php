<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Red Blog Theme - Free CSS Templates</title>
<meta name="keywords" content="Red Blog Theme, Free CSS Templates" />
<meta name="description" content="Red Blog Theme - Free CSS Templates by templatemo.com" />
<link href="<?php echo e(asset('templatemo_style.css')); ?>" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="templatemo_top_wrapper">
	<div id="templatemo_top">
    
        <div id="templatemo_menu">
                    
            <ul>
                <li><a href="<?php echo e(URL::to('/')); ?>" >Home</a></li>
                <li><a href="<?php echo e(URL::to('/portfolio')); ?>">Portfolio</a></li>
                <li><a href="<?php echo e(URL::to('/services')); ?>">Services</a></li>
                <li><a href="<?php echo e(URL::to('/contact')); ?>">Contact Us</a></li>
            </ul>    	
        
        </div> <!-- end of templatemo_menu -->
        
        <div id="twitter">
        	<a href="#">follow us <br />
        	on twitter</a>
        </div>
        
  </div>
</div>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    
    	<div id="site_title">
            <h1><a href="" target="_parent"><strong>Red Blog</strong><span>saidur roky</span></a></h1>
        </div>
    
    </div>
</div>

<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
		<div id="templatemo_main_top">
                    <?php echo $__env->yieldContent('content'); ?>
            
        
       	  </div>
            
          
          <div id="templatemo_sidebar">
            	
               <?php echo $__env->yieldContent('category'); ?>
                
                <div class="cleaner_h40"></div>
                
                <?php echo $__env->yieldContent('friends'); ?>
                
                <h4>Popular Blog</h4>
                    <?php
                        $popular_blog=DB::table('tbl_blog')
                                    ->orderby('hit_count','desc')
                                    ->take(3)
                                    ->get();
                    ?>
                    <ul class="templatemo_list">
                        <?php $__currentLoopData = $popular_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <li><a href="<?php echo e(URL::to('/blog_detail/'.$recent->blog_id)); ?>" target="_parent"><?php echo e($recent->blog_title); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </ul>
                
                
            </div>
        
        	<div class="cleaner"></div>
            
        </div>
        
    </div>
    
    <div id="templatemo_main_bottom"></div>
    
</div>

<div id="templatemo_footer">

    Copyright © 2048 <a href="index.html">saidur rahman roky</a>  
 
    
</div>

</body>
</html>