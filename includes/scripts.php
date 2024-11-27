<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!--Slider-->
<script src="dist/js/slider.js"></script>
<!-- CK Editor -->
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Datatable
    $('#example1').DataTable()
    //CK Editor
    CKEDITOR.replace('editor1')
  });
</script>
<!--Magnify -->
<script src="magnify/magnify.min.js"></script>
<script>
$(function(){
	$('.zoom').magnify();
});
</script>
<!-- Custom Scripts -->
<script>
$(function(){
  $('#navbar-search-input').focus(function(){
    $('#searchBtn').show();
  });

  $('#navbar-search-input').focusout(function(){
    $('#searchBtn').hide();
  });

  getCart();

  $('#productForm').submit(function(e){
  	e.preventDefault();
  	var product = $(this).serialize();
  	$.ajax({
  		type: 'POST',
  		url: 'cart_add.php',
  		data: product,
  		dataType: 'json',
  		success: function(response){
  			$('#callout').show();
  			$('.message').html(response.message);
  			if(response.error){
  				$('#callout').removeClass('callout-success').addClass('callout-danger');
  			}
  			else{
				$('#callout').removeClass('callout-danger').addClass('callout-success');
				getCart();
  			}
  		}
  	});
  });

  $(document).on('click', '.close', function(){
  	$('#callout').hide();
  });

});

function getCart(){
	$.ajax({
		type: 'POST',
		url: 'cart_fetch.php',
		dataType: 'json',
		success: function(response){
			$('#cart_menu').html(response.list);
			$('.cart_count').html(response.count);
		}
	});
}
</script>
<!-- Add JavaScript for slider functionality -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.product-slider');
    const prevBtn = document.querySelector('.slider-prev');
    const nextBtn = document.querySelector('.slider-next');
    const productItem = document.querySelector('.productscroll-item'); // Fetch one item to calculate width
    const sliderWidth = productItem.offsetWidth + 20; // Include margin/gap (20px in CSS)

    let scrollPosition = 0;

    nextBtn.addEventListener('click', () => {
        if (slider.scrollWidth - (scrollPosition + slider.offsetWidth) > 0) {
            scrollPosition += sliderWidth;
            slider.style.transform = `translateX(-${scrollPosition}px)`;
        }
    });

    prevBtn.addEventListener('click', () => {
        if (scrollPosition > 0) {
            scrollPosition -= sliderWidth;
            slider.style.transform = `translateX(-${scrollPosition}px)`;
        }
    });
});
</script>
<!--menu ICon-->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuIcon = document.querySelector('.menu-icon');
        const header = document.querySelector('.container');

        menuIcon.addEventListener('click', () => {
            header.classList.toggle('headers-hidden');
            header.classList.toggle('headers-shown');
        });
    });
</script>
<!--featured product slider-->
<script>
	document.addEventListener("DOMContentLoaded", function () {
    const sliderContainer = document.querySelector(".ux-slider-container");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");
    const sliderItems = document.querySelectorAll(".ux-box");

    let currentIndex = 0;
    const itemWidth = sliderItems[0].offsetWidth + 15; // Width + gap

    function updateSliderPosition() {
        sliderContainer.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    }

    prevBtn.addEventListener("click", () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSliderPosition();
        }
    });

    nextBtn.addEventListener("click", () => {
        if (currentIndex < sliderItems.length - 1) {
            currentIndex++;
            updateSliderPosition();
        }
    });

    // Resize listener for responsiveness
    window.addEventListener("resize", () => {
        updateSliderPosition();
    });
});
</script>	