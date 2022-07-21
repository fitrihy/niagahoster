
<!-- begin:: Page -->

<!--[html-partial:include:{"file":"partials/_header/base-mobile.html"}]/-->

<!--begin::Body-->
<div class="kt-grid kt-grid--hor kt-grid--root">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

			<!--[html-partial:include:{"file":"partials/_header/base.html"}]/-->
			@include('layouts.partials._header.base')
			@include('layouts.partials._subheader.subheader-v1')
			<!-- begin:: Content Head -->
			<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content" style="margin-top:-22px;">

				<!--[html-partial:include:{"file":"partials/_subheader/subheader-v1.html"}]/-->

				<!--[html-partial:include:{"file":"partials/_content/base.html"}]/-->
				@include('layouts.partials._content.base')
			</div>
			
			@include('layouts.partials._footer.base')

		</div>
	</div>
</div>

<!-- end:: Page -->

<!--[html-partial:include:{"file":"partials/_scrolltop.html"}]/-->
@include('layouts.partials._scrolltop')

<!--[html-partial:include:{"file":"partials/_toolbar.html"}]/-->
@include('layouts.partials._toolbar')

<!--[html-partial:include:{"file":"partials/_demo-panel.html"}]/-->

<!--[html-partial:include:{"file":"partials/_chat.html"}]/-->