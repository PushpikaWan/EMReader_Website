 <?php
 function calculate_bill($days,$units,$oldBill=0){
	//$days =$Today - $lastDay;
	if($days <= 30){
        if($units <= 30){
            $bill1 = (($units * 3.00) + (units * 3.00) * 0.40) + 500;
			$bill = $bill1 + $oldBill;
        }elseif($units <= 60){
            $bill1 = ((30 * 3.00) + (($units - 30) * 4.70) + ((30 * 3.00) + (($units - 30) * 4.70))* 0.40) + 500;
			$bill = $bill1 + $oldBill; 
        }elseif($units <= 90){
			$bill1 = ((30 * 3.00)+(30 * 4.70)+($units - 60)*7.50)+ (((30 * 3.00)+(30 * 4.70)+(($units - 60)*7.50)) * 0.40) + 500;
			$bill = $bill1 + $oldBill;
		}elseif($units <= 120){
			$bill1 = ((30 * 3.00)+(30 * 4.70)+(30 * 7.50)+(($units - 90)*21)) + (((30 * 3.00)+(30 * 4.70)+(30 * 7.50) + (($units - 90)*21)) * 0.40) + 500;
			$bill = $bill1 + $oldBill;
		}
  
	}
	elseif($days > 30){
	if($units <= $days){
			$bill1 = (($units * 3.00) + (units * 3.00) * 0.40) + 500;
			$bill = $bill1 + $oldBill;
		}elseif($units <= (2 * $days)){
            $bill1 = ($days * 3.00) + (($units - $days) * 4.70) + (((($days) * 3.00) + (($units - $days) * 4.70))* 0.40) + 500;
			$bill = $bill1 + $oldBill; 
        }elseif($units <= (3 * $days)){
			$bill1 = ($days * 3.00)+($days * 4.70)+(($units - (2 * $days))*7.50)+ ((($days * 3.00)+($days * 4.70)+(($units - (2 * $days))*7.50)) * 0.40) + 500;
			$bill = $bill1 + $oldBill;
		}elseif($units <= (4 * $days)){
			$bill1 = ($days * 3.00)+($days * 4.70)+($days * 7.50)+(($units - (3 * $days))*21) + ((($days * 3.00)+($days * 4.70)+($days * 7.50) + (($units - (3 * $days))*21)) * 0.40) + 500;
			$bill = $bill1 + $oldBill;
		}
		
		
		
	}
	echo "Your have arrears of ==> Rs." . $oldBill;
	echo "<br>";
    echo "Your Total bill is ==> Rs.{$bill1} + Rs.{$oldBill} = Rs." . $bill;        
}
	
calculate_bill(32,107,123.67);
	
?>