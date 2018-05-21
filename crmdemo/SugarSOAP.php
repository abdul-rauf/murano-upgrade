<?php
error_reporting(E_ALL);
        require_once("include/nusoap/nusoap.php");
        class SugarSoap{
                var $proxy;
                var $sess;
                function SugarSoap($soap_url,$login=true){
                        $soapclient = new nusoap_client($soap_url, true, "localhost", "80");  //soapclient($soap_url,true);
                        $this->proxy = $soapclient->getProxy();
print_r($this);
                        if($login) echo $this->login();
						else return "Login failed";
                }
				function login(){
					$params = array(
						'user_name' => 'ole',
						'password'  => md5('Sugaruk1'),
						'version'   => '.01'
					);
					$result = $this->proxy->login($params,'MyApp');
					$this->sess= $result['error']['number']==0 ? $result['id'] : null;
					return $this->sess;
				}
				function getContacts($query='',$maxnum=0,$orderby=' contacts.last_name asc'){
					$result = $this->proxy->get_entry_list(
						$this->sess,
						'Contacts',
						$query,
						$orderby,
						0,
						array(
							'id',
							'first_name',
							'last_name',
							'account_name',
							'account_id',
							'email1',
							'phone_work',
						),
						$maxnum,
						false
					);
					return $result;
				}
        }
?>  