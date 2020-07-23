<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package firstbyte
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'firstbyte' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'firstbyte' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'firstbyte' ), 'firstbyte', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="main-block">
                <div class="row-fluid">
                    <div class="span7">
                        <img class="supportHeadPhone" src="../../../../../../img/support_mail.png" alt="">
                        <h4>Support: <a href="mailto:support@firstbyte.pro">support@firstbyte.pro</a></h4>
                        <h4>Abuse: <a href="mailto:abuse@firstbyte.pro">abuse@firstbyte.pro</a></h4>
                    </div>
                    <div class="span5">
                        <img class="supportHeadPhone" src="../../../../../../img/support_tel.png" alt="">

                        <button type="button" class="btn btn-primary btn-lg">
                            <a class="white" href="https://billing.firstbyte.pro/" data-toggle="modal">Send request<br>via Personal Area</a>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-wrapper">
        <div class="container">
            <div class="main-block">
                <div class="row-fluid">
                    <div class="span3"><h4 class="center-title">Services</h4>
                        <ul class="footer-navigate2">
                            <!-- <li><a href="../../../../../../dedicated/">Dedicated servers</a></li>-->
                            <li><a href="../../../../../../vps-vds/">Virtual servers VPS/VDS</a></li>
                            <!--<li><a href="/virt-hosting/">Virtual hosting</a></li>-->
                            <li><a href="../../../../../../dopuslugi-dns/">DNS hosting</a></li>
                            <li><a href="../../../../../../dopuslugi-backup/">Backup storage</a></li>
                            <li><a href="../../../../../../dopuslugi-software/">Software licences</a></li>
                            <li><a href="../../../../../../dopuslugi-domain/">Domain name registration</a></li>
                            <!--<li><a href="../../../../../../dopuslugi-ssl/">SSL certificate</a></li>-->
                        </ul>
                    </div>
                    <div class="span3"><h4 class="center-title">About us</h4>
                        <ul class="footer-navigate2">
                            <li><a href="../../../../../../about/">About FirstByte</a></li>
                            <li><a href="../../../../../../info/agreement/">Agreement</a></li>
                            <li><a href="../../../../../../info/agreement/">Agreement Personal</a></li>
                            <li><a href="../../../../../../about/partners/">Our partners</a></li>
                            <li><a href="../../../../../../about/datacenter/">Data-center Tier 3 DataPro</a></li>
                            <!--<li><a href="../../../../../../about/support/">Technical support</a></li>-->
                            <!--<li><a href="../../../../../../about/garantii/">SLA</a></li>-->
                            <!--<li><a href="../../../../../../about/license/">Licences</a></li>-->
                            <li><a href="../../../../../../about/vakansii/">Careers</a></li>
                            <li><a href="../../../../../../about/contacts/">Contact</a></li>
                        </ul>
                    </div>
                    <div class="span3"><h4 class="center-title">Information</h4>
                        <ul class="footer-navigate2">
                            <li><a href="../../../../../../info/news/">News</a></li>
                            <li><a href="../../../../../../info/akcii-i-skidki/">Promotions and discounts</a></li>
                            <li><a href="../../../../../../info/payments/">Payment methods</a></li>

                            <li><a href="../../../../../../info/faq/">FAQ</a></li>
                            <li><a href="../../../../../../info/lichnij-kabinet/">Description of personal area</a></li>
                            <li><a href="../../../../../../info/social-policy/">Social policy</a></li><li><a href="../../../../../../info/partner/">Affiliate program</a></li>
                        </ul>
                    </div>

                    <div class="span3" style="float:right;"><img style="margin-left:40px;" class="footer-logo" src="/img/tier3_facility_datapro_moscow.png" alt="ЦОД DataPro Tier 3 Facility Москва" title="ЦОД DataPro Tier 3 Facility Москва"><img class="footer-logo" src="/img/firstbyte_logo.png" alt="Хостинг провайдер FirstByte" title="Хостинг провайдер FirstByte"></div>
                    <div class="span9" style="margin-left:0;">
                        <ul class="footer-navigate">

                            <li><a href="../../../../../../info/payments/">Payment methods</a></li>
                            <li><a href="../../../../../../about/contacts/">Contact</a></li>
                            <li><a href="../../../../../../about/">About us</a></li>
                            <li><a href="../../../../../../about/vakansii/">Careers</a></li>
                            <li><a href="../../../../../../sitemap/">Sitemap</a></li>
                            <li><a href="https://billing.firstbyte.pro/" data-toggle="modal">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container"><br>
            <div class="mar15">
                <!--    <div class="copy"> -->
                <div class="footer-cont" style="width:28%;margin:3px 0 0 10px;">
                    <p>© 2015-2020 FirstByte.ru <br><a href="/">Stable hosting provider</a></p>
                </div>

                <div class="footer-cont" style="width:88px;margin:3px 0 0 10px;">
                    <noindex><a rel="nofollow" href="https://info.paymaster.ru/">
                            <img class="img-rounded" src="/img/88-ag.png" alt=""></a></noindex>
                </div>

                <div class="footer-cont" style="width:190px;margin:3px 0 0 10px;">
                    <a href="/info/payments/">
                        <img src="/img/payment222.png">
                    </a>
                </div>
                <div class="footer-cont" style="width:242px;margin-left:15px;text-align: justify;">
                    <p>Questions: <a href="mailto:support@firstbyte.pro">support@firstbyte.pro</a>
                        <br>Support: <a href="mailto:support@firstbyte.pro">support@firstbyte.pro</a>
                        <br>Abuse: <a href="mailto:abuse@firstbyte.pro">abuse@firstbyte.pro</a></p>
                </div>
                <div class="footer-cont" style="float:right;width:170px;">
                    <a href="/about/partners/" style="margin-right:10px;"><img alt="" src="/upload/isp-p.png"></a>
                    <img alt="IPv6 READY!" width="49" title="IPv6 READY!" src="/img/IPv6_logo_w.png">
                </div>
                <div class="footer-check">
                    <!--LiveInternet counter-->
<!--           todo-???:          <script type="text/javascript">document.write("<a href='https://www.liveinternet.ru/click' target=_blank><img src='https://counter.yadro.ru/hit?t50.1;r&quot;&#32;+&#32;escape(document.referrer)&#32;+&#32;((typeof(screen)==&quot;undefined&quot;)?&quot;&quot;:&quot;;s&quot;+screen.width+&quot;*&quot;+screen.height+&quot;*&quot;+(screen.colorDepth?screen.colorDepth:screen.pixelDepth))&#32;+&#32;&quot;;u&quot;&#32;+&#32;escape(document.URL)&#32;+&quot;;h&quot;+escape(document.title.substring(0,80))&#32;+&#32;&#32;&quot;;&quot;&#32;+&#32;Math.random()&#32;+&#32;&quot;' border=0 width=31 height=31 alt='' title='LiveInternet'><\/a>")</script><a href="https://www.liveinternet.ru/click" target="_blank"><img src="https://counter.yadro.ru/hit?t50.1;r&quot; + escape(document.referrer) + ((typeof(screen)==&quot;undefined&quot;)?&quot;&quot;:&quot;;s&quot;+screen.width+&quot;*&quot;+screen.height+&quot;*&quot;+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)) + &quot;;u&quot; + escape(document.URL) +&quot;;h&quot;+escape(document.title.substring(0,80)) +  &quot;;&quot; + Math.random() + &quot;" border="0" width="31" height="31" alt="" title="LiveInternet"></a>-->
                    <!--/LiveInternet-->
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
