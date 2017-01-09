 <?php
/*
Template Name: TryMe
*/
?>

<?php get_header(); ?>
		

<div role="main" class="main">
	<div class="page_title">
		<div class="wrapper">
			<hgroup>
				<h1>Downloads &amp; Data</h1>
				<h2>Download tools and source code; access data sources and services</h2>
			</hgroup>
		</div>
	</div><!--end page title-->
	
	<div class="main_content cf">
		<?php include_once "breadcrumbs.php"; ?>

		<div id="tryme">
			

			<h3>
			    Try it
			</h3>
			<div class="input-group">
			      <span class="input-group-addon">http://data.developer-test.nhs.uk/hscorgrefdata/</span>
			      <input id="interactive" type="text" class="form-control" placeholder="organisations/A">
			      <span class="input-group-btn"><button onClick="interactive_call();return false;" class="btn btn-primary">request</button></span>
			</div>
			<small>Need a hint? try <a href="#" onClick="update('organisations?q=medway');return false;"><i>organisations?q=medway</i></a> or <a href="#" onClick="update('organisations?limit=5&offset=20000');return false;"><i>organisations?limit=5&offset=20000</i></a> or <a href="#" onClick="update('role-types');return false;"><i>role-types</i></a></small>
			<p class="lead pad_top">Result:</p>
			<div class="well">
			  <pre id="interactive_output" class="pre-scrollable">
				{
				  "name": "NORTH EAST GOVERNMENT OFFICE REGION",
				  "odsCode": "A",
				  "operationalStartDate": "1994-04-01",
				  "recordClass": "HSCOrg",
				  "status": "Active",
				  "last_changed": "2015-04-13",
				  "relationships": [],
				  "roles": [
				    {
				      "role": {
					"code": "RO128",
					"description": "GOVERNMENT OFFICE REGION",
					"operationalStartDate": "1994-04-01",
					"primaryRole": true,
					"status": "Active",
					"links": [
					  {
					    "href": "http://data.developer-test.nhs.uk/hscorgrefdata/role-types/RO128",
					    "rel": "role-type"
					  }
					],
					"uniqueId": "95705"
				      }
				    }
				  ],
				  "links": [
				    {
				      "href": "http://data.developer-test.nhs.uk/hscorgrefdata/organisations/A",
				      "rel": "self"
				    }
				  ],
				}
			  </pre>
			</div>

		    <script>
		    function update(call){
			jQuery('#interactive').val(call);
			interactive_call();
		    }

		    function interactive_call(){
			var content = jQuery('#interactive').val()
			if(content == ''){
			    content = 'organisations/A';
			}
			var call_url = 'http://data.developer-test.nhs.uk/hscorgrefdata/' + content;
			jQuery.ajax({
		      dataType: 'json',
		      url: call_url,
		      context: document.body
		    }).complete(function(data) {
			if(data['status'] == 200){
			    var d = jQuery.parseJSON(data['responseText']);
			    jQuery('#interactive_output').text(JSON.stringify(d, null, '\t'));
			}
			else if (data['status'] == 404) {
			    jQuery('#interactive_output').text(data['status'] + ' ' + data['statusText']);
			}
		    });
		    }
		    </script>


		</div><!-- end of tryme content -->
	</div><!--end main_content-->
</div><!-- end main -->
		
<?php get_footer(); ?>
