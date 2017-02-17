<?php



// Definimos nuestra zona horaria
date_default_timezone_set("America/Lima");

// incluimos el archivo de funciones
include 'funciones.php';

// incluimos el archivo de configuracion
include 'config.php';

// Verificamos si se ha enviado el campo con name from
if (isset($_POST['from']))
{

    // Si se ha enviado verificamos que no vengan vacios
    if ($_POST['from']!="" AND $_POST['to']!="")
    {

        // Recibimos el fecha de inicio y la fecha final desde el form

        $inicio = _formatear($_POST['from']);
        // y la formateamos con la funcion _formatear

        $final  = _formatear($_POST['to']);

        // Recibimos el fecha de inicio y la fecha final desde el form

        $inicio_normal = $_POST['from'];

        // y la formateamos con la funcion _formatear
        $final_normal  = $_POST['to'];

        // Recibimos los demas datos desde el form
        $titulo = evaluar($_POST['title']);

        // y con la funcion evaluar
        $body   = evaluar($_POST['event']);

        // reemplazamos los caracteres no permitidos
        $clase  = evaluar($_POST['class']);

        // insertamos el evento
        $query="INSERT INTO eventos VALUES(null,'$titulo','$body','','$clase','$inicio','$final','$inicio_normal','$final_normal')";

        // Ejecutamos nuestra sentencia sql
        $conexion->query($query);

        // Obtenemos el ultimo id insetado
      //////  $im=$conexion->query("SELECT MAX(id) AS id FROM eventos");
      //////  $row = $im->fetch_row();
      //////  $id = trim($row[0]);

        // para generar el link del evento
      //////  $link = "$base_url"."descripcion_evento.php?id=$id";

        // y actualizamos su link
      //////  $query="UPDATE eventos SET url = '$link' WHERE id = $id";

        // Ejecutamos nuestra sentencia sql
      //////  $conexion->query($query);

        // redireccionamos a nuestro calendario
      //////  header("Location:$base_url");
    }
}

 ?>

<?php include("header.php"); ?>

        <div class="wrapp" >
          <div class="row">
            <div class="col-m-12 " style="margin:15px;padding:15px;  border-radius:5px;background-color:rgb(14,138,16);">
              <h3 style="color:rgb(235, 233, 35); text-align:center;  font-family: 'Wire One', sans-serif;"> CALENDARIO MUNICIPAL</h3>
            </div>
            <div class="col-md-4" style="border-radius:5px; background:rgb(221, 223, 221); ">
              <div class="row" style="" ><br><br>
                               <font style="text-align:center; font-family: 'Nova Slim', cursive;  "> <h5 style="font-size:large;">ALCALDE DISTRITAL DE JUAN ESPINOZA MEDRANO </h5></font>

                              <div class="album ">
                                    <div class="container">
                                          <img data-src="" alt="" src="img/alcal.jpg"style="height:300px; width: 100%; display: block; border-radius:5px;">
                                    </div>
                              </div>
                              <p class=""> <h6 style="text-align:center;"> <b>ABOG. Roberto Huamaní Meneses</b> </h6> </p>

              </div>
              <div class="row">
                <div class="album" style="">
                  <a href="micalendario.php"  class="btn " style="width:100%;   height: 130px;background-color:rgb(26,166,40); "> <br><b class="cal" style="text-align:center; font-family: 'Nova Slim', cursive;  font-size: 20px; "> VER CALENDARIO MUNICIPAL </b> </a>
                </div>

              </div>

              <div class="row">
                <div class="album">

                      <div id="cale" ></div>



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
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-8">
                      <div class="page-header" style="text-align:center;  font-family: 'Fredericka the Great', cursive; "><h4></h4></div>
                  </div>
                  <div class="col-md-2">

                  </div>

                </div>
                <div class="col-md-12">
                  <div class="col-md-6">
                    <div class="btn-group">
                        <button class="btn  mbtn" data-calendar-nav="prev"><< </button>
                        <button class="btn  mbtn" data-calendar-nav="today">Hoy</button>
                        <button class="btn  mbtn" data-calendar-nav="next">>></button>
                    </div>

                  </div>
                  <div class="col-md-6">


                            <div class="btn-group">
                                <button class="btn  mbtn" data-calendar-view="year">Año</button>
                                <button class="btn  mbtn " data-calendar-view="month">Mes</button>
                                <button class="btn  mbtn" data-calendar-view="week">Sem</button>

                            </div>

                  </div>

                </div>




              </div><hr>

              <div class="row">

                <div class="col-md-12">
                  <div id="calendar"></div> <!-- Aqui se mostrara nuestro calendario -->
                  <br><br>

                </div>

              </div>

              <!--ventana modal para el calendario-->

            </div>

          </div>




        </div>

    <script src="js/underscore-min.js"></script>
    <script src="js/calendar.js"></script>
    <script type="text/javascript">
        (function($){
                //creamos la fecha actual
                var date = new Date();
                var yyyy = date.getFullYear().toString();
                var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
                var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();

                //establecemos los valores del calendario
                var options = {

                    // definimos que los eventos se mostraran en ventana modal
                        modal: '#events-modal',

                        // dentro de un iframe
                        modal_type:'iframe',

                        //obtenemos los eventos de la base de datos
                        events_source: '<?=$base_url?>obtener_eventos.php',

                        // mostramos el calendario en el mes
                        view: 'month',

                        // y dia actual
                        day: yyyy+"-"+mm+"-"+dd,


                        // definimos el idioma por defecto
                        language: 'es-ES',

                        //Template de nuestro calendario
                        tmpl_path: '<?=$base_url?>tmpls/',
                        tmpl_cache: false,


                        // Hora de inicio
                        time_start: '08:00',

                        // y Hora final de cada dia
                        time_end: '22:00',

                        // intervalo de tiempo entre las hora, en este caso son 30 minutos
                        time_split: '30',

                        // Definimos un ancho del 100% a nuestro calendario
                        width: '100%',

                        onAfterEventsLoad: function(events)
                        {
                                if(!events)
                                {
                                        return;
                                }
                                var list = $('#eventlist');
                                list.html('');

                                $.each(events, function(key, val)
                                {
                                        $(document.createElement('li'))
                                                .html('<a href="' + val.url + '">' + val.title + '</a>')
                                                .appendTo(list);
                                });
                        },
                        onAfterViewLoad: function(view)
                        {
                                $('.page-header h4').text(this.getTitle());
                                $('.btn-group button').removeClass('active');
                                $('button[data-calendar-view="' + view + '"]').addClass('active');
                        },
                        classes: {
                                months: {
                                        general: 'label'
                                }
                        }
                };


                // id del div donde se mostrara el calendario
                var calendar = $('#calendar').calendar(options);

                $('.btn-group button[data-calendar-nav]').each(function()
                {
                        var $this = $(this);
                        $this.click(function()
                        {
                                calendar.navigate($this.data('calendar-nav'));
                        });
                });

                $('.btn-group button[data-calendar-view]').each(function()
                {
                        var $this = $(this);
                        $this.click(function()
                        {
                                calendar.view($this.data('calendar-view'));
                        });
                });

                $('#first_day').change(function()
                {
                        var value = $(this).val();
                        value = value.length ? parseInt(value) : null;
                        calendar.setOptions({first_day: value});
                        calendar.view();
                });
        }(jQuery));
    </script>
 <hr style=" background-color:green; height: 10px;" />
<?php include("footer.php"); ?>
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
