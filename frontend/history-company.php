<style>
    *,
*::before,
*::after {
  box-sizing: border-box;
}



.timeline1 {

  width: 100%;
  max-width: 1140px;
  margin: 0 auto;
  padding: 15px 0;
}

.timeline1::after {
  content: '';

  width: 2px;
  background: #214068;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -1px;
}

.container2 {
  padding: 15px 30px;

  background: inherit;
  width: 50%;
}


.container2::after {
  content: '';
 
  width: 16px;
  height: 16px;
  top: calc(50% - 8px);
  right: -8px;
  background: #ffffff;
  border: 2px solid #006E51;
  border-radius: 16px;
  z-index: 1;
}



.container2::before {
  content: '';

  width: 50px;
  height: 2px;
  top: calc(50% - 1px);
  right: 8px;
  background:  ;
  z-index: 1;
}

.container2.right::before {
  left: 8px;
}

.container2 .date {

  display: inline-block;
  top: calc(50% - 8px);
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  color: #006E51;
  text-transform: uppercase;
  letter-spacing: 1px;
  z-index: 1;
}


.container2 .icon {

  display: inline-block;
  width: 40px;
  height: 40px;
  padding: 9px 0;
  top: calc(50% - 20px);
  background: #fff;
  border: 2px solid #006E51;
  border-radius: 40px;
  text-align: center;
  font-size: 18px;
  color: #006E51;
  z-index: 1;
}


.container2 .content {
  padding: 25px 85px 25px 25px;
  background: white;

  border-radius: 10px 10px 10px 10px;
  box-shadow: 10px 7px 20px grey;
}

.container2.right .content {
  padding: 25px 25px 25px 85px;
  border-radius: 10px 10px 10px 10px;
  box-shadow: 10px 7px 20px grey;
}

.container2 .content:hover {
  background-color: #214068;
}

.container2 .content h2 {
  margin: 0 0 10px 0;
  font-size: 18px;
  font-weight: normal;
  color: #214068;
}

.container2 .content:hover h2{
  color: #fff;
}

.container2 .content p {
  margin: 0;
  font-size: 16px;
  line-height: 22px;
  color: #214068;
}

.container2 .content:hover p{
  color: #fff;
}


@media (max-width: 767.98px) {
  .timeline1::after {
    left: 90px;
  }

  .container2 {
    width: 100%;
    padding-left: 120px;
    padding-right: 30px;
  }



  


}

</style>

<div class="timeline1">
  <div class="container2">
    <div class="date"></div>
    <i class="icon fa fa-check"></i>
    <div class="content">
      <h2>AKTE</h2>
      <p>
      No. 35, 23 November 2012  
      </p>
    </div>
  </div>
  <div class="container2">
    <div class="date"></div>
    <i class="icon fa fa-check"></i>
    <div class="content">
      <h2>TDP</h2>
      <p>
        13.01.1.51.26643  
      </p>
    </div>
  </div>
  <div class="container2">
    <div class="date"></div>
    <i class="icon fa fa-check"></i>
    <div class="content">
      <h2>SIUP</h2>
      <p>
        503/482.A/436.6.11/2013  
      </p>
    </div>
  </div>
  <div class="container2">
    <div class="date"></div>
    <i class="icon fa fa-check"></i>
    <div class="content">
      <h2>SIJUK</h2>
      <p>
        188.4/12/436.7.5/2019  
      </p>
      <p>- Bangunan Kesehatan / Rumah Sakit</p>
      <p>Pengolahan Limbah</p>
    </div>
  </div>
  <div class="container2">
    <div class="date"></div>
    <i class="icon fa fa-check"></i>
    <div class="content">
      <h2>IPAK</h2>
      <p>
        Elektromedik Radiasi, Elektromedik Non Radiasi,
        Non Elektronik, Non Steril, Non Elektromedik Steril &
        Diagnostik In Vitro
      </p>
    </div>
  </div>
</div>