<?php

$config = [
    'pelanggan.add' => [
        [
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'telp',
            'label' => 'No Telepon',
            'rules' => 'trim|required|is_numeric|max_length[13]'
        ],
        [
            'field' => 'ktp',
            'label' => 'No Ktp',
            'rules' => 'trim|required|is_numeric|max_length[16]|is_unique[pelanggan.no_ktp]'
        ],
        [
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'trim|required'        
        ]
    ],
    'pelanggan.edit' => [
        [
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'telp',
            'label' => 'No Telepon',
            'rules' => 'trim|required|is_numeric|max_length[13]'
        ],
        [
            'field' => 'ktp',
            'label' => 'No Ktp',
            'rules' => 'trim|required|is_numeric|max_length[16]|callback_no_ktp_check'
        ],
        [
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'trim|required'        
        ]
    ],
    'deposit.add' => [
        [
            'field' => 'pelanggan',
            'label' => 'Nama',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'jumlah',
            'label' => 'Jumlah Deposit',
            'rules' => 'trim|required'
        ]
    ],
    'deposit.edit' => [
        [
            'field' => 'pelanggan',
            'label' => 'Nama',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'jumlah',
            'label' => 'Jumlah Depsit',
            'rules' => 'trim|required'
        ]
    ],
    'pemasangan.add_pemasangan' => [
        [
            'field' => 'nama',
            'label' => 'Nama',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'telp',
            'label' => 'No Telepon',
            'rules' => 'trim|required|is_numeric|max_length[13]'
        ],
        [
            'field' => 'ktp',
            'label' => 'No Ktp',
            'rules' => 'trim|required|is_numeric|max_length[16]' 
        ],
        [
            'field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'tarif',
            'label' => 'Tarif',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'tanggal',
            'label' => 'Tanggal Pemasangan',
            'rules' => 'trim|required'
        ],
        [
            'field' => 'alamat_pemasangan',
            'label' => 'Alamat Pemasangan',
            'rules' => 'trim|required'
        ]
    ] 
];