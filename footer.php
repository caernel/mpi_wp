<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ProfitMag
 */
 
$profitmag_settings = get_option( 'profitmag_options' );
?>

	</div><!-- #content -->
    </div><!-- content-wrapper-->
	<b>
	<footer id="colophon" class="site-footer clearrfix" role="contentinfo">
        <div class="wrapper footer-wrapper clearfix">

                <div class="top-bottom clearfix">
                		<div id="footer-top">
                            <div class="footer-columns">
                                
                                <?php if( is_active_sidebar( 'fo-top-col-one' ) || is_active_sidebar( 'fo-top-col-two' ) || is_active_sidebar( 'fo-top-col-three' ) || is_active_sidebar( 'fo-top-col-four' ) || 
                                    is_active_sidebar( 'fo-top-col-five' ) ||  is_active_sidebar( 'fo-top-col-six' ) ) : ?>
                                        <div class="footer1 col">
                                            <?php if( is_active_sidebar( 'fo-top-col-one' ) ) : ?>
                                                    <div class="footer-logo" class="footer-widget">
                                                     <?php   dynamic_sidebar( 'fo-top-col-one' ); ?>
                                                    </div>
                                                    
                                                    
                                            <?php endif; ?>
                                            
                                            <?php if( $profitmag_settings['show_social_header'] == 0 ) { ?>
                                                        <div class="social-links">
                                                            <?php do_action( 'profitmag_social_links' ); ?>
                                                        </div>   
                                            <?php } ?>
                                                        
                                        </div>
                                        
                                        <?php if( is_active_sidebar( 'fo-top-col-two' ) ) : ?>
                                                <div class="footer2 col" class="footer-widget">
                                                 <?php   dynamic_sidebar( 'fo-top-col-two' ); ?>
                                                </div>
                                        <?php endif; ?>
                                        
                                        <?php if( is_active_sidebar( 'fo-top-col-three' ) ) : ?>
                                                <div class="footer3 col" class="footer-widget">
                                                 <?php   dynamic_sidebar( 'fo-top-col-three' ); ?>
                                                </div>
                                        <?php endif; ?>
                                        
                                        <?php if( is_active_sidebar( 'fo-top-col-four' ) ) : ?>
                                                <div class="footer4 col" class="footer-widget">
                                                 <?php   dynamic_sidebar( 'fo-top-col-four' ); ?>
                                                </div>
                                        <?php endif; ?>
                                        
                                        <?php if( is_active_sidebar( 'fo-top-col-five' ) ) : ?>
                                                <div class="footer5 col" class="footer-widget">
                                                 <?php   dynamic_sidebar( 'fo-top-col-five' ); ?>
                                                </div>
                                        <?php endif; ?>
                                        
                                        <?php if( is_active_sidebar( 'fo-top-col-six' ) ) : ?>
                                                <div class="footer6 col" class="footer-widget">
                                                 <?php   dynamic_sidebar( 'fo-top-col-six' ); ?>
                                                </div>
                                        <?php endif; ?>
                                <?php else: ?>
                                        <!-- Preview Content --> 
                                        <div class="top-bottom clearfix">
                                    		<div id="footer-top">
                                                <div class="footer-columns">                                                    
                                                    <div class="footer1 col">
                                                        <div class="footer-logo">
                                                            <aside id="text-4" class="widget widget_text">			
                                                                <div class="textwidget"><img src="<?php echo get_template_directory_uri().'/images/Logo Footer.png'; ?>">
                                                                </div>
                		                                    </aside>                                            
                                                        </div>
                                                        
                                                        <?php if($profitmag_settings['show_social_header'] == 0) {?>
                                                        <div class="social-links">
                                                            <?php do_action('profitmag_social_links'); ?>
                                                        </div>
                                                        <?php } ?>
                                                        
                                                        <div>
                                                            <p>
                                                                Jl. Malaka Raya No.10 <br /> 
                                                                Kelapa Dua Wetan, Ciracas <br />
                                                                Jakarta Timur
                                                            </p>
                                                        </div>                                                                                                           
                                                    </div>
                                                    
													<div class="footer2 col">
															 <aside  class="widget widget_nav_menu"><h3 class="widget-title"><span>OFFICIAL</span></h3>
																<div class="menu-menu-1-container">
																	<ul id="menu-menu-1" class="menu">
																		<li><a href="perftestaqwam.com/category/kegiatan">Kegiatan</a></li>
																		<li><a href="perftestaqwam.com/category/official">Publikasi Resmi</a></li>                                                                        
																	</ul>
																</div>
															 </aside>                                        
													 </div>
													<div class="footer2 col">
															 <aside  class="widget widget_nav_menu"><h3 class="widget-title"><span>ARTIKEL</span></h3>
																<div class="menu-menu-1-container">
																	<ul id="menu-menu-1" class="menu">
																		<li><a href="perftestaqwam.com/category/makalah">Makalah</a></li>
																		<li><a href="perftestaqwam.com/category/opini">Opini</a></li>                                                                        
																	</ul>
																</div>
															 </aside>                                        
													 </div>
													<div class="footer2 col">
														 <aside  class="widget widget_nav_menu"><h3 class="widget-title"><span>TENTANG KAMI</span></h3>
															<div class="menu-menu-1-container">
																<ul id="menu-menu-1" class="menu">
																	<li><a href="perftestaqwam.com/tentang-mpi">Tentang MPI</a></li>
																	<li><a href="perftestaqwam.com/tentang-mpi/contact-person">Contact Person</a></li>
																	<li><a href="perftestaqwam.com/jadwal-kajian-mpi">Info Kajian</a></li>                                                                        
																</ul>
															</div>
														 </aside>                                        
													 </div>
                                                </div>
											</div><!-- #foter-top -->
										</div><!-- #top-bottom -->
                                <?php endif; ?>
                                
                            </div><!-- #foter-columns -->
                        
                        </div><!-- #foter-top -->
                        
                        <div id="footer-bottom">                            
                                <?php if( is_active_sidebar( 'fo-bottom-col-one' ) || is_active_sidebar( 'fo-bottom-col-two' ) ||  is_active_sidebar( 'fo-bottom-col-three' ) || is_active_sidebar( 'fo-bottom-col-four' ) ) : ?>
								<div class="footer-columns">

									<?php if( is_active_sidebar( 'fo-bottom-col-one' ) ) : ?>
											<div class="footer1 col" class="footer-widget">
											 <?php   dynamic_sidebar( 'fo-bottom-col-one' ); ?>
											</div>
									<?php endif; ?>
									
									<?php if( is_active_sidebar( 'fo-bottom-col-two' ) ) : ?>
											<div class="footer2 col" class="footer-widget">
											 <?php   dynamic_sidebar( 'fo-bottom-col-two' ); ?>
											</div>
									<?php endif; ?>
									<div class="clear"></div>
									<?php if( is_active_sidebar( 'fo-bottom-col-three' ) ) : ?>
											<div class="footer3 col" class="footer-widget">
											 <?php   dynamic_sidebar( 'fo-bottom-col-three' ); ?>
											</div>
									<?php endif; ?>
									
									<?php if( is_active_sidebar( 'fo-bottom-col-four' ) ) : ?>
											<div class="footer4 col" class="footer-widget">
											 <?php   dynamic_sidebar( 'fo-bottom-col-four' ); ?>
											</div>
									<?php endif; ?>                
                               
                                </div>
                            <?php endif; ?>
                        </div><!-- #foter-bottom -->
                </div><!-- top-bottom-->
                <div class="footer-copyright border t-center">
                    <p><?php if( !empty( $profitmag_settings['footer_copyright'] ) && $profitmag_settings['footer_copyright'] != '' ): ?>                        
                                    <?php echo $profitmag_settings['footer_copyright']; ?>
                            <?php endif; ?>
                    </p>
                </div>

        </div><!-- footer-wrapper-->
	</footer><!-- #colophon -->
	</b>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
