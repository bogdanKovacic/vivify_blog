drop database if exists vivify_blog;
create database vivify_blog;

use vivify_blog;

drop table if exists posts;
create table posts (
    id int auto_increment,
    title varchar(100) not null,
    body text not null,
    author varchar(50) not null,
    created_at date,
    primary key (id)
    );
    insert into posts (title, body, author, created_at) values ('first posts', 'My first blog posts', 'Vojimir', '2019-07-27');
    insert into posts (title, body, author, created_at) values ('second posts', 'My second blog posts', 'Bogdan', '2019-07-28');
    insert into posts (title, body, author, created_at) values ('third posts', 'My third blog posts', 'Dejan', '2019-07-29');
    insert into posts (title, body, author, created_at) values ('forth posts', 'My forth blog posts', 'Mladen', '2019-07-30');
    insert into posts (title, body, author, created_at) values ('fifth posts', 'My fifth blog posts', 'Tijana', '2019-07-31');
    
drop table if exists comments;
create table comments (
    id int auto_increment,
    author varchar(50) not null,
    text text not null,
    post_id int,
    primary key(id),
    foreign key (post_id) references posts(id)
    );
    insert into comments (author, text, post_id) values ('Vojimir', 'Be the first to post a comment!', 1);
    insert into comments (author, text, post_id) values ('Bogdan', 'Be the second to post a comment!', 2);
    insert into comments (author, text, post_id) values ('Dejan', 'Be the third to post a comment!', 3);
    insert into comments (author, text, post_id) values ('Mladen', 'Be the forth to post a comment!', 4);
    insert into comments (author, text, post_id) values ('Tijana', 'Be the fifth to post a comment!', 5);
    
    describe comments;
    describe posts;
    select * from comments;
    select * from posts;
