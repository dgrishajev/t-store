<script language="javascript" type="text/javascript">
   function imgFlagError(image){
       image.onerror = "";
       image.src = "<?php echo plugins_url('/images/flags/noFlag.png', AHC_PLUGIN_MAIN_FILE) ?>";
       return true;
   }
</script>
<?php
   $myend_date = date('Y-m-d',time());
   $mystart_date = date('Y-m-d',strtotime($myend_date.' - '.(AHC_VISITORS_VISITS_LIMIT-1).' days'));
   ?>
 

<?php

if(get_option('ahc_upgrade_message') !='yes')
			{
?>
   <!-- Trigger/Open The Modal -->


<!-- The Modal -->
<div id="myVModal" class="vtmodal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <b style="font-size:18px; !important">Upgrade to premium version</b>
    </div>
    <div class="modal-body">
     <center><a title="Download Now" target="_blank"  href="http://www.wp-buy.com/product/visitors-traffic-real-time-statistics-pro"><img border="0" src="http://www.wp-buy.com/wp-content/uploads/2017/05/vtrts_offer.png" /></a>
     <br />
     
     Upgrade now and get the data you need to make intelligent marketing
     </center>
     <span class="clearfix"></span>
     <hr />
     <span id="HideMe" style="cursor:pointer" ><a href="javascript:void(0)"><strong>Dismiss</strong> this message</a></span>
    </div>
    
  </div>

</div>

<style type="text/css">
/* The Modal (background) */
.vtmodal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 9999; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 620px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: #000;
    float: right;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: white;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 10px !important;
    background-color: red;
    color: white;
	font-size:18px !important
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>

<script language="javascript" type="text/javascript">
  
// Get the modal
var vtrtsmodal = document.getElementById('myVModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
vtrtsmodal.style.display = "block";

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    vtrtsmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == vtrtsmodal) {
        vtrtsmodal.style.display = "none";
    }
}
</script>
<?php } ?>
<div class="ahc_main_container">
   <div class="hitsLogo"></div>
   <h1><br />&nbsp;&nbsp;Visitors Traffic Real Time Statistics (1.2)<span style="font-size:15px; color:#900 ">&nbsp;</span></h1>

   
   <!-- end languages links -->
   
   <div class="row">
      <div class="col-md-12">
         <div class="panel" >
            <h2 style="height:25px !important; font-size:11px !important" >Hits in last two weeks</h2>
            <div class="panelcontent" >
               <canvas id="visitorsVisitsChart" style="height: 400px;"></canvas>
            </div>
			<br />
<table width="200" height="20px" style="font-size:14px !important" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="background:#E5E5E5" width="30px">&nbsp;</td>
    <td>&nbsp;visitors</td>
    <td  width="50px">&nbsp;</td>
    <td style="background:#B1CCD9" width="30px">&nbsp;</td>
    <td>&nbsp;visits</td>
  </tr>
</table>
<p></p>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6">
         <!-- browsers chart panel -->
         <div class="panel">
            <h2 style="height:25px !important; font-size:11px !important"><?php echo ahc_browsers ?></h2>
            <?php
			$ahc_get_browsers_hits_counts = ahc_browsers_count();
			
               if($ahc_get_browsers_hits_counts > 0)
               {
               $tablestyes = ''; 
               }else{
               $tablestyes = 'style="display:none"';
               echo '<img src="'.plugins_url('/images/browsers_nodata.png', AHC_PLUGIN_MAIN_FILE).'" border="0" />';
               }
               ?>
            <table width="100%" border="0" cellspacing="0" <?php echo $tablestyes;?> cellpadding="2">
               <tr>
                  <td>
                     <div class="panelcontent">
                        <canvas id="brsBiechartContainer" height="400"></canvas>
                     </div>
                  </td>
                  <td>
                     <div class="legendsContainer col-md-4" id="browsersLegContainer">
                     </div>
                  </td>
               </tr>
            </table>
         </div>
      </div>
      <div class="col-md-6">
         <!-- search engines chart panel -->
         <div class="panel">
            <h2 style="height:25px !important; font-size:11px !important"><?= ahc_search_engines_in_last_20days ?></h2>
            <?php
			$ahc_get_serch_visits_by_date = ahc_search_engins_count();
			
               if($ahc_get_serch_visits_by_date > 0)
               {
               $tablestye = ''; 
               }else{
               $tablestye = 'style="display:none"';
               echo '<img src="'.plugins_url('/images/se_nodata.png', AHC_PLUGIN_MAIN_FILE).'" border="0" />';
               }
               ?>
            <table width="100%" border="0" cellspacing="0" <?php echo $tablestye;?> cellpadding="2">
               <tr>
                  <td>
                     <div class="panelcontent">
                        <canvas id="srhEngBieChartContainer" height="400"></canvas>
                     </div>
                  </td>
                  <td>
                     <div class="legendsContainer col-md-4" id="srchEngLegContainer">
                     </div>
                  </td>
               </tr>
            </table>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6">
         <div class="panel">
            <h2 style="height:25px !important; font-size:11px !important"><?php echo ahc_refering_sites ?></h2>
            <div class="panelcontent" style="height:530px" >
               <?php
                  $referingSites = ahc_get_top_refering_sites();
                   if(sizeof($referingSites) > 0){
                     
                  if(is_array($referingSites) && !empty($referingSites)){
                  ?>
               <table width="95%" border="0" cellspacing="0">
                  <tr>
                     <th width="70%"><?php echo ahc_site_name ?></th>
                     <th width="30%"><?php echo ahc_total_times ?></th>
                  </tr>
                  <?php
                     if(is_array($referingSites)){
                         foreach($referingSites as $site){
                     ?>
                  <tr>
                     <td  class="values"><?php echo $site['site_name'] ?></td>
                     <td  class="values"><?php echo $site['total_hits'] ?></td>
                  </tr>
                  <?php
                     }
                     }
                     ?>
               </table>
               <?php }
                  }else{
                  echo '<img src="'.plugins_url('/images/topref_nodata.png', AHC_PLUGIN_MAIN_FILE).'" border="0" />'; 
                  }
                  ?>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="panel">
            <h2 style="height:25px !important; font-size:11px !important"><?= ahc_latest_search_words ?></h2>
            
            
            <div class="panelcontent" style="padding-right: 50px;">
<?php
$lastSearchKeyWordsUsed = ahc_get_latest_search_key_words_used();

if(is_array($lastSearchKeyWordsUsed)){
	foreach($lastSearchKeyWordsUsed as $searchWord){
	$visitDate = new DateTime($searchWord['hit_date']);

?>
<div class="lastSearchKeyWords">
<span class="visitDateTime">&nbsp;<?php echo  $visitDate->format('d/m/Y') ?></span>			


<span>
<?php if($searchWord['ctr_internet_code'] !=''){?>
<img src="<?php echo  plugins_url('/images/flags/'.strtolower($searchWord['ctr_internet_code']).'.png', AHC_PLUGIN_MAIN_FILE) ?>" border="0" 
 width="22" height="18" title="<?php echo  $searchWord['ctr_name'] ?>" onerror="imgFlagError(this)" /><?php }?></span>
<span>
<img src="<?php echo  plugins_url('/images/search_engines/'.$searchWord['srh_icon'], AHC_PLUGIN_MAIN_FILE) ?>" border="0" width="22" height="22" 
 title="<?php echo  $searchWord['srh_name'] ?>" /></span>
<span>
<img src="<?php echo  plugins_url('/images/browsers/'.$searchWord['bsr_icon'], AHC_PLUGIN_MAIN_FILE) ?>" border="0" width="20" height="20" 
 title="<?php echo  $searchWord['bsr_name'] ?>" /></span>
 <span class="searchKeyWords"><a href="<?php echo  $searchWord['hit_referer'] ?>" target="_blank"><?php echo  $searchWord['hit_search_words'] ?></a></span>
</div>
<?php
	}
}
?>
</div>
</div>




            
      </div>
   </div>
   <div>
   
   <div class="createsend-button" style="height:22px;display:inline-block; float:right !important" data-listid="d/CC/8AF/660/98EB8E7AC22367C8">
</div><script type="text/javascript">(function () { var e = document.createElement('script'); e.type = 'text/javascript'; e.async = true; e.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://btn.createsend1.com/js/sb.min.js?v=3'; e.className = 'createsend-script'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s); })();</script>
<h5 style="size:14px !important">Subscribe Now To Get The Latest Promotions And News Updates</h5>

<br />
      <a target="_blank" href="http://www.wp-buy.com/product/visitors-traffic-real-time-statistics-pro">
         <p style="color:#00F; font-size:15px;">if you need more statistics you can upgrade to professional version now, The premium version of visitors traffic real time statistics is completely different from the free version as there are a lot more features included.</p>
        
         <p><img style="border:#CCC solid 1px; margin-right:30px" height="151px" src="<?php echo plugins_url('/images/upgradenow-button.png', AHC_PLUGIN_MAIN_FILE) ?>" /><img style="border:#CCC solid 1px"  src="<?php echo plugins_url('/images/widget.png', AHC_PLUGIN_MAIN_FILE) ?>" /></p>
      </a>
      
   </div>
</div>
<script language="javascript" type="text/javascript">



   jQuery(document).ready(function() {
				   
					
					jQuery("#HideMe").click(function(){ 
					  jQuery.ajax({  
							type: 'POST',  
							url: '<?php echo admin_url();?>/admin-ajax.php',  
							data: {  
								action: 'ahc_HideMessageAjaxFunction'
							},  
							success: function(data, textStatus, XMLHttpRequest){  
								
								jQuery("#myVModal").hide();  
								  
							},  
							error: function(MLHttpRequest, textStatus, errorThrown){  
								alert(errorThrown);  
							}  
						});  
				  });
  
			    });
				
   
   var visitsData = <?php echo json_encode(ahc_get_visitors_visits_by_date()); ?>;
   var browsersData = <?php echo json_encode(ahc_get_browsers_hits_counts()); ?>;
   var srhEngVisitsData = <?php echo json_encode(ahc_get_serch_visits_by_date()); ?>;
   jQuery(document).ready(function(){
   //------------------------------------------
   	if(visitsData.success && typeof visitsData.data != 'undefined'){
   		drawVisitsLineChart(visitsData);
   	}
   //------------------------------------------
   	if(browsersData.success && typeof browsersData.data != 'undefined'){
   		drawBrowsersBieChart(browsersData.data);
   	}
   //------------------------------------------
   	if(srhEngVisitsData.success && typeof srhEngVisitsData.data != 'undefined'){
   
   		drawSrhEngVstLineChart(srhEngVisitsData);
   	}
   //------------------------------------------
   });
</script>