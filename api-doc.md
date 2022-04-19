
# docusign-laravel



## Indices

* [envelopes](#envelopes)

  * [list](#1-list)
  * [send](#2-send)

* [user](#user)

  * [get user](#1-get-user)


--------


## envelopes



### 1. list



***Endpoint:***

```bash
Method: GET
Type: 
URL: localhost:8003/api/envelope/list
```



***More example Requests/Responses:***


##### I. Example Request: success



##### I. Example Response: success
```js
{
    "resultSetSize": "28",
    "totalSetSize": "28",
    "startPosition": "0",
    "endPosition": "27",
    "nextUri": "",
    "previousUri": "",
    "envelopes": [
        {
            "status": "completed",
            "documentsUri": "/envelopes/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/documents",
            "recipientsUri": "/envelopes/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/recipients",
            "attachmentsUri": "/envelopes/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/attachments",
            "envelopeUri": "/envelopes/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
            "envelopeId": "XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
            "customFieldsUri": "/envelopes/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/custom_fields",
            "notificationUri": "/envelopes/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/notification",
            "statusChangedDateTime": "2021-07-29T03:34:38.1530000Z",
            "documentsCombinedUri": "/envelopes/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/documents/combined",
            "certificateUri": "/envelopes/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/documents/certificate",
            "templatesUri": "/envelopes/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX/templates"
        }
    ]
}
```


***Status Code:*** 200

<br>



### 2. send



***Endpoint:***

```bash
Method: POST
Type: RAW
URL: localhost:8003/api/envelope/send
```



***Body:***

```js        
{
    "signer_email": "hudaparodi@gmail.com",
    "signer_name": "Nur Huda Bikhoir"
}
```



***More example Requests/Responses:***


##### I. Example Request: success



***Body:***

```js        
{
    "signer_email": "hudaparodi@gmail.com",
    "signer_name": "Nur Huda Bikhoir"
}
```



##### I. Example Response: success
```js
{
    "envelopeId": "XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
    "uri": "/envelopes/XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX",
    "statusDateTime": "2021-08-04T04:20:21.5270000Z",
    "status": "sent"
}
```


***Status Code:*** 200

<br>



## user



### 1. get user



***Endpoint:***

```bash
Method: GET
Type: 
URL: {{url}}/api/get-user
```



---
[Back to top](#docusign-laravel)
> Made with &#9829; by [thedevsaddam](https://github.com/thedevsaddam) | Generated at: 2021-08-04 11:28:58 by [docgen](https://github.com/thedevsaddam/docgen)
