<?php include "header.php";?>
<style>
    %transition_all_03s {
  transition:all .3s ease;
}
%backface_visibility_hidden{
  backface-visibility:hidden;
  -webkit-backface-visibility:hidden;
}

*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

.swiper-container {
  width: 80%;
  height: 100vh;
  // display:inline-block;
  // vertical-align:top;
  float:left;
  transition:opacity .6s ease, transform .3s ease;
  &.nav-slider{
    width:20%;
    padding-left:5px;
    .swiper-slide{
      cursor:pointer;
      opacity:.4;
      transition:opacity .3s ease;
      &.swiper-slide-active{
        opacity:1;
      }
      .content{
        width:100%;
        .title{
          font-size:20px;
        }
      }
    }
  }
  &:hover{
    .swiper-button-prev,
    .swiper-button-next{
      transform:translateX(0);
      opacity:1;
      visibility:visible;
    }
  }
  &.loading{
    opacity:0;
    visibility:hidden;
  }
}
.swiper-wrapper{

}
.swiper-slide{
  overflow: hidden;
  @extend %backface_visibility_hidden;
  .slide-bgimg{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background-position:center;
    background-size:cover;
  }
  .entity-img{
    display:none;
  }
  .content{
    position:absolute;
    top:40%;
    left:0;
    width:50%;
    padding-left:5%;
    color:#fff;
    .title{
      font-size:2.6em;
      font-weight:bold;
      margin-bottom:30px;
    }
    .caption{
      display:block;
      font-size:13px;
      line-height:1.4;
      transform:translateX(50px);
      opacity:0;
      transition:opacity .3s ease, transform .7s ease;
      &.show{
        transform:translateX(0);
        opacity:1;
      }
    }
  }
}
[class^="swiper-button-"]{
  width:44px;
  opacity:0;
  visibility:hidden;
  @extend %transition_all_03s;
}
.swiper-button-prev{
  transform:translateX(50px);
}
.swiper-button-next{
  transform:translateX(-50px);
}
</style>


<div class="swiper-container main-slider loading">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://images.unsplash.com/photo-1483985988355-763728e1935b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85)">
        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Shaun Matthews</p>
        <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://images.unsplash.com/photo-1500643752441-4dc90cda350a?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85)">
        <img src="https://images.unsplash.com/photo-1500643752441-4dc90cda350a?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Alexis Berry</p>
        <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://images.unsplash.com/photo-1465408953385-7c4627c29435?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85)">
        <img src="https://images.unsplash.com/photo-1465408953385-7c4627c29435?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Billie	Pierce</p>
        <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://images.unsplash.com/photo-1538329972958-465d6d2144ed?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTkzNg&ixlib=rb-1.2.1&q=85)">
        <img src="https://images.unsplash.com/photo-1538329972958-465d6d2144ed?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTkzNg&ixlib=rb-1.2.1&q=85" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Trevor	Copeland</p>
        <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://images.unsplash.com/photo-1583292650898-7d22cd27ca6f?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTk1OQ&ixlib=rb-1.2.1&q=85)">
        <img src="https://images.unsplash.com/photo-1583292650898-7d22cd27ca6f?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTk1OQ&ixlib=rb-1.2.1&q=85" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Bernadette	Newman</p>
        <span class="caption">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>
      </div>
    </div>
  </div>
  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev swiper-button-white"></div>
  <div class="swiper-button-next swiper-button-white"></div>
</div>

<!-- Thumbnail navigation -->
<div class="swiper-container nav-slider loading">
  <div class="swiper-wrapper" role="navigation">
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://images.unsplash.com/photo-1483985988355-763728e1935b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85)">
        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Shaun Matthews</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://images.unsplash.com/photo-1500643752441-4dc90cda350a?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85)">
        <img src="https://images.unsplash.com/photo-1500643752441-4dc90cda350a?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Alexis Berry</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://images.unsplash.com/photo-1465408953385-7c4627c29435?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85)">
        <img src="https://images.unsplash.com/photo-1465408953385-7c4627c29435?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTg2Ng&ixlib=rb-1.2.1&q=85" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Billie	Pierce</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://images.unsplash.com/photo-1538329972958-465d6d2144ed?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTkzNg&ixlib=rb-1.2.1&q=85)">
        <img src="https://images.unsplash.com/photo-1538329972958-465d6d2144ed?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTkzNg&ixlib=rb-1.2.1&q=85" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Trevor	Copeland</p>
      </div>
    </div>
    <div class="swiper-slide">
      <figure class="slide-bgimg" style="background-image:url(https://images.unsplash.com/photo-1583292650898-7d22cd27ca6f?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTk1OQ&ixlib=rb-1.2.1&q=85)">
        <img src="https://images.unsplash.com/photo-1583292650898-7d22cd27ca6f?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MDE1NTk1OQ&ixlib=rb-1.2.1&q=85" class="entity-img" />
      </figure>
      <div class="content">
        <p class="title">Bernadette	Newman</p>
      </div>
    </div>
  </div>
</div>





<script>
    // Params
let mainSliderSelector = '.main-slider',
    navSliderSelector = '.nav-slider',
    interleaveOffset = 0.5;

// Main Slider
let mainSliderOptions = {
      loop: true,
      speed:1000,
      autoplay:{
        delay:3000
      },
      loopAdditionalSlides: 10,
      grabCursor: true,
      watchSlidesProgress: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      on: {
        init: function(){
          this.autoplay.stop();
        },
        imagesReady: function(){
          this.el.classList.remove('loading');
          this.autoplay.start();
        },
        slideChangeTransitionEnd: function(){
          let swiper = this,
              captions = swiper.el.querySelectorAll('.caption');
          for (let i = 0; i < captions.length; ++i) {
            captions[i].classList.remove('show');
          }
          swiper.slides[swiper.activeIndex].querySelector('.caption').classList.add('show');
        },
        progress: function(){
          let swiper = this;
          for (let i = 0; i < swiper.slides.length; i++) {
            let slideProgress = swiper.slides[i].progress,
                innerOffset = swiper.width * interleaveOffset,
                innerTranslate = slideProgress * innerOffset;
           
            swiper.slides[i].querySelector(".slide-bgimg").style.transform =
              "translateX(" + innerTranslate + "px)";
          }
        },
        touchStart: function() {
          let swiper = this;
          for (let i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = "";
          }
        },
        setTransition: function(speed) {
          let swiper = this;
          for (let i = 0; i < swiper.slides.length; i++) {
            swiper.slides[i].style.transition = speed + "ms";
            swiper.slides[i].querySelector(".slide-bgimg").style.transition =
              speed + "ms";
          }
        }
      }
    };
let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

// Navigation Slider
let navSliderOptions = {
      loop: true,
      loopAdditionalSlides: 10,
      speed:1000,
      spaceBetween: 5,
      slidesPerView: 5,
      centeredSlides : true,
      touchRatio: 0.2,
      slideToClickedSlide: true,
      direction: 'vertical',
      on: {
        imagesReady: function(){
          this.el.classList.remove('loading');
        },
        click: function(){
          mainSlider.autoplay.stop();
        }
      }
    };
let navSlider = new Swiper(navSliderSelector, navSliderOptions);

// Matching sliders
mainSlider.controller.control = navSlider;
navSlider.controller.control = mainSlider;
</script>
<?php include "footer.php";?>