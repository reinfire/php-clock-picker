// Clock picker
if ($time == '01:00' or $time == '13:00') {
  $out .= '<img src="/gfx/uhren/01-uhr-23px-trans.png"><span class="event-time">'.$time.'</span>';
} elseif ($time == '02:00' or $time == '14:00') {
  $out .= '<img src="/gfx/uhren/02-uhr-23px-trans.png"><span class="event-time">'.$time.'</span>';
} elseif ($time == '03:00' or $time == '15:00') {
  $out .= '<img src="/gfx/uhren/03-uhr-23px-trans.png"><span class="event-time">'.$time.'</span>';
} elseif ($time == '04:00' or $time == '16:00') {
  $out .= '<img src="/gfx/uhren/04-uhr-23px-trans.png"><span class="event-time">'.$time.'</span>';
} elseif ($time == '05:00' or $time == '17:00') {
  $out .= '<img src="/gfx/uhren/05-uhr-23px-trans.png"><span class="event-time">'.$time.'</span>';
} elseif ($time == '06:00' or $time == '18:00') {
  $out .= '<img src="/gfx/uhren/06-uhr-23px-trans.png"><span class="event-time">'.$time.'</span>';
} elseif ($time == '07:00' or $time == '19:00') {
  $out .= '<img src="/gfx/uhren/07-uhr-23px-trans.png"><span class="event-time">'.$time.'</span>';
} elseif ($time == '08:00' or $time == '20:00') {
  $out .= '<img src="/gfx/uhren/08-uhr-23px-trans.png"><span class="event-time">'.$time.'</span>';
} elseif ($time == '09:00' or $time == '21:00') {
  $out .= '<img src="/gfx/uhren/09-uhr-23px-trans.png"><span class="event-time">'.$time.'</span>';
} elseif ($time == '10:00' or $time == '22:00') {
  $out .= '<img src="/gfx/uhren/10-uhr-23px-trans.png"><span class="event-time">'.$time.'</span>';
} elseif ($time == '11:00' or $time == '23:00') {
  $out .= '<img src="/gfx/uhren/11-uhr-23px-trans.png"><span class="event-time">'.$time.'</span>';
} elseif ($time == '12:00' or $time == '00:00' or $time == '24:00') {
  $out .= '<img src="/gfx/uhren/12-uhr-23px-trans.png"><span class="event-time">'.$time.'</span>';
} else {
  $out .= '<span class="event-time">'.$time.'</span>';
}
