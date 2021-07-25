#!/bin/bash

# variables
LOGFILE="/var/lib/docker/containers/23da6b9d7d3b2c0fde4e50208c0abed718bad57f1738d912b6f5ad53f13ed3d4/23da6b9d7d3b2c0fde4e50208c0abed718bad57f1738d912b6f5ad53f13ed3d4-json.log"
RESPONSE_CODE="200"

# functions
filters(){
grep $RESPONSE_CODE \
| grep -v "\/rss\/" \
| grep -v robots.txt \
| grep -v "\.css" \
| grep -v "\.jss*" \
| grep -v "\.png" \
| grep -v "\.ico"
}


request_ips(){
awk '{print $1}'
}


wordcount(){
sort \
| uniq -c
}

sort_desc(){
sort -rn
}

return_kv(){
awk '{print $1, $2}'
}


return_top_ten(){
head -1
}

## actions
get_request_ips(){
echo ""
echo "Most Request IP"
echo "===================="

sudo cat $LOGFILE \
| filters \
| request_ips \
| wordcount \
| sort_desc \
| return_kv \
| return_top_ten
echo ""
}



# executing
get_request_ips
