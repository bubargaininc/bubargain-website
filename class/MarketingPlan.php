<?php 

	
	 
	
	
	class MarketingPlan
	{
		protected $db;
		
		public function __construct($db)
		{
			$this -> db = $db;
		}
	
		/*
		 * get all marketing plan by merchantID and type
		* return Array[]
		* $merchantID : login merchant ID
		* $type :string type ,including  '֪ʶС��ʿ���� ��Ʒ�����������۲��ԡ�
		*/
		
		public function getMarketingPlan($merchantID,$type)
		{
			
			
				try {
					$sql = "select idmarketplan,planName from marketplan where merchantID= ? and planType=?";
					$stmt = $this -> db -> prepare($sql);
					$stmt -> bindValue (1,$merchantID);
					$stmt -> bindValue (2,$type);
					 $stmt -> execute();
					$reValue = $stmt -> fetchAll();
					return $reValue;
				}
				catch (Exception $e)
				{
					return false;
				}
				
			
		}
	}