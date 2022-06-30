<?php
function theme_pre_set_transient_update_theme ( $transient ) {
 if( empty( $transient->checked['wp-masjid'] ) )
    return $transient;

  $checking = curl_init();
 
  curl_setopt($checking, CURLOPT_URL, 'http://update.ciuss.com/wp-content/uploads/masjid.json' );
 
 // 3 second timeout to avoid issue on the server
 curl_setopt($checking, CURLOPT_TIMEOUT, 3 ); 
 curl_setopt($checking, CURLOPT_RETURNTRANSFER, true);

 $result = curl_exec($checking);
 curl_close($checking);

 // make sure that we received the data in the response is not empty
 if( empty( $result ) )
   return $transient;

 //check server version against current installed version
 if( $data = json_decode( $result ) ){
   if( version_compare( $transient->checked['wp-masjid'], $data->new_version, '<' ) )
 $transient->response['wp-masjid'] = (array) $data;
 }
 
 return $transient;

} 
add_filter ( 'pre_set_site_transient_update_themes', 'theme_pre_set_transient_update_theme' );