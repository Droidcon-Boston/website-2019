<?php

/* Template Name: Testemail */

get_header(); ?>


<?php
global $wpdb;




if(isset($_POST['submit']))
{ 
    $type_of_clean              = json_encode($_POST['type_cleans']);
    $cleans_specify             = $_POST['cleans_specify'];
    $often_week                 = $_POST['often_week'];
    $hours                      = $_POST['hours'];
    $date                       = $_POST['date'];
    $time                       = $_POST['time'];
    $apply_details              = isset($_POST['apply_details'])? json_encode($_POST['apply_details']):"";
    $information                = $_POST['information'];
    $image_name                 = isset($_FILES['image_name']['name'])? json_encode($_FILES['image_name']['name']): "";
    $service_billing_address    = $_POST['service_billing_address'];
    $email                      = $_POST['email'];
    $name                       = $_POST['full_name'];
    $address1                   = $_POST['address1'];
    $address2                   = $_POST['address2'];
    $city                       = $_POST['city'];
    $zip                        = $_POST['zip'];
    $phone                      = $_POST['phone'];
    $promotion_email            = $_POST['promotion_email'];
    $term_service               = $_POST['term_service'];
    if($type_of_clean!=""){
        $type_of_clean_arry = json_decode($type_of_clean);
        $type_of_clean_string = implode(',', $type_of_clean_arry);
    }
    if($apply_details!=""){
        $apply_details_arry = json_decode($apply_details);
        $apply_details_string = implode(',', $apply_details_arry);
    }
    if($image_name!=""){
        $image_name_arry = json_decode($image_name);
        $image_name_string = implode(',', $image_name_arry);
    }
    
   // if($_FILES["image_name"]["name"][0]!="")
   // {        
      //  if($_SERVER['HTTP_HOST']=='localhost'){
      //      $target_dir = $_SERVER['DOCUMENT_ROOT']."/wsc/wp-content/uploads/form_image/";
      //  }
     //   elseif($_SERVER['HTTP_HOST']=='demotbs.com'){
     //       $target_dir = $_SERVER['DOCUMENT_ROOT']."/dev/wsc/wp-content/uploads/form_image/";
     //   }else{
     //       $target_dir = $_SERVER['DOCUMENT_ROOT']."/wp-content/uploads/form_image/";
       // } 

      //  for($i=0;$i<count($_FILES["image_name"]["name"]);$i++)
      //  {
       //     $uploadfile=$_FILES["image_name"]["tmp_name"][$i];
       //     $folder=$target_dir;


       //     if(move_uploaded_file($_FILES["image_name"]["tmp_name"][$i], "$folder".$_FILES["image_name"]["name"][$i]))
       //     {
       //         //echo "The file ". basename( $_FILES["image_name"]["name"]). " has been uploaded.";
       //     }
       //     else{
      //          echo "Sorry, there was an error uploading your file.";
        //        die();
       //     }
      //  }
    //}
   // if($_FILES["image_name"]["name"][0]!=""){
   //     foreach ($image_name_arry as $img_name)
   //     {
   //         $image_url[] = '<a href="'.$_SERVER['HTTP_HOST'].'/wp-content/uploads/form_image/'.$img_name.'">View File </a>';
  //      }
  //      $img_link = '';
  //      for($k=0; $k<count($image_url); $k++) 
  //      {
   //        $img_link.=$image_url[$k].' , '; 
    //    }
   // }
//$to="mahendra@absoluteranking.com , sunilumar@absoluteranking.com , info@WhitestoneCleaning.co.uk ";
$to = "sunilumar@absoluteranking.com";
$subject = "Request A Quote";
$message = '<table width="614px" align="center" style="background: #F1F1F1;">
<tr>
<td>
<div style="width:614px; border:1px solid #efefef; font: normal 12px Verdana, Arial, Helvetica, sans-serif; padding:2px; border:1px solid #ccc; margin:0px auto; 0">
<div style="background:#fff; padding:15px 10px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="left"><img src="http://whitestonecleaning.co.uk/wp-content/uploads/2018/10/2018-10-01.png" alt="" />
</td>
</tr>
</table>
</div>
<div style="min-height:300px; padding:10px; background:#fff;">
<table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
<tr>
<td width="41%" align="center" height="35">Services/Type of Cleans</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$type_of_clean_string.'</td>
</tr> 
<tr>
<td width="41%" align="center" height="35">Cleans Specify</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$cleans_specify.'</td>
</tr>   
<tr>
<td width="41%" align="center" height="35">How often do you need your cleaner</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$often_week.'</td>
</tr>  
<tr>
<td width="41%" align="center" height="35">Duration</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$hours.'</td>
</tr>  
<tr>
<td width="41%" align="center" height="35">Date</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$date.'</td>
</tr>  
<tr>
<td width="41%" align="center" height="35">Start Tim</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$time.'</td>
</tr>
<tr>
<td width="41%" align="center" height="35">DETAILS (Apply to you)
</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$apply_details_string.'</td>
</tr> 
<tr>
<td width="41%" align="center" height="35">Information</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$information.'</td>
</tr> 
<tr>
<td width="41%" align="center" height="35">Upload Images or Text Files</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$img_link.'</td>
</tr>
<tr>
<td width="41%" align="center" height="35">Service Billing Address</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$service_billing_address.'</td>
</tr>
<tr>
<td width="41%" align="center" height="35">User Name</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$name.'</td>
</tr>
<tr>
<td align="center" height="25">Email</td>
<td align="center" height="25">:</td>
<td align="center" height="25">'.$email.'</td>
</tr>
<tr>
<td width="41%" align="center" height="35">City</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$city.'</td>
</tr>
<tr>
<td align="center" height="25">Address1</td>
<td align="center" height="25">:</td>
<td align="center" height="25">'.$address1.'</td>
</tr>
<tr>
<td width="41%" align="center" height="35">Address2</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$address2.'</td>
</tr>
<tr>
<td width="41%" align="center" height="35">Post Code</td>
<td width="6%"  align="center" height="35">:</td>
<td width="53%" align="center" height="35" >'.$zip.'</td>
</tr>
<tr>
<td align="center" height="25">Phone</td>
<td align="center" height="25">:</td>
<td align="center" height="25">'.$phone.'</td>
</tr>
<tr>
<td align="center" height="25">Promotions Via Email</td>
<td align="center" height="25">:</td>
<td align="center" height="25">'.$promotion_email.'</td>
</tr>
<tr>
<td align="center" height="25">Privacy Policy</td>
<td align="center" height="25">:</td>
<td align="center" height="25">'.$term_service.'</td>
</tr>
</table>
</div>
</div>
</td>
</tr>
</table>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <'.$email.'>' . "\r\n";

    $sendmail = mail($to,$subject,$message,$headers);
	//print_r($sendmail);
    echo $sendmail; 
    $tablename=$wpdb->prefix.'quote';
    $data=array(
                'type_of_clean'             => $type_of_clean,
                'cleans_specify'            => $cleans_specify,
                'often_week'                => $often_week,
                'hours'                     => $hours,
                'date'                      => $date,
                'time'                      => $time,
                'apply_details'             => $apply_details,
                'information'               => $information,
                'image_name'                => $image_name,
                'service_billing_address'   => $service_billing_address,
                'email'                     => $email,
                'name'                      => $name,
                'address1'                  => $address1,
                'address2'                  => $address2,
                'city'                      => $city,
                'zip'                       => $zip,
                'phone'                     => $phone,
                'promotion_email'           => isset($promotion_email),
                'term_service'              => $term_service,
            );
    
    //$wpdb->insert( $tablename, $data);
    //$my_id = $wpdb->insert_id;
    if(!empty($my_id))
    {
    $msg = "<p>Thank you for requesting a quote. We will be in touch with you very shortly.</p>
    <p>In the meantime, if you have any questions, please do not hesitate to contact us on 0116 218 3339 (Monday - Friday 9am - 5pm) or email: info@WhitestoneCleaning.co.uk (our online team is available 7 days a week 9am - 5pm) </p>" ;
    }else{      
     // print_r($wpdb->last_error);
      //echo "Error!!!";
    } 
}

?>
<div class="about-bg">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</div>
<div class="resident-box">
    <div class="container">
                <?php if(isset($msg)): ?>
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong class="succuss_msg"><?php echo $msg; ?></strong>
        </div>
        <?php endif; ?>
        <div class="row">
            <ul class="breadcrumb"> 
                <li><a href="index.html">Home</a></li> 
                <li>Request A Quote</li> 
            </ul>
            <div class="col-sm-9 about">
                <div class="top_quote">
                    <h3>It's free and simple to do</h3>
                    <p>Don't hesitate to get in touch</p>
                    <p>Our pricing structure is very competitive and can be tailored to suit your needs and budget.
                        We tailor every solution to meet your needs 100%.</p>
                    <p>Please complete the request a quote form and we will get back to you with a plan
                    suitable for you.</p>
                </div>
            <form action="" method="post" id="" name="" enctype="multipart/form-data">
                <div class="step_1" >
                    <div class="type_box">
                        <span>Step 1</span>
                        <h6>Services / Type of Cleans</h6>
                        <a href="javascript:void(0)" id="right-edit-1" class="right-edit">Edit</a>
                    </div>                    
                    <div class="a-item" id="step_id_1">
                        <li class="check_1">
                            <input id="toggle1" name="type_cleans[]" value="Residential Cleaning" type="checkbox" >
                            <label for="toggle1" class="toggle-cls">Residential Cleaning</label>
                        </li>
                        <li class="check_1">
                            <input id="toggle2" name="type_cleans[]" value="Office and Commercial" type="checkbox">
                            <label for="toggle2" class="toggle-cls">Office and Commercial</label>
                        </li>
                        <li class="check_1">
                            <input id="toggle3" name="type_cleans[]" value="Door & Window Shine" type="checkbox" >
                            <label for="toggle3" class="toggle-cls">Door & Window Shine</label>
                        </li>
                        <li class="check_1">
                            <input id="toggle4" name="type_cleans[]" value="Floor Cleaning" type="checkbox" >
                            <label for="toggle4" class="toggle-cls">Floor Cleaning</label>
                        </li>
                        <li class="check_1">
                            <input id="toggle5" name="type_cleans[]" value="Carpet & Upholstery" type="checkbox" >
                            <label for="toggle5" class="toggle-cls">Carpet & Upholstery</label>
                        </li>
                        <li class="check_1">
                            <input id="toggle6" name="type_cleans[]" value="After Builders Clean" type="checkbox" >
                            <label for="toggle6" class="toggle-cls">After Builders Clean</label>
                        </li>
                        <li class="check_1">
                            <input id="toggle7" name="type_cleans[]" value="Public Sector" type="checkbox" >
                            <label for="toggle7" class="toggle-cls">Public Sector</label>
                        </li>
                        <li class="check_1">
                            <input id="toggle8" name="type_cleans[]" value="End of Tenancy" type="checkbox" >
                            <label for="toggle8" class="toggle-cls">End of Tenancy</label>
                        </li>
                        <li class="check_1">
                            <input id="toggle9" name="type_cleans[]" value="Oven Cleaning" type="checkbox" >
                            <label for="toggle9" class="toggle-cls">Oven Cleaning</label>
                        </li>
                        <li class="check_1">
                            <input id="toggle10" name="type_cleans[]" value="Event/Party Clean" type="checkbox" >
                            <label for="toggle10" class="toggle-cls">After Event / Party Clean</label>
                        </li>
                        <li class="check_1">
                            <input id="toggle11" name="type_cleans[]" value="Industrial Cleaning" type="checkbox" >
                            <label for="toggle11" class="toggle-cls">Industrial Cleaning</label>
                        </li>
                        <li class="check_1">
                            <input id="toggle12" name="type_cleans[]" value="Emergency Cleaning" type="checkbox" >
                            <label for="toggle12" class="toggle-cls">Emergency Cleaning</label>
                        </li>
                        <li class="check_1">
                            <input id="toggle13" name="type_cleans[]" value="OTHER" type="checkbox" >
                            <label for="toggle13" class="toggle-cls">OTHER</label>
                            <span id="type_cleans_error" style="color: #ff0000;"></span>
                        </li>
                        
                        <textarea placeholder="Please specify:" class="specify" name="cleans_specify"></textarea>
                        <button type="button" id="btn-step-1" name="continue" class="continue">Continue</button>
                    </div>
                </div>
                
                
                <div class="step_1">
                    <div class="type_box">
                        <span>Step 2</span>
                        <h6>Please complete the information from the drop down menu below</h6>
                        <a href="javascript:void(0)" id="right-edit-2" class="right-edit">Edit</a>
                    </div>                    
                    <div class="a-item" id="step_id_2">
                        <div class="row">
                        <div class="col-sm-4 select_fancy">
                         <label>How often do you need your cleaner?</label>
                          <select name="often_week" id="often_week" class="">
                            <option value="">-------</option>
                            <option value="Daily">Daily</option>
                            <option value="Weekly">Weekly</option>
                            <option value="Fortnightly">Fortnightly</option>
                            <option value="One Time Only">One Time Only</option>
                          </select>
                          <span id="often_week_error" style="color: #ff0000;"></span>
                        </div>
                                                    <div class="col-sm-2 select_fancy">
                         <label>Duration of clean</label>
                          <select name="hours"  id="hours" class="">
                            <option value="">-------</option>
                            <option value="1 hour">1 hour</option>
                            <option value="1.5 hours">1.5 hours</option>
                            <option value="2 hours ">2 hours</option>
                            <option value="2.5 hours">2.5 hours</option>
                            <option value="3 hour">3 hour</option>
                            <option value="3.5 hours">3.5 hours</option>
                            <option value="4 hours ">4 hours</option>
                            <option value="4.5 hours">4.5 hours</option>
                            <option value="5 hour">5 hour</option>
                            <option value="5.5 hours">5.5 hours</option>
                            <option value="6 hours ">6 hours</option>
                            <option value="6.5 hours">6.5 hours</option>
                            <option value="7 hour">7 hour</option>
                            <option value="7.5 hours">7.5 hours</option>
                            <option value="8 hours ">8 hours</option>
                            <option value="8.5 hours">8.5 hours</option>
                            <option value="9 hours ">9 hours</option>
                            <option value="9.5 hours">9.5 hours</option>
                            <option value="10 hour">10 hour</option>
                            <option value="10.5 hours">10.5 hours</option>
                            <option value="11 hours ">11 hours</option>
                            <option value="11.5 hours">11.5 hours</option>
                            <option value="12 hour">12 hour</option>
                          </select>
                          <span id="hours_error" style="color: #ff0000;"></span>
                        </div> 
                        <div class="col-sm-4 select_fancy">
                            <div class="form-group items">
                                <label>Select date of clean</label>
                                <input type="text" name="date" id="datepicker" placeholder="-------" class="email-box">
                            </div>
                          <span id="date_error" style="color: #ff0000;"></span>
                        </div>
                        <div class="col-sm-2 select_fancy">
                        <label>Select Start Time</label>
                              <select name="time" id="time">
                            <option value="">-------</option>
                            <option value="00:00">00:00</option>
                            <option value="01:00">01:00</option>
                            <option value="02:00">02:00</option>
                            <option value="03:00">03:00</option>
                            <option value="04:00">04:00</option>
                            <option value="05:00">05:00</option>
                            <option value="06:00">06:00</option>
                            <option value="07:00">07:00</option>
                            <option value="08:00">08:00</option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                            <option value="22:00">22:00</option>
                            <option value="23:00">23:00</option>
                          </select>
                          <span id="timing_error" style="color: #ff0000;"></span>
                        </div>
                        </div>
                        <div class="clearfix"></div>
                        <button type="button" id="btn-step-2" name="continue" class="continue">Continue</button>
                    </div>
                </div>
                
                <div class="step_1" >
                    <div class="type_box">
                        <span>Step 3</span>
                        <h6>DETAILS (please tick all the boxes below that apply to you)</h6>
                        <a href="javascript:void(0)" id="right-edit-3" class="right-edit">Edit</a>
                    </div>
                    
                    <div class="a-item" id="step_id_3">
                        <span id="apply_details_error" style="color: #ff0000;"></span>
                        <div class="form-group">
                          I have pets at the property
                          <input type="checkbox" name="apply_details[]" value="1- I have pets at the property" id="">
                          <span class="checkmark"></span>
                        </div>
                        <div class="form-group">
                            I require ironing
                            <input type="checkbox" name="apply_details[]" value="2- I require ironing" id="">
                            <span class="checkmark"></span>
                        </div>
                        <div class="form-group">
                            I would be available at this time on another day during the week (Mon-Sun)
                            <input type="checkbox" name="apply_details[]" value="3- I would be available at this time on another day during the week (Mon-Sun)" id="">
                            <span class="checkmark"></span>
                        </div>
                        <div class="form-group">
                            I would like to supply all of the cleaning products and equipment for the duration of the clean
                            <input type="checkbox" name="apply_details[]" value="4- I would like to supply all of the cleaning products and equipment for the duration of the clean" id="">
                            <span class="checkmark"></span>
                                <a href="#" data-toggle="modal" data-target="#myModal"><img src="https://whitestonecleaning.co.uk/wp-content/uploads/2018/10/i-icon.png"></a>
                        <div id="myModal" class="modal fade in" role="dialog">
                    <div class="modal-dialog">
                        <p><!-- Modal content--></p>
                        <div class="modal-content">
                            <div class="modal-header">
                                <p><button class="close" type="button" data-dismiss="modal">×</button></p>
                                
                            </div>
                            <div class="modal-body">
                                <p> 
                                If you check this box, we recommend you have the following cleaning supplies at the
service address:
                                </p>
                                <ol>
                                    <li>Vacuum cleaner and a mop</li>
                                    <li>Cleaning Cloths x 4</li>
                                    <li>Feather Duster</li>
                                    <li>Scratch-free sponge</li>
                                    <li>Toilet Cleaner</li>
                                    <li>Lime scale remover</li>
                                    <li>All-Purpose cleaner</li>
                                    <li>Fat solvent</li>
                                </ol>
                                <p>
                                    Further cleaning supplies are required for additional cleaning services, such as:
                                </p>
                                <ol>
                                    <li>Glass Cleaner (for interior & exterior windows)</li>
                                    <li>Oven Cleaner & Sponge (for oven cleaning)</li>
                                    <li>Other Appliance Cleaner & Sponge (to clean any other appliances such as fridge,
freezers etc)</li>                                                                                                                                                                                  
                                </ol>
                                <p>
                                    For Outdoor & Gardening Services, the Cleaning Operatives will require the following;
                                </p>
                                <ol>
                                    <li>A Pressure Washer or working and a fit for purpose hosepipe</li>
                                    <li>Thick Bristle Brush</li>
                                    <li>A small brush to clean difficult to reach areas</li>                                                                                                                                                                        
                                </ol>
                                <p>
                                    Whitestone Cleaning is unable to provide the following equipment;
                                </p>
                                <ol>
                                    <li>Vacuum Cleaner</li>
                                    <li>A Pressure Washer or Hosepipe</li>
                                </ol>
                                <p>
                                    Please contact the sales team on 0116 218 3339 if you have any questions or email
info@whitestonecleaning.co.uk
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                        </div>                        
                        <h5>Further Information and / or Instructions (optional)</h5>
                        <p>Please add any further information and / or instructions below to ensure we have a clear understanding of all of your requirements</p>

                        <textarea name="information" placeholder="" class="start"></textarea>
                        <input type="file" name="image_name[]" id="image0" value="" class="select_file" multiple>
                        <span id="blah"></span>
                        
                        <!-- <input type="file" name="image1" value="" class="select_file"> -->
						<p>You may upload images or text files if you wish to do so. This may help us give you a more accurate quote</p>
                        <button type="button" id="btn-step-3" name="continue" class="continue">Continue</button>
                    </div>
                </div>
                
                <div class="step_1" >
                    <div class="type_box">
                        <span>Step 4</span>
                        <h6>Please complete your details below so we can accurately process and safely store your quote</h6>
                        <a href="javascript:void(0)" id="right-edit-4" class="right-edit">Edit</a>
                    </div>
                    
                    <div class="a-item" id="step_id_4">
                        
                            <div class="form-group">
                              My service address and billing address are the same<br>
                             (If they are different, please only enter your service address below for receiving an accurate quotation)
                              <input type="checkbox" name="service_billing_address" value="Yes">
                              <span class="checkmark"></span>
                            </div>
                            <div class="form-group items">
                                <input type="email" name="email" id="email" placeholder="Email Address" class="email-box" required>
                                <input type="text" name="full_name" id="name" placeholder="Full Name" class="email-box" required>
                                <input type="text" name="address1" id="address1" placeholder="Address Line" class="email-box" required>
                                <input type="text" name="address2" id="address2" placeholder="Address line 2" class="email-box">
                                <input type="text" name="city" id="" placeholder="City" class="email-box" required>
                                <input type="text" name="zip" id="zip" placeholder="Post Code" class="email-box" required>
                                <input type="text" name="phone" id="phone" placeholder="Contact Number" class="email-box" required>
                            </div>
                            <div class="form-group">
                              I would like Whitestone Cleaning to send me offers & promotions via email 
                              <input type="checkbox" name="promotion_email" value="Yes,Promotions via email" id="">
                              <span class="checkmark"></span>
                            </div>
                            <div class="form-group">
                              I Accept the <a href="<?php echo esc_url(home_url());?>/terms-of-service">Terms of Service</a>,<a href="<?php echo esc_url(home_url());?>/cookie-policy">Cookie Policy</a> & <a href="<?php echo esc_url(home_url());?>/privacy-policy">Privacy Policy</a>
                              <input type="checkbox" name="term_service" value="Yes,Privacy Policy" id="" required>
                              <span class="checkmark"></span>
                            </div>
                            <input type="submit" name="submit" value="Submit" class="continue">
                    </div>
                </div>
            </form>    
            </div>
            <div class="col-sm-3 about">
                <div class="rights">
                    <h3>Your Quote summary</h3>
                    <ul>
                        <li>Frequency <span id='summary_week'></span></li>
                        <li>Duration <span id='summary_hours'></span></li>
                        <li>Date <span id='summary_date'></span></li>
                        <li>Time <span id='summary_time'></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
 <style type="text/css">
    input[type=file]{
      display: inline;
    }    
    #blah img{
      width: 150px;
      padding: 5px;
    }
  </style>
<script>
$(document).ready(function(){
    $('#image0').change(function(e){        
        jQuery('#blah').html("");
        var src = URL.createObjectURL(event.target.files[0]);
        var fileName = e.target.files[0].name;
        fileName = fileName.split('.').pop();
        
        var total_file=document.getElementById("image0").files.length;
        //var total_file = jQuery('#image0').length;        
        for(var i=0;i<total_file;i++)
        {
            if(fileName == 'jpg' || fileName == 'png' || fileName == 'gif'){               
                jQuery('#blah').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' >");
            }else{
                jQuery('#blah').html(''); 
            }
            
        }        

        // var src = URL.createObjectURL(event.target.files[0]);
        // var fileName = e.target.files[0].name;
        // fileName = fileName.split('.').pop();
        // if(fileName == 'jpg' || fileName == 'png' || fileName == 'gif'){
        //     jQuery('#blah').html('<img  src="'+src+'" alt="your image" width="80" height="80">');
        // }else{
        //     jQuery('#blah').html(''); 
        // }

    });
});
</script>
<script type="text/javascript">
    var tempval;
    $("#step_id_2").hide();
    $("#step_id_3").hide();
    $("#step_id_4").hide();
    $("#right-edit-1").hide();
    $("#right-edit-2").hide();
    $("#right-edit-3").hide();
    $("#right-edit-4").hide();
    $("#btn-step-1").on('click', function(){        
        var test = $("input[name='type_cleans[]']");
        if(test[0].checked==false && test[1].checked==false && test[2].checked==false && test[3].checked==false && test[4].checked==false && test[5].checked==false && test[6].checked==false && test[7].checked==false && test[8].checked==false && test[9].checked==false && test[10].checked==false && test[11].checked==false && test[12].checked==false)
        {
            $("#type_cleans_error").html('Check at least one');
            return false;
        } 
        else{
            $("#type_cleans_error").html();
            $("#step_id_1").hide();
            $("#right-edit-1").show();
            $("#step_id_2").show();   
            $('html, body').animate({scrollTop: ($("#step_id_2").offset().top - 50) }, 1000);
        }       
        
    });
	
	
	$("#btn-step-2").on('click', function(){
        var isValid = true;
        var often_week          = $('select[name="often_week"] option:selected').val();
        var hours               = $('select[name="hours"] option:selected').val();
        var date                = $('input[name="date"]').val();
        var timing              = $('select[name="time"]').val();

        if(often_week==""){            
            $('#often_week_error').html('This field required');
            isValid = false;
        } else{
             $('#often_week_error').html('');
        } 
        if(hours==""){            
            $('#hours_error').html('This field required');
            isValid = false;
        } else{
             $('#hours_error').html('');
        } 
        if(date==""){            
            $('#date_error').html('This field required');
            isValid = false;
        } else{
             $('#date_error').html('');
        }        
        if(timing==""){            
            $('#timing_error').html('This field required');
            isValid = false;
        } else{
             $('#timing_error').html('');
        } 
        if(isValid == true)
        {        
            $("#step_id_2").hide();
            $("#right-edit-2").show();
            $("#step_id_3").show();
           /* $("#btn-step-2").hide(); */
           $('html, body').animate({scrollTop: ($("#step_id_3").offset().top - 50) }, 1000);
        }
    });
    $("#btn-step-3").on('click', function(){
		$("#step_id_3").hide();
        $("#right-edit-3").show();
        $("#step_id_4").show();
       /* $("#btn-step-3").hide();*/
        $('html, body').animate({scrollTop: ($("#step_id_4").offset().top - 50) }, 1000);
		
    });

$("#often_week").on('change', function(){
    var often_week          = $('select[name="often_week"] option:selected').val();
    $("#summary_week").html(often_week);
});
$("#hours").on('change', function(){
    var hours          = $('select[name="hours"] option:selected').val();
    $("#summary_hours").html(hours);
});


$("#time").on('change', function(){
    var time          = $('select[name="time"] option:selected').val();
    $("#summary_time").html(time);
});

$(".type_box a.right-edit").on('click', function () {
    var curId = $(this).attr('id').split('right-edit-');
     $(".step_1 .a-item").hide();
     $("#step_id_"+curId[1]).show();    
    $('html, body').animate({scrollTop: ($("#step_id_"+curId[1]).offset().top - 50) }, 1000);
});
</script>
<?php
get_footer(); ?>