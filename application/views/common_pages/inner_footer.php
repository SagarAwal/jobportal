<?php include 'login_popup.php';?>

<script>
    
    <?php if(isset($this->session->userdata['user_data']['usr_id'])){?>
    link_auto = '<?php echo base_url();?>index.php/jobs/auto_comp_data/';
        link_search = '<?php echo base_url();?>index.php/jobs/inner_search_data/';
    <?php }else{?>
            link_auto = '<?php echo base_url();?>index.php/welcome/auto_comp_data/';
        link_search = '<?php echo base_url();?>index.php/welcome/inner_search_data/';
        <?php }?>
     var options, a;
jQuery(function(){
	options = { serviceUrl:link_auto,
        minChars:1,
	delimiter: /(,|;)\s*/, // regex or character
	deferRequestBy: 0, //miliseconds //aditional parameters
	noCache: false, //default is false, set to true to disable caching
	// callback function:
	onSelect: function(suggestion){
            $.ajax({
                url: link_search+suggestion.value,
                success: function(dta) {
                 var jobs = dta;
                window.location.replace(link_search+suggestion.data);
                 //alert(jobs);
                      
                }
            });
        //alert('You selected: ' + suggestion.value); 
    }};
    
	a = $('#autocomplete').autocomplete(options);
       
});
</script>
<div id="Rectangle5">
<img src="<?php echo base_url();?>resources/images/images2/Rectangle5.png" width="1368" height="527" /></div>

<div class="footer">
     
     <div class="footer_container">
         <div class="footer_ttl">INFORMATION</div>
         <ul class="footer_lnks">
             <li><a href="#">HOME</a></li>
             <li><a href="#">ABOUT US</a></li>
             <li><a href="#">JOBS</a></li>
             <li><a href="#">CANDIDATES</a></li>
             <li><a href="#">COMPANIES</a></li>
             <li><a href="#">PRICING AND PLANS</a></li>
             <li><a href="#">PRIVACY POLICY</a></li>
             <li><a href="#">TERMS AND CONDITIONS</a></li>
             <li><a href="#">TESTIMONIALS</a></li>
             <li><a href="#">CONTACT US</a></li>
             <li><a href="#">FAQ'S</a></li>
         </ul>
     </div>
     
     <div class="footer_container">
        <div class="footer_ttl">SERVICES</div>
         <ul class="footer_lnks">
             <li><a href="#">POST A JOB</a></li>
             <li><a href="#">POST A RESUME</a></li>
             <li><a href="#">FIND A JOB</a></li>
             <li><a href="#">FIND A CANDIDATE</a></li>
             <li><a href="#">MANAGE JOBS</a></li>
             <li><a href="#">MANAGE RESUMES</a></li>
         </ul>
     </div>
     
     
     <div class="footer_container spacer">
         <div class="footer_ttl">MY ACCOUNT</div>
         <ul class="footer_lnks">
             <li><a href="#">SIGN IN</a></li>
             <li><a href="#">MY ALERTS</a></li>
             <li><a href="#">VIEW PROFILE</a></li>
             <li><a href="#">EDIT PROFILE</a></li>
             <li><a href="#">MY DASHBOARD</a></li>
             <li><a href="#">HELP</a></li>
         </ul>
     </div>
     
     <div class="footer_container">
         <div class="footer_ttl">FOLLOW US</div>
         <ul class="footer_lnks">
             <li><a href="#"><div class="social_icon"><img src="<?php echo base_url().'resources/images/images/twitter.png';?>"/></div>TWITTER</a></li>
             <li><a href="#"><div class="social_icon"><img src="<?php echo base_url().'resources/images/images/facebook.png';?>"/></div>FACEBOOK</a></li>
             <li><a href="#"><div class="social_icon"><img src="<?php echo base_url().'resources/images/images/rss.png';?>"/></div>RSS</a></li>
         </ul>
     </div>
     
     
     <div class="prop_txt">
         This website is not officially sponsored by CISCO Systems (R).</br>
         This website is neitehr affiliated with nor endorsed by CISCO Systems Inc.</br>
         “Cisco, “CCIE, “CCSI, “CCNP, “CCSP, “CCIP, “CCNA, “CCDA, “CCDP, are trademarks owned by Cisco Systems Inc.</br>
We respect the Trademarks of all other mentioned companies and institutions. When you send information to us, you grant us a non-exclusive right to use or distribute the information in any way we believe appropriate without incurring any obligation to you. 
     </div>
     
 </div>


</div>
</body>
</html>
