<?php get_header();?>
	<!-- this is a way to do the same thing that i did with flex-box except using display block margin auto on the img -->
	<div class="height-hack row d-flex justify-content-around">
		<div class="col-md-3">
			<h1 class="text-center">Category 1</h1>
			<img src="https://gw.alipayobjects.com/zos/rmsportal/wSAkBuJFbdxsosKKpqyq.svg" class="img-center" height="100" width="100" alt="">
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore odit magni fugit hic incidunt libero expedita nostrum?
			</p>
		</div>
		<div class="col-md-3">
			<h1 class="text-center">Category 2</h1>
			<img src="https://gw.alipayobjects.com/zos/rmsportal/wSAkBuJFbdxsosKKpqyq.svg" class="img-center" height="100" width="100" alt="">
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit.
			</p>
		</div>
		<div class="col-md-3">
			<h1 class="text-center">Category 3</h1>
			<img src="https://gw.alipayobjects.com/zos/rmsportal/wSAkBuJFbdxsosKKpqyq.svg" class="img-center" height="100" width="100" alt="">
			<p>
				Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae dicta eius quisquam fugit eligendi commodi quis facere. Perspiciatis debitis ab?
			</p>
		</div>
	</div>
	<!-- end of section-->
	<!-- This section is for a simple quote or statistics -->
	<div class="row justify-content-center bg-dark white-text spacing-10">
		<div class="col text-center">
			<h2>Hello World</h2>
		</div>
	</div>
	<!-- end of section -->
	<!-- This section is meant to be used with a loop to display projects -->
	<div class="container-fluid post-loop">
		<div class="row d-flex flex-row justify-content-around">
			<div class="col-md-6">
				<h2>
					Title: Project
				</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla obcaecati, fuga aperiam consequatur est ducimus modi animi numquam nisi ipsam exercitationem vero nesciunt facilis porro sapiente laborum ipsum et placeat.
				</p>
			</div>
			<div class="col-md-6 bg_ft_img"></div>
		</div>
		<div class="row d-flex justify-content-around flex-row-reverse">
			<div class="col-md-6">
				<h2>
					Title: Project
				</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla obcaecati, fuga aperiam consequatur est ducimus modi animi numquam nisi ipsam exercitationem vero nesciunt facilis porro sapiente laborum ipsum et placeat.
				</p>
			</div>
			<div class="col-md-6 bg_ft_img"></div>
		</div>
	</div>
	<!-- end of loop section -->
	<!-- another quote -->
	<div class="container-fluid row quote_img"></div>
	<!-- end quote -->
	<!-- This row is mostly meant to just practice flexbox the same can be achieved using just css.-->
	<div class="container-fluid">
		<div class="height-hack d-flex flex-row justify-content-around">
			<div class="d-flex flex-row justify-content-around">
				<h2>Title: 1</h2>
			</div>
			<div class="d-flex flex-row justify-content-around">
				<h2>Title: 2</h2>
			</div>
			<div class="d-flex flex-row justify-content-around">
				<h2>Title: 3</h2>
			</div>
		</div>
		<div class="height-hack d-flex flex-row justify-content-around">
			<div class="d-flex flex-row justify-content-around">
				<img src="https://gw.alipayobjects.com/zos/rmsportal/wSAkBuJFbdxsosKKpqyq.svg" class="" height="100" width="100" alt="">
			</div>
			<div class="d-flex flex-row justify-content-around">
				<img src="https://gw.alipayobjects.com/zos/rmsportal/wSAkBuJFbdxsosKKpqyq.svg" class="" height="100" width="100" alt="">
			</div>
			<div class="d-flex flex-row justify-content-around">
				<img src="https://gw.alipayobjects.com/zos/rmsportal/wSAkBuJFbdxsosKKpqyq.svg" class="" height="100" width="100" alt="">
			</div>
		</div>
		<div class="height-hack d-flex flex-row justify-content-around">
			<div class="col-3">
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore odit magni fugit hic incidunt libero expedita nostrum?
				</p>
			</div>
			<div class="col-3">
				<p>
					Lorem ipsum dolor sit amet consectetur adipisicing elit.
				</p>
			</div>
			<div class="col-3">
				<p>
					Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae dicta eius quisquam fugit eligendi commodi quis facere. Perspiciatis debitis ab?
				</p>
			</div>
		</div>
	</div>
	<!-- end of section -->
<?php get_footer();?>
