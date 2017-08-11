<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

function ns_wcapb_options_group() {
    register_setting('ns_wcapb_free_options', 'ns_wcapb_text');
    register_setting('ns_wcapb_free_options', 'ns_wcapb_delay');
}
 
add_action ('admin_init', 'ns_wcapb_options_group');



function ns_wcapb_update_options_form() {
	$wt_repeat = get_option('ns_wcapb_text');
	$wt_repeat = get_option('ns_wcapb_delay');

    ?>
		<a href="http://www.nsthemes.com/product/wordpress-custom-alert-popup-box/?utm_source=NS%20WordPress%20Custom%20Alert%20Popup%20Box%20Bannerone&utm_medium=Bannerone%20dashboard&utm_campaign=NS%20WordPress%20Custom%20Alert%20Popup%20Box%20Bannerone%20premium"><img src="<?php echo NS_LAYER_COOKIE_PLUGIN_URL; ?>/img/bannerooone.png" style="width: 100%; height: auto;"></a>
	    <div class="verynsbigbox">
			<div class="nsbigboxOrange">
				<div class="titlensbigboxOrange">
					<h4>CUSTOM ALERT POPUP BOX</h4>
				</div>
				<div class="contentnsbigbox">
					<p>	ALL FREE VERSION FEATURES and:<br/><br/>
						- Set cookie expire date<br/>
						- Choose full width layer background color<br/>
						- Choose full width layer opacity<br/>
						- Set popup background color<br/>
						- Set popup border width and color<br/>
						- Set popup content padding</p>
					<a href="http://www.nsthemes.com/product/wordpress-custom-alert-popup-box/?utm_source=Custom%20Alert%20Popup%20Box%20Sidebar&utm_medium=Sidebar%20dentro%20settings&utm_campaign=Custom%20Alert%20Popup%20Box%20Sidebar%20premium" class="linkBigBoxNS">
						<div class="buttonNsbigboxOrange">
							UPGRADE!
						</div>
					</a>
				</div>
			</div>
			
			<div class="nsbigboxthemeOrange">
				<div class="titlensbigboxOrange">
					<h4>SUBSCRIBE TO OUR NEWSLETTER</h4>
				</div>
				<div class="contentnsbigbox">
					<!-- Begin MailChimp Signup Form -->
					<form action="//nsthemes.us12.list-manage.com/subscribe/post?u=07ab11a197e784f0a8f6214a4&amp;id=d48f6e6eaa" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<label for="mce-EMAIL">STAY TUNED!<br/><span>Thanks to use BTTA plugin! Submit your email to keep in touch!</span></label>
						<input type="email" value="" name="EMAIL" class="buttonNsEmailOrange" id="mce-EMAIL" placeholder="email address" required>
						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_07ab11a197e784f0a8f6214a4_d48f6e6eaa" tabindex="-1" value=""></div>
						<div class="buttonNsbigboxOrange" onclick="document.getElementById('mc-embedded-subscribe-form').submit(); return false;">
							SUBSCRIBE!
						</div>
					</form>
					<!--End mc_embed_signup-->
				</div>
			</div>

			<div class="nsbigboxthemeOrange">
				<div class="titlensbigboxOrange">
					<h4>FULLEAT FREE THEME</h4>
				</div>
				<div class="contentnsbigbox">
					<a href="http://www.nsthemes.com/product/fulleat-free-html-theme/?utm_source=Tema%20Custom%20Alert%20Popup%20Box%20Sidebar&utm_medium=Sidebar%20Tema%20dentro%20settings&utm_campaign=Tema%20Custom%20Alert%20Popup%20Sidebar%20premium"><img src="<?php echo NS_LAYER_COOKIE_PLUGIN_URL; ?>/img/fulleat-theme.jpg" class="imgnsbigbox"></a>
					<p> - Responsive<br/>
						- Form Mail Ready with documentation<br/>
						- Simple customization<br/>
						- Light weight code<br/>
						- Google Font included<br/>
						- Mail.php included<br/>
						- Well documented and well commented</p>
					<a href="http://www.nsthemes.com/product/fulleat-free-html-theme/?utm_source=Tema%20Custom%20Alert%20Popup%20Box%20Sidebar&utm_medium=Sidebar%20Tema%20dentro%20settings&utm_campaign=Tema%20Custom%20Alert%20Popup%20Sidebar%20premium" class="linkBigBoxNS">
						<div class="buttonNsbigboxOrange">
							DISCOVER MORE
						</div>
					</a>
				</div>
			</div>
		</div>
	   
	   
       <div class="verynsbigboxcontainer">
        <div class="icon32" id="icon-options-general"><br /></div>
        <h2>NS WordPress Custom Alert Popup Box settings</h2>
        <p>&nbsp;</p>
        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php settings_fields('ns_wcapb_free_options'); ?>
            <table>
                <tbody>
					<tr valign="top">
						<th class="titledesc" scope="row">
							<label for="ns_wcapb_text">Text Popup Box</label>
							<div class="ns-tooltip">?<span class="ns-tooltiptext">Insert text for Popup Box</span></div>
						</th>
                        <td class="forminp">
                            <?php wp_editor( get_option('ns_wcapb_text'), 'ns_wcapb_text', $settings = array('textarea_name'=>'ns_wcapb_text') ); ?>
							<span class="description"></span>
                        </td>
                    </tr>
					<tr valign="top">
						<th class="titledesc" scope="row">
							<label for="ns_wcapb_delay">Popup Box Delay</label>
							<div class="ns-tooltip">?<span class="ns-tooltiptext">Insert delay of Popup Box</span></div>
						</th>
                        <td class="forminp">
                            <input type="text" name="ns_wcapb_delay" id="ns_wcapb_delay" value="<?php echo get_option('ns_wcapb_delay'); ?>">
							<span class="description"></span>
                        </td>
                    </tr>
					<tr>
						<td colspan="2">
							<p><a href="http://www.nsthemes.com/product/wordpress-custom-alert-popup-box/?utm_source=NS%20WordPress%20Custom%20Alert%20Popup%20Box%20Bannerino&utm_medium=Bannerino%20dentro%20settings&utm_campaign=NS%20WordPress%20Custom%20Alert%20Popup%20Box%20Bannerino%20premium"><img src="<?php echo NS_LAYER_COOKIE_PLUGIN_URL; ?>/img/banneriiino.png"></a></p>
						</td>
					</tr>
                </tbody>
            </table>
			<p class="submit">
				<input type="submit" class="button-primary" id="submit" name="submit" value="<?php _e('Save Changes'); ?>" />
			</p>
        </form>
    </div>
    <?php
}

?>