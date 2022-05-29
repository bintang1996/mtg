

<style>
    *,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

button {
  background: transparent;
  border: none;
  cursor: pointer;
  outline: none;
}

body {
  font: normal 16px/1.5 "Helvetica Neue", sans-serif;
  background: white;
  color: #214068;
}


/* .section SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.section {
  background: white;
  padding: 50px 0;
}

.section .container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  text-align: center;
}

.section h1 {
  font-size: 2.5rem;
}

.section h2 {
  font-size: 1.3rem;
}


/* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline {
  white-space: nowrap;
  overflow-x: hidden;
}

.timeline ol {
  font-size: 0;
  width: 100vw;
  padding: 250px 0;
  transition: all 1s;
}

.timeline ol li {
  position: relative;
  display: inline-block;
  list-style-type: none;
  width: 160px;
  height: 3px;
  background: #214068;
  border-radius: 10px;
  
}

.timeline ol li:last-child {
  width: 280px;
}

.timeline ol li:not(:first-child) {
  margin-left: 14px;
}

.timeline ol li:not(:last-child)::after {
  content: '';
  position: absolute;
  top: 50%;
  left: calc(100% + 1px);
  bottom: 0;
  width: 12px;
  height: 12px;
  transform: translateY(-50%);
  border-radius: 50%;
  background: #F96845;
}

.timeline ol li div {
  position: absolute;
  left: calc(100% + 7px);
  width: 280px;
  padding: 15px;
  font-size: 1rem;
  white-space: normal;
  color: #214068;
  background: #fff;
  box-shadow: 10px 7px 20px grey;

  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}

.timeline ol li div:hover{
  color: #fff;
  background: #214068;
}

.timeline ol li div::before {
  content: '';
  position: absolute;
  top: 100%;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline ol li:nth-child(odd) div {
  top: -16px;
  transform: translateY(-100%);
}

.timeline ol li:nth-child(odd) div::before {
  top: 100%;
  border-width: 8px 8px 0 0;
  border-color: #fff transparent transparent transparent;
}

.timeline ol li:nth-child(odd) div:hover:before{
  border-width: 8px 8px 0 0;
  border-color: #214068 transparent transparent transparent;
}

.timeline ol li:nth-child(even) div {
  top: calc(100% + 16px);
}

.timeline ol li:nth-child(even) div::before {
  top: -8px;
  border-width: 8px 0 0 8px;
  border-color: transparent transparent transparent #fff;
}

.timeline ol li:nth-child(even) div:hover:before {
  top: -8px;
  border-width: 8px 0 0 8px;
  border-color: transparent transparent transparent #214068;
}

.timeline time {
  display: block;
  font-size: 1.2rem;
  font-weight: bold;
  margin-bottom: 8px;
}


/* TIMELINE ARROWS
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline .arrows {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.timeline .arrows .arrow__prev {
  margin-right: 20px;
}

.timeline .disabled {
  opacity: .5;
}

.timeline .arrows img {
  width: 45px;
  height: 45px;
}


/* GENERAL MEDIA QUERIES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (max-width: 599px) {
  .timeline ol,
  .timeline ol li {
    width: auto; 
  }
  
  .timeline ol {
    padding: 0;
    transform: none !important;
  }
  
  .timeline ol li {
    display: block;
    height: auto;
    background: transparent;
  }
  
  .timeline ol li:first-child {
    margin-top: 25px;
  }
  
  .timeline ol li:not(:first-child) {
    margin-left: auto;
  }
  
  .timeline ol li div {
    width: 94%;
    height: auto !important;
    margin: 0 auto 25px;
    border-radius: 10px;
  }
  
  .timeline ol li div {
    position: static;
  }
  
  .timeline ol li:nth-child(odd) div {
    transform: none;
  }
  
  .timeline ol li:nth-child(odd) div::before,
  .timeline ol li:nth-child(even) div::before {
    left: 50%;
    top: 100%;
    transform: translateX(-50%);
    border: none;
    border-left: 1px solid white;
    height: 25px;
  }
  
  .timeline ol li:last-child,
  .timeline ol li:nth-last-child(2) div::before,
  .timeline ol li:not(:last-child)::after,
  .timeline .arrows {
    display: none;
  }
}
</style>


<section class="timeline">
  <ol>
    <li>
      
										<!-- SERVICE BOX #1 -->
										<div class="sbox-3 icon-sm" style="padding-top: 0; padding-left: 0; padding-right: 0;">

										<!-- Icon -->
										<img class="img-fluid" src="images/head/legal.php" alt="doctor-foto">	
											
										<!-- Title -->
										<div class="text-left" style="margin-right: 20px; margin-left: 20px;">
										<h5 class="h5-xs steelblue-color">Ibnu Affan</h5>

										<!-- Text -->
										<p>Chief Executive Officer
										</p>
										</div>
							</div>
    </li>
    <li>
      <div>
        <time>2016</time> Project KSO Cathlab pertama
      </div>
    </li>
    <li>
      <div>
        <time>2018</time> Perpindahan ke Head Office Jakarta
      </div>
    </li>
    <li>
      <div>
        <time>2019</time> Project KSO CT Scan pertama
      </div>
    </li>
    <li>
      <div>
        <time>2020</time> Project vyaire, distribusi 1000 ventilator support USAID dan KEMENKES
      </div>
    </li>
    <li>
      <div>
        <time>2021</time> Project Invamed
      </div>
    </li>
    <li>
      <div>
        <time>2021</time> Samsung
      </div>
    </li>
    <li>
      <div>
        <time>2022</time> Elixir
      </div>
    </li>
    <li>
      <div>
        <time>2022</time> Yokogawa
      </div>
    </li>
    
    <li></li>
  </ol>
  
  <div class="arrows">
    <button class="arrow arrow__prev disabled" disabled>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_prev.svg" alt="prev timeline arrow">
    </button>
    <button class="arrow arrow__next">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_next.svg" alt="next timeline arrow">
    </button>
  </div>
</section>

<script>
(function() {

// VARIABLES
const timeline = document.querySelector(".timeline ol"),
  elH = document.querySelectorAll(".timeline li > div"),
  arrows = document.querySelectorAll(".timeline .arrows .arrow"),
  arrowPrev = document.querySelector(".timeline .arrows .arrow__prev"),
  arrowNext = document.querySelector(".timeline .arrows .arrow__next"),
  firstItem = document.querySelector(".timeline li:first-child"),
  lastItem = document.querySelector(".timeline li:last-child"),
  xScrolling = 280,
  disabledClass = "disabled";

// START
window.addEventListener("load", init);

function init() {
  setEqualHeights(elH);
  animateTl(xScrolling, arrows, timeline);
  setSwipeFn(timeline, arrowPrev, arrowNext);
  setKeyboardFn(arrowPrev, arrowNext);
}

// SET EQUAL HEIGHTS
function setEqualHeights(el) {
  let counter = 0;
  for (let i = 0; i < el.length; i++) {
    const singleHeight = el[i].offsetHeight;

    if (counter < singleHeight) {
      counter = singleHeight;
    }
  }

  for (let i = 0; i < el.length; i++) {
    el[i].style.height = `${counter}px`;
  }
}

// CHECK IF AN ELEMENT IS IN VIEWPORT
// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// SET STATE OF PREV/NEXT ARROWS
function setBtnState(el, flag = true) {
  if (flag) {
    el.classList.add(disabledClass);
  } else {
    if (el.classList.contains(disabledClass)) {
      el.classList.remove(disabledClass);
    }
    el.disabled = false;
  }
}

// ANIMATE TIMELINE
function animateTl(scrolling, el, tl) {
  let counter = 0;
  for (let i = 0; i < el.length; i++) {
    el[i].addEventListener("click", function() {
      if (!arrowPrev.disabled) {
        arrowPrev.disabled = true;
      }
      if (!arrowNext.disabled) {
        arrowNext.disabled = true;
      }
      const sign = (this.classList.contains("arrow__prev")) ? "" : "-";
      if (counter === 0) {
        tl.style.transform = `translateX(-${scrolling}px)`;
      } else {
        const tlStyle = getComputedStyle(tl);
        // add more browser prefixes if needed here
        const tlTransform = tlStyle.getPropertyValue("-webkit-transform") || tlStyle.getPropertyValue("transform");
        const values = parseInt(tlTransform.split(",")[4]) + parseInt(`${sign}${scrolling}`);
        tl.style.transform = `translateX(${values}px)`;
      }

      setTimeout(() => {
        isElementInViewport(firstItem) ? setBtnState(arrowPrev) : setBtnState(arrowPrev, false);
        isElementInViewport(lastItem) ? setBtnState(arrowNext) : setBtnState(arrowNext, false);
      }, 1100);

      counter++;
    });
  }
}

// ADD SWIPE SUPPORT FOR TOUCH DEVICES
function setSwipeFn(tl, prev, next) {
  const hammer = new Hammer(tl);
  hammer.on("swipeleft", () => next.click());
  hammer.on("swiperight", () => prev.click());
}

// ADD BASIC KEYBOARD FUNCTIONALITY
function setKeyboardFn(prev, next) {
  document.addEventListener("keydown", (e) => {
    if ((e.which === 37) || (e.which === 39)) {
      const timelineOfTop = timeline.offsetTop;
      const y = window.pageYOffset;
      if (timelineOfTop !== y) {
        window.scrollTo(0, timelineOfTop);
      }
      if (e.which === 37) {
        prev.click();
      } else if (e.which === 39) {
        next.click();
      }
    }
  });
}

})();

</script>