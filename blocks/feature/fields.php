<?php
if (! defined('ABSPATH') || ! function_exists('acf_add_local_field_group')) { return; }
acf_add_local_field_group(['key' => 'group_sang_feature', 'title' => 'Sang Feature', 'fields' => [['key'=>'field_sang_feature_title','label'=>'Title','name'=>'title','type'=>'text'],['key'=>'field_sang_feature_body','label'=>'Body','name'=>'body','type'=>'textarea'],['key'=>'field_sang_feature_link','label'=>'Link','name'=>'link','type'=>'link']], 'location' => [[['param'=>'block','operator'=>'==','value'=>'acf/sang-feature']]]]);
