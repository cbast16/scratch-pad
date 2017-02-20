CREATE TABLE `messages` (
    id mediumint(9) NOT NULL AUTO_INCREMENT,
    user_id mediumint(9) NOT NULL,
    message_text text NOT NULL,
    entry_time timestamp NOT NULL DEFAULT
    CURRENT_TIMESTAMP,
    UNIQUE KEY id (id)
);
`messages` (`user_id`, `message_text`)
VALUES (1, 'Hellow World');