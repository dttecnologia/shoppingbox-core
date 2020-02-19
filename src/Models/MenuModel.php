<?php

namespace shoppingbox\core;

class MenuModel
{
    /**
     * Devuelve la estructura base del menú
     *
     * @since 3.0.0
     * @author 
     * @return void
     */
    public static function getDefaultMenu()
    {
        //Menú por defecto para shoppingbox, eliminadas las familias de Automóvil y Carne Ecológica y el enlace inicial de INICIO
        return  [
            ['type' => 2, 'text' => 'Catálogo Shoppingbox', 'category' => 1],
            /*
            ['type' => 1, 'text' => 'Hogar', 'category' => 1],
            ['type' => 1, 'text' => 'Perfumes y Cosmética', 'category' => 2],
            ['type' => 1, 'text' => 'Cuidado e Higiene', 'category' => 3],
            ['type' => 1, 'text' => 'Parafarmacia', 'category' => 4],
            ['type' => 1, 'text' => 'Nutrición Sport', 'category' => 6],
            ['type' => 1, 'text' => 'Dietética Natural', 'category' => 7],
            ['type' => 1, 'text' => 'Tecnología', 'category' => 8],*/
        ];
    }
}
