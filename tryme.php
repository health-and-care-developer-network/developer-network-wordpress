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
            <div class="wrapper cf container">
                <div class="full_width">

                    <div class="tryit-title"><h2><?php the_title(); ?></h2></div>

                    <div class="input-group">
                        <span class="input-group-addon">https://data.developer.nhs.uk/hscorgrefdata/</span>
                        <input id="interactive" type="text" class="form-control" placeholder="organisations/A">
                        <span class="input-group-btn"><button onClick="interactive_call();return false;"
                                                              class="btn btn-primary">request</button></span>
                    </div>
                    <small>Need a hint? try <a href="#" onClick="update('organisations?q=medway');return false;"><i>organisations?q=medway</i></a>
                        or <a href="#" onClick="update('organisations?limit=5&offset=20000');return false;"><i>organisations?limit=5&offset=20000</i></a>
                        or <a href="#" onClick="update('organisations?role=RO35&limit=50');return false;"><i>organisations?role=RO35&limit=50</i></a>
                    </small>
                    <p class="lead pad_top">Result:</p>
                    <div class="well">
			  <pre id="interactive_output" class="pre-scrollable">
{
  "addresses": [
    {
      "addressLines": [
        "CITYGATE", 
        "GALLOWGATE"
      ], 
      "country": "ENGLAND", 
      "county": "TYNE AND WEAR", 
      "postalCode": "NE1 4HW", 
      "town": "NEWCASTLE UPON TYNE"
    }
  ], 
  "lastChanged": "2015-04-13", 
  "links": [
    {
      "href": "https://data.developer.nhs.uk/hscorgrefdata/organisations/A",
      "rel": "self"
    }
  ], 
  "name": "NORTH EAST GOVERNMENT OFFICE REGION", 
  "odsCode": "A", 
  "operationalStartDate": "1994-04-01", 
  "recordClass": "HSCOrg", 
  "refOnly": false, 
  "relationships": [], 
  "roles": [
    {
      "code": "RO128", 
      "description": "GOVERNMENT OFFICE REGION", 
      "links": [
        {
          "href": "https://data.developer.nhs.uk/hscorgrefdata/role-types/RO128",
          "rel": "role-type"
        }
      ], 
      "operationalStartDate": "1994-04-01", 
      "primaryRole": true, 
      "status": "Active", 
      "uniqueId": 95705
    }
  ], 
  "status": "Active", 
  "successors": []
}
			  </pre>
                    </div>

                    <script>
                        (function() {
                            var interactive = document.querySelector("#interactive");

                            window.update = function(call) {

                                interactive.value = call;
                                interactive_call();
                            }

                            window.interactive_call = function() {
                                var content = interactive.value;
                                var loadingNode = document.createTextNode("Loading request... please wait");
                                if (content == '') {
                                    content = 'organisations/A';
                                }

                                var call_url = 'https://data.developer.nhs.uk/hscorgrefdata/' + content;

                                document.querySelector("#interactive_output").innerHTML = "";
                                document.querySelector("#interactive_output").appendChild(loadingNode);

                                fetch(call_url).then(function (response) {
                                    if (response.status == 200) {
                                        return response.text();
                                    } else if (response.status == 404) {
                                        return "404 Page Not Found";
                                    }
                                }).then(function (json) {
                                    var newText = document.createTextNode(json);
                                    document.querySelector("#interactive_output").innerHTML = "";
                                    document.querySelector("#interactive_output").appendChild(newText);
                                });
                            }
                        })();
                    </script>

                </div>
            </div><!-- end of wrappers -->
        </div><!-- end of tryme content -->
    </div><!--end main_content-->
</div><!-- end main -->

<?php get_footer(); ?>
