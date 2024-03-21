<?php
    class Saudação {
        public static function Saudar() {
            print("\nSeja bem vindo");
        }

        public static function SaudarData() {
            self::Saudar();
            print(date(" D/M/Y"));
        }

        public static function SaudarHora() {
            self::Saudar();
            print(date(" H:i:s"));
        }
    }

    class SaudaçãoEstrangeira extends Saudação {
        public static function SaudarInglês() {
            parent::Saudar();
            print(" Ingrês");
        }

        public static function SaudarFrancês() {
            parent::Saudar();
            print(" Fracais");
        }
    }

    Saudação::SaudarData();
    Saudação::SaudarHora();
    Saudação::Saudar();
    SaudaçãoEstrangeira::SaudarFrancês();
    SaudaçãoEstrangeira::SaudarInglês();
?>