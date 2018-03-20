create table Ingredient
(
    id int auto_increment
        primary key,
    name varchar(128) not null,
    constraint Ingredient_id_uindex
        unique (id)
)
engine=InnoDB
;