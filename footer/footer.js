class Footer extends HTMLElement {
   connectedCallback() {
      this.innerHTML = `

<footer id="footer">
   <div class="footer-widgets ">
      <div class="container">
         <div class='column dt-sc-one-fourth first'>
            <aside id="text-3" class="widget widget_text">
               <div class="textwidget">
                  <div class="vc_empty_space" style="height: 8px"><span class="vc_empty_space_inner"></span>
                  </div>
                  <img src="img/Dr.smrithiayurakshaclinic.png" width="25%" title="" alt="Logo">
                  <p style="margin-top: 10px;">
                     Smriti Ayurkasha Clinic is one of the best Ayurvedic treatment centers in Kerala
                     that offers genuine, authentic, and best Ayurvedic treatment.
                  </p>
                  <!-- <div class="vc_empty_space" style="height: 30px"><span class="vc_empty_space_inner"></span>
                          </div> -->
               </div>
            </aside>
         </div>
         <div class='column dt-sc-one-fourth '>
            <aside id="text-4" class="widget widget_text">
               <h3 class="widgettitle">Treatments</h3>
               <div class="textwidget">
                  <ul class="footer__treatment-list">
                     <li>
                        <a href="treatment.html">Wound Healing Therapy</a>
                        <!-- <ul class="footer-li_sub-ul">
                                   <li>DIABETIC WOUND</li>
                                   <li>BEDSORE</li>
                                   <li>FISSURE IN ANO</li>
                                   <li>GENRAL WOUND</li>
                                </ul> -->
                     </li>
                     <li><a href="panchakarma.html">Panchakarma</a></li>
                     <li><a href="treatment.html">Vanitha Clinic </a></li>
                  </ul>
               </div>
            </aside>
         </div>
         <div class='column dt-sc-one-fourth '>
            <aside id="text-5" class="widget widget_text">
               <h3 class="widgettitle">Our Time Schedule</h3>
               <table class="footer_time-slot">
                  <tr>
                     <th>Mon - Sat</th>
                  </tr>
                  <tr>
                     <td>
                        <i class="fa fa-clock-o" aria-hidden="true" style="color: blue;"></i>
                        9am to 7pm
                     </td>
                  </tr>
                  <tr>
                     <th>Sunday</th>
                  </tr>
                  <tr>
                     <td>
                        <i class="fa fa-clock-o" aria-hidden="true" style="color: red;"></i>
                        Closed
                     </td>
                  </tr>
               </table>
            </aside>
         </div>
         <div class='column dt-sc-one-fourth '>
            <aside id="text-7" class="widget widget_text">
               <h3 class="widgettitle">Contact Us</h3>
               <table class="footer_contact-table">
                  <tr>
                     <th>Phone</th>
                     <td><a href="tel:+919567760405"> : +91 9567 760 405 </a></td>
                  </tr>
                  <tr>
                     <th>Email</th>
                     <td><a href="mailto:dr.smrithi22@gmail.com"> : dr.smrithi22@gmail.com</a></td>
                  </tr>
               </table>
               <div class="textwidget">
                  <ul class="dt-sc-sociable alignleft">
                     <li> 
                        <a id="footer__social-icon-fb" class="fa fa-facebook-square" title="Facebook" href="https://www.facebook.com/Dr.Smrithi.Wound.Healing.Specialist"></a> 
                     </li>
                     <li> 
                        <a id="footer__social-icon-insta" class="fa fa-instagram" title="Instagram" href="https://www.instagram.com/dr_smrithi/"></a> 
                     </li>
                     <li> 
                        <a id="footer__social-icon-youtube" class="fa fa-youtube-play" title="Youtube" href="https://www.youtube.com/channel/UCwmUYcoxGmKFCxarQCcxAzA"></a>
                     </li>
                  </ul>
               </div>
            </aside>
         </div>
      </div>
   </div>
   <div class="footer-copyright dt-sc-dark-bg">
      <div class="container">
         <div class="column dt-sc-one-half first ">&copy; 2022 Smrithi Ayuraksha Clinic. All rights reserved.
         </div>
         <div class="column dt-sc-one-half footer-menu">
            <ul id="menu-footer-menu" class="menu-links">
               <li id="menu-item-380" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-380"><a
                     href="#!">Privacy Policy</a></li>
               <li id="menu-item-381" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-381"><a
                     href="#!">Terms of Use</a></li>
               <li id="menu-item-382" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-382"><a
                     href="#!">Site Map</a></li>
            </ul>
         </div>
      </div>
   </div>
</footer>`
   }
}
customElements.define('site-footer', Footer);