<section id="getintouch">

    <div class="IV_element">
        
        <div class="IV_element-inner">
            
            <div class="IV_element-body">
                
                    <h3><?php the_title(); ?></h3>

                    <h4><?php get_field('g_gs_subtitle'); ?></h4>
                
                <ul class="placeIV">
                    
                    

                        <li>
                            
                            <form>

                            <div class="inputs">

                                    <?php if (dynamic_sidebar('III section Widgets')); ?>
                                
                                    <input type="text" name="fulname" placeholder="Name (Required)" required>

                                    <input type="email" placeholder="Email (Required)" required>

                                    <textarea placeholder="Subject" required></textarea>

                                    <textarea style="min-height: 151px"; placeholder="Write your message here..." required></textarea>

                                    <input class="submit"  type="submit" value="send">


                            </div>
                                
                            </form>

                        </li>
                    
                    
              
 
                         <li class="placeIV-2">   
                             
                  

                            <div class="IV_element-body">

                                <ul>
                                
                                    <li><p><?php the_content(); ?></li>


                                    <li><ul class="placeIV-3">



                                            <div class="icon-map">        

                                                <li><a href="https://www.google.lt/maps/place/Lost+City,+Kalifornija+95222,+Jungtin%C4%97s+Valstijos/@38.0866692,-120.7573648,15z/data=!3m1!4b1!4m5!3m4!1s0x80908fafb01ae371:0x1fbd94adef81b731!8m2!3d38.08667!4d-120.74861">Elm St. 14/05 Lost City</a></li>

                                            </div>  

                                            <div class="icon-phone">

                                                <li><a href="tel:+35283318635">+ 35283318635</a></li>

                                            </div>

                                            <div class="icon-mail" itemscope itemtype="http://schema.org/Person">

                                                <li><a href="mailto:info@hezalcorp.com"><meta itemprop="email" content="info@hexalcorp.com">info@hexalcorp.com</a></li>

                                            </div>

                                        </ul></li>
                                        </ul>
                                  </div> 
                        </li>  

                </ul>
                            
            </div>

        </div>
            
    </div>

</section>