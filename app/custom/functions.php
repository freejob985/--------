<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
ini_set('max_execution_time', 0);


function lang_word_ar($id)
{
    $word=trim($id);
    if (Session::get('locale') == "en") {
        $translation = DB::table('translation')->get()->where('id',$id)->first();
      
      $lang=  $translation->English;
    } else {
        $translation = DB::table('translation')->get()->where('id',$id)->first();
        
        $lang=$translation->Arabic;
    }
    return $lang;
}
function lang_word($word)
{
    $word=$word;
    if (Session::get('locale') == "en") {
        $translation = DB::table('translation')->get()->where('Word',$word)->first();
      
      $lang=  $translation->English;
    } else {
        $translation = DB::table('translation')->get()->where('Word',$word)->first();
        
        $lang=$translation->Arabic;
    }
    return $lang;
}

function lang_word_($word)
{
    $word=trim($word);
    if (Session::get('locale') == "en") {
        $translation = DB::table('translation')->whereLike('Word','LIKE','%'.$word.'%')->get();
      
      $lang=  $translation->English;
    } else {
        $translation = DB::table('translation')->where('Word','LIKE','%'.$word.'%' )->get();
        $lang=  $translation->Arabic;
    }
    return $lang;
}
function locale()
{
    if (Session::get('locale') == "en") {
    $locale="English";
    } else {
    $locale="Arabic";
    }
    return $locale;
}
function Upload(Request $request, $w, $h, $path)
{
    if ($request->hasFile('Image')) {
        $image_tmp = Input::file('Image');
        if ($image_tmp->isValid()) {
            $ex = $image_tmp->getClientOriginalExtension();
            $fileName = rand(111, 9999) . '.' . $ex;
            $banner_path = public_path() . $path . $fileName;
            $img = Image::make($image_tmp)->resize($w, $h)->save($banner_path);
        }
        return $fileName;
    }
}
function Upload_(Request $request, $w, $h, $path, $old)
{
    if ($request->hasFile('Image')) {
        $filedb = $old;
        $DelFilePath = public_path() . $path . $filedb;
        if (file_exists($DelFilePath)) {
            unlink($DelFilePath);
        } else {
        }
        $image_tmp = Input::file('Image');
        if ($image_tmp->isValid()) {
            $ex = $image_tmp->getClientOriginalExtension();
            $fileName = rand(111, 9999) . '.' . $ex;
            $banner_path = public_path($path . $fileName);
            $img = Image::make($image_tmp)->resize($w, $h)->save($banner_path);
            return $fileName;
        }
    } else {
        $fileName = $old;
        return $fileName;
    }
}
function UP_EX(Request $request, $w, $h, $path, $old, $filname, $has)
{
    if ($request->hasFile($filname)) {
        $filedb = $old;
        $DelFilePath = public_path() . $path . $filedb;
        if (file_exists($DelFilePath)) {
            unlink($DelFilePath);
        } else {
        }
        $image_tmp = Input::file($filname);
        if ($image_tmp->isValid()) {
            $ex = $image_tmp->getClientOriginalExtension();
            $fileName = rand(111, 9999) . $has . '.' . $ex;
            $banner_path = public_path($path . $fileName);
            $img = Image::make($image_tmp)->resize($w, $h)->save($banner_path);
            return $fileName;
        }
    } else {
        $fileName = $old;
        return $fileName;
    }
}

function Up_ِADD(Request $request, $w, $h, $path, $filname, $has)
{
    if ($request->hasFile($filname)) {
        $image_tmp = Input::file($filname);
        if ($image_tmp->isValid()) {
            $ex = $image_tmp->getClientOriginalExtension();
            $fileName = rand(111, 9999) . $has . '.' . $ex;
            $banner_path = public_path() . $path . $fileName;
            $img = Image::make($image_tmp)->resize($w, $h)->save($banner_path);
        }
        return $fileName;
    }
}
function move(Request $request, $path, $name_file)
{
    if ($request->hasFile($name_file)) {
        $file = Input::file($name_file);
        $extension = $file->getClientOriginalExtension();
        $filename = rand(111, 99999) . "_mrbean" . '.' . $extension;
        $file->move(public_path() . $path, $filename);
        return $filename;

    }
}
function move_(Request $request, $path, $name_file)
{
    if ($request->hasFile($name_file)) {
        $file = Input::file($name_file);
        $extension = $file->getClientOriginalExtension();
        $filename = rand(111, 99999) . '.' . $extension;
        $file->move(public_path() . $path, $filename);
        return $filename;
    }
}
function DelFilePath($pathe, $photo)
{
    $DelFilePath = public_path() . $pathe . $photo;
    if (file_exists($DelFilePath)) {
        unlink($DelFilePath);
        return true;
    } else {
        return false;
    }
}
function latest_additions($tabel)
{
    $array = array();
    $array[] = "label label-primary";
    $array[] = "label label-success";
    $array[] = "label label-info";
    $array[] = "label label-warning";
    $array[] = "label label-danger";
    $array[] = "label label-default";
    $rand = rand(0, 5);
    DB::table('latest_additions')->insert([
        'Subject' => $tabel,
        'Calcinosis' => $array[$rand],
        'user' => Auth::user()->name,
        'time' => time(),
    ]);
}

function btn($tabel, $font)
{
    $array = array();
    $array[] = "btn btn-danger";
    $array[] = "btn btn-primary";
    $array[] = "btn btn-success";
    $array[] = "btn btn-info";
    $array[] = "btn btn-warning";
    $array[] = "btn btn-danger";
    $rand = rand(0, 5);
    $ax = $array[$rand];

    echo "<a href='' style='font-size: $font !important;font-weight: 600;' class='$ax'>$tabel</a";
}
function set_lab_lang($lang)
{
    if ($lang == "Arabic") {
        $label = "<span class='label label-success'>$lang</span>";
    } else {
        $label = "<span class='label label-warning'>$lang</span>";
    }
    return $label;

}
function function_that_shortens_text_but_doesnt_cutoff_words($text, $length)
{
    if (strlen($text) > $length) {
        $text = substr($text, 0, strpos($text, ' ', $length));
    }

    return $text;
}
function time_since($start)
{
    $end = time();
    $diff = $end - $start;
    $days = floor($diff / 86400); //calculate the days
    $diff = $diff - ($days * 86400); // subtract the days
    $hours = floor($diff / 3600); // calculate the hours
    $diff = $diff - ($hours * 3600); // subtract the hours
    $mins = floor($diff / 60); // calculate the minutes
    $diff = $diff - ($mins * 60); // subtract the mins
    $secs = $diff; // what's left is the seconds;
    if ($secs != 0) {
        $secs .= " seconds";
        if ($secs == "1 seconds") {
            $secs = "1 second";
        }

    } else {
        $secs = '';
    }

    if ($mins != 0) {
        $mins .= " mins ";
        if ($mins == "1 mins ") {
            $mins = "1 min ";
        }

        $secs = '';
    } else {
        $mins = '';
    }

    if ($hours != 0) {
        $hours .= " hours ";
        if ($hours == "1 hours ") {
            $hours = "1 hour ";
        }

        $secs = '';
    } else {
        $hours = '';
    }

    if ($days != 0) {
        $days .= " days ";
        if ($days == "1 days ") {
            $days = "1 day ";
        }

        $mins = '';
        $secs = '';
        if ($days == "-1 days ") {
            $days = $hours = $mins = '';
            $secs = "less than 10 seconds";
        }
    } else {
        $days = '';
    }

    return "$days $hours $mins $secs ago";
}
function set_lab_social($lang)
{
    $lang = strtoupper($lang);

    if ($lang == "FACEBOOK") {
        $label = "<span class='label label-primary'>$lang</span>";
    } else if ($lang == "INSTAGRAM") {
        $label = "<span class='label label-success'>$lang</span>";
    } else if ($lang == "TWITTER") {
        $label = "<span class='label label-info'>$lang</span>";
    } else if ($lang == "TWITTER") {
        $label = "<span class='label label-danger'>$lang</span>";
    } else {
        $label = "<span class='label label-danger'>$lang</span>";

    }
    return $label;

}
function nl2br_($value)
{
    return nl2br(e($value), false);
}
function visits($pag)
{
    if (DB::table('visits')->where('path', request()->fullUrl())->exists() == true) {
        if (DB::table('visits')->where('ip', request()->ip())->exists() == false) {
            $visits = DB::table('visits')->get();
            $visits = DB::table('visits')->get()->where('path', request()->fullUrl())->first();
            $id = $visits->id;
            $visits_pag = $visits->Visits;
            $vist_count = 1;
            DB::table('visits')->where('id', $id)->increment('Visits', $vist_count);
        } else {
        }
    } else {
        $array = array();
        $array[] = "label label-primary";
        $array[] = "label label-success";
        $array[] = "label label-info";
        $array[] = "label label-warning";
        $array[] = "label label-danger";
        $array[] = "label label-default";
        $rand = rand(0, 5);
        DB::table('visits')->insert([
            'ip' => request()->ip(),
            'path' => request()->fullUrl(),
            'Visits' => 1,
            'Link' => request()->fullUrl(),
            'page' => $pag,
            'label' => $array[$rand],
            'time' => time(),
        ]);
    }
}

function checkIfLinkyouTube($url)
{
    $rx = '~
                ^(?:https?://)?              # Optional protocol
                 (?:www\.)?                  # Optional subdomain
                 (?:youtube\.com|youtu\.be)  # Mandatory domain name
                 /watch\?v=([^&]+)           # URI with video id as capture group 1
                 ~x';
    $has_match = preg_match($rx, $url, $matches);
    if (isset($matches[1]) && $matches[1] != '') {
        return true;
    } else {
        return false;
    }
}
function embed($url)
{
    parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
    $a = $my_array_of_vars['v'];
    return $youtube = "<iframe width='560' height='315' src='https://www.youtube.com/embed/$a' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
    // Output: C4kxS1ksqtw
}
function NOTYFY_CLASS($CLASS, $true, $flase)
{
    if (strcmp($CLASS, $CLASS) == 0) {
        echo $key = $true;
    } else {
        echo $key = $flase;
    }
}
function vimeo($vimeo)
{
    $vimeo = 'https://vimeo.com/389465283';
    $a = (int) substr(parse_url($vimeo, PHP_URL_PATH), 1);
    echo "<iframe src='https://player.vimeo.com/video/$a' width='640' height='338' frameborder='0' allow='autoplay; fullscreen' allowfullscreen></iframe>";
}
function cheek_vidoe_online($url)
{
    if (strpos($url, 'https://vimeo') !== false) {
        $a = (int) substr(parse_url($url, PHP_URL_PATH), 1);
        echo "<iframe src='https://player.vimeo.com/video/$a' width='300' height='300' frameborder='0' allow='autoplay; fullscreen' allowfullscreen></iframe>";
    } else {
        parse_str(parse_url($url, PHP_URL_QUERY), $my_array_of_vars);
        $a = $my_array_of_vars['v'];
        echo $youtube = "<iframe width='300' height='300' src='https://www.youtube.com/embed/$a' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
    }
}
function remove_words($words)
{
    $words = preg_replace('/0/', '', $words); // remove numbers
    $words = preg_replace('/1/', '', $words); // remove numbers
    $words = preg_replace('/2/', '', $words); // remove numbers
    $words = preg_replace('/3/', '', $words); // remove numbers
    $words = preg_replace('/4/', '', $words); // remove numbers
    $words = preg_replace('/5/', '', $words); // remove numbers
    $words = preg_replace('/6/', '', $words); // remove numbers
    $words = preg_replace('/7/', '', $words); // remove numbers
    $words = preg_replace('/8/', '', $words); // remove numbers
    $words = preg_replace('/9/', '', $words); // remove numbers
    return trim($words);
}
function set_first_cher($firstCharacter)
{
    return $firstCharacter = strtoupper(substr($firstCharacter, 0, 1));
}
function set_first_cher_coler($firstCharacter)
{
    $firstCharacter = strtoupper(substr($firstCharacter, 0, 1));
#    $array = array("#2aa556", "#40b7ff", "#ff7f40", "#ff40a0", "#ff4040", "#acb4b3", "#3d8346", "#2b4970", "#2b706d", "#217618", "#27dd93", "#7727dd", "#27badd", "#c0c7b1", "#e8c177", "#77e2e8", "#e877b5", "#7f3b60", "#3b4c7f", "#7f3b7c", "#0e97db", "#0edb9a", "##5796b6", "#b66957", "#3b7e7f", "#27aadd");
    $array = array("#2aa556", "#40b7ff", "#ff7f40", "#ff40a0", "#ff4040", "#acb4b3", "#3d8346", "#2b4970", "#2b706d", "#217618", "#27dd93", "#7727dd", "#27badd", "#c0c7b1", "#e8c177", "#77e2e8", "#e877b5", "#7f3b60", "#3b4c7f", "#7f3b7c", "#0e97db", "#0edb9a", "##5796b6", "#b66957", "#3b7e7f", "#27aadd");

    if ($firstCharacter == 'A' && $firstCharacter == 'ب') {
        return $style = "style=\"background:$array[0];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'B') {
        return $style = "style=\"background:$array[1];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'C') {
        return $style = "style=\"background:$array[2];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'D') {
        return $style = "style=\"background:$array[3];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'E') {
        return $style = "style=\"background:$array[4];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'F') {
        return $style = "style=\"background:$array[5];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'J') {
        return $style = "style=\"background:$array[6];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'K') {
        return $style = "style=\"background:$array[7];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'L') {
        return $style = "style=\"background:$array[8];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'M') {
        return $style = "style=\"background:$array[9];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'N') {
        return $style = "style=\"background:$array[10];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'O') {
        return $style = "style=\"background:$array[11];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'P') {
        return $style = "style=\"background:$array[12];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'Q') {
        return $style = "style=\"background:$array[13];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'R') {
        return $style = "style=\"background:$array[14];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'S') {
        return $style = "style=\"background:$array[15];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'T') {
        return $style = "style=\"background:$array[16];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'U') {
        return $style = "style=\"background:$array[17];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'V') {
        return $style = "style=\"background:$array[18];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'W') {
        return $style = "style=\"background:$array[19];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'X') {
        return $style = "style=\"background:$array[20];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'W') {
        return $style = "style=\"background:$array[21];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'Z') {
        return $style = "style=\"background:$array[22];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'H') {
        return $style = "style=\"background:$array[23];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'I') {
        return $style = "style=\"background:$array[24];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }
    if ($firstCharacter == 'Y') {
        return $style = "style=\"background:$array[25];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
    }

    return $style = "style=\"background:$array[25];width: 50px;height: 50px;font-size: 33px;font-family: tahoma;border-radius: 26px;padding: 9%;\" ";
}
#+++++++++++++++++++++++++++++++++++++
function highlightWords($string, $word)
{

    $string = str_replace($word, "<span class='highlight'>" . $word . "</span>", $string);
    /*         * * return the highlighted string ** */
    return $string;
}

function Custom_character($string, $array)
{
    foreach ($array as $key) {
        $string = trim(str_replace($key, ' ', $string));
    }

    return $string;
}

function limit_text($text, $limit)
{
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos = array_keys($words);
        $text = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}

function Mailsystems_live($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = strtolower($email);

    if (stristr($email, '@live.com') === false) {
        return false;
    } else {
        return true;
    }
}

function Mailsystems_hotmail($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = strtolower($email);
    if (stristr($email, '@hotmail.com') === false) {
        return false;
    } else {
        return true;
    }
}

function Mailsystems_yahoo($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = strtolower($email);

    if (stristr($email, '@yahoo.com') === false) {
        return false;
    } else {
        return true;
    }
}

function Mailsystems_gmail($email)
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $email = strtolower($email);
    if (stristr($email, '@gmail.com') === false) {
        return false;
    } else {
        return true;
    }
}

function Mailsystems($email)
{
    if ($this->Mailsystems_gmail($email) || $this->Mailsystems_hotmail($email) || $this->Mailsystems_live($email) || $this->Mailsystems_yahoo($email)) {
        return true;
    } else {
        return false;
    }
}

function integer($int)
{
    // $int = filter_var($int, FILTER_SANITIZE_NUMBER_INTG);
    if (is_numeric($int)):
        return true;
    else:
        return false;
    endif;
}
function string_array($string_array)
{
    $array=explode(" ",$string_array);
    return  $array;
}

