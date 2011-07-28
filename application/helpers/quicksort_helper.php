<?php
if ( ! function_exists('quicksort')){
	function quicksort( $arr, $l = 0 , $r = NULL ) {
		// when the call is recursive we need to change
		//the array passed to the function yearlier
			static $list = array();
			if( $r == NULL )
				$list = $arr;
		
			if( $r == NULL )
				$r = count($list)-1;//last element of the array
		
			$i = $l;
			$j = $r;
		
			$tmp = $list[(int)( ($l+$r)/2 )]->timestamp;
		
			// partion the array in two parts.
			// left from $tmp are with smaller values,
			// right from $tmp are with bigger ones
			do {
				while( $list[$i]->timestamp > $tmp )
					$i++;
		
				while( $tmp > $list[$j]->timestamp )
					$j--;
		
				// swap elements from the two sides
				if( $i <= $j ) {
					$w = $list[$i];
					$list[$i] = $list[$j];
					$list[$j] = $w;
		
					$i++;
					$j--;
				}
			}while( $i <= $j );
		
			// devide left side if it is longer the 1 element
			if( $l < $j )
				quicksort(NULL, $l, $j);
		
			// the same with the right side
			if( $i < $r )
				quicksort(NULL, $i, $r);
		
			// when all partitions have one element
			// the array is sorted
		
			return $list;
		}
}
?>
