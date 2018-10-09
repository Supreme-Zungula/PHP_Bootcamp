SELECT UPPER(last_name) AS NAME, first_name, price
FROM user_card
INNER JOIN member on user_card.id_user = member.id_member
INNER JOIN subscription on member.id_sub = subscription.id_sub
WHERE price > 42 ORDER BY last_name ASC, first_name ASC;
