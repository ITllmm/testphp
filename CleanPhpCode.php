<?php

    class CleanPhpCode
    {
        public $title;
        public $body;
        public $buttonTest;
        public $cancelLabel = false;

        /*多条的if语句优化*/
        function isShopOpen( $day )
        {
            if (empty($day)) {
                return false;
            }

            $openingDays = [
                'friday','saturday','sunday'
            ];

            return in_array( strtolower( $day ), $openingDays, true );
        }

        //使用默认参数，而不是短路或条件
        function createMicrobrewery( string $brewerName = 'Hipster Brew Go .' )//要求类型而不是强制转化

    }



    // function emailClients(array $clients): void
    // {
    //     foreach ($clients as $client) {
    //         $clientRecord = $db->find($client);
    //         if ($clientRecord->isActive()) {
    //             email($client);
    //         }
    //     }
    // }
    function emailClients(array $clients)
    {
        $activeClients = activeClients( $clients );
        array_walk( $activeClients,'email' );
    }

    function activeClients(array $clients)
    {
        return array_filter($clients,'isClientActive');
    }

    function isClientActive(int $client)
    {
        $clientRecord = $db->find( $client );
        return $clientRecord->isActiveo();
    }



    namespace Vendor\Package;

    use FooInterface;
    use BarClass as Bar;
    use OtherVendor\OtherPackage\BazClass;

    class Foo extends Bar implements FooInterface
    {
        public function sampleFunction($a, $b = null)
        {
            if ($a === $b) {
                bar();
            } elseif ($a > $b) {
                $foo->bar($arg1);
            } else {
            BazClass::bar($arg2, $arg3);
            }
        }

        final public static function bar()
        {
        // 方法的内容
        }
    }