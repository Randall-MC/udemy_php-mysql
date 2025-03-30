CREATE DATABASE blog;
USE blog;

CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  summary VARCHAR(255) NOT NULL,
  date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  content TEXT NOT NULL,
  author VARCHAR(255) NOT NULL,
);

INSERT INTO posts (title, summary, content, author, thumb) VALUES 
('First Post', 'laboris commodo dolor do officia veniam voluptate laboris pariatur consequat velit tempor reprehenderit non sed magna esse.', 'est sed nulla aliquip Duis est ex aliqua Duis fugiat Excepteur Duis voluptate aute fugiat fugiat est consequat aliqua. ea mollit ad Duis adipiscing aute et eiusmod ullamco officia ad adipiscing dolore sit incididunt eu consequat Duis officia. ipsum anim dolore in reprehenderit deserunt est deserunt anim cillum reprehenderit voluptate Excepteur amet dolor exercitation tempor adipiscing occaecat. amet commodo do nostrud fugiat aliquip et et exercitation velit sed lorem eu veniam commodo tempor voluptate incididunt adipiscing. id in id Duis Duis veniam veniam occaecat aliqua ea minim lorem nisi in reprehenderit mollit sint pariatur. aute anim ipsum aute cupidatat et qui velit lorem magna labore cillum eiusmod aliqua Duis dolore.', 'Author1'),
('Second Post', 'sint ipsum fugiat pariatur ea nisi laborum culpa et mollit irure eiusmod nulla nisi velit adipiscing ea.', 'ipsum ex consectetur consequat laboris aliqua culpa ut sint Excepteur ullamco mollit minim ea occaecat consectetur Duis et enim. exercitation dolore ex fugiat labore aute ut esse aute dolor veniam velit aute aliqua magna ad pariatur veniam ipsum. officia pariatur esse dolore est do enim pariatur elit nulla Excepteur proident Duis Excepteur labore pariatur ea. ea labore consectetur reprehenderit aliquip ipsum consequat Duis ipsum dolor culpa et culpa velit minim amet quis minim. ipsum id pariatur sint quis consectetur Excepteur mollit minim amet Duis enim tempor enim ex ut ullamco ad. magna nostrud elit aliquip non Excepteur fugiat exercitation tempor laborum labore occaecat exercitation Excepteur laborum cupidatat voluptate mollit exercitation. et nisi ipsum ad lorem incididunt esse sit quis magna veniam veniam sed ex ex officia sed ex ex.', 'Author2'),
('Third Post', 'do id exercitation irure nulla occaecat sit consequat commodo laboris esse velit Excepteur incididunt ad irure deserunt deserunt qui.', 'elit sunt sit ad laboris enim lorem adipiscing ad incididunt aute cupidatat labore commodo nulla eiusmod do. nostrud non fugiat commodo esse id commodo sunt proident deserunt sed occaecat fugiat amet pariatur proident. amet laboris dolore dolor labore occaecat exercitation fugiat consequat ullamco laborum Excepteur quis aliquip aliquip fugiat. veniam anim commodo nostrud pariatur cupidatat labore nisi ad occaecat anim Excepteur qui enim proident laboris adipiscing occaecat. et est Excepteur tempor est aliquip Excepteur reprehenderit cillum nisi esse nostrud nulla et voluptate laborum ut nulla.', 'Author3'),
('Fourth Post', 'sunt aliqua id cillum aute laboris qui mollit sit proident magna dolore aliquip esse anim ad nostrud pariatur consequat.', 'commodo cupidatat dolore Excepteur cupidatat ea enim minim magna enim consectetur dolor esse commodo ad dolor do. adipiscing mollit consectetur consequat laborum sunt sunt ex incididunt consequat ullamco tempor officia cillum fugiat eu. Excepteur fugiat magna est esse mollit do deserunt eu sint nostrud eiusmod esse consectetur laboris ad magna sint sed. minim anim officia non ad mollit qui eu Duis minim dolor cupidatat anim amet adipiscing sunt lorem do incididunt. magna officia nostrud ullamco fugiat ex amet nulla consequat laboris sunt culpa dolore id eiusmod anim veniam Excepteur sed. nostrud culpa sint esse sunt laboris adipiscing est aliquip velit mollit irure culpa proident cillum laborum consectetur cupidatat.', 'Author4');

ALTER TABLE posts ADD COLUMN thumb VARCHAR(255);

UPDATE posts SET thumb = '1.png' WHERE id = 1;
UPDATE posts SET thumb = '2.png' WHERE id = 2;
UPDATE posts SET thumb = '3.png' WHERE id = 3;
UPDATE posts SET thumb = '4.png' WHERE id = 4;

