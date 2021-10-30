<?php

//remove special character
if (!function_exists('remove_special_characters')) {
   function remove_special_characters($str, $is_slug = false)
   {
      $str = trim($str);
      $str = str_replace('#', '', $str);
      $str = str_replace(';', '', $str);
      $str = str_replace('!', '', $str);
      $str = str_replace('"', '', $str);
      $str = str_replace('$', '', $str);
      $str = str_replace('%', '', $str);
      $str = str_replace('(', '', $str);
      $str = str_replace(')', '', $str);
      $str = str_replace('*', '', $str);
      $str = str_replace('+', '', $str);
      $str = str_replace('/', '', $str);
      $str = str_replace('\'', '', $str);
      $str = str_replace('<', '', $str);
      $str = str_replace('>', '', $str);
      $str = str_replace('=', '', $str);
      $str = str_replace('?', '', $str);
      $str = str_replace('[', '', $str);
      $str = str_replace(']', '', $str);
      $str = str_replace('\\', '', $str);
      $str = str_replace('^', '', $str);
      $str = str_replace('`', '', $str);
      $str = str_replace('{', '', $str);
      $str = str_replace('}', '', $str);
      $str = str_replace('|', '', $str);
      $str = str_replace('~', '', $str);
      if ($is_slug == true) {
         $str = str_replace(" ", '-', $str);
         $str = str_replace("'", '', $str);
      }
      return $str;
   }
}

//remove forbidden characters
if (!function_exists('remove_forbidden_characters')) {
   function remove_forbidden_characters($str)
   {
      $str = str_replace(';', '', $str);
      $str = str_replace('"', '', $str);
      $str = str_replace('$', '', $str);
      $str = str_replace('%', '', $str);
      $str = str_replace('*', '', $str);
      $str = str_replace('/', '', $str);
      $str = str_replace('\'', '', $str);
      $str = str_replace('<', '', $str);
      $str = str_replace('>', '', $str);
      $str = str_replace('=', '', $str);
      $str = str_replace('?', '', $str);
      $str = str_replace('[', '', $str);
      $str = str_replace(']', '', $str);
      $str = str_replace('\\', '', $str);
      $str = str_replace('^', '', $str);
      $str = str_replace('`', '', $str);
      $str = str_replace('{', '', $str);
      $str = str_replace('}', '', $str);
      $str = str_replace('|', '', $str);
      $str = str_replace('~', '', $str);
      return $str;
   }
}

//clean string
if (!function_exists('clean_string')) {
   function clean_string($str)
   {
      $str = remove_special_characters($str, false);
      return $str;
   }
}

// /clean number
if (!function_exists('clean_number')) {
   function clean_number($num)
   {
      $num = trim($num);
      $num = intval($num);
      return $num;
   }
}

//clean string
if (!function_exists('tech_value')) {
   function tech_value($key)
   {
      $values = [
         'photoshop' => '<span class="iconify" data-icon="cib:adobe-photoshop"></span>',
         'adobexd' => '<span class="iconify" data-icon="ci:adobe-xd"></span>',
         'figma' => '<span class="iconify" data-icon="bx:bxl-figma"></span>',
         'html5' => '<span class="iconify" data-icon="cib:html5"></span>',
         'css3' => '<span class="iconify" data-icon="cib:css3"></span>',
         'boostrap' => '<span class="iconify" data-icon="akar-icons:bootstrap-fill"></span>',
         'tailwind' => '<span class="iconify" data-icon="file-icons:tailwind"></span>',
         'jquery' => '<span class="iconify" data-icon="akar-icons:jquery-fill"></span>',
         'react' => '	<span class="iconify" data-icon="teenyicons:react-outline"></span>',
         'nodejs' => '	<span class="iconify" data-icon="fontisto:nodejs"></span>',
         'php' => '<span class="iconify" data-icon="akar-icons:php-fill"></span>',
         'laravel' => '<span class="iconify" data-icon="simple-icons:laravel"></span>',
         'codeigniter' => '<span class="iconify" data-icon="whh:codeigniter"></span>',
         'mysql' => '<span class="iconify" data-icon="cib:mysql"></span>',
         'mongodb' => '<span class="iconify" data-icon="cib:mongodb"></span>',
         'api' => '<span class="iconify" data-icon="eos-icons:api-outlined"></span>',
         'npm' => '<span class="iconify" data-icon="cib:npm"></span>',
         'packagists' => '<span class="iconify" data-icon="simple-icons:packagist"></span>',
         'cache' => '<span class="iconify" data-icon="ic:round-cached"></span>',
         'testing' => '<span class="iconify" data-icon="mdi:ab-testing"></span>',
         'server' => '<span class="iconify" data-icon="clarity:rack-server-solid-badged"></span>',
         'security' => '<span class="iconify" data-icon="healthicons:health-data-security-outline"></span>',
         'javascript' => "<span class='iconify' data-icon='cib:javascript'></span>",
      ];
      if (array_key_exists($key, $values)) {
         return $values[$key];
      } else {
         return false;
      }
   }
}
