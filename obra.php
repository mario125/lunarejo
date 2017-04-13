<?php include 'header.php'; ?>
<?php include 'info.php'; ?>

    <!--__________________________ SLIDER_________________ -->




<!--__________________________________-MAIN_________________________________-->


<div class="wrapp">
  <div class="row">

    <div class="col-m-12 " style="margin:15px;padding:15px;  border-radius:3px;background-image: url(images/of4.png);  ">
      <p style="color:rgb(255,255,255); text-align:center;  font-family: 'Wire One', sans-serif;">OBRAS </p>
    </div>
    <!--_________________SIDEBAR_______________-->
    <?php include('sidebar.php'); ?>
    <!--_________________CONTENIDO_______________-->
    <div class="col-md-8" style="background-color: rgb(255,255,255);">








         <div class="row">
             <div class="col-md-7">
                 <a>
                     <img style="height:250px;"class="img-responsive" src="obras/obra1.png" alt="">
                 </a>
             </div>
             <div class="col-md-5">
                 <h3>Project One</h3>
                 <h4>Subheading</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>

             </div>
         </div>
         <hr>
         <div class="row">
             <div class="col-md-7">
                 <a >
                     <img style="height:250px;"class="img-responsive" src="obras/obra2.png" alt="">
                 </a>
             </div>
             <div class="col-md-5">
                 <h3>Project One</h3>
                 <h4>Subheading</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>

             </div>
         </div>
         <hr>
         <div class="row">
             <div class="col-md-7">
                 <a href="#">
                     <img style="height:250px;"class="img-responsive" src="obras/obra3.png" alt="">
                 </a>
             </div>
             <div class="col-md-5">
                 <h3>Project One</h3>
                 <h4>Subheading</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>

             </div>
         </div>
         <hr>
         <div class="row">
             <div class="col-md-7">
                 <a href="#">
                     <img style="height:250px;"class="img-responsive" src="obras/obra4.png" alt="">
                 </a>
             </div>
             <div class="col-md-5">
                 <h3>Project One</h3>
                 <h4>Subheading</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>

             </div>
         </div>
         <hr>
         <div class="row text-center">
             <div class="col-lg-12">
                 <ul class="pagination">
                     <li>
                         <a href="#">«</a>
                     </li>
                     <li class="active">
                         <a  class="uno" id="uno">1</a>
                     </li>
                     <li>
                         <a href="#">2</a>
                     </li>
                     <li>
                         <a href="#">3</a>
                     </li>
                     <li>
                         <a href="#">4</a>
                     </li>
                     <li>
                         <a href="#">5</a>
                     </li>
                     <li>
                         <a href="#">»</a>
                     </li>
                 </ul>
             </div>
         </div>
         <hr>




    </div>
    <!--_________________SIDEBAR_______________-->






  </div>
</div>

<!--_____________________________________FOOTER_____________________________-->
</br>
</br>
 <hr style=" background-color:green; height: 10px;" />
 <script type="text/javascript">
 window.onload=function(){
  document.getElementById('uno').onclick=function(){
    alert("holas");
  }
}

 </script>

<?php include('footer.php');?>
