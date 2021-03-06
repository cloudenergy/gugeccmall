<?php
/**
 * Theme Footer Section for our theme.
 *
 * Displays all of the footer section and starting from <footer> tag.
 *
 * @package ThemeGrill
 * @subpackage eStore
 * @since eStore 0.1
 */
?>

	<div class="line"></div>
  
<div class="space"></div>
<div class="company layout">
    <h3 class="font-black">合作伙伴</h3>
    <ul class="clearfix">
        <li><img
                src="http://9kpu.kuaileapp.com/img/aliyun.png"
                alt="阿里云"></li>
        <li><img
                src="http://9kpu.kuaileapp.com/img/alipay.png"
                alt="支付宝"></li>
        <li><img
                src="http://9kpu.kuaileapp.com/img/weixin.png"
                alt="微信支付"></li>
        <li><img
                src="http://9kpu.kuaileapp.com/img/chinamobile.png"
                alt="中国移动"></li>
        <li class="last"><img
                src="http://9kpu.kuaileapp.com/img/zhaosan.png"
                alt="招商银行"></li>
    </ul>
</div>

<div class="space"></div>

<div id="newfooter">
        <div class="layout">
            <div class="clearfix footNav">
                <div class="footerDl">
                    <dl>
                        <dt>古鸽信息</dt>
                        <dd><a href="index.html" target="_blank">云平台</a></dd>
                        <dd><a href="zft.html" target="_blank">租付通</a></dd>
                        <dd><a href="kj.html" target="_blank">快缴</a></dd>
                    </dl>
                    <dl>
                        <dt>智能仪表</dt>
                        <dd><a href="http://mall.gugecc.com" target="_blank">智能电表</a></dd>
                        <dd><a href="http://mall.gugecc.com" target="_blank">智能水表</a></dd>
                        <dd><a href="http://mall.gugecc.com" target="_blank">智能空调表</a></dd>
                    </dl>
                    <dl class="lastMargin">
                        <dt>解决方案</dt>
                        <dd>
                            <a href="safe.html" target="_blank">数据安全</a>
                        </dd>
                        <!--<dd><a href="fangan.html" target="_blank">资金安全</a></dd>-->
                        <dd>
                            <a href="application.html" target="_blank" rel="nofollow">应用实现</a></dd>
                        <dd>
                    </dl>
                </div>

                <div class="cantactUS">
                    <p class="title">客服专线</p>
                    <h1>0571-86996727</h1>
                    <p class="tips">（客服服务时间：9:00-18:00）</p>
                </div>

                <div class="qrcode">
                    <p class="title">关注我们</p>
                    <div><img src="http://zft.gugecc.com/img/weixi.jpg" alt="" width="100%" /></div>
                </div>
            </div>

            <div class="line"></div>
            <div class="frindLink">
                <div class="title">友情链接：</div>
                <div class="link">
                    <ul>
                        <li><a href="http://www.gugecc.com/" target="_blank">古鸽信息</a></li>
                        <li><a href="kj.html" target="_blank">快缴</a></li>
                        <li><a href="http://www.liuliangbao.cn/" target="_blank">流量宝</a></li>
                        <li><a href="http://www.basic.com.cn" target="_blank">柏诚智能</a></li>
                        <li><a href="http://www.china-yintai.com" target="_blank">银泰城</a></li>
                    </ul>
                </div>
            </div>
            <div class="line"></div>
            <div class="footerText tc">
                <div class="copyright">浙ICP备12027381号. 版权所有 杭州古鸽信息技术有限公司</div>

                <a style="margin-left:25px;" href="http://www.verisign.com/" rel="nofollow" target="_blank"><img src="http://zft.gugecc.com/img/symantec.png" alt="verisign"></a>
                <a href="http://t.knet.cn/index_new.jsp" rel="nofollow" target="_blank"><img src="http://zft.gugecc.com/img/kexin.png" alt="可信网站"></a>
                <a href="http://www.mps.gov.cn/n16/index.html?_v=1442896797517" rel="nofollow" target="_blank"><img src="http://zft.gugecc.com/img/gongan.png" alt="公安"></a>

                </p>
            </div>
        </div>
    </div>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
