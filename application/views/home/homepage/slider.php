
  
<div class="slider_page">
<div class="row" style="margin-left:0px; margin-right:0px;">
    <div class="col-md-9" style="padding:0px; ">
    	
        
        
             
    <div id="sliderb_container" style="position: relative; top: 0px; left: 0px; width: 1200px !important; height: 700px !important; overflow: hidden; ">

       

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1200px; height: 700px;
            overflow: hidden;">
            <div>
               
                <img u=image src="<?= base_url(); ?>assets/images/project2.jpg" />
                <div u="thumb">Verve Coffee Roasters by Manual Creative</div>
            </div>
            <div>
                <img u=image src="<?= base_url(); ?>assets/images/project.jpg" />
                <div u="thumb">Verve Coffee Roasters by Manual Creative</div>
            </div>
            <div>
                <img u=image src="<?= base_url(); ?>assets/images/project3.jpg" />
                <div u="thumb">Verve Coffee Roasters by Manual Creative</div>
            </div>
            <div>
                <img u=image src="<?= base_url(); ?>assets/images/project4.jpg" />
                <div u="thumb">Verve Coffee Roasters by Manual Creative</div>
            </div>
        </div>
        
        <!--#region Thumbnail Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        <!-- thumbnail navigator container -->
        <div u="thumbnavigator" style="position: absolute; bottom: 0px; right: 0px; height:150px; width:1000px;">
            <div style="filter: alpha(opacity=70); opacity:0.7;
                background-color: #477CBD; top: 0px; right: 0px; width: 100%; height: 100%; ">
            </div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides">
                <div u="prototype" style="position: absolute; width: 900px; height: 45px; top: 0; left: 0; ">
                    <div u="thumbnailtemplate" style="font-family:'new_title'; position: absolute; width: 100%; height: 100%; top: 0; left: 0; text-transform:capitalize; font-size:34px !important;  color:#fff; line-height: 45px; padding-left:10px;"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!--#endregion ThumbnailNavigator Skin End -->
        
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
       
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
      
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="top: 50%; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="top: 50%; right: 8px;">
        </span>
        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
        <!-- Trigger -->
        <script>
            jssor_sliderb_starter('sliderb_container');
			
			function sign_up_type(type) {
				
				if(type==2){
					document.getElementById("t_sign_up3").value = "2";
				}else{
					document.getElementById("t_sign_up3").value = "3";
				}
			}
			
        </script>
    </div>
        
	
    </div>

    <div class="col-md-3" style="padding:0px; " >
    	
    	<div class="col-md-10">
        	<div class="login_page">
           
            
             <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                    
                      
                                       
                                        <div class="col-md-12">
                                        
                                         <div class="form-group">
                                         <div class="btn-toggle"> 
                                         	<div class="col-md-6" style="padding:0px">
                                            
                                            <button class="btn btn-lg btn-primary new_button_creatives" id="t_sign_up1" onclick="sign_up_type(2)">REGULAR</button>
                                            </div>
                                            <div class="col-md-6" style="padding:0px">
                                           <button class="btn btn-lg btn-default new_button_creatives  active" id="t_sign_up2" onclick="sign_up_type(3)">CREATIVES</button>
                                           
                                            </div>
                                          </div>
                                          
                                        </div>
                                      	
                                        
                                        <div style="clear:both;"></div>
                                         <form action="<?=site_url('home/signup')?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <input required type="text" name="i_first_name" class="form-control" placeholder="First Name" value="" title=""/> <input id="t_sign_up3" name="t_sign_up3" type="hidden" value="2" style="color:#000"/>
                                        </div>
                                        <div class="form-group">
                                            <input required type="text" name="i_last_name" class="form-control" placeholder="Last Name" value="" title=""/>
                                        </div>
                                         <div class="form-group">
                                            <input required type="email" name="i_email" class="form-control" placeholder="Email Address" value="" title=""/>
                                        </div>
                                         <div class="form-group">
                                            <input required type="text" name="i_username" class="form-control" placeholder="Username" value="" title=""/>
                                        </div>
                                         <div class="form-group">
                                            <input required type="password" name="i_password" class="form-control" placeholder="Password" value="" title=""/>
                                        </div>
                                        
                                         <div class="form-group">
                                           
                                          
                                              <label>
                                                <input type="checkbox" name="CheckboxGroup1" value="checkbox" id="CheckboxGroup1_0">
                                                Subscribe to Bulbs Newsletter</label>
                                              
                                             
                                             
                                         </div>
                                        
                                         
                                         <div class="form-group">
                                            <input class="btn button_signup" type="submit" value="SIGN UP"/>
                                        </div>
                                         <div class="form-group">
                                            <input class="btn button_login_facebook" type="submit" value="LOG IN WITH FACEBOOK"/>
                                        </div>
                                        <div class="form-group" style="margin-bottom:50px;">
                                            By Signing Up, you agree to our Terms & Conditions
                                        and that you have read our Privacy Policy.
                                        </div>
                                      	
                                      
                                        </div>
                                       </form>
                                        
 										
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                 
                            
                            </div><!-- /.box -->
           
        </div>
        
        </div>
    </div>
</div>
</div>
