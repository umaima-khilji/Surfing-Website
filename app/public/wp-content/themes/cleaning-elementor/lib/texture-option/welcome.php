<!--- tab first -->
<div class="theme_link">
    <h3><?php esc_html_e('1. Setup Home Page','cleaning-elementor'); ?><!-- <php echo $theme_config['plugin_title']; ?> --></h3>
        <p><?php esc_html_e('To set up the HomePage in Cleaning Elementor theme, Just follow the below given Instructions.','cleaning-elementor'); ?> </p>
<p><?php esc_html_e('Go to Wp Dashboard > Pages > Add New > Create a Page using “Homepage Template” available in Page attribute.','cleaning-elementor'); ?> </p>
<p><?php esc_html_e('Now go to Settings > Reading > Your homepage displays > A static page (select below) and set that page as your homepage.','cleaning-elementor'); ?> </p>
     <p>
        <?php
		if($this->_check_homepage_setup()){
            $class = "activated";
            $btn_text = __("Home Page Activated",'cleaning-elementor');
            $Bstyle = "display:none;";
            $style = "display:inline-block;";
        }else{
            $class = "default-home";
             $btn_text = __("Set Home Page",'cleaning-elementor');
             $Bstyle = "display:inline-block;";
            $style = "display:none;";
        }
        ?>
        <button style="<?php echo esc_attr($Bstyle); ?>" class="button activate-now <?php echo esc_attr($class); ?>">

            <?php echo esc_html($btn_text);?>
                
        </button>
		
         </p>
    <p>
        <a target="_blank" href="https://testerwp.com/docs/cleaning-elementor-doc/how-to-install-cleaning-elementor-theme/" class="button button-primary"><?php esc_html_e('Theme Documentation','cleaning-elementor'); ?></a>
    </p>
</div>

<!--- tab third -->

<!--- tab second -->

<div class="theme_link">
    <h3><?php esc_html_e('2. Customize Your Website','cleaning-elementor'); ?></h3>

    <p><?php esc_html_e('Cleaning Elementor theme support live customizer for home page set up. Everything visible at home page can be changed through customize panel','cleaning-elementor'); ?></p>
    <p>
    <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php esc_html_e("Start Customize","cleaning-elementor"); ?></a>
    </p>
</div>
<!--- tab third -->

  <div class="theme_link">
    <h3><?php esc_html_e("3. Customizer Links","cleaning-elementor"); ?></h3>
    <div class="card-content">
        <div class="columns">
                <div class="col">
                    <a href="<?php echo admin_url('customize.php?autofocus[control]=custom_logo'); ?>" class="components-button is-link"><?php esc_html_e("Upload Logo","cleaning-elementor"); ?></a>
                    <hr>
                    <a href="<?php echo admin_url('customize.php?autofocus[panel]=woocommerce'); ?>" class="components-button is-link"><?php esc_html_e("Woocommerce","cleaning-elementor"); ?></a><hr>

                </div>

               <div class="col">

                <a href="<?php echo admin_url('customize.php?autofocus[panel]=cleaning-elementor-panel-frontpage'); ?>" class="components-button is-link"><?php esc_html_e("FrontPage Sections","cleaning-elementor"); ?></a><hr>


                 <a href="<?php echo admin_url('customize.php?autofocus[section]=bizesc_html_ecommerce_footer_section_content'); ?>" class="components-button is-link"><?php esc_html_e("Footer Section","cleaning-elementor"); ?></a><hr>
            </div>

        </div>
    </div>

</div>
<!--- tab fourth -->
  <div class="theme_link">
    <h3><?php esc_html_e("4. Premium Version","cleaning-elementor"); ?></h3>
    <div class="card-content">
        <div class="columns">
               
                    <a href="https://testerwp.com/elementor-wp/cleaning-twp/" target="_blank" class="button button-primary"><?php esc_html_e("Check Pro","cleaning-elementor"); ?></a>
                    <hr>
               
 

        </div>
    </div>

</div>