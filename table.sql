

create table barang
(
  barangid bigint not null primary key AUTO_INCREMENT,
  namabrg varchar(100) not null,
  stok numeric(15,2) not null 
)

create table penjorder
(
    noorder varchar(25) not null primary key,
    tanggal datetime not null,
    namacust varchar(100) not null
);


create table penjorderdet
(
    noorder varchar(25) not null,
    barangid  bigint not null,
    harga  numeric(15,2) not null,
    qty  numeric(15,2) not null,
    primary key (noorder ,barangid)
);