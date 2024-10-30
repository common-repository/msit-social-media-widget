<div class="msit-social-media">
		<div>
            	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'msit-social-media') ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo esc_attr($instance['title']); ?>" placeholder="Please Enter Widget Title"
                />
         </div> 
         <div>
            	<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook URL:', 'msit-social-media') ?></label>
                <input type="text"  class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" value="<?php echo esc_attr($instance['facebook']); ?>" placeholder="Please Enter Your Facebook Link"
                />
          </div>
          <div>
            	<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Twitter URL:', 'msit-social-media') ?></label>
                <input type="text"  class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" value="<?php echo esc_attr($instance['twitter']); ?>" placeholder="Please Enter Your Twitter Link"
                />
          </div> 
          <div>
            	<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Google Plus URL:', 'msit-social-media') ?></label>
                <input type="text"  class="widefat" id="<?php echo $this->get_field_id('google'); ?>" name="<?php echo $this->get_field_name('google'); ?>" value="<?php echo esc_attr($instance['google']); ?>" placeholder="Please Enter Your Google Link"
                />
          </div> 
          <div>
            	<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Linkedin URL:', 'msit-social-media') ?></label>
                <input type="text"  class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" value="<?php echo esc_attr($instance['linkedin']); ?>" placeholder="Please Enter Your Linkedin Link"
                />
          </div> 
          <div>
            	<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Youtube URL:', 'msit-social-media') ?></label>
                <input type="text"  class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" value="<?php echo esc_attr($instance['youtube']); ?>" placeholder="Please Enter Your Facebook Link"
                />
          </div> 
          <div>
            	<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Vimeo URL:', 'msit-social-media') ?></label>
                <input type="text"  class="widefat" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" value="<?php echo esc_attr($instance['vimeo']); ?>" placeholder="Please Enter Your Vimeo Link"
                />
          </div>  
          <div>
            <label>
                <input type="checkbox" id="<?php echo $this->get_field_id('homepage-only');?>" name="<?php echo $this->get_field_name('homepage-only');?>" value="1"<?php checked(1, $instance['homepage-only'],true); ?> /><?php _e('Display Only for Home Page','msit-social-media')?>
            </label>
    	  </div>
</div>