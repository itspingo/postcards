<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Lang;


if (!function_exists('get_field_view')) {
    function get_field_view($vfield_name, $vfield_data)
    {
        return view('designer/components/' . $vfield_name, $vfield_data);
    }
}

if (!function_exists('pre')) {
    function pre($arinput)
    {
        echo '<pre>';
        print_r($arinput);
        echo '</pre>';
    }
}

if (!function_exists('randomWord')) {
    function randomWord($length = 7)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomWord = '';
        $max = strlen($characters) - 1;

        for ($i = 0; $i < $length; $i++) {
            $randomWord .= $characters[mt_rand(0, $max)];
        }

        return $randomWord;
    }
}

if (!function_exists('id2str')) {
    function id2str($idval)
    {
        $characters = 'hdjfkplmaw';
        $randomstr = '';
        $idstr = strval($idval);

        for ($i = 0; $i < strlen($idstr); $i++) {
            $index = intval($idstr[$i]);
            $randomstr .= $characters[$index];
        }

        $randomstr = randomWord(3) . $randomstr . randomWord(3);
        return $randomstr;
    }
}

if (!function_exists('str2id')) {
    function str2id($strval)
    {
        $characters = 'hdjfkplmaw';
        $idval = '';
        $strval = substr($strval, 3, -3);


        for ($i = 0; $i < strlen($strval); $i++) {
            $index = strpos($characters, $strval[$i]);
            $idval .= $index;
        }

        return $idval;
    }
}


// ------------------------------------------------------------------------ 

if (!function_exists('show_theme_menu')) {
    function show_theme_menu($prntid = NULL)
    {

        $theme_menu = '';
        $themeMenulist = DB::table('list_categories')
            ->where('active', '1')
            ->where('parent_category', $prntid)
            ->get();

        if (null != session('sess_settings') && session()->get('sess_settings')->hide_empty_categories == 'Y') {
            /* foreach ($themeMenulist as $thmnue) {
                if (countItemsInCategory($thmnue->id) > 0) {
                    $them_mnu_chldrn = has_theme_menu_child($thmnue->id);
                    if ($them_mnu_chldrn != false) {
                        $theme_menu .= '<li> <a href="' . url('category/' . $thmnue->id) . '">' . $thmnue->category_title ; 
                        // if(null != session('sess_settings') && session()->get('sess_settings')->category_counters == 'Y'){
                        //     $theme_menu .= '('.countItemsInCategory($thmnue->id).')';
                        // }
                        $theme_menu .= '</a><ul>';

                        $theme_menu .= show_theme_menu($thmnue->id);

                        $theme_menu .= '</ul>';
                    } else {

                        $theme_menu .= '<li> <a href="' . url('category/' . $thmnue->id) . '">' . $thmnue->category_title;
                        // if(null != session('sess_settings') && session()->get('sess_settings')->category_counters == 'Y'){
                        //     $theme_menu .= '('.countItemsInCategory($thmnue->id).')';
                        // }
                        $theme_menu .= '</a><li>';
                    }
                    $theme_menu .= '</li>';
                }
            } */
        } else {
            foreach ($themeMenulist as $thmnue) {

                $them_mnu_chldrn = has_theme_menu_child($thmnue->id);
                if ($them_mnu_chldrn != false) {
                    $theme_menu .= '<li> <a href="' . url('category/' . $thmnue->id) . '">' . $thmnue->category_title;
                    // if(null != session('sess_settings') && session()->get('sess_settings')->category_counters == 'Y'){
                    //     $theme_menu .= '('.countItemsInCategory($thmnue->id).')';
                    // }
                    $theme_menu .= '</a><ul>';

                    $theme_menu .= show_theme_menu($thmnue->id);

                    $theme_menu .= '</ul>';
                } else {

                    $theme_menu .= '<li> <a href="' . url('category/' . $thmnue->id) . '">' . $thmnue->category_title;
                    // if(null != session('sess_settings') && session()->get('sess_settings')->category_counters == 'Y'){
                    //     $theme_menu .= '('.countItemsInCategory($thmnue->id).')';
                    // }
                    $theme_menu .= '</a><li>';
                }
                $theme_menu .= '</li>';

            }
        }

        return $theme_menu;
    }
}

// ------------------------------------------------------------------------ 

/*
if (!function_exists('countItemsInCategory')) {
    function countItemsInCategory($categoryId) {
        // Initialize count for the current category
        $totalCount = 0;
    
        // Get the count of items directly in this category
        $itemCountResult = DB::table('shop_items')
            ->where('main_category_id', $categoryId)
            ->count();
        $totalCount += $itemCountResult;
    
        // Get the subcategories of the current category
        $subCategoriesResult = DB::table('list_categories')
            ->where('parent_category', $categoryId)
            ->select('id')
            ->get();
    
        // Recursively count items in each subcategory
        foreach ($subCategoriesResult as $subCategory) {
            $subCategoryId = $subCategory->id;
            $totalCount += countItemsInCategory($subCategoryId);
        }
    
        return $totalCount;
    }
}
*/

// ------------------------------------------------------------------------ 

if (!function_exists('has_theme_menu_child')) {
    function has_theme_menu_child($theme_menu_id)
    {

        $themnuchlrdn = DB::table('list_categories')
            ->where('active', '1')
            ->where('parent_category', $theme_menu_id)
            ->get();

        if (count($themnuchlrdn) > 0) {
            return $themnuchlrdn;
        } else {
            return false;
        }
    }
}

// ------------------------------------------------------------------------ 


if (!function_exists('get_cart_items')) {
    function get_cart_items($userid)
    {

        $cartItems = DB::table('order_items')
            ->where('active', '1')
            ->where('web_user_id', $userid)
            ->whereNull('order_id')
            ->get();

        if (count($cartItems) > 0) {
            return $cartItems;
        } else {
            return false;
        }
    }
}




// ------------------------------------------------------------------------ 

if (!function_exists('display_menu')) {
    function display_menu()
    {
        $str_menu = '';

        $str_menu = '';
        // $blkmdlIds = get_blocked_modules();
        // DB::enableQueryLog();
        $mainMenulist = DB::table('dznr_modules')
            ->selectRaw(' * ')
            ->where('active', '=', '1')
            ->where('is_hidden', '=', 'N')
            // ->where('table_name', '!=', '')
            ->where('parent_module', '=', '0')
            ->get();
        //  dd(DB::getQueryLog());



        foreach ($mainMenulist as $vmainmenu) {

            if (hasChildren($vmainmenu->id)) {
                $str_menu .= '<li>
                                        <a href="javascript: void(0);" class="has-arrow">
                                            <i class="fas fa-indent"></i>
                                            ' . $vmainmenu->module_name . ' 
                                        </a>
                                        <ul class="sub-menu" aria-expanded="true">';

                $str_menu .= sub_menus($vmainmenu->id);

                $str_menu .= '</ul></li>';
            } else {

                if ($vmainmenu->controller_file != '') {
                    $str_menu .= '<li>
                                            <a href="' . route($vmainmenu->controller_file) . '" class="waves-effect">
                                                <i class="' . str_replace('_', ' ', $vmainmenu->module_icon) . '"></i>
                                                <span>' . $vmainmenu->module_name . '</span>
                                            </a>
                                        </li>';
                } else {
                    $str_menu .= '<li>
                                            <a href="#" class="waves-effect">
                                                <i class="' . str_replace('_', ' ', $vmainmenu->module_icon) . '"></i>
                                                <span>' . $vmainmenu->module_name . '</span>
                                            </a>
                                        </li>';
                }
            }
        }

        // $str_menu .= noapp_menus();
        return $str_menu;
    }
}

// ------------------------------------------------------------------------ 

function item_score_ratings($itemId, $rating_type = 'star')
{
    //rating_type: star, both
    if (null != session('sess_settings') && session()->get('sess_settings')->enable_reputation == 'Y') {
        $itmrevs = DB::table('item_reviews')
            ->where('active', '=', '1')
            ->where('item_id', $itemId)
            ->get();
        $nrevs = count($itmrevs) ?? 0;
        if ($nrevs > 0) {
            $score = 0;
            foreach ($itmrevs as $itmrev) {
                $score += $itmrev->score_rating;
            }
            $avgscor = ceil($score / $nrevs);

            if ($avgscor == 0) {

                $retval = '<div class="rating">
                                <i class="fa fa-star" style="color:lightgray;"></i> 
                                <i class="fa fa-star" style="color:lightgray;"></i>
                                <i class="fa fa-star" style="color:lightgray;"></i> 
                                <i class="fa fa-star" style="color:lightgray;"></i> 
                                <i class="fa fa-star" style="color:lightgray;"></i>
                            </div>';
            } else if ($avgscor == 1) {

                $retval = '<div class="rating">
                                <i class="fa fa-star" ></i> 
                                <i class="fa fa-star" style="color:lightgray;"></i>
                                <i class="fa fa-star" style="color:lightgray;"></i> 
                                <i class="fa fa-star" style="color:lightgray;"></i> 
                                <i class="fa fa-star" style="color:lightgray;"></i>
                            </div>';
            } else if ($avgscor == 2) {

                $retval = '<div class="rating">
                                <i class="fa fa-star" ></i> 
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" style="color:lightgray;"></i> 
                                <i class="fa fa-star" style="color:lightgray;"></i> 
                                <i class="fa fa-star" style="color:lightgray;"></i>
                            </div>';
            } else if ($avgscor == 3) {

                $retval = '<div class="rating">
                                <i class="fa fa-star" ></i> 
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i> 
                                <i class="fa fa-star" style="color:lightgray;"></i> 
                                <i class="fa fa-star" style="color:lightgray;"></i>
                            </div>';
            } else if ($avgscor == 4) {

                $retval = '<div class="rating">
                                <i class="fa fa-star" ></i> 
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i> 
                                <i class="fa fa-star" ></i> 
                                <i class="fa fa-star" style="color:lightgray;"></i>
                            </div>';
            } else if ($avgscor == 5) {

                $retval = '<div class="rating">
                                <i class="fa fa-star" ></i> 
                                <i class="fa fa-star" ></i>
                                <i class="fa fa-star" ></i> 
                                <i class="fa fa-star" ></i> 
                                <i class="fa fa-star" ></i>
                            </div>';
            }

            if ($rating_type == 'both') {
                return $retval . ' <h6>' . $nrevs . ' Reviews </h6>';
            } else {
                return $retval;
            }
        } else {
            return
                '<div class="rating">
                <i class="fa fa-star" style="color:lightgray;"></i> 
                <i class="fa fa-star" style="color:lightgray;"></i>
                <i class="fa fa-star" style="color:lightgray;"></i> 
                <i class="fa fa-star" style="color:lightgray;"></i> 
                <i class="fa fa-star" style="color:lightgray;"></i>
            </div>';
        }
    } else {
        return '';
    }

}


// ------------------------------------------------------------------------ 

if (!function_exists('score_to_stars')) {
    function score_to_stars($score)
    {

        if (null != session('sess_settings') && session()->get('sess_settings')->enable_reputation == 'Y') {
            if ($score == 0) {

                $retval = '<div class="rating">
                            <i class="fa fa-star" style="color:lightgray;"></i> 
                            <i class="fa fa-star" style="color:lightgray;"></i>
                            <i class="fa fa-star" style="color:lightgray;"></i> 
                            <i class="fa fa-star" style="color:lightgray;"></i> 
                            <i class="fa fa-star" style="color:lightgray;"></i>
                        </div>';
            } else if ($score == 1) {

                $retval = '<div class="rating">
                            <i class="fa fa-star" ></i> 
                            <i class="fa fa-star" style="color:lightgray;"></i>
                            <i class="fa fa-star" style="color:lightgray;"></i> 
                            <i class="fa fa-star" style="color:lightgray;"></i> 
                            <i class="fa fa-star" style="color:lightgray;"></i>
                        </div>';
            } else if ($score == 2) {

                $retval = '<div class="rating">
                            <i class="fa fa-star" ></i> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" style="color:lightgray;"></i> 
                            <i class="fa fa-star" style="color:lightgray;"></i> 
                            <i class="fa fa-star" style="color:lightgray;"></i>
                        </div>';
            } else if ($score == 3) {

                $retval = '<div class="rating">
                            <i class="fa fa-star" ></i> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i> 
                            <i class="fa fa-star" style="color:lightgray;"></i> 
                            <i class="fa fa-star" style="color:lightgray;"></i>
                        </div>';
            } else if ($score == 4) {

                $retval = '<div class="rating">
                            <i class="fa fa-star" ></i> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i> 
                            <i class="fa fa-star" ></i> 
                            <i class="fa fa-star" style="color:lightgray;"></i>
                        </div>';
            } else if ($score == 5) {

                $retval = '<div class="rating">
                            <i class="fa fa-star" ></i> 
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i> 
                            <i class="fa fa-star" ></i> 
                            <i class="fa fa-star" ></i>
                        </div>';
            }

            return $retval;
        } else {
            return '';
        }
    }
}

// ------------------------------------------------------------------------ 

if (!function_exists('sub_menus')) {
    function sub_menus($parentid)
    {
        $str_sub_menu = '';

        if (auth()->user()->user_type == 'admin') {
            $mdslist = DB::table('dznr_modules')
                ->selectRaw(' * ')
                ->where('active', '=', '1')
                // ->where('application_id', '=', $applic->id)
                ->where('is_hidden', '=', 'N')
                // ->where('module_type', 'main_module')
                ->get();
        } else {

            // $blkmdlIds = get_blocked_modules();

            // DB::enableQueryLog();
            $mdslist = DB::table('dznr_modules')
                ->selectRaw(' * ')
                ->where('active', '=', '1')
                // ->where('application_id', '=', $applic->id)
                // ->where(function($query) {
                //         $query->where('client_id', auth()->user()->client_id)
                //             ->orWhere('client_id', '0');
                //     })
                ->where('is_hidden', '=', 'N')
                // ->wherenotin('id', $blkmdlIds)
                //->where('table_name', '!=', '')
                // ->where('module_type', 'main_module')
                // ->orwhere('client_id','0')
                // ->orwhereNotNull('table_name')

                ->where('parent_module', '=', $parentid)
                //->orderBy('menu_seq')
                ->get();
            // dd(DB::getQueryLog());
        }
        foreach ($mdslist as $smenu) {
            //  $module_user_permissions = getUserPermissions(auth()->user()->client_id, auth()->user()->id,  $smenu->id, 'any');

            //  if($module_user_permissions == 'Y'){
            if ($smenu->controller_file != '') {
                // if($smenu->table_name == 'users'){
                $str_sub_menu .= '<li>
                                                <a href="' . $smenu->controller_file . '" class="waves-effect">
                                                    <i class="' . str_replace('_', ' ', $smenu->module_icon) . '"></i>
                                                    <span>' . $smenu->module_name . '</span>
                                                </a>';
                $str_sub_menu .= '</li>';
                // }else{
                //     $str_sub_menu .=    '<li>
                //                             <a href="/'.$applic->abbrv.'/'.$smenu->controller_file.'" class="waves-effect">
                //                                 <i class="'.str_replace('_',' ',$smenu->module_icon).'"></i>
                //                                 <span>'.$smenu->module_name.'</span>
                //                             </a>';
                //     $str_sub_menu .=    '</li>';
                // }
            } elseif (isset($_GET['mid']) and $_GET['mid'] == $smenu->id) {
                $str_sub_menu .= '<li>
                                            <a href="' . 'module?mid=' . $smenu->id . '" class="waves-effect">
                                                <i class="' . str_replace('_', ' ', $smenu->module_icon) . '"></i>
                                                <span>' . $smenu->module_name . '</span>
                                            </a>
                                        </li>';
            } else {
                $str_sub_menu .= '<li>
                                            <a href="' . 'module?mid=' . $smenu->id . '" class="waves-effect">
                                                <i class="' . str_replace('_', ' ', $smenu->module_icon) . '"></i>
                                                <span>' . $smenu->module_name . '</span>
                                            </a>
                                        </li>';
            }
            // }

        }

        return $str_sub_menu;
    }
}

// ------------------------------------------------------------------------
/*
if(!function_exists('lookup_menu')){
    function lookup_menu(){
        $lookup_menu = '';
        // $blkmdlIds = get_blocked_modules();
        // DB::enableQueryLog();
        $lookupslist = DB::table('dznr_modules')
                        ->selectRaw(' * ')
                        ->where('active', '=', '1')
                        // ->where('application_id', '=', $applic->id)

                        //  ->where(function($query) {
                        //     $query->where('client_id', auth()->user()->client_id)
                        //         ->orWhere('client_id', '0');
                        // }) 
                        ->where('is_hidden', '=', 'N')
                        // ->where('table_name', '!=', '')
                        // ->where('module_type','=','lookup')
                        // ->wherenotin('id', $blkmdlIds)
                        //->where('client_id', '=', auth()->user()->client_id)
                        ->orderBy('module_name')
                        ->get();
        //  dd(DB::getQueryLog());
       
        if(NULL !== $lookupslist && count($lookupslist)>0){
            $lookup_menu .=    '<li><a href="javascript: void(0);" class="has-arrow">
                                            <i class="fas fa-indent"></i>
                                            Lookups 
                                        </a>
                                        <ul class="sub-menu" aria-expanded="true">';
            foreach($lookupslist as $lkupmenu){

                //  $module_user_permissions = getUserPermissions(auth()->user()->client_id, auth()->user()->id,  $lkupmenu->id, 'any');
                //  if($module_user_permissions == 'Y'){
                        $lookup_menu .=    '<li>
                                                    <a href="'.'/'.$lkupmenu->controller_file.'" class="waves-effect">
                                                        <i class="'.str_replace('_',' ',$lkupmenu->module_icon).'"></i>
                                                        <span>'.$lkupmenu->module_name.'</span>
                                                    </a>
                                                </li>';
                // }
            }
            $lookup_menu .=    '</ul></li>';
        }
       
        return  $lookup_menu;
    }
}
*/
// ------------------------------------------------------------------------ 

if (!function_exists('hasChildren')) {
    function hasChildren($parentId)
    {
        $childrecs = DB::table('dznr_modules')
            ->selectRaw(' * ')
            ->where('active', '=', '1')
            ->where('is_hidden', '=', 'N')
            ->where('parent_module', '=', $parentId)
            ->get();
        if (count($childrecs) > 0) {
            return true;
        } else {
            return false;
        }
    }
}
/*

if(!function_exists('display_menu')){ 
    function display_menu(){
        $str_menu = '';
        // DB::enableQueryLog();
        $mdlist = DB::table('dznr_modules')
                    ->selectRaw(' * ')
                    ->where('active', '=', '1')
                    ->where('parent_module','0')
                    // ->where('table_name','=','')
                    // ->orWhereNull('table_name')
                    //->orderBy('menu_seq')
                    ->get();
        // dd(DB::getQueryLog());
        foreach($mdlist as $menu){
            $str_menu .= '<li class="menu-title">'.$menu->module_name.'</li>';
            $str_menu .= sub_menus($menu->module_name);
        }
        return  $str_menu;
    }
}


if(!function_exists('sub_menus')){
    function sub_menus($parntModl){
        $str_sub_menu = '';
        // DB::enableQueryLog();
        $mdslist = DB::table('dznr_modules')
                    ->selectRaw(' * ')
                    ->where('active', '=', '1')
                    ->where('parent_module', '=', $parntModl)
                    ->where('is_hidden', '=', 'N')
                    ->where('table_name', '!=', '')
                   // ->orwhereNotNull('table_name')
                    
                    // ->where('parent_module', '=', '0')
                    //->orderBy('menu_seq')
                    ->get();
        // pre($mdslist);
        // dd(DB::getQueryLog());
        foreach($mdslist as $smenu){
            // echo ' <span>'.$smenu->module_name.'</span>';

            if($smenu->controller_file != ''){

                $str_sub_menu .=    '<li>
                                            <a href="'.$smenu->controller_file.'" class="waves-effect">
                                                <i class="'.$smenu->module_icon.'"></i>
                                                <span>'.$smenu->module_name.'</span>
                                            </a>
                                        </li>';

            }else{
                if(isset($_GET['mid']) and $_GET['mid'] == $smenu->id){
                    $str_sub_menu .=    '<li class="mm-active">
                                            <a href="module?mid='.$smenu->id.'" class="waves-effect">
                                                <i class="'.$smenu->module_icon.'"></i>
                                                <span>'.$smenu->module_name.'</span>
                                            </a>
                                        </li>';
                }else{
                    $str_sub_menu .=    '<li>
                                            <a href="module?mid='.$smenu->id.'" class="waves-effect">
                                                <i class="'.$smenu->module_icon.'"></i>
                                                <span>'.$smenu->module_name.'</span>
                                            </a>
                                        </li>';
                }
            }
        }
        return  $str_sub_menu; 
    }
}
*/

if (!function_exists('get_list_values')) {
    function get_list_values($vtable_name, $vfield_name)
    {
        //echo 'vtable_name: '.$vtable_name.' , vfield_name: '.$vfield_name;
        $vlstvals = array();
        //DB::enableQueryLog();
        $tblist = DB::table($vtable_name)
            ->selectRaw('id,' . $vfield_name)
            ->where('active', '=', '1')
            //->orderBy('menu_seq')
            ->get();
        //dd(DB::getQueryLog());
        foreach ($tblist as $optn) {
            $vlstvals[$optn->id] = $optn->$vfield_name;
        }
        return $vlstvals;
    }
}

if (!function_exists('getfieldval')) {
    function getfieldval($recid, $vtable_name, $vfield_name)
    {
        $retrnval = '';
        if ($recid != '') {
            //dd('recid: '.$recid.' , vtable_name: '.$vtable_name.' , vfield_name: '.$vfield_name);
            //DB::enableQueryLog();
            $tblist = DB::table($vtable_name)
                ->selectRaw($vfield_name)
                ->where('id', '=', $recid)
                //->orderBy('menu_seq')
                ->first();
            //dd($tblist);
            //dd(DB::getQueryLog());

            if (null !== $tblist) {
                $retrnval = $tblist->$vfield_name;
            } else {
                $retrnval = '';
            }
        } else {
            $retrnval = '';
        }
        return ($retrnval);
    }
}


if (!function_exists('sendEmail')) {

    function sendEmail($emailEvent, $emailData)
    {

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: Web Master <nadeem@snoobix.com>' . "\r\n";


        if ($emailEvent == 'user_registration') {
            $subject = 'User Registration';
            $user_name = $emailData['user_name'];
            $user_email = $emailData['user_email'];
            $validation_code = $emailData['validation_code'];
            $validation_link = url('/login/validate/' . $validation_code);

            $message = '<p>Dear ' . $user_name . ',</p>
            
            <p>You have been successfully registered with us.</p>
            
            <p>Please follow the link to validate your account:</p>
            <a href="' . $validation_link . '">Please Validate</a>
            
            <p>Best regards,</p>
            <p>Web Master</p>';
        } elseif ($emailEvent == 'forgot_password') {
            $subject = 'forgot password';
            $user_name = $emailData['user_name'];
            $user_email = $emailData['user_email'];
            $new_password = $emailData['new_password'];

            $message = '<p>Dear ' . $user_name . ',</p>
                <p>Your password has been changed on request.</br>
                Please note down your new password :' . $new_password . '</p>
                
                <p>Best regards,</br>
                Web Master</p>';
        } elseif ($emailEvent == 'contactus') {
            $subject = 'Contact US';
            $user_name = session()->get('sess_settings')->admin_email_name;
            $user_email = session()->get('sess_settings')->mail_address;


            $message = '<p>Dear ' . $user_name . ',</p>
                <p>A contact us form is submitted with following details.</br><br>
                First Name :' . $emailData['first_name'] . '<br>
                Last Name:' . $emailData['last_name'] . '<br>
                Phone No :' . $emailData['contact_no'] . '<br>
                Email :' . $emailData['email_address'] . '<br>
                Message :' . $emailData['message'] . '<br>               
                
                </p>
                
                <p>Best regards,</br>
                Web Master</p>';
        } elseif ($emailEvent == 'newsletter_subscr') {
            $subject = 'Newsletter Subscription';
            $user_email = $emailData['user_email'];

            $message = '<p>Hi there,</p>
                <p>A contact us form is submitted with following details.</br><br>' .
                $emailData['email_message'] . '<br>' .
                $emailData['confirm_link'] .
                '</p>
                
                <p>Best regards,</br>
                Web Master</p>';
        }


        if (null != session('sess_settings') && session()->get('sess_settings')->choose_mailer == 'SMTP') {
            $mail = new PHPMailer(true);     // Passing `true` enables exceptions

            try {

                // Email server settings
                $mail->SMTPDebug = 0;
                $mail->isSMTP();
                $mail->Host = session()->get('sess_settings')->smtp_host;             //  smtp host
                $mail->SMTPAuth = true;
                $mail->Username = session()->get('sess_settings')->smtp_user_name;   //  sender username
                $mail->Password = session()->get('sess_settings')->smtp_password;       // sender password
                $mail->SMTPSecure = session()->get('sess_settings')->smtp_protocol;                  // encryption - ssl/tls
                $mail->Port = session()->get('sess_settings')->smtp_port;                          // port - 587/465

                $mail->setFrom(session()->get('sess_settings')->mail_address, session()->get('sess_settings')->admin_email_name);
                $mail->addAddress($emailData['user_email']);
                // $mail->addCC($request->emailCc);

                if (session()->get('sess_settings')->enable_bcc_email_to_admin == 'Y') {
                    $mail->addBCC(session()->get('sess_settings')->mail_address);
                }

                //$mail->addReplyTo('sender@example.com', 'SenderReplyName');

                // if(isset($_FILES['emailAttachments'])) {
                //     for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
                //         $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
                //     }
                // }

                $mail->isHTML(true);                // Set email content format to HTML

                $mail->Subject = $subject;
                $mail->Body = $message;

                // $mail->AltBody = plain text version of email body;

                if (!$mail->send()) {
                    return "Email not sent." . $mail->ErrorInfo;
                } else {
                    return true;
                }

            } catch (Exception $e) {
                return 'Message could not be sent.';
            }

        } else {
            if (mail($user_email, $subject, $message, $headers)) {
                return true;
            } else {
                return 'failure';
            }
        }
    }
}



function get_updated_currency_rates()
{

    $today_date = date('Y-m-d');
    $tblist = DB::table('currency_conversions')
        ->where('conversion_date', $today_date)
        ->first();
    if ($tblist) {
        return (array) $tblist;
    } else {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/latest?symbols=AFN%2CARS%2CAWG%2CAUD%2CAZN%2CBSD%2CBBD%2CBYR%2CEUR%2CBZD%2CBMD%2CBOB%2CBAM%2CBWP%2CBGN%2CBRL%2CGBP%2CBND%2CKHR%2CCAD%2CKYD%2CCLP%2CCNY%2CCOP%2CCRC%2CHRK%2CCUP%2CCZK%2CDKK%2CDOP%2CXCD%2CEGP%2CSVC%2CFKP%2CFJD%2CGHC%2CGIP%2CGTQ%2CGGP%2CGYD%2CHNL%2CHKD%2CHUF%2CISK%2CINR%2CIDR%2CIRR%2CIMP%2CILS%2CJMD%2CJPY%2CJEP%2CKZT%2CKPW%2CKRW%2CKGS%2CLAK%2CLVL%2CLBP%2CLRD%2CCHF%2CLTL%2CMKD%2CMYR%2CMUR%2CMXN%2CMNT%2CMZN%2CNAD%2CNPR%2CANG%2CNZD%2CNIO%2CNGN%2CNOK%2COMR%2CPKR%2CPAB%2CPYG%2CPEN%2CPHP%2CPLN%2CQAR%2CRON%2CRUB%2CSHP%2CSAR%2CRSD%2CSCR%2CSGD%2CSBD%2CSOS%2CZAR%2CLKR%2CSEK%2CSRD%2CSYP%2CTWD%2CTHB%2CTTD%2CTRY%2CTRL%2CTVD%2CUAH%2CUYU%2CUZS%2CVEF%2CVND%2CYER%2CZWD&base=USD",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: text/plain",
                "apikey: 4GoxRl4tb5Ak8tG5il8PazhazFJRB3KM"
            ),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET"
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $arResponse = json_decode($response);
        // dd($arResponse->rates);
        if ($arResponse->success) {
            $new_convs = (array) $arResponse->rates;
            $new_convs['conversion_date'] = date('Y-m-d');
            $new_convs['USD'] = 1.00;
            $new_rec_id = DB::table('currency_conversions')->insertGetId($new_convs);
            return $new_convs;
        } else {
            return 'error';
        }
    }
}


if (!function_exists('currency_convert')) {
    function currency_convert($amount, $sess_currency, $base_currency)
    {
        //echo 'amount: '. $amount.' , sess_currency: '. $sess_currency.' , base_currency: '. $base_currency;
        if ($sess_currency == $base_currency) {
            return $amount;
        } else {
            $curRates = get_updated_currency_rates();
            // dd($curRates);
            if ($curRates != 'error') {
                $base_cur_rate = $curRates[$base_currency];
                $sess_cur_rate = $curRates[$sess_currency];

                $curnt_curr_amount = ($amount / $base_cur_rate) * $sess_cur_rate;
                return $curnt_curr_amount;
            } else {
                return 'error';
            }
        }
    }
}



function set_country_info()
{ {
        if (NULL == session('sess_country_info')) {
            // Get the client IP address from the request header
            $clientIP = getenv("REMOTE_ADDR");

            // Retrieve country information based on IP address
            $response = Http::get("https://api.ipbase.com/v1/json/$clientIP");
            $arresponse = json_decode($response);
            $countryName = $arresponse->country_name;

            $country_rec = DB::table('countries')
                ->where('country_name', $countryName)
                ->where('active', '1')
                ->first();
            if ($country_rec) {
                $arresponse->currency_code = $country_rec->currency_code;
                $arresponse->language = $country_rec->language;
                $arresponse->lang_direction = $country_rec->lang_direction;
            } else {
                $arresponse->currency_code = session()->get('sess_settings')->default_currency ?? 'USD';
                $arresponse->language = session()->get('sess_settings')->default_language ?? 'English';
                $arresponse->lang_direction = 'LTR';
            }

            // dd($arresponse);



            if ($response->successful()) {
                // If the request is successful, store the country information in the session
                session()->put('sess_country_info', $arresponse);
                session()->put('sess_cur_currency_code', $arresponse->currency_code);
            } else {


                // session()->put('sess_country_info', $arresponse);

                // If the request fails, log the error or handle it accordingly
                \Log::error("Failed to retrieve country information for IP: $clientIP");
            }
        }
    }
}


function send_event_email($event, $data = [])
{
    // dd($event); 
    $emailData = [];
    if ($event == 'Admin/contact') {
        $email_template_wdata = sendEmailTemplated($event, $data);
        if ($email_template_wdata) {
            $emailData['email_address'] = session()->get('sess_settings')->admin_email;
            $emailData['email_body'] = $email_template_wdata['email_template'];
            $emailData['email_subj'] = 'contact form submitted';
        }
    } else if ($event == 'Admin/listing-approval') {
        $email_template_wdata = sendEmailTemplated($event, $data);
        if ($email_template_wdata) {
            $emailData['email_address'] = session()->get('sess_settings')->admin_email;
            $emailData['email_body'] = $email_template_wdata['email_template'];
            $emailData['email_subj'] = 'contact form submitted';
        }
    }

    //$email_template = sendEmailTemplated($event, $data);



    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Web Master <nadeem@snoobix.com>' . "\r\n";

    if (null != session('sess_settings') && session()->get('sess_settings')->choose_mailer == 'SMTP') {
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = session()->get('sess_settings')->smtp_host;             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = session()->get('sess_settings')->smtp_user_name;   //  sender username
            $mail->Password = session()->get('sess_settings')->smtp_password;       // sender password
            $mail->SMTPSecure = session()->get('sess_settings')->smtp_protocol;                  // encryption - ssl/tls
            $mail->Port = session()->get('sess_settings')->smtp_port;                          // port - 587/465

            $mail->setFrom(session()->get('sess_settings')->mail_address, session()->get('sess_settings')->admin_email_name);
            $mail->addAddress($emailData['email_address']);
            // $mail->addCC($request->emailCc);

            if (session()->get('sess_settings')->enable_bcc_email_to_admin == 'Y') {
                $mail->addBCC(session()->get('sess_settings')->mail_address);
            }

            //$mail->addReplyTo('sender@example.com', 'SenderReplyName');

            // if(isset($_FILES['emailAttachments'])) {
            //     for ($i=0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
            //         $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
            //     }
            // }

            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = $emailData['email_subj'];
            $mail->Body = $emailData['email_body'];

            // $mail->AltBody = plain text version of email body;

            if (!$mail->send()) {
                return "Email not sent." . $mail->ErrorInfo;
            } else {
                return true;
            }

        } catch (Exception $e) {
            return 'Message could not be sent.';
        }

    } else {
        if (mail($emailData['email_address'], $emailData['email_subj'], $emailData['email_body'], $headers)) {
            return true;
        } else {
            return 'failure';
        }
    }

    //send email here
}

function sendEmailTemplated($event, $data = [])
{
    // Fetch email template based on the sending event
    $template = DB::table('email_templates')->where('sending_event', $event)->first();

    if ($template) {
        // Compile the Blade template
        $compiledTemplate = Blade::compileString(htmlspecialchars_decode($template->email_template));

        // Render the compiled template with provided data
        $renderedTemplate = '';
        eval ('?>' . $compiledTemplate);

        // Return the rendered email template
        return $renderedTemplate;
    }

    return '';
}



function generate_invoice($fee_type, $rec_id)
{

    if ($fee_type == 'listing_setup') {
        $rec_info = DB::table('shop_items')
            ->where('id', $rec_id)
            ->first();
        $amount = $rec_info->price;

        $invoice_id = DB::table('invoices')
            ->insertGetId([
                'web_user_id' => auth()->user()->id,
                'table_name' => 'shop_items',
                'rec_id' => $rec_id,
                'invoice_descr' => $fee_type . ' #' . $rec_id
            ]);

        if ($rec_info) {
            $gen_fees = DB::table('general_fees')
                ->whereIn('setting_title', [
                    'Classified Setup Fee',  //todo
                    'Home Page Featuring Fee',
                    'Category Pages Featuring Fee',
                    'Highlighted Listing Fee',
                    'Media Upload Fee',
                    'Buy Out Fee',
                    'Reserve Price Fee',
                    'Listing Images Fee',  //todo
                    'Short Description Fee',
                    'Long Description Fee',
                    'Make Offer Fee',

                ])
                ->where('active', '1')
                ->get();

            if ($gen_fees && count($gen_fees) > 0) {
                foreach ($gen_fees as $gen_fee) {
                    $invoice_details_rec = array(
                        'web_user_id' => auth()->user()->id,
                        'invoice_id' => $invoice_id,
                        'item' => $gen_fee->setting_title,
                        'qty' => 1,
                        'currency' => $rec_info->currency,
                        'unit_price' => $gen_fee->item_fee
                    );

                    if (
                        $rec_info->enable_buy_out == 'Y' &&
                        $gen_fee->setting_title == 'Buy Out Fee' &&
                        $gen_fee->item_fee > 0
                    ) {
                        $invoice_detail_id = DB::table('invoice_details')
                            ->insertGetId($invoice_details_rec);
                    } elseif (
                        $rec_info->short_descr != '' &&
                        $gen_fee->setting_title == 'Short Description Fee' &&
                        $gen_fee->item_fee > 0
                    ) {
                        $invoice_detail_id = DB::table('invoice_details')
                            ->insertGetId($invoice_details_rec);
                    } elseif (
                        $rec_info->long_descr != '' &&
                        $gen_fee->setting_title == 'Long Description Fee' &&
                        $gen_fee->item_fee > 0
                    ) {
                        $invoice_detail_id = DB::table('invoice_details')
                            ->insertGetId($invoice_details_rec);
                    } elseif (
                        $rec_info->enable_reserve_price == 'Y' &&
                        $gen_fee->setting_title == 'Reserve Price Fee' &&
                        $gen_fee->item_fee > 0
                    ) {
                        $invoice_detail_id = DB::table('invoice_details')
                            ->insertGetId($invoice_details_rec);
                    } elseif (
                        $rec_info->accept_offer == 'Y' &&
                        $gen_fee->setting_title == 'Make Offer Fee' &&
                        $gen_fee->item_fee > 0
                    ) {
                        $invoice_detail_id = DB::table('invoice_details')
                            ->insertGetId($invoice_details_rec);
                    } elseif (
                        $rec_info->media != '' &&
                        $gen_fee->setting_title == 'Media Upload Fee' &&
                        $gen_fee->item_fee > 0
                    ) {
                        $invoice_detail_id = DB::table('invoice_details')
                            ->insertGetId($invoice_details_rec);
                    } elseif (
                        $rec_info->highlight_listing != '' &&
                        $gen_fee->setting_title == 'Highlighted Listing Fee' &&
                        $gen_fee->item_fee > 0
                    ) {
                        $invoice_detail_id = DB::table('invoice_details')
                            ->insertGetId($invoice_details_rec);
                    } elseif (
                        $rec_info->feature_home_page != '' &&
                        $gen_fee->setting_title == 'Home Page Featuring Fee' &&
                        $gen_fee->item_fee > 0
                    ) {
                        $invoice_detail_id = DB::table('invoice_details')
                            ->insertGetId($invoice_details_rec);
                    } elseif (
                        $rec_info->feature_category_page != '' &&
                        $gen_fee->setting_title == 'Category Pages Featuring Fee' &&
                        $gen_fee->item_fee > 0
                    ) {
                        $invoice_detail_id = DB::table('invoice_details')
                            ->insertGetId($invoice_details_rec);
                    }

                }
            }
        }
    } elseif ($fee_type == 'signup') {
        $rec_info = DB::table('users')
            ->where('id', $rec_id)
            ->first();


        $invoice_id = DB::table('invoices')
            ->insertGetId([
                'web_user_id' => auth()->user()->id,
                'table_name' => 'users',
                'rec_id' => $rec_id,
                'invoice_descr' => $fee_type . ' #' . $rec_id
            ]);

        if ($rec_info) {
            $gen_fees = DB::table('general_fees')
                ->whereIn('setting_title', [
                    'Signup Fee',
                ])
                ->where('active', '1')
                ->get();

            if ($gen_fees && count($gen_fees) > 0) {
                foreach ($gen_fees as $gen_fee) {
                    $invoice_details_rec = array(
                        'web_user_id' => auth()->user()->id,
                        'invoice_id' => $invoice_id,
                        'item' => $gen_fee->setting_title,
                        'qty' => 1,
                        'currency' => $rec_info->currency,
                        'unit_price' => $gen_fee->item_fee
                    );

                    if (
                        $gen_fee->setting_title == 'Signup Fee' &&
                        $gen_fee->item_fee > 0
                    ) {
                        $invoice_detail_id = DB::table('invoice_details')
                            ->insertGetId($invoice_details_rec);
                    }

                }
            }
        }
    } elseif ($fee_type == 'additional_category') {
        $rec_info = DB::table('list_categories')
            ->where('id', $rec_id)
            ->first();


        $invoice_id = DB::table('invoices')
            ->insertGetId([
                'web_user_id' => auth()->user()->id,
                'table_name' => 'shop_items',
                'rec_id' => $rec_id,
                'invoice_descr' => $fee_type . ' #' . $rec_id
            ]);

        if ($rec_info) {
            $gen_fees = DB::table('list_categories')
                ->whereIn('setting_title', [
                    'Additional Category Listing Fee',
                ])
                ->where('active', '1')
                ->get();

            if ($gen_fees && count($gen_fees) > 0) {
                foreach ($gen_fees as $gen_fee) {
                    $invoice_details_rec = array(
                        'web_user_id' => auth()->user()->id,
                        'invoice_id' => $invoice_id,
                        'item' => $gen_fee->setting_title,
                        'qty' => 1,
                        'currency' => $rec_info->currency,
                        'unit_price' => $gen_fee->item_fee
                    );

                    if (
                        $gen_fee->setting_title == 'Additional Category Listing Fee' &&
                        $gen_fee->item_fee > 0
                    ) {
                        $invoice_detail_id = DB::table('invoice_details')
                            ->insertGetId($invoice_details_rec);
                    }

                }
            }
        }
    }
}


function invoice_total($invid)
{
    $rec_info = DB::table('invoice_details')
        ->where('invoice_id', $invid)
        ->get();

    $total = 10;

    return $total;
}



function encrypt_str($plaintext)
{
    $key = env('ENCR_KEY');
    $cipher = 'aes-256-cbc'; // AES encryption with 256-bit key in CBC mode
    $iv_length = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($iv_length); // Generate random IV (initialization vector)
    $ciphertext = openssl_encrypt($plaintext, $cipher, $key, OPENSSL_RAW_DATA, $iv);
    return base64_encode($iv . $ciphertext); // Return IV concatenated with ciphertext (in Base64 encoding)
}

// // Decryption function
function decrypt_str($ciphertext)
{
    $key = env('ENCR_KEY');
    $cipher = 'aes-256-cbc';
    $ciphertext = base64_decode($ciphertext); // Decode Base64
    $iv_length = openssl_cipher_iv_length($cipher);
    $iv = substr($ciphertext, 0, $iv_length); // Extract IV from ciphertext
    $ciphertext = substr($ciphertext, $iv_length); // Extract ciphertext
    $plaintext = openssl_decrypt($ciphertext, $cipher, $key, OPENSSL_RAW_DATA, $iv);
    return $plaintext;
}


function sess_var($varname)
{
    if (null != session('sess_settings') && isset(session()->get('sess_settings')->$varname)) {
        return session()->get('sess_settings')->$varname;
    } else {
        return '';
    }
}

if (!function_exists('table_data')) {
    function table_data($vtable_name, $cond = [])
    {
        //echo 'vtable_name: '.$vtable_name.' , vfield_name: '.$vfield_name;
        $vlstvals = array();
        //DB::enableQueryLog();
        $tblist = DB::table($vtable_name)
            ->selectRaw('*')
            ->where('active', '=', '1')
            //->orderBy('menu_seq')
            ->get();
        //dd(DB::getQueryLog());

        return $tblist;
    }
}


function display_answers($card_id, $maxIndex, $arqustids, $aranswrTables, $arqstcolnames, $aransclmnames)
{
    // dd($arqustids);

    for ($i = 0; $i <= $maxIndex; $i++) {

        $varanswrTables[] = " {$aranswrTables[$i]} as table{$i}";
        $varansclmnames[] = " table{$i}.{$aransclmnames[$i]} as colname{$i}";
        $varcondCol[] = " table{$i}.card_id = " . $card_id . " and table{$i}." . $arqstcolnames[$i] . " = " . $arqustids[$i];

        $answrTables = implode(', ', $varanswrTables);
        $ansclmnames = implode(', ', $varansclmnames);
        $condCol = implode(' and ', $varcondCol);

    }
    $ipCond = "";
    for ($i = 0; $i < $maxIndex; $i++) {
        $j = $i + 1;
        $ipCond .= "  and table$i.ip_address = table$j.ip_address ";
    }


    // dd($ansclmnames);

    $dbquery = "select " . $ansclmnames . " from " . $answrTables . " where " . $condCol . $ipCond;
    // dd($dbquery);
    $results = DB::select(DB::raw($dbquery));


    $datatable = "";
    $colno = -1;
    foreach ($results as $row) {
        $colno++;
        $datatable .= "<tr>";
        for ($i = 0; $i <= $maxIndex; $i++) {
            $columnName = "colname{$i}";
            $datatable .= "<td>" . ($row->$columnName ?? 'N/A') . "</td>";
        }
        $datatable .= "</tr>";
    }

    echo ($datatable);

}

function get_prefix_items()
{
    $prefixes = [
        ['id' => 0, 'value' => 'No prefix'],
        ['id' => 1, 'value' => 'MS'],
        ['id' => 2, 'value' => 'Mr'],
        ['id' => 3, 'value' => 'Lady'],
        ['id' => 4, 'value' => 'Dedicated to'],
        ['id' => 5, 'value' => 'I am a good student'],
        ['id' => 6, 'value' => 'At your service, Mrs'],
        ['id' => 7, 'value' => 'Honorable presence of Mr'],
        ['id' => 8, 'value' => 'The honorable presence of Sarkar against'],
        ['id' => 9, 'value' => 'Dear Mr'],
        ['id' => 10, 'value' => 'At your service, Mrs']
    ];

    return $prefixes;
}
