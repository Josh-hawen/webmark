<footer class="footer">
	<div class="container">
		<div class="footer_box col-md-12">
			<div class="footer-section" >

			</div>

			<div class="footer-section">

			</div>

		</div>
	</div>
</footer>
<script type="text/javascript">
	function hideElem(item) {
	    $(document).mouseup(function(e) {
	        if (item.has(e.target).length === 0) {
	            item.removeClass('active');
	        }
	    });
	}

	if ($('.lang').length > 0) {
		$(".lang").on('click', function(event){
			var el = $(this);
			if (!el.hasClass('active')) {
				el.addClass('active');
				hideElem(el)
			} else {
				el.removeClass('active');
			}
		});
	}
</script>
<!-- Scripts -->