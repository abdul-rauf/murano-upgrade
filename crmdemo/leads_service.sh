#!/bin/bash
SECONDS=0
eval `/usr/bin/php -f leads_service/dbCreds.php`
/usr/bin/php -f leads_service/master_leads.php
declare -a arr=("leads" "leads_cstm" "email_addr_bean_rel" "email_addresses")
for tbname in "${arr[@]}"
do
    echo "Going for moving table ${tbname}_connecta from master crm to connecta"
    mysqldump -h ${host}  --user=${username} --password=${password} ${dbname} ${tbname}_connecta | mysql -h ${remote_host} --user=${remote_username} --password=${remote_password} ${remote_dbname}
    
    echo "Going for moving records ${tbname}_connecta to ${tbname} in connecta"
    mysql  -h ${remote_host} --user=${remote_username} --password=${remote_password} -e "REPLACE INTO ${remote_dbname}.${tbname} select * from ${remote_dbname}.${tbname}_connecta"

    echo "Going for drop  table ${tbname}_connecta in connecta"
    mysql  -h ${remote_host} --user=${remote_username} --password=${remote_password} -e "DROP TABLE ${remote_dbname}.${tbname}_connecta"
done
    
# echo "Going for hard delete soft-deleted records in leads"
# mysql  -h ${remote_host} --user=${remote_username} --password=${remote_password} -e "DELETE FROM ${remote_dbname}.leads WHERE deleted = 1"

echo "Update account_name1 column in leads table"
mysql  -h ${remote_host} --user=${remote_username} --password=${remote_password} -e "UPDATE ${remote_dbname}.leads SET account_name1=account_name"

echo "Remove column account_name1 from leads_connecta table in master crm"
 mysql  -h ${host} --user=${username} --password=${password} -e "ALTER TABLE ${dbname}.leads_connecta DROP account_name1"

/usr/bin/php -f leads_service/post_mail.php
duration=$SECONDS
echo "$(($duration / 60)) minutes and $(($duration % 60)) seconds elapsed."
