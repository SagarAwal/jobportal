
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include 'common_pages/headers.php';?>
<!--		<div id="Shape4"><img src="<?php //echo base_url();?>resources/images/images/Shape4.png"></div> -->
		    <div id="latest_container">
			            
						
                        <div id="tabs1" class="active" onclick="javascript:aply_active('tabs1');">
                        <div id="LatestJobs">Hot Jobs</div>
                        </div>
						
					
                        <div id="tabs2" class="" onclick="javascript:aply_active('tabs2');">
			<div id="LatestResumes">Hot Resume</div>
                        </div>
                        
						<div id="tabs3" class="" onclick="javascript:aply_active('tabs3');">
			<div id="LatestCompanies"> Hot Companies </div>
                        </div>
                         
                        <div class="clearfix"></div>
                        <div class="border"></div>
                        
                        <div class="latest_job">
                            <?php if(!empty($latest_jobs)){
                                $ini = 1;
                                $job_count = count($latest_jobs);
                                $ltst_count = count($latest_jobs);
                                foreach($latest_jobs as $ltst){
                                    $ltst_count--;?>
                            <div class="jobs_container">
                                <div class="comp_logo"> 
                                <?php if($ltst['logo'] != ""){
                                    $pr_pic = $ltst['logo'];
                                }elseif($ltst['profile_pic'] != "" && $ltst['profile_pic'] != 'no file'){
                                    $pr_pic = $ltst['profile_pic'];
                                }else{
                                     $pr_pic = 'profilepic.png';
                                }?>    
                                    <img width="34px" height="38px" src="<?php echo base_url().'uploads/profile_images/'.$pr_pic; ?>"> 
                                
                                </div>
                            <div class="job">
                                <div class="job_title"> <a href="<?php echo $url.'welcome/job_details/'.$ltst['job_id'];?>"><?php echo $ltst['job_title'];?></a></div>
                            <div class="comp_name"> <?php if($ltst['company_name'] == ""){ 
                                echo $ltst_count['first_name'].' '.$ltst['last_name'];
                                }else{
                                    echo $ltst['company_name'];
                                } ?> </div>
                            </div>
                                <div class="loc_icon"> <input type="hidden" value="Software Technology Park, Service Rd N, Islamabad, Pakistan" name="adrs_<?php echo $ini;?>" id="adrs_<?php echo $ini;?>"/> <a href="<?php echo base_url().'welcome/load_map/'.$ltst['job_id'];?>"> <img height="25px" src="<?php echo base_url();?>resources/images/images/Layer40copy4.png"> </a> </div>
                            <div class="location"> <?php echo $ltst['city_name'];?> </div>
                            
                            <div class="job_typ">
                            <?php if($ltst['job_type'] == 1){?>
                                <img src="<?php echo base_url();?>resources/images/images/full_time.png"/>
                                <?php }else{?>
                                <img src="<?php echo base_url();?>resources/images/images/part_time.png"/>
                                <?php }?>
                            </div>
                            </div>
                            
                            <?php if($ltst_count != 0){ ?>
                            <div class="clearfix"></div>
                            <div class="border"></div>
                            <?php } $ini++;} } 
                            if($job_count == 7){?>
                            <div class="see_mre" style="font-family:arial; font-weight:bold; font-size:16px; text-align:center;">
    <a style="color: #0e886d; font-family: Arial;font-weight: normal;text-align: center;font-size: 20px; text-decoration:none;" href="<?php echo base_url().'welcome/job_listing'?>">
        See More</a></div>              
                            <?php } ?>
                             </div>
						
						
                        <div class="latest_resume">
                            <?php if(!empty($latest_resumes)){
                                $res_count = count($latest_resumes);
                                $ltst_count = count($latest_resumes);
                                foreach($latest_resumes as $ltst){
                                    $ltst_count--;?>
                            <div class="jobs_container">
                            <div class="comp_logo"> 
                            
                                <?php if($ltst['profile_pic'] != "" && $ltst['profile_pic'] != 'no file'){
                                    $pr_pic = $ltst['profile_pic'];
                                }else{
                                     $pr_pic = 'profilepic.png';
                                }?>    
                                    <img width="34px" height="38px" src="<?php echo base_url().'uploads/profile_images/'.$pr_pic; ?>"> 
                                
                            </div>
                            <div class="job">
                                <div class="job_title"> <a href="<?php echo $url.'welcome/resume_details/'.$ltst['res_id'].'/'.$ltst['candidate_id'];?>"><?php echo $ltst['first_name'].' '.$ltst['last_name'];?></a></div>
                            <div class="comp_name"> <?php echo $ltst['category_name'];?> </div>
                            </div>
                            <div class="loc_icon"> <a href="<?php echo base_url().'welcome/load_map';?>"> <img height="25px" src="<?php echo base_url();?>resources/images/images/Layer40copy4.png"> </a> </div>
                            <div class="location"> <?php echo $ltst['city_name'];?> </div>
                            
                            <div class="job_typ">
                            <?php //if($ltst['job_type'] == 1){?>
                                <img src="<?php echo base_url();?>resources/images/images/full_time.png"/>
                                <?php //}else{?>
<!--                                <img src="<?php echo base_url();?>resources/images/images/part_time.png"/>-->
                                <?php //}?>
                            </div>
                            </div>
                            
                            <?php if($ltst_count != 0){ ?>
                            <div class="clearfix"></div>
                            <div class="border"></div>
                            <?php }}} 
                            if($res_count == 7){?>
                            <div class="see_mre">
<a href="<?php echo base_url().'welcome/cand_list';?>">
    See More</a></div>
                            <?php } ?>
                             </div>
							 
                        
                        <div class="latest_companies">
                            <?php if(!empty($latest_companies)){
                                $cmp_count = count($latest_companies);
                                $ltst_count = count($latest_companies);
                                foreach($latest_companies as $ltst){
                                    $ltst_count--;?>
                            <div class="jobs_container">
                            <div class="comp_logo"> 
                            
                                <?php if($ltst['logo'] != ""){
                                    $pr_pic = $ltst['logo'];
                                } else{
                                    if($ltst['profile_pic'] != "" && $ltst['profile_pic'] != 'no file'){
                                        $pr_pic = $ltst['profile_pic'];
                                    }else{
                                         $pr_pic = 'profilepic.png';
                                    }
                                }
                                ?>    
                                    <img width="34px" height="38px" src="<?php echo base_url().'uploads/profile_images/'.$pr_pic; ?>"> 
                                
                            </div>
                            <div class="job">
                                <div class="job_title"> <a href="#"><?php echo $ltst['company_name'];?></a></div>
                            <div class="comp_name"> <?php echo $ltst['category_name'];?> </div>
                            </div>
                            <div class="loc_icon"> <a href="<?php echo base_url().'welcome/load_map';?>"> <img height="25px" src="<?php echo base_url();?>resources/images/images/Layer40copy4.png"> </a> </div>
                            <div class="location"> <?php echo "Pakistan";?> </div>
                            
                            <div class="job_typ">
                            <?php //if($ltst['job_type'] == 1){?>
                                <img src="<?php echo base_url();?>resources/images/images/full_time.png"/>
                                <?php //}else{?>
<!--                                <img src="<?php echo base_url();?>resources/images/images/part_time.png"/>-->
                                <?php //}?>
                            </div>
                            </div>
                            
                            <?php if($ltst_count != 0){ ?>
                            <div class="clearfix"></div>
                            <div class="border"></div>
                            <?php }}} 
                            if($cmp_count == 7){
                            ?>
                            <div class="see_mre">
<a href="<?php echo base_url().'welcome/companies_listing';?>">See More</a></div>	
                            <?php } ?>
                             </div>

					<?PHP if(!empty($featured_comp)){?>		 
                        <div id="featured_company">
				<div  style="color:#0e886d; font-family: Arial;font-weight: normal;text-align: center;margin-top: 15px;font-size: 20px;">Featured Company</div>
<!--				<img src="<?php echo base_url();?>resources/images/images/Background_1.png">-->
                                <div class="comp_contnr">
                                    <img src="<?php echo base_url().'uploads/profile_images/'.$featured_comp[0]['logo'];?>"/>
                                    <div class="fcmp_ttl"> <?php echo $featured_comp[0]['company_name'];?> </div>
                                    <div class="fcmp_des"> <?php echo $featured_comp[0]['tag_line'];?>  </div>
                                    
                                </div>
                        </div>
                                        <?php }?>
                        
                         </div>
									
                        
                        <div class="sqr_sml_ads">
                        <div id="sq_ad"><img width="220px" height="230px" src="<?php echo base_url();?>resources/images/ad_sq4.png"></div>
                        <div id="sq_ad"><img width="220px" height="230px" src="<?php echo base_url();?>resources/images/ad_sq3.png"></div>
                        </div>
<!--			<div id="Rectangle11"><img src="<?php //echo base_url();?>resources/images/images/Rectangle11.png"></div>-->
<!--			<div id="Rectangle11copy"><img src="<?php //echo base_url();?>resources/images/images/Rectangle11copy.png"></div>-->
                        
<!--<div id="Rectangle10"> <img src="<?php //echo base_url();?>resources/images/images/Rectangle10.png"> </div>-->
<!--                        <div id="Shape5copy"><img src="<?php //echo base_url();?>resources/images/images/Shape5copy.png"></div>
			<div id="Shape5copy3"><img src="<?php //echo base_url();?>resources/images/images/Shape5copy3.png"></div>
			<div id="Shape5copy4"><img src="<?php //echo base_url();?>resources/images/images/Shape5copy4.png"></div>
			<div id="Shape5copy2"><img src="<?php //echo base_url();?>resources/images/images/Shape5copy2.png"></div>-->
                        
			
                        
                        <div class="statistics_container">
                        
                            <div id="pricing_heading"><img src="<?php echo base_url();?>resources/images/images/statistic_icon.png">
                                <div class="heading_text"><img src="<?php echo base_url();?>resources/images/images/SiteStatistics.png"></div>
                            </div>
                        
                            <div class="stats_cnt">
			<div id="stat_in_cnt">
                        <div id="stat_icon"><img src="<?php echo base_url();?>resources/images/images/Layer24.png"></div>
                        <div id="stat_count"><?php echo $jobs_cnt;?> <!--<img src="<?php echo base_url();?>resources/images/images/layer_33.png">--></div>
                        <div id="stat_text"><img src="<?php echo base_url();?>resources/images/images/JOBOFFERS.png"></div>
                        </div>
			
			<div id="stat_in_cnt">
                        <div id="stat_icon"><img src="<?php echo base_url();?>resources/images/images/Layer29.png"></div>
                        <div id="stat_count"><?php echo $resumes_cnt;?> <!--<img src="<?php echo base_url();?>resources/images/images/layer_20.png">--></div>
                        <div id="stat_text"><img src="<?php echo base_url();?>resources/images/images/RESUMES.png"></div>
                        </div>
                        
			<div id="stat_in_cnt">
                        <div id="stat_icon"><img src="<?php echo base_url();?>resources/images/images/Layer27.png"></div>
                        <div id="stat_count"><?php echo $companies_cnt;?> <!--<img src="<?php echo base_url();?>resources/images/images/layer_19.png">--></div>
                        <div id="stat_text"><img src="<?php echo base_url();?>resources/images/images/COMPANIES.png"></div>
                        </div>
                        
			<div id="stat_in_cnt">
			<div id="stat_icon"><img src="<?php echo base_url();?>resources/images/images/Layer31.png"></div>
			<div id="stat_count"> <?php echo $members;?> <!--<img src="<?php echo base_url();?>resources/images/images/layer_58.png">--></div>
                        <div id="stat_text"><img src="<?php echo base_url();?>resources/images/images/MEMBERS.png"></div>
                        </div>
                            </div>    
                                
                        </div>
			
<!--			<div id="Rectangle4copy10"><img src="<?php echo base_url();?>resources/images/images/Rectangle4copy10.png"></div>
			<div id="JobMugcopy"><img src="<?php echo base_url();?>resources/images/images/JobMugcopy.png"></div>
			<div id="Layer21copy"><img src="<?php echo base_url();?>resources/images/images/Layer21copy.png"></div>-->

			
                        <div class="clearfix"></div>
                        
                        <div id="pricing_container">
			<div id="pricing_heading"><img src="<?php echo base_url();?>resources/images/images/Layer41.png">
                        <div id="PlansandPricing"><img src="<?php echo base_url();?>resources/images/images/PlansandPricing.png"></div>
                        </div>

			
                        <div class="pricing">
                        <?php if(!empty($package_array)){
							$count_package	=	0;
							foreach($package_array as $item) {
								if($count_package > 3){
									break;
									}
								 ?>
                            
                            <div class="pricing_container">
                                <div class="price_title"> <?php echo $item->package_name; ?></div>
                                <div class="price"> <?php if($item->package_currency == 1){echo '$';} elseif($item->package_currency == 2) {echo 'Rs';} 
								echo $item->package_price; ?><div><?php echo " / ".$item->package_type; ?></div> </div>
                                <div class="price_duration"> <?php echo $item->package_description; ?></div>
                                <div class="price_desc"> <?php echo $item->package_detail; ?></div>
                                <div class="add_cart"> <a href="<?php echo base_url('jobs/getpackagedetail/'.$item->package_id); ?>" target='_top' rel='nofollow' class='signin last_nav' title="login"> <img src="<?php echo base_url().'resources/images/images/add_cart.png';?>"/> </a></div>
                            </div>
                            <?php 
							$count_package++;
							} }  ?>
                            
                            
                            
                        </div>
                        <?php ////////////////// END PRICING ///////////// ?>
                        
                        </div>

			
			
                        
			
			<!--<div id="ADcopy2"><img src="<?php echo base_url();?>resources/images/images/ADcopy2.png"></div>
			<div id="ADcopy3"><img src="<?php echo base_url();?>resources/images/images/ADcopy3.png"></div>
			<div id="ADcopy4"><img src="<?php echo base_url();?>resources/images/images/ADcopy4.png"></div>-->
                        
                        
<!--                        <div class="post_job_container">
                        <div id="Wegiveyou30daysfreep"><img src="<?php echo base_url();?>resources/images/images/Wegiveyou30daysfreep.png"></div>
                        <a href="<?php echo $url.'jobs';?>">
                            
                            <div id="POSTAJOBNOW"><img src="<?php echo base_url();?>resources/images/images/POSTAJOBNOW.png"></div>
                        </a>
                        </div>-->
                        
                        <div class="testimonials_outer_container">
			<div id="pricing_heading"><img src="<?php echo base_url();?>resources/images/images/testimonial_icon.png">
                            <div class=""><img src="<?php echo base_url();?>resources/images/images/Testimonials.png"></div>
                        </div>
                            
                            <div class="testim_cntnr">
<!--			<div id="layer_46"><img src="<?php echo base_url();?>resources/images/images/layer_46.png"></div>-->
			
                        <div class="autoplay">
                            
                            <?php if(!empty($testimonials)){
                                $count = count($testimonials);
                                $mod = $count%2;
                                foreach($testimonials as $testim){?>
                                <div><div class="testimonial_cntnr">
			<div class="testmonial_img">
                            <?php if($testim['profile_pic'] == ""){?>
                            <img width="70px" height="70px" src="<?php echo base_url().'uploads/profile_images/profilepic.png';?>">
                            <?php }else{?>
                            <img width="70px" height="70px" src="<?php echo base_url().'uploads/profile_images/'.$testim['profile_pic'];?>">
                            <?php } ?>
                        </div>
                        <div class="testim_ttl">
                        <div class="testimonial_usr_nam"><?php echo $testim['first_name']." ". $testim['last_name'];?></div>
                        <div class="testimonial_des"><?php echo $testim['testimonial'];?></div>
                        </div>
                        </div></div>
                            <?php }
                            
                            if($mod != 0){
                                ?>
                            
                            <div><div class="testimonial_cntnr">
			<div class="testmonial_img"><img src="<?php echo base_url();?>resources/images/images/Layer23.png"></div>
			<div class="testim_ttl">
                        <div id="testimonial_usr_nam"><img src="<?php echo base_url();?>resources/images/images/AdamSpencer.png"></div>
			<div id="testimonial_des"><img src="<?php echo base_url();?>resources/images/images/Imincrediblypleasedw.png"></div>
                        </div>
                        </div></div>
                            
                            <?php
                            }
                            
                                } ?>
                                
                                
                              </div>
                        
<!--			<div id="layer_47"><img src="<?php echo base_url();?>resources/images/images/layer_47.png"></div>-->
                            </div>
                        </div>

                            
                           

                <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                <script type="text/javascript" src="<?php echo base_url() . 'resources/js/slick.min.js';?>"></script>
                        
 <script>
                    
                    
$('.autoplay').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});

                    
                    </script>
                        
                        <div id="low_home_ad"><img width="1180px" height="155px" src="<?php echo base_url();?>resources/images/ad_hor1.png"></div>
                        
<!--			<div id="MUG"><img src="<?php echo base_url();?>resources/images/images/MUG.png"></div>-->
                            <!-- Footer Starts Here  -->
                            <script>
                            $("#LatestResumes").click(function(){
                                $('.latest_job').css('display','none');
                                $('.latest_resume').css('display','block');
                                $('.latest_companies').css('display','none');
                              });
                              
                              $("#LatestJobs").click(function(){
                                    $('.latest_job').css('display','block');
                                    $('.latest_resume').css('display','none');
                                    $('.latest_companies').css('display','none');
                                  });
                             
                            
                            $("#LatestCompanies").click(function(){
                                    $('.latest_companies').css('display','block');
                                    $('.latest_resume').css('display','none');
                                    $('.latest_job').css('display','none');
                                  });
                            
                            var map_url = "<?php echo base_url().'welcome/load_map';?>";
                            
                            function aply_active(dv){
                                if(dv == 'tabs1'){ 	
                                    $('#tabs2').removeClass('active');
                                    $('#tabs3').removeClass('active');
                                    $('#tabs1').addClass('active');
                                }
                                
                                if(dv == 'tabs2'){
                                    $('#tabs1').removeClass('active');
                                    $('#tabs3').removeClass('active');
                                    $('#tabs2').addClass('active');
                                }
                            
                                if(dv == 'tabs3'){
                                    $('#tabs1').removeClass('active');
                                    $('#tabs2').removeClass('active');
                                    $('#tabs3').addClass('active');
                                }
                              }
                            
//                            function get_adress(ele)
//                            {
//                                var name = $("#"+ele).val();
//                                alert(name);
//                                $.ajax({
//                                type: "POST",
//                                url: map_url,
//                                data: {adrs:name},
//                                success:function(msg) {
//                                    document.location = map_url;
////                                alert( "Data Saved: " + msg );
//                            }});
//                            }
                            </script>
                            
                            <div id="dialog_product_view" >
                            <div id="product_diva" >
                            </div>
                            </div>
                            
                            
                         <?php  
                         include 'common_pages/footers.php';?>
