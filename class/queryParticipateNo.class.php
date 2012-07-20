
<?php 

   
  
	function queryCommentsAndForwardNumber($row)
	{
		if(count($row) > 0)
		{
			$ids ='';
			
			$i=0;
			do
			{
				if($i ==0)
					$ids = $row[$i]['realWeiboID'];
				else
				$ids = $ids.','.$row[$i]['realWeiboID'];
				
				$i ++;
			}
			while ($i < count($row));
				
			
			if(isset($_SESSION['token']))
			{
			
				$res =  file_get_contents ("https://api.weibo.com/2/statuses/count.json?access_token=".$_SESSION['token']['access_token']
				       ."&ids=".$ids );
				
				$array = json_decode($res,1);
				
				for ($i=0; $i <count($array); $i++){
					$array[$i]['id']=number_format($array[$i]['id'],0,'','');
				}
				
				return $array;
			}
			else
				echo false;
		}
	}