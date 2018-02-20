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
      Had you bought $100 <br>
      of 
      <div class="input-field inline" style="padding-bottom: 2%">
         <select id="coindropdown">
            <option value="zrx">0x</option>
            <option value="rep">Augur</option>
            <option value="bat">Basic Attention Token</option>
            <option value="bnb">Binance Coin</option>
            <option value="btc" selected>Bitcoin</option>
            <option value="bch">Bitcoin Cash</option>
            <option value="btg">Bitcoin Gold</option>
            <option value="ada">Cardano</option>
            <option value="cvc">Civic</option>
            <option value="dash">Dash</option>
            <option value="dcr">Decred</option>
            <option value="dgb">Digibyte</option>
            <option value="doge">Dogecoin</option>
            <option value="eos">EOS</option>
            <option value="eth">Ethereum</option>
            <option value="etc">Ethereum Classic</option>
            <option value="ethos">Ethos</option>
            <option value="fun">FunFair</option>
            <option value="gno">Gnosis</option>
            <option value="gnt">Golem</option>
            <option value="icx">ICON</option>
            <option value="icn">Iconomi</option>
            <option value="iot">IOTA</option>
            <option value="knc">Kyber Network</option>
            <option value="lsk">LISK</option>
            <option value="ltc">Litecoin</option>
            <option value="mtl">Metal</option>
            <option value="xmr">Monero</option>
            <option value="xrb">Nano</option>
            <option value="xem">NEM</option>
            <option value="neo">NEO</option>
            <option value="omg">OmiseGO</option>
            <option value="pivx">PIVX</option>
            <option value="ppt">Populous</option>
            <option value="xrp">Ripple</option>
            <option value="salt">SALT</option>
            <option value="sc">SiaCoin</option>
            <option value="snt">Status</option>
            <option value="xlm">Stellar</option>
            <option value="trx">TRON</option>
            <option value="pay">TenX</option>
            <option value="ven">VeChain</option>
            <option value="xvg">Verge</option>
            <option value="veri">Veritaseum</option>
            <option value="vtc">Vertcoin</option>
            <option value="wtc">Walton</option>
            <option value="zec">ZCash</option>
         </select>
      </div>
      on
      <div class="input-field inline" style="padding-bottom: 2%">
         <input type="text" class="datepicker">
      </div>
      <br>
      <span style="font-size: 120%;">You'd have </span><br>
      <div id="value"><span class="amount">$<span id="amount">0</span></span></div>
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
            });
            
            $('.datepicker').pickadate({
             onStart: function() {
                 var date = new Date()
                 this.set('select', [date.getFullYear(), date.getMonth(), date.getDate() - 1]);
             },
              onSet: function(context) {
               var coinAbv = $("#coindropdown").val();
                              
                $.ajax({
                  type: "GET",
                  url: "data/getAmount.php",
                  data: "coin=" + coinAbv + "&date=" + formatDate(context.select),
                  success: function(result) {
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
         
            $('#coindropdown').change(function() {
              var coinAbv = $("#coindropdown").val();
              var $input = $('.datepicker').pickadate()
         
               // Use the picker object directly.
               var picker = $input.pickadate('picker')
               
                $.ajax({
                  type: "GET",
                  url: "data/getAmount.php",
                  data: "coin=" + coinAbv + "&date=" + formatDate(picker.get()),
                  success: function(result) {
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