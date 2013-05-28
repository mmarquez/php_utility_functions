<?php

function get_distance_from_lat_lon_to_km($lat1,$lon1,$lat2,$lon2) {
  $dLat = deg2rad($lat2 - $lat1);
  $dLon = deg2rad($lon2-$lon1); 
  $a = 
    sin($dLat/2) * sin($dLat/2) +
    cos(deg2rad(lat1)) * cos(deg2rad(lat2)) * 
    sin($dLon/2) * sin($dLon/2)
    ; 
  $c = 2 * atan2(sqrt($a), sqrt(1-$a));
  // 6371 is the radius of the Earth in Kilometers
  return 6371 * $c;
}

// Example, distance from Grenoble-Isère Airport to Saint Exupery Airport
echo get_distance_from_lat_lon_to_km(45.36010020, 5.332021699999999, 45.72036199999999, 5.0795070);
