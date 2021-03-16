
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
   
    <title><?php echo SITE_TITLE;?></title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMuli:300,400,500,700" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/vendors/css/tables/extensions/autoFill.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/vendors/css/tables/extensions/colReorder.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/vendors/css/tables/extensions/fixedColumns.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/vendors/css/tables/datatable/select.dataTables.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/css/app.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/css/core/colors/palette-gradient.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validate.js"></script>  
    <script src="<?php echo base_url();?>assets/js/additional-methods.min.js"></script>
    <style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #ffffff;
    width: 100%;
    border: groove;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
  </head>
  <body class="horizontal-layout horizontal-menu horizontal-menu-padding 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-light navbar-border navbar-brand-center">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                <h3 class="brand-text"><?php echo SITE_TITLE;?></h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container container center-layout">
          <div class="collapse navbar-collapse" id="navbar-mobile">
           
            <ul class="nav navbar-nav float-right">         
             
            
             
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="<?php echo base_url();?>assets/backend/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">User</span></a>
                <div class="dropdown-menu dropdown-menu-right">

                  <a class="dropdown-item" href="<?php echo base_url('logout');?>"><i class="ft-power"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
      <div class="navbar-container main-menu-content container center-layout" data-menu="menu-container">
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item" ><a class="nav-link" href="<?php echo base_url();?>" ><i class="icon-home"></i><span data-i18n="nav.dash.main">Dashboard</span></a>
            
          </li>
        
        
       
        </ul>
      </div>
    </div>

    <div class="app-content container center-layout mt-2">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a>
                  </li>
                
                  <li class="breadcrumb-item active"><?php echo SITE_TITLE;?>
                  </li>
                </ol>
              </div>
            </div>
            <h3 class="content-header-title mb-0">Serach <?php echo SITE_TITLE;?> Datas</h3>
          </div>
          <div class="content-header-right col-md-6 col-12">
           <!--  <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">   
              <button class="btn btn-info round dropdown-toggle dropdown-menu-right px-2" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons</a></div>
            </div> -->
          </div>
        </div>
      
           
  <div class="autocomplete" style="width:300px;">
    <input id="myInput" type="text"  placeholder="Search Company Name here..">
  </div>
 <button class="btn btn-primary" id="search_data" >
      Search
   </button>
<br><br>

     
       
        <div class="content-body"><!-- Auto Fill table -->
<section id="autofill">
	<div class="row">
		<div class="col-12">

               
              
            
			<div class="card">

				<div class="card-header">
					
					<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
							<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
							<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
							<li><a data-action="close"><i class="ft-x"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="card-content collapse show">
					<div class="card-body card-dashboard" id="table_data">
					
					<table class="table table-striped table-bordered auto-fill">
							<thead>
								<tr>
									<th>#</th>
									<th>Symbol</th>
									<th>Company Name</th>
									<th>Market capitalization (Rs in Lakhs)</th>
									
								</tr>
							</thead>
							<tbody>
							<?php $i=0; foreach($nse as $data) { ?>
								<tr>
									<td><?php echo $i=$i+1;?></td>
									<td><?php echo $data->symbol;?></td>
									<td><?php echo $data->c_name;?></td>
									<td><?php echo $data->market_cap;?></td>
									
								</tr>
              <?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>#</th>
									<th>Symbol</th>
									<th>Company Name</th>
									<th>Market capitalization (Rs in Lakhs)</th>
									
								</tr>
							</tfoot>
						</table>


					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ Auto Fill table -->



        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

<?php $datas = $this->AdminModel->get_cmny_names(); ?>
var searchData = [<?php foreach($datas as $data) { echo '"'.$data->c_name.'", ';} ?>];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), searchData);
</script>


<script type="text/javascript">
  

var api = "<?php echo base_url('api-search-data');?>";
// button trigger
$('#search_data').on('click',function() {  

   var button = $(this);     
    var inputData = $('#myInput').val();
    if($('#myInput').val() != '') {

      $.ajax({
      url: api,
      method:'post',
      data : {'inputdata': inputData},
      cache:false,
      type:"text/json"
   })
   .always(function(){
      // $(button).html('Loading Data...');
      // $('#table_data').html('<div class="loader-wrapper"><div class="loader-container"><div class="square-spin loader-success"><div></div></div></div></div>');
      
   })
   .done(function(evt) {
      // Disable button
      // $(button).prop('disabled',true);
      // $(button).html('Search');
       var result = parseJwt(evt.Token);
       console.log(result);
      // Set timeout for lazy loading
      setTimeout(function(){
         // var result = JSON.parse(evt);
         var html = '<table class="table table-striped table-bordered auto-fill"><thead><tr><th>#</th><th>Symbol</th><th>Company Name</th><th>Market capitalization (Rs in Lakhs)</th></tr></thead><tbody>';
        
         for(var i=0;i < result.length; i++) {

          html += '<tr><td>'+i+'</td><td>'+result[i].symbol+'</td><td>'+result[i].c_name+'</td><td>'+result[i].market_cap+'</td></tr>';
              
              

            // html +='<h3 class="tables-doctor-name">'+result.Data[i].DoctorName+'</h3>'
//                +'<p class="tables-doctor-title">'+result.Data[i].Specialist+'</p>';
// if(result.Data[i].Hospitals.length > 0) {  
//                html +='<table class="table">'
//                   +'<thead>'
//                   +'<tr>'
//                   +'<th scope="col">Nama Rumah Sakit</th>'
//                   +'<th scope="col">Alamat</th>'
//                   +'<th scope="col">Jadwal Praktek</th>'
//                   +'</tr>'
//                   +'</thead>'
//                   +'<tbody>';
// for(var j=0;j < result.Data[i].Hospitals.length; j++) {
//                   html +='<tr>'
//                      +'<th scope="row">'+result.Data[i].Hospitals[j].Name+'</th>'
//                      +'<td>'+result.Data[i].Hospitals[j].Address+'</td>'
//                      +'<td>'+result.Data[i].Hospitals[j].Schedule+'</td>'
//                      +'</tr>';
//                }
//                html +='</tbody></table>';
//             }
         }
         html +='</tbody></table>';
         $('#table_data').html('');
         $('#table_data').html(html);
     },1000); 



   })
   .fail(function() {
      alert('Error : Failed to reach API Url or check your connection');
      // $(button).prop('disabled',false);
   });

    }
    // console.log(inputData);
   
   // .then(function(evt){
   //    setTimeout(function(){        
   //       $(button).css({'background-color':'#ccc'}).hide();          
   //    },1000);
   // });
});

function parseJwt (token) {
    var base64Url = token.split('.')[1];
    var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
    var jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));

    return JSON.parse(jsonPayload);
};

</script>


    <footer class="footer footer-static footer-light navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2 container center-layout"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 , All rights reserved. </span></p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url();?>assets/backend/vendors/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="<?php echo base_url();?>assets/backend/vendors/js/ui/jquery.sticky.js"></script>
    <script src="<?php echo base_url();?>assets/backend/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/vendors/js/tables/datatable/dataTables.autoFill.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/vendors/js/tables/datatable/dataTables.colReorder.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/vendors/js/tables/datatable/dataTables.fixedColumns.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?php echo base_url();?>assets/backend/js/core/app-menu.js"></script>
    <script src="<?php echo base_url();?>assets/backend/js/core/app.js"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="<?php echo base_url();?>assets/backend/js/scripts/tables/datatables-extensions/datatable-autofill.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>