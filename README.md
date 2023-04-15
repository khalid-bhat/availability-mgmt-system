
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

--------------------------------------------------------ABOUT THE APIS----------
## REGISTER API cURL
url --location 'http://127.0.0.1:8002/api/register' \
--header 'Content-Type: application/json' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6ImdLK1k3TldZamxrbHgvbU9xN0dXN3c9PSIsInZhbHVlIjoibVRpWXZzYkhWSmVzSDRUU1Q1dlhpZCtMekpwOENObEJxQldCWVkramxyUDRHd1hSbnllTzJvTDVXVDBDR0YxU3pLcHlrWXlmYngrR0s0a1VTcDBmSXVvZlFJVElPckc1MGZwamJGZ01wOXZWcDhqVEZ2KzJyby9ZQU5JbFZlVysiLCJtYWMiOiI1MzVhZjdjNThjZmM5MTQzMGE0OGZmODVjODNjYzc5ZWY0ZDljMjA5OTUxMDMyZDA3NmIyMWFmYjM0Nzg0ZmEzIn0%3D; laravel_session=eyJpdiI6ImY0Z3FxWmRRN0xRSTNJbUdaOVhEbWc9PSIsInZhbHVlIjoiWnhHc1NUT09ieVhURWhCbmtoVGxseEhMUmZYeFUyZGowS0hMMlNhQ2tGMDAyOUYyV2lOODNVa1RibjY2WXFsNnY1MTBOSWt3WXE5ZmJmMFZKSTJwK0k3T3NoN1Q2c3pQVjRNdDB0bndKOW1NWlFXa2duQ0hlaFF1QXkxZkQyQ3EiLCJtYWMiOiJlMzAzMDM2OTQ0NmJiZjkzYTkxYWFmZDUwOWNhMzIzZjZmOTIxNWJlYTk0NjFkNjBhOTIwMGE5YTMxODVkZTA1In0%3D' \
--data-raw '{
    "name" : "khalid",
    "email" :"kb111446@123.com",
    "password" : "123",
    "c_password" : "123",
    "role": "1"
}'

## LOGIN API cURL
curl --location --request GET 'http://127.0.0.1:8002/api/login' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZmFhZDA1ZTY5NjA5YWYxM2RlYjg0NzM2YWI4Yzk2NzAxMTk4MWZmMWQ0MzYwOTEyODY4YWYwOGU3MDRmNWM3MDhmNGZiMTM1Nzg3OTE0NzEiLCJpYXQiOjE2ODE0ODU3MzAuODEzNzI0LCJuYmYiOjE2ODE0ODU3MzAuODEzNzI4LCJleHAiOjE3MTMxMDgxMzAuODEwMTc3LCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.hkSJivUYSkvS4loHNNmjiq5TVfChW2xcmtg1RKnbB7zRhbVFiWHsIT_V2DwkHVzyNjtPjPzRBvrYVV5saxOZleRN9BXitHJgfpNA3CxkMhcBzFstdU5uUlYrMQL0_XAzU_1tbz_Lwf4Qlogn9xHi8KewmEodEAgYlTJ0AdnB4FdGMmdI8KAHLWwF7KX1okYwc0ejIVjdHYnH-fyRNiITQceZhjg3WxVnB4EChbx8GyqpsMqbTHY8QeCDS-HWumreMBE-e72UcQ7rSmq1rZ9VsZ7Vq3_h4deKRwmL1Xb4tWfINBtZJajmYVKr6tWtd81sRXRzxvEcJfF4WVb7K7jCtRYsOQT13oa7Jhay69RfOrGQE9B_l7cf47rtkoSYyqu4TXOKwNDByA0Dm4p_RkNGxuWhhF97iGSrS8MtZPxL91OZrC9yt88KX1igxBnxDLVdflSTGxB3P-eolIfAI8djWdIN4WpjzogJKIuWBpmpIVZXLcYuMPDY1LNHF4Sc3E0i0chvv73ixcdtTKMdUEAcxTXREPNip2-UmD5oZM8FbVCRgVZXcTSOn_kt5gg80Y-Ai0RTPk0xZwtlmyQl9X1fAl8I7pYN7H2R2Lcsst_gmw2BcHJKQ_rIosy-WNHhQjLtFiuzUcyfpP2v3OIaZUAyF1H2ugFpBSFiIdIKZ_ib-MY' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6ImdLK1k3TldZamxrbHgvbU9xN0dXN3c9PSIsInZhbHVlIjoibVRpWXZzYkhWSmVzSDRUU1Q1dlhpZCtMekpwOENObEJxQldCWVkramxyUDRHd1hSbnllTzJvTDVXVDBDR0YxU3pLcHlrWXlmYngrR0s0a1VTcDBmSXVvZlFJVElPckc1MGZwamJGZ01wOXZWcDhqVEZ2KzJyby9ZQU5JbFZlVysiLCJtYWMiOiI1MzVhZjdjNThjZmM5MTQzMGE0OGZmODVjODNjYzc5ZWY0ZDljMjA5OTUxMDMyZDA3NmIyMWFmYjM0Nzg0ZmEzIn0%3D; laravel_session=eyJpdiI6ImY0Z3FxWmRRN0xRSTNJbUdaOVhEbWc9PSIsInZhbHVlIjoiWnhHc1NUT09ieVhURWhCbmtoVGxseEhMUmZYeFUyZGowS0hMMlNhQ2tGMDAyOUYyV2lOODNVa1RibjY2WXFsNnY1MTBOSWt3WXE5ZmJmMFZKSTJwK0k3T3NoN1Q2c3pQVjRNdDB0bndKOW1NWlFXa2duQ0hlaFF1QXkxZkQyQ3EiLCJtYWMiOiJlMzAzMDM2OTQ0NmJiZjkzYTkxYWFmZDUwOWNhMzIzZjZmOTIxNWJlYTk0NjFkNjBhOTIwMGE5YTMxODVkZTA1In0%3D' \
--data-raw '{
    "email" :"kb96@123.com",
    "password" : "123"
}'

## SAVE AVAILABILTY BY DATE FOR DOCTOR(only) API 

curl --location 'http://127.0.0.1:8002/api/save-availability' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZmEzMGQ3MTA3YmNmMWUyNDEwODMwOWIzZWQ4NGI2MWRkZWQ1ODcwNjNmZWE1M2JkMTNkZGFhNTAxNzgzNmIwOTBlYmE1NGIwOTQ4NjUwMDAiLCJpYXQiOjE2ODE1OTYwODMsIm5iZiI6MTY4MTU5NjA4MywiZXhwIjoxNzEzMjE4NDgzLCJzdWIiOiI3Iiwic2NvcGVzIjpbXX0.ZFKvhDRNcr3TnOu7ez71KXQ6rn0uC4_5_J9Xjmj7NZ7ht9tGmoitZrEsWJiwsRsgKZ5mTKVSKhPR3Gk3nBxMFw3rRSNTC5qT_H3PcFiISog4oUumrOGg4g_-ZEE8RoNFQdqw198bbGXHHwnH0NGaKvmVUPqtMmoIXpKOV9n2HhQmFr1SlQWHeVtaLrrz_gGTgyyLXbPsXsxwHsDvTCrJHXLWdVFkZZKTOYfVyAS1GTeRVmkjD0IGcd4ZqQ6SUnkiB19qdwiHvp0wvx0OyU8fayag_gvwYznHd0ERWtiLYPOBOxuSsh199-BDEJ8N5EfEtgzMddWHC8pNdJO_i6rnvcWK2Y1Cl15GnR0QxLyMPEcwQfRi1zcpNlKUSn1s3gFzJo70ekIobfOSbob5sc05OgOrSbftDje1H5-sUBeuw9XnCFxx5uEFCnanVluPc5ELVAnQvLPDxQdE60-Wb-Z-KGX61Za3lFDfOsfqG8HWi9VJm3PdEX8_7Aa1923DpIwYE-79y4E7rCTg4zc8rqb-7lb7EeldaMg48ICZCrto69bBlOw4YV_EzSJrGb2KfnT4AhSzkz1RSwmiHpwnr1qru1nCf3kMMbYC08TJxBKZZpG60erQUWHt-0CA2uRAtt_Awvkv19AevHkYG-Des76fC45nw4810KYYsGv348uFuJo' \
--header 'Content-Type: application/json' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6ImdLK1k3TldZamxrbHgvbU9xN0dXN3c9PSIsInZhbHVlIjoibVRpWXZzYkhWSmVzSDRUU1Q1dlhpZCtMekpwOENObEJxQldCWVkramxyUDRHd1hSbnllTzJvTDVXVDBDR0YxU3pLcHlrWXlmYngrR0s0a1VTcDBmSXVvZlFJVElPckc1MGZwamJGZ01wOXZWcDhqVEZ2KzJyby9ZQU5JbFZlVysiLCJtYWMiOiI1MzVhZjdjNThjZmM5MTQzMGE0OGZmODVjODNjYzc5ZWY0ZDljMjA5OTUxMDMyZDA3NmIyMWFmYjM0Nzg0ZmEzIn0%3D; laravel_session=eyJpdiI6ImY0Z3FxWmRRN0xRSTNJbUdaOVhEbWc9PSIsInZhbHVlIjoiWnhHc1NUT09ieVhURWhCbmtoVGxseEhMUmZYeFUyZGowS0hMMlNhQ2tGMDAyOUYyV2lOODNVa1RibjY2WXFsNnY1MTBOSWt3WXE5ZmJmMFZKSTJwK0k3T3NoN1Q2c3pQVjRNdDB0bndKOW1NWlFXa2duQ0hlaFF1QXkxZkQyQ3EiLCJtYWMiOiJlMzAzMDM2OTQ0NmJiZjkzYTkxYWFmZDUwOWNhMzIzZjZmOTIxNWJlYTk0NjFkNjBhOTIwMGE5YTMxODVkZTA1In0%3D' \
--data '{
    "date" : "2023-04-17",
    "time_slots" :[
    {"start_time" :"06:30:00",
    "end_time" :"07:30:00"},{
    "start_time" :"07:31:00",
    "end_time" :"08:30:00"
    }
    ]
    
}'

## UPDATE AVAILABILTY BY DATE FOR DOCTOR(only) API 

curl --location 'http://127.0.0.1:8002/api/update-availability' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYmQ2OWYyNzc2M2U0YmFlYWM2ZDM5MDMyMmQyZTQ3NzBhMDM5NzUyNTM0MzJlMjkyYjAxODQ5N2VlNmM0ODIxNWYwM2U2YjkxZmUwNjZiMzYiLCJpYXQiOjE2ODE1OTI5OTEsIm5iZiI6MTY4MTU5Mjk5MSwiZXhwIjoxNzEzMjE1MzkxLCJzdWIiOiI2Iiwic2NvcGVzIjpbXX0.JXGZmf62Q_PXCnHkjPgq2cGUDu1ihQo24UAVlwsoGrtURTCylVj-Tq5pHhW_GG82QbPrS5X3zsVl9Yc6AFUVB-ryzWYtBpHRpmG9Ve4nOQPHY79Vq1xmzT8XMaAdAUu00yfVzzhal_g8u0cRMY5rxr-tMMy_4ujykP94mJS930WqnpkwMRa60ismInIY2bKLBhm6mJARg-9o6XoxmvoOOjJTPv-OI7XcDliakrvDxyn5YKggm8oAta-yHhBbdYFJGNKPbiei8fXpa4NLxRnaHTmUGy5WC88QNizTDVqv8ECDbIFzk31pD9nzlYp0KLOBYmmC2rfjjRbcgzVDi40be4s9Jjj_qpfkT82gWQTehPkzNUZgXQQAIHPPnMf-M4J6R_oCvNEMjBOnKUwu1lpIX8Cr6-NxD1uKNTPB5q50GR5Wor22q6Dv4r1cXC8Lu7jbklDZ8iINaN4eE1xKjB5OnkdgfbhH1QR3VMryfK1gFzQ3MXUpkn5TSzJ8SultKoNWRt7Q9bfD71b6mzhUHA4dVMcXo3gOq5kexLSk8uP9eJc2cuY6LyiR4yX6U8jqI2UWX7GczB6ugfedX39_3DFAbxMu_5teYbeQ8T8G4--D2DIb3I_7FKkN0o3-mI4JuNL-D0aLqP7bnarEU-p6HLWfQRqC_iVu6coRc3VWOETrSTM' \
--header 'Content-Type: application/json' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6ImdLK1k3TldZamxrbHgvbU9xN0dXN3c9PSIsInZhbHVlIjoibVRpWXZzYkhWSmVzSDRUU1Q1dlhpZCtMekpwOENObEJxQldCWVkramxyUDRHd1hSbnllTzJvTDVXVDBDR0YxU3pLcHlrWXlmYngrR0s0a1VTcDBmSXVvZlFJVElPckc1MGZwamJGZ01wOXZWcDhqVEZ2KzJyby9ZQU5JbFZlVysiLCJtYWMiOiI1MzVhZjdjNThjZmM5MTQzMGE0OGZmODVjODNjYzc5ZWY0ZDljMjA5OTUxMDMyZDA3NmIyMWFmYjM0Nzg0ZmEzIn0%3D; laravel_session=eyJpdiI6ImY0Z3FxWmRRN0xRSTNJbUdaOVhEbWc9PSIsInZhbHVlIjoiWnhHc1NUT09ieVhURWhCbmtoVGxseEhMUmZYeFUyZGowS0hMMlNhQ2tGMDAyOUYyV2lOODNVa1RibjY2WXFsNnY1MTBOSWt3WXE5ZmJmMFZKSTJwK0k3T3NoN1Q2c3pQVjRNdDB0bndKOW1NWlFXa2duQ0hlaFF1QXkxZkQyQ3EiLCJtYWMiOiJlMzAzMDM2OTQ0NmJiZjkzYTkxYWFmZDUwOWNhMzIzZjZmOTIxNWJlYTk0NjFkNjBhOTIwMGE5YTMxODVkZTA1In0%3D' \
--data '{
    "date" : "2023-04-17",
    "time_slots" :[
    {"start_time" :"10:30:00",
    "end_time" :"11:30:00"},{
    "start_time" :"12:30:00",
    "end_time" :"13:30:00"
    }
    ]
    
}'

## CHECK AVAILABILTY BY DATE AND DOCTOR_ID  PUBLIC API 

curl --location --request GET 'http://127.0.0.1:8002/api/check-availability' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6ImdLK1k3TldZamxrbHgvbU9xN0dXN3c9PSIsInZhbHVlIjoibVRpWXZzYkhWSmVzSDRUU1Q1dlhpZCtMekpwOENObEJxQldCWVkramxyUDRHd1hSbnllTzJvTDVXVDBDR0YxU3pLcHlrWXlmYngrR0s0a1VTcDBmSXVvZlFJVElPckc1MGZwamJGZ01wOXZWcDhqVEZ2KzJyby9ZQU5JbFZlVysiLCJtYWMiOiI1MzVhZjdjNThjZmM5MTQzMGE0OGZmODVjODNjYzc5ZWY0ZDljMjA5OTUxMDMyZDA3NmIyMWFmYjM0Nzg0ZmEzIn0%3D; laravel_session=eyJpdiI6ImY0Z3FxWmRRN0xRSTNJbUdaOVhEbWc9PSIsInZhbHVlIjoiWnhHc1NUT09ieVhURWhCbmtoVGxseEhMUmZYeFUyZGowS0hMMlNhQ2tGMDAyOUYyV2lOODNVa1RibjY2WXFsNnY1MTBOSWt3WXE5ZmJmMFZKSTJwK0k3T3NoN1Q2c3pQVjRNdDB0bndKOW1NWlFXa2duQ0hlaFF1QXkxZkQyQ3EiLCJtYWMiOiJlMzAzMDM2OTQ0NmJiZjkzYTkxYWFmZDUwOWNhMzIzZjZmOTIxNWJlYTk0NjFkNjBhOTIwMGE5YTMxODVkZTA1In0%3D' \
--data '{
    "date" : "2023-04-17",
   "doctor_id" : "6"
    
}'
