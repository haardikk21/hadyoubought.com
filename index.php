<!DOCTYPE html>
<html>
   <head>
      <title>HadYouBought - Check how much you could've earned</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import Google Fonts-->
      <link href="https://fonts.googleapis.com/css?family=Lobster|Lato" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Import styles.css-->
      <link type="text/css" rel="stylesheet" href="css/styles.css"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <!-- Facebook Tags -->
      <meta property="og:url"                content="http://hadyoubought.com/" />
      <meta property="og:type"               content="website" />
      <meta property="og:title"              content="Had You Bought - Check how much profit you could've earned" />
      <meta property="og:description"        content="Check how much profit you could've earned had you pressed buy that one night on your favorite cryptocurrency" />
      <meta property="og:image"              content="https://i.imgur.com/aZBNeQq.png" />
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
   </head>
   <body>
      <a href="https://github.com/haardikk21/hadyoubought.com/"><img style="z-index: 5;position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
      <div class="header">
         <p>Warning: This website can add to Fear of Missing Out (FOMO) and lead to impulsive actions. Please invest responsibly.</p>
      </div>
      <div class="main">
         <span class="pretty">HadYouBought $100 <br>
         of &nbsp;</span>
         <span id="coinbtn">
         <a id="coinbtndd" name="btc" class="btn btn-large modal-trigger darkbluegrey" style="font-weight: bold;" href="#coinselect">
         <i class="material-icons right">arrow_drop_down</i>
         Bitcoin
         </a>
         </span>
         <div id="coinselect" class="modal" style="color: black;">
            <div class="modal-content">
               <a class="waves-effect waves-light btn darkbluegrey" name="zrx" style="font-weight: bold;">0x</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="rep" style="font-weight: bold;">Augur</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="bat" style="font-weight: bold;">Basic Attention Token</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="bnb" style="font-weight: bold;">Binance Coin</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="btc" style="font-weight: bold;">Bitcoin</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="bch" style="font-weight: bold;">Bitcoin Cash</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="btg" style="font-weight: bold;">Bitcoin Gold</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="ada" style="font-weight: bold;">Cardano</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="cvc" style="font-weight: bold;">Civic</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="dash" style="font-weight: bold;">Dash</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="dcr" style="font-weight: bold;">Decred</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="dgb" style="font-weight: bold;">Digibyte</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="doge" style="font-weight: bold;">Dogecoin</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="eos" style="font-weight: bold;">EOS</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="eth" style="font-weight: bold;">Ethereum</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="etc" style="font-weight: bold;">Ethereum Classic</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="ethos" style="font-weight: bold;">Ethos</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="fun" style="font-weight: bold;">FunFair</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="gno" style="font-weight: bold;">Gnosis</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="gnt" style="font-weight: bold;">Golem</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="icx" style="font-weight: bold;">ICON</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="icn" style="font-weight: bold;">Iconomi</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="iot" style="font-weight: bold;">IOTA</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="knc" style="font-weight: bold;">Kyber Network</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="lsk" style="font-weight: bold;">LISK</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="ltc" style="font-weight: bold;">Litecoin</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="mtl" style="font-weight: bold;">Metal</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="xmr" style="font-weight: bold;">Monero</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="xrb" style="font-weight: bold;">Nano</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="xem" style="font-weight: bold;">NEM</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="neo" style="font-weight: bold;">NEO</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="omg" style="font-weight: bold;">OmiseGO</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="pivx" style="font-weight: bold;">PIVX</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="ppt" style="font-weight: bold;">Populous</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="xrp" style="font-weight: bold;">Ripple</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="salt" style="font-weight: bold;">SALT</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="sc" style="font-weight: bold;">SiaCoin</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="snt" style="font-weight: bold;">Status</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="xlm" style="font-weight: bold;">Stellar</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="trx" style="font-weight: bold;">TRON</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="pay" style="font-weight: bold;">TenX</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="ven" style="font-weight: bold;">VeChain</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="xvg" style="font-weight: bold;">Verge</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="veri" style="font-weight: bold;">Veritaseum</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="vtc" style="font-weight: bold;">Vertcoin</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="wtc" style="font-weight: bold;">Walton</a>
               <a class="waves-effect waves-light btn darkbluegrey" name="zec" style="font-weight: bold;">ZCash</a>
            </div>
         </div>
         &nbsp;
         <span class="pretty">on</span>
         <div class="input-field inline" style="padding-bottom: 2%">
            <input type="text" class="datepicker">
         </div>
         <br>
         <span class="pretty">
         <span style="font-size: 120%;">You'd have </span>
         </span>
         <br>
      </div>
      <div id="spinner" class="hidden">
         <br>
         <div class="preloader-wrapper bigger active">
            <div class="spinner-layer spinner-blue-only">
               <div class="circle-clipper left">
                  <div class="circle"></div>
               </div>
               <div class="gap-patch">
                  <div class="circle"></div>
               </div>
               <div class="circle-clipper right">
                  <div class="circle"></div>
               </div>
            </div>
         </div>
      </div>
      <span class="pretty">
         <div id="value">
            <span class="amount">
            $<span id="amount">0</span>
            </span>
         </div>
      </span>
      <div class="footer">
         <p><i class="fab fa-github"></i><a href="http://github.com/haardikk21/">&nbsp;&nbsp;haardikk21</a> - All pricing data from &nbsp;<a href="http://cryptocompare.com/">http://cryptocompare.com/</a></a></p>
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/jquery.animatenumber.min.js"></script>
      </script>
      <!--Initialize select-->
      <script>
         function formatDate(date) {
         var d = new Date(date),
           month = '' + (d.getMonth() + 1),
           day = '' + d.getDate(),
           year = d.getFullYear();
         
         if (month.length < 2) month = '0' + month;
         if (day.length < 2) day = '0' + day;
         
         return [year, month, day].join('-');
         }
            $(document).ready(function() {
              $('select').material_select();
              $(".modal").modal();
            });
            
            $('.datepicker').pickadate({
             onStart: function() {
                 var date = new Date()
                 this.set('select', [date.getFullYear(), date.getMonth(), date.getDate() - 1]);
             },
              onSet: function(context) {
                $("#value").addClass("hidden");
                $("#spinner").removeClass("hidden");
               var coinAbv = $("#coinbtndd").attr('name');
                              
                $.ajax({
                  type: "GET",
                  url: "data/getAmount.php",
                  data: "coin=" + coinAbv + "&date=" + formatDate(context.select),
                  success: function(result) {
                    $("#spinner").addClass("hidden");
                    $("#value").removeClass("hidden");
                    if(!isNaN(result))
                    {
                      $("#value").html("<span class='amount'>$<span id='amount'>0</span></span>");
                     var max_number = result;
                     var padding_zeros = '';
                     for(var i = 0, l = max_number.toString().length; i < l; i++) {
                       padding_zeros += '0';
                     }
                 
                     var padded_now, numberStep = function(now, tween) {
                       var target = $(tween.elem),
                           rounded_now = Math.round(now);
                 
                       var rounded_now_string = rounded_now.toString()
                       padded_now = padding_zeros + rounded_now_string;
                       padded_now = padded_now.substring(rounded_now_string.length);
                 
                       target.prop('number', rounded_now).text(padded_now);
                     };
                     var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');
                     $('#amount').animateNumber({
                       number: max_number,
                       numberStep: comma_separator_number_step
                     }, 1500);
                    }
                    else {
                      $("#value").html("<br><span style='font-size: 150%; color: #08c'>Data not available for this date, try again.</span>");
                    }
                  }
                })
                
              },
              onClose: function() {
                  $('.datepicker').blur();
                  $('.picker').blur();
              },
              selectMonths: true, // Creates a dropdown to control month
              selectYears: 20, // Creates a dropdown of 15 years to control year,
              today: false,
              clear: false,
              close: false,
              closeOnSelect: true // Close upon selecting a date,
            });
            $(".waves-effect").on("click", function() {
         
              $('.modal').modal('close');
              $("#value").addClass("hidden");
              $("#spinner").removeClass("hidden");
              var coinAbv = $(this).attr("name");
              $("#coinbtn").html('<a name="' + coinAbv + '" class="btn btn-large modal-trigger darkbluegrey" style="font-weight: bold;" href="#coinselect"><i class="material-icons right">arrow_drop_down</i>' + $(this).text() + '</a>');
              
              var $input = $('.datepicker').pickadate()
         
               // Use the picker object directly.
               var picker = $input.pickadate('picker')
               
                $.ajax({
                  type: "GET",
                  url: "data/getAmount.php",
                  data: "coin=" + coinAbv + "&date=" + formatDate(picker.get()),
                  success: function(result) {
                    $("#value").removeClass("hidden");
                    $("#spinner").addClass("hidden");
                    if(!isNaN(result))
                    {
                      $("#value").html("<span class='amount'>$<span id='amount'>0</span></span>");
                     var max_number = result;
                     var padding_zeros = '';
                     for(var i = 0, l = max_number.toString().length; i < l; i++) {
                       padding_zeros += '0';
                     }
                 
                     var padded_now, numberStep = function(now, tween) {
                       var target = $(tween.elem),
                           rounded_now = Math.round(now);
                 
                       var rounded_now_string = rounded_now.toString()
                       padded_now = padding_zeros + rounded_now_string;
                       padded_now = padded_now.substring(rounded_now_string.length);
                 
                       target.prop('number', rounded_now).text(padded_now);
                     };
                     var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',');
                     $('#amount').animateNumber({
                       number: max_number,
                       numberStep: comma_separator_number_step
                     }, 1500);
                    }
                    else {
                      $("#value").html("<br><span style='font-size: 150%; color: #08c'>Data not available for this date, try again.</span>");
                    }
                  }
                })
            });
            
      </script>
   </body>
</html>