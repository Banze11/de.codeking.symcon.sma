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
                'format' => 'FIX0', // convert Wh to kWh
                'profile' => '~Electricity',
                'archive' => 1 // archive: counter
            ],
            30531 => [
                'name' => 'Total yield',
                'count' => 2,
                'type' => 'U32',
                'format' => 'FIX0',
                'profile' => 'kWatt_ohne_Nachkomma',
                'archive' => 1 // archive: counter
            ],
            30775 => [
                'name' => 'AC active power across all phases',
                'count' => 2,
                'type' => 'S32',
                'format' => 'FIX0',
                'profile' => 'Watt',
                'archive' => 0 // archive: default
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
            30845 => [
                'name' => 'Current battery charge status',
                'count' => 2,
                'type' => 'U32',
                'format' => 'RAW',
                'profile' => '~Battery.100'
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
}
