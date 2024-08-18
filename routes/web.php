<?php
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Storage;
//use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthController;


use App\Http\Controllers\Backend\Baseline\Adminpanel;
use App\Http\Controllers\Backend\Baseline\module;
use App\Http\Controllers\Backend\Baseline\add;
use App\Http\Controllers\Backend\Baseline\save;
use App\Http\Controllers\Backend\Baseline\search;
use App\Http\Controllers\Backend\Baseline\update;
use App\Http\Controllers\Backend\Baseline\edit;
use App\Http\Controllers\Backend\Baseline\delete;
use App\Http\Controllers\Backend\Baseline\sendmail;
use App\Http\Controllers\Backend\Baseline\designer;
use App\Http\Controllers\Backend\Baseline\designer_add;
use App\Http\Controllers\Backend\Baseline\designer_edit;

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\Backgrounds;
use App\Http\Controllers\Backend\Users;
use App\Http\Controllers\Backend\Envelop_inside_images;
use App\Http\Controllers\Backend\Sounds;
use App\Http\Controllers\Backend\Effects;
use App\Http\Controllers\Backend\Tags;
use App\Http\Controllers\Backend\Blog_Categories;
use App\Http\Controllers\Backend\Stamp_Designs;
use App\Http\Controllers\Backend\Stamp_Images;
use App\Http\Controllers\Backend\Custom_User_Images;
use App\Http\Controllers\Backend\Custom_User_Voices;

use App\Http\Controllers\Backend\Card_Categories;
use App\Http\Controllers\Backend\Cards;
use App\Http\Controllers\Backend\Card_Payments;
use App\Http\Controllers\Backend\Card_Reviews;
use App\Http\Controllers\Backend\Favourites;
use App\Http\Controllers\Backend\Blog_Posts;
use App\Http\Controllers\Backend\Post_Reviews;


use App\Http\Controllers\Frontend\Websiteauth;
use App\Http\Controllers\Frontend\Categories;
use App\Http\Controllers\Frontend\Website;
use App\Http\Controllers\Frontend\Categorycards;
use App\Http\Controllers\Frontend\Card;
use App\Http\Controllers\Frontend\Blogs;
use App\Http\Controllers\Frontend\Blog;
use App\Http\Controllers\Frontend\Card_designer;
use App\Http\Controllers\Frontend\Mycards;
use App\Http\Controllers\Frontend\Play;
use App\Http\Controllers\Frontend\Chargplan;
use App\Http\Controllers\Frontend\TicketCheckoutController;
use App\Http\Controllers\Frontend\CardCheckoutController;
use App\Http\Controllers\Frontend\Transactions;
use App\Http\Controllers\Frontend\Receivers;


use App\Http\Controllers\Backend\Stickers;
use App\Http\Controllers\Backend\Seal_Designs;
use App\Http\Controllers\Backend\Envelop_Designs;
use App\Http\Controllers\Backend\Envelop_Design_Parts;
use App\Http\Controllers\Backend\Music_Categories;
use App\Http\Controllers\Backend\Attendance_Question;
use App\Http\Controllers\Backend\cont_and_comm;
use App\Http\Controllers\Backend\Countdown_Timer;
use App\Http\Controllers\Backend\Link;
use App\Http\Controllers\Backend\Optional_Question;
use App\Http\Controllers\Backend\Text_Question;
use App\Http\Controllers\Backend\Social_Network;
use App\Http\Controllers\Backend\Memorial_Request;
use App\Http\Controllers\Backend\USER_TEXT;
use App\Http\Controllers\Backend\User_Images;
use App\Http\Controllers\Backend\Card_Video;
use App\Http\Controllers\Backend\Card_Recipients;
use App\Http\Controllers\Backend\Widgets_Ticket_Type;
use App\Http\Controllers\Backend\Ticket_Types;
use App\Http\Controllers\Backend\Music_Files;

/*[[useControllerLine]]*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('frontend/home');
});


Route::get('/link', function () {
    $target = getcwd() . '/laravel/storage/app/public';
    $shortcut = getcwd() . '/storage';
    symlink($target, $shortcut);
});
Route::get('exec', [Exec::class, 'index'])->name('exec');

Route::get('backend/login', [AuthController::class, 'index'])->name('backend.login');
Route::POST('backend/post-login', [AuthController::class, 'postLogin'])->name('backend.login.post');
Route::get('backend/registration', [AuthController::class, 'registration'])->name('backend.register');
Route::post('backend/post-registration', [AuthController::class, 'postRegistration'])->name('backend.register.post');


//  Route::middleware(['auth', CheckUserSide::class . ':backend'])->group(function () {

Route::get('backend/dashboard', [AuthController::class, 'backend.dashboard']);
Route::get('backend/logout', [AuthController::class, 'logout'])->name('backend.logout');


Route::get('backend/home', [HomeController::class, 'index'])->middleware(['auth'])->name('backend.home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::get('backend/adminpanel', [Adminpanel::class, 'index'])->middleware(['auth'])->name('backend.adminpanel');
Route::get('backend/module', [module::class, 'index'])->middleware(['auth']);
Route::get('backend/add', [add::class, 'index'])->middleware(['auth']);
Route::post('backend/save', [save::class, 'index'])->middleware(['auth']);
Route::any('backend/update', [update::class, 'index'])->middleware(['auth']);
Route::post('backend/search', [search::class, 'index'])->middleware(['auth']);
Route::get('backend/edit', [edit::class, 'index'])->middleware(['auth']);
Route::get('backend/delete', [delete::class, 'index'])->middleware(['auth']);
// Route::get('/show_img' , [show_img::class,'index']);

Route::get('backend/designer', [designer::class, 'index'])->middleware(['auth']);
Route::get('backend/designer_add', [designer_add::class, 'index'])->middleware(['auth'])->name('backend.designer_add');
Route::post('backend/designer_add/save', [designer_add::class, 'save']);
Route::post('backend/designer_add/generate', [designer_add::class, 'generate']);
Route::get('backend/designer_add/ajax_module_fields', [designer_add::class, 'ajax_module_fields']);
//ajax_module_fields

Route::get('backend/show_sidepanel', [designer_add::class, 'show_sidepanel']);
Route::get('backend/ajax_item_properties', [designer_add::class, 'ajax_item_properties']);
Route::get('backend/designer_add/ajax_table_fields', [designer_add::class, 'ajax_table_fields']);
Route::get('backend/dznr_delete', [designer_add::class, 'dznr_delete']);
Route::get('backend/designer_edit', [designer_edit::class, 'index'])->middleware(['auth']);
Route::post('backend/designer_edit', [designer_edit::class, 'update']);

Route::get('backend/sendmail', [sendmail::class, 'index']);
Route::get('backend/send-mail', function () {
    $details = [
        'title' => $_GET['title'],
        'body' => $_GET['email']
    ];

    \Mail::to($_GET['toemail'])->send(new \App\Mail\MyTestMail($details));
    dd("Email is Sent.");
});

// });

// ------------------------- front end website ------------------------ //


Route::get('under_maintenance', [Under_maintenance::class, 'index'])->name('under_maintenance');

Route::get('currencytest', [Currencytest::class, 'index'])->name('currencytest');

Route::get('contactus', [Contactus::class, 'index'])->name('contactus');
Route::post('contactus/send_info', [Contactus::class, 'send_info'])->name('contactus.send_info');
Route::post('newsletter/subscribe', [Newsletter::class, 'subscribe'])->name('newsletter.subscribe');
Route::post('newsletter/confirm/{recid}', [Newsletter::class, 'confirm'])->name('newsletter.confirm');

Route::get('/', [Website::class, 'index']);
Route::get('home', [Website::class, 'index'])->name('home');
Route::get('logout', [Websiteauth::class, 'logout'])->name('logout');

Route::get('login', [Websiteauth::class, 'index'])->name('login');
Route::get('login/validate/{code}', [Websiteauth::class, 'validate_user']);
Route::post('postLogin', [Websiteauth::class, 'postLogin'])->name('login.post');
Route::get('register', [Websiteauth::class, 'register'])->name('register');
Route::post('postRegister', [Websiteauth::class, 'postRegister'])->name('register.post');
Route::get('forgot', [Websiteauth::class, 'forgot'])->name('forgot');
Route::post('postForgot', [Websiteauth::class, 'postForgot'])->name('forgot.post');


Route::get('categories', [Categories::class, 'index'])->name('categories');
Route::get('cardslist', [Cardslist::class, 'index'])->name('cardslist');
Route::get('categorycards', [Categorycards::class, 'index'])->name('categorycards');
Route::get('card', [Card::class, 'index'])->name('card');
Route::get('blogs', [Blogs::class, 'index'])->name('blogs');
Route::get('blog', [Blog::class, 'index'])->name('blog');



Route::get('card_designer/{id}', [Card_designer::class, 'index'])->middleware(['auth'])->name('card_designer');
Route::get('card_designer', [Card_designer::class, 'index'])->middleware(['auth'])->name('card_designer');

Route::post('card_designer/add_widget_link', [Card_designer::class, 'add_widget_link'])->middleware(['auth'])->name('card_designer.add_widget_link');
Route::post('card_designer/edit_widget_link', [Card_designer::class, 'edit_widget_link'])->middleware(['auth'])->name('card_designer.edit_widget_link');
Route::post('card_designer/delete_widget_link', [Card_designer::class, 'delete_widget_link'])->middleware(['auth'])->name('card_designer.delete_widget_link');

Route::post('card_designer/add_widget_separator', [Card_designer::class, 'add_widget_separator'])->middleware(['auth'])->name('card_designer.add_widget_separator');
Route::post('card_designer/edit_widget_separator', [Card_designer::class, 'edit_widget_separator'])->middleware(['auth'])->name('card_designer.edit_widget_separator');
Route::post('card_designer/delete_widget_separator', [Card_designer::class, 'delete_widget_separator'])->middleware(['auth'])->name('card_designer.delete_widget_separator');

Route::post('card_designer/add_widget_social_network', [Card_designer::class, 'add_widget_social_network'])->middleware(['auth'])->name('card_designer.add_widget_social_network');
Route::post('card_designer/edit_widget_social_network', [Card_designer::class, 'edit_widget_social_network'])->middleware(['auth'])->name('card_designer.edit_widget_social_network');
Route::post('card_designer/delete_widget_social_network', [Card_designer::class, 'delete_widget_social_network'])->middleware(['auth'])->name('card_designer.delete_widget_social_network');

Route::post('card_designer/add_widget_user_text', [Card_designer::class, 'add_widget_user_text'])->middleware(['auth'])->name('card_designer.add_widget_user_text');
Route::post('card_designer/edit_widget_user_text', [Card_designer::class, 'edit_widget_user_text'])->middleware(['auth'])->name('card_designer.edit_widget_user_text');
Route::post('card_designer/delete_widget_user_text', [Card_designer::class, 'delete_widget_user_text'])->middleware(['auth'])->name('card_designer.delete_widget_user_text');

Route::post('card_designer/add_widget_video', [Card_designer::class, 'add_widget_video'])->middleware(['auth'])->name('card_designer.add_widget_video');
Route::post('card_designer/edit_widget_video', [Card_designer::class, 'edit_widget_video'])->middleware(['auth'])->name('card_designer.edit_widget_video');
Route::post('card_designer/delete_widget_video', [Card_designer::class, 'delete_widget_video'])->middleware(['auth'])->name('card_designer.delete_widget_video');

Route::post('card_designer/add_widget_quest', [Card_designer::class, 'add_widget_quest'])->middleware(['auth'])->name('card_designer.add_widget_quest');
Route::post('card_designer/edit_widget_quest', [Card_designer::class, 'edit_widget_quest'])->middleware(['auth'])->name('card_designer.edit_widget_quest');
Route::post('card_designer/delete_widget_quest', [Card_designer::class, 'delete_widget_quest'])->middleware(['auth'])->name('card_designer.delete_widget_quest');

Route::post('card_designer/add_widget_text_question', [Card_designer::class, 'add_widget_text_question'])->middleware(['auth'])->name('card_designer.add_widget_text_question');
Route::post('card_designer/edit_widget_text_question', [Card_designer::class, 'edit_widget_text_question'])->middleware(['auth'])->name('card_designer.edit_widget_text_question');
Route::post('card_designer/delete_widget_text_question', [Card_designer::class, 'delete_widget_text_question'])->middleware(['auth'])->name('card_designer.delete_widget_text_question');

Route::post('card_designer/add_widget_countdown', [Card_designer::class, 'add_widget_countdown'])->middleware(['auth'])->name('card_designer.add_widget_countdown');
Route::post('card_designer/edit_widget_countdown', [Card_designer::class, 'edit_widget_countdown'])->middleware(['auth'])->name('card_designer.edit_widget_countdown');
Route::post('card_designer/delete_widget_countdown', [Card_designer::class, 'delete_widget_countdown'])->middleware(['auth'])->name('card_designer.delete_widget_countdown');

Route::post('card_designer/add_widget_optional_question', [Card_designer::class, 'add_widget_optional_question'])->middleware(['auth'])->name('card_designer.add_widget_optional_question');
Route::post('card_designer/edit_widget_optional_question', [Card_designer::class, 'edit_widget_optional_question'])->middleware(['auth'])->name('card_designer.edit_widget_optional_question');
Route::post('card_designer/delete_widget_optional_question', [Card_designer::class, 'delete_widget_optional_question'])->middleware(['auth'])->name('card_designer.delete_widget_optional_question');

Route::post('card_designer/add_widget_contact_comm', [Card_designer::class, 'add_widget_contact_comm'])->middleware(['auth'])->name('card_designer.add_widget_contact_comm');
Route::post('card_designer/edit_widget_contact_comm', [Card_designer::class, 'edit_widget_contact_comm'])->middleware(['auth'])->name('card_designer.edit_widget_contact_comm');
Route::post('card_designer/delete_widget_contact_comm', [Card_designer::class, 'delete_widget_contact_comm'])->middleware(['auth'])->name('card_designer.delete_widget_contact_comm');

Route::post('card_designer/add_widget_memorial', [Card_designer::class, 'add_widget_memorial'])->middleware(['auth'])->name('card_designer.add_widget_memorial');
Route::post('card_designer/edit_widget_memorial', [Card_designer::class, 'edit_widget_memorial'])->middleware(['auth'])->name('card_designer.edit_widget_memorial');
Route::post('card_designer/delete_widget_memorial', [Card_designer::class, 'delete_widget_memorial'])->middleware(['auth'])->name('card_designer.delete_widget_memorial');

Route::post('card_designer/add_widget_image', [Card_designer::class, 'add_widget_image'])->middleware(['auth'])->name('card_designer.add_widget_image');
Route::post('card_designer/edit_widget_image', [Card_designer::class, 'edit_widget_image'])->middleware(['auth'])->name('card_designer.edit_widget_image');
Route::post('card_designer/delete_widget_image', [Card_designer::class, 'delete_widget_image'])->middleware(['auth'])->name('card_designer.delete_widget_image');

Route::post('card_designer/add_widget_attend_quest', [Card_designer::class, 'add_widget_attend_quest'])->middleware(['auth'])->name('card_designer.add_widget_attend_quest');
Route::post('card_designer/edit_widget_attend_quest', [Card_designer::class, 'edit_widget_attend_quest'])->middleware(['auth'])->name('card_designer.edit_widget_attend_quest');
Route::post('card_designer/delete_widget_attend_quest', [Card_designer::class, 'delete_widget_attend_quest'])->middleware(['auth'])->name('card_designer.delete_widget_attend_quest');

Route::post('card_designer/add_text_question', [Card_designer::class, 'add_text_question'])->middleware(['auth'])->name('card_designer.add_text_question');
Route::post('card_designer/add_countdown', [Card_designer::class, 'add_countdown'])->middleware(['auth'])->name('card_designer.add_countdown');
Route::post('card_designer/add_optional_question', [Card_designer::class, 'add_optional_question'])->middleware(['auth'])->name('card_designer.add_optional_question');
Route::post('card_designer/add_contact_comm', [Card_designer::class, 'add_contact_comm'])->middleware(['auth'])->name('card_designer.add_contact_comm');
Route::post('card_designer/add_memorial', [Card_designer::class, 'add_memorial'])->middleware(['auth'])->name('card_designer.add_memorial');
Route::post('card_designer/add_image', [Card_designer::class, 'add_image'])->middleware(['auth'])->name('card_designer.add_image');

Route::post('card_designer/updateBackgroundImage', [Card_designer::class, 'updateBackgroundImage'])->middleware(['auth'])->name('card_designer.updateBackgroundImage');
Route::post('card_designer/updateInsideImage', [Card_designer::class, 'updateInsideImage'])->middleware(['auth'])->name('card_designer.updateInsideImage');
Route::post('card_designer/updateCanvasImage', [Card_designer::class, 'updateCanvasImage'])->middleware(['auth'])->name('card_designer.updateCanvasImage');
Route::post('card_designer/updateStampImage', [Card_designer::class, 'updateStampImage'])->middleware(['auth'])->name('card_designer.updateStampImage');
Route::post('card_designer/updateStampDesign', [Card_designer::class, 'updateStampDesign'])->middleware(['auth'])->name('card_designer.updateStampDesign');
Route::post('card_designer/updateSealDesign', [Card_designer::class, 'updateSealDesign'])->middleware(['auth'])->name('card_designer.updateSealDesign');
Route::post('card_designer/updateCardMusic', [Card_designer::class, 'updateCardMusic'])->middleware(['auth'])->name('card_designer.updateCardMusic');
Route::post('card_designer/updateRecipientName', [Card_designer::class, 'updateRecipientName'])->middleware(['auth'])->name('card_designer.updateRecipientName');
Route::post('card_designer/updateSenderName', [Card_designer::class, 'updateSenderName'])->middleware(['auth'])->name('card_designer.updateSenderName');
Route::post('card_designer/updateEnvelopDesign', [Card_designer::class, 'updateEnvelopDesign'])->middleware(['auth'])->name('card_designer.updateEnvelopDesign');
Route::post('card_designer/updateEffects', [Card_designer::class, 'updateEffects'])->middleware(['auth'])->name('card_designer.updateEffects');
Route::post('card_designer/saveCardObjects', [Card_designer::class, 'saveCardObjects'])->middleware(['auth'])->name('card_designer.saveCardObjects');
Route::get('card_designer/store_card/{id}', [Card_designer::class, 'store_card'])->middleware(['auth'])->name('card_designer.store_card');
Route::get('get-canvas-image/{cardId}', [Card_designer::class, 'getCanvasImage'])->name('getCanvasImage');

Route::get('mycards', [Mycards::class, 'index'])->middleware(['auth'])->name('mycards');
Route::get('mycards/messages/{id}', [Mycards::class, 'card_messages'])->middleware(['auth'])->name('mycards.messages');
Route::get('mycards/save_recipient', [Mycards::class, 'save_recipient'])->middleware(['auth'])->name('mycards.save_recipient');
Route::post('mycards/save_multiple_recipient', [Mycards::class, 'save_multiple_recipient'])->middleware(['auth'])->name('mycards.save_multiple_recipient');
Route::post('mycards/remove_card_recipient', [Mycards::class, 'remove_card_recipient'])->middleware(['auth'])->name('mycards.remove_card_recipient');
Route::get('mycards/card_copy/{id}', [Mycards::class, 'card_copy'])->middleware(['auth'])->name('mycards.card_copy');
Route::get('mycards/card_delete/{id}', [Mycards::class, 'card_delete'])->middleware(['auth'])->name('mycards.card_delete');
Route::get('mycards/receivers/{id}', [Mycards::class, 'receivers'])->middleware(['auth'])->name('mycards.receivers');
Route::post('mycards/save_text_format', [Mycards::class, 'save_text_format'])->middleware(['auth'])->name('mycards.save_text_format');
Route::get('mycards/recipient_detail/{id}', [Mycards::class, 'recipient_detail'])->middleware(['auth'])->name('mycards.recipient');
Route::post('mycards/save_recipient_prefix/{id}', [Mycards::class, 'save_recipient_prefix'])->middleware(['auth'])->name('mycards.save_recipient_prefix');
Route::post('mycards/send_email_to_recipients', [Mycards::class, 'send_email_to_recipients'])->middleware(['auth'])->name('mycards.send_email_to_recipients');

Route::get('chargplan', [Chargplan::class, 'index'])->middleware(['auth'])->name('chargplan');
Route::get('charge_cacelled', [Chargplan::class, 'charge_cacelled'])->middleware(['auth'])->name('charge_cacelled');
Route::get('charge_success', [Chargplan::class, 'charge_success'])->middleware(['auth'])->name('charge_success');
Route::get('transactions', [Transactions::class, 'index'])->middleware(['auth'])->name('transactions');




Route::get('play/{id}/{recipient_url?}', [Play::class, 'index'])->name('play');
Route::post('play/save_answers', [Play::class, 'save_answers'])->name('play.save_answers');

// Route::get('shop_items', [Shop::class, 'index'])->name('shop');

// Route::get('/stripe', [StripeController::class, 'index'])->name('index');
// Route::get('/stripe/checkout/{orderid}', [StripeController::class, 'checkout'])->name('frontend.stripe.checkout');
// Route::get('/stripe/success', [StripeController::class, 'success'])->name('frontend.stripe.success');
// Route::get('/stripe/cancel', [StripeController::class, 'cancel'])->name('frontend.stripe.cancel');


Route::post('/create-checkout-session', [TicketCheckoutController::class, 'createCheckoutSession']);
// Route::post('/create-checkout-session', [CardCheckoutController::class, 'createCheckoutSession']);

// Route::get('/payment_success', function () {
//     return 'Payment Successful!';
// });

// Route::get('/payment_canceled', [Payment_canceled::class, 'index']);

// Route::middleware(['auth', CheckUserSide::class . ':frontend'])->group(function () {   

//shop registration 
//item input under shop


// });


Route::get('backend/users', [Users::class, 'index'])->middleware(['auth'])->name('backend.users');
Route::get('backend/users/create', [Users::class, 'create'])->middleware(['auth'])->name('backend.users.create');
Route::post('backend/users', [Users::class, 'store'])->middleware(['auth'])->name('backend.users.store');
Route::get('backend/users/{id}', [Users::class, 'show'])->middleware(['auth'])->name('backend.users.show');
Route::get('backend/users/{id}/edit', [Users::class, 'edit'])->middleware(['auth'])->name('backend.users.edit');
Route::post('backend/users/update', [Users::class, 'update'])->middleware(['auth'])->name('backend.users.update');
Route::post('backend/users/delete', [Users::class, 'destroy'])->middleware(['auth'])->name('backend.users.delete');
Route::get('backend/envelop_inside_images', [Envelop_inside_images::class, 'index'])->middleware(['auth'])->name('backend.envelop_inside_images');
Route::get('backend/envelop_inside_images/create', [Envelop_inside_images::class, 'create'])->middleware(['auth'])->name('backend.envelop_inside_images.create');
Route::post('backend/envelop_inside_images', [Envelop_inside_images::class, 'store'])->middleware(['auth'])->name('backend.envelop_inside_images.store');
Route::get('backend/envelop_inside_images/{id}', [Envelop_inside_images::class, 'show'])->middleware(['auth'])->name('backend.envelop_inside_images.show');
Route::get('backend/envelop_inside_images/{id}/edit', [Envelop_inside_images::class, 'edit'])->middleware(['auth'])->name('backend.envelop_inside_images.edit');
Route::post('backend/envelop_inside_images/update', [Envelop_inside_images::class, 'update'])->middleware(['auth'])->name('backend.envelop_inside_images.update');
Route::post('backend/envelop_inside_images/delete', [Envelop_inside_images::class, 'destroy'])->middleware(['auth'])->name('backend.envelop_inside_images.delete');
Route::get('backend/sounds', [Sounds::class, 'index'])->middleware(['auth'])->name('backend.sounds');
Route::get('backend/sounds/create', [Sounds::class, 'create'])->middleware(['auth'])->name('backend.sounds.create');
Route::post('backend/sounds', [Sounds::class, 'store'])->middleware(['auth'])->name('backend.sounds.store');
Route::get('backend/sounds/{id}', [Sounds::class, 'show'])->middleware(['auth'])->name('backend.sounds.show');
Route::get('backend/sounds/{id}/edit', [Sounds::class, 'edit'])->middleware(['auth'])->name('backend.sounds.edit');
Route::post('backend/sounds/update', [Sounds::class, 'update'])->middleware(['auth'])->name('backend.sounds.update');
Route::post('backend/sounds/delete', [Sounds::class, 'destroy'])->middleware(['auth'])->name('backend.sounds.delete');
Route::get('backend/effects', [Effects::class, 'index'])->middleware(['auth'])->name('backend.effects');
Route::get('backend/effects/create', [Effects::class, 'create'])->middleware(['auth'])->name('backend.effects.create');
Route::post('backend/effects', [Effects::class, 'store'])->middleware(['auth'])->name('backend.effects.store');
Route::get('backend/effects/{id}', [Effects::class, 'show'])->middleware(['auth'])->name('backend.effects.show');
Route::get('backend/effects/{id}/edit', [Effects::class, 'edit'])->middleware(['auth'])->name('backend.effects.edit');
Route::post('backend/effects/update', [Effects::class, 'update'])->middleware(['auth'])->name('backend.effects.update');
Route::post('backend/effects/delete', [Effects::class, 'destroy'])->middleware(['auth'])->name('backend.effects.delete');
Route::get('backend/tags', [Tags::class, 'index'])->middleware(['auth'])->name('backend.tags');
Route::get('backend/tags/create', [Tags::class, 'create'])->middleware(['auth'])->name('backend.tags.create');
Route::post('backend/tags', [Tags::class, 'store'])->middleware(['auth'])->name('backend.tags.store');
Route::get('backend/tags/{id}', [Tags::class, 'show'])->middleware(['auth'])->name('backend.tags.show');
Route::get('backend/tags/{id}/edit', [Tags::class, 'edit'])->middleware(['auth'])->name('backend.tags.edit');
Route::post('backend/tags/update', [Tags::class, 'update'])->middleware(['auth'])->name('backend.tags.update');
Route::post('backend/tags/delete', [Tags::class, 'destroy'])->middleware(['auth'])->name('backend.tags.delete');
Route::get('backend/blog_categories', [Blog_Categories::class, 'index'])->middleware(['auth'])->name('backend.blog_categories');
Route::get('backend/blog_categories/create', [Blog_Categories::class, 'create'])->middleware(['auth'])->name('backend.blog_categories.create');
Route::post('backend/blog_categories', [Blog_Categories::class, 'store'])->middleware(['auth'])->name('backend.blog_categories.store');
Route::get('backend/blog_categories/{id}', [Blog_Categories::class, 'show'])->middleware(['auth'])->name('backend.blog_categories.show');
Route::get('backend/blog_categories/{id}/edit', [Blog_Categories::class, 'edit'])->middleware(['auth'])->name('backend.blog_categories.edit');
Route::post('backend/blog_categories/update', [Blog_Categories::class, 'update'])->middleware(['auth'])->name('backend.blog_categories.update');
Route::post('backend/blog_categories/delete', [Blog_Categories::class, 'destroy'])->middleware(['auth'])->name('backend.blog_categories.delete');
Route::get('backend/stamp_designs', [Stamp_Designs::class, 'index'])->middleware(['auth'])->name('backend.stamp_designs');
Route::get('backend/stamp_designs/create', [Stamp_Designs::class, 'create'])->middleware(['auth'])->name('backend.stamp_designs.create');
Route::post('backend/stamp_designs', [Stamp_Designs::class, 'store'])->middleware(['auth'])->name('backend.stamp_designs.store');
Route::get('backend/stamp_designs/{id}', [Stamp_Designs::class, 'show'])->middleware(['auth'])->name('backend.stamp_designs.show');
Route::get('backend/stamp_designs/{id}/edit', [Stamp_Designs::class, 'edit'])->middleware(['auth'])->name('backend.stamp_designs.edit');
Route::post('backend/stamp_designs/update', [Stamp_Designs::class, 'update'])->middleware(['auth'])->name('backend.stamp_designs.update');
Route::post('backend/stamp_designs/delete', [Stamp_Designs::class, 'destroy'])->middleware(['auth'])->name('backend.stamp_designs.delete');
Route::get('backend/stamp_images', [Stamp_Images::class, 'index'])->middleware(['auth'])->name('backend.stamp_images');
Route::get('backend/stamp_images/create', [Stamp_Images::class, 'create'])->middleware(['auth'])->name('backend.stamp_images.create');
Route::post('backend/stamp_images', [Stamp_Images::class, 'store'])->middleware(['auth'])->name('backend.stamp_images.store');
Route::get('backend/stamp_images/{id}', [Stamp_Images::class, 'show'])->middleware(['auth'])->name('backend.stamp_images.show');
Route::get('backend/stamp_images/{id}/edit', [Stamp_Images::class, 'edit'])->middleware(['auth'])->name('backend.stamp_images.edit');
Route::post('backend/stamp_images/update', [Stamp_Images::class, 'update'])->middleware(['auth'])->name('backend.stamp_images.update');
Route::post('backend/stamp_images/delete', [Stamp_Images::class, 'destroy'])->middleware(['auth'])->name('backend.stamp_images.delete');
Route::get('backend/custom_user_images', [Custom_User_Images::class, 'index'])->middleware(['auth'])->name('backend.custom_user_images');
Route::get('backend/custom_user_images/create', [Custom_User_Images::class, 'create'])->middleware(['auth'])->name('backend.custom_user_images.create');
Route::post('backend/custom_user_images', [Custom_User_Images::class, 'store'])->middleware(['auth'])->name('backend.custom_user_images.store');
Route::get('backend/custom_user_images/{id}', [Custom_User_Images::class, 'show'])->middleware(['auth'])->name('backend.custom_user_images.show');
Route::get('backend/custom_user_images/{id}/edit', [Custom_User_Images::class, 'edit'])->middleware(['auth'])->name('backend.custom_user_images.edit');
Route::post('backend/custom_user_images/update', [Custom_User_Images::class, 'update'])->middleware(['auth'])->name('backend.custom_user_images.update');
Route::post('backend/custom_user_images/delete', [Custom_User_Images::class, 'destroy'])->middleware(['auth'])->name('backend.custom_user_images.delete');
Route::get('backend/custom_user_voices', [Custom_User_Voices::class, 'index'])->middleware(['auth'])->name('backend.custom_user_voices');
Route::get('backend/custom_user_voices/create', [Custom_User_Voices::class, 'create'])->middleware(['auth'])->name('backend.custom_user_voices.create');
Route::post('backend/custom_user_voices', [Custom_User_Voices::class, 'store'])->middleware(['auth'])->name('backend.custom_user_voices.store');
Route::get('backend/custom_user_voices/{id}', [Custom_User_Voices::class, 'show'])->middleware(['auth'])->name('backend.custom_user_voices.show');
Route::get('backend/custom_user_voices/{id}/edit', [Custom_User_Voices::class, 'edit'])->middleware(['auth'])->name('backend.custom_user_voices.edit');
Route::post('backend/custom_user_voices/update', [Custom_User_Voices::class, 'update'])->middleware(['auth'])->name('backend.custom_user_voices.update');
Route::post('backend/custom_user_voices/delete', [Custom_User_Voices::class, 'destroy'])->middleware(['auth'])->name('backend.custom_user_voices.delete');
Route::get('backend/card_categories', [Card_Categories::class, 'index'])->middleware(['auth'])->name('backend.card_categories');
Route::get('backend/card_categories/create', [Card_Categories::class, 'create'])->middleware(['auth'])->name('backend.card_categories.create');
Route::post('backend/card_categories', [Card_Categories::class, 'store'])->middleware(['auth'])->name('backend.card_categories.store');
Route::get('backend/card_categories/{id}', [Card_Categories::class, 'show'])->middleware(['auth'])->name('backend.card_categories.show');
Route::get('backend/card_categories/{id}/edit', [Card_Categories::class, 'edit'])->middleware(['auth'])->name('backend.card_categories.edit');
Route::post('backend/card_categories/update', [Card_Categories::class, 'update'])->middleware(['auth'])->name('backend.card_categories.update');
Route::post('backend/card_categories/delete', [Card_Categories::class, 'destroy'])->middleware(['auth'])->name('backend.card_categories.delete');
Route::get('backend/cards', [Cards::class, 'index'])->middleware(['auth'])->name('backend.cards');
Route::get('backend/cards/create', [Cards::class, 'create'])->middleware(['auth'])->name('backend.cards.create');
Route::post('backend/cards', [Cards::class, 'store'])->middleware(['auth'])->name('backend.cards.store');
Route::get('backend/cards/{id}', [Cards::class, 'show'])->middleware(['auth'])->name('backend.cards.show');
Route::get('backend/cards/{id}/edit', [Cards::class, 'edit'])->middleware(['auth'])->name('backend.cards.edit');
Route::post('backend/cards/update', [Cards::class, 'update'])->middleware(['auth'])->name('backend.cards.update');
Route::post('backend/cards/delete', [Cards::class, 'destroy'])->middleware(['auth'])->name('backend.cards.delete');
Route::get('backend/card_payments', [Card_Payments::class, 'index'])->middleware(['auth'])->name('backend.card_payments');
Route::get('backend/card_payments/create', [Card_Payments::class, 'create'])->middleware(['auth'])->name('backend.card_payments.create');
Route::post('backend/card_payments', [Card_Payments::class, 'store'])->middleware(['auth'])->name('backend.card_payments.store');
Route::get('backend/card_payments/{id}', [Card_Payments::class, 'show'])->middleware(['auth'])->name('backend.card_payments.show');
Route::get('backend/card_payments/{id}/edit', [Card_Payments::class, 'edit'])->middleware(['auth'])->name('backend.card_payments.edit');
Route::post('backend/card_payments/update', [Card_Payments::class, 'update'])->middleware(['auth'])->name('backend.card_payments.update');
Route::post('backend/card_payments/delete', [Card_Payments::class, 'destroy'])->middleware(['auth'])->name('backend.card_payments.delete');
Route::get('backend/card_reviews', [Card_Reviews::class, 'index'])->middleware(['auth'])->name('backend.card_reviews');
Route::get('backend/card_reviews/create', [Card_Reviews::class, 'create'])->middleware(['auth'])->name('backend.card_reviews.create');
Route::post('backend/card_reviews', [Card_Reviews::class, 'store'])->middleware(['auth'])->name('backend.card_reviews.store');
Route::get('backend/card_reviews/{id}', [Card_Reviews::class, 'show'])->middleware(['auth'])->name('backend.card_reviews.show');
Route::get('backend/card_reviews/{id}/edit', [Card_Reviews::class, 'edit'])->middleware(['auth'])->name('backend.card_reviews.edit');
Route::post('backend/card_reviews/update', [Card_Reviews::class, 'update'])->middleware(['auth'])->name('backend.card_reviews.update');
Route::post('backend/card_reviews/delete', [Card_Reviews::class, 'destroy'])->middleware(['auth'])->name('backend.card_reviews.delete');
Route::get('backend/favourites', [Favourites::class, 'index'])->middleware(['auth'])->name('backend.favourites');
Route::get('backend/favourites/create', [Favourites::class, 'create'])->middleware(['auth'])->name('backend.favourites.create');
Route::post('backend/favourites', [Favourites::class, 'store'])->middleware(['auth'])->name('backend.favourites.store');
Route::get('backend/favourites/{id}', [Favourites::class, 'show'])->middleware(['auth'])->name('backend.favourites.show');
Route::get('backend/favourites/{id}/edit', [Favourites::class, 'edit'])->middleware(['auth'])->name('backend.favourites.edit');
Route::post('backend/favourites/update', [Favourites::class, 'update'])->middleware(['auth'])->name('backend.favourites.update');
Route::post('backend/favourites/delete', [Favourites::class, 'destroy'])->middleware(['auth'])->name('backend.favourites.delete');
Route::get('backend/blog_posts', [Blog_Posts::class, 'index'])->middleware(['auth'])->name('backend.blog_posts');
Route::get('backend/blog_posts/create', [Blog_Posts::class, 'create'])->middleware(['auth'])->name('backend.blog_posts.create');
Route::post('backend/blog_posts', [Blog_Posts::class, 'store'])->middleware(['auth'])->name('backend.blog_posts.store');
Route::get('backend/blog_posts/{id}', [Blog_Posts::class, 'show'])->middleware(['auth'])->name('backend.blog_posts.show');
Route::get('backend/blog_posts/{id}/edit', [Blog_Posts::class, 'edit'])->middleware(['auth'])->name('backend.blog_posts.edit');
Route::post('backend/blog_posts/update', [Blog_Posts::class, 'update'])->middleware(['auth'])->name('backend.blog_posts.update');
Route::post('backend/blog_posts/delete', [Blog_Posts::class, 'destroy'])->middleware(['auth'])->name('backend.blog_posts.delete');
Route::get('backend/post_reviews', [Post_Reviews::class, 'index'])->middleware(['auth'])->name('backend.post_reviews');
Route::get('backend/post_reviews/create', [Post_Reviews::class, 'create'])->middleware(['auth'])->name('backend.post_reviews.create');
Route::post('backend/post_reviews', [Post_Reviews::class, 'store'])->middleware(['auth'])->name('backend.post_reviews.store');
Route::get('backend/post_reviews/{id}', [Post_Reviews::class, 'show'])->middleware(['auth'])->name('backend.post_reviews.show');
Route::get('backend/post_reviews/{id}/edit', [Post_Reviews::class, 'edit'])->middleware(['auth'])->name('backend.post_reviews.edit');
Route::post('backend/post_reviews/update', [Post_Reviews::class, 'update'])->middleware(['auth'])->name('backend.post_reviews.update');
Route::post('backend/post_reviews/delete', [Post_Reviews::class, 'destroy'])->middleware(['auth'])->name('backend.post_reviews.delete');
Route::get('backend/stickers', [Stickers::class, 'index'])->middleware(['auth'])->name('backend.stickers');
Route::get('backend/stickers/create', [Stickers::class, 'create'])->middleware(['auth'])->name('backend.stickers.create');
Route::post('backend/stickers', [Stickers::class, 'store'])->middleware(['auth'])->name('backend.stickers.store');
Route::get('backend/stickers/{id}', [Stickers::class, 'show'])->middleware(['auth'])->name('backend.stickers.show');
Route::get('backend/stickers/{id}/edit', [Stickers::class, 'edit'])->middleware(['auth'])->name('backend.stickers.edit');
Route::post('backend/stickers/update', [Stickers::class, 'update'])->middleware(['auth'])->name('backend.stickers.update');
Route::post('backend/stickers/delete', [Stickers::class, 'destroy'])->middleware(['auth'])->name('backend.stickers.delete');
Route::get('backend/backgrounds', [Backgrounds::class, 'index'])->middleware(['auth'])->name('backend.backgrounds');
Route::get('backend/backgrounds/create', [Backgrounds::class, 'create'])->middleware(['auth'])->name('backend.backgrounds.create');
Route::post('backend/backgrounds', [Backgrounds::class, 'store'])->middleware(['auth'])->name('backend.backgrounds.store');
Route::get('backend/backgrounds/{id}', [Backgrounds::class, 'show'])->middleware(['auth'])->name('backend.backgrounds.show');
Route::get('backend/backgrounds/{id}/edit', [Backgrounds::class, 'edit'])->middleware(['auth'])->name('backend.backgrounds.edit');
Route::post('backend/backgrounds/update', [Backgrounds::class, 'update'])->middleware(['auth'])->name('backend.backgrounds.update');
Route::post('backend/backgrounds/delete', [Backgrounds::class, 'destroy'])->middleware(['auth'])->name('backend.backgrounds.delete');
Route::get('backend/seal_designs', [Seal_Designs::class, 'index'])->middleware(['auth'])->name('backend.seal_designs');
Route::get('backend/seal_designs/create', [Seal_Designs::class, 'create'])->middleware(['auth'])->name('backend.seal_designs.create');
Route::post('backend/seal_designs', [Seal_Designs::class, 'store'])->middleware(['auth'])->name('backend.seal_designs.store');
Route::get('backend/seal_designs/{id}', [Seal_Designs::class, 'show'])->middleware(['auth'])->name('backend.seal_designs.show');
Route::get('backend/seal_designs/{id}/edit', [Seal_Designs::class, 'edit'])->middleware(['auth'])->name('backend.seal_designs.edit');
Route::post('backend/seal_designs/update', [Seal_Designs::class, 'update'])->middleware(['auth'])->name('backend.seal_designs.update');
Route::post('backend/seal_designs/delete', [Seal_Designs::class, 'destroy'])->middleware(['auth'])->name('backend.seal_designs.delete');
Route::get('backend/envelop_designs', [Envelop_Designs::class, 'index'])->middleware(['auth'])->name('backend.envelop_designs');
Route::get('backend/envelop_designs/create', [Envelop_Designs::class, 'create'])->middleware(['auth'])->name('backend.envelop_designs.create');
Route::post('backend/envelop_designs', [Envelop_Designs::class, 'store'])->middleware(['auth'])->name('backend.envelop_designs.store');
Route::get('backend/envelop_designs/{id}', [Envelop_Designs::class, 'show'])->middleware(['auth'])->name('backend.envelop_designs.show');
Route::get('backend/envelop_designs/{id}/edit', [Envelop_Designs::class, 'edit'])->middleware(['auth'])->name('backend.envelop_designs.edit');
Route::post('backend/envelop_designs/update', [Envelop_Designs::class, 'update'])->middleware(['auth'])->name('backend.envelop_designs.update');
Route::post('backend/envelop_designs/delete', [Envelop_Designs::class, 'destroy'])->middleware(['auth'])->name('backend.envelop_designs.delete');
Route::get('backend/envelop_design_parts', [Envelop_Design_Parts::class, 'index'])->middleware(['auth'])->name('backend.envelop_design_parts');
Route::get('backend/envelop_design_parts/create', [Envelop_Design_Parts::class, 'create'])->middleware(['auth'])->name('backend.envelop_design_parts.create');
Route::post('backend/envelop_design_parts', [Envelop_Design_Parts::class, 'store'])->middleware(['auth'])->name('backend.envelop_design_parts.store');
Route::get('backend/envelop_design_parts/{id}', [Envelop_Design_Parts::class, 'show'])->middleware(['auth'])->name('backend.envelop_design_parts.show');
Route::get('backend/envelop_design_parts/{id}/edit', [Envelop_Design_Parts::class, 'edit'])->middleware(['auth'])->name('backend.envelop_design_parts.edit');
Route::post('backend/envelop_design_parts/update', [Envelop_Design_Parts::class, 'update'])->middleware(['auth'])->name('backend.envelop_design_parts.update');
Route::post('backend/envelop_design_parts/delete', [Envelop_Design_Parts::class, 'destroy'])->middleware(['auth'])->name('backend.envelop_design_parts.delete');
Route::get('backend/music_categories', [Music_Categories::class, 'index'])->middleware(['auth'])->name('backend.music_categories');
Route::get('backend/music_categories/create', [Music_Categories::class, 'create'])->middleware(['auth'])->name('backend.music_categories.create');
Route::post('backend/music_categories', [Music_Categories::class, 'store'])->middleware(['auth'])->name('backend.music_categories.store');
Route::get('backend/music_categories/{id}', [Music_Categories::class, 'show'])->middleware(['auth'])->name('backend.music_categories.show');
Route::get('backend/music_categories/{id}/edit', [Music_Categories::class, 'edit'])->middleware(['auth'])->name('backend.music_categories.edit');
Route::post('backend/music_categories/update', [Music_Categories::class, 'update'])->middleware(['auth'])->name('backend.music_categories.update');
Route::post('backend/music_categories/delete', [Music_Categories::class, 'destroy'])->middleware(['auth'])->name('backend.music_categories.delete');
Route::get('backend/attendance_question', [Attendance_Question::class, 'index'])->middleware(['auth'])->name('backend.attendance_question');
Route::get('backend/attendance_question/create', [Attendance_Question::class, 'create'])->middleware(['auth'])->name('backend.attendance_question.create');
Route::post('backend/attendance_question', [Attendance_Question::class, 'store'])->middleware(['auth'])->name('backend.attendance_question.store');
Route::get('backend/attendance_question/{id}', [Attendance_Question::class, 'show'])->middleware(['auth'])->name('backend.attendance_question.show');
Route::get('backend/attendance_question/{id}/edit', [Attendance_Question::class, 'edit'])->middleware(['auth'])->name('backend.attendance_question.edit');
Route::post('backend/attendance_question/update', [Attendance_Question::class, 'update'])->middleware(['auth'])->name('backend.attendance_question.update');
Route::post('backend/attendance_question/delete', [Attendance_Question::class, 'destroy'])->middleware(['auth'])->name('backend.attendance_question.delete');
Route::get('backend/cont_and_comm', [cont_and_comm::class, 'index'])->middleware(['auth'])->name('backend.cont_and_comm');
Route::get('backend/cont_and_comm/create', [cont_and_comm::class, 'create'])->middleware(['auth'])->name('backend.cont_and_comm.create');
Route::post('backend/cont_and_comm', [cont_and_comm::class, 'store'])->middleware(['auth'])->name('backend.cont_and_comm.store');
Route::get('backend/cont_and_comm/{id}', [cont_and_comm::class, 'show'])->middleware(['auth'])->name('backend.cont_and_comm.show');
Route::get('backend/cont_and_comm/{id}/edit', [cont_and_comm::class, 'edit'])->middleware(['auth'])->name('backend.cont_and_comm.edit');
Route::post('backend/cont_and_comm/update', [cont_and_comm::class, 'update'])->middleware(['auth'])->name('backend.cont_and_comm.update');
Route::post('backend/cont_and_comm/delete', [cont_and_comm::class, 'destroy'])->middleware(['auth'])->name('backend.cont_and_comm.delete');
Route::get('backend/countdown_timer', [Countdown_Timer::class, 'index'])->middleware(['auth'])->name('backend.countdown_timer');
Route::get('backend/countdown_timer/create', [Countdown_Timer::class, 'create'])->middleware(['auth'])->name('backend.countdown_timer.create');
Route::post('backend/countdown_timer', [Countdown_Timer::class, 'store'])->middleware(['auth'])->name('backend.countdown_timer.store');
Route::get('backend/countdown_timer/{id}', [Countdown_Timer::class, 'show'])->middleware(['auth'])->name('backend.countdown_timer.show');
Route::get('backend/countdown_timer/{id}/edit', [Countdown_Timer::class, 'edit'])->middleware(['auth'])->name('backend.countdown_timer.edit');
Route::post('backend/countdown_timer/update', [Countdown_Timer::class, 'update'])->middleware(['auth'])->name('backend.countdown_timer.update');
Route::post('backend/countdown_timer/delete', [Countdown_Timer::class, 'destroy'])->middleware(['auth'])->name('backend.countdown_timer.delete');
Route::get('backend/link', [Link::class, 'index'])->middleware(['auth'])->name('backend.link');
Route::get('backend/link/create', [Link::class, 'create'])->middleware(['auth'])->name('backend.link.create');
Route::post('backend/link', [Link::class, 'store'])->middleware(['auth'])->name('backend.link.store');
Route::get('backend/link/{id}', [Link::class, 'show'])->middleware(['auth'])->name('backend.link.show');
Route::get('backend/link/{id}/edit', [Link::class, 'edit'])->middleware(['auth'])->name('backend.link.edit');
Route::post('backend/link/update', [Link::class, 'update'])->middleware(['auth'])->name('backend.link.update');
Route::post('backend/link/delete', [Link::class, 'destroy'])->middleware(['auth'])->name('backend.link.delete');
Route::get('backend/optional_question', [Optional_Question::class, 'index'])->middleware(['auth'])->name('backend.optional_question');
Route::get('backend/optional_question/create', [Optional_Question::class, 'create'])->middleware(['auth'])->name('backend.optional_question.create');
Route::post('backend/optional_question', [Optional_Question::class, 'store'])->middleware(['auth'])->name('backend.optional_question.store');
Route::get('backend/optional_question/{id}', [Optional_Question::class, 'show'])->middleware(['auth'])->name('backend.optional_question.show');
Route::get('backend/optional_question/{id}/edit', [Optional_Question::class, 'edit'])->middleware(['auth'])->name('backend.optional_question.edit');
Route::post('backend/optional_question/update', [Optional_Question::class, 'update'])->middleware(['auth'])->name('backend.optional_question.update');
Route::post('backend/optional_question/delete', [Optional_Question::class, 'destroy'])->middleware(['auth'])->name('backend.optional_question.delete');
Route::get('backend/text_question', [Text_Question::class, 'index'])->middleware(['auth'])->name('backend.text_question');
Route::get('backend/text_question/create', [Text_Question::class, 'create'])->middleware(['auth'])->name('backend.text_question.create');
Route::post('backend/text_question', [Text_Question::class, 'store'])->middleware(['auth'])->name('backend.text_question.store');
Route::get('backend/text_question/{id}', [Text_Question::class, 'show'])->middleware(['auth'])->name('backend.text_question.show');
Route::get('backend/text_question/{id}/edit', [Text_Question::class, 'edit'])->middleware(['auth'])->name('backend.text_question.edit');
Route::post('backend/text_question/update', [Text_Question::class, 'update'])->middleware(['auth'])->name('backend.text_question.update');
Route::post('backend/text_question/delete', [Text_Question::class, 'destroy'])->middleware(['auth'])->name('backend.text_question.delete');
Route::get('backend/social_network', [Social_Network::class, 'index'])->middleware(['auth'])->name('backend.social_network');
Route::get('backend/social_network/create', [Social_Network::class, 'create'])->middleware(['auth'])->name('backend.social_network.create');
Route::post('backend/social_network', [Social_Network::class, 'store'])->middleware(['auth'])->name('backend.social_network.store');
Route::get('backend/social_network/{id}', [Social_Network::class, 'show'])->middleware(['auth'])->name('backend.social_network.show');
Route::get('backend/social_network/{id}/edit', [Social_Network::class, 'edit'])->middleware(['auth'])->name('backend.social_network.edit');
Route::post('backend/social_network/update', [Social_Network::class, 'update'])->middleware(['auth'])->name('backend.social_network.update');
Route::post('backend/social_network/delete', [Social_Network::class, 'destroy'])->middleware(['auth'])->name('backend.social_network.delete');
Route::get('backend/memorial_request', [Memorial_Request::class, 'index'])->middleware(['auth'])->name('backend.memorial_request');
Route::get('backend/memorial_request/create', [Memorial_Request::class, 'create'])->middleware(['auth'])->name('backend.memorial_request.create');
Route::post('backend/memorial_request', [Memorial_Request::class, 'store'])->middleware(['auth'])->name('backend.memorial_request.store');
Route::get('backend/memorial_request/{id}', [Memorial_Request::class, 'show'])->middleware(['auth'])->name('backend.memorial_request.show');
Route::get('backend/memorial_request/{id}/edit', [Memorial_Request::class, 'edit'])->middleware(['auth'])->name('backend.memorial_request.edit');
Route::post('backend/memorial_request/update', [Memorial_Request::class, 'update'])->middleware(['auth'])->name('backend.memorial_request.update');
Route::post('backend/memorial_request/delete', [Memorial_Request::class, 'destroy'])->middleware(['auth'])->name('backend.memorial_request.delete');
Route::get('backend/user_text', [USER_TEXT::class, 'index'])->middleware(['auth'])->name('backend.user_text');
Route::get('backend/user_text/create', [USER_TEXT::class, 'create'])->middleware(['auth'])->name('backend.user_text.create');
Route::post('backend/user_text', [USER_TEXT::class, 'store'])->middleware(['auth'])->name('backend.user_text.store');
Route::get('backend/user_text/{id}', [USER_TEXT::class, 'show'])->middleware(['auth'])->name('backend.user_text.show');
Route::get('backend/user_text/{id}/edit', [USER_TEXT::class, 'edit'])->middleware(['auth'])->name('backend.user_text.edit');
Route::post('backend/user_text/update', [USER_TEXT::class, 'update'])->middleware(['auth'])->name('backend.user_text.update');
Route::post('backend/user_text/delete', [USER_TEXT::class, 'destroy'])->middleware(['auth'])->name('backend.user_text.delete');
Route::get('backend/user_images', [User_Images::class, 'index'])->middleware(['auth'])->name('backend.user_images');
Route::get('backend/user_images/create', [User_Images::class, 'create'])->middleware(['auth'])->name('backend.user_images.create');
Route::post('backend/user_images', [User_Images::class, 'store'])->middleware(['auth'])->name('backend.user_images.store');
Route::get('backend/user_images/{id}', [User_Images::class, 'show'])->middleware(['auth'])->name('backend.user_images.show');
Route::get('backend/user_images/{id}/edit', [User_Images::class, 'edit'])->middleware(['auth'])->name('backend.user_images.edit');
Route::post('backend/user_images/update', [User_Images::class, 'update'])->middleware(['auth'])->name('backend.user_images.update');
Route::post('backend/user_images/delete', [User_Images::class, 'destroy'])->middleware(['auth'])->name('backend.user_images.delete');
Route::get('backend/card_video', [Card_Video::class, 'index'])->middleware(['auth'])->name('backend.card_video');
Route::get('backend/card_video/create', [Card_Video::class, 'create'])->middleware(['auth'])->name('backend.card_video.create');
Route::post('backend/card_video', [Card_Video::class, 'store'])->middleware(['auth'])->name('backend.card_video.store');
Route::get('backend/card_video/{id}', [Card_Video::class, 'show'])->middleware(['auth'])->name('backend.card_video.show');
Route::get('backend/card_video/{id}/edit', [Card_Video::class, 'edit'])->middleware(['auth'])->name('backend.card_video.edit');
Route::post('backend/card_video/update', [Card_Video::class, 'update'])->middleware(['auth'])->name('backend.card_video.update');
Route::post('backend/card_video/delete', [Card_Video::class, 'destroy'])->middleware(['auth'])->name('backend.card_video.delete');
Route::get('backend/card_recipients', [Card_Recipients::class, 'index'])->middleware(['auth'])->name('backend.card_recipients');
Route::get('backend/card_recipients/create', [Card_Recipients::class, 'create'])->middleware(['auth'])->name('backend.card_recipients.create');
Route::post('backend/card_recipients', [Card_Recipients::class, 'store'])->middleware(['auth'])->name('backend.card_recipients.store');
Route::get('backend/card_recipients/{id}', [Card_Recipients::class, 'show'])->middleware(['auth'])->name('backend.card_recipients.show');
Route::get('backend/card_recipients/{id}/edit', [Card_Recipients::class, 'edit'])->middleware(['auth'])->name('backend.card_recipients.edit');
Route::post('backend/card_recipients/update', [Card_Recipients::class, 'update'])->middleware(['auth'])->name('backend.card_recipients.update');
Route::post('backend/card_recipients/delete', [Card_Recipients::class, 'destroy'])->middleware(['auth'])->name('backend.card_recipients.delete');
Route::get('backend/widgets_ticket_type', [Widgets_Ticket_Type::class, 'index'])->middleware(['auth'])->name('backend.widgets_ticket_type');
Route::get('backend/widgets_ticket_type/create', [Widgets_Ticket_Type::class, 'create'])->middleware(['auth'])->name('backend.widgets_ticket_type.create');
Route::post('backend/widgets_ticket_type', [Widgets_Ticket_Type::class, 'store'])->middleware(['auth'])->name('backend.widgets_ticket_type.store');
Route::get('backend/widgets_ticket_type/{id}', [Widgets_Ticket_Type::class, 'show'])->middleware(['auth'])->name('backend.widgets_ticket_type.show');
Route::get('backend/widgets_ticket_type/{id}/edit', [Widgets_Ticket_Type::class, 'edit'])->middleware(['auth'])->name('backend.widgets_ticket_type.edit');
Route::post('backend/widgets_ticket_type/update', [Widgets_Ticket_Type::class, 'update'])->middleware(['auth'])->name('backend.widgets_ticket_type.update');
Route::post('backend/widgets_ticket_type/delete', [Widgets_Ticket_Type::class, 'destroy'])->middleware(['auth'])->name('backend.widgets_ticket_type.delete');
Route::get('backend/ticket_types', [Ticket_Types::class, 'index'])->middleware(['auth'])->name('backend.ticket_types');
Route::get('backend/ticket_types/create', [Ticket_Types::class, 'create'])->middleware(['auth'])->name('backend.ticket_types.create');
Route::post('backend/ticket_types', [Ticket_Types::class, 'store'])->middleware(['auth'])->name('backend.ticket_types.store');
Route::get('backend/ticket_types/{id}', [Ticket_Types::class, 'show'])->middleware(['auth'])->name('backend.ticket_types.show');
Route::get('backend/ticket_types/{id}/edit', [Ticket_Types::class, 'edit'])->middleware(['auth'])->name('backend.ticket_types.edit');
Route::post('backend/ticket_types/update', [Ticket_Types::class, 'update'])->middleware(['auth'])->name('backend.ticket_types.update');
Route::post('backend/ticket_types/delete', [Ticket_Types::class, 'destroy'])->middleware(['auth'])->name('backend.ticket_types.delete');
Route::get('backend/music_files', [Music_Files::class, 'index'])->middleware(['auth'])->name('backend.music_files');
Route::get('backend/music_files/create', [Music_Files::class, 'create'])->middleware(['auth'])->name('backend.music_files.create');
Route::post('backend/music_files', [Music_Files::class, 'store'])->middleware(['auth'])->name('backend.music_files.store');
Route::get('backend/music_files/{id}', [Music_Files::class, 'show'])->middleware(['auth'])->name('backend.music_files.show');
Route::get('backend/music_files/{id}/edit', [Music_Files::class, 'edit'])->middleware(['auth'])->name('backend.music_files.edit');
Route::post('backend/music_files/update', [Music_Files::class, 'update'])->middleware(['auth'])->name('backend.music_files.update');
Route::post('backend/music_files/delete', [Music_Files::class, 'destroy'])->middleware(['auth'])->name('backend.music_files.delete');
/*[[routeResouceLine]]*/
