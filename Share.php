<?php
ob_start();
define("Adabiyot_va_ona_tili","1151929874:AAETtkMsFipGfcM8OEnHxrtI22sderWXqPk"); // Token o'rni
$admin = "683350256"; // Admin ID

function bot($method,$datas=[]){
$url = http_build_query($datas);
return json_decode(file_get_contents("https://api.telegram.org/bot".Adabiyot_va_ona_tili."/".$method."?".$url));
}

// @Noname_hacker_01 tomonidan @Adabiyot_va_ona_tili kanali orqali tarqatildi.
$Adabiyot_va_ona_tili = json_decode(file_get_contents("php://input"));
$message = $Adabiyot_va_ona_tili->message;
$mid = $message->message_id;
$cid = $message->chat->id;
$tx = $message->text;
$uid = $message->from->id;
$name = str_replace(["[","]","(",")","*","_","`"],["","","","","","",""],$message->from->first_name);

$ch = $Adabiyot_va_ona_tili->channel_post;
$chmid = $ch->message_id;
$chid = $ch->chat->id;
$chuser = $ch->chat->username;
$chcaption = $ch->caption;
$chvideo = $ch->video;
$chaudio = $ch->audio;
$chtext = $ch->text;
$chphoto = $ch->photo;
$chdoc = $ch->document;
$chsticker = $ch->sticker;
$chanimation = $ch->animation;

if($tx == "/start"){
bot('sendMessage',[
'chat_id'=>$cid,
'parse_mode'=>"markdown",
'text'=>"✅* Ushbu bot kanallardagi postga avtomatik kanal reklamasini joylash uchun ishlab chiqildi!
📃 Bu botni kanalingizga admin qiling va kanalingizdagi postlarga avtomatik kanalingiz nomi qo'yiladi!😊*

📡 *Kanalimiz:* [Adabiyot_va_ona_tili](t.me/Adabiyot_va_ona_tili)
🎓 *Dasturchi:* [Noname_hacker_01](https://t.me/Noname_hacker_01)",
'disable_web_page_preview'=>true,
]);
}

if ($chdoc or $chphoto or $chaudio or $chvideo or $chsticker or $chanimation){
bot('editMessageCaption',[
 'chat_id'=>$chid,
'message_id'=>$chmid,
'caption'=>"$chcaption\n\n⬇Bizga qo'shiling⬇\n📡 @$chuser\nBu kanaldagi $chmid xabar",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"♻ Do'stlarga ulashish", "url"=>"https://t.me/share/url?url=https://telegram.me/$chuser/$chmid"]],
]
])
]);
}

if ($chtext){
bot('editmessagetext',[
 'chat_id'=>$chid,
'message_id'=>$chmid,
'text'=>"$chtext\n\n⬇Bizga qo'shiling⬇\n📡 @$chuser\nBu kanaldagi $chmid xabar",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"♻ Do'stlarga ulashish", "url"=>"https://t.me/share/url?url=https://telegram.me/$chuser/$chmid"]],
]
])
]);
}

// @Noname_hacker_01 tomonidan @Adabiyot_va_ona_tili kanali orqali tarqatildi.
?>



