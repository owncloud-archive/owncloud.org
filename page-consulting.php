<p>While most ownCloud users are able to install and use ownCloud without any help or with assistance of volunteers in our community support channels, some deployments, especially by corporate users, may have more complex requirements that require professional services. This page lists individuals and companies offering services with regards to deployment, maintenance and integration of ownCloud in your workflow.
</p>

<div class="alert alert-info">If you offer ownCloud Consulting, you can <a href="/consulting/apply2/">request to be listed on this page</a>. To find out more about becoming an enterprise consultant with a support contract from <a target="_blank" href="https://owncloud.com">ownCloud Inc</a> please see <a target="_blank" href="https://owncloud.com/partner/">the partner page on ownCloud.com</a>.
</div>

<div class="row col-xs-12">
	<h2>ownCloud Certified Partners</h2>
	<p>For any projects where ownCloud is mission critical, ownCloud partners provide subscription based offerings from ownCloud and consulting as well as development services backed up by ownCloud, Inc. full-time support personal, engineers and expert knowledge.</p>
</div>
<div class="row col-xs-12">
	<h2>Independent consultants</h2>
	<p>The following individuals and firms offer ownCloud related services that may be of interest. The information provided here was provided by the entities named, and is not verified or endorsed by the ownCloud community or ownCloud, Inc. We offer this listing as a service to the ecosystem.</p>
</div>

<div class="row">
	<div class="col-md-4">
		<select id="countryPicker" class="form-control">
			<option value="all">World</option>
		</select>
	</div>
	<div class="col-md-8">
		<input type="checkbox" id="offersHosting">Show only hosters<br>
		<input type="checkbox" id="certified">Show only Certified Partners<br>
	</div>
</div>

<div id="consultants" class="row"></div>




<!-- TODO: add code to sort consultants on property "github-score":"X" where X can be 0 and up. -->




<!-- <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script> -->
<script type="text/javascript">
	$( document ).ready(function() {
		var items = [];
		var countries = [];
		var selectedCountryCode = 'all';
		var filterOnlyHosters = false;
		var filterOnlyCertified = true;
		function filterItems(country) {
			var filteredItems = [];
			$.each(items, function (key, consultant) {
				// Filter for the country
				if(typeof country !== 'undefined' && country !== 'all') {
					var hasCountryFlag = false;
					$.each(consultant.flags, function (key, value) {
						if(value === country) {
							hasCountryFlag = true;
						}
					});
					if(!hasCountryFlag) {
						return true;
					}
				}
				// Filter for hosting
				if (filterOnlyHosters) {
					if(consultant.hosting !== true) {
						return true;
					}
				}
				if (filterOnlyCertified) {
					if(consultant.supported !== true) {
						return true;
					}
				}
				// Iterate and template all the remaining ones. Yay.
				filteredItems.push('<div class="col-xs-12 col-sm-6 col-md-4">');
						filteredItems.push('<div class="consulting thumbnail">');
							filteredItems.push('<div class="bannerhead">');
								filteredItems.push('<a href="');
									filteredItems.push(consultant.url);
									filteredItems.push('" target="_blank" rel="noreferrer" title="');
										filteredItems.push(consultant.title);
									filteredItems.push('">');
									filteredItems.push('<img class="consultant-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/consultants/');
										filteredItems.push(consultant.imagename);
									filteredItems.push('">');
								filteredItems.push('</a><br \>');
								filteredItems.push(consultant.title);
								$.each(consultant.flags, function (key, value) {
									filteredItems.push('<img class="flag" src="<?php echo get_template_directory_uri() ?>/assets/img/flags/' + value + '.gif">');
									// Add country to country array if it does not exists.
									if ($.inArray(value, countries) == -1) {
										countries.push(value);
									}
								});
							filteredItems.push('<br \></div>');
							if(consultant.supported !== true) {
								filteredItems.push('<div class="bannerfoot">')
							}
							if(consultant.supported == true) {
							filteredItems.push('<div class="bannerfoot-partner">')
							}
								filteredItems.push('<p>');
									filteredItems.push(consultant.specializes);
								filteredItems.push('</p>');
							filteredItems.push("</div>");
						filteredItems.push("</div>");
					filteredItems.push("</div>");
 				filteredItems.push("</div>");
// 			filteredItems.push("</div>");
			});
			$('#consultants').empty();
			$("<div/>", {
				html: filteredItems.join("")
			}).appendTo('#consultants');
		}
		$.getJSON('<?php echo get_template_directory_uri() ?>/assets/consultants.json', function (data) {
			items = data;
			filterItems(selectedCountryCode);
			$.each(countries, function (key, countryCode) {
				$('#countryPicker').append($('<option/>', {
					value: countryCode,
					html: countryCode
				}));
			});
		});
		$('#countryPicker').change(function () {
			selectedCountryCode = $(this).find("option:selected").attr('value');
			filterItems(selectedCountryCode, filterOnlyHosters, filterOnlyCertified);
		});
		$('#offersHosting').change(function () {
			filterOnlyHosters = $('#offersHosting').is(':checked');
			filterItems(selectedCountryCode, filterOnlyHosters, filterOnlyCertified);
		});
		$('#Certified').change(function () {
			filterOnlyHosters = $('#certified').is(':checked');
			filterItems(selectedCountryCode, filterOnlyHosters, filterOnlyCertified);
		});
	})
</script>