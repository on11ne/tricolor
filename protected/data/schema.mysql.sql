create table tricolor.tbl_genres (
  id int not null,
  title varchar(255) not null,
  primary key (id)
);

create table tricolor.tbl_genres_items (
  id int not null,
  item_id int not null,
  genre_id int not null,
  primary key (id),
  foreign key tbl_genres_items_ibfk_2 (genre_id) references tbl_genres(id),
  foreign key tbl_genres_items_ibfk_1 (item_id) references tbl_items(id)
);
create index item_id on tricolor.tbl_genres_items (item_id);
create index genre_id on tricolor.tbl_genres_items (genre_id);

create table tricolor.tbl_halls (
  id int not null,
  title varchar(255) not null,
  primary key (id)
);

create table tricolor.tbl_items (
  id int not null,
  title varchar(255) not null,
  teaser_image varchar(255) not null,
  index_teaser_image varchar(255) not null,
  teaser_text mediumtext(16777215) not null,
  trailer varchar(255) not null,
  description mediumtext(16777215) not null,
  order tinyint not null,
  created timestamp not null default CURRENT_TIMESTAMP,
  slider_teaser_image varchar(255),
  primary key (id),
  foreign key tbl_items_ibfk_1 (id) references tbl_schedule_premiere(id)
);

create table tricolor.tbl_migration (
  version varchar(255) not null,
  apply_time int,
  primary key (version)
);

create table tricolor.tbl_schedule (
  id int not null,
  item_id int not null,
  hall_id int not null,
  start_date_time timestamp not null default CURRENT_TIMESTAMP,
  primary key (id),
  foreign key tbl_schedule_ibfk_1 (item_id) references tbl_items(id),
  foreign key tbl_schedule_ibfk_2 (hall_id) references tbl_halls(id)
);
create index item_id on tricolor.tbl_schedule (item_id);
create index hall_id on tricolor.tbl_schedule (hall_id);

create table tricolor.tbl_schedule_premiere (
  id int not null,
  item_id int not null,
  start_date_time date not null,
  primary key (id),
  foreign key tbl_schedule_premiere_ibfk_1 (id) references tbl_items(id)
);

create table tricolor.tbl_schedule_uploader (
  id int not null,
  filename varchar(255) not null,
  created timestamp not null default CURRENT_TIMESTAMP,
  type varchar(30),
  primary key (id)
);

