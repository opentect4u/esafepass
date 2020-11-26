<!doctype html>

<html>

	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		
		<title>Untitled Document</title>
		<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet"> 
		   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	</head>

	<body>
	    
				  <?php //foreach($pass as $key)
				  $logoPath       = base_url('assets/images/pass/logo.png');
				  $signature      = base_url('assets/images/signature.png');
				  $photoPath      = base_url($key->appl_photo_path);
				  $qrimage        = base_url('uploads/qr_image/'.$img_url);
				   
                //   echo $img_url;
                //   die();
				  $medExpDt       = $key->med_exp_dt;
				  if(isset($medExpDt) && $medExpDt!=""){
					$medExpDt     = date('d-F-Y',strtotime($key->med_exp_dt));
				  }else{
					$medExpDt  	  = "";   
				  }
				  
				  $huit_exp_dt	  = $key->huit_exp_dt;
				  if(isset($huit_exp_dt) && $huit_exp_dt!=""){
					$huit_exp_dt  = date('d-F-Y',strtotime($key->huit_exp_dt));
				  }else{
					$huit_exp_dt  = "";   
				  }
				  

				  $h2s_exp_dt     = $key->h2s_exp_dt;
				  if(isset($h2s_exp_dt) && $h2s_exp_dt !=""){
					$h2s_exp_dt   = date('d-F-Y',strtotime($key->h2s_exp_dt));
				  }else{
					$h2s_exp_dt   ="";
				  }

				  $valid          = strtotime($dates->min_valid);

				  $newdate 		  = date("d-F-Y", strtotime("-1 months",$valid));

				 if($key->h2s_cert_path != "")
				 {
					 $trainingStatus = "Not Attended";
				 }
				 else
				 {
					 $trainingStatus = "Attended";
				 }
				 
				 ?>
			<table style="width: 579px; margin-bottom: 25px;" border="0" cellpadding="0" cellspacing="0" width="579">
				<tr style="background: #92dad6;" valign="top" align="left">
					<td>
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
						<tr>
						<td style="border-bottom: #86c2bf solid 5px; padding: 15px 0 0 15px; box-sizing: border-box;" width="476">
						<div style="width: 100%;"><img src="<?php echo $logoPath ;?>" width="400" height="63" alt=""/></div>
						<div style="font-family: 'PT Sans', sans-serif; font-size: 16px; color: #014c89; padding-left:80px;"><strong style="font-family: 'PT Sans', sans-serif; font-size: 16px; color: #014c89; margin-left:80px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name:<?php echo $key->appl_name; ?> <?php echo $key->appl_mid_name; ?> <?php echo $key->appl_last_name; ?></strong></div>
						
					</td>

					<td style="border-bottom: #86c2bf solid 5px;" valign="top" align="left" width="103"><img src="<?php echo $photoPath ;?>" width="103" height="105" alt="No image" style="display: block;" />
						</td>
						</tr>
						</table>
					</td>
				</tr>

				<tr>
					<td style="background: #d6efec; padding: 10px 15px; font-family: 'PT Sans', sans-serif; font-size: 14px; color: #231f20;">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<td width="21%" style="padding-bottom: 6px;" valign="top" align="left">Card No:</td>
								<td width="79%" style="padding-bottom: 6px;" valign="top" align="left">:<?=$key->appl_no?></td>
								</tr>
							<tr>
								<td valign="top" align="left" style="padding-bottom: 7px;">IC/Passport#: </td>
								<td valign="top" align="left" style="padding-bottom: 7px;">:<?=$key->applcnt_pasprt_no?></td>
								</tr>
							<tr>
								<td valign="top" align="left" style="padding-bottom: 7px;">Nationality: </td>
								<td valign="top" align="left" style="padding-bottom: 7px;">:<?=$key->appl_nation?></td>
								</tr>

								<tr>
                                <td valign="top" align="left" style="padding-bottom: 7px;">NRIC: </td>
                                <td valign="top" align="left" style="padding-bottom: 7px;">:<?=$key->nric_no?></td>
                              </tr>
							<tr>
								<td valign="top" align="left" style="padding-bottom: 7px;">Company Name: </td>
								<td valign="top" align="left">:<?=$key->org_name?></td>
								</tr>
							<tr>
								<td valign="top" align="left" style="padding-bottom: 7px;">Address: </td>
								<td valign="top" align="left" style="padding-bottom: 7px;">:<?=$key->org_address?></td>
								</tr>
							<tr>
								<td valign="top" align="left" style="padding-bottom: 7px;">Telephone: </td>
								<td valign="top" align="left" style="padding-bottom: 7px;">:<?=$key->org_ph_no?></td>
								</tr>
							</tbody>
						</table></td>
				</tr>

				<tr>
					<td style="background: #014c89; padding: 10px 15px; font-family: 'PT Sans', sans-serif; font-size: 14px; color: #fff;" align="left" valign="top">
						<h3 style="font-family: 'PT Sans', sans-serif; font-size: 18px; color: #fff; padding:0 0 5px 0; margin: 0;">Certification Expiry Date</h3><br>
						
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td width="50%" style="padding-bottom: 8px;color: #fff;">Boset-Huet : <?=$huit_exp_dt?></td>
									<td width="50%" style="padding-bottom: 8px;color: #fff;">Medical : <?=$medExpDt;?></td>
									
								</tr>
								<tr>
								    <!--<td width="50%" style="padding-bottom: 8px;color: #fff;">H2S : <?=$trainingStatus;?></td>-->
									<td width="50%" style="padding-bottom: 8px;color: #fff;">H2S Expiry Date : <?=$h2s_exp_dt?></td>
								    <td width="50%" style="padding-bottom: 8px;color: #fff;">Card Valid Till : <?=$newdate?></td>
								</tr>
								<!--<tr>
								<td width="50%" style="padding-bottom: 8px;color: #fff;">&nbsp;</td>
								
								</tr>-->
							</tbody>
						</table>
					</td>
				</tr>
		</table>
			

		
		<table style="width: 579px;" border="0" cellpadding="0" cellspacing="0" width="579">

			<tbody>
				<tr>
					<td align="left" valign="top" style="background: #d6efec; padding:20px 15px 10px 15px; font-size: 24px; color: #231f20; font-family: 'PT Sans', sans-serif;
						font-weight: 700;">
					VESTIGO PETROLEUM SDN BHD (1044120-D)
				</td>
				</tr>
				<tr>
					<td align="left" valign="top" style="background: #d6efec; padding: 0 15px 30px 15px; font-family: 'PT Sans', sans-serif; font-size: 14px; color: #231f20; line-height: 22px;">
					
				<table width="100%" border="0" cellspacing="1" cellpadding="2">
					<tbody>
						<tr>
							<td align="left" valign="top"><p style="color: #231f20; line-height: 40px; font-size: 14px; padding: 0; margin: 0;">
						
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
							<tr>
									<td width="33%" style="padding-bottom: 8px;color: #fff;">	<p style="color: #231f20; line-height: 40px; font-size: 14px;  padding-bottom: 12px; margin-bottom: 15px;">This Offshore Safty Card is not transferable.</p></td>
								</tr>
								<tr>
									<td width="33%" style="padding-bottom: 8px;color: #fff;"><p style="color: #231f20; line-height: 40px; font-size: 14px;  padding-bottom: 12px; margin-bottom: 15px;">	If found please return to:</p></td>
								</tr>
								<tr>
									<td width="33%" style="padding-bottom: 8px;color: #fff;"><p style="color: #231f20; line-height: 40px; font-size: 14px;  padding-bottom: 12px; margin-bottom: 15px;">Vestigo petroleum Sdn. Bhd.</p></td>
								</tr>
								<tr>
									<td width="33%" style="padding-bottom: 8px;color: #fff;"><p style="color: #231f20; line-height: 40px; font-size: 14px;  padding-bottom: 12px; margin-bottom: 15px;">	level 13, Menara Binjai,</p></td>
								</tr>
								<tr>
									<td width="33%" style="padding-bottom: 8px;color: #fff;">	<p style="color: #231f20; line-height: 40px; font-size: 14px;  padding-bottom: 12px; margin: 0;">	No. 2, Jalan Binjai,</p></td>
								</tr>
								<tr>
									<td width="33%" style="padding-bottom: 8px;color: #fff;"><p style="color: #231f20; line-height: 40px; font-size: 14px;  padding-bottom: 12px; margin: 0;">	Off Jalan Ampang,</p></td>
								</tr>
								<tr>
									<td width="33%" style="padding-bottom: 8px;color: #fff;"><p style="color: #231f20; line-height: 40px; font-size: 14px;  padding-bottom: 12px; margin: 0;">50450 Kuala Lumpur.</p></td>
								</tr>
						<br>
						
							    <div align="right" id="result" "generate_qrcode('test')" cols="50" rows="5" ><?php echo $qrimage ;?></div>
						
							</tbody>
						</table>
							</td>
							<!--<td align="left" valign="bottom" width="182"><img src="#" width="182" height="153" alt="" style="float: right;"/></td>-->
						</tr>
						
						<tr><td><h3><br>Telephone: 603 27769999 (Office)</h3></td></tr>
						
						<tr>	<td colspan="2"><p><br>This is Computer generated document and no signature is required</p></td></tr>
					</tbody>
				</table>
			
				</td>
				
				</tr>

			</tbody>

		</table>

	</body>

</html>
<script>
//function generate_qrcode(sample){
    $( document ).ready(function() {
        console.log("kdjfksdfks");
     alert("raja");
    $.ajax({
        type:'post',
        url:'generator.php',
        data:{sample:<?php echo $key->appl_name; ?>},
        success:function(code){
         $('#result').html(code);
        }
    });

}
</script>
