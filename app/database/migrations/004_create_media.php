<?php
return [
    'create table media (
        id int auto_increment primary key,
        title text,
        type text,
        path text,
        dateAdded datetime default null,
        dateDeleted datetime default null
    )'
];
