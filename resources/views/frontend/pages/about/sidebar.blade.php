 <aside class="sidebar">
     <div id="custom_html-4" class="widget_text widget gt3_widget open widget_custom_html">
         <div class="textwidget custom-html-widget"><img class="alignnone size-full wp-image-1456"
                 src="{{ showImage($setting->logo) }}" alt="" width="149" height="48" />
         </div>
     </div>
     <div id="custom_html-5" class="widget_text widget gt3_widget open widget_custom_html">
         <div class="textwidget custom-html-widget">
             <div class="textwidget">
                 <p>{{ $setting->small_text_footer }}</p>
             </div>
         </div>
     </div>
     <div id="custom_html-6" class="widget_text widget gt3_widget open widget_custom_html">
         <h4 class="widget-title">Liên hệ</h4>
         <div class="textwidget custom-html-widget">
             <div class="textwidget">
                 <p><a class="gt3_icon_link gt3_custom_color"
                         style="font-size: 17px;color: #5747e4;margin-right: 15px;margin-top: -20px" href="#"
                         target="_blank" rel="noopener noreferrer" data-color="#5747e4" data-hover-color="#f47215"><br>
                         <i class="fa fa-phone" style="font-weight: bold"> </i><br>
                     </a> {{ $setting->hotline }}</p>
                 <p><a class="gt3_icon_link gt3_custom_color"
                         style="font-size: 17px;color: #5747e4;margin-right: 15px;margin-top: -5px" href="#"
                         target="_blank" rel="noopener noreferrer" data-color="#5747e4" data-hover-color="#f47215"><i
                             class="fa fa-envelope">&nbsp;</i></a>
                     {{ $setting->email }}</p>


             </div>
         </div>
     </div>
     <div id="block-7" class="widget gt3_widget open widget_block">
         <p>
             <script>
                 (function() {
                     window.mc4wp = window.mc4wp || {
                         listeners: [],
                         forms: {
                             on: function(evt, cb) {
                                 window.mc4wp.listeners.push({
                                     event: evt,
                                     callback: cb
                                 });
                             }
                         }
                     }
                 })();
             </script>
             <!-- Mailchimp for WordPress v4.10.4 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
             {{-- <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-9431" method="post" data-id="9431"
             data-name="Subscription form">
             <div class="mc4wp-form-fields">
                 <div class="mc_merge_var">
                     <input type="email" name="EMAIL" placeholder="Email Address" required />
                 </div>
                 <div class="mc_signup_submit">
                     <input type="submit" value="Sign up" />
                 </div>
             </div><label style="display: none !important;">Leave this field empty if you're human: <input
                     type="text" name="_mc4wp_honeypot" value="" tabindex="-1"
                     autocomplete="off" /></label><input type="hidden" name="_mc4wp_timestamp"
                 value="1749806025" /><input type="hidden" name="_mc4wp_form_id" value="9431" /><input type="hidden"
                 name="_mc4wp_form_element_id" value="mc4wp-form-1" />
             <div class="mc4wp-response"></div>
         </form><!-- / Mailchimp for WordPress Plugin --></p> --}}
     </div>
     <div id="block-8" class="widget gt3_widget open widget_block">
         <div class="textwidget">
             <p><a class="gt3_icon_link gt3_custom_color"
                     style="font-size: 16px; color: rgb(151, 148, 180); margin-right: 15px; margin-top: 5px;"
                     href="{{ $setting->youtube_link }}" target="_blank" rel="noopener noreferrer" data-color="#9794b4"
                     data-hover-color="#00aced"><i class="fa fa-youtube">&nbsp;</i></a>&nbsp;
                 <a class="gt3_icon_link gt3_custom_color"
                     style="font-size: 16px;color: #9794b4;margin-right: 15px;margin-top: 5px"
                     href="{{ $setting->facebook_link }}" target="_blank" rel="noopener noreferrer" data-color="#9794b4"
                     data-hover-color="#3b5998"><i class="fa fa-facebook">&nbsp;</i></a>
                 <a class="gt3_icon_link gt3_custom_color"
                     style="font-size: 16px;color: #9794b4;margin-right: 15px;margin-top: 5px" href="{{$setting->ig_link}}"
                     target="_blank" rel="noopener noreferrer" data-color="#9794b4" data-hover-color="#f04b3f"><i
                         class="fa fa-instagram">&nbsp;</i></a>
                
             </p>
         </div>
     </div>
 </aside>
