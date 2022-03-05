buat file database.ini : 
host="localhost"
port="3306"
database="databasename"
user="root"
password=""
dev_mode="on"



task : 
buat endpoint order
contoh request  :
{
    "tanggal": "2022-03-05",
    "namacust" : "joko",
    "detail": [
        {"barangid":1,"qty":1,"harga":1000},
        {"barangid":2,"qty":2,"harga":2000}
    ]
}


response
jika sukses
{
    "success" : 1,
    "message" : "Order Successs"
}

jika gagal
{
    "success" : 0,
    "message" : "gagalnya karena apa"
}