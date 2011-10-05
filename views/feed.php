<div class="feed_module">
	<menu class="feed_options">
		<ul class="tabs h_list">
			<li class="tab"><a href="#tab1">Articles</a></li>
			<li class="tab"><a href="#tab2">Photos</a></li>
			<li class="tab"><a href="#tab3">Documents</a></li>
		</ul>
		<label class="aural_only">Sort by category</label>
		<select>
			<option value="-1">All Categories</option>
			<option value="nukes">Nukes</option>
			<option value="agriculture">Agriculture</option>
		</select>
	</menu>
	
	<div class="m_list">

<?php for ($c = 0; $c <= 10; $c++) { ?>
		<article class="ml_item entry">
			<figure class="ml_image">
				<img src="http://www.greenpeace.org/sweden/ReSizes/Teaser/Global/sweden/klimat/foto/2011/leiv-eiriksson.jpg" />
			</figure>
			<div class="ml_text">
				<h3 class="entry_title">The Title</h3>
				<div class="entry_teaser">
					Ratibusdam re laborrum qui totaspe verumque volecerum cum et, experibus iur rempor aliquo tet faceatem lam quisque pro iniet est, ut aut ut qui torporae conestr uptatios dolenditi berioratem labora dit inctas unti ut quod quae.
				</div>
			</div>
		</article>
<?php } ?>	

	</div>
	<nav class="pagination">
		<a class="previous" href="#">Previous</a>
		<ul class="h_list">
			<li class="result_page"><a href="#">1</a></li>
			<li class="result_page"><a href="#">2</a></li>
			<li class="result_page"><a href="#">3</a></li>
			<li class="result_page"><a href="#">4</a></li>
			<li class="result_page"><a href="#">5</a></li>
			<li class="result_page"><a href="#">6</a></li>
			<li class="result_page"><a href="#">7</a></li>
			<li class="result_page"><a href="#">8</a></li>
			<li class="result_page"><a href="#">9</a></li>
			<li class="last"><a href="#">9</a></li>
		</ul>
		<a class="next" href="#">Next</a>
	</nav>
	
</div>