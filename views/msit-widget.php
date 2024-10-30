<?php if((1==$instance['homepage-only'] && is_home()) || 1!=$instance['homepage-only']){?>
	<?php if($instance['title']){ ?>
        <h1 class="msit-social-media-title">
                    <?php echo $instance['title'];?>
        </h1>
    <?php } ?>
    <ul class="msit-social-media">
    	<?php if($instance['facebook']){ ?>
            <li> 
                 <a class="facebook" href="<?php echo $instance['facebook'];?>"></a>
             </li>
        <?php } ?>
        <?php if($instance['twitter']){ ?>
             <li>
                 <a class="twitter" href="<?php echo $instance['twitter'];?>"></a>
             </li>
         <?php } ?>
         <?php if($instance['google']){ ?>
             <li>
                 <a class="google" href="<?php echo $instance['google'];?>"></a>
             </li>
         <?php } ?>
         <?php if($instance['linkedin']){ ?>
             <li>
                 <a class="linkedin" href="<?php echo $instance['linkedin'];?>"></a>
             </li>
         <?php } ?>
         <?php if($instance['youtube']){ ?>
             <li>
                 <a class="youtube" href="<?php echo $instance['youtube'];?>"></a>
             </li>
         <?php } ?>
         <?php if($instance['vimeo']){ ?>
             <li>
                 <a class="vimeo" href="<?php echo $instance['vimeo'];?>"></a>
             </li>
  		 <?php } ?>
      </ul>
            
<?php } ?>