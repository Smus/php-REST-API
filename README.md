# php-REST-API
Simple php template to make a rest api

#Svar fra botxo

//// BotXO
// customVariables data
print_r( $postBody->customVariables );

// extracted data
print_r( $postBody->extracted );

#svar til botxo
{
    "error":null,
    "message":{
        "user_profile":{

        },
        "ref":null,
        "user_id":"webbot:d0f23640-2dc2-11e8-a182-89f9297141e0",
        "timestamp":1521717539,
        "message":"",
        "attachments":[

        ]
    }
}

#set variable
{"segment": "'.$retVal.'"}