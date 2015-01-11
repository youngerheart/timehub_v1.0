<?php
/**
 * Template Name: Aboutme
 * Description: A Page Template with Aboutme.
 */
get_header();
?>
<div id="index_page">
<div class="aboutme-box">
  <div class="other-box">
    <h4>亲爱的小伙伴，你还可以在这些地方找到我~</h4>
    <span>
      <a title="新浪微博" href="http://weibo.com/youngership" class="action-weibo action-icon">新浪微博</a>高中的时候玩过微博~没事逛逛吧
    </span>
    <span>
      <a title="豆瓣" href="http://www.douban.com/people/56281489/" class="action-douban action-icon">豆瓣</a>两年前在这里停留过~现在人烟稀少
    </span>
    <span>
      <a title="网易云音乐" href="http://music.163.com/#/user/home?id=40825347" class="action-163music action-icon">网易云音乐</a>最近挺火的~来互粉吧
    </span>
  </div>
  <div>
    <h4>关于younger</h4>
    <p>目前就读于合肥工业大学(大四)，同时在上海工作 (<a title="跳转到饿了么" href="http://ele.me">ELEME</a>) 实习web前端工程师 (也欢迎你和我一起<a href="http://jobs.ele.me">编代码</a>)</p>
    <p>人如其文，兴趣广泛，是程序猿而不限于程序猿，目前工作和生活都在起步中~</p>
  </div>
  <div>
    <h4>关于小径分岔的花园</h4>
    <p>与之前玩的qq空间同名，源自阿根廷作家博尔赫斯创作的一部带有科幻色彩的小说 (当然在SEO方面被其无情碾压)。</p>
    <p>在时间的岔路口我们有时会彷徨，不知所措，却不妨听下脚步，再回首，是不是偏离了当时的方向。</p>
    <p>有时写写技术，有时记录生活。时常学习，经常进步。时间永远分叉,通向无数的将来。</p>
  </div>
</div>
<div class="share-box">
  <div style="text-align: center;">
    <p style="text-align: center;">younger的github主页：</p>
    <div class="github-card" data-github="youngerheart" data-width="330" data-height="151"></div>
  </div>
  <script src="http://lab.lepture.com/github-cards/widget.js"></script>
  <p style="text-align: center;">younger的bilibili主页：</p>
  <div name="bilibili_card" uid="youngerな大船"></div>
  <script src="http://uquweb.com/api/bilibili/getbilibilihtml.js" charset="utf-8"></script>
</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>