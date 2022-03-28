<footer>
  <div class="container">
    <div class="bottomFooter">
      <span>Sign-up Now!</span>
      <div class="container-social">
        <span>Follow us</span>
        <img v-for="(social,index) in listSocials" :key="index" :src="social.image" alt="">
      </div>
    </div>
  </div>
  <div class="navList">
    <div class="navFooter">
      <div class="container">
        <DcComics />
        <ShopNav />
        <DcNav />
        <SitesNav />
      </div>
      <img src="../../assets/img/dc-logo-bg.png">
    </div>
  </div>  
</footer>