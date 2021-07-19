<style>
      #bodytv {
          background-color: white;
      }

      #containertv {
          max-width: 1024px;
          margin: auto;
      }

      #monitor {
          background: #000;
          position: relative;
          border-top: 3px solid #888;
          margin: 5%;
          padding: 2% 2% 4% 2%;
          border-radius: 10px;
          border-bottom-left-radius: 50% 2%;
          border-bottom-right-radius: 50% 2%;
          transition: margin-right 1s;
      }

      #monitor:after {
          content: '';
          display: block;
          position: absolute;
          bottom: 3%;
          left: 36%;
          height: .5%;
          width: 28%;
          background: #ddd;
          border-radius: 50%;
          box-shadow: 0 0 3px 0 white;
      }

      #monitorscreen {
          position: relative;
          background-color: #777;
          background-size: cover;
          background-position: top center;
          height: 0;
          padding-bottom: 56.25%;
          position: relative;
          overflow: hidden;
      }


      @media all and (min-width: 960px) {
          #monitor {
              -webkit-animation: tvflicker .2s infinite alternate;
              -moz-animation:    tvflicker .5s infinite alternate;
              -o-animation:      tvflicker .5s infinite alternate;
              animation:         tvflicker .5s infinite alternate;
          }

          @-webkit-keyframes tvflicker {
              0%   { box-shadow: 0 0 100px 0 rgba(200,235,255,0.4); }
              100% { box-shadow: 0 0 95px 0 rgba(200,230,255,0.45); }
          }
          @-moz-keyframes tvflicker {
              0%   { box-shadow: 0 0 100px 0 rgba(225,235,255,0.4); }
              100% { box-shadow: 0 0 60px 0 rgba(200,220,255,0.6); }
          }
          @-o-keyframes tvflicker {
              0%   { box-shadow: 0 0 100px 0 rgba(225,235,255,0.4); }
              100% { box-shadow: 0 0 60px 0 rgba(200,220,255,0.6); }
          }
          @keyframes tvflicker {
              0%   { box-shadow: 0 0 100px 0 rgba(225,235,255,0.4); }
              100% { box-shadow: 0 0 60px 0 rgba(200,220,255,0.6); }
          }
      }




</style>



<!--<section id="bodytv" style="margin-bottom: 200px">


  <div id="containertv"> -->

 <!-- <div id="topbartv">

          <div class="row">
              <div class="col-xs-3 col-md-3" style="background-color: black; height: 100px">
                 <p></p>
              </div>
              <div class="col-xs-9 col-md-9" style="background-color: red; height: 100px">
                 <span class="circle" style="text-align: right; text-transform: uppercase; color: white; vertical-align: middle"> LE DIRECT  24/7 </span>
                  </div>
          </div>

 </div> -->

 <section>

   <div class="container text-center mt-1 mb-3">
       <div class="row">
           <div class="embed-responsive embed-responsive-21by9">
               <iframe  class="embed-responsive-item" src="<?php foreach($linkTelevision as $row_tv): echo $row_tv->lien_evangelisation_tv;endforeach;?>" allowfullscreen></iframe>
           </div>
       </div>

   </div>
 </section>

   <!--   <div id="monitor">

      <div id="monitorscreen"> -->

<!--<iframe width="882" height="496" src="https://www.youtube.com/embed/6HUwKBZ6NAU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

  <!-- <iframe width="882" height="496" src="<?php //foreach($linkTelevision as $row_tv): echo $row_tv->lien_evangelisation_tv;endforeach;?>" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>-->
<!-- https://www.youtube.com/embed/jpsUgHnxc_A?start=1  -->
<!--   </div>
  </div> -->

<!--   <div>

       <iframe width="560" height="315" src="https://www.youtube.com/embed/Ne4FXHCjg5s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

   </div> -->


 <!--</section> -->

  <!--  <div id="chat">

      <button class="open-button" onclick="openForm()"> <span style="font-size: 60px; left: 10px; bottom: 10px;  position: absolute" class="bx bxl-messenger"></span> </button>
      <i style="font-size: 100px; margin-right: 40px" class=""></i>

      <div class="chat-popup" id="myForm">
          <form action="" class="form-container">
              <h1>Chat</h1>

              <div id="viewMsg">

               <div id="adminMsg" style="text-align: left; font-size: 15px"><span style="padding: 5px; border-radius: 8px" class="btn-secondary"> cc</span></div>
               <div id="studentMsg" style="text-align: right; font-size: 15px"><span style="padding: 5px; border-radius: 8px" class=" btn-primary">Bonjour</span></div>

              </div>

              <label for="msg"><b>Message</b></label>
              <input id="block-msg" class="form-control" placeholder="message..." name="msg" required>


              <button type="button" class="btn cancel" onclick="closeForm()">Sortir</button>
          </form>
      </div>

  </div> -->




