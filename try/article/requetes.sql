SELECT
  `id` ,
  `nom`,
  `prix`
FROM
  `article`
WHERE
  `id` = 1;

INSERT INTO
  `article`
(
  `nom` ,
  `prix`
) VALUES (
  '123',
  '321'
);

DELETE FROM
  `article`
WHERE
  `id` = 1
LIMIT 1;