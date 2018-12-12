<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gate Pass</title>
    <style>
    .wrapper { width : 100%; }
    .pull-left { float: left; }
    .pull-right { float: right; }
    .clearfix{clear:both;}
    .w-50 { width :50%; }
    .hr { border-bottom: 1px solid #201e1e; }
    .text-center{text-align: center; }
    
	
	.gate-pass{width:100%;margin:0 auto; padding:10px; border:2px solid #ccc;}
	.row{width:100%;}
	.colm{width:50%; float:left;}
	.colm img {margin: 2px 0px 3px 7px;
}
	
	.centerdiv{margin:0px auto; text-align:center !important;}
	.text-right{text-align:right;}
	   .table{ width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
	   border:1px solid #ccc;    border-spacing: 0;
    border-collapse: collapse;
	   }
	   .table tr td{border:1px solid #ccc;    padding: 8px;}
	   .p-2{border-bottom: 1px solid #ccc;
    margin-bottom: 10px;}
	@media screen and (max-width: 767px) {
	.gate-pass{width:100%;}
	
	}
	 @media print all {.gate-pass{width:100%;} table tbody tr td p img{display:none;} .row{width:100%;}
	.colm{width:50%; float:left; .centerdiv{margin:0px auto; text-align:center !important;}}
	
	}
	</style>
  </head>
  <body>
 
  <div class="gate-pass">
	<div class="text-center p-2"> <img src="<?php echo base_url('api/assets/images/logo.gif'); ?>" title="Logo" alt="Logo"/></div>
	<div class="row">
		<div class="colm">
			<img src="<?php echo base_url('upload/visitor_image/'.$image); ?>" title="Visitor Image" alt="Visitor Image" height="120px" width="100px"/>
			</div>
		<div class="colm text-right">
			<p><strong>Date:</strong>
            <?php echo $date; ?></p>
			 <p><strong>Ref. No:</strong>
            <b><?php echo $VisRN; ?></b></p>
			</div>
		</div>
		
		
	
	<div class="table-responsive">
		<table class="table" >
		<tbody>
		<tr>
		<td>Visitor Name.</td>
		<td><?php echo $visitor_name; ?></td>
		</tr>
		<tr>
	    <td>Purpose.</td>
		<td><?php echo $purpose; ?></td>
		</tr>
		
		<tr>
		<td>Contact Person</td>
		<td><?php echo $contact_person; ?></td>
		</tr><tr>
		<tr>
		<td>Designation</td>
		<td><?php echo $designation; ?></td>
		</tr>
		<tr>
		
		<td width="50%">Item No.</td>
		<td><?php echo $item_no; ?></td>
		</tr>
		<tr>
		<td>Court No.</td>
		<td><?php echo $court_no; ?></td>
		</tr>
		
		
		<!----<td>Advocate Type</td>
		<td><?php echo $advocate_type; ?></td>----->
		</tr>
		
		<tr>
		<td colspan="2" class="centerdiv">
			<p class="text-center"><?php echo '<img src="data:image/png;base64,' . $barcode. '">'; ?></p>
                <p class="text-center"><b><?php echo $VisRN; ?></b></p>
			</td>
		</tr>
		</tbody>
		
		</table>
		</div>
  </div>
  
  	

  
  </body>
</html>