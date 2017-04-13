<?php include 'header.php'; ?>
<?php include 'slider.php'; ?>
<?php include 'obraprincipal.php'; ?>
<?php include 'informacionindex.php'; ?>
<?php include 'main.php'; ?>



<script type="text/javascript">


function centerModal() {
    $(this).css('display', 'block');
    var $dialog = $(this).find(".modal-dialog");
    var offset = ($(window).height() - $dialog.height()) / 2;
    // Center modal vertically in window
    $dialog.css("margin-top", offset);
}

$('.modal').on('show.bs.modal', centerModal);
$(window).on("resize", function () {
    $('.modal:visible').each(centerModal);
});
</script>	<script type="text/javascript">
	$(document).ready(function(){
		$('.po').modal('show');
	});
	</script>
	<!-- ####################################################################################################################### -->
	<!-- CENTRO DE POP UPS -->
	<!-- ####################################################################################################################### -->
	<div class="modal fade bs-example-modal-lg po" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
              <a href="#" target="_self">
              <img src="images/modal1.png" class="img-responsive">
            </a>
          </div>
        <!--  <div class="item">
            <a href="#" target="_self">
              <img src="images/lo.png" class="img-responsive">
            </a>
          </div>-->

        </div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
	</div>



  <!--_____________________________________FOOTER_____________________________-->
  </br>
  </br>
   <hr style=" background-color:green; height: 10px;" />

  <?php include('footer.php');?>
