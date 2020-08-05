
<?php

include("inc/connect.php");
//include("inc/chkAuth.php");



$sql="select user_id from users where pay_status='1'";
$rsMember=mysqli_query($conn,$sql);

while($rowMember=mysqli_fetch_array($rsMember))

{	
	$id=$rowMember['user_id'];



$sql="select count(*) FROM users WHERE pay_status=1 and user_id>".$id;
$cnt=ReturnAnyValue($conn,$sql);
//member count
$sql="select count(*) FROM users WHERE pay_status=1 and sponsor_id=".$id;
$cntDirect=ReturnAnyValue($conn,$sql);      //get count from table where members are paid and self

$sponsorTeam=sponsorTeamCnt($conn,$id);     //count sponsor team

$sql="select rank_income from settings where id=1";
$rankIncome=ReturnAnyValue($conn,$sql);
//decide if all level income or just highest level income
if($rankIncome==1) 
{                                     // Calculate Income for all Levels
$sql="SELECT * FROM `singleleg_income_setting` WHERE member_count<='$cnt' order by lvl_number desc";
}
else
{                                     // Calculate Income for highest Level only
  $sql="SELECT * FROM `singleleg_income_setting` WHERE member_count<='$cnt' order by lvl_number desc LIMIT 0,1";
}
//echo "<br>".$sql;
$rs=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_array($rs))
	
	{
			$lvl_inc=$row['lvl_income'];
			$dir_req=$row['dir_req'];
			$days=$row['days'];
			$lvl=$row['lvl_number'];
      $sponsorTeam=$row['sponsor_team'];
			   
                  //check booster 
			if($lvl==1)
			{                    
				$sql="select booster from users where user_id=".$id;
				$booster=ReturnAnyValue($conn,$sql);

				if($booster==1)
				{               
					$sql="select * from settings where id=1";
					$rsBooster=mysqli_query($conn,$sql);
					$rowBooster=mysqli_fetch_array($rsBooster);
					$days=$rowBooster['booster_days'];
					$lvl_inc=$rowBooster['booster_income'];
				}

        if($booster==2)
        {               
          $sql="select * from settings where id=1";
          $rsBooster=mysqli_query($conn,$sql);
          $rowBooster=mysqli_fetch_array($rsBooster);
          $days=$rowBooster['super_booster_days'];
          $lvl_inc=$rowBooster['super_booster_income'];
        }

			}


			      if($cntDirect>=$dir_req && $cntSponsorTeam>=$sponsorTeam)
				      
				      	{
					      $dt=date('Y-m-d');

					      $sql="select count(*) from daily_income where inc_date='$dt' and user_id='$id' and inc_lvl='$lvl'";
					      $cntDaily=ReturnAnyValue($conn,$sql);
					      

						      if($cntDaily>0)
						      {

						      	//echo "Duplicate !";

						      }

						      else
						      {
						      	$sql="select count(*) from daily_income where user_id='$id' and inc_lvl='$lvl'";
					      		$cntDays=ReturnAnyValue($conn,$sql);

					      			if($cntDays<$days)
					      			{

						      			$sql="insert into daily_income(user_id,inc_amt,inc_lvl,inc_date) values('$id','$lvl_inc','$lvl','$dt')";

								      		if(mysqli_query($conn,$sql))
								        
										        {
										           // echo "Daily Income Generated Successfully";
                              mail("pcsaini@gmail.com", "dhanyog Chrone Success", "Daily Income Generated Successfully");
										        }
								    }
						      }
					  	}
			}
	}	                                             //get inncome,days,dir_req fom table using lvl no
                                               //days of income less the req days (insert daily income)
    





?>
 