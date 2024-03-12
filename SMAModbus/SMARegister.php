<?php

/**
 * Class SMARegister
 * Constants with sma register and value translations
 *
 * @version     0.1
 * @category    Symcon
 * @package     de.codeking.symcon
 * @author      Frank Herrmann <frank@codeking.de>
 * @link        https://codeking.de
 * @link        https://github.com/CodeKing/de.codeking.symcon
 *
 */
class SMARegister
{
    /**
     * device addresses
     * addresses with fixed values
     */
    const device_addresses = [
        'default' => [
            /**
             * Global
             */
            30051 => [
                'name' => 'Device class',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                  /* 460 => 'Solar Inverter', */
                     8000 => 'All Devices', 
                  /* 8001 => 'Solar Inverter', */
                  /* 8002 => 'Wind Turbine Inverter', */
                  /* 8007 => 'Battery Inverter', */
                     8009 => 'Hybrid Wechselrichter'
                  /* 8033 => 'Consumer', */
                  /* 8064 => 'Sensor System in General', */
                  /* 8065 => 'Electricity meter', */
                  /* 8128 => 'Communication device' */
                ]
            ],
            30053 => [
                'name' => 'Device-ID',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    19051 => 'SUNNY TRIPOWER 10.0 SE (STP10.0-3SE-40)'
                ]
            ],
            30057 => [
                'name' => 'Serial',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW'
            ],
            30231 => [
                'name' => 'Power limit',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
            /* 30837 => [
                'name' => 'Active power target value',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ] */
        ],
    ];

    /**
     * value addresses
     * addresses with updated values
     */
    const value_addresses = [
        'default' => [
            /**
             * Global
             */
            30201 => [
                'name' => 'Status',
                'count' => 2,
                'type' => 'U32',
                'format' => 'ENUM',
                'mapping' => [
                    35 => 'Error',
                    303 => 'Off',
                    307 => 'OK',
                    455 => 'Warning'
                ]
            ],
            30535 => [
                'name' => 'Day yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3', // convert Wh to kWh
                'profile' => '~Electricity',
                'archive' => 1 // archive: counter
            ],
            30537 => [
                'name' => 'Day yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3', // convert Wh to kWh
                'profile' => '~Electricity',
                'archive' => 1 // archive: counter
            ],
            30539 => [
                'name' => 'Day yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3', // convert Wh to kWh
                'profile' => '~Electricity',
                'archive' => 1 // archive: counter
            ],
    
            30531 => [
                'name' => 'Total yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'kWh.Fixed',
                'archive' => 1 // archive: counter
            ],
            /* 30769 => [
                'name' => 'DC current input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ], */
            /* 30771 => [
                'name' => 'DC voltage input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ], */
            /* 30773 => [
                'name' => 'DC power input',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ], */
            30775 => [
                'name' => 'AC active power across all phases',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt',
                'archive' => 0 // archive: default
            ],
            /* 30789 => [
                'name' => 'Grid voltage phase AB',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ], */
            /* 30791 => [
                'name' => 'Grid voltage phase BC',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ], */
            /*30793 => [
                'name' => 'Grid voltage phase CA',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],*/
            /*30795 => [
                'name' => 'Grid current',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],*/
            /*30803 => [
                'name' => 'Power frequency',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Hertz'
            ],*/
            /*
            34109 => [
                'name' => 'Heat sink temperature',
                'count' => 2,
                'type' => 'S32',
                'format' => 'TEMP',
                'profile' => '~Temperature'
            ],
            34113 => [
                'name' => 'Interior temperature',
                'count' => 2,
                'type' => 'S32',
                'format' => 'TEMP',
                'profile' => '~Temperature'
            ],
            34125 => [
                'name' => 'External temperature',
                'count' => 2,
                'type' => 'S32',
                'format' => 'TEMP',
                'profile' => '~Temperature'
            ],
            */
            /**
             * Sunny Tripower
             */
            /*30777 => [
                'name' => 'Power L1',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ], */
            /* 30779 => [
                'name' => 'Power L2',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ], */
            /* 30781 => [
                'name' => 'Power L3',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ], */
            /* 30783 => [
                'name' => 'Grid Voltage phase L1',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ], */
            /* 30785 => [
                'name' => 'Grid Voltage phase L2',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ], */
            /* 30787 => [
                'name' => 'Grid Voltage phase L3',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ], */
            /*30797 => [
                'name' => 'Grid current phase L1',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ], */
            /*30799 => [
                'name' => 'Grid current phase L2',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],*/
            /*30801 => [
                'name' => 'Grid current phase L3',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Ampere'
            ],*/

            /**
             * Sunny Island
             */
            /* 30061 => [
                'name' => 'Firmware',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FW',
            ],*/
            /* 31265 => [
                'name' => 'Leistung Netzbezug Phase L1',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Watt'
            ], */
             /* 31267 => [
                'name' => 'Leistung Netzbezug Phase L2',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Watt'
            ],  */
             /*31269 => [
                'name' => 'Leistung Netzbezug Phase L3',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Watt'
            ],  */
            /* 31259 => [
                'name' => 'Leistung Netzeinspeisung Phase L1',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Watt'
            ],  */
             /* 31261 => [
                'name' => 'Leistung Netzeinspeisung Phase L2',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Watt'
            ], */
             /* 31263 => [
                'name' => 'Leistung Netzeinspeisung Phase L3',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Watt'
            ], */
            30581 => [
                'name' => 'Grid reference counter reading',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Electricity'
            ],
            30583 => [
                'name' => 'Grid feed-in counter reading',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX3',
                'profile' => '~Electricity'
            ],

//BATTERIE
            30845 => [
                'name' => 'Current battery charge status',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW',
                'profile' => '~Battery.100'
            ],
            30849 => [
                'name' => 'Battery temperature',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX1',
                'profile' => '~Temperature'
            ],
            30851 => [
                'name' => 'Battery voltage',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX2',
                'profile' => '~Volt'
            ],
            31393 => [
                'name' => 'Momentane Batterieladung',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Watt'
            ],
            31395 => [
                'name' => 'Momentane Batterieentladung',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Watt'
            ]
        ],
    ];

    /**
     * adresses for high frequent values
     */
    const current_addresses = [
        'default' => [
            30775 => [
                'name' => 'AC active power across all phases',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt'
            ],
                30861 => [
                'name' => 'Momentane Batterieladung',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Watt'
            ],
            31395 => [
                'name' => 'Momentane Batterieentladung',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => '~Watt'
            ]
        ],
    ];
}
