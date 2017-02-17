<div class="col-md-4" style="border-radius:5px; background:rgb(221, 223, 221); ">

  <br/>
 <div class="row" style="" ><br><br>
                  <font style="text-align:center; font-family: 'Nova Slim', cursive;  "> <h5 style="font-size:large;">ALCALDE DISTRITAL DE JUAN ESPINOZA MEDRANO </h5></font>

                 <div class="album ">
                       <div class="container">
                             <img data-src="" alt="" src="img/alcal.jpg"style="height:300px; width: 100%; display: block; border-radius:5px;">
                       </div>
                 </div>
                 <p class=""> <h6 style="text-align:center;"> <b>ABOG. Roberto Huamaní Meneses</b> </h6> </p>

 </div>
 <br>
 <br>
<div class="row">
  <div class="album" style="">
    <a href="micalendario.php"  class="btn " style="width:100%;   height: 130px;background-color:rgb(26,166,40); "> <br><b class="cal" style="text-align:center; font-family: 'Nova Slim', cursive;  font-size: 20px; "> VER CALENDARIO MUNICIPAL </b> </a>
  </div>

</div>
<div class="row">
  <div class="album">

        <div id="cale" ></div>

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="js/jquery-ui-datepicker.min.js"></script>
        <script>
        	$('#cale').datepicker({
        		inline: true,
        		firstDay: 1,
        		showOtherMonths: true,
        		dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S']
        	});
        </script>

  </div>

</div>

<div class="row" >
         <div  class="album"style="text-align:center; font-family: 'Wire One', sans-serif;   background-color:rgb(13,14,13);" >
           <script type="text/javascript">
                   function startTime()
                  {
                      today=new Date();
                      h=today.getHours();
                      m=today.getMinutes();
                      s=today.getSeconds();
                      var sufijo = 'am';
                      if(h > 12) {
                        h = h - 12;
                        sufijo = ' pm';
                       }

                      m=checkTime(m);
                      s=checkTime(s);
                      document.getElementById('reloj').innerHTML=h+": "+m+":"+s+" "+sufijo;
                      t=setTimeout('startTime()',500);
                    }
                      function checkTime(i)
                      {if (i<10) {i="0" + i;}return i;}
                      window.onload=function(){startTime();
                      }
           </script>
            <div id="reloj" style="font-size:60px; color:rgb(222,214,21);"></div>



         </div>
</div>

<div class="row">
  <div class="album">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.805775894122!2d-72.9226023951839!3d-14.431352974077834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916b62c4f2aaf88d%3A0xd06f5fdbfdb4dc1!2sMollebamba!5e1!3m2!1ses!2spe!4v1486785081085" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

  </div>

</div>
</div>
