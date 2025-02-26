CREATE DATABASE galeria;
USE galeria;

CREATE TABLE IF NOT EXISTS images (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150) NOT NULL,
  description VARCHAR(255) NOT NULL,
  image VARCHAR(255) NOT NULL
);

INSERT INTO images (title, description, image) VALUES
('Sunset Over Hills', 'A beautiful sunset casting golden hues.', '1.jpg'),
('Ancient Castle Ruins', 'Ruins of a medieval castle in the mist.', '2.jpg'),
('Mountain Peak View', 'Snow-capped peak under a clear blue sky.', '3.jpg'),
('City Skyline Night', 'Bright city lights against a dark sky.', '4.jpg'),
('Calm Ocean Waves', 'Waves gently lapping against the shore.', '5.jpg'),
('Forest Pathway', 'A tranquil path winding through a dense forest.', '6.jpg'),
('Desert Dunes', 'Golden sand dunes rolling into the distance.', '7.jpg'),
('Autumn Leaves', 'Falling leaves painting the ground red.', '8.jpg'),
('Cherry Blossom Trees', 'Cherry blossoms in full bloom.', '9.jpg'),
('Tropical Beach', 'Palm trees swaying on a sunny beach.', '10.jpg'),
('Historic Bridge', 'An old bridge over a flowing river.', '11.jpg'),
('Snowy Landscape', 'A blanket of snow covering the terrain.', '12.jpg'),
('Rural Countryside', 'Green fields and a rustic farmhouse.', '13.jpg'),
('Colorful Hot Air Balloons', 'Balloons drifting against a blue sky.', '14.jpg'),
('Winding River', 'A river meandering through lush greenery.', '15.jpg'),
('Night Sky Stars', 'Stars twinkling in the clear night sky.', '16.jpg');
