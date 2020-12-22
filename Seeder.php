<?php
require_once('OST.php');

class Seeder {
    public static function getData() {
        return
            [
                new OST(0, 'OST1', 'Videogame 1', 1980,
                    [new Song(0, 'Tylko jedno w glowie mam', 'Anonymous', 1, 244),
                        new Song(1, 'Falling', 'Trevor Daniel', 2, 178),
                        new Song(2, 'Dum Dee Dum', 'Keys N Krates', 3, 170),
                        new Song(3, '500 PS', 'BONEZ MC & RAF Camora', 4, '215')
                    ]
                ),

                new OST(1, 'OST2', 'Videogame 2', 1999,
                    [new Song(4, 'Some say', 'Felix Jaehn', 1, 187),
                        new Song(5, 'In your eyes', 'LUM!X', 2, 204),
                        new Song(6, 'Drop that low', 'Tujamo', 3, 160),
                        new Song(7, 'Post Malone', 'Sam Feldt', 4, 155)
                    ]
                ),

                new OST(2, 'OST3', 'Videogame 3', 2005,
                    [new Song(8, 'Shots & Squats', 'Vigiland', 1, 172),
                        new Song(9, 'Mr. Saxobeat', 'Claas', 2, 151),
                        new Song(10, 'Viva la Dealer', 'Capital Bra', 3, 230),
                        new Song(11, 'Ma Bae', 'Dardan', 4, 190),
                        new Song(12, 'Ashes', 'Stellar', 5, 166)
                    ]
                )
            ];
    }
}