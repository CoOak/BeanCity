<?php
include("nav.php");
?>

<style>

</style>

<swiper-container class="mySwiper vh-100" pagination="true" pagination-clickable="true" navigation="true" space-between="1000" centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
  <swiper-slide>
    <img src="img/home2.jpg" alt="" />
  </swiper-slide>
  <!-- <swiper-slide>
        <img src="img/home3.jpg" alt="" />
      </swiper-slide> -->

</swiper-container>

<div class="container-fluid">
  <div class="slider wow animate__fadeInUp">
    <h4 class=" mb-4 text-white fw-bold wow animate__fadeInLeft">ယနေ့ပဲဈေးနှုန်းများ</h4>
    <div class="wow animate__fadeInUp" data-wow-delay="0.8s">
      <div class="slides " id="slide">

      </div>
    </div>
  </div>
</div>
</div>

<section class="container-fluid g-0 mt-5">
  <div class="row">
    <div class="col-1"></div>
    <div class="col-4">
      <div class="whoWe d-flex align-items-center wow animate__fadeInLeft" data-wow-delay="0.5s">
        <div class="">
          <h3 class=" fw-bold pt-3 pb-4">ကျွန်ုပ်တို့အကြောင်း</h3><br><br>
          <p class="text-black-50 pe-2 pb-4  " style="line-height: 2.5;">
            ပဲသီးနှံမျိုးစုံသည် မြန်မာနိုင်ငံ၏ စိုက်ပျိုးရေးကဏ္ဍတွင် အရေးပါ‌သော ထွက်ကုန်တစ်ခုဖြစ်ပါသည်။ သို့ဖြစ်ပါ၍ ပဲသီးနှံစိုက်ပျိုးသောတောင်သူဦးကြီးများ သီးနှံအထွက်နှုန်း‌ပိုမိုကောင်းမွန်၍ စီးပွားရေးဆိုင်ရာတွင်အကျိုးဖြစ်ထွန်းနိုင်စေရန်ရည်ရွယ်၍ ခေတ်မီစိုက်ပျိုးနည်း၊ ထိရောက်သည့်သီးနှံကာကွယ်နည်း၊ စိုက်ပျိုးရေးသုံးဆေးဝါးများကို နည်းလမ်းမှန်စွာအသုံးပြုနည်းများကို မျှဝေခြင်းဖြင့် ‌ ကျွန်ုပ်တို့ <b> Bean City </b> မှ အထောက်အကူပြုအပ်ပါသည်။
          </p>


        </div>
      </div>
    </div>
    <div class="col-1"></div>
    <div class="col-6 ">
      <div class="whoImg whoWe my-auto d-flex align-items-center wow animate__fadeInRight" data-wow-delay="0.8s">
        <img src="img/l1.png" alt="" class="" />
      </div>
    </div>
  </div>
</section>
<br><br>
<section>
  <div class="container-fluid mt-5 ">
    <?php
    include("weather.php");
    ?>
  </div>
</section>


<section class="bg-light">
  <div class="container min-vh-100 mt-5 pt-5">
    <h3 class="text-center fw-bold mt-5 mb-5 pb-3"> ပဲအမျိုးအစားများ</h3>
    <div class="row mt-5 pt-5 flex-wrap">
      <div class="col-1"></div>
      <div class="col-2 mb-5 pb-2">
        <div class="palList_img wow animate__fadeInLeftBig" data-wow-delay="1.1s">
          <a href="mattpal.php" class="text-decoration-none">
            <img src="img/Blackgram3.jpg" class="text-center" alt="" />
            <h5 class="fw-bold text-center text-black mt-3">မတ်ပဲ</h5>
          </a>
        </div>
      </div>
      <div class="col-2 mb-5 pb-2">
        <div class="palList_img wow animate__fadeInLeftBig" data-wow-delay="0.9s">
          <a href="GroundNut.php" class="text-decoration-none">
            <img src="img/myaypal.jpg" class="text-center" alt="" />
            <h5 class="fw-bold text-center text-black mt-3">မြေပဲ</h5>
          </a>
        </div>
      </div>
      <div class="col-2 mb-5 pb-2">
        <div class="palList_img wow animate__fadeInLeftBig" data-wow-delay="0.7s">
          <a href="bocate.php" class="text-decoration-none">
            <img src="img/bocate.jpg" class="text-center" alt="" />
            <h5 class="fw-bold text-center text-black mt-3">ဘိုကိတ်</h5>
          </a>
        </div>
      </div>
      <div class="col-2 mb-5 pb-2">
        <div class="palList_img wow animate__fadeInLeftBig" data-wow-delay="0.5s">
          <a href="satawpal.php" class="text-decoration-none">
            <img src="img/stp1.jpg" class="text-center" alt="" />
            <h5 class="fw-bold text-center text-black mt-3">စားတော်ပဲ</h5>
          </a>
        </div>
      </div>
      <div class="col-2 mb-5 pb-2">
        <div class="palList_img wow animate__fadeInLeftBig" data-wow-delay="0.3s">
          <a href="pal.php" class="text-decoration-none">
            <img src="img/psn.jpg" class="text-center" alt="" />
            <h5 class="fw-bold text-center text-black mt-3">ပဲစင်းငုံ</h5>
          </a>
        </div>
      </div>
      <div class="col-1"></div>
      <div class="col-1"></div>

      <div class="col-2 mb-5 pb-2  ">
        <div class="palList_img wow animate__fadeInRightBig" data-wow-delay="0.3s">
          <a href="palhtawpat.php" class="text-decoration-none">
            <img src="img/palhtawpat.jpg" class="text-center" alt="" />
            <h5 class="fw-bold text-center text-black mt-3">ပဲထောပတ်</h5>
          </a>
        </div>
      </div>
      <div class="col-2 mb-5 pb-2">
        <div class="palList_img wow animate__fadeInRightBig" data-wow-delay="0.5s">
          <a href="pelkyi.php" class="text-decoration-none">
            <img src="img/palgyi.jpg" class="text-center" alt="" />
            <h5 class="fw-bold text-center text-black mt-3">ပဲကြီး</h5>
          </a>
        </div>
      </div>
      <div class="col-2 mb-5 pb-2">
        <div class="palList_img wow animate__fadeInRightBig" data-wow-delay="0.7s">
          <a href="kalapal.php" class="text-decoration-none">
            <img src="img/klp.jpg" class="text-center" alt="" />
            <h5 class="fw-bold text-center text-black mt-3">ကုလားပဲ</h5>
          </a>
        </div>
      </div>
      <div class="col-2 mb-5 pb-2">
        <div class="palList_img wow animate__fadeInRightBig" data-wow-delay="0.9s">
          <a href="pelpote.php" class="text-decoration-none">
            <img src="img/soybean.jpg" class="text-center" alt="" />
            <h5 class="fw-bold text-center text-black mt-3">ပဲပုပ်</h5>
          </a>
        </div>
      </div>
      <div class="col-2 mb-5 pb-2">
        <div class="palList_img wow animate__fadeInRightBig" data-wow-delay="1.1s">
          <a href="palti.php" class="text-decoration-none">
            <img src="img/paltisein.jpg" class="text-center" alt="" />
            <h5 class="fw-bold text-center text-black mt-3">ပဲတီစိမ်း</h5>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>


<section>
  <div class="container-fluid mt-5 ">
    <?php
    include("faqs.php");
    ?>
  </div>
</section>

<section>
  <div class="container-fluid mt-5 ">
    <?php
    include("footer.php");
    ?>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="node_modules/wow.js/dist/wow.js"></script>
<script>
  new WOW().init();
</script>
<script src="pricelist.js"></script>

<script src="js/main.js"></script>
<script>
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'vertical',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    autoplay: {
      delay: 500500, // Delay in milliseconds
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
</script>
</body>

</html>