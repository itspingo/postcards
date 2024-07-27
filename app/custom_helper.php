<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
//use Mail;
use Illuminate\Support\Facades\Http;
// ---------- user defined functions ------------//
if(!function_exists('pre_insert_functions')){
    function pre_insert_functions( $postedData){

        return true;
    }
}
if(!function_exists('post_insert_functions')){
    function post_insert_functions( $postedData, $recid){
       // email_to_subscriber($postedData, $recid);
       return true;
    }
}
if(!function_exists('pre_update_functions')){
    function pre_update_functions( $postedData){

        return true;
    }
}
if(!function_exists('post_update_functions')){
    function post_update_functions( $postedData){
        email_approved_user($postedData);
        email_approved_vehicle($postedData);
        email_contactus_reply($postedData);
        email_marked_sold($postedData);
    }
}
if(!function_exists('pre_delete_functions')){
    function pre_delete_functions($postedData){
    }
}
if(!function_exists('post_delete_functions')){
    function post_delete_functions($postedData){
    }
}
// ---------- user defined functions ------------ //
function email_approved_user($postedData){   
    $row = $postedData;
    if($row['table_name'] == 'web_users'){
        //pre($row);
        if(isset($row['isapproved'])){
            if($row['isapproved'] == 'Y' && ( $row['hisapproved'] == "" || $row['hisapproved'] == "N") ){
                $usrname = $row['fullname'];
                $usremail = $row['email_address'];
                $subject = "User Account is Approved";
                // $emlbody = "Hi ".$usrname."<br>";
                $emlbody = "Hi,"."<br>". "Your account has been successfully approved and you now have access to CartMyCar.Happy Bidding."."<br>"." Regards,CartMyCar";
                // $emlbody .= "Best Regards"."<br>";
                // $emlbody .= "Web Master"."<br>";
                $params = 'toemail='.$usremail.'&title='.$subject.'&email='.$emlbody;
                $resp = Http::get('https://cartmycar.co.za/home/mail?'.$params);
                //echo $resp;
                //die();
            }
        }
    }
}
function email_approved_vehicle($postedData){ 
    $row = $postedData;   
    if($row['table_name'] == 'car_auctions'){
        if(isset($row['published'])){
            if($row['published'] == 'Y' && ( $row['hpublished'] == "" || $row['hpublished'] == "N") ){
                $usrow = DB::table('web_users')
                    ->selectRaw(' * ')
                    ->where('id', '=', $row['userid'])
                    //->groupBy('status')
                    ->get()->first();
                //pre($usrow);
                $usrname = $usrow->fullname;
                $usremail = $usrow->email_address;
                $subject = "Vehicle is Approved for Auction";
                $emlbody = "Hi ".$usrname."<br>";
                $emlbody .= "Your vehicle has been approved and loaded on the CartMyCar bidding portal and will be live for bidding between 12am and 2pm.<br><br>
                We aim to BEAT most offers. <br><br>
                DON'T let other guys that buy cars pressure you into selling your car until you have seen the price offered by CartMyCar!<br><br>
                A lot of the bidding happens between 1pm and 2pm - so stick around until 2pm to see the final offer!!<br><br>
                Please let us know ASAP if any of the below details are incorrect:<br><br>";
                $emlbody .= "Year: ".$row['vehicle_year']."<br>";
                $emlbody .= "Make: ".$row['vehicle_make_id']."<br>";
                $emlbody .= "Model: ".$row['vehicle_model_id']."<br>";                
                $emlbody .= "Varient: ".$row['vehicle_varient']."<br><br>";
                $emlbody .= " All final bids are subject to inspection. Here are some factors which may affect the value of your vehicle:<br><br>
                                <table border='1'>
                                <tr>
                                <td>Item</td><td>Regular Car</td><td>Luxury Car</td>
                                </tr>
                                <tr>
                                <td> Spare Key  </td><td> ± R1500 </td><td> +-R5000 </td> 
                                </tr>
                                <tr>
                                <td> Brakes </td><td> ± R4000 </td><td> +-R8000 </td> 
                                </tr>
                                <tr>
                                <td> Dents/Scratches (per panel) </td><td>± R1000</td><td>+-R3500 </td>
                                </tr>
                                <tr>
                                <td> Tyres (each)</td><td>± R1000</td><td>+-R5000</td>
                                </tr>
                                <tr>
                                <td> Excessive mileage </td><td colspan='2'> ±50% decrease in value </td>
                                </tr>
                                <tr>
                                <td> Lack of Service History </td><td colspan='2'> ±50% decrease in value</td>
                                </tr>
                                <tr>
                                <td> Accident Damage </td><td colspan='2'> ±50% decrease in value</td>
                                </tr>
                                <tr>
                                <td> Mechanical/Engine problems </td><td colspan='2'> ±50% decrease in value</td>
                                </tr>
                                </table>
                                <br>
                                <br>
                                Please let us know immediately if you receive an offer from another company that buys cars - we will do our best to try beat it for you! 
                                <br><br>
                                Kindly note that bidding closes at 2pm unless there are still bids being placed after 2pm. Please login to see the action
                                <br><br>
                                <b>
                                To get your Vehicle Featured at the top for an addition cost of R500 please reply 'YES' to this Email. 
                                </b>
                                <br><br>
                                Should you require any further assistance, or have any questions or queries, please contact us directly on 0861CartMyCar or info@CartMyCar.co.za and we will endeavour to assist you further.
                                <br>
                               ";
                $params = 'toemail='.$usremail.'&title='.$subject.'&email='.$emlbody;
                $resp = Http::get('https://cartmycar.co.za/home/mail?'.$params);
                //echo $resp;
            }   
        }    
    }   
}
function email_contactus_reply($postedData){
    $row = $postedData;   
    if($row['table_name'] == 'contactus'){
            if($row['reply_message'] != '' && ( $row['hreply_message'] == "" ) ){
               // pre($usrow);
                $usrname = $row['full_name'];
                $usremail = $row['email_address'];
                $subject = "Reply from cartmycar";
                $emlbody = "Hi ".$usrname."<br>";
                $emlbody .= $row['reply_message'];
                $params = 'toemail='.$usremail.'&title='.$subject.'&email='.$emlbody;
                $resp = Http::get('https://cartmycar.co.za/home/mail?'.$params);
                //echo $resp;
            }            
    } 
}

function email_to_subscriber($postedData, $recid){
    $row = $postedData;   
    //dd($row);
    if($row['table_name'] == 'blogs'){
        $subs_emails = DB::table('email_subscriptions')
                            ->selectRaw(' * ')
                            ->where('active', '=', '1')
                            //->groupBy('status')
                            ->get();
        //dd($subs_emails);
        for($i=0; $i<count($subs_emails); $i++){
            $usremail = $subs_emails[$i]->email_id;
            $subject = $row['blog_title'];
            $emlbody =  substr($row['blog_contents'],0,350).'...<br>';
            $emlbody .=  '<a href="http://cartmycar.co.za/home/blog_details?id='.$recid.'" target="_BLANK" >Read More</a><br>';

            $params = 'toemail='.$usremail.'&title='.$subject.'&email='.$emlbody;
            $resp = Http::get('https://cartmycar.co.za/home/mail?'.$params);

        }
    }
}

function email_marked_sold($postedData){

$row = $postedData;   
    if($row['table_name'] == 'car_auctions'){
        if(isset($row['mark_sold'])){
            if($row['mark_sold'] == 'Y' && ( $row['mark_sold'] == "" || $row['mark_sold'] == "N") ){
                $usrow = DB::table('web_users')
                    ->selectRaw(' * ')
                    ->where('id', '=', $row['userid'])
                    //->groupBy('status')
                    ->get()->first();
                //pre($usrow);
                $usrname = $usrow->fullname;
                $usremail = $usrow->email_address;
                $subject = "Vehicle is Sold";
                $emlbody = "Hi ".$usrname."<br>";
                $emlbody .= " The auction has been successfully concluded and you've received some amazing offers. This was the highest bid [insert highest bid here]. 
                              Please ensure that this offer is for the : ";
                $emlbody .= "Year: ".$row['vehicle_year']."<br>";
                $emlbody .= "Make: ".$row['vehicle_make_id']."<br>";
                $emlbody .= "Model: ".$row['vehicle_model_id']."<br>";                
                $emlbody .= "Varient: ".$row['vehicle_varient']."<br><br>";

                $emlbody .= "If you would like to accept this offer please reply to this email with 'yes' . We will then exchange both your and the winning dealers information.
                             If you would like to decline reply to this email with 'no ' and your reason. One of our sales specialists will contact you:<br><br>";
               
                $emlbody .= " All final bids are subject to inspection. Here are some factors which may affect the value of your vehicle:<br><br>
                                <table border='1'>
                                <tr>
                                <td>Item</td><td>Regular Car</td><td>Luxury Car</td>
                                </tr>
                                <tr>
                                <td> Spare Key  </td><td> ± R1500 </td><td> +-R5000 </td> 
                                </tr>
                                <tr>
                                <td> Brakes </td><td> ± R4000 </td><td> +-R8000 </td> 
                                </tr>
                                <tr>
                                <td> Dents/Scratches (per panel) </td><td>± R1000</td><td>+-R3500 </td>
                                </tr>
                                <tr>
                                <td> Tyres (each)</td><td>± R1000</td><td>+-R5000</td>
                                </tr>
                                <tr>
                                <td> Excessive mileage </td><td colspan='2'> ±50% decrease in value </td>
                                </tr>
                                <tr>
                                <td> Lack of Service History </td><td colspan='2'> ±50% decrease in value</td>
                                </tr>
                                <tr>
                                <td> Accident Damage </td><td colspan='2'> ±50% decrease in value</td>
                                </tr>
                                <tr>
                                <td> Mechanical/Engine problems </td><td colspan='2'> ±50% decrease in value</td>
                                </tr>
                                </table>
                                <br>
                                <br>
                                Please let us know immediately if you receive an offer from another company that buys cars - we will do our best to try beat it for you! 
                                <br><br>
                                Kindly note that bidding closes at 2pm unless there are still bids being placed after 2pm. Please login to see the action
                                <br><br>
                                Should you require any further assistance, or have any questions or queries, please contact us directly on 0861CartMyCar or info@CartMyCar.co.za and we will endeavour to assist you further.
                                <br><br>
                                Team CartMyCar";

                $params = 'toemail='.$usremail.'&title='.$subject.'&email='.$emlbody;
                $resp = Http::get('https://cartmycar.co.za/home/mail?'.$params);
                //echo $resp;
            }   
        } 
    }

}
