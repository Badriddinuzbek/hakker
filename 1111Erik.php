
<?php
ob_start();
define('API_KEY', '449161744:AAFbHc4skkx1Oxrywx6fLedGYT_Of0RKtLY');
//tokenni yozing
$admin = "544301350"; 
//ozizni id raqamizni yozing
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$mtext = $message->text;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");
//bu yerni o'zgartirishingiz mumkin.


// start
		if(stripos($mtext,"") !== false){
  $text = "";
  $a=json_encode(bot(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ])));
}



$menu = [["aloqa"]];



// start
		if(stripos($mtext,"/start") !== false){
  $text = "๐ Assalomu alaykum men endi gruppalarni qizdiraman!

๐ Kim gruppada yozsa birinchi javob qaytaraman!
@RUXLARUZ bizga qo'shil sen xam!!
๐ฎโโ Meni gruppalarga qo'shing!";
  $a=json_encode(bot(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$text,
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   
          [['text'=>'โ Gruppaga qo`shing','url'=>'https://telegram.me/iErKaToYBoT?startgroup=new']],

 [['text'=>'โ Kanal','url'=>'https://telegram.me/Ruxlaruz']],
          
          [['text'=>'๐ฉ Admin','url'=>'https://telegram.me/OtabekPro']]
          
]
    ])
  ])));
}
// chat
$cfname = $efede['message']['chat']['first_name'];
$cid = $efede["message"]["chat"]["id"];
$clast_name = $efede['message']['chat']['last_name'];
$turi = $efede["message"]["chat"]["type"];

 $url = 'https://daryo.uz/feed/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {

    $line_rss =  ' '.$item->title.' ';
   $line_rss .= ' '.$item->link.' ';
    break;
} 
if ($text == 'Yangiliklar') {
        $keyfd = buildKeyBoard($menu, $onetime = false, $resize = false);
        $content = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "$line_rss \n
Batafsil o'qish uchun linkga bosing!\n \n
Manba: [RUXLARUZ](telegram.me/ruxlaruz) [@ruxlaruz]", 'parse_mode' => 'markdown'];
        xabarYubor($content); 
 
} 
if(stripos($mtext," sana") !== false){
    $keyfd = buildKeyBoard($menu3, $onetime = false, $resize = false);
        $text = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "* O'zbekistonda Bugun* `$bugun-yil` *soat* `$soat` *bo'ldi!*", 'parse_mode' => 'markdown'];
$a=json_encode(bot('sendmessage',[
'reply_to_message_id'=>$mesid,
'chat_id'=>$chat_id,
'text'=>$text,
]));
}
// start
		if(stripos($mtext,"soat") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "โ๏ธ Hozir soat: $soat";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"sana") !== false){
		 $bugun = date('d-M Y',strtotime('5 hour')); 
  $text = "โ๏ธ bugun: $bugun";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
		if(stripos($mtext,"salom") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐ Valekum assalom ukam baxtli bo'ling";
     if(stripos($mtext,"ok") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐ ok";
 $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
} 
if(stripos($mtext,"raxmat") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐ sog' bo'ling";

   if(stripos($mtext,"kimsan") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐ Erikman";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"bilmadim") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "Aldayapti bu xamma narsani biladi";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
	if(stripos($mtext,"nimaga aytilgan gapni topolmayapsan") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "Uzur xojayin oxtaryapman lekin chiqmayapti";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
	if(stripos($mtext,"xa") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐xm xa";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
	if(stripos($mtext,"sotsam") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐iltimos xamma bot do'stlarimni sotsezam mani sotmang mani yaxshi bot bo'laman";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
	if(stripos($mtext,"admin") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐ Admin xozir mashxur ishlar bilan bandlar";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"savol") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐Ufff savol berishorarkanda";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"ovozingni ochir") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐ o'zingiz o'chiring $edname sizga gapirishga so'z bermadim ๐ ";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
} if(stripos($mtext,"rux") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐ฌ Tinchlimi xojayinimi eslab qobsiz ";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"Otabek") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐ xojayinim xozir band edilar nima gapiz bo'sa menga qoldiravering";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"gruppa") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐ถgruppa admini @OtabekPro nazoratchisi @iErKaToYBoT o'rtiqcha gap qilmang";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"ะฐะดะผะธะฝ") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐ฌadminimga til tekkizmang";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
if(stripos($mtext,"https://") !== false){
		$soat = date('H:i', strtotime('5 hour'));
  $text = "๐ฃ Reklama";

$a=json_encode(bot(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$text,
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[

          [['text'=>'โ Gruppaga qo`shing','url'=>'https://telegram.me/iErKaToYBoT?startgroup=new']],
    ]
    ])
  ])));
} $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
  ]));
}
$file_o = __DIR__.'/users/'.$mid.'.json';
file_put_contents($file_o,json_encode($update->message->text));
chmod($file_o,0777);
// gapni o'zgartirgan
if (isset($update->edited_message)){
  //$chat_id1 = $editm->chat->id;
  $eid = $editm->message_id;
  $edname = $editm->from->first_name;
  $jsu = json_decode(file_get_contents(__DIR__.'/users/'.$eid.'.json'));
  $text = "๐  Hoy $edname nega gapingizni o'zgartirdingiz?  Siz oldin nima degan edingiz!";
  $id = $update->edited_message->chat->id;
  bot('sendmessage',[
    'chat_id'=>$id,
    'reply_to_message_id'=>$eid,
    'text'=>$text,
    'parse_mode'=>'html'
  ]);
  $file_o = __DIR__.'/users/'.$eid.'.json';
  file_put_contents($file_o,json_encode($update->edited_message->text));
  //$up = file_get_contents(__DIR__.'/users/'.$eid.'.json');
  //str_replace("edited_message","message",$up);
}

// yangi azo
elseif(isset($update->message-> new_chat_member )){
    $name = $message->from->first_name;
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'text'=>"โ*Assalomu alaykum guruximizga xush kepsiz xuy ketasiz*๐!

*!Siz Haqingizda :*
$name
$edname
$uname
$ufname
$user
$id

๐ฎโโ _Men Bu Guruppaning Quyoshiman!_
โ *ErKaToY*"
    ]);
}

// chiqib ketdi
elseif(isset($update->message-> left_chat_member )){
    $name = $message->from->first_name;
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'text'=>"๐ฃ $name gruppamizdan chiqib ketdi. ketsangiz ketavering sizsiz xam gruppamiz kamayib qolmaymiz๐ฃ"
    ]);
}
// chiqib ketdi
elseif(isset($update->message-> leaveChat )){
    $name = $message->from->first_name;
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"๐ฃ $name gruppamizdan chiqib ketdi. ketsangiz ketavering sizsiz xam gruppamiz kamayib qolmaydi๐ฃ"
    ]);
}



if ($mtext == '/pin' and $chat_ID < 0 and $admin and isset($update['message']['reply_to_message']['message_id'])) {
    pinChatMessage($chat_ID, $update['message']['reply_to_message']['message_id']);
    sm($chatID, 'Messaggio fissato!');
    exit;
}
if ($text == '/feedback' || $text == "aloqa"){
            $keyfd = buildForceReply($selective=false);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "Xabar matnini kiriting", 'parse_mode' => 'markdown'];
            xabarYubor($content);
        }

        if ($sreply == 'Xabar matnini kiriting'){

            $option = $menu;
            $keyfd = buildKeyBoard($option, $onetime = false);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "**Xabaringiz yaqin fursatda ko'rib chiqiladi!**", 'parse_mode' => 'markdown'];
            xabarYubor($content);

            $option = [["javob#$chat_id"],["Bekor qilish"]];
            $keyfd = buildKeyBoard($option, $onetime = false);
            $content = ['chat_id' => $admin, 'reply_markup' => $keyfd, 'text' => "*Sizga $ufname dan xabar keldi:*

*Xabar kelgan vaxti:*  `$bugun $soat`

*Xabar matni:*
$text \n \n \n \nโน๏ธ*Ismi:*`$ufname` \n *Familiyasi:* `$uname` \n *Login:* @$ulogin \n * ๐ ID:* $uid \n\n ", 'parse_mode' => 'markdown'];
            xabarYubor($content);
        }

        $inreg = explode("#",$text);
        $intype  = $inreg[0];
        $us_id  = $inreg[1];

        if ($intype == 'javob') {

            $keyfd = buildForceReply($selective=true);
            $content = ['chat_id' => $chat_id, 'reply_markup' => $keyfd, 'text' => "javob matnini kiriting#$us_id", 'parse_mode' => 'markdown'];
            xabarYubor($content);
        }

        $inreg = explode("#",$sreply);
        $intype  = $inreg[0];
        $us_id  = $inreg[1];

        if ($intype == 'javob matnini kiriting'){

            $option = $menu;
            $keyfd = buildKeyBoard($option, $onetime = false);
            $content = ['chat_id' => $us_id, 'reply_markup' => $keyfd, 'text' => $text, 'parse_mode' => 'markdown'];
            xabarYubor($content);

            $option = $menu;
            $keyfd = buildKeyBoard($option, $onetime = false);
            $content = ['chat_id' => $admin, 'reply_markup' => $keyfd, 'text' => "Xabar yetkazildi", 'parse_mode' => 'markdown'];
            xabarYubor($content);
        }

    