#!/bin/bash
#Master DB Server Credentials
host=allcrminstances.ccecxxqsq6ze.eu-west-1.rds.amazonaws.com 
username=SugarMUser
password=N0T37x60[80370k
dbname=master_crm

#Connecta DB Sever Credentials
remote_host=54.75.225.64
remote_username=root
remote_password=Sugar123#
remote_dbname=connecta


/usr/bin/php /web/crm/leads_service/master_leads.php
declare -a arr=("leads" "leads_cstm")
for tbname in "${arr[@]}"
do
	echo "Going for moving table ${tbname}_connecta from master crm to connecta"
	mysqldump -h ${host}  --user=${username} --password=${password} ${dbname} ${tbname}_connecta | mysql -h ${remote_host} --user=${remote_username} --password=${remote_password} ${remote_dbname}
	 echo "Going for tuncate table ${tbname} in connecta"
	  mysql  -h ${remote_host} --user=${remote_username} --password=${remote_password} -e "truncate table ${remote_dbname}.${tbname}"
	  echo "Going for moving records ${tbname}_connecta to ${tbname} in connecta"
	  mysql  -h ${remote_host} --user=${remote_username} --password=${remote_password} -e "INSERT INTO ${remote_dbname}.${tbname} select * from ${remote_dbname}.${tbname}_connecta"
           echo "Going for drop  table ${tbname}_connecta in connecta"
	  mysql  -h ${remote_host} --user=${remote_username} --password=${remote_password} -e "drop table ${remote_dbname}.${tbname}_connecta"
done
echo "update account_name1 column in leads table"
mysql  -h ${remote_host} --user=${remote_username} --password=${remote_password} -e "update ${remote_dbname}.leads set account_name1=account_name"

echo "remove column account_name1 from leads_connecta table in master crm"
 mysql  -h ${host} --user=${username} --password=${password} -e "ALTER TABLE ${dbname}.leads_connecta DROP account_name1"

/usr/bin/php /web/crm/leads_service/post_mail.php
