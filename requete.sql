SELECT
   `id`,
   `numetodaccord`,
   `raisonsocial`,
   `capital`,
   `adressesiege`,
   `cp`,
   `ville`,
   `rcs`,
   `nom`,
   `prenom`,
   `fonction`,
   `tukwu`,
   `operation`
FROM
  `testcontact`
WHERE
  `id` = 1
LIMIT
  1;